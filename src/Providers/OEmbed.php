<?php

namespace Embed\Providers;

use Embed\Request;
use Embed\Utils;

/**
 * Generic oembed provider.
 *
 * Load the oembed data of an url and store it
 */
class OEmbed extends Provider implements ProviderInterface
{
    protected $config = [
        'parameters' => [],
        'embedlyKey' => null,
        'iframelyKey' => null,
    ];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $endPoint = null;
        $params = $this->config['parameters'];

        if (self::providerEmbedInDomIsBroken($this->request) || (!($html = $this->request->getHtmlContent()) || !($endPoint = self::getEndPointFromDom($html)))) {
            if (($info = self::getEndPointFromRequest($this->request, $this->config))) {
                $endPoint = $info['endPoint'];
                $params += $info['params'];
            }
        }

        if (!$endPoint) {
            return;
        }

        $endPointRequest = $this->request
            ->withUrl($endPoint)
            ->withAddedQueryParameters($params);

        if (!$endPointRequest->hasQueryParameter('url')) {
            $endPointRequest = $endPointRequest->withQueryParameter('url', $this->request->getUrl());
        }

        // extract from xml
        if (($endPointRequest->getExtension() === 'xml') || ($endPointRequest->getQueryParameter('format') === 'xml')) {
            if ($parameters = $endPointRequest->getXmlContent()) {
                foreach ($parameters as $element) {
                    $content = trim((string) $element);

                    if (stripos($content, '<![CDATA[') === 0) {
                        $content = substr($content, 9, -3);
                    }

                    $this->bag->set($element->getName(), $content);
                }
            }
        // extract from json
        } else {
            $endPointRequest = $endPointRequest->withQueryParameter('format', 'json');

            if (($parameters = $endPointRequest->getJsonContent()) && empty($parameters['Error'])) {
                $this->bag->set($parameters);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('title');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->bag->get('description');
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $type = $this->bag->get('type');

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case 'video':
            case 'photo':
            case 'link':
            case 'rich':
                return $type;

            case 'movie':
                return 'video';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        if ($this->bag->has('meta[keywords]')) {
            //it means we are using iframe.ly api
            return array_map('trim', explode(',', $this->bag->get('meta[keywords]')));
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->bag->get('html');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        if ($this->getType() === 'photo') {
            return $this->bag->get('web_page');
        }

        return $this->bag->get('url') ?: $this->bag->get('web_page');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('author_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->bag->get('author_url');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return $this->bag->get('provider_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return $this->bag->get('provider_url');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        if ($this->getType() === 'photo') {
            $images[] = $this->bag->get('url');
        }

        foreach (['image', 'thumbnail', 'thumbnail_url'] as $type) {
            if ($this->bag->has($type)) {
                $ret = $this->bag->get($type);
                if (is_array($ret)) {
                    $images = array_merge($images, $ret);
                } else {
                    $images[] = $ret;
                }
            }
        }

        return $images;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->bag->get('width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->bag->get('height');
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        return $this->bag->get('license_url');
    }

    /**
     * Extract oembed information from the <link rel="alternate"> elements
     * Note: Some sites use <meta rel="alternate"> instead.
     *
     * @param \DOMDocument $html
     *
     * @return string|null
     */
    protected static function getEndPointFromDom(\DOMDocument $html)
    {
        foreach (['link', 'meta'] as $tagName) {
            foreach (Utils::getLinks($html, $tagName) as $link) {
                list($rel, $href, $element) = $link;

                if (empty($href)) {
                    continue;
                }

                if ($rel === 'alternate') {
                    switch (strtolower($element->getAttribute('type'))) {
                        case 'application/json+oembed':
                        case 'application/xml+oembed':
                        case 'text/json+oembed':
                        case 'text/xml+oembed':
                            return $href;
                    }
                }
            }
        }
    }

    /**
     * Returns the oembed link from the request.
     *
     * @param Request $request
     * @param array   $config
     *
     * @return array|null
     */
    protected static function getEndPointFromRequest(Request $request, array $config)
    {
        //Search the oembed provider using the domain
        $class = self::getClassFromRequest($request);

        if (class_exists($class) && $request->match($class::getPatterns())) {
            return [
                'endPoint' => $class::getEndpoint($request),
                'params' => $class::getParams($request),
            ];
        }

        //Search using embedly
        if (!empty($config['embedlyKey']) && $request->match(OEmbed\Embedly::getPatterns())) {
            return [
                'endPoint' => OEmbed\Embedly::getEndpoint($request),
                'params' => OEmbed\Embedly::getParams($request) + ['key' => $config['embedlyKey']],
            ];
        }

        //Search using iframely
        if (!empty($config['iframelyKey']) && $request->match(OEmbed\Iframely::getPatterns())) {
            return [
                'endPoint' => OEmbed\Iframely::getEndpoint($request),
                'params' => OEmbed\Iframely::getParams($request) + ['api_key' => $config['iframelyKey']],
            ];
        }
    }

    /**
     * Return the class name implementing an oEmbed provider.
     *
     * @param Request $request
     *
     * @return string
     */
    protected static function getClassFromRequest(Request $request)
    {
        return 'Embed\\Providers\\OEmbed\\'.$request->getClassNameForDomain();
    }

    /**
     * @param Request $request
     *
     * @return bool
     */
    protected static function providerEmbedInDomIsBroken(Request $request)
    {
        $class = self::getClassFromRequest($request);

        if (class_exists($class) && $request->match($class::getPatterns())) {
            return $class::embedInDomIsBroken();
        }

        // Fall-through default in case this called for an invalid class
        return false;
    }
}

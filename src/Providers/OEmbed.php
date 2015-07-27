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
    ];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $endPoint = null;
        $params = $this->config['parameters'];

        if (($info = self::getEndPointFromRequest($this->request, $this->config))) {
            $endPoint = $info['endPoint'];
            $params += $info['params'];
        } else if ($html = $this->request->getHtmlContent()) {
            $endPoint = self::getEndPointFromDom($html);
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
                    $this->bag->set($element->getName(), (string) $element);
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

        if ($this->bag->has('image')) {
            $images[] = $this->bag->get('image');
        }

        if ($this->bag->has('thumbnail')) {
            $images[] = $this->bag->get('thumbnail');
        }

        if ($this->bag->has('thumbnail_url')) {
            $images[] = $this->bag->get('thumbnail_url');
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
     * Extract oembed information from the <link rel="alternate"> elements
     * Note: Some sites use <meta rel="alternate"> instead
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
     * Returns the oembed link from the request
     *
     * @param Request $request
     * @param array   $config
     *
     * @return array|null
     */
    protected static function getEndPointFromRequest(Request $request, array $config)
    {
        //Search the oembed provider using the domain
        $class = 'Embed\\Providers\\OEmbed\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $request->getDomain()))));

        if (class_exists($class) && $request->match($class::getPatterns())) {
            return [
                'endPoint' => $class::getEndpoint(),
                'params' => $class::getParams($request),
            ];
        }

        //Search using embedly
        if (!empty($config['embedlyKey']) && $request->match(OEmbed\Embedly::getPatterns())) {
            return [
                'endPoint' => OEmbed\Embedly::getEndpoint(),
                'params' => OEmbed\Embedly::getParams($request) + ['key' => $config['embedlyKey']],
            ];
        }
    }
}

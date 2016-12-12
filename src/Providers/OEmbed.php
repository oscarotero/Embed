<?php

namespace Embed\Providers;

use Embed\Embed;
use Embed\Adapters\AdapterInterface;
use Embed\Http\Response;
use Embed\Http\Uri;

/**
 * Generic oembed provider.
 *
 * Load the oembed data of an url and store it
 */
class OEmbed extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $endPoint = $this->getEndPoint();

        if ($endPoint) {
            Embed::log('info', 'Oembed endpoint', ['url' => $endPoint]);
            $request = $adapter->createRequest($endPoint);
            $this->extractOembed($request->getResponse());
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
     * @return Uri|null
     */
    private function getEndPoint()
    {
        //Search using the domain
        $class = 'Embed\\Providers\\OEmbed\\'.$this->adapter->getResponse()->getUri()->getClassNameForDomain();
        $extraParameters = $this->adapter->getConfig('oembed[parameters]', []);

        if (class_exists($class)) {
            $endPoint = $class::create($this->adapter);

            if ($endPoint && ($uri = $endPoint->getEndPoint())) {
                return $uri->withAddedQueryParameters($extraParameters);
            }
        }

        //Search in the DOM
        $endPoint = OEmbed\DOM::create($this->adapter);

        if ($endPoint && ($uri = $endPoint->getEndPoint())) {
            return $uri->withAddedQueryParameters($extraParameters);
        }

        //Try with embedly
        $endPoint = OEmbed\Embedly::create($this->adapter);

        if ($endPoint && ($uri = $endPoint->getEndPoint())) {
            return $uri->withAddedQueryParameters($extraParameters);
        }

        //Try with iframely
        $endPoint = OEmbed\Iframely::create($this->adapter);

        if ($endPoint && ($uri = $endPoint->getEndPoint())) {
            return $uri->withAddedQueryParameters($extraParameters);
        }
    }

    /**
     * Save the oembed data in the bag.
     *
     * @param Response $response
     */
    private function extractOembed(Response $response)
    {
        // extract from xml
        if (($response->getUri()->getExtension() === 'xml') || ($response->getUri()->getQueryParameter('format') === 'xml')) {
            if ($xml = $response->getXmlContent()) {
                foreach ($xml as $element) {
                    $content = trim((string) $element);

                    if (stripos($content, '<![CDATA[') === 0) {
                        $content = substr($content, 9, -3);
                    }

                    $this->bag->set($element->getName(), $content);
                }
            } else {
                Embed::log('error', 'Oembed endpoint fail', ['url' => $response->getUri(), 'response' => $xml]);
            }
        // extract from json
        } else {
            if (($json = $response->getJsonContent()) && empty($json['Error'])) {
                $this->bag->set($json);
            } else {
                Embed::log('error', 'Oembed endpoint fail', ['url' => $response->getUri(), 'response' => $json]);
            }
        }
    }
}

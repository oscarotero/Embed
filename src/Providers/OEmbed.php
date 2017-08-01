<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;
use Embed\Http\Response;
use Embed\Http\Url;

/**
 * Provider to get the data using the oEmbed API
 */
class OEmbed extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        $endPoint = $this->getEndPoint();

        if ($endPoint) {
            $this->extractOembed($adapter->getDispatcher()->dispatch($endPoint));
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
        return $this->bag->get('html', true);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        if ($this->getType() === 'photo') {
            return $this->normalizeUrl($this->bag->get('web_page'));
        }

        return $this->normalizeUrl($this->bag->get('url') ?: $this->bag->get('web_page'));
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
        return $this->normalizeUrl($this->bag->get('author_url'));
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
        return $this->normalizeUrl($this->bag->get('provider_url'));
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

        return $this->normalizeUrls($images);
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
     * @return Url|null
     */
    private function getEndPoint()
    {
        //Search using the domain
        $class = 'Embed\\Providers\\OEmbed\\'.$this->adapter->getResponse()->getUrl()->getClassNameForDomain();
        $extraParameters = (array) $this->adapter->getConfig('oembed[parameters]');

        if (class_exists($class)) {
            $endPoint = $class::create($this->adapter);

            if ($endPoint && ($url = $endPoint->getEndPoint())) {
                return $url->withAddedQueryParameters($extraParameters);
            }
        }

        //Search in the DOM
        $endPoint = OEmbed\DOM::create($this->adapter);

        if ($endPoint && ($url = $endPoint->getEndPoint())) {
            return $url->withAddedQueryParameters($extraParameters);
        }

        //Try with embedly
        $endPoint = OEmbed\Embedly::create($this->adapter);

        if ($endPoint && ($url = $endPoint->getEndPoint())) {
            return $url->withAddedQueryParameters($extraParameters);
        }

        //Try with iframely
        $endPoint = OEmbed\Iframely::create($this->adapter);

        if ($endPoint && ($url = $endPoint->getEndPoint())) {
            return $url->withAddedQueryParameters($extraParameters);
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
        if (($response->getUrl()->getExtension() === 'xml') || ($response->getUrl()->getQueryParameter('format') === 'xml')) {
            if ($xml = $response->getXmlContent()) {
                foreach ($xml as $element) {
                    $content = trim((string) $element);

                    if (stripos($content, '<![CDATA[') === 0) {
                        $content = substr($content, 9, -3);
                    }

                    $this->bag->set($element->getName(), $content);
                }
            }
            // extract from json
        } else {
            if (($json = $response->getJsonContent()) && empty($json['Error'])) {
                $this->bag->set($json);
            }
        }
    }
}

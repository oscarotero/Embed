<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;
use Embed\Utils;

/**
 * Provider to get the data from the Twitter Cards elements in the HTML
 */
class TwitterCards extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        if (!($html = $adapter->getResponse()->getHtmlContent())) {
            return;
        }

        foreach ($html->getElementsByTagName('meta') as $meta) {
            $name = trim(strtolower($meta->getAttribute('name') ?: $meta->getAttribute('property')));
            $value = $meta->getAttribute('content') ?: $meta->getAttribute('value');

            if (empty($name) || empty($value)) {
                continue;
            }

            if (strpos($name, 'twitter:') === 0) {
                $name = substr($name, 8);

                if ($name === 'image' || $name === 'image:src') {
                    $this->bag->add('images', $value);
                } else {
                    $this->bag->set($name, $value);
                }
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
        $type = $this->bag->get('card');

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case 'summary':
            case 'summary_large_image':
            case 'app':
                return 'rich';
            case 'player':
                return 'video';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $src = $this->normalizeUrl($this->bag->get('player'));

        if ($src !== null) {
            return Utils::iframe($src, $this->getWidth(), $this->getHeight());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->normalizeUrl($this->bag->get('url'));
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('creator');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        $author = $this->getAuthorName();

        if (!empty($author)) {
            return 'https://twitter.com/'.ltrim($author, '@');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return $this->normalizeUrls($this->bag->get('images'));
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return (int) $this->bag->get('player:width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return (int) $this->bag->get('player:height');
    }
}

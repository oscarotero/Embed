<?php

namespace Embed\Providers;

use Embed\Adapters\AdapterInterface;
use Embed\Utils;

/**
 * Generic twitter cards provider.
 *
 * Load the twitter cards data of an url and store it
 */
class TwitterCards extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        if (!($html = $adapter->getResponse()->getHtmlContent())) {
            return;
        }

        foreach ($html->getElementsByTagName('meta') as $meta) {
            $name = trim(strtolower($meta->getAttribute('name')));
            $value = $meta->getAttribute('content');

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
            case 'video':
            case 'photo':
            case 'link':
            case 'rich':
                return $type;

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

        if ($src !== false) {
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
    public function getImagesUrls()
    {
        return $this->normalizeUrls($this->bag->get('images'));
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->bag->get('player:width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->bag->get('player:height');
    }
}

<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;
use Embed\Utils;

/**
 * Provider to get the data from the Open Graph elements in the HTML
 */
class OpenGraph extends Provider
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
            $name = trim(strtolower($meta->getAttribute('property')));
            $value = $meta->getAttribute('content');

            if (empty($name)) {
                $name = trim(strtolower($meta->getAttribute('name')));
            }

            if (empty($name) || empty($value)) {
                continue;
            }

            if (strpos($name, 'og:') === 0) {
                $name = substr($name, 3);
            } elseif (
                    strpos($name, 'article:') !== 0
                 && strpos($name, 'image:') !== 0
                 && strpos($name, 'video:') !== 0
                 && strpos($name, 'book:') !== 0
                 && strpos($name, 'music:') !== 0
                 && strpos($name, 'profile:') !== 0
            ) {
                continue;
            }


            switch ($name) {
                case 'image':
                case 'image:url':
                case 'image:secure_url':
                    $this->bag->add('images', $value);
                    break;

                case 'article:tag':
                case 'video:tag':
                case 'book:tag':
                    $this->bag->add('tags', $value);
                    break;
                
                default:
                    $this->bag->set($name, $value);
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

            case 'article':
                return 'link';
        }

        if ($this->bag->has('video')) {
            return 'video';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $names = ['video:secure_url', 'video:url', 'video'];

        foreach ($names as $name) {
            if ($this->bag->has($name)) {
                $video = $this->normalizeUrl($this->bag->get($name));

                if (!($videoPath = parse_url($video, PHP_URL_PATH)) || !($type = pathinfo($videoPath, PATHINFO_EXTENSION))) {
                    $type = $this->bag->get('video:type');
                }

                switch ($type) {
                    case 'swf':
                    case 'application/x-shockwave-flash':
                        return Utils::flash($video, $this->getWidth(), $this->getHeight());

                    case 'mp4':
                    case 'ogg':
                    case 'ogv':
                    case 'webm':
                    case 'application/mp4':
                    case 'video/mp4':
                    case 'video/ogg':
                    case 'video/ogv':
                    case 'video/webm':
                        $images = $this->getImagesUrls();

                        return Utils::videoHtml(current($images), $video, $this->getWidth(), $this->getHeight());

                    case 'text/html':
                        return Utils::iframe($video, $this->getWidth(), $this->getHeight());
                }
            }
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
    public function getTags()
    {
        return (array) $this->bag->get('tags') ?: [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('article:author') ?: $this->bag->get('book:author');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return $this->bag->get('site_name');
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
        return $this->bag->get('image:width') ?: $this->bag->get('video:width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->bag->get('image:height') ?: $this->bag->get('video:height');
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->bag->get('article:published_time')
            ?: $this->bag->get('article:modified_time')
            ?: $this->bag->get('video:release_date')
            ?: $this->bag->get('music:release_date');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return $this->bag->get('website');
    }
}

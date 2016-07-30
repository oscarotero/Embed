<?php

namespace Embed\Providers;

use Embed\Utils;

/**
 * Generic opengraph provider.
 *
 * Load the opengraph data of an url and store it
 */
class OpenGraph extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!($html = $this->request->getHtmlContent())) {
            return false;
        }

        foreach (Utils::getMetas($html) as $meta) {
            list($name, $value) = $meta;

            if (strpos($name, 'og:article:') === 0) {
                $name = substr($name, 11);
            } elseif (strpos($name, 'og:') === 0) {
                $name = substr($name, 3);
            } else {
                continue;
            }

            if ($name === 'image') {
                $this->bag->add('images', $value);
            } elseif (strpos($name, ':tag') !== false) {
                $this->bag->add('tags', $value);
            } else {
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
                $video = $this->bag->get($name);

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
        $url = $this->bag->get('url');

        if ($url !== $this->request->getAbsolute('/')) {
            return $url;
        }
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
        return $this->bag->get('author');
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
        return (array) $this->bag->get('images') ?: [];
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
        return $this->bag->get('published_time') ?: $this->bag->get('updated_time');
    }
}

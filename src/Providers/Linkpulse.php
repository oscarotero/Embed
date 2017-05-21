<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;
use Embed\Utils;

/**
 * Provider to get the data from the Linkpulse elements in the HTML
 * http://docs.linkpulse.com/docs/opengraph/
 */
class Linkpulse extends Provider
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

            if (strpos($name, 'lp:') === 0) {
                $name = substr($name, 3);
            } elseif (strpos($name, 'lp.article:') !== 0) {
                continue;
            }

            $this->bag->set($name, $value);
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
    public function getUrl()
    {
        $url = $this->normalizeUrl($this->bag->get('url'));

        if ($url !== $this->adapter->getResponse()->getUrl()->getAbsolute('/')) {
            return $url;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        return (array) $this->bag->get('article.section') ?: [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('article.author');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return $this->normalizeUrls((array) $this->bag->get('image'));
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->bag->get('article.published_time')
            ?: $this->bag->get('article.modified_time');
    }
}

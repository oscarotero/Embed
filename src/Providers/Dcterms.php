<?php

namespace Embed\Providers;

use Embed\Utils;

/**
 * Generic Dublin Core provider.
 *
 * Load the Dublin Core data of an url and store it
 */
class Dcterms extends Provider implements ProviderInterface
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
            foreach (['dc.', 'dc:', 'dcterms:'] as $prefix) {
                if (stripos($meta[0], $prefix) === 0) {
                    $key = substr($meta[0], strlen($prefix));
                    $this->bag->set($key, $meta[1]);
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
    public function getAuthorName()
    {
        return $this->bag->get('creator') ?: $this->bag->get('author');
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        foreach (['date', 'date.created', 'date.issued'] as $key) {
            if ($found = $this->bag->get($key)) {
                return $found;
            }
        }
    }
}

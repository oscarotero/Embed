<?php

namespace Embed\Providers;

use Embed\Adapters\Adapter;

/**
 * Provider to get the data from the Dublin Core data elements in the HTML
 */
class Dcterms extends Provider
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
            $name = trim(strtolower($meta->getAttribute('name')));
            $value = $meta->getAttribute('content');

            if (empty($name) || empty($value)) {
                continue;
            }

            foreach (['dc.', 'dc:', 'dcterms:'] as $prefix) {
                if (stripos($name, $prefix) === 0) {
                    $name = substr($name, strlen($prefix));
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

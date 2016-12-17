<?php

namespace Embed\Providers;

use Embed\Adapters\AdapterInterface;

/**
 * Generic Salithru provider.
 *
 * Load the Salithru data of an url and store it
 */
class Sailthru extends Provider implements ProviderInterface
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

            if (strpos($name, 'sailthru.') === 0) {
                $this->bag->set(substr($name, 9), $value);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = [];

        foreach ($this->bag->getKeys() as $name) {
            if (strpos($name, 'image') !== false) {
                $images[] = $this->bag->get($value);
            }
        }

        return $this->normalizeUrls($images);
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
    public function getPublishedTime()
    {
        return $this->bag->get('date');
    }
}

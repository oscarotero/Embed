<?php
namespace Embed\Providers;

use Embed\Request;
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
            if (stripos($meta[0], 'dc.') === 0) {
                $this->bag->set(substr($meta[0], 3), $meta[1]);
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

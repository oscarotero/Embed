<?php
namespace Embed\Providers;

use Embed\Request;
use Embed\Utils;

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
    public function init(Request $request, array $options)
    {
        if (!($html = $request->getHtmlContent())) {
            return false;
        }

        foreach (Utils::getMetas($html) as $meta) {
            list($name, $value) = $meta;

            if (strpos($name, 'sailthru.') === 0) {
                $this->bag->set(substr($name, 9), $value);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = array();

        foreach ($this->bag->get() as $name => $value) {
            if (strpos($name, 'image') !== false) {
                $images[] = $value;
            }
        }

        return $images;
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
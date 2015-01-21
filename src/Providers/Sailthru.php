<?php
/**
 * Generic Salithru provider.
 * Load the Salithru data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;

class Sailthru extends Provider
{
    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        if (!($html = $request->getHtmlContent())) {
            return false;
        }

        foreach ($html->getElementsByTagName('meta') as $meta) {
            if ($meta->hasAttribute('name') && (stripos($meta->getAttribute('name'), 'sailthru.') === 0)) {
                $this->set(strtolower(substr($meta->getAttribute('name'), 9)), $meta->getAttribute('content'));
            }
        }
    }

    /**
     * Gets the article publication date
     *
     * @return string|null
     */
    public function getPublishedTime()
    {
        return $this->get('date');
    }
}
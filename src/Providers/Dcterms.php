<?php
/**
 * Generic Dublin Core provider.
 * Load the Dublin Core data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;

class Dcterms extends Provider
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
            if ($meta->hasAttribute('name') && (stripos($meta->getAttribute('name'), 'dc.') === 0)) {
                $this->set(strtolower(substr($meta->getAttribute('name'), 3)), $meta->getAttribute('content'));
            }
        }
    }

    /**
     * Gets the title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * Gets the description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * Gets the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->get('author');
    }
}

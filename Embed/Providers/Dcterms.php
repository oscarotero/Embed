<?php
/**
 * Generic Dublin Core provider.
 * Load the Dublin Core data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;

class Dcterms extends Provider
{
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

    public function getTitle()
    {
        return $this->get('title');
    }

    public function getDescription()
    {
        return $this->get('description');
    }

    public function getAuthorName()
    {
        return $this->get('author');
    }
}

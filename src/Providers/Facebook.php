<?php
/**
 * Provide information from Facebook Graph API.
 */
namespace Embed\Providers;

use Embed\Request;

class Facebook extends Provider
{
    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $graph = $request->createRequest('https://graph.facebook.com/fql');
        $graph->url->setParameter('q', 'SELECT comments_fbid FROM link_stat WHERE url = "'.$request->url->getUrl().'"');

        if ($graph->isValid() && ($info = $graph->getJsonContent()) && isset($info['data'][0]['comments_fbid'])) {
            $graph = $request->createRequest('https://graph.facebook.com/'.$info['data'][0]['comments_fbid']);

            if ($json = $graph->getJsonContent()) {
                $this->set($json);
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
        $title = $this->get('title');

        if (strpos($title, '://') === false) {
            return $title;
        }
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
     * Gets the type
     *
     * @return string|null
     */
    public function getType()
    {
        switch ($this->get('type')) {
            case 'article':
                return 'link';
        }
    }

    /**
     * Gets the image
     *
     * @return string|null
     */
    public function getImage()
    {
        if (($imgs = $this->get('image')) && isset($imgs[0]['url'])) {
            return $imgs[0]['url'];
        }
    }

    /**
     * Gets the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        $author = $this->get('data', 'author') ?: $this->get('admins');

        if (isset($author[0]['name'])) {
            return $author[0]['name'];
        }
    }

    /**
     * Gets the author url
     *
     * @return string|null
     */
    public function getAuthorUrl()
    {
        $author = $this->get('data', 'author') ?: $this->get('admins');

        if (isset($author[0]['url'])) {
            return $author[0]['url'];
        }
    }

    /**
     * Gets the provider name
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->get('site_name');
    }
}

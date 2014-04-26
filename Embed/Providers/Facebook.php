<?php
/**
 * Provide information from Facebook Graph API.
 */
namespace Embed\Providers;

use Embed\Request;

class Facebook extends Provider
{
    private $init = false;
    private $url;


    /**
     * Constructor
     * 
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->url = $request->getUrl();
    }


    /**
     * Init the facebook request data (call only on demand)
     */
    private function init()
    {
        $this->init = true;

        $graph = new Request('https://graph.facebook.com/fql');
        $graph->setParameter('q', 'SELECT comments_fbid FROM link_stat WHERE url = "'.$this->url.'"');

        if (!$graph->isValid()) {
            return false;
        }

        if (($info = $graph->getJsonContent()) && isset($info['data'][0]['comments_fbid'])) {
            $graph = new Request('https://graph.facebook.com/'.$info['data'][0]['comments_fbid']);

            if ($json = $graph->getJsonContent()) {
                $this->set($json);
            }
        }
    }


    /**
     * {@inheritDoc}
     */
    public function get($name = null, $subname = null)
    {
        if ($this->init === false) {
            $this->init();
        }

        return parent::get($name, $subname);
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

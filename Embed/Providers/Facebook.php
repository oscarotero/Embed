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

    public function __construct(Request $request)
    {
        $this->url = $request->getUrl();
    }

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

    public function get($name = null, $subname = null)
    {
        if ($this->init === false) {
            $this->init();
        }

        return parent::get($name, $subname);
    }

    public function getTitle()
    {
        $title = $this->get('title');

        if (strpos($title, '://') === false) {
            return $title;
        }
    }

    public function getDescription()
    {
        return $this->get('description');
    }

    public function getType()
    {
        switch ($this->get('type')) {
            case 'article':
                return 'link';
        }
    }

    public function getImage()
    {
        if (($imgs = $this->get('image')) && isset($imgs[0]['url'])) {
            return $imgs[0]['url'];
        }
    }

    public function getAuthorName()
    {
        $author = $this->get('data', 'author') ?: $this->get('admins');

        if (isset($author[0]['name'])) {
            return $author[0]['name'];
        }
    }

    public function getAuthorUrl()
    {
        $author = $this->get('data', 'author') ?: $this->get('admins');

        if (isset($author[0]['url'])) {
            return $author[0]['url'];
        }
    }

    public function getProviderName()
    {
        return $this->get('site_name');

    }
}

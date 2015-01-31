<?php
namespace Embed\Providers;

use Embed\Request;

/**
 * Provide information from Facebook Graph API.
 */
class Facebook extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $graph = $this->request->createRequest('https://graph.facebook.com/fql');
        $graph->url->setParameter('q', 'SELECT comments_fbid FROM link_stat WHERE url = "'.$this->request->url->getUrl().'"');

        if ($graph->isValid() && ($info = $graph->getJsonContent()) && isset($info['data'][0]['comments_fbid'])) {
            $graph = $this->request->createRequest('https://graph.facebook.com/'.$info['data'][0]['comments_fbid']);

            if ($json = $graph->getJsonContent()) {
                $this->bag->set($json);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $title = $this->bag->get('title');

        //Sometimes, facebook returns the url as title.
        if (strpos($title, '://') === false) {
            return $title;
        }
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
    public function getType()
    {
        switch ($this->bag->get('type')) {
            case 'article':
                return 'link';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = [];

        if (is_array($imgs = $this->bag->get('image'))) {
            foreach ($imgs as $img) {
                $images[] = $img['url'];
            }
        }

        return $images;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        $author = $this->bag->get('data', 'author') ?: $this->bag->get('admins');

        if (isset($author[0]['name'])) {
            return $author[0]['name'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        $author = $this->bag->get('data', 'author') ?: $this->bag->get('admins');

        if (isset($author[0]['url'])) {
            return $author[0]['url'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return $this->bag->get('site_name');
    }
}

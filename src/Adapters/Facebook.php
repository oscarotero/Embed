<?php
/**
 * Adapter to provide information from any facebook page using its graph API
 */
namespace Embed\Adapters;

use Embed\Bag;
use Embed\Request;
use Embed\Url;

class Facebook extends Webpage implements AdapterInterface
{
    public $api;

    private $isPost = false;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://www.facebook.com/*',
        ]);
    }

    /**
     * Returns the id found in an facebook url
     *
     * @param Url $url
     *
     * @return null|string
     */
    private function getId(Url $url)
    {
        if ($url->hasParameter('story_fbid')) {
            $this->isPost = true;

            return $url->getParameter('story_fbid');
        }

        if ($url->hasParameter('fbid')) {
            return $url->getParameter('fbid');
        }

        if ($url->hasParameter('id')) {
            return $url->getParameter('id');
        }

        if ($url->getDirectory(0) === 'events') {
            return $url->getDirectory(1);
        }

        if ($url->getDirectory(0) === 'pages') {
            return $url->getDirectory(2);
        }

        if ($url->getDirectory(1) === 'posts') {
            $this->isPost = true;

            return $url->getDirectory(2);
        }

        if ($url->getDirectory(2) === 'posts') {
            $this->isPost = true;

            return $url->getDirectory(3);
        }

        return $url->getDirectory(0);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        $this->api = new Bag();

        if (($id = $this->getId($this->request->startingUrl))) {
            if ($this->config['facebookKey']) {
                $api = $this->request->createRequest('https://graph.facebook.com/'.$id);
                $api->startingUrl->setParameter('access_token', $this->config['facebookKey']);

                if ($json = $api->getJsonContent()) {
                    $this->api->set($json);
                }
            }

            $this->api->set('id', $id);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->api->get('name') ?: parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->api->get('description') ?: $this->api->get('about') ?: parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        if ($this->isPost) {
            return $this->request->startingUrl->getUrl();
        }

        return $this->api->get('url') ?: $this->request->startingUrl->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if ($this->isPost) {
            return <<<EOT
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-post" data-href="{$this->url}" data-width="500"></div>
EOT;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Facebook';
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->api->get('username') ?: parent::getAuthorName();
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        $id = $this->api->get('id');

        if ($id) {
            return 'https://www.facebook.com/feeds/page.php?id='.$id.'&format=rss20';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = parent::getImages();

        $cover = $this->api->get('cover');

        if ($cover && !empty($cover['source'])) {
            array_unshift($images, $cover['source']);
        }

        $id = $this->api->get('id');

        if ($id) {
            array_unshift($images, 'https://graph.facebook.com/'.$id.'/picture');
        }

        return $images;
    }
}

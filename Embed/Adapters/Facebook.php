<?php
/**
 * Adapter to provide information from any facebook page using its graph API
 */
namespace Embed\Adapters;

use Embed\Providers\Provider;
use Embed\Request;
use Embed\Url;

class Facebook extends Webpage implements AdapterInterface
{
    public $api;

    private $isPost = false;

    public static function check(Request $request)
    {
        return $request->match(array(
            'https://www.facebook.com/*'
        ));
    }

    private function getId($url)
    {
        $url = new Url($url);

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
            return $url->getDirectory(2);
        }

        if ($url->getDirectory(2) === 'posts') {
            return $url->getDirectory(3);
        }

        return $url->getDirectory(0);
    }

    protected function initProviders(Request $request)
    {
        parent::initProviders($request);

        $this->api = new Provider();

        if (($id = $this->getId($request->getStartingUrl()))) {
            if ($this->options['facebookAccessToken']) {
                $api = new Request('https://graph.facebook.com/'.$id);
                $api->setParameter('access_token', $this->options['facebookAccessToken']);

                if ($json = $api->getJsonContent()) {
                    $this->api->set($json);
                }
            }

            $this->api->set('id', $id);
        }
    }

    public function getTitle()
    {
        return $this->api->get('name') ?: parent::getTitle();
    }

    public function getDescription()
    {
        return $this->api->get('description') ?: $this->api->get('about') ?: parent::getDescription();
    }

    public function getUrl()
    {
        if ($this->isPost) {
            return $this->request->getStartingUrl();
        }

        return $this->api->get('url') ?: $this->request->getStartingUrl();
    }

    public function getCode()
    {
        if ($this->isPost) {
            return <<<EOT
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/gl_ES/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-post" data-href="{$this->url}" data-width="500"></div>
EOT;
        }
    }

    public function getProviderName()
    {
        return 'Facebook';
    }

    public function getAuthorName()
    {
        return $this->api->get('username') ?: parent::getAuthorName();
    }

    public function getSource()
    {
        $id = $this->api->get('id');

        if ($id) {
            return 'https://www.facebook.com/feeds/page.php?id='.$id.'&format=rss20';
        }
    }

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

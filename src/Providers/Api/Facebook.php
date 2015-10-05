<?php

namespace Embed\Providers\Api;

use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;
use Embed\Url;

/**
 * Provider to use the API of facebook.
 */
class Facebook extends Provider implements ProviderInterface
{
    protected $config = [
        'key' => null,
    ];

    private $isEmbeddable = false;

        /**
         * {@inheritdoc}
         */
        public function run()
        {
            if (($id = $this->getId($this->request))) {
                if ($this->config['key']) {
                    $api = $this->request
                        ->withUrl('https://graph.facebook.com/'.$id)
                        ->withQueryParameter('access_token', $this->config['key']);

                    if ($json = $api->getJsonContent()) {
                        $this->bag->set($json);
                    }
                }

                $this->bag->set('id', $id);
            }
        }

        /**
         * Returns the id found in a facebook url.
         *
         * @param Url $url
         *
         * @return string
         */
        private function getId(Url $url)
        {
            if ($url->hasQueryParameter('story_fbid')) {
                $this->isEmbeddable = true;

                return $url->getQueryParameter('story_fbid');
            }

            if ($url->hasQueryParameter('fbid')) {
                return $url->getQueryParameter('fbid');
            }

            if ($url->hasQueryParameter('id')) {
                return $url->getQueryParameter('id');
            }

            if ($url->getDirectoryPosition(0) === 'events') {
                $this->isEmbeddable = true;

                return $url->getDirectoryPosition(1);
            }

            if ($url->getDirectoryPosition(0) === 'pages') {
                return $url->getDirectoryPosition(2);
            }

            if ($url->getDirectoryPosition(1) === 'posts') {
                $this->isEmbeddable = true;

                return $url->getDirectoryPosition(2);
            }

            if ($url->getDirectoryPosition(2) === 'posts') {
                $this->isEmbeddable = true;

                return $url->getDirectoryPosition(3);
            }

            return $url->getDirectoryPosition(0);
        }

        /**
         * {@inheritdoc}
         */
        public function getTitle()
        {
            return $this->bag->get('name');
        }

        /**
         * {@inheritdoc}
         */
        public function getDescription()
        {
            return $this->bag->get('description') ?: $this->bag->get('about');
        }

        /**
         * {@inheritdoc}
         */
        public function getType()
        {
            if ($this->isEmbeddable) {
                return 'rich';
            }
        }

        /**
         * {@inheritdoc}
         */
        public function getUrl()
        {
            return $this->bag->get('url');
        }

        /**
         * {@inheritdoc}
         */
        public function getCode()
        {
            if ($this->isEmbeddable) {
                $url = $this->getUrl() ?: $this->request->getUrl();
                $width = $this->getWidth();

                return <<<EOT
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-post" data-href="{$url}" data-width="{$width}"></div>
EOT;
            }
        }

        /**
         * {@inheritdoc}
         */
        public function getWidth()
        {
            if ($this->isEmbeddable) {
                return 500;
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
            return $this->bag->get('username');
        }

        /**
         * {@inheritdoc}
         */
        public function getImagesUrls()
        {
            $images = [];

            if (($cover = $this->bag->get('cover[source]'))) {
                $images[] = $cover;
            }

            if (($id = $this->bag->get('id'))) {
                $images[] = 'https://graph.facebook.com/'.$id.'/picture';
            }

            return $images;
        }
}

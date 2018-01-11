<?php

namespace Embed\Providers;

use Embed\Utils;
use Embed\Adapters\Adapter;
use Embed\Http\Url;
use DOMDocument;
use Exception;

/**
 * Provider to get the data from the HTML code
 */
class Html extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        if (!($html = $adapter->getResponse()->getHtmlContent())) {
            return;
        }

        $this->extractLinks($html);
        $this->extractMetas($html);
        $this->extractImages($html);

        //Title
        $title = $html->getElementsByTagName('title');

        if ($title->length) {
            $this->bag->set('title', $title->item(0)->nodeValue);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('title');
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
        return $this->bag->has('video_src') ? 'video' : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        $keywords = $this->bag->get('keywords').','.$this->bag->get('news_keywords');

        return array_filter(
            array_map('trim', explode(',', $keywords)),
            function ($value) {
                return !empty($value) && substr($value, -3) !== '...';
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFeeds()
    {
        return $this->normalizeUrls($this->bag->get('feeds'));
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $src = $this->normalizeUrl($this->bag->get('video_src'));

        if ($src !== null) {
            switch ($this->bag->get('video_type')) {
                case 'application/x-shockwave-flash':
                    return Utils::flash($src, $this->getWidth(), $this->getHeight());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->normalizeUrl($this->bag->get('canonical'));
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('author') ?: $this->bag->get('article:author') ?: $this->bag->get('contributors');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        return $this->normalizeUrls($this->bag->get('icons'));
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = $this->normalizeUrls($this->bag->get('images'));

        if (!empty($images)) {
            $maxImages = $this->adapter->getConfig('html[max_images]', -1);

            if ($maxImages > -1) {
                return array_slice($images, 0, $maxImages);
            }
        }

        return $images;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return ((int) $this->bag->get('video_width')) ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return ((int) $this->bag->get('video_height')) ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        $keys = [
            'article:published_time',
            'created',
            'date',
            'datepublished',
            'datePublished',
            'newsrepublic:publish_date',
            'pagerender',
            'pub_date',
            'publication-date',
            'publish-date',
            'rc.datecreation',
            'timestamp',
            'article:modified_time',
            'eomportal-lastupdate',
            'shareaholic:article_published_time',
        ];

        foreach ($keys as $key) {
            if ($found = $this->bag->get($key)) {
                return $found;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        return $this->bag->get('copyright');
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedData()
    {
        $data = [];

        if (!($html = $this->adapter->getResponse()->getHtmlContent())) {
            return $data;
        }

        foreach ($html->getElementsByTagName('script') as $script) {
            if ($script->hasAttribute('type') && strtolower($script->getAttribute('type')) === 'application/ld+json') {
                $value = trim($script->nodeValue);

                if (empty($value)) {
                    continue;
                }

                try {
                    $data[] = json_decode($value);
                } catch (Exception $exception) {
                    continue;
                }
            }
        }

        return $data;
    }

    /**
     * Extract information from the <link> elements.
     *
     * @param DOMDocument $html
     */
    private function extractLinks(DOMDocument $html)
    {
        foreach ($html->getElementsByTagName('link') as $link) {
            if ($link->hasAttribute('rel') && $link->hasAttribute('href')) {
                $rel = trim(strtolower($link->getAttribute('rel')));
                $href = $link->getAttribute('href');

                if (empty($href)) {
                    continue;
                }

                switch ($rel) {
                    case 'favicon':
                    case 'favico':
                    case 'icon':
                    case 'shortcut icon':
                    case 'apple-touch-icon-precomposed':
                    case 'apple-touch-icon':
                        $this->bag->add('icons', $href);
                        break;

                    case 'image_src':
                        $this->bag->add('images', $href);
                        break;

                    case 'alternate':
                        switch ($link->getAttribute('type')) {
                            case 'application/atom+xml':
                            case 'application/json':
                            case 'application/rdf+xml':
                            case 'application/rss+xml':
                            case 'application/xml':
                            case 'text/xml':
                                $this->bag->add('feeds', $href);
                                break;
                        }
                        break;

                    default:
                        $this->bag->set($rel, $href);
                }
            }
        }
    }

    /**
     * Extract information from the <meta> elements.
     *
     * @param DOMDocument $html
     */
    private function extractMetas(DOMDocument $html)
    {
        foreach ($html->getElementsByTagName('meta') as $meta) {
            $value = $meta->getAttribute('content');

            if (empty($value)) {
                continue;
            }

            if ($meta->hasAttribute('name')) {
                $name = trim(strtolower($meta->getAttribute('name')));

                switch ($name) {
                    case 'msapplication-tileimage':
                        $this->bag->add('icons', $value);
                        continue 2;

                    default:
                        $this->bag->set($name, $value);
                        continue 2;
                }
            }

            if ($meta->hasAttribute('itemprop')) {
                $this->bag->set($meta->getAttribute('itemprop'), $value);
            }

            if ($meta->hasAttribute('http-equiv')) {
                $this->bag->set($meta->getAttribute('http-equiv'), $value);
            }

            if ($meta->hasAttribute('property')) {
                $this->bag->set($meta->getAttribute('property'), $value);
            }
        }
    }

    /**
     * Extract <img> elements.
     *
     * @param DOMDocument $html
     */
    private function extractImages(DOMDocument $html)
    {
        if ($this->adapter->getConfig('html[max_images]') === 0) {
            return;
        }

        //Extract only from the main element
        $main = self::getMainElement($html);

        if (!$main) {
            return;
        }

        $url = $this->adapter->getResponse()->getUrl();
        $externalImages = $this->adapter->getConfig('html[external_images]');

        foreach ($main->getElementsByTagName('img') as $img) {
            if (!$img->hasAttribute('src')) {
                continue;
            }

            try {
                $src = $url->createAbsolute($img->getAttribute('src'));
            } catch (Exception $exception) {
                continue;
            }

            //Avoid external images
            if (!self::imageIsValid($src, $url, $externalImages)) {
                continue;
            }

            $parent = $img->parentNode;

            //The image is in a link
            while ($parent && isset($parent->tagName)) {
                if ($parent->tagName === 'a') {
                    //The link is external
                    if ($parent->hasAttribute('href')) {
                        try {
                            $href = $url->createAbsolute($parent->getAttribute('href'));
                        } catch (Exception $exception) {
                            continue 2;
                        }

                        if (!self::imageIsValid($href, $url, $externalImages)) {
                            continue 2;
                        }
                    }

                    //The link has rel=nofollow
                    if ($parent->hasAttribute('rel') && (string) $parent->getAttribute('rel') === 'nofollow') {
                        continue 2;
                    }

                    break;
                }

                $parent = $parent->parentNode;
            }

            $this->bag->add('images', (string) $src);
        }
    }

    /**
     * Check whether a image url is valid or not.
     *
     * @param Url   $url
     * @param Url   $baseUrl
     * @param mixed $externalImages
     *
     * @return bool
     */
    private static function imageIsValid(Url $url, Url $baseUrl, $externalImages)
    {
        //base64 or same domain
        if ($url->getContent() !== null || $url->getDomain() === $baseUrl->getDomain()) {
            return true;
        }

        return is_bool($externalImages) ? $externalImages : $url->match($externalImages);
    }

    /**
     * Returns the main element of the document.
     *
     * @param DOMDocument $html
     *
     * @return DOMElement
     */
    private static function getMainElement(DOMDocument $html)
    {
        // <main>
        $content = $html->getElementsByTagName('main');

        if ($content->length !== 0) {
            return $content->item(0);
        }

        // Popular ids: #main, #content, #page
        $content = $html->getElementById('main') ?: $html->getElementById('content') ?: $html->getElementById('page');

        if ($content) {
            return $content;
        }

        // Wordpress ids: #post-*
        foreach ($html->getElementsByTagName('article') as $article) {
            if ($article->hasAttribute('id') && (strpos($article->getAttribute('id'), 'post-') === 0)) {
                return $article;
            }
        }

        // Returns <body> or <html>
        return $html->getElementsByTagName('body')->item(0) ?: $html->getElementsByTagName('html')->item(0);
    }
}

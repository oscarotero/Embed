<?php

namespace Embed\Providers;

use Embed\Bag;
use Embed\Utils;
use Embed\Url;

/**
 * Generic html provider.
 *
 * Load the html data of an url and store it
 */
class Html extends Provider implements ProviderInterface
{
    protected $config = [
        'maxImages' => -1,
        'externalImages' => false,
    ];

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!($html = $this->request->getHtmlContent())) {
            return false;
        }

        self::extractFromLink($html, $this->bag);
        self::extractFromMeta($html, $this->bag);

        if ($main = self::getMainElement($html)) {
            $this->extractImages($main);
        }

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

        return array_filter(array_map('trim', explode(',', $keywords)));
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        $feeds = $this->bag->get('feeds');

        return isset($feeds[0]) ? $feeds[0] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if ($this->bag->has('video_src')) {
            switch ($this->bag->get('video_type')) {
                case 'application/x-shockwave-flash':
                    return Utils::flash($this->bag->get('video_src'), $this->getWidth(), $this->getHeight());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->bag->get('canonical');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('author') ?: $this->bag->get('contributors');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        return (array) $this->bag->get('icons') ?: [];
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $images = (array) $this->bag->get('images');

        if ($this->config['maxImages'] > -1) {
            return array_slice($images, 0, $this->config['maxImages']);
        }

        return $images;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return (integer) $this->bag->get('video_width') ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return (integer) $this->bag->get('video_height') ?: null;
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

        if (!($html = $this->request->getHtmlContent())) {
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
                } catch (\Exception $exception) {
                    continue;
                }
            }
        }

        return $data;
    }

    /**
     * Extract information from the <link> elements.
     *
     * @param \DOMDocument $html
     * @param Bag          $bag
     */
    protected static function extractFromLink(\DOMDocument $html, Bag $bag)
    {
        foreach (Utils::getLinks($html) as $link) {
            list($rel, $href, $element) = $link;

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
                    $bag->add('icons', $href);
                    break;

                case 'image_src':
                    $bag->add('images', $href);
                    break;

                case 'alternate':
                    switch ($element->getAttribute('type')) {
                        case 'application/rss+xml':
                        case 'application/atom+xml':
                            $bag->add('feeds', $href);
                            break;
                    }
                    break;

                default:
                    $bag->set($rel, $href);
            }
        }
    }

    /**
     * Extract information from the <meta> elements.
     *
     * @param \DOMDocument $html
     * @param Bag          $bag
     */
    protected static function extractFromMeta(\DOMDocument $html, Bag $bag)
    {
        foreach (Utils::getMetas($html) as $meta) {
            list($name, $value, $element) = $meta;

            if (!$value) {
                continue;
            }

            if ($name) {
                $name = strtolower($name);

                switch ($name) {
                    case 'msapplication-tileimage':
                        $bag->add('icons', $value);
                        continue 2;

                    default:
                        $bag->set($name, $value);
                        continue 2;
                }
            }

            if ($element->hasAttribute('itemprop')) {
                $bag->set($element->getAttribute('itemprop'), $value);
            }

            if ($element->hasAttribute('http-equiv')) {
                $bag->set($element->getAttribute('http-equiv'), $value);
            }
        }
    }

    /**
     * Extract <img> elements.
     *
     * @param \DOMElement $html
     */
    protected function extractImages(\DOMElement $html)
    {
        foreach ($html->getElementsByTagName('img') as $img) {
            if ($img->hasAttribute('src')) {
                $src = $this->request->createUrl($img->getAttribute('src'));

                //Avoid external images
                if (!$this->imageIsValid($src)) {
                    continue;
                }

                $parent = $img->parentNode;

                //The image is in a link
                while ($parent && isset($parent->tagName)) {
                    if ($parent->tagName === 'a') {
                        //The link is external
                        if ($parent->hasAttribute('href')) {
                            $href = $this->request->createUrl($parent->getAttribute('href'));

                            if (!$this->imageIsValid($href)) {
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

                $this->bag->add('images', $src->getUrl());
            }
        }
    }

    /**
     * Check whether a image url is valid or not.
     * 
     * @param Url $url
     * 
     * return bool
     */
    protected function imageIsValid(Url $url)
    {
        //base64 or same domain
        if ($url->getContent() !== null || $url->getDomain() === $this->request->getDomain()) {
            return true;
        }

        return is_bool($this->config['externalImages']) ? $this->config['externalImages'] : $url->match($this->config['externalImages']);
    }

    /**
     * Returns the main element of the document.
     *
     * @param \DOMDocument $html
     *
     * @return \DOMElement
     */
    protected static function getMainElement(\DOMDocument $html)
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

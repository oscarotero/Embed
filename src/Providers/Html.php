<?php
/**
 * Generic html provider.
 * Load the html data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Request;
use Embed\Viewers;

class Html extends Provider
{
    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        if (!($html = $request->getHtmlContent())) {
            return false;
        }

        $images = $icons = $feeds = array();

        //Links
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
                        $icons[] = $href;
                        break;

                    case 'canonical':
                    case 'video_src':
                        $this->set($rel, $href);
                        break;

                    case 'image_src':
                        $images[] = $href;
                        break;

                    case 'alternate':
                        if ($link->hasAttribute('type')) {
                            switch ($link->getAttribute('type')) {
                                case 'application/json+oembed':
                                case 'application/xml+oembed':
                                case 'text/json+oembed':
                                case 'text/xml+oembed':
                                    $this->set('oembed', $href);
                                    break;

                                case 'application/rss+xml':
                                case 'application/atom+xml':
                                    $feeds[] = $href;
                                    break;
                            }
                        }
                        break;
                }
            }
        }

        //Title
        $title = $html->getElementsByTagName('title');

        if ($title && ($title->length > 0)) {
            $this->set('title', $title->item(0)->nodeValue);
        }

        //Meta info
        foreach ($html->getElementsByTagName('meta') as $meta) {
            if ($meta->hasAttribute('name')) {
                $name = strtolower($meta->getAttribute('name'));

                switch ($name) {
                    case 'msapplication-tileimage':
                        $icons[] = $meta->getAttribute('content');
                        continue 2;

                    default:
                        if ($meta->hasAttribute('content')) {
                            $this->set($name, $meta->getAttribute('content'));
                        }
                        continue 2;
                }
            }

            if ($meta->hasAttribute('http-equiv') && $meta->hasAttribute('content')) {
                $name = strtolower($meta->getAttribute('http-equiv'));
                $this->set($name, $meta->getAttribute('content'));
            }
        }

        //Search the main element:
        $content = $html->getElementsByTagName('main'); //<main> element

        if ($content->length === 0) {
            $content = $html->getElementById('main') ?: $html->getElementById('content') ?: $html->getElementById('page'); //commons ids
        } else {
            $content = $content->item(0);
        }

        //Wordpress
        if (!$content) {
            foreach ($html->getElementsByTagName('article') as $article) {
                if ($article->hasAttribute('id') && (strpos($article->getAttribute('id'), 'post-') === 0)) {
                    $content = $article;
                    break;
                }
            }
        }

        //Search in the entire document
        if (!$content) {
            $content = $html;
        }

        $domain = $request->url->getDomain();

        foreach ($content->getElementsByTagName('img') as $img) {
            if ($img->hasAttribute('src')) {
                $src = new Url($img->getAttribute('src'));

                //Is src relative?
                if (!$src->getDomain()) {
                    $images[] = $src->getUrl();
                    continue;
                }

                //Avoid external images
                if ($src->getDomain() !== $domain) {
                    continue;
                }

                //Avoid images in external links
                $parent = $img->parentNode;

                while ($parent && isset($parent->tagName)) {
                    if ($parent->tagName === 'a') {
                        if ($parent->hasAttribute('href')) {
                            $href = new Url($parent->getAttribute('href'));

                            if ($href->getDomain() && $src->getDomain() !== $domain) {
                                continue 2;
                            }
                        }

                        break;
                    }

                    $parent = $parent->parentNode;
                }

                $images[] = $src->getUrl();
            }
        }

        $this->set('icons', $icons);
        $this->set('images', $images);
        $this->set('feeds', $feeds);
    }

    /**
     * Gets the title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
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
        return $this->has('video_src') ? 'video' : null;
    }

    /**
     * Gets the source
     *
     * @return string|null
     */
    public function getSource()
    {
        $feeds = $this->get('feeds');

        return isset($feeds[0]) ? $feeds[0] : null;
    }

    /**
     * Gets the code
     *
     * @return string|null
     */
    public function getCode()
    {
        if ($this->has('video_src')) {
            switch ($this->get('video_type')) {
                case 'application/x-shockwave-flash':
                    return Viewers::flash($this->get('video_src'), $this->getWidth(), $this->getHeight());
            }
        }
    }

    /**
     * Gets the url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('canonical');
    }

    /**
     * Gets all provider icons
     *
     * @return array
     */
    public function getProviderIcon()
    {
        return $this->get('icons');
    }

    /**
     * Gets the images found
     *
     * @return array
     */
    public function getImage()
    {
        return $this->get('images');
    }

    /**
     * Gets the code width
     *
     * @return integer|null
     */
    public function getWidth()
    {
        return $this->get('video_width');
    }

    /**
     * Gets the code height
     *
     * @return integer|null
     */
    public function getHeight()
    {
        return $this->get('video_height');
    }
}

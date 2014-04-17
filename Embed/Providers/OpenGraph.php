<?php
/**
 * Generic opengraph provider.
 * Load the opengraph data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;
use Embed\Viewers;

class OpenGraph extends Provider
{
    public function __construct(Request $request)
    {
        if (!($html = $request->getHtmlContent())) {
            return false;
        }

        $images = array();

        foreach ($html->getElementsByTagName('meta') as $tag) {
            if ($tag->hasAttribute('property') && (strpos($tag->getAttribute('property'), 'og:') === 0)) {
                $name = substr($tag->getAttribute('property'), 3);
            } elseif ($tag->hasAttribute('name') && (strpos($tag->getAttribute('name'), 'og:') === 0)) {
                $name = substr($tag->getAttribute('name'), 3);
            } else {
                continue;
            }

            $value = $tag->getAttribute('content') ?: $tag->getAttribute('value');

            if ($name === 'image') {
                $images[] = $value;
            } else {
                $this->set($name, $value);
            }
        }

        $this->set('image', $images);
    }

    public function getTitle()
    {
        return $this->get('title');
    }

    public function getDescription()
    {
        return $this->get('description');
    }

    public function getType()
    {
        $type = $this->get('type');

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case 'video':
            case 'photo':
            case 'link':
            case 'rich':
                return $type;

            case 'article':
                return 'link';
        }

        if ($this->has('video')) {
            return 'video';
        }
    }

    public function getCode()
    {
        if ($this->has('video')) {
            if (!($videoPath = parse_url($this->get('video'), PHP_URL_PATH)) || !($type = pathinfo($videoPath, PATHINFO_EXTENSION))) {
                $type = $this->get('video:type');
            }
            
            switch ($type) {
                case 'swf':
                case 'application/x-shockwave-flash':
                    return Viewers::flash($this->get('video'), $this->getWidth(), $this->getHeight());

                case 'mp4':
                case 'ogg':
                case 'ogv':
                case 'webm':
                case 'application/mp4':
                case 'video/mp4':
                case 'video/ogg':
                case 'video/ogv':
                case 'video/webm':
                    $image = $this->getImage();

                    if (is_array($image)) {
                        $image = current($image);
                    }

                    return Viewers::videoHtml($image, $this->get('video'), $this->getWidth(), $this->getHeight());
            }
        }
    }

    public function getUrl()
    {
        return $this->get('url');
    }

    public function getProviderName()
    {
        return $this->get('site_name');
    }

    public function getImage()
    {
        return $this->get('image');
    }

    public function getWidth()
    {
        return $this->get('image:width') ?: $this->get('video:width');
    }

    public function getHeight()
    {
        return $this->get('image:height') ?: $this->get('video:height');
    }
}

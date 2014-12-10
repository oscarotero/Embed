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

        $images = array();

        foreach ($html->getElementsByTagName('meta') as $meta) {
            if (strpos($meta->getAttribute('property'), 'og:') === 0) {
                $name = substr($meta->getAttribute('property'), 3);
            } elseif (strpos($meta->getAttribute('name'), 'og:') === 0) {
                $name = substr($meta->getAttribute('name'), 3);
            } else {
                continue;
            }

            $value = $meta->getAttribute('content') ?: $meta->getAttribute('value');

            if ($name === 'image') {
                $images[] = $value;
            } else {
                $this->set($name, $value);
            }
        }

        $this->set('image', $images);
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
     * Gets the url type
     *
     * @return string|null
     */
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

    /**
     * Gets the embedded code
     *
     * @return string|null
     */
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

    /**
     * Gets the url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
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

    /**
     * Gets the image
     *
     * @return array
     */
    public function getImage()
    {
        return $this->get('image');
    }

    /**
     * Gets the code width
     *
     * @return integer|null
     */
    public function getWidth()
    {
        return $this->get('image:width') ?: $this->get('video:width');
    }

    /**
     * Gets the code height
     *
     * @return integer|null
     */
    public function getHeight()
    {
        return $this->get('image:height') ?: $this->get('video:height');
    }
}

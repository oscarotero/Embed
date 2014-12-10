<?php
/**
 * Generic twitter cards provider.
 * Load the twitter cards data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;
use Embed\Viewers;

class TwitterCards extends Provider
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

        foreach ($html->getElementsByTagName('meta') as $tag) {
            if ($tag->hasAttribute('property') && (strpos($tag->getAttribute('property'), 'twitter:') === 0)) {
                $this->set(substr($tag->getAttribute('property'), 8), $tag->getAttribute('content') ?: $tag->getAttribute('value'));
                continue;
            }

            if ($tag->hasAttribute('name') && (strpos($tag->getAttribute('name'), 'twitter:') === 0)) {
                $this->set(substr($tag->getAttribute('name'), 8), $tag->getAttribute('content') ?: $tag->getAttribute('value'));
            }
        }
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
        $type = $this->get('card');

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case 'video':
            case 'photo':
            case 'link':
            case 'rich':
                return $type;

            case 'player':
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
        if ($this->has('player')) {
            return Viewers::iframe($this->get('player'), $this->getWidth(), $this->getHeight());
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
     * Gets the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->get('creator');
    }

    /**
     * Gets the image
     *
     * @return string|null
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
        return $this->get('player:width');
    }

    /**
     * Gets the code height
     *
     * @return integer|null
     */
    public function getHeight()
    {
        return $this->get('player:height');
    }
}

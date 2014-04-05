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

    public function getCode()
    {
        if ($this->has('player')) {
            return Viewers::iframe($this->get('player'), $this->getWidth(), $this->getHeight());
        }
    }

    public function getUrl()
    {
        return $this->get('url');
    }

    public function getAuthorName()
    {
        return $this->get('creator');
    }

    public function getImage()
    {
        return $this->get('image');
    }

    public function getWidth()
    {
        return $this->get('player:width');
    }

    public function getHeight()
    {
        return $this->get('player:height');
    }
}

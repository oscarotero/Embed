<?php
namespace Embed;

class Embed
{
    public static function create($url, array $options = null)
    {
        if (is_string($url)) {
            $url = new Request($url);
        } elseif (!($url instanceof Request)) {
            throw new \InvalidArgumentException("Embed::create only accepts instances of Embed\\Request or strings");
        }

        if (!$url->isValid()) {
            return false;
        }

        //If is a file use File Adapter
        if (Adapters\File::check($url)) {
            return new Adapters\File($url, $options);
        }

        //Search the adapter using the domain
        $class = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $url->getDomain()))));

        if (class_exists($class)) {
            if (call_user_func(array($class, 'check'), $url)) {
                return new $class($url, $options);
            }
        }

        if (Adapters\Webpage::check($url)) {
            return new Adapters\Webpage($url, $options);
        }

        return false;
    }

    public static function createSource($url)
    {
        if (is_string($url)) {
            $url = new Request($url);
        } elseif (!($url instanceof Request)) {
            throw new \InvalidArgumentException("Embed::create only accepts instances of Embed\\Request or strings");
        }

        if (!$url->isValid()) {
            return false;
        }

        //If is a xml feed (rss/atom)
        if (Sources\Feed::check($url)) {
            $sources = new Sources\Feed($url);

            if ($sources->isValid()) {
                return $sources;
            }
        }

        return false;
    }
}

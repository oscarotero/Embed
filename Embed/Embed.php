<?php
namespace Embed;

class Embed
{
    public static function create(Url $Url, array $options = null)
    {
        if (!$Url->isValid()) {
            return false;
        }

        //If is a file use File Adapter
        if (Adapters\File::check($Url)) {
            return new Adapters\File($Url, $options);
        }

        //Search the adapter using the domain
        $class = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $Url->getDomain()))));

        if (class_exists($class)) {
            if (call_user_func(array($class, 'check'), $Url)) {
                return new $class($Url, $options);
            }
        }

        if (Adapters\Webpage::check($Url)) {
            return new Adapters\Webpage($Url, $options);
        }

        return false;
    }

    public static function createSource(Url $Url)
    {
        if (!$Url->isValid()) {
            return false;
        }

        //If is a xml feed (rss/atom)
        if (Sources\Feed::check($Url)) {
            $Sources = new Sources\Feed($Url);

            if ($Sources->isValid()) {
                return $Sources;
            }
        }

        return false;
    }
}

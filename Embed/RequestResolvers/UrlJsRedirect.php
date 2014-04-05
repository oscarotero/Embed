<?php
/**
 * Class to resolve javascript based redirections
 */
namespace Embed\RequestResolvers;

class UrlJsRedirect
{
    protected static $urls = array(
        'google' => 'https?://www.google.com/url*'
    );

    public static function resolve(Url $url)
    {
        foreach (static::$urls as $method => $matches) {
            if ($url->match($matches)) {
                static::$method($url);

                return true;
            }
        }

        return false;
    }

    protected static function google(Url $url)
    {
        if (($urlString = $url->getParameter('url'))) {
            $url->setUrl($urlString);
        }
    }
}

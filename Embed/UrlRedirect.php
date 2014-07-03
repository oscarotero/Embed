<?php
/**
 * Class to resolve some specific redirections
 */
namespace Embed;

class UrlRedirect
{
    protected static $urls = array(
        'google' => 'https?://www.google.com/url*',
        'googleTranslator' => 'https?://translate.google.com/translate*'
    );


    /**
     * Resolve the url redirection
     * 
     * @param Url $url Url to resolve
     * 
     * @return boolean True if the url has changed, false if not
     */
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


    /**
     * Resolve a google redirection url
     * 
     * @param Url $url
     */
    protected static function google(Url $url)
    {
        if (($urlString = $url->getParameter('url'))) {
            $url->setUrl($urlString);
        }
    }


    /**
     * Resolve a google translation url
     * 
     * @param Url $url
     */
    protected static function googleTranslator(Url $url)
    {
        if (($urlString = $url->getParameter('u'))) {
            $url->setUrl($urlString);
        }
    }
}

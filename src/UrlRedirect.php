<?php
/**
 * Class to resolve some specific redirections
 */
namespace Embed;

class UrlRedirect
{
    protected static $urls = [
        'google' => 'https?://www.google.com/url*',
        'googleTranslator' => 'https?://translate.google.com/translate*',
        'hashBang' => '*#!*',
    ];

    /**
     * Resolve the url redirection
     *
     * @param string $oldUrl Url to resolve
     *
     * @return string The new url
     */
    public static function resolve($oldUrl)
    {
        $url = new Url($oldUrl);

        foreach (static::$urls as $method => $matches) {
            if ($url->match($matches)) {
                static::$method($url);

                break;
            }
        }

        return $url->getUrl();
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

    /**
     * Resolve an url with hashbang
     *
     * @param Url $url
     */
    protected static function hashBang(Url $url)
    {
        if (($path = preg_replace('|^(/?!)|', '', $url->getFragment()))) {
            $url->setPath($url->getPath().$path);
        }
    }
}

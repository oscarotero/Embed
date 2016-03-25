<?php

namespace Embed;

/**
 * Class to resolve some specific redirections.
 */
class UrlRedirect
{
    protected static $urls = [
        'google' => 'https?://www.google.com/url*',
        'googleTranslator' => 'https?://translate.google.com/translate*',
        'hashBang' => '*#!*',
        'spotify' => 'https://play.spotify.com/*',
    ];

    /**
     * Resolve the url redirection.
     *
     * @param string $oldUrl Url to resolve
     *
     * @return string
     */
    public static function resolve($oldUrl)
    {
        $url = new Url($oldUrl);

        foreach (static::$urls as $method => $matches) {
            if ($url->match($matches)) {
                return static::$method($url);
            }
        }

        return $oldUrl;
    }

    /**
     * Resolve a google redirection url.
     *
     * @param Url $url
     *
     * @return string
     */
    protected static function google(Url $url)
    {
        if (($urlString = $url->getQueryParameter('url'))) {
            return $urlString;
        }

        return $url->getUrl();
    }

    /**
     * Resolve a google translation url.
     *
     * @param Url $url
     *
     * @return string
     */
    protected static function googleTranslator(Url $url)
    {
        if (($urlString = $url->getQueryParameter('u'))) {
            return $urlString;
        }

        return $url->getUrl();
    }

    /**
     * Resolve an url with hashbang.
     *
     * @param Url $url
     *
     * @return string
     */
    protected static function hashBang(Url $url)
    {
        if (($path = preg_replace('|^(/?!)|', '', $url->getFragment()))) {
            return $url->withPath($url->getPath().$path)->getUrl();
        }

        return $url->getUrl();
    }

    /**
     * Redirect the player of spotify.
     *
     * @param Url $url
     *
     * @return string
     */
    protected static function spotify(Url $url)
    {
        return $url->withHost('open.spotify.com')->getUrl();
    }
}

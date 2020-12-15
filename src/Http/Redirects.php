<?php

namespace Embed\Http;

/**
 * Class to resolve some specific redirections.
 */
abstract class Redirects
{
    private static $patterns = [
        'google' => 'www.google.com/url*',
        'googleTranslator' => 'translate.google.com/translate',
        'hashBang' => '*#!*',
        'spotify' => 'play.spotify.com/*',
        'tumblr' => 't.umblr.com/redirect',
        'facebook' => 'www.facebook.com/login/*',
    ];
    
    /**
     * Resolve the url redirection.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function resolve(Url $url)
    {
        foreach (self::$patterns as $method => $pattern) {
            if ($url->match($pattern)) {
                return self::$method($url);
            }
        }

        return $url;
    }

    /**
     * Resolve a facebook redirection url.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function facebook(Url $url)
    {
        if (($value = $url->getQueryParameter('next'))) {
            return Url::create($value);
        }

        return $url;
    }


    /**
     * Resolve a google redirection url.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function google(Url $url)
    {
        if (($value = $url->getQueryParameter('url'))) {
            return Url::create($value);
        }

        return $url;
    }

    /**
     * Resolve a google translation url.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function googleTranslator(Url $url)
    {
        if (($value = $url->getQueryParameter('u'))) {
            return Url::create($value);
        }

        return $url;
    }

    /**
     * Resolve an url with hashbang.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function hashBang(Url $url)
    {
        if (($path = preg_replace('|^(/?!)|', '', $url->getFragment()))) {
            return $url->withPath($url->getPath().$path);
        }

        return $url;
    }

    /**
     * Redirect the player of spotify.
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function spotify(Url $url)
    {
        return $url->withHost('open.spotify.com');
    }

    /**
     * Redirect the tumblr url
     *
     * @param Url $url
     *
     * @return Url
     */
    public static function tumblr(Url $url)
    {
        if (($value = $url->getQueryParameter('z'))) {
            return Url::create($value);
        }

        return $url;
    }
}

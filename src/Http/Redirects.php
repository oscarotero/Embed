<?php

namespace Embed\Http;

use Embed\Embed;

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
    ];

    /**
     * Resolve the url redirection.
     *
     * @param Uri $uri
     *
     * @return Uri
     */
    public static function resolve(Uri $uri)
    {
        foreach (self::$patterns as $method => $pattern) {
            if ($uri->match($pattern)) {
                $newUri = self::$method($uri);
                Embed::log('debug', 'Redirect', ['uri' => $newUri]);
                return $newUri;
            }
        }

        return $uri;
    }

    /**
     * Resolve a google redirection url.
     *
     * @param Uri $uri
     *
     * @return Uri
     */
    private static function google(Uri $uri)
    {
        if (($value = $uri->getQueryParameter('url'))) {
            return Uri::create($value);
        }

        return $uri;
    }

    /**
     * Resolve a google translation url.
     *
     * @param Uri $uri
     *
     * @return Uri
     */
    private static function googleTranslator(Uri $uri)
    {
        if (($value = $uri->getQueryParameter('u'))) {
            return Uri::create($value);
        }

        return $uri;
    }

    /**
     * Resolve an url with hashbang.
     *
     * @param Uri $uri
     *
     * @return Uri
     */
    private static function hashBang(Uri $uri)
    {
        if (($path = preg_replace('|^(/?!)|', '', $uri->getFragment()))) {
            return $uri->withPath($uri->getPath().$path);
        }

        return $uri;
    }

    /**
     * Redirect the player of spotify.
     *
     * @param Uri $uri
     *
     * @return Uri
     */
    private static function spotify(Uri $uri)
    {
        return $uri->withHost('open.spotify.com');
    }
}

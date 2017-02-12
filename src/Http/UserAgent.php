<?php

namespace Embed\Http;

/**
 * Class to return the user agent used depending of the url.
 * This is because some sites works better with some user agents
 */
abstract class UserAgent
{
    private static $patterns = [
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.95 Safari/537.36' => [
        ]
    ];

    public static function add($useragent, $pattern)
    {
        if (!isset(self::$patterns[$useragent])) {
            self::$patterns[$useragent] = (array) $pattern;
            return;
        }

        $pattern = (array) $pattern;

        foreach ($pattern as $v) {
            if (!in_array($v, self::$patterns[$useragent])) {
                self::$patterns[$useragent][] = $v;
            }
        }
    }

    /**
     * Returns the user agent.
     *
     * @param Url $url
     *
     * @return string|null
     */
    public static function resolve(Url $url)
    {
        foreach (self::$patterns as $useragent => $pattern) {
            if ($url->match($pattern)) {
                return $useragent;
            }
        }
    }
}

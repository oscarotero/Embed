<?php

namespace Embed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Uri;
use Embed\Http\Request;
use Psr\Log\LoggerInterface;

abstract class Embed
{
    private static $logger;

    /**
     * Define a logger used to debug.
     *
     * @param LoggerInterface $logger
     */
    public static function setLogger(LoggerInterface $logger = null)
    {
        self::$logger = $logger;
    }

    /**
     * Saves a message in the logger.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     */
    public static function log($level, $message, array $context = [])
    {
        if (self::$logger !== null) {
            foreach ($context as &$value) {
                if (is_object($value)) {
                    $value = (string) $value;
                }
            }

            self::$logger->log($level, $message, $context);
        }
    }

    /**
     * Gets the info from an url.
     *
     * @param string|Uri|Request $request
     * @param array              $config
     *
     * @return AdapterInterface
     */
    public static function create($request, array $config = [])
    {
        if (!($request instanceof Request)) {
            $request = new Request($request);
        }

        $info = self::process($request, $config);

        //if the canonical url is different, repeat the process
        if (rtrim((string) $request->getResponse()->getUri(), '/') !== rtrim($info->url, '/')) {
            $request = new Request($info->url, $request->getDispatcher());

            return self::process($request, $config);
        }

        return $info;
    }

    /**
     * Process the request.
     *
     * @param Request $request
     * @param array   $config
     *
     * @throws Exceptions\InvalidUrlException If the urls is not valid
     *
     * @return AdapterInterface
     */
    private static function process(Request $request, array $config)
    {
        //If is a file use File Adapter
        if (Adapters\File::check($request)) {
            return new Adapters\File($request, $config);
        }

        //Search the adapter using the domain
        $adapter = 'Embed\\Adapters\\'.$request->getResponse()->getUri()->getClassNameForDomain();

        if (class_exists($adapter) && $adapter::check($request)) {
            return new $adapter($request, $config);
        }

        //Use the default webpage adapter
        if (Adapters\Webpage::check($request)) {
            return new Adapters\Webpage($request, $config);
        }

        throw new Exceptions\InvalidUrlException(sprintf("Invalid url '%s' (status code: )", (string) $request->getUri(), $request->getResponse()->getStatusCode()));
    }
}

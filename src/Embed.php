<?php

namespace Embed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Uri;
use Embed\Http\Request;
use Embed\Http\DispatcherInterface;
use Embed\Http\CurlDispatcher;

abstract class Embed
{
    /**
     * Gets the info from an url.
     *
     * @param Uri|string $uri
     * @param array              $config
     * @param DispatcherInterface|null              $dispatcher
     *
     * @return AdapterInterface
     */
    public static function create($uri, array $config = [], DispatcherInterface $dispatcher = null)
    {
        if (!($uri instanceof Uri)) {
            $uri = Uri::create($uri);
        }

        if ($dispatcher === null) {
            $dispatcher = new CurlDispatcher();
        }

        $info = self::process($uri, $config, $dispatcher);

        //if the canonical url is different, repeat the process
        $from = preg_replace('|^(\w+://)|', '', rtrim((string) $info->getResponse()->getUri(), '/'));
        $to = preg_replace('|^(\w+://)|', '', rtrim($info->url, '/'));

        if ($from !== $to && empty($info->code)) {
            return self::process(Uri::create($info->url), $config, $dispatcher);
        }

        return $info;
    }

    /**
     * Process the uri.
     *
     * @param Uri $uri
     * @param array   $config
     * @param DispatcherInterface   $dispatcher
     *
     * @throws Exceptions\InvalidUrlException If the urls is not valid
     *
     * @return AdapterInterface
     */
    private static function process(Uri $uri, array $config, DispatcherInterface $dispatcher)
    {
        $response = $dispatcher->dispatch($uri);

        //If is a file use File Adapter
        if (Adapters\File::check($response)) {
            return new Adapters\File($response, $config, $dispatcher);
        }

        //Search the adapter using the domain
        $adapter = 'Embed\\Adapters\\'.$response->getUri()->getClassNameForDomain();

        if (class_exists($adapter) && $adapter::check($response)) {
            return new $adapter($response, $config, $dispatcher);
        }

        //Use the default webpage adapter
        if (Adapters\Webpage::check($response)) {
            return new Adapters\Webpage($response, $config, $dispatcher);
        }

        throw new Exceptions\InvalidUrlException(sprintf("Invalid url '%s'", (string) $uri));
    }
}

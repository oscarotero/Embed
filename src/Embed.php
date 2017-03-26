<?php

namespace Embed;

use Embed\Adapters\Adapter;
use Embed\Http\Url;
use Embed\Http\DispatcherInterface;
use Embed\Http\CurlDispatcher;

abstract class Embed
{
    /**
     * Gets the info from an url.
     *
     * @param Url|string $url
     * @param array              $config
     * @param DispatcherInterface|null              $dispatcher
     *
     * @return Adapter
     */
    public static function create($url, array $config = [], DispatcherInterface $dispatcher = null)
    {
        if (!($url instanceof Url)) {
            $url = Url::create($url);
        }

        if ($dispatcher === null) {
            $dispatcher = new CurlDispatcher();
        }

        $info = self::process($url, $config, $dispatcher);

        // Repeat the process if:
        // - The canonical url is different
        // - No embed code has found
        $from = preg_replace('|^(\w+://)|', '', rtrim((string) $info->getResponse()->getUrl(), '/'));
        $to = preg_replace('|^(\w+://)|', '', rtrim($info->url, '/'));

        if ($from !== $to && empty($info->code)) {
            return self::process(Url::create($info->url), $config, $dispatcher);
        }

        return $info;
    }

    /**
     * Process the url.
     *
     * @param Url $url
     * @param array   $config
     * @param DispatcherInterface   $dispatcher
     *
     * @throws Exceptions\InvalidUrlException If the urls is not valid
     *
     * @return Adapter
     */
    private static function process(Url $url, array $config, DispatcherInterface $dispatcher)
    {
        $response = $dispatcher->dispatch($url);

        //If is a file use File Adapter
        if (Adapters\File::check($response)) {
            return new Adapters\File($response, $config, $dispatcher);
        }

        //Search the adapter using the domain
        $adapter = 'Embed\\Adapters\\'.$response->getUrl()->getClassNameForDomain();

        if (class_exists($adapter) && $adapter::check($response)) {
            return new $adapter($response, $config, $dispatcher);
        }

        //Use the default webpage adapter
        if (Adapters\Webpage::check($response)) {
            return new Adapters\Webpage($response, $config, $dispatcher);
        }

        if ($response->getError() === null) {
            $exception = new Exceptions\InvalidUrlException(sprintf("Invalid url '%s' (Status code %s)", (string) $url, $response->getStatusCode()));
        } else {
            $exception = new Exceptions\InvalidUrlException($response->getError());
        }

        $exception->setResponse($response);

        throw $exception;
        
    }
}

<?php

namespace Embed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Uri;
use Embed\Http\Request;

abstract class Embed
{
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
        $from = preg_replace('|^(\w+://)|', '', rtrim((string) $request->getResponse()->getUri(), '/'));
        $to = preg_replace('|^(\w+://)|', '', rtrim($info->url, '/'));

        if ($from !== $to && empty($info->code)) {
            return self::process(new Request($info->url, $request->getDispatcher()), $config);
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

        var_dump($request->getResponse()->getStatusCode());

        throw new Exceptions\InvalidUrlException(sprintf("Invalid url '%s'", (string) $request->getUri(), $request->getResponse()->getStatusCode()));
    }
}

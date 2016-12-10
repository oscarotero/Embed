<?php

namespace Embed;

use Embed\Adapters\AdapterInterface;

abstract class Embed
{
    /**
     * Gets the info from an url.
     *
     * @param string|Request $request The url or a request with the url
     * @param array          $config  Options passed to the adapter
     *
     * @throws Exceptions\InvalidUrlException If the urls is not valid
     * @throws \InvalidArgumentException      If any config argument is not valid
     *
     * @return AdapterInterface
     */
    public static function create($request, array $config = array())
    {
        $request = self::getRequest($request, isset($config['resolver']) ? $config['resolver'] : null);

        //Use custom adapter
        if (!empty($config['adapter']['class'])) {
            if (($info = self::executeAdapter($config['adapter']['class'], $request, $config))) {
                return $info;
            }
        }

        //If is a file use File Adapter
        if (($info = self::executeAdapter('Embed\Adapters\File', $request, $config))) {
            return $info;
        }

        //Search the adapter using the domain
        $adapter = 'Embed\\Adapters\\'.$request->getClassNameForDomain();

        if (class_exists($adapter) && ($info = self::executeAdapter($adapter, $request, $config))) {
            return $info;
        }

        //Use the standard webpage adapter
        if (($info = self::executeAdapter('Embed\Adapters\Webpage', $request, $config))) {
            return $info;
        }

        $error = $request->getError();

        if (empty($error)) {
            throw new Exceptions\InvalidUrlException(sprintf("The url '%s' returns the http code %s", $request->getUrl(), $request->getHttpCode()));
        }

        throw new Exceptions\InvalidUrlException(sprintf("The url '%s' returns the following error: %s", $request->getUrl(), $error));
    }

    /**
     * Execute an adapter.
     *
     * @param string     $adapter Adapter class name
     * @param Request    $request
     * @param null|array $config
     *
     * @throws \InvalidArgumentException If the adapter class in not AdapterInterface
     *
     * @return false|AdapterInterface
     */
    private static function executeAdapter($adapter, Request $request, array $config = null)
    {
        if (!in_array('Embed\\Adapters\\AdapterInterface', class_implements($adapter))) {
            throw new \InvalidArgumentException("The class '$adapter' must implements 'Embed\\Adapters\\AdapterInterface'");
        }

        if (call_user_func([$adapter, 'check'], $request)) {
            return new $adapter($request, $config);
        }

        return false;
    }

    /**
     * Init a request.
     *
     * @param string|Request $request The url or a request with the url
     * @param null|array     $config  Options passed to the adapter
     *
     * @throws \InvalidArgumentException If the class in not Embed\Request instance
     *
     * @return Request
     */
    private static function getRequest($request, array $config = null)
    {
        if (is_string($request)) {
            return new Request(
                $request,
                isset($config['class']) ? $config['class'] : null,
                isset($config['config']) ? $config['config'] : []
            );
        }

        if (!($request instanceof Request)) {
            throw new \InvalidArgumentException('Embed::create only accepts instances of Embed\\Request or strings');
        }

        return $request;
    }

    /**
     * Process the adapter.
     */
    public function process()
    {
        $this->run();

        //if the canonical url is different, repeat the proccess
        $canonical = $this->getUrl();

        if ($this->request->getUrl() !== $canonical) {
            $request = $this->request->withUrl($canonical);

            if ($request->isValid()) {
                $this->request = $request;
                $this->run();
            }
        }
    }
}

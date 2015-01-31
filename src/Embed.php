<?php
namespace Embed;

use Embed\Adapters\AdapterInterface;

class Embed
{
    /**
     * Gets the info from an url
     *
     * @param string|Request $request The url or a request with the url
     * @param array          $config  Options passed to the adapter
     *
     * @return false|AdapterInterface
     */
    public static function create($request, array $config = [])
    {
        $request = self::getRequest($request, isset($config['request']) ? $config['request'] : null);

        if (!$request->isValid()) {
            return false;
        }

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
        $adapter = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $request->url->getDomain()))));

        if (class_exists($adapter) && ($info = self::executeAdapter($adapter, $request, $config))) {
            return $info;
        }

        //Use the standard webpage adapter
        if (($info = self::executeAdapter('Embed\Adapters\Webpage', $request, $config))) {
            return $info;
        }

        return false;
    }

    /**
     * Gets the info from a source (list of urls)
     *
     * @param string|Request $request The url or a request with the source url
     * @param null|array     $config  Options passed to the adapter
     *
     * @return false|Sources\SourceInterface
     */
    public static function createSource($request, array $config = null)
    {
        $request = self::getRequest($request, $config);

        if (!$request->isValid()) {
            return false;
        }

        //If is a xml feed (rss/atom)
        if (Sources\Feed::check($request)) {
            $sources = new Sources\Feed($request);

            if ($sources->isValid()) {
                return $sources;
            }
        }

        return false;
    }

    /**
     * Execute an adapter
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
     * Init a request
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
            return new Request(new Url($request));
        }

        if (!($request instanceof Request)) {
            throw new \InvalidArgumentException("Embed::create only accepts instances of Embed\\Request or strings");
        }

        if (isset($config['resolver'])) {
            $request->setResolverClass($config['class']);
        }

        if (isset($config['config'])) {
            $request->setResolverConfig($config['config']);
        }

        return $request;
    }
}

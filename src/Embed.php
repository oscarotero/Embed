<?php
namespace Embed;

use Embed\Adapters\AdapterInterface;

class Embed
{
    /**
     * Gets the info from an url
     *
     * @param string|Request $request The url or a request with the url
     * @param null|array     $options Options passed to the adapter
     *
     * @return false|AdapterInterface
     */
    public static function create($request, array $options = null)
    {
        $request = self::getRequest($request, $options);

        if (!$request->isValid()) {
            return false;
        }

        //Use custom adapter
        if (!empty($options['customAdapter'])) {
            if (!class_exists($options['customAdapter'])) {
                throw new \InvalidArgumentException("The class '{$options[customAdapter]}' does not exists");
            }

            if (($info = self::executeAdapter($options['customAdapter'], $request, $options))) {
                return $info;
            }
        }

        //If is a file use File Adapter
        if (($info = self::executeAdapter('Embed\Adapters\File', $request, $options))) {
            return $info;
        }

        //Search the adapter using the domain
        $adapter = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $request->url->getDomain()))));

        if (class_exists($adapter) && ($info = self::executeAdapter($adapter, $request, $options))) {
            return $info;
        }

        //Use the standard webpage adapter
        if (($info = self::executeAdapter('Embed\Adapters\Webpage', $request, $options))) {
            return $info;
        }

        return false;
    }

    /**
     * Gets the info from a source (list of urls)
     *
     * @param string|Request $request The url or a request with the source url
     * @param null|array     $options Options passed to the adapter
     *
     * @return false|Sources\SourceInterface
     */
    public static function createSource($request, array $options = null)
    {
        $request = self::getRequest($request, $options);

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
     * @param null|array $options
     *
     * @throws \InvalidArgumentException If the adapter class in not AdapterInterface
     *
     * @return false|AdapterInterface
     */
    private static function executeAdapter($adapter, Request $request, array $options = null)
    {
        if (!in_array('Embed\\Adapters\\AdapterInterface', class_implements($adapter))) {
            throw new \InvalidArgumentException("The class '$adapter' must implements 'Embed\\Adapters\\AdapterInterface'");
        }

        if (call_user_func(array($adapter, 'check'), $request)) {
            return new $adapter($request, $options);
        }

        return false;
    }

    /**
     * Init a request
     *
     * @param string|Request $request The url or a request with the url
     * @param null|array     $options Options passed to the adapter
     *
     * @throws \InvalidArgumentException If the class in not Embed\Request instance
     *
     * @return Request
     */
    private static function getRequest($request, array $options = null)
    {
        if (is_string($request)) {
            $resolverClass = isset($options['resolver']['class']) ? $options['resolver']['class'] : null;
            $resolverOptions = isset($options['resolver']['options']) ? $options['resolver']['options'] : null;

            return new Request(new Url($request), $resolverClass, $resolverOptions);
        }

        if (!($request instanceof Request)) {
            throw new \InvalidArgumentException("Embed::create only accepts instances of Embed\\Request or strings");
        }

        return $request;
    }
}

<?php

namespace Embed;

use Embed\Adapters\Adapter;
use Embed\Http\CurlDispatcher;
use Embed\Http\DispatcherInterface;
use Embed\Http\Url;

abstract class Embed
{
    /**
     * @var array
     */
    public static $default_config = [
        'custom_adapters_namespace' => null,
        'min_image_width' => 1,
        'min_image_height' => 1,
        'choose_bigger_image' => false,
        'images_blacklist' => [],
        'url_blacklist' => [
            '?&ns_campaign=*',
            '?&ns_source=*',
            '?&utm_campaign=*',
            '?&utm_medium=*',
            '?&utm_source=*',
        ],
        'follow_canonical' => true,

        'html' => [
            'max_images' => -1,
            'external_images' => false
        ],

        'oembed' => [
            'parameters' => [],
            'embedly_key' => null,
            'iframely_key' => null,
        ],

        'google' => [
            'key' => null,
        ],

        'soundcloud' => [
            'key' => null,
        ],

        'facebook' => [
            'key' => null,
            'events_fields' => 'id,cover,description,end_time,name,owner,place,start_time,timezone',
            'videos_fields' => 'id,description,embed_html',
        ]
    ];

    /**
     * Gets the info from an url.
     *
     * @param Url|string $url
     * @param array|null $config
     * @param DispatcherInterface|null $dispatcher
     *
     * @return Adapter
     */
    public static function create($url, array $config = null, DispatcherInterface $dispatcher = null)
    {
        if (!($url instanceof Url)) {
            $url = Url::create($url);
        }

        if ($config === null) {
            $config = self::$default_config;
        } else {
            $config += self::$default_config;
        }

        if ($dispatcher === null) {
            $dispatcher = new CurlDispatcher();
        }

        $info = self::process($url, $config, $dispatcher);

        if ($info->getConfig('follow_canonical') === false) {
            return $info;
        }

        // Repeat the process if:
        // - The canonical url is different
        // - No embed code has found
        $from = preg_replace('|^(\w+://)|', '', rtrim((string)$info->getResponse()->getUrl(), '/'));
        $to = preg_replace('|^(\w+://)|', '', rtrim($info->url, '/'));

        if ($from !== $to && empty($info->code)) {
            //accept new result if valid
            try {
                return self::process(Url::create($info->url), $config, $dispatcher);
            } catch (\Exception $e) {
                return $info;
            }
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
        $adapter = self::getClass('File', $config);

        if ($adapter::check($response)) {
            return new $adapter($response, $config, $dispatcher);
        }

        //Search the adapter using the domain
        $adapter = self::getClass($response->getUrl()->getClassNameForDomain(), $config);

        if (class_exists($adapter) && $adapter::check($response)) {
            return new $adapter($response, $config, $dispatcher);
        }

        //Use the default webpage adapter
        $adapter = self::getClass('Webpage', $config);

        if ($adapter::check($response)) {
            return new $adapter($response, $config, $dispatcher);
        }

        if ($response->getError() === null) {
            $exception = new Exceptions\InvalidUrlException(sprintf("Invalid url '%s' (Status code %s)", (string) $url, $response->getStatusCode()));
        } else {
            $exception = new Exceptions\InvalidUrlException($response->getError());
        }

        $exception->setResponse($response);

        throw $exception;
    }

    /**
     * Returns a class name using the custom_adapters_namespace
     *
     * @param string $name
     * @param array $config
     *
     * @return  string
     */
    private static function getClass($name, array $config)
    {
        if (!empty($config['custom_adapters_namespace'])) {
            $namespaces = (array) $config['custom_adapters_namespace'];

            foreach ($namespaces as $namespace) {
                $class = $namespace.$name;

                if (class_exists($class)) {
                    return $class;
                }
            }
        }

        return 'Embed\\Adapters\\'.$name;
    }
}

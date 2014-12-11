<?php
namespace Embed;

class Embed
{
    /**
     * Gets the info from an url
     *
     * @param string|Request $request The url or a request with the url
     * @param null|array     $options Options passed to the adapter
     *
     * @return false|Adapters\AdapterInterface
     */
    public static function create($request, array $options = null)
    {
        if (is_string($request)) {
            $resolverClass = isset($options['resolver']['class']) ? $options['resolver']['class'] : null;
            $resolverOptions = isset($options['resolver']['options']) ? $options['resolver']['options'] : null;

            $request = new Request(new Url($request), $resolverClass, $resolverOptions);
        } elseif (!($request instanceof Request)) {
            throw new \InvalidArgumentException("Embed::create only accepts instances of Embed\\Request or strings");
        }

        if (!$request->isValid()) {
            return false;
        }

        //If is a file use File Adapter
        if (Adapters\File::check($request)) {
            return new Adapters\File($request, $options);
        }

        //Search the adapter using the domain
        $class = 'Embed\\Adapters\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $request->url->getDomain()))));

        if (class_exists($class)) {
            if (call_user_func(array($class, 'check'), $request)) {
                return new $class($request, $options);
            }
        }

        if (Adapters\Webpage::check($request)) {
            return new Adapters\Webpage($request, $options);
        }

        return false;
    }

    /**
     * Gets the info from a source (list of urls)
     *
     * @param string|Request $url     The url or a request with the source url
     * @param null|array     $options Options passed to the adapter
     *
     * @return false|Sources\SourceInterface
     */
    public static function createSource($request, array $options = null)
    {
        if (is_string($request)) {
            $resolverClass = isset($options['resolver']['class']) ? $options['resolver']['class'] : null;
            $resolverOptions = isset($options['resolver']['options']) ? $options['resolver']['options'] : null;

            $request = new Request(new Url($request), $resolverClass, $resolverOptions);
        } elseif (!($request instanceof Request)) {
            throw new \InvalidArgumentException("Embed::createSource only accepts instances of Embed\\Request or strings");
        }

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
}

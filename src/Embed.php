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
     * @param string|Request $request The url or a request with the url
     * @param array          $config  Options passed to the adapter
     *
     * @throws Exceptions\InvalidUrlException If the urls is not valid
     * @throws \InvalidArgumentException      If any config argument is not valid
     *
     * @return AdapterInterface
     */
    public static function create($request, array $config = [])
    {
        if (!($request instanceof Request)) {
            $request = new Request(new Uri($request));
        }

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

        throw new Exceptions\InvalidUrlException(sprintf("Invalid url '%s'", (string) $request->getUri()));
    }

    /**
     * Process the adapter.
     */
    private function process(AdapterInterface $adapter)
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

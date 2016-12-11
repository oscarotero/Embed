<?php

namespace Embed\Providers\OEmbed;

use Embed\Adapters\AdapterInterface;
use Embed\Http\Response;
use Embed\Http\Uri;
use DOMDocument;

/**
 * Class to detect the oembed endPoint.
 */
class DOM implements EndPointInterface
{
    protected $response;

    /**
     * Create a instance of a OEmbedEndPoint
     *
     * @param AdapterInterface $adapter
     *
     * @return static
     */
    public static function create(AdapterInterface $adapter)
    {
        return new static($adapter->getResponse());
    }

    /**
     * Construct
     *
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Returns the oembed endPoint
     *
     * @return Uri|null
     */
    public function getEndPoint()
    {
        $html = $this->response->getHtmlContent();

        if ($html && ($uri = self::getEndPointFromDom($html))) {
            return $this->response->getUri()->create($uri);
        }
    }

    /**
     * Extract oembed information from the <link rel="alternate"> elements
     * Note: Some sites use <meta rel="alternate"> instead.
     *
     * @param DOMDocument $html
     *
     * @return string|null
     */
    protected static function getEndPointFromDom(DOMDocument $html)
    {
        foreach (['link', 'meta'] as $tagName) {
            foreach ($html->getElementsByTagName($tagName) as $link) {
                $rel = trim(strtolower($link->getAttribute('rel')));
                $href = $link->getAttribute('href');

                if (empty($href)) {
                    continue;
                }

                if ($rel === 'alternate') {
                    switch (strtolower($link->getAttribute('type'))) {
                        case 'application/json+oembed':
                        case 'application/xml+oembed':
                        case 'text/json+oembed':
                        case 'text/xml+oembed':
                            return $href;
                    }
                }
            }
        }
    }
}

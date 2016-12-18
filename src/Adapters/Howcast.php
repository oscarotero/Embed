<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to get the embed code from howcast.com.
 */
class Howcast extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
            'www.howcast.com/videos/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $dom = $this->getResponse()->getHtmlContent();
        $modal = $dom->getElementById('embedModal');

        if ($modal) {
            foreach ($dom->getElementsByTagName('textarea') as $textarea) {
                return $textarea->nodeValue;
            }
        }
    }
}

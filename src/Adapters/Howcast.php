<?php

namespace Embed\Adapters;

use Embed\Http\Request;

/**
 * Adapter to get the embed code from howcast.com.
 */
class Howcast extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
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

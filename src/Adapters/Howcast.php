<?php
/**
 * Adapter to get the embed code from spreaker.com
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;
use Embed\Url;

class Howcast extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'http?://www.howcast.com/videos/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $dom = $this->request->getHtmlContent();
        $modal = $dom->getElementById('embedModal');

        if ($modal) {
            foreach ($dom->getElementsByTagName('textarea') as $textarea) {
                return $textarea->nodeValue;
            }
        }
    }
}

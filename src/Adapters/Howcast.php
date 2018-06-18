<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;

/**
 * Adapter to get the embed code from howcast.com.
 */
class Howcast extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
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

        if (!($dom = $this->getResponse()->getHtmlContent())) {
            return;
        }

        // #embedModal textarea
        $textarea = Utils::xpathQuery($dom, "descendant-or-self::*[@id = 'embedModal']/descendant-or-self::*/textarea");
        
        if ($textarea) {
            return $textarea->nodeValue;
        }
    }
}

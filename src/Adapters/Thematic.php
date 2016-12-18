<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide information from thematic.
 */
class Thematic extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.thematic.co/stories/*',
            'www.thematic.co/album/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $html = $this->getResponse()->getHtmlContent();

        foreach ($html->getElementsByTagName('div') as $div) {
            if ($div->hasAttribute('class') && $div->getAttribute('class') === 'code') {
                $code = (string) $div->nodeValue;

                preg_match('/width="(\d+)" height="(\d+)"/', $code, $matches);
                $this->width = (int) $matches[1];
                $this->height = (int) $matches[2];

                return $code;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        $this->code = $this->getCode();

        return $this->width;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        $this->code = $this->getCode();

        return $this->height;
    }
}

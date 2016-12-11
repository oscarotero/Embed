<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Http\Request;

/**
 * Adapter to get the embed code from spreaker.com.
 */
class Spreaker extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->getResponse()->getUri()->match([
            'http?://www.spreaker.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $dom = $this->getResponse()->getHtmlContent();

        foreach ($dom->getElementsByTagName('a') as $a) {
            if ($a->hasAttribute('data-episode_id')) {
                $id = (int) $a->getAttribute('data-episode_id');

                if ($id) {
                    $uri = $this->getResponse()->getUri()
                        ->withPath('embed/player/standard')
                        ->withQueryParameters([
                            'autoplay' => 'false',
                            'episode_id' => $id,
                        ]);

                    return Utils::iframe($uri, $this->width, $this->height, 'min-width:400px;border:none;overflow:hidden;');
                }

                break;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return '100%';
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 131;
    }
}

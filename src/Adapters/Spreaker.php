<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

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
        return $request->isValid() && $request->match([
            'http?://www.spreaker.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $dom = $this->request->getHtmlContent();

        foreach ($dom->getElementsByTagName('a') as $a) {
            if ($a->hasAttribute('data-episode_id')) {
                $id = (int) $a->getAttribute('data-episode_id');

                if ($id) {
                    return Utils::iframe($this->request->createUrl()
                        ->withPath('embed/player/standard')
                        ->withQueryParameters([
                            'autoplay' => 'false',
                            'episode_id' => $id,
                        ]), $this->width, $this->height, 'min-width:400px;border:none;overflow:hidden;');
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

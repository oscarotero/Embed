<?php
/**
 * Adapter to get the embed code from spreaker.com
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;
use Embed\Url;

class Spreaker extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
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
                    $url = (new Url($this->request->getUrl()))
                        ->withPath('embed/player/standard')
                        ->withQueryParameters([
                            'autoplay' => 'false',
                            'episode_id' => $id
                        ])
                        ->getUrl();

                    return Utils::iframe($url, '100%', 131, 'min-width:400px;border:none;overflow:hidden;');
                }

                break;
            }
        }
    }
}

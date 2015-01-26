<?php
/**
 * Adapter to get the embed code from spreaker.com
 */
namespace Embed\Adapters;

use Embed\Utils;

class Spreaker extends Webpage implements AdapterInterface
{
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
                    return Utils::iframe('http://www.spreaker.com/embed/player/standard?autoplay=false&episode_id='.$id, '100%', 131, 'min-width:400px;');
                }
                break;
            }
        }
    }
}

<?php
/**
 * Adapter provider more information from google maps
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Request;
use Embed\Utils;

class Google extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://maps.google.*',
            'https://www.google.*/maps*',
            'https://drive.google.com/file/*/view',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = new Url($this->request->getUrl());

        if ($this->request->getHost() === 'drive.google.com') {
            $url = $url->withDirectoryPosition(3, 'preview');
        } else {
            $url->withQueryParameter('output', 'embed')
                ->withQueryParameter('s', '');
        }

        return Utils::iframe($url->getUrl());
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return [];
    }
}

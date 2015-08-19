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
        return $request->isValid() && $request->match([
            //'https://maps.google.*',
            //'https://www.google.*/maps*',
            'https://drive.google.com/file/*/view',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = $this->request->createUrl()
            ->withDirectoryPosition(3, 'preview')
            ->withQueryParameters([]);

        return Utils::iframe($url);

        //this code of google maps no longer works
        //return Utils::iframe($url->withQueryParameter('output', 'embed')->withQueryParameter('s', ''));
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return [];
    }
}

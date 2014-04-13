<?php
/**
 * Adapter to get the embed code from gist.github.com
 */
namespace Embed\Adapters;

use Embed\Request;

class Github extends Webpage implements AdapterInterface
{
    public static function check(Request $request)
    {
        return $request->match(array(
            'https://gist.github.com/*/*'
        ));
    }

    public function getCode()
    {
        $url = $this->getUrl();

        if (substr($url, -1) === '/') {
            $url = substr($url, 0, -1);
        }

        return '<script src="'.$url.'.js"></script>';
    }

    public function getUrl()
    {
        return $this->request->getUrl();
    }

    public function getProviderName()
    {
        return 'Gist';
    }

    public function getProviderUrl()
    {
        return 'https://gist.github.com';
    }
}

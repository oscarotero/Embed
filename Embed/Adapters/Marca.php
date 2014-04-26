<?php
/**
 * Adapter to fix the embed code from marca.com
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Viewers;

class Marca extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://www.marca.com/*'
        ));
    }


    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        if (($code = parent::getCode())) {
            $errors = libxml_use_internal_errors(true);
            $html = new \DOMDocument();
            $result = $html->loadHtml($code);
            libxml_use_internal_errors($errors);

            if ($result) {
                $startValue = 'http://cachevideos.marca.com/multimedia/reproductores/v2/reproductor_video.swf';
                $startValueLength = strlen($startValue);

                foreach ($html->getElementsByTagName('param') as $param) {
                    if ($param->getAttribute('name') === 'movie') {
                        $value = $param->getAttribute('value');

                        if (substr($value, 0, $startValueLength) === $startValue) {
                            return Viewers::videoHtml($this->getImage(), substr($value, $startValueLength));
                        }
                    }
                }
            }
        }

        return $code;
    }
}

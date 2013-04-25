<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Url;
use Embed\Providers\OEmbed;

class OEmbedImplementations extends Provider {

	public static function create (Url $Url) {
        static $implementations = null;
        if($implementations === null)
        {
            $implementations = array();
            $oembed_classes = glob(__DIR__.'/OEmbed/*.php');
            foreach ($oembed_classes as $file)
            {
                $class_name = basename($file, '.php');
                $class = 'Embed\\Providers\\OEmbed\\'.$class_name;
                $implementations[$class_name] = array(
                    'patterns' => call_user_func(array($class, 'getPatterns')),
                    'endPoint' => call_user_func(array($class, 'getEndpoint')),
                    'params' => call_user_func(array($class, 'getParams')),
                );
            }
        }
		foreach ($implementations as $settings) {
			if ($Url->match($settings['patterns'])) {
				$EndPoint = new Url($settings['endPoint']);

				if (empty($settings['params']) === false) {
					$EndPoint->setParameter($settings['params']);
				}

				$EndPoint->setParameter('url', $Url->getUrl());

				return new OEmbed($EndPoint);
			}
		}
	}
}
?>

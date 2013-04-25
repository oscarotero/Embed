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

        //Search the oembed provider using the domain
        $class = 'Embed\\Providers\\OEmbed\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $Url->getDomain()))));

        if (class_exists($class)) {
            $settings = array(
                'patterns' => $class::getPatterns(),
                'endPoint' => $class::getEndpoint(),
                'params' => $class::getParams()
            );

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

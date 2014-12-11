<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;

class OEmbedImplementations extends Provider
{
    /**
     * Creates a new OEmbed instance
     *
     * @param Request $request
     *
     * @return null|OEmbed
     */
    public static function create(Request $request, array $extraParameters = array())
    {
        //Search the oembed provider using the domain
        $class = 'Embed\\Providers\\OEmbed\\'.str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $request->url->getDomain()))));

        if (class_exists($class)) {
            $settings = array(
                'patterns' => $class::getPatterns(),
                'endPoint' => $class::getEndpoint(),
                'params' => $class::getParams(),
            );

            if ($request->match($settings['patterns'])) {
                $endPoint = $request->createRequest($settings['endPoint']);

                if ($extraParameters) {
                    $endPoint->startingUrl->setParameter($extraParameters);
                }

                if (empty($settings['params']) === false) {
                    $endPoint->startingUrl->setParameter($settings['params']);
                }

                $endPoint->startingUrl->setParameter('url', $request->url->getUrl());

                return new OEmbed($endPoint);
            }
        }
    }
}

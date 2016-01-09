<?php

namespace Embed\Providers;

/**
 * JsonLd provider.
 *
 * Load the json-ld data of an url and store it
 */
class JsonLd extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!($html = $this->request->getHtmlContent())) {
            return false;
        }

        foreach ($html->getElementsByTagName('script') as $script) {
            if ($script->hasAttribute('type') && strtolower($script->getAttribute('type')) === 'application/ld+json') {
                if (empty($script->nodeValue)) {
                    return false;
                }

                try {
                    $json = json_decode($script->nodeValue, true);
                    $this->bag->set($json);
                } catch (\Exception $exception) {
                    return false;
                }

                break;
            }
        }
    }
}

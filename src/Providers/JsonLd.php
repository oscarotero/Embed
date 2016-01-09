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
                $value = trim($script->nodeValue);

                if (empty($value)) {
                    return false;
                }

                try {
                    $json = json_decode($value, true);
                    $this->bag->set($json);
                } catch (\Exception $exception) {
                    return false;
                }

                break;
            }
        }
    }
}

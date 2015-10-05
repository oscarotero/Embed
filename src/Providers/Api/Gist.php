<?php

namespace Embed\Providers\Api;

use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;

/**
 * Provider to use the API of gist.github.com.
 */
class Gist extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $api = $this->request->withExtension('json');

        if (($json = $api->getJsonContent())) {
            $this->bag->set($json);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        if ($this->getCode() !== null) {
            return 'rich';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if (($code = $this->bag->get('div')) && ($stylesheet = $this->bag->get('stylesheet'))) {
            return  '<link href="'.$stylesheet.'" rel="stylesheet">'.$code;
        }
    }
}

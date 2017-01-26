<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;

/**
 * Provider to use the API of gist.github.com.
 */
class Gist extends Provider
{
    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        $endPoint = $adapter->getResponse()->getUrl()->withExtension('json');
        $response = $adapter->getDispatcher()->dispatch($endPoint);

        if (($json = $response->getJsonContent())) {
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
        if (($code = $this->bag->get('div', true)) && ($stylesheet = $this->normalizeUrl($this->bag->get('stylesheet')))) {
            return  '<link href="'.$stylesheet.'" rel="stylesheet">'.$code;
        }
    }
}

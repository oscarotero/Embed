<?php

namespace Embed\Providers\Api;

use Embed\Http\Request;
use Embed\Adapters\AdapterInterface;
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
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $endPoint = $adapter->getResponse->getUri()->withExtension('json');
        $request = $adapter->createRequest($endPoint);

        if (($json = $request->getResponse()->getJsonContent())) {
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

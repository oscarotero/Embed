<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Providers\Api;

/**
 * Adapter to provide information from imageshack.
 */
class Imageshack extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUri()->match([
            'imageshack.com/i/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $this->providers = ['imageshack' => new Api\Imageshack($this)] + $this->providers;
    }
}

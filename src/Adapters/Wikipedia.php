<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Providers\Api;

/**
 * Adapter to provide information from wikipedia.
 */
class Wikipedia extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            '*.wikipedia.org/wiki/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $this->providers = ['wikipedia' => new Api\Wikipedia($this)] + $this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Wikipedia';
    }
}

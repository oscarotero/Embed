<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;
use Embed\Providers\Api;

/**
 * Adapter provider more information from some facebook pages.
 */
class Facebook extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'www.facebook.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        $this->providers = ['facebook' => new Api\Facebook($this)] + $this->providers;
    }
}

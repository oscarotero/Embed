<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

/**
 * Adapter to provide information from any facebook page using its graph API.
 */
class Facebook extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https://www.facebook.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        $this->addProvider('facebook', new Api\Facebook());

        parent::run();
    }
}

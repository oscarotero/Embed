<?php

/**
 * Adapter to provide information from imageshack.
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

class Imageshack extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://imageshack.com/i/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        $this->addProvider('imageshack', new Api\Imageshack());

        parent::run();
    }
}

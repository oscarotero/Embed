<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

/**
 * Adapter to provide information from wikipedia.
 */
class Wikipedia extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://*.wikipedia.org/wiki/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        $this->addProvider('wikipedia', new Api\Wikipedia());

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Wikipedia';
    }
}

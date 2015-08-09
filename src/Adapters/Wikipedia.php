<?php
/**
 * Adapter to provide information from wikipedia
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

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
    public function run()
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

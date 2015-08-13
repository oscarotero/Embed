<?php
/**
 * Adapter to provide information from any facebook page using its graph API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

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
    public function run()
    {
        $this->addProvider('facebook', new Api\Facebook());

        parent::run();
    }
}

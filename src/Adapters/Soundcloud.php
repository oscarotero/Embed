<?php
/**
 * Adapter to provide information from soundcloud.com API
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

class Soundcloud extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://soundcloud.com/*',
            'https?://m.soundcloud.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->addProvider('soundcloud', new Api\Soundcloud());

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->code ? 'rich' : 'link';
    }
}

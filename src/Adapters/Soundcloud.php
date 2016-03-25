<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

/**
 * Adapter to provide information from soundcloud.com API.
 */
class Soundcloud extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid([200, 503]) && $request->match([
            'https?://soundcloud.com/*',
            'https?://m.soundcloud.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
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

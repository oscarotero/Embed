<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

/**
 * Adapter to provide information from youtube.
 * Required when youtube returns a 429 status code.
 */
class Youtube extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid([200, 429]) && $request->match([
            'https?://*.youtube.*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        if ($this->request->getHttpCode() === 429) {
            $this->addProvider('oembed', new Providers\OEmbed());

            return;
        }

        parent::run();
    }
}

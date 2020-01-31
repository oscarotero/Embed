<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

/**
 * Adapter to provide information from Vimeo.
 * Required when Vimeo returns a 403 status code.
 */
class Vimeo extends Webpage implements AdapterInterface
{

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid([200, 403]) && $request->match([
            'https?://*.vimeo.com*',
            'https?://vimeo.com*',
        ]);
    }

    /**
     * @inheritDoc
     */
    protected function run()
    {
        if ($this->request->getHttpCode() === 403) {
            $this->addProvider('oembed', new Providers\OEmbed());

         return;
        }

        parent::run();
    }

}

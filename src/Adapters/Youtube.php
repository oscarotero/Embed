<?php
/**
 * Adapter to provide information from wikipedia
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers;

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
    public function run()
    {
        if ($this->request->getHttpCode() === 429) {
            $this->addProvider('oembed', new Providers\OEmbed());

            return;
        }

        parent::run();
    }
}

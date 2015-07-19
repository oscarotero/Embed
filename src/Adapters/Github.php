<?php
/**
 * Adapter to get the embed code from gist.github.com
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Providers\Api;

class Github extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://gist.github.com/*/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->addProvider('gist', new Api\Gist());

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Gist';
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return 'https://gist.github.com';
    }
}

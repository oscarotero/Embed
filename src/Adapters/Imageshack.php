<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Providers\Api;

/**
 * Adapter to provide information from imageshack.
 */
class Imageshack extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            'https?://imageshack.com/i/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        $this->providers = ['imageshack' => new Api\Imageshack($this)] + $this->providers;
    }
}

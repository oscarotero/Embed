<?php

namespace Embed\Adapters;

use Embed\Http\Request;
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
        return $request->getResponse()->isValid([200, 503]) && $request->getResponse()->getUri()->match([
            'soundcloud.com/*',
            'm.soundcloud.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        $this->providers = ['soundcloud' => new Api\Soundcloud($this)] + $this->providers;
    }
}

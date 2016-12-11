<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Providers\Api;

/**
 * Adapter to provide information from wikipedia.
 */
class Wikipedia extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            '*.wikipedia.org/wiki/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        $this->providers = ['wikipedia' => new Api\Wikipedia($this)] + $this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Wikipedia';
    }
}

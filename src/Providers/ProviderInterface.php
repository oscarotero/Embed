<?php

namespace Embed\Providers;

use Embed\Request;
use Embed\DataInterface;

/**
 * Interface used by all providers.
 */
interface ProviderInterface extends DataInterface
{
    /**
     * Init the provider.
     *
     * @param Request $request
     * @param array   $config
     */
    public function init(Request $request, array $config = null);

    /**
     * Run the provider.
     */
    public function run();
}

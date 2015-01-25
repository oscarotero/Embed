<?php
/**
 * Interface used by all providers
 */
namespace Embed\Providers;

use Embed\Request;
use Embed\DataInterface;

interface ProviderInterface extends DataInterface
{
    /**
     * Init the provider
     *
     * @param Request $request
     * @param array   $options
     */
    public function init(Request $request, array $options);
}

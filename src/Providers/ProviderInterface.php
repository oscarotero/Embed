<?php

namespace Embed\Providers;

use Embed\Adapters\AdapterInterface;
use Embed\DataInterface;
use Embed\Bag;

/**
 * Interface used by all providers.
 */
interface ProviderInterface extends DataInterface
{
    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter);

    /**
     * Returns the bag containing all data
     *
     * @return Bag
     */
    public function getBag();
}

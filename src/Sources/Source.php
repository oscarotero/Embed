<?php

namespace Embed\Sources;

use Embed\GetTrait;

/**
 * Base Source extended by all sources
 * Provide default functionalities.
 *
 * @property null|string $providerUrl
 * @property string      $sourceUrl
 * @property array       $items
 */
abstract class Source
{
    use GetTrait;

    public $request;
}

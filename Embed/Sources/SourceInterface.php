<?php
/**
 * Interface used by all sources
 */
namespace Embed\Sources;

use Embed\Url;

interface SourceInterface
{
    public static function check (Url $Url);

    public function __construct (Url $Url);

    public function isValid ();

    public function getSourceUrl ();

    public function getProviderUrl ();

    public function getItems ();
}

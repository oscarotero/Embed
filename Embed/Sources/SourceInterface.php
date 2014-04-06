<?php
/**
 * Interface used by all sources
 */
namespace Embed\Sources;

use Embed\Request;

interface SourceInterface
{
    public static function check (Request $request);

    public function __construct (Request $request);

    public function isValid ();

    public function getSourceUrl ();

    public function getProviderUrl ();

    public function getItems ();
}

<?php
/**
 * Interface used by all sources
 */
namespace Embed\Sources;

use Embed\Url;

interface SourceInterface {
	public function __construct (Url $Url);

	public function getUrls ();
}

<?php
/**
 * Interface used by all sources
 */
namespace Embed\Sources;

use Embed\Url;

interface SourceInterface {
	static public function check (Url $Url);

	public function __construct (Url $Url);

	public function isValid ();

	public function getUrl ();

	public function getUrls ();
}

<?php
/**
 * Interface used by all adapters
 */
namespace Embed\Adapters;

use Embed\Url;

interface AdapterInterface {
	static public function check (Url $Url);

	public function __construct (Url $Url);

	public function getTitle ();

	public function getDescription ();

	public function getType ();

	public function getCode ();

	public function getUrl ();

	public function getAuthorName ();

	public function getAuthorUrl ();

	public function getProviderIcons ();
	
	public function getProviderIcon ();

	public function getProviderName ();

	public function getProviderUrl ();

	public function getImage ();

	public function getImageWidth ();

	public function getImageHeight ();

	public function getWidth ();

	public function getHeight ();

	public function getAspectRatio ();
}

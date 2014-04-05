<?php
/**
 * Interface used by all adapters
 */
namespace Embed\Adapters;

use Embed\Request;

interface AdapterInterface
{
    public static function check (Request $request);

    public function __construct (Request $request, array $options = null);

    public function getTitle ();

    public function getDescription ();

    public function getType ();

    public function getSource ();

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

<?php
/**
 * Interface used by all adapters
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\DataInterface;

interface AdapterInterface extends DataInterface
{
    /**
     * Checks whether the request is valid to this Adapter
     *
     * @param Request $request
     *
     * @return boolean
     */
    public static function check(Request $request);

    /**
     * Constructor.
     *
     * @param Request    $request
     * @param null|array $config
     */
    public function __construct(Request $request, array $config = null);

    /**
     * Run the provider
     */
    public function run();

    /**
     * Gets the best icon provider
     * if $config['getBiggerIcon'] is true, returns the bigger image found
     * else, returns the first found
     *
     * @return string|null
     */
    public function getProviderIcon();

    /**
     * Gets the best image
     * if $config['getBiggerImage'] is true, returns the biggest image
     *
     * @return string|null
     */
    public function getImage();

    /**
     * Gets the image width
     *
     * @return integer|null
     */
    public function getImageWidth();

    /**
     * Gets the image height
     *
     * @return integer|null
     */
    public function getImageHeight();

    /**
     * Gets the aspect ratio of the embedded widget
     * (useful to make it flexible)
     *
     * @return float|null
     */
    public function getAspectRatio();
}

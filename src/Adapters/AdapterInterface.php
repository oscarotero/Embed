<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Http\Response;
use Embed\DataInterface;
use Embed\Badge;

/**
 * Interface used by all adapters.
 */
interface AdapterInterface extends DataInterface
{
    /**
     * Checks whether the request is valid to this Adapter.
     *
     * @param Request $request
     *
     * @return bool
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
     * Returns the request instance.
     *
     * @return Request
     */
    public function getRequest();

    /**
     * Returns the main response instance.
     *
     * @return Response
     */
    public function getResponse();

    /**
     * Returns config container.
     *
     * @return Badge
     */
    public function getConfig();

    /**
     * Returns all images Requests.
     *
     * @return array
     */
    public function getImagesRequests();

    /**
     * Get all providers.
     *
     * @return array
     */
    public function getProviders();

    /**
     * Gets all icon provider urls found
     * It returns also the width, height and mime-type.
     *
     * @return array
     */
    public function getProviderIcons();

    /**
     * Gets the best icon provider
     * if $config['getBiggerIcon'] is true, returns the bigger image found
     * else, returns the first found.
     *
     * @return string|null
     */
    public function getProviderIcon();

    /**
     * Gets all images found in the webpage
     * It returns also the width, height and mime-type.
     *
     * @return array
     */
    public function getImages();

    /**
     * Gets the best image
     * if $config['getBiggerImage'] is true, returns the biggest image.
     *
     * @return string|null
     */
    public function getImage();

    /**
     * Gets the image width.
     *
     * @return int|null
     */
    public function getImageWidth();

    /**
     * Gets the image height.
     *
     * @return int|null
     */
    public function getImageHeight();

    /**
     * Gets the aspect ratio of the embedded widget
     * (useful to make it responsive).
     *
     * @return float|null
     */
    public function getAspectRatio();
}

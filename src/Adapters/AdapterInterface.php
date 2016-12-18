<?php

namespace Embed\Adapters;

use Embed\Http\DispatcherInterface;
use Embed\Http\Response;
use Embed\DataInterface;

/**
 * Interface used by all adapters.
 *
 * @property null|string  $title
 * @property null|string  $description
 * @property null|string  $url
 * @property null|string  $type
 * @property array        $tags
 * @property array        $feeds
 * @property array        $images
 * @property array        $imagesUrls
 * @property null|string  $image
 * @property null|int     $imageWidth
 * @property null|int     $imageHeight
 * @property null|string  $code
 * @property null|int     $width
 * @property null|int     $height
 * @property null|float   $aspectRatio
 * @property null|string  $authorName
 * @property null|string  $authorUrl
 * @property array        $providerIcons
 * @property array        $providerIconsUrls
 * @property null|string  $providerIcon
 * @property null|string  $providerName
 * @property null|string  $providerUrl
 * @property null|string  $publishedTime
 */
interface AdapterInterface extends DataInterface
{
    /**
     * Checks whether the response is valid to this Adapter.
     *
     * @param Response $response
     *
     * @return bool
     */
    public static function check(Response $response);

    /**
     * Constructor.
     *
     * @param Response  $response
     * @param array $config
     * @param DispatcherInterface $dispatcher
     */
    public function __construct(Response $response, array $config, DispatcherInterface $dispatcher);

    /**
     * Returns the dispatcher used.
     *
     * @return DispatcherInterface
     */
    public function getDispatcher();

    /**
     * Returns the main response instance.
     *
     * @return Response
     */
    public function getResponse();

    /**
     * Get a config value.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return string|null
     */
    public function getConfig($name, $default = null);

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

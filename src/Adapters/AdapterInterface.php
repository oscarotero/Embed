<?php
/**
 * Interface used by all adapters
 */
namespace Embed\Adapters;

use Embed\Request;

interface AdapterInterface
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
     * @param null|array $options
     */
    public function __construct(Request $request, array $options = null);

    /**
     * Gets the title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Gets the description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Gets the type of the url
     * The types are the same than the oEmbed types:
     * video, photo, link, rich
     *
     * @return string|null
     */
    public function getType();

    /**
     * Gets the source url (feed, api, etc)
     *
     * @return string|null
     */
    public function getSource();

    /**
     * Gets the embed code
     *
     * @return string|null
     */
    public function getCode();

    /**
     * Gets the canonical url
     *
     * @return string|null
     */
    public function getUrl();

    /**
     * Gets the author name
     *
     * @return string|null
     */
    public function getAuthorName();

    /**
     * Gets the author url
     *
     * @return string|null
     */
    public function getAuthorUrl();

    /**
     * Gets all icon provider urls found
     *
     * @return array
     */
    public function getProviderIcons();

    /**
     * Gets the best icon provider
     * if $options['getBiggerIcon'] is true, returns the bigger image found
     * else, returns the first found
     *
     * @return string|null
     */
    public function getProviderIcon();

    /**
     * Gets the provider name
     *
     * @return string|null
     */
    public function getProviderName();

    /**
     * Gets the provider url (usually the home url of the link)
     *
     * @return string|null
     */
    public function getProviderUrl();

    /**
     * Gets all images found in the webpage
     *
     * @return array
     */
    public function getImages();

    /**
     * Gets the best image
     * if $options['getBiggerImage'] is true, returns the biggest image
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
     * Gets the width of the embedded widget
     *
     * @return integer|null
     */
    public function getWidth();

    /**
     * Gets the height of the embedded widget
     *
     * @return integer|null
     */
    public function getHeight();

    /**
     * Gets the aspect ratio of the embedded widget
     * (useful to make it flexible)
     *
     * @return float|null
     */
    public function getAspectRatio();
}

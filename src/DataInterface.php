<?php
/**
 * Interface used by all adapters and providers
 */
namespace Embed;

interface DataInterface
{
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
     * Gets the published time, if the webpage is an article
     *
     * @return string|null
     */
    public function getPublishedTime();
}

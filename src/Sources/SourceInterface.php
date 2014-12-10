<?php
/**
 * Interface used by all sources
 */
namespace Embed\Sources;

use Embed\Request;

interface SourceInterface
{
    /**
     * Checks whether the url is a source url
     *
     * @param Request $request
     *
     * @return boolean
     */
    public static function check(Request $request);

    /**
     * Constructor of the source
     *
     * @param Request $request
     */
    public function __construct(Request $request);

    /**
     * Returns whether the source is a valid url or not
     *
     * @return boolean
     */
    public function isValid();

    /**
     * Returns the source url
     *
     * @return string
     */
    public function getSourceUrl();

    /**
     * Returns the provider url if it's available
     *
     * @return null|string
     */
    public function getProviderUrl();

    /**
     * Returns all items (urls) found in this source
     *
     * @return array
     */
    public function getItems();
}

<?php

namespace Embed\Http;

/**
 * Interface used by all text responses.
 */
interface TextResponseInterface extends ResponseInterface
{
    /**
     * Get the image size.
     *
     * @return array|null
     */
    public function getImageSize();
}

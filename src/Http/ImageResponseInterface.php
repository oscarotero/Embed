<?php

namespace Embed\Http;

/**
 * Interface used by all image responses.
 */
interface ImageResponseInterface extends ResponseInterface
{
    /**
     * Get the image size.
     *
     * @return array|null
     */
    public function getImageSize();
}

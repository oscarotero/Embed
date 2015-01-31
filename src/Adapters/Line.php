<?php
/**
 * Adapter to get the embed code from line.do
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;

class Line extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://line.do/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = clone $this->request->url;

        $url->setDirectory(0, 'embed');
        $url->setDirectory(2, 'vertical');

        return Utils::iframe($url->getUrl(), $this->width, $this->height);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return 640;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return 640;
    }
}

<?php
/**
 * Adapter to get the embed code from line.do
 */
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;
use Embed\Url;

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
        $id = $this->request->getDirectoryPosition(2);

        $url = (new Url($this->request->getUrl()))
            ->withPath("embed/{$id}/vertical")
            ->getUrl();

        return Utils::iframe($url, $this->width, $this->height, 'border:1px solid #e7e7e7;');
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

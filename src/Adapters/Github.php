<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Providers\Api;

/**
 * Adapter to get the embed code from gist.github.com.
 */
class Github extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid() && $response->getUrl()->match([
            'gist.github.com/*/*',
            'github.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        parent::init();

        if ($this->getResponse()->getUrl()->getHost() === 'gist.github.com') {
            $this->providers = ['gist' => new Api\Gist($this)] + $this->providers;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        //Open graph returns as canonical url the main repo url, instead the file
        return (string) $this->getResponse()->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $url = $this->getResponse()->getUrl();

        if ($url->match('github.com/*/*/blob/*')) {
            $username = $url->getDirectoryPosition(0);
            $repo = $url->getDirectoryPosition(1);
            $ref = $url->getDirectoryPosition(3);
            $path_to_file = implode('/', $url->getSlicePath(4));

            switch ($url->getExtension()) {
                case 'geojson':
                    //https://help.github.com/articles/mapping-geojson-files-on-github/#embedding-your-map-elsewhere
                    return "<script src=\"https://embed.githubusercontent.com/view/geojson/{$username}/{$repo}/{$ref}/{$path_to_file}\"></script>";

                case 'stl':
                    //https://help.github.com/articles/3d-file-viewer/#embedding-your-model-elsewhere
                    return "<script src=\"https://embed.githubusercontent.com/view/3d/{$username}/{$repo}/{$ref}/{$path_to_file}\"></script>";
            }
        }

        return parent::getCode();
    }
}

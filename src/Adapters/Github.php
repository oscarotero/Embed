<?php

namespace Embed\Adapters;

use Embed\Http\Request;
use Embed\Providers\Api;

/**
 * Adapter to get the embed code from gist.github.com.
 */
class Github extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->getResponse()->isValid() && $request->getResponse()->getUri()->match([
            'gist.github.com/*/*',
            'github.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        parent::__construct($request, $config);

        if ($this->getResponse()->getUri()->getHost() === 'gist.github.com') {
            $this->providers = ['gist' => new Api\Gist($this)] + $this->providers;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        //Open graph returns as canonical url the main repo url, instead the file
        return (string) $this->getResponse()->getUri();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        $uri = $this->getResponse()->getUri();

        if ($uri->match('github.com/*/*/blob/*')) {
            $username = $uri->getDirectoryPosition(0);
            $repo = $uri->getDirectoryPosition(1);
            $ref = $uri->getDirectoryPosition(3);
            $path_to_file = implode('/', $uri->getSlicePath(4));

            switch ($uri->getExtension()) {
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

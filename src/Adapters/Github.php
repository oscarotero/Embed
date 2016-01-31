<?php

namespace Embed\Adapters;

use Embed\Request;
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
        return $request->isValid() && $request->match([
            'https://gist.github.com/*/*',
            'https://github.com/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        if ($this->request->getHost() === 'gist.github.com') {
            $this->addProvider('gist', new Api\Gist());
        }

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        //Open graph returns as canonical url the main repo url, instead the file
        return $this->request->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        if ($this->request->match('https://github.com/*/*/blob/*')) {
            $username = $this->request->getDirectoryPosition(0);
            $repo = $this->request->getDirectoryPosition(1);
            $ref = $this->request->getDirectoryPosition(3);
            $path_to_file = implode('/', $this->request->getSlicePath(4));

            switch ($this->request->getExtension()) {
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

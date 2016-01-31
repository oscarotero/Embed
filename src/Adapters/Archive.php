<?php

namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Providers\Api;

/**
 * Adapter to provide information from archive.org API.
 */
class Archive extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https?://archive.org/details/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function run()
    {
        $this->addProvider('archive', new Api\Archive());

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return Utils::iframe(str_replace('/details/', '/embed/', $this->getUrl()), $this->getWidth(), $this->getHeight());
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
        return 480;
    }
}

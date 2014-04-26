<?php
/**
 * Adapter to fix some issues from mit.edu (not complete yet)
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Viewers;

class Mit extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public static function check(Request $request)
    {
        return $request->match(array(
            'http://media.mit.edu/video/view/*',
            'http://www.media.mit.edu/video/view/*'
        ));
    }


    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return Viewers::iframe(str_replace('/video/view/', '/video/embed/', $this->getUrl()));
    }


    /**
     * {@inheritDoc}
     */
    public function getProviderName()
    {
        return 'MIT Media Lab';
    }
}

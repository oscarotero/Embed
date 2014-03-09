<?php
/**
 * Adapter to fix some issues from mit.edu (not complete yet)
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Viewers;

class Mit extends Webpage implements AdapterInterface
{
    public static function check(Url $Url)
    {
        return $Url->match(array(
            'http://media.mit.edu/video/view/*',
            'http://www.media.mit.edu/video/view/*'
        ));
    }

    public function getCode()
    {
        $url = $this->getUrl();

        return Viewers::iframe(str_replace('/video/view/', '/video/embed/', $url));
    }

    public function getProviderName()
    {
        return 'MIT Media Lab';
    }
}

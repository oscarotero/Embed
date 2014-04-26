<?php
/**
 * Adapter to fix some bugs from yfrog.com meta tags
 */
namespace Embed\Adapters;

class Yfrog extends Webpage implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function getImage()
    {
        $image = parent::getImage();

        if ($image) {
            $image = str_replace('/twitter.yfrog.com/', '/yfrog.com/', $image);

            return str_replace(':small', ':medium', $image);
        }
    }


    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        if ($this->getImage()) {
            return 'image';
        }
    }


    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {
        if ($author = strstr($this->getTitle(), 'Shared by')) {
            return trim(substr($author, 10));
        }
    }


    /**
     * {@inheritDoc}
     */
    public function getAuthorUrl()
    {
        if ($author_name = $this->getAuthorName()) {
            return "http://yfrog.com/user/$author_name/profile";
        }
    }
}

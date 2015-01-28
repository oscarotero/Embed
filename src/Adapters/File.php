<?php
/**
 * Adapter to provide information from raw files
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Providers;
use Embed\ImageInfo;

class File extends Adapter implements AdapterInterface
{
    private static $contentTypes = array(
        'video/ogg' => array('video', 'videoHtml'),
        'application/ogg' => array('video', 'videoHtml'),
        'video/ogv' => array('video', 'videoHtml'),
        'video/webm' => array('video', 'videoHtml'),
        'video/mp4' => array('video', 'videoHtml'),
        'audio/ogg' => array('audio', 'audioHtml'),
        'audio/mp3' => array('audio', 'audioHtml'),
        'audio/mpeg' => array('audio', 'audioHtml'),
        'audio/webm' => array('audio', 'audioHtml'),
        'image/jpeg' => array('photo', 'imageHtml'),
        'image/gif' => array('photo', 'imageHtml'),
        'image/png' => array('photo', 'imageHtml'),
        'image/bmp' => array('photo', 'imageHtml'),
        'image/ico' => array('photo', 'imageHtml'),
        'text/rtf' => array('rich', 'google'),
        'application/pdf' => array('rich', 'google'),
        'application/msword' => array('rich', 'google'),
        'application/vnd.ms-powerpoint' => array('rich', 'google'),
        'application/vnd.ms-excel' => array('rich', 'google'),
        'application/zip' => array('rich', 'google'),
        'application/postscript' => array('rich', 'google'),
        'application/octet-stream' => array('rich', 'google'),
    );

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return isset(self::$contentTypes[$request->getMimeType()]);
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        $this->addProvider('OEmbed', new Providers\OEmbed());
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return self::$contentTypes[$this->request->getMimeType()][0];
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        switch (self::$contentTypes[$this->request->getMimeType()][1]) {
            case 'videoHtml':
                return Utils::videoHtml($this->getImage(), $this->getUrl(), $this->getWidth(), $this->getHeight());

            case 'audioHtml':
                return Utils::audioHtml($this->getUrl());

            case 'google':
                return Utils::google($this->getUrl());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        if ($this->getType() === 'photo') {
            return ImageInfo::getImagesInfo(array($this->getUrl()));
        }

        return array();
    }
}

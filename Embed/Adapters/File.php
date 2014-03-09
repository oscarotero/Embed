<?php
/**
 * Adapter to provide information from raw files
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\Viewers;
use Embed\Providers\OEmbed;
use Embed\Providers\OEmbedImplementations;

class File extends Adapter implements AdapterInterface
{
    private static $contentTypes = array(
        'video/ogg' => array('video', 'videoHtml'),
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
        'application/octet-stream' => array('rich', 'google')
    );

    public static function check(Url $Url)
    {
        return isset(static::$contentTypes[$Url->getMimeType()]);
    }

    protected function initProviders(Url $Url)
    {
        $this->Url = $Url;

        if (($OEmbed = OEmbedImplementations::create($Url))) {
            $this->providers['OEmbed'] = $OEmbed;
        }
    }

    public function getType()
    {
        return static::$contentTypes[$this->Url->getMimeType()][0];
    }

    public function getCode()
    {
        switch (static::$contentTypes[$this->Url->getMimeType()][1]) {
            case 'videoHtml':
                return Viewers::videoHtml($this->getImage(), $this->getUrl(), $this->getWidth(), $this->getHeight());

            case 'audioHtml':
                return Viewers::audioHtml($this->getUrl());

            case 'google':
                return Viewers::google($this->getUrl());
        }
    }

    public function getImages()
    {
        if ($this->getType() === 'photo') {
            return array($this->getUrl());
        }

        return array();
    }

    public function getProviderIcons()
    {
        return array(
            $this->Url->getAbsolute('/favicon.ico'),
            $this->Url->getAbsolute('/favicon.png')
        );
    }
}

<?php
/**
 * Adapter to provide information from raw files
 */
namespace Embed\Adapters;

use Embed\Request;
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

    public static function check(Request $request)
    {
        return isset(static::$contentTypes[$request->getMimeType()]);
    }

    protected function initProviders(Request $request)
    {
        $this->request = $request;

        if (($oEmbed = OEmbedImplementations::create($request))) {
            $this->providers['OEmbed'] = $oEmbed;
        }
    }

    public function getType()
    {
        return static::$contentTypes[$this->request->getMimeType()][0];
    }

    public function getCode()
    {
        switch (static::$contentTypes[$this->request->getMimeType()][1]) {
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
            $this->request->getAbsolute('/favicon.ico'),
            $this->request->getAbsolute('/favicon.png')
        );
    }
}

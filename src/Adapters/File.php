<?php
/**
 * Adapter to provide information from raw files
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Providers;

class File extends Adapter implements AdapterInterface
{
    private static $contentTypes = [
        'video/ogg' => ['video', 'videoHtml'],
        'application/ogg' => ['video', 'videoHtml'],
        'video/ogv' => ['video', 'videoHtml'],
        'video/webm' => ['video', 'videoHtml'],
        'video/mp4' => ['video', 'videoHtml'],
        'audio/ogg' => ['audio', 'audioHtml'],
        'audio/mp3' => ['audio', 'audioHtml'],
        'audio/mpeg' => ['audio', 'audioHtml'],
        'audio/webm' => ['audio', 'audioHtml'],
        'image/jpeg' => ['photo', 'imageHtml'],
        'image/gif' => ['photo', 'imageHtml'],
        'image/png' => ['photo', 'imageHtml'],
        'image/bmp' => ['photo', 'imageHtml'],
        'image/ico' => ['photo', 'imageHtml'],
        'text/rtf' => ['rich', 'google'],
        'application/pdf' => ['rich', 'google'],
        'application/msword' => ['rich', 'google'],
        'application/vnd.ms-powerpoint' => ['rich', 'google'],
        'application/vnd.ms-excel' => ['rich', 'google'],
        'application/zip' => ['rich', 'google'],
        'application/postscript' => ['rich', 'google'],
        'application/octet-stream' => ['rich', 'google'],
    ];

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
    public function run()
    {
        $this->addProvider('oembed', new Providers\OEmbed());
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
            return call_user_func("{$this->imageClass}::getImagesInfo", [$this->getUrl()], $this->imageConfig);
        }

        return [];
    }
}

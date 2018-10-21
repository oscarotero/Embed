<?php

namespace Embed\Adapters;

use Embed\Http\Response;
use Embed\Utils;
use Embed\Providers;

/**
 * Adapter to provide information from raw files.
 */
class File extends Adapter
{
    private static $contentTypes = [
        'video/ogg' => ['video', 'videoHtml'],
        'video/quicktime' => ['video', 'videoHtml'],
        'application/ogg' => ['video', 'videoHtml'],
        'video/ogv' => ['video', 'videoHtml'],
        'video/webm' => ['video', 'videoHtml'],
        'video/mp4' => ['video', 'videoHtml'],
        'audio/ogg' => ['audio', 'audioHtml'],
        'audio/mp3' => ['audio', 'audioHtml'],
        'audio/mpeg' => ['audio', 'audioHtml'],
        'audio/webm' => ['audio', 'audioHtml'],
        'image/jpeg' => ['photo', 'imageHtml'],
        'image/jpg' => ['photo', 'imageHtml'],
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
    public static function check(Response $response)
    {
        return $response->isValid() && isset(self::$contentTypes[$response->getContentType()]);
    }

    /**
     * {@inheritdoc}
     */
    protected function init()
    {
        $this->providers = [
            'oembed' => new Providers\OEmbed($this),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return self::$contentTypes[$this->getResponse()->getContentType()][0];
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if (($code = parent::getcode())) {
            return $code;
        }

        switch (self::$contentTypes[$this->getResponse()->getContentType()][1]) {
            case 'videoHtml':
                return Utils::videoHtml($this->image, $this->url, $this->imageWidth, $this->imageHeight);

            case 'audioHtml':
                return Utils::audioHtml($this->url);

            case 'google':
                return Utils::google($this->url);

            case 'imageHtml':
                return Utils::imageHtml($this->url, 'Remote file', $this->imageWidth, $this->imageHeight);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        if ($this->type === 'photo') {
            return [$this->url];
        }

        return [];
    }
}

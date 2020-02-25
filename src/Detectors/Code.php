<?php
declare(strict_types = 1);

namespace Embed\Detectors;

use Embed\EmbedCode;
use function Embed\html;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        return $this->detectFromEmbed()
            ?: $this->detectFromOpenGraph()
            ?: $this->detectFromTwitter();
    }

    private function detectFromEmbed(): ?EmbedCode
    {
        $oembed = $this->extractor->getOEmbed();
        $html = $oembed->html('html');

        if (!$html) {
            return null;
        }

        return new EmbedCode(
            $html,
            $oembed->int('width'),
            $oembed->int('height')
        );
    }

    private function detectFromOpenGraph(): ?EmbedCode
    {
        $metas = $this->extractor->getMetas();

        $url = $metas->url('og:video:secure_url', 'og:video:url', 'og:video');

        if (!$url) {
            return null;
        }

        if (!($type = pathinfo($url->getPath(), PATHINFO_EXTENSION))) {
            $type = $metas->str('og:video_type');
        }

        $width = $metas->int('twitter:player:width');
        $height = $metas->int('twitter:player:height');

        switch ($type) {
            case 'swf':
            case 'application/x-shockwave-flash':
                return null; //Ignore flash
            case 'mp4':
            case 'ogg':
            case 'ogv':
            case 'webm':
            case 'application/mp4':
            case 'video/mp4':
            case 'video/ogg':
            case 'video/ogv':
            case 'video/webm':
                $code = html('video', [
                    'src' => $url,
                    'width' => $width,
                    'height' => $height,
                ]);
                break;
            default:
                $code = html('iframe', [
                    'src' => $url,
                    'frameborder' => 0,
                    'width' => $width,
                    'height' => $height,
                    'allowTransparency' => 'true',
                ]);
        }

        return new EmbedCode($code, $width, $height);
    }

    private function detectFromTwitter(): ?EmbedCode
    {
        $metas = $this->extractor->getMetas();

        $url = $metas->url('twitter:player');

        if (!$url) {
            return null;
        }

        $width = $metas->int('twitter:player:width');
        $height = $metas->int('twitter:player:height');

        $code = html('iframe', [
            'src' => $url,
            'frameborder' => 0,
            'width' => $width,
            'height' => $height,
            'allowTransparency' => 'true',
        ]);

        return new EmbedCode($code, $width, $height);
    }
}

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
        $html = $oembed->get('html', true);

        if (!$html) {
            return null;
        }

        return new EmbedCode(
            $html,
            $oembed->getInt('width'),
            $oembed->getInt('height')
        );
    }

    private function detectFromOpenGraph(): ?EmbedCode
    {
        $document = $this->extractor->getDocument();

        $url = $document->getMeta('og:video:secure_url')
            ?: $document->getMeta('og:video:url')
            ?: $document->getMeta('og:video');

        if (!$url) {
            return null;
        }

        if (!($path = parse_url($url, PHP_URL_PATH)) || !($type = pathinfo($path, PATHINFO_EXTENSION))) {
            $type = $document->getMeta('og:video_type');
        }

        $width = $document->getMeta('twitter:player:width');
        $height = $document->getMeta('twitter:player:height');

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

        return new EmbedCode(
            $code,
            $width ? (int) $width : null,
            $height ? (int) $height : null
        );
    }

    private function detectFromTwitter(): ?EmbedCode
    {
        $document = $this->extractor->getDocument();

        $url = $document->getMeta('twitter:player');

        if (!$url) {
            return null;
        }

        $width = $document->getMeta('twitter:player:width');
        $height = $document->getMeta('twitter:player:height');

        $code = html('iframe', [
            'src' => $url,
            'frameborder' => 0,
            'width' => $width,
            'height' => $height,
            'allowTransparency' => 'true',
        ]);

        return new EmbedCode(
            $code,
            $width ? (int) $width : null,
            $height ? (int) $height : null
        );
    }
}

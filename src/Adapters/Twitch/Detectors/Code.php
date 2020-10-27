<?php
declare(strict_types = 1);

namespace Embed\Adapters\Twitch\Detectors;

use Embed\Detectors\Code as Detector;
use Embed\EmbedCode;
use function Embed\html;

class Code extends Detector
{
    public function detect(): ?EmbedCode
    {
        return parent::detect()
            ?: $this->fallback();
    }

    private function fallback(): ?EmbedCode
    {
        $path = $this->extractor->getUri()->getPath();
        $parent = $this->extractor->getSetting('twitch:parent');

        if ($id = self::getVideoId($path)) {
            $code = $parent
                ? self::generateIframeCode(['id' => $id, 'parent' => $parent])
                : self::generateJsCode('video', $id);
            return new EmbedCode($code, 620, 378);
        }

        if ($id = self::getChannelId($path)) {
            $code = $parent
                ? self::generateIframeCode(['channel' => $id, 'parent' => $parent])
                : self::generateJsCode('channel', $id);
            return new EmbedCode($code, 620, 378);
        }

        return null;
    }

    private static function getVideoId(string $path): ?string
    {
        if (preg_match('#^/videos/(\d+)$#', $path, $matches)) {
            return $matches[1];
        }

        return null;
    }

    private static function getChannelId(string $path): ?string
    {
        if (preg_match('#^/(\w+)$#', $path, $matches)) {
            return $matches[1];
        }

        return null;
    }

    private static function generateIframeCode(array $params): string
    {
        $query = http_build_query(['autoplay' => 'false'] + $params);

        return html('iframe', [
            'src' => "https://player.twitch.tv/?{$query}",
            'frameborder' => 0,
            'allowfullscreen' => 'true',
            'scrolling' => 'no',
            'height' => 378,
            'width' => 620,
        ]);
    }

    private static function generateJsCode($key, $value)
    {
        return <<<HTML
        <div id="twitch-embed"></div>
        <script src="https://player.twitch.tv/js/embed/v1.js"></script>
        <script type="text/javascript">
            new Twitch.Player("twitch-embed", { {$key}: "{$value}" });
        </script>
        HTML;
    }
}

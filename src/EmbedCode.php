<?php

namespace Embed;

class EmbedCode
{
    public string $html;
    public ?int $width;
    public ?int $height;
    public ?float $ratio;

    public function __construct(string $html, int $width = null, int $height = null)
    {
        $this->html = $html;
        $this->width = $width;
        $this->height = $height;

        if ($width && $height) {
            $this->ratio = round(($height / $width) * 100, 3);
        }
    }

    public function __toString(): string
    {
        return $this->html;
    }
}

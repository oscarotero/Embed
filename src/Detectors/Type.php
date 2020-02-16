<?php
declare(strict_types = 1);

namespace Embed\Detectors;

class Type extends Detector
{
    public const VIDEO = 'video';
    public const PHOTO = 'photo';
    public const LINK = 'link';
    public const RICH = 'rich';

    public function detect(): ?string
    {
        $oembed = $this->extractor->getOEmbed();
        $type = $oembed->get('type');

        if (empty($type)) {
            return null;
        }

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case self::VIDEO:
            case self::PHOTO:
            case self::LINK:
            case self::RICH:
                return $type;
            case 'movie':
                return self::VIDEO;
        }

        return null;
    }
}

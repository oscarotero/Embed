<?php
/**
 * Adapter to provide all information from any webpage (detects html meta tags, opengraph, twitter cards, oembed, etc)
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\FastImage;

use Embed\Providers\Html;
use Embed\Providers\OEmbed;
use Embed\Providers\OEmbedImplementations;
use Embed\Providers\OpenGraph;
use Embed\Providers\TwitterCards;
use Embed\Providers\Facebook;
use Embed\Providers\Embedly;

class Webpage extends Adapter implements AdapterInterface
{
    public static function check(Url $Url)
    {
        return true;
    }

    protected function initProviders(Url $Url)
    {
        $this->Url = $Url;

        $this->providers = array(
            'Html' => new Html($Url),
            'Facebook' => new Facebook($Url),
            'TwitterCards' => new TwitterCards($Url),
            'OpenGraph' => new OpenGraph($Url)
        );

        if ($this->providers['Html']->get('oembed')) {
            $this->providers['OEmbed'] = new OEmbed(new Url($Url->getAbsolute($this->providers['Html']->get('oembed'))));
        } elseif (($OEmbed = OEmbedImplementations::create($Url))) {
            $this->providers['OEmbed'] = $OEmbed;
        } elseif ($this->options['embedlyKey'] && ($OEmbed = Embedly::create($Url, $this->options['embedlyKey']))) {
            $this->providers['OEmbed'] = $OEmbed;
        }

        $this->providers = array_reverse($this->providers);
    }

    public function getImages()
    {
        $images = array();

        foreach ($this->providers as $Provider) {
            $imgs = $Provider->getImage();

            if (empty($imgs)) {
                continue;
            }

            if (!is_array($imgs)) {
                $images[] = $this->Url->getAbsolute($imgs);
                continue;
            }

            foreach ($imgs as $imgs) {
                if (!empty($imgs)) {
                    $images[] = $this->Url->getAbsolute($imgs);
                }
            }
        }

        $images = array_unique($images);

        if ($this->options['getBiggerImage']) {
            $images = FastImage::sortImagesBySize($images);
        }

        return $images;
    }

    public function getProviderIcons()
    {
        $icons = array();

        foreach ($this->providers as $Provider) {
            $ics = $Provider->getProviderIcon();

            if ($ics) {
                if (is_array($ics)) {
                    foreach ($ics as $ics) {
                        $icons[] = $this->Url->getAbsolute($ics);
                    }
                } else {
                    $icons[] = $this->Url->getAbsolute($ics);
                }
            }
        }

        $icons[] = $this->Url->getAbsolute('/favicon.ico');
        $icons[] = $this->Url->getAbsolute('/favicon.png');

        return array_unique($icons);
    }

    public function getType()
    {
        $code = $this->code;

        if (strpos($code, '</video>')) {
            return 'video';
        }

        if (($type = $this->getFromProviders('type'))) {
            return $type;
        }

        if (empty($code)) {
            return 'link';
        }

        if (strpos($code, '</iframe>') || strpos($code, '</object>') || strpos($code, '</embed>') || strpos($code, '</script>')) {
            return 'rich';
        }

        return 'link';
    }

    public function getCode()
    {
        if ($code = $this->getFromProviders('code')) {
            if (strpos($code, '</iframe>') !== false) {
                return preg_replace('|^(<iframe.*</iframe>).*$|Us', '$1', $code);
            }

            if (strpos($code, '</object>') !== false) {
                return preg_replace('|^.*(<object.*</object>).*$|Us', '$1', $code);
            }

            if (strpos($code, '</embed>') !== false) {
                return preg_replace('|^.*(<embed.*</embed>).*$|Us', '$1', $code);
            }

            return $code;
        }
    }

}

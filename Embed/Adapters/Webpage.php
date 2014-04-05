<?php
/**
 * Adapter to provide all information from any webpage (detects html meta tags, opengraph, twitter cards, oembed, etc)
 */
namespace Embed\Adapters;

use Embed\Request;
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
    public static function check(Request $request)
    {
        return true;
    }

    protected function initProviders(Request $request)
    {
        $this->request = $request;

        $this->providers = array(
            'Html' => new Html($request),
            'Facebook' => new Facebook($request),
            'TwitterCards' => new TwitterCards($request),
            'OpenGraph' => new OpenGraph($request)
        );

        if ($this->providers['Html']->get('oembed')) {
            $this->providers['OEmbed'] = new OEmbed(new Request($request->getAbsolute($this->providers['Html']->get('oembed'))));
        } elseif (($oEmbed = OEmbedImplementations::create($request))) {
            $this->providers['OEmbed'] = $oEmbed;
        } elseif ($this->options['embedlyKey'] && ($oEmbed = Embedly::create($request, $this->options['embedlyKey']))) {
            $this->providers['OEmbed'] = $oEmbed;
        }

        $this->providers = array_reverse($this->providers);
    }

    public function getImages()
    {
        $images = array();

        foreach ($this->providers as $provider) {
            $src = $provider->getImage();

            if (empty($src)) {
                continue;
            }

            if (!is_array($src)) {
                $images[] = $this->request->getAbsolute($src);
                continue;
            }

            foreach ($src as $src) {
                if (!empty($src)) {
                    $images[] = $this->request->getAbsolute($src);
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

        foreach ($this->providers as $provider) {
            $src = $provider->getProviderIcon();

            if ($src) {
                if (is_array($src)) {
                    foreach ($src as $src) {
                        $icons[] = $this->request->getAbsolute($src);
                    }
                } else {
                    $icons[] = $this->request->getAbsolute($src);
                }
            }
        }

        $icons[] = $this->request->getAbsolute('/favicon.ico');
        $icons[] = $this->request->getAbsolute('/favicon.png');

        return array_unique($icons);
    }

    public function getType()
    {
        $code = $this->code;

        if (strpos($code, '</video>')) {
            return 'video';
        }

        if (($type = $this->getFromProviders('type', false))) {
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

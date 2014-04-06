<?php
/**
 * Base class extended by all adapters
 *
 * @property $title
 * @property $description
 * @property $url
 * @property $type
 * @property $images
 * @property $image
 * @property $imageWidth
 * @property $imageHeight
 * @property $code
 * @property $width
 * @property $height
 * @property $aspectRatio
 * @property $authorName
 * @property $authorUrl
 * @property $providerIcons
 * @property $providerIcon
 * @property $providerName
 * @property $providerUrl
 */

namespace Embed\Adapters;

use Embed\Request;
use Embed\FastImage;

abstract class Adapter
{
    public $request;
    public $providers = array();
    public $options = array(
        'minImageWidth' => 0,
        'minImageHeight' => 0,
        'getBiggerImage' => false,
        'getBiggerIcon' => false,
        'facebookAccessToken' => null,
        'soundcloudClientId' => null,
        'embedlyKey' => null
    );

    abstract protected function initProviders (Request $request);

    public function __construct(Request $request, array $options = null)
    {
        if ($options !== null) {
            $this->options = array_replace($this->options, $options);
        }

        $this->initProviders($request);

        if ($request->getUrl() !== $this->url) {
            $this->initProviders(new Request($this->url));
        }
    }

    public function __get($name)
    {
        $method = 'get'.$name;

        if (method_exists($this, $method)) {
            return $this->$name = $this->$method();
        }
    }

    public function getFromProviders($name, $returnFirst = true)
    {
        $method = 'get'.$name;
        $values = array();
        $current = null;

        foreach ($this->providers as $provider) {
            if (($value = $provider->$method())) {
                if ($returnFirst === true) {
                    return $value;
                }

                if (isset($values[$value])) {
                    ++$values[$value];
                } else {
                    $values[$value] = 1;
                }

                if ($current === null || $values[$current] > $values[$value]) {
                    $current = $value;
                }
            }
        }

        return $current;
    }

    public function getUrlFromProviders($name)
    {
        $method = 'get'.$name;

        foreach ($this->providers as $provider) {
            if (($url = $provider->$method())) {
                return $this->request->getAbsolute($url);
            }
        }
    }

    public function getTitle()
    {
        return $this->getFromProviders('title') ?: $this->request->getUrl();
    }

    public function getDescription()
    {
        return $this->getFromProviders('description');
    }

    public function getUrl()
    {
        return $this->getUrlFromProviders('url') ?: $this->request->getUrl();
    }

    public function getSource()
    {
        return $this->getUrlFromProviders('source');
    }

    public function getAuthorName()
    {
        return $this->getFromProviders('authorName');
    }

    public function getAuthorUrl()
    {
        return $this->getUrlFromProviders('authorUrl');
    }

    public function getAspectRatio()
    {
        $width = $this->width;
        $height = $this->height;

        if ($width && (strpos($width, '%') === false) && $height && (strpos($height, '%') === false)) {
            return round(($height / $width) * 100, 3);
        }
    }

    public function getImage()
    {
        foreach ($this->images as $src) {
            try {
                $image = new FastImage($src);
            } catch (\Exception $exception) {
                continue;
            }

            if ($image->getType()) {
                list($width, $height) = $image->getSize();

                if (($width >= $this->options['minImageWidth']) && ($height >= $this->options['minImageHeight'])) {
                    $this->imageWidth = $width;
                    $this->imageHeight = $height;

                    return $src;
                }
            }
        }
    }

    public function getProviderIcon()
    {
        if ($this->options['getBiggerIcon']) {
            $icons = FastImage::sortImagesBySize($this->providerIcons);

            return current($icons);
        }

        foreach ($this->providerIcons as $src) {
            try {
                $icon = new FastImage($src);
            } catch (\Exception $exception) {
                continue;
            }

            if ($icon->getType()) {
                return $src;
            }
        }
    }

    public function getProviderName()
    {
        return $this->getFromProviders('providerName') ?: $this->request->getDomain();
    }

    public function getProviderUrl()
    {
        return $this->getUrlFromProviders('providerUrl') ?: ($this->request->getScheme().'://'.$this->request->getDomain(true));
    }

    public function getImageWidth()
    {
        return null;
    }

    public function getImageHeight()
    {
        return null;
    }

    public function getWidth()
    {
        return $this->getFromProviders('width');
    }

    public function getHeight()
    {
        return $this->getFromProviders('height');
    }
}

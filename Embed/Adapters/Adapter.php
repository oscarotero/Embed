<?php
/**
 * Base Adapter extended by all adapters
 *
 * Provide default functionalities
 */
namespace Embed\Adapters;

use Embed\Url;
use Embed\FastImage;

abstract class Adapter
{
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

    abstract protected function initProviders (Url $Url);

    public function __construct(Url $Url, array $options = null)
    {
        if ($options !== null) {
            $this->options = array_replace($this->options, $options);
        }

        $this->initProviders($Url);

        if ($Url->getUrl() !== $this->url) {
            $this->initProviders(new Url($this->url));
        }
    }

    public function __get($name)
    {
        $method = 'get'.$name;

        if (method_exists($this, $method)) {
            return $this->$name = $this->$method();
        }
    }

    public function getFromProviders($name)
    {
        $method = 'get'.$name;

        foreach ($this->providers as $Provider) {
            if (($value = $Provider->$method())) {
                return $value;
            }
        }
    }

    public function getUrlFromProviders($name)
    {
        $method = 'get'.$name;

        foreach ($this->providers as $Provider) {
            if (($url = $Provider->$method())) {
                return $this->Url->getAbsolute($url);
            }
        }
    }

    public function getTitle()
    {
        return $this->getFromProviders('title') ?: $this->Url->getUrl();
    }

    public function getDescription()
    {
        return $this->getFromProviders('description');
    }

    public function getUrl()
    {
        return $this->getUrlFromProviders('url') ?: $this->Url->getUrl();
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
        foreach ($this->images as $image) {
            try {
                $Image = new FastImage($image);
            } catch (\Exception $Exception) {
                continue;
            }

            if ($Image->getType()) {
                list($width, $height) = $Image->getSize();

                if (($width >= $this->options['minImageWidth']) && ($height >= $this->options['minImageHeight'])) {
                    $this->imageWidth = $width;
                    $this->imageHeight = $height;

                    return $image;
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

        foreach ($this->providerIcons as $icon) {
            try {
                $Icon = new FastImage($icon);
            } catch (\Exception $Exception) {
                continue;
            }

            if ($Icon->getType()) {
                return $icon;
            }
        }
    }

    public function getProviderName()
    {
        return $this->getFromProviders('providerName') ?: $this->Url->getDomain();
    }

    public function getProviderUrl()
    {
        return $this->getUrlFromProviders('providerUrl') ?: ($this->Url->getScheme().'://'.$this->Url->getDomain(true));
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

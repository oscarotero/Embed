<?php
namespace Embed\Adapters;

use Embed\Request;
use Embed\FastImage;

/**
 * Base class extended by all adapters
 *
 * @property Request      $request
 * @property null|string  $title
 * @property null|string  $description
 * @property null|string  $url
 * @property null|string  $type
 * @property array        $images
 * @property null|string  $image
 * @property null|integer $imageWidth
 * @property null|integer $imageHeight
 * @property null|string  $code
 * @property null|integer $width
 * @property null|integer $height
 * @property null|float   $aspectRatio
 * @property null|string  $authorName
 * @property null|string  $authorUrl
 * @property array        $providerIcons
 * @property null|string  $providerIcon
 * @property null|string  $providerName
 * @property null|string  $providerUrl
 */

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
        'embedlyKey' => null,
        'oembedParameters' => array(),
        'facebookProvider' => false,
    );

    /**
     * Initializes all providers used in this adapter (oembed, opengraph, etc)
     *
     * @param Request $request
     */
    abstract protected function initProviders(Request $request);

    /**
     * {@inheritDoc}
     */
    public function __construct(Request $request, array $options = null)
    {
        if ($options !== null) {
            $this->options = array_replace($this->options, $options);
        }

        $this->initProviders($request);

        if ($request->url->getUrl() !== $this->url) {
            $this->initProviders($request->createRequest($this->url));
        }
    }

    /**
     * Magic method to execute and save the url data.
     * For example, on call $this->title, executes $this->getTitle()
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        $method = 'get'.$name;

        if (method_exists($this, $method)) {
            return $this->$name = $this->$method();
        }
    }

    /**
     * Search and returns data from the providers
     *
     * @param string  $name        The data name (title, description, image, etc)
     * @param boolean $returnFirst If it's true, returns the first value found, else returns the most popular value
     *
     * @return mixed
     */
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

    /**
     * Search and returns url type data from the providers (image, providerIcon, providerUrl, etc)
     * If the url found is relative, transforms it to absolute
     *
     * @param string $name The data name
     *
     * @return null|string
     */
    public function getUrlFromProviders($name)
    {
        $method = 'get'.$name;

        foreach ($this->providers as $provider) {
            if (($url = $provider->$method())) {
                return $this->request->url->getAbsolute($url);
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {
        return $this->getFromProviders('title') ?: $this->request->url->getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->getFromProviders('description');
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {
        return $this->getUrlFromProviders('url') ?: $this->request->url->getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {
        return $this->getUrlFromProviders('source');
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {
        return $this->getFromProviders('authorName');
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorUrl()
    {
        return $this->getUrlFromProviders('authorUrl');
    }

    /**
     * {@inheritDoc}
     */
    public function getAspectRatio()
    {
        $width = $this->width;
        $height = $this->height;

        if ($width && (strpos($width, '%') === false) && $height && (strpos($height, '%') === false)) {
            return round(($height / $width) * 100, 3);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {
        if ($this->options['getBiggerImage']) {
            $image = $this->getBiggerImage(FastImage::getImagesSize($this->images));

            if ($image && ($image['width'] >= $this->options['minImageWidth']) && ($image['height'] >= $this->options['minImageHeight'])) {
                $this->imageWidth = $image['width'];
                $this->imageHeight = $image['height'];

                return $image['src'];
            }

            return;
        }

        foreach ($this->images as $src) {
            if ($this->checkImage($src)) {
                return $src;
            }
        }
    }

    /**
     * Returns the first bigger image found
     *
     * @param array $images The images array returned by FastImage::getImagesSize()
     *
     * @return array|false
     */
    protected function getBiggerImage(array $images)
    {
        if (!$images) {
            return false;
        }

        $biggerArea = 0;
        $biggerKey = 0;

        foreach ($images as $k => $image) {
            $area = $image['width'] * $image['height'];

            if ($area > $biggerArea) {
                $biggerArea = $area;
                $biggerKey = $k;
            }
        }

        return $images[$biggerKey];
    }

    /**
     * Checks whether the image dimmension is valid
     *
     * @param string $src The image path
     *
     * @return boolean
     */
    protected function checkImage($src)
    {
        if (!$src) {
            return false;
        }

        try {
            $image = new FastImage($src);
        } catch (\Exception $exception) {
            return false;
        }

        if ($image->getType()) {
            list($width, $height) = $image->getSize();

            if (($width >= $this->options['minImageWidth']) && ($height >= $this->options['minImageHeight'])) {
                $this->imageWidth = $width;
                $this->imageHeight = $height;

                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderIcon()
    {
        if ($this->options['getBiggerIcon']) {
            $icon = $this->getBiggerImage(FastImage::getImagesSize($this->providerIcons));

            return $icon ? $icon['src'] : null;
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

    /**
     * {@inheritDoc}
     */
    public function getProviderName()
    {
        return $this->getFromProviders('providerName') ?: $this->request->url->getDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderUrl()
    {
        return $this->getUrlFromProviders('providerUrl') ?: ($this->request->url->getScheme().'://'.$this->request->url->getDomain(true));
    }

    /**
     * {@inheritDoc}
     */
    public function getImageWidth()
    {
        if ($this->image && property_exists($this, 'imageWidth')) {
            return $this->imageWidth;
        }

        return;
    }

    /**
     * {@inheritDoc}
     */
    public function getImageHeight()
    {
        if ($this->image && property_exists($this, 'imageHeight')) {
            return $this->imageHeight;
        }

        return;
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {
        return $this->getFromProviders('width');
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {
        return $this->getFromProviders('height');
    }
}

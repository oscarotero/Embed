<?php
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;
use Embed\Providers\ProviderInterface;

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
 * @property null|string  $publishedTime
 */

abstract class Adapter
{
    protected $request;
    protected $providers = array();
    protected $options = array(
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
     * {@inheritDoc}
     */
    public function __construct(Request $request, array $options = null)
    {
        if ($options !== null) {
            $this->options = array_replace($this->options, $options);
        }

        $this->setRequest($request);

        if ($request->url->getUrl() !== $this->url) {
            $this->setRequest($request->createRequest($this->url));
        }
    }

    /**
     * Set the request to the adapter
     *
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get the request
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_replace($this->options, $options);
    }

    /**
     * Get the options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Adds a new provider
     *
     * @param string $name
     * @param ProviderInterface $provider
     */
    public function addProvider($name, ProviderInterface $provider)
    {
        $provider->init($this->request, $this->options);

        $this->providers[$name] = $provider;
    }

    /**
     * Get a provider
     *
     * @param string $name
     * 
     * @return null|ProviderInterface
     */
    public function getProvider($name)
    {
        return isset($this->providers[$name]) ? $this->providers[$name] : null;
    }

    /**
     * Get all providers
     *
     * @return array
     */
    public function getAllProviders()
    {
        return $this->providers;
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
     * @param string  $name         The data name (title, description, image, etc)
     * @param boolean $returnFirst  If it's true, returns the first value found, else returns the most popular value
     * @param null|array $providers The providers used to retrieve the data
     *
     * @return mixed
     */
    public function getData($name, $returnFirst = true, array $providers = null)
    {
        $method = 'get'.$name;
        $values = array();
        $current = null;

        if ($providers === null) {
            $providers = array_keys($this->providers);
        }

        foreach ($providers as $name) {
            if (!isset($this->providers[$name])) {
                continue;
            }

            if (($value = $this->providers[$name]->$method())) {
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

        return $returnFirst ? null : $current;
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
    public function getTitle()
    {
        return $this->getData('title') ?: $this->request->url->getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->getData('description');
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        $code = $this->code;

        if (strpos($code, '</video>')) {
            return 'video';
        }

        if (($type = $this->getData('type', false)) && ($type !== 'link')) {
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

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {
        if (($source = $this->getData('source', true))) {
            return $this->request->url->getAbsolute($source);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        if ($code = $this->getData('code')) {
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

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {
        if (($url = $this->getData('url', true))) {
            return $this->request->url->getAbsolute($url);
        }

        return $this->request->url->getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {
        return $this->getData('authorName');
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorUrl()
    {
        if (($url = $this->getData('authorUrl', true))) {
            return $this->request->url->getAbsolute($url);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderIcons()
    {
        $icons = array();

        foreach ($this->getAllProviders() as $provider) {
            foreach ($provider->getProviderIcons() as $icon) {
                $icons[] = $this->request->url->getAbsolute($icon);
            }
        }

        $icons[] = $this->request->url->getAbsolute('/favicon.ico');
        $icons[] = $this->request->url->getAbsolute('/favicon.png');

        return array_unique($icons);
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
        return $this->getData('providerName') ?: $this->request->url->getDomain();
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderUrl()
    {
        if (($url = $this->getData('providerUrl', true))) {
            return $this->request->url->getAbsolute($url);
        }

        return ($this->request->url->getScheme().'://'.$this->request->url->getDomain(true));
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {
        $images = array();

        foreach ($this->getAllProviders() as $provider) {
            foreach ($provider->getImages() as $image) {
                $images[] = $this->request->url->getAbsolute($image);
            }
        }

        return array_unique($images);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {
        $sizes = Utils::getImagesSizes($this->images);

        foreach ($sizes as $url => $image) {
            var_dump($url);
            var_dump($image->getSize());
            var_dump('<hr>');
        }
        die();
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
     * {@inheritDoc}
     */
    public function getImageWidth()
    {
        if ($this->image && property_exists($this, 'imageWidth')) {
            return $this->imageWidth;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getImageHeight()
    {
        if ($this->image && property_exists($this, 'imageHeight')) {
            return $this->imageHeight;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {
        return $this->getData('width');
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {
        return $this->getData('height');
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
    public function getPublishedTime()
    {
        return $this->getData('publishedTime');
    }
}

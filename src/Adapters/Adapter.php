<?php
namespace Embed\Adapters;

use Embed\Utils;
use Embed\Request;
use Embed\Providers\ProviderInterface;
use Embed\ImageInfo;

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

    protected $providers = [];
    protected $providersConfig;

    protected $imageClass = 'Embed\\ImageInfo\\Curl';
    protected $imageConfig;

    protected $config = [
        'minImageWidth' => 16,
        'minImageHeight' => 16,
        'getBiggerImage' => false,
        'getBiggerIcon' => false,
        'facebookKey' => null,
        'soundcloudKey' => 'YOUR_CLIENT_ID'
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = null)
    {
        $this->request = $request;

        if (isset($config['adapter']['config'])) {
            $this->config = array_replace($this->config, $config['adapter']['config']);
        }

        if (isset($config['providers'])) {
            $this->providersConfig = $config['providers'];
        }

        if (isset($config['image']['class'])) {
            $this->imageClass = $config['image']['class'];
        }

        if (isset($config['image']['config'])) {
            $this->imageConfig = $config['image']['config'];
        }

        $this->run();

        if ($request->url->getUrl() !== $this->url) {
            $this->request = $request->createRequest($this->url);
            $this->run();
        }
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
     * Adds a new provider
     *
     * @param string            $name
     * @param ProviderInterface $provider
     */
    protected function addProvider($name, ProviderInterface $provider)
    {
        $config = isset($this->providersConfig[$name]) ? $this->providersConfig[$name] : null;
        
        $provider->init($this->request, $config);
        $provider->run();

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
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return Utils::getData($this->providers, 'title') ?: $this->request->url->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return Utils::getData($this->providers, 'description');
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $code = $this->code;

        if (strpos($code, '</video>')) {
            return 'video';
        }

        if (($type = Utils::getData($this->providers, 'type', false)) && ($type !== 'link')) {
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
     * {@inheritdoc}
     */
    public function getSource()
    {
        if (($source = Utils::getData($this->providers, 'source', true))) {
            return $this->request->url->getAbsolute($source);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if ($code = Utils::getData($this->providers, 'code')) {
            if (strpos($code, '</iframe>') !== false) {
                return preg_replace('|^.*(<iframe.*</iframe>).*$|Us', '$1', $code);
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
     * {@inheritdoc}
     */
    public function getUrl()
    {
        if (($url = Utils::getData($this->providers, 'url', true))) {
            return $this->request->url->getAbsolute($url);
        }

        return $this->request->url->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return Utils::getData($this->providers, 'authorName');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        if (($url = Utils::getData($this->providers, 'authorUrl', true))) {
            return $this->request->url->getAbsolute($url);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcons()
    {
        $icons = [];

        foreach ($this->getAllProviders() as $provider) {
            foreach ($provider->getProviderIcons() as $icon) {
                $icons[] = $this->request->url->getAbsolute($icon);
            }
        }

        $icons[] = $this->request->url->getAbsolute('/favicon.ico');
        $icons[] = $this->request->url->getAbsolute('/favicon.png');

        return call_user_func("{$this->imageClass}::getImagesInfo", array_unique($icons), $this->imageConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcon()
    {
        if ($this->config['getBiggerIcon']) {
            return Utils::getBiggerImage($this->providerIcons);
        }

        if (($icons = $this->providerIcons) && reset($icons)) {
            return key($icons);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return Utils::getData($this->providers, 'providerName') ?: $this->request->url->getDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        if (($url = Utils::getData($this->providers, 'providerUrl', true))) {
            return $this->request->url->getAbsolute($url);
        }

        return ($this->request->url->getScheme().'://'.$this->request->url->getDomain(true));
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        $images = [];

        foreach ($this->getAllProviders() as $k => $provider) {
            foreach ($provider->getImages() as $image) {
                $images[] = $this->request->url->getAbsolute($image);
            }
        }

        return call_user_func("{$this->imageClass}::getImagesInfo", array_unique($images), $this->imageConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        if ($this->config['getBiggerImage']) {
            if (($src = Utils::getBiggerImage($this->images))) {
                $image = $this->images[$src];

                if (($image[0] >= $this->config['minImageWidth']) && ($image[1] >= $this->config['minImageHeight'])) {
                    return $src;
                }
            }

            return;
        }

        foreach ($this->images as $src => $image) {
            if (($image[0] >= $this->config['minImageWidth']) && ($image[1] >= $this->config['minImageHeight'])) {
                return $src;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageWidth()
    {
        if ($this->image) {
            return $this->images[$this->image][0];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageHeight()
    {
        if ($this->image) {
            return $this->images[$this->image][1];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return Utils::getData($this->providers, 'width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return Utils::getData($this->providers, 'height');
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return Utils::getData($this->providers, 'publishedTime');
    }
}

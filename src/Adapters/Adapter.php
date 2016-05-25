<?php

namespace Embed\Adapters;

use Embed\Url;
use Embed\Utils;
use Embed\Request;
use Embed\Providers\ProviderInterface;
use Embed\GetTrait;

/**
 * Base class extended by all adapters.
 *
 * @property null|string  $title
 * @property null|string  $description
 * @property null|string  $url
 * @property null|string  $type
 * @property array        $tags
 * @property array        $images
 * @property null|string  $image
 * @property null|int     $imageWidth
 * @property null|int     $imageHeight
 * @property null|string  $code
 * @property null|int     $width
 * @property null|int     $height
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
    use GetTrait;

    /**
     * @var Request
     */
    protected $request;

    protected $providers = [];
    protected $providersConfig;

    protected $imageClass = 'Embed\\ImageInfo\\Curl';
    protected $imageConfig;
    protected $imageRequests = [];

    protected $config = [
        'minImageWidth' => 16,
        'minImageHeight' => 16,
        'imagesBlacklist' => null,
        'getBiggerImage' => false,
        'getBiggerIcon' => false,
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

        $this->init();
    }

    /**
     * Init the adapter.
     */
    protected function init()
    {
        $this->run();

        //if the canonical url is different, repeat the proccess
        $canonical = $this->getUrl();

        if ($this->request->getUrl() !== $canonical) {
            $request = $this->request->withUrl($canonical);

            if ($request->isValid()) {
                $this->request = $request;
                $this->run();
            }
        }
    }

    /**
     * Run the adapter.
     */
    abstract protected function run();

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesRequests()
    {
        return $this->imageRequests;
    }

    /**
     * Adds a new provider.
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
     * {@inheritdoc}
     */
    public function getProvider($name)
    {
        return isset($this->providers[$name]) ? $this->providers[$name] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllProviders()
    {
        return $this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return html_entity_decode(Utils::getFirstValue(Utils::getData($this->providers, 'title')) ?: $this->request->getUrl());
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return html_entity_decode(Utils::getFirstValue(Utils::getData($this->providers, 'description')));
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

        if (($type = Utils::getMostPopularValue(Utils::getData($this->providers, 'type'))) && ($type !== 'link')) {
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
    public function getTags()
    {
        return Utils::getAllValues(Utils::getData($this->providers, 'tags'));
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'source', $this->request));
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;
        $choosen = null;

        foreach (Utils::getData($this->providers, 'code') as $code) {
            // <object> and <embed> codes (flash) have less priority
            if (strpos($code['value'], '</object>') !== false || strpos($code['value'], '</embed>') !== false) {
                if (empty($choosen)) {
                    $choosen = $code;
                }

                continue;
            }

            $choosen = $code;
            break;
        }

        if ($choosen) {
            //get the width/height
            foreach ($choosen['providers'] as $provider) {
                $this->width = $this->providers[$provider]->getWidth();
                $this->height = $this->providers[$provider]->getHeight();

                if (is_numeric($this->width)) {
                    $this->width = (int) $this->width;
                }

                if (is_numeric($this->height)) {
                    $this->height = (int) $this->height;
                }

                if (!empty($this->width) || !empty($this->height)) {
                    break;
                }
            }

            return $choosen['value'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'url', $this->request)) ?: $this->request->getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'authorName'));
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'authorUrl', $this->request));
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        $icons = Utils::getData($this->providers, 'providerIconsUrls', $this->request);

        Utils::unshiftValue($icons, [
            'value' => $this->request->getAbsolute('/favicon.ico'),
            'providers' => ['adapter'],
        ]);

        Utils::unshiftValue($icons, [
            'value' => $this->request->getAbsolute('/favicon.png'),
            'providers' => ['adapter'],
        ]);

        return $icons;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcons()
    {
        return static::imagesInfo($this->getProviderIconsUrls());
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcon()
    {
        if ($this->config['getBiggerIcon']) {
            return Utils::getBiggerValue($this->providerIcons);
        }

        return Utils::getFirstValue($this->providerIcons);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'providerName')) ?: $this->request->getDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'providerUrl', $this->request)) ?: ($this->request->getScheme().'://'.$this->request->getDomain(true));
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $imagesUrls = Utils::getData($this->providers, 'imagesUrls', $this->request);

        $blacklist = $this->config['imagesBlacklist'];
        $hasBlacklist = is_array($blacklist) && count($blacklist) > 0;

        $imagesUrls = array_filter($imagesUrls, function ($imageUrl) use ($blacklist, $hasBlacklist) {
            // Clean empty urls
            if (empty($imageUrl['value'])) {
                return false;
            }

            // Remove image url if on blacklist
            if ($hasBlacklist) {
                $url = new Url($imageUrl['value']);

                return !$url->match($blacklist) && !in_array($imageUrl['value'], $blacklist, true);
            }

            return true;
        });

        // Use array_values to reset keys after filter
        return array_values($imagesUrls);
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        return static::imagesInfo($this->getImagesUrls());
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        if ($this->config['getBiggerImage']) {
            $allImages = $this->images;

            if (empty($allImages)) {
                return;
            }

            $allImages = [$allImages];
        } else {
            $allImages = Utils::sortByProviders($this->images);
        }

        foreach ($allImages as $images) {
            if (($key = Utils::getBiggerValue($images, true)) !== null) {
                $image = $images[$key];

                if (($image['width'] >= $this->config['minImageWidth']) && ($image['height'] >= $this->config['minImageHeight'])) {
                    return $image['value'];
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageWidth()
    {
        if (($image = Utils::searchValue($this->images, $this->image)) !== false) {
            return $image['width'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageHeight()
    {
        if (($image = Utils::searchValue($this->images, $this->image)) !== false) {
            return $image['height'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        $this->__get('code');

        return $this->width;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        $this->__get('code');

        return $this->height;
    }

    /**
     * {@inheritdoc}
     */
    public function getAspectRatio()
    {
        if ($this->width && (strpos($this->width, '%') === false) && $this->height && (strpos($this->height, '%') === false)) {
            return round(($this->height / $this->width) * 100, 3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'publishedTime'));
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        return Utils::getFirstValue(Utils::getData($this->providers, 'license', $this->request));
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedData()
    {
        $data = [];
        foreach ($this->providers as $provider) {
            $data = array_merge($data, $provider->getLinkedData());
        }

        return $data;
    }

    /**
     * Get images info.
     * 
     * @param array $urls
     * 
     * @return array
     */
    protected function imagesInfo($urls)
    {
        $requests = call_user_func("{$this->imageClass}::getImagesInfo", $urls, $this->imageConfig);
        array_replace($this->imageRequests, $requests);

        $result = [];

        foreach ($urls as $url => $value) {
            $info = isset($requests[$url]) ? $requests[$url]->getInfo() : false;

            if ($info === false) {
                continue;
            }

            $result[$url] = array_replace($value, $info);
        }

        return $result;
    }
}

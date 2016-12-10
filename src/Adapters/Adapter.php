<?php

namespace Embed\Adapters;

use Embed\Utils;
use Embed\Http\Url;
use Embed\Http\Request;
use Embed\Providers\ProviderInterface;
use Embed\GetTrait;
use Embed\Bag;

/**
 * Base class extended by all adapters.
 *
 * @property null|string  $title
 * @property null|string  $description
 * @property null|string  $url
 * @property null|string  $type
 * @property array        $tags
 * @property array        $feeds
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

    protected $config;
    protected $request;
    protected $providers = [];


    /**
     * {@inheritdoc}
     */
    public function __construct(Request $request, array $config = [])
    {
        $this->request = $request;
        $this->config = new Bag($config);
    }

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
    public function getResponse()
    {
        return $this->request->getResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesRequests()
    {
        return $this->imageRequests;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        foreach ($this->providers as $provider) {
            $title = $provider->getTitle();

            if (!empty($title)) {
                return html_entity_decode($title);
            }
        }

        //If there's no title, returns the url instead
        return $this->url;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        foreach ($this->providers as $provider) {
            $description = $provider->getDescription();

            if (!empty($description)) {
                return html_entity_decode($description);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $code = $this->code;

        if (empty($code)) {
            return 'link';
        }

        if (strpos($code, '</video>')) {
            return 'video';
        }

        //Get the most repeated type
        $types = [];

        foreach ($this->providers as $provider) {
            $type = $provider->getType();

            if (!empty($type)) {
                if (!isset($types[$type])) {
                    $types[$type] = 0;
                }

                ++$types[$type];
            }
        }

        if (!empty($types)) {
            sort($types, SORT_NUMERIC);

            return key($types);
        }

        return 'rich';
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        $tags = [];

        foreach ($this->providers as $provider) {
            foreach ($provider->getTags() as $tag) {
                if (!in_array($tag, $tags)) {
                    $tags[] = $tag;
                }
            }
        }

        return $tags;
    }

    /**
     * {@inheritdoc}
     */
    public function getFeeds()
    {
        throw new \Exception("Non esta feito");
        
        return Utils::getFirstValue(Utils::getData($this->providers, 'source', $this->request));
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        //Width and height deppends to the code
        $this->width = null;
        $this->height = null;

        $codes = [];

        foreach ($this->providers as $provider) {
            $code = $provider->getCode();

            if (!empty($code)) {
                $codes[] = [
                    'code' => $code,
                    'width' => $provider->getWidth(),
                    'height' => $provider->getHeight(),
                ];
            }
        }

        if (empty($codes)) {
            return;
        }

        //Sort the codes to give more priority to html5 than flash
        usort($codes, function ($a, $b) {
            if (strpos($a['code'], '</object>') === false && strpos($a['code'], '</embed>') === false) {
                return -1;
            }

            if (strpos($b['code'], '</object>') === false && strpos($b['code'], '</embed>') === false) {
                return 1;
            }

            return 0;
        });

        $code = current($codes);

        $this->width = is_numeric($code['width']) ? (int) $code['width'] : $code['width'];
        $this->height = is_numeric($code['height']) ? (int) $code['height'] : $code['height'];

        return $code['code'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        foreach ($this->providers as $provider) {
            $url = $provider->getUrl();

            if (!empty($url)) {
                return $this->getResponse()->getUri()->getAbsolute($url);
            }
        }

        return (string) $this->getResponse()->getUri();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        foreach ($this->providers as $provider) {
            $authorName = $provider->getAuthorName();

            if (!empty($authorName)) {
                return $authorName;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        foreach ($this->providers as $provider) {
            $authorUrl = $provider->getAuthorUrl();

            if (!empty($authorUrl)) {
                return $this->getResponse()->getUri()->getAbsolute($authorUrl);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        throw new \Exception("Non esta feito");
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
        throw new \Exception("Non esta feito");
        return static::imagesInfo($this->getProviderIconsUrls());
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcon()
    {
        throw new \Exception("Non esta feito");
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
        foreach ($this->providers as $provider) {
            $providerName = $provider->getProviderName();

            if (!empty($providerName)) {
                return $providerName;
            }
        }

        return $this->getResponse()->getUri()->getDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        $uri = $this->getResponse()->getUri();

        foreach ($this->providers as $provider) {
            $providerUrl = $provider->getProviderUrl();

            if (!empty($providerUrl)) {
                return $uri->getAbsolute($providerUrl);
            }
        }

        return $uri->getScheme().'://'.$uri->getDomain(true);
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        throw new \Exception("Non esta feito");
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
        throw new \Exception("Non esta feito");
        return static::imagesInfo($this->getImagesUrls());
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        throw new \Exception("Non esta feito");
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
        throw new \Exception("Non esta feito");
        if (($image = Utils::searchValue($this->images, $this->image)) !== false) {
            return $image['width'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImageHeight()
    {
        throw new \Exception("Non esta feito");
        if (($image = Utils::searchValue($this->images, $this->image)) !== false) {
            return $image['height'];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        $this->code = $this->getCode();

        return $this->width;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        $this->code = $this->getCode();

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
        foreach ($this->providers as $provider) {
            $publishedTime = $provider->getPublishedTime();

            if (!empty($publishedTime)) {
                return $publishedTime;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        foreach ($this->providers as $provider) {
            $license = $provider->getLicense();

            if (!empty($license)) {
                return $license;
            }
        }
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

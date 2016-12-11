<?php

namespace Embed\Adapters;

use Embed\Http\Uri;
use Embed\Http\Request;
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
     * Magic method to execute methods on get paramaters
     * For example, $source->sourceUrl executes $source->getSourceUrl().
     *
     * @param string $name The property name
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
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * {@inheritdoc}
     */
    public function createRequest($uri)
    {
        return new Request($uri, $this->request->getDispatcher());
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
    public function getConfig($name, $default = null)
    {
        return $this->config->get($name, $default);
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

        unset($types['link']);

        if (!empty($types)) {
            asort($types, SORT_NUMERIC);

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
        $feeds = [];

        foreach ($this->providers as $provider) {
            foreach ($provider->getFeeds() as $feed) {
                $feed = $this->getResponse()->getUri()->getAbsolute($feed);

                if (!in_array($feed, $feeds)) {
                    $feeds[] = $feed;
                }
            }
        }

        return $feeds;
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
        foreach ($this->providers as $k => $provider) {
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
        $uri = $this->getResponse()->getUri();
        $urls = [
            $uri->getAbsolute('/favicon.ico'),
            $uri->getAbsolute('/favicon.png'),
        ];

        foreach ($this->providers as $provider) {
            foreach ($provider->getProviderIconsUrls() as $url) {
                $url = $uri->getAbsolute($url);

                if (!in_array($url, $urls, true)) {
                    $urls[] = $url;
                }
            }
        }

        return $urls;
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcons()
    {
        return $this->dispatchImagesInfo($this->providerIconsUrls);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIcon()
    {
        $icons = $this->providerIcons;

        if (empty($icons)) {
            return;
        }

        usort($icons, function ($a, $b) {
            if ($a['size'] === $b['size']) {
                return 0;
            }

            return ($a['size'] > $b['size']) ? -1 : 1;
        });

        reset($icons);
        $icon = current($icons);

        return $icon['url'];
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
        $uri = $this->getResponse()->getUri();
        $urls = [];

        foreach ($this->providers as $provider) {
            foreach ($provider->getImagesUrls() as $url) {
                $url = $uri->getAbsolute($url);

                if (!in_array($url, $urls, true)) {
                    $urls[] = $url;
                }
            }
        }

        $blacklist = $this->getConfig('imagesBlacklist');

        if (!empty($blacklist)) {
            $urls = array_filter($urls, function ($url) use ($blacklist) {
                $uri = Uri::create($url);

                return !$uri->match($blacklist);
            });
        }

        return array_values($urls);
    }

    /**
     * {@inheritdoc}
     */
    public function getImages()
    {
        return $this->dispatchImagesInfo($this->imagesUrls);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        $this->imageWidth = null;
        $this->imageHeight = null;

        $images = $this->images;
        $bigger = $this->getConfig('getBiggerImage');
        $minWidth = $this->getConfig('minImageWidth', 1);
        $minHeight = $this->getConfig('minImageHeight', 1);

        $images = array_filter($images, function ($image) use ($minWidth, $minHeight) {
            return $image['width'] >= $minWidth && $image['height'] >= $minHeight;
        });

        if (empty($images)) {
            return;
        }

        if ($bigger) {
            usort($images, function ($a, $b) {
                if ($a['size'] === $b['size']) {
                    return 0;
                }

                return ($a['size'] > $b['size']) ? -1 : 1;
            });
        }

        reset($images);
        $image = current($images);

        $this->imageWidth = $image['width'];
        $this->imageHeight = $image['height'];

        return $image['url'];
    }

    /**
     * {@inheritdoc}
     */
    public function getImageWidth()
    {
        $this->image = $this->getImage();

        return $this->imageWidth;
    }

    /**
     * {@inheritdoc}
     */
    public function getImageHeight()
    {
        $this->image = $this->getImage();

        return $this->imageHeight;
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
    private function dispatchImagesInfo($urls)
    {
        if (empty($urls)) {
            return [];
        }

        $requests = [];

        foreach ($urls as $uri) {
            $requests[] = Uri::create($uri);
        }

        return array_map(
            function ($response) {
                return [
                    'url' => (string) $response->getUri(),
                    'width' => $response->getWidth(),
                    'height' => $response->getHeight(),
                    'size' => $response->getWidth() * $response->getHeight(),
                    'mime' => $response->getContentType(),
                ];
            },
            $this->getRequest()->getDispatcher()->dispatchImages($requests)
        );
    }
}

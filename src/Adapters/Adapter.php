<?php

namespace Embed\Adapters;

use Embed\Http\Uri;
use Embed\Http\Response;
use Embed\Http\ImageResponse;
use Embed\Http\DispatcherInterface;
use Embed\Providers\ProviderInterface;
use Embed\Bag;

/**
 * Base class extended by all adapters.
 */
abstract class Adapter
{
    protected $config;
    protected $dispatcher;
    protected $response;
    protected $providers = [];

    /**
     * {@inheritdoc}
     */
    public function __construct(Response $response, array $config, DispatcherInterface $dispatcher)
    {
        $this->response = $response;
        $this->config = new Bag($config);
        $this->dispatcher = $dispatcher;

        $this->init();
    }

    /**
     * Initialize the providers
     */
    abstract protected function init();

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
    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig($name, $default = null)
    {
        $value = $this->config->get($name);

        return $value === null ? $default : $value;
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
        $default = $this->url;

        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getTitle();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getDescription();
        });
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

            if ($type !== null) {
                if (!isset($types[$type])) {
                    $types[$type] = 0;
                }

                ++$types[$type];
            }
        }

        //If it has code, it's not a link
        unset($types['link']);

        return static::getBigger($types) ?: 'rich';
    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {
        return $this->getAllFromProviders(function ($provider) {
            return $provider->getTags();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getFeeds()
    {
        return $this->getAllFromProviders(function ($provider) {
            return $provider->getFeeds();
        });
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

        //Use only html5 codes
        $html5 = array_filter($codes, function ($code) {
            return strpos($code['code'], '</object>') === false && strpos($code['code'], '</embed>') === false;
        });

        //If it's not html5 codes, returns flash
        if (empty($html5)) {
            $code = current($codes);
        } else {
            $code = current($html5);
        }

        $this->width = is_numeric($code['width']) ? (int) $code['width'] : $code['width'];
        $this->height = is_numeric($code['height']) ? (int) $code['height'] : $code['height'];

        return $code['code'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $default = (string) $this->getResponse()->getUri();

        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getUrl();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getAuthorName();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getAuthorUrl();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        $urls = [
            $this->getResponse()->getUri()->getAbsolute('/favicon.ico'),
            $this->getResponse()->getUri()->getAbsolute('/favicon.png'),
        ];

        foreach ($this->providers as $provider) {
            foreach ($provider->getProviderIconsUrls() as $url) {
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

        $sizes = [];

        foreach ($icons as $icon) {
            $sizes[$icon['url']] = $icon['size'];
        }

        return static::getBigger($sizes);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        $default = $this->getResponse()->getUri()->getDomain();

        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getProviderName();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        $uri = $this->getResponse()->getUri();
        $default = $uri->getScheme().'://'.$uri->getDomain(true);

        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getProviderUrl();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $urls = [];

        foreach ($this->providers as $provider) {
            foreach ($provider->getImagesUrls() as $url) {
                if (!in_array($url, $urls, true)) {
                    $urls[] = $url;
                }
            }
        }

        $blacklist = $this->getConfig('images_blacklist');

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
        $bigger = (bool) $this->getConfig('choose_bigger_image');
        $minWidth = $this->getConfig('min_image_width', 1);
        $minHeight = $this->getConfig('min_image_height', 1);

        $images = array_filter($images, function ($image) use ($minWidth, $minHeight) {
            return $image['width'] >= $minWidth && $image['height'] >= $minHeight;
        });

        if (empty($images)) {
            return;
        }

        if ($bigger) {
            $sizes = [];

            foreach ($images as $image) {
                $sizes[$image['url']] = $image['size'];
            }

            $image = static::getBigger($sizes);
        } else {
            reset($images);
            $image = current($images);
        }

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
        if ($this->width !== null
         && (strpos($this->width, '%') === false)
         && $this->height !== null && (strpos($this->height, '%') === false)) {
            return round(($this->height / $this->width) * 100, 3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getPublishedTime();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        return $this->getFirstFromProviders(function ($provider) {
            return $provider->getLicense();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedData()
    {
        return $this->getAllFromProviders(function ($provider) {
            return $provider->getLinkedData();
        });
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
            function (ImageResponse $response) {
                return [
                    'url' => (string) $response->getUri(),
                    'width' => $response->getWidth(),
                    'height' => $response->getHeight(),
                    'size' => $response->getWidth() * $response->getHeight(),
                    'mime' => $response->getContentType(),
                ];
            },
            $this->getDispatcher()->dispatchImages($requests)
        );
    }

    /**
     * Returns the key of the bigger value in an array
     *
     * @param array $values
     *
     * @return string|null
     */
    protected static function getBigger(array $values)
    {
        $bigger = null;

        foreach ($values as $value => $repeat) {
            if ($bigger === null || $repeat > $values[$bigger]) {
                $bigger = $value;
            }
        }

        return $bigger;
    }

    /**
     * Returns the first value of the providers
     *
     * @param callable $callable
     *
     * @return string|null
     */
    protected function getFirstFromProviders(callable $callable, $default = null)
    {
        $values = array_filter(array_map($callable, $this->providers));

        return empty($values) ? $default : current($values);
    }

    /**
     * Returns the all values from the providers
     *
     * @param callable $callable
     *
     * @return string|null
     */
    protected function getAllFromProviders(callable $callable)
    {
        $values = array_filter(array_map($callable, $this->providers));
        $all = [];

        foreach ($values as $value) {
            foreach ($value as $v) {
                if (!in_array($v, $all, true)) {
                    $all[] = $v;
                }
            }
        }

        return $all;
    }
}

<?php

namespace Embed\Adapters;

use Embed\Bag;
use Embed\DataInterface;
use Embed\Http\DispatcherInterface;
use Embed\Http\ImageResponse;
use Embed\Http\Response;
use Embed\Http\Url;
use Embed\Providers\Provider;
use Embed\Utils;
use Exception;

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
 * @property array        $imagesUrls
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
 * @property array        $providerIconsUrls
 * @property null|string  $providerIcon
 * @property null|string  $providerName
 * @property null|string  $providerUrl
 * @property null|string  $publishedTime
 */
abstract class Adapter implements DataInterface
{
    protected $config;
    protected $dispatcher;
    protected $response;
    protected $providers = [];

    /**
     * Checks whether the response is valid to this Adapter.
     *
     * @param Response $response
     *
     * @return bool
     */
    public static function check(Response $response)
    {
        return $response->isValid();
    }

    /**
     * Constructor.
     *
     * @param Response  $response
     * @param array $config
     * @param DispatcherInterface $dispatcher
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
     * Magic method to execute methods to return paramaters
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
        return null;
    }

    /**
     * Magic method to execute methods to check if parameters are empty
     *
     * @param string $name The property name
     *
     * @return bool
     */
    public function __isset($name)
    {
        $value = $this->$name;

        return !empty($value);
    }

    /**
     * Returns the dispatcher used.
     *
     * @return DispatcherInterface
     */
    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * Returns the main response instance.
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get a config value.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return string|null
     */
    public function getConfig($name, $default = null)
    {
        $value = $this->config->get($name);

        return $value === null ? $default : $value;
    }

    /**
     * Get all providers.
     *
     * @return Provider[]
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

        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getTitle();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->getFirstFromProviders(function (Provider $provider) {
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
        return $this->getAllFromProviders(function (Provider $provider) {
            return $provider->getTags();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getFeeds()
    {
        return $this->getAllFromProviders(function (Provider $provider) {
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
            return null;
        }

        //Use only html5 codes
        $html5 = array_filter($codes, function (array $code) {
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
     * Returns the code as DOMNodeList elements
     *
     * @return \DOMNodeList|null
     */
    public function getHtml()
    {
        $code = $this->code;

        if (empty($code)) {
            return;
        }

        $errors = libxml_use_internal_errors(true);
        $entities = libxml_disable_entity_loader(true);

        $dom = new \DOMDocument();
        $dom->loadHTML($code);

        libxml_use_internal_errors($errors);
        libxml_disable_entity_loader($entities);

        return Utils::xpathQuery($dom, 'descendant-or-self::body/*', false);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $default = (string) $this->getResponse()->getUrl();
        $blacklist = $this->getConfig('url_blacklist');

        //some sites returns the homepage as canonical
        $homeUrl = $this->getResponse()->getUrl()->getAbsolute('/');

        return $this->getFirstFromProviders(function (Provider $provider) use ($blacklist, $homeUrl) {
            $url = $provider->getUrl();

            try {
                if ($homeUrl === $url || (!empty($blacklist) && Url::create($url)->match($blacklist))) {
                    return false;
                }
            } catch (Exception $error) {
                return false;
            }

            return $url;
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getAuthorName();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getAuthorUrl();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderIconsUrls()
    {
        $urls = [
            $this->getResponse()->getUrl()->getAbsolute('/favicon.ico'),
            $this->getResponse()->getUrl()->getAbsolute('/favicon.png'),
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
     * Gets all icon provider urls found
     * It returns also the width, height and mime-type.
     *
     * @return array
     */
    public function getProviderIcons()
    {
        return $this->dispatchImagesInfo($this->providerIconsUrls);
    }

    /**
     * Gets the best icon provider
     *
     * @return string|null
     */
    public function getProviderIcon()
    {
        $icons = $this->providerIcons;

        if (empty($icons)) {
            return null;
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
        $default = $this->getResponse()->getUrl()->getDomain();

        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getProviderName();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        $url = $this->getResponse()->getUrl();
        $default = $url->getScheme().'://'.$url->getDomain(true);

        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getProviderUrl();
        }, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        $urls = $this->getAllFromProviders(function (Provider $provider) {
            return $provider->getImagesUrls();
        });

        $blacklist = $this->getConfig('images_blacklist');

        if (!empty($blacklist)) {
            $urls = array_filter($urls, function ($url) use ($blacklist) {
                return !Url::create($url)->match($blacklist);
            });
        }

        return array_values($urls);
    }

    /**
     * Gets all images found in the webpage
     * It returns also the width, height and mime-type.
     *
     * @return array
     */
    public function getImages()
    {
        return $this->dispatchImagesInfo($this->imagesUrls);
    }

    /**
     * Gets the best image
     *
     * @return string|null
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
            return null;
        }

        reset($images);
        $image = current($images);

        if ($bigger) {
            $sizes = [];

            foreach ($images as $img) {
                $sizes[$img['url']] = $img['size'];
            }

            $biggest = static::getBigger($sizes);

            foreach ($images as $img) {
                if ($biggest == $img['url']) {
                    $image = $img;
                    break;
                }
            }
        }

        $this->imageWidth = $image['width'];
        $this->imageHeight = $image['height'];

        return $image['url'];
    }

    /**
     * Gets the image width.
     *
     * @return int|null
     */
    public function getImageWidth()
    {
        $this->image = $this->getImage();

        return $this->imageWidth;
    }

    /**
     * Gets the image height.
     *
     * @return int|null
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
     * Gets the aspect ratio of the embedded widget
     * (useful to make it responsive).
     *
     * @return float|null
     */
    public function getAspectRatio()
    {
        if ($this->width !== null
         && (strpos($this->width, '%') === false)
         && $this->height !== null && (strpos($this->height, '%') === false)) {
            return round(($this->height / $this->width) * 100, 3);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getPublishedTime();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getLicense()
    {
        return $this->getFirstFromProviders(function (Provider $provider) {
            return $provider->getLicense();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedData()
    {
        return $this->getAllFromProviders(function (Provider $provider) {
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

        foreach ($urls as $url) {
            $requests[] = Url::create($url);
        }

        return array_map(
            function (ImageResponse $response) {
                return [
                    'url' => (string) $response->getUrl(),
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
     * @param string|null $default
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
     * @return array
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

<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;
use Embed\Utils;

/**
 * Provider to use the API of google.com
 */
class GoogleMaps extends Provider
{
    protected $mode;
    protected $config = [
        'key' => null,
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct(Adapter $adapter)
    {
        parent::__construct($adapter);

        $mode = $adapter->getResponse()->getUrl()->getDirectoryPosition(1);

        switch ($mode) {
            case 'place':
            case 'dir':
            case 'search':
                $this->mode = $mode;
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $url = $this->adapter->getResponse()->getUrl();

        if ($this->mode === 'place') {
            return $url->getDirectoryPosition(2);
        }

        if ($this->mode === 'dir') {
            return $url->getDirectoryPosition(2).' / '.$url->getDirectoryPosition(3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Google Maps';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $url = $this->adapter->getResponse()->getUrl();
        $key = $this->adapter->getConfig('google[key]');

        if (empty($key)) {
            return;
        }

        switch ($this->mode) {
            case 'place':
            case 'search':
                return Utils::iframe($url
                    ->withPath('maps/embed/v1/'.$this->mode)
                    ->withQueryParameters([
                        'q' => $url->getDirectoryPosition(2),
                        'key' => $key,
                    ]));

            case 'dir':
                return Utils::iframe($url
                    ->withPath('maps/embed/v1/directions')
                    ->withQueryParameters([
                        'origin' => $url->getDirectoryPosition(2),
                        'destination' => $url->getDirectoryPosition(3),
                        'key' => $key,
                    ]));
        }
    }
}

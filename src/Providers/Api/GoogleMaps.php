<?php

namespace Embed\Providers\Api;

use Embed\Embed;
use Embed\Adapters\AdapterInterface;
use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;
use Embed\Utils;

/**
 * Provider to use the API of google.
 */
class GoogleMaps extends Provider implements ProviderInterface
{
    protected $mode;
    protected $config = [
        'key' => null,
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $mode = $adapter->getResponse()->getUri()->getDirectoryPosition(1);

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
        $uri = $this->adapter->getResponse()->getUri();

        if ($this->mode === 'place') {
            return $uri->getDirectoryPosition(2);
        }

        if ($this->mode === 'dir') {
            return $uri->getDirectoryPosition(2).' / '.$uri->getDirectoryPosition(3);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $uri = $this->adapter->getResponse()->getUri();
        $key = $this->adapter->getConfig('google[key]');

        if (empty($key)) {
            return;
        }

        switch ($this->mode) {
            case 'place':
            case 'search':
                return Utils::iframe($uri
                    ->withPath('maps/embed/v1/'.$this->mode)
                    ->withQueryParameters([
                        'q' => $uri->getDirectoryPosition(2),
                        'key' => $key,
                    ]));

            case 'dir':
                return Utils::iframe($uri
                    ->withPath('maps/embed/v1/directions')
                    ->withQueryParameters([
                        'origin' => $uri->getDirectoryPosition(2),
                        'destination' => $uri->getDirectoryPosition(3),
                        'key' => $key,
                    ]));
        }
    }
}

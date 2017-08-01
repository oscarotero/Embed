<?php

namespace Embed\Providers\Api;

use Embed\Adapters\Adapter;
use Embed\Providers\Provider;
use Embed\Http\Url;
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

        // Default is view (if mode is not mentioned in the url)
        $this->mode = 'view';

        switch ($mode) {
            case 'place':
            case 'dir':
            case 'search':
                $this->mode = $mode;
                break;
        }

        // check streetview mode
        // simple check,- starts with @, ends with t
        if ((substr($mode, 0, 1) === '@') &&  (substr($mode, -1) === 't')) {
            $this->mode = 'streetview';
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
            case 'view':
                $pos = self::getPosition($this->mode, $url);

                return Utils::iframe($url
                    ->withPath('maps/embed/v1/'.$this->mode)
                    ->withQueryParameters([
                        'center' => $pos['coordinates'],
                        'zoom' => $pos['zoom'],
                        'key' => $key,
                    ]));

            case 'streetview':
                $pos = self::getPosition($this->mode, $url);

                return Utils::iframe($url
                    ->withPath('maps/embed/v1/'.$this->mode)
                    ->withQueryParameters([
                        'location' => $pos['coordinates'],
                        'heading' => $pos['heading'],
                        'pitch' =>  $pos['pitch'],
                        'fov' =>  $pos['fov'],
                        'key' => $key,
                    ]));

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

    /**
     * Returns parsed position data from url.
     *
     * @param  string $mode The url mode
     * @param  Url    $url
     *
     * @return array
     */
    private static function getPosition($mode, Url $url)
    {
        // Set defaults
        $position = [
            'coordinates' => '',
            'zoom' => '4',
            'heading' => '0',
            'pitch' => '0',
            'fov' => '90'
        ];

        if ($mode === 'view') {
            $pos = explode(",", $url->getDirectoryPosition(1));
            $position['coordinates'] = str_replace('@', '', $pos[0]).','.$pos[1];
            $position['zoom'] = str_replace('z', "", $pos[2]);
        }

        if ($mode === 'streetview') {
            $pos = explode(",", $url->getDirectoryPosition(1));
            $position['coordinates'] = str_replace('@', '', $pos[0]).','.$pos[1];
            $position['zoom'] = str_replace('a', '', $pos[2]); // seems not used by google (emulated by other params)
            $position['heading'] = str_replace('h', '', $pos[4]);
            $position['fov'] = str_replace('y', '', $pos[3]);
            $pitch = str_replace('t', '', $pos[5]); // t is pitch but in 180% format
            if (is_numeric($pitch)) {
                $position['pitch'] = floatval($pitch) - 90;
            }
        }

        return $position;
    }
}

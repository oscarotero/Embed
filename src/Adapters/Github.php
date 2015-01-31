<?php
/**
 * Adapter to get the embed code from gist.github.com
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Bag;

class Github extends Webpage implements AdapterInterface
{
    public $api;

    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->match([
            'https://gist.github.com/*/*',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        $this->api = new Bag();
        $api = $this->request->createRequest($this->request->url->getUrl().'.json');

        if (($json = $api->getJsonContent())) {
            $this->api->set($json);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->getCode() ? 'rich' : 'link';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        if (($code = $this->api->get('div')) && ($stylesheet = $this->api->get('stylesheet'))) {
            return  '<link href="'.$stylesheet.'" rel="stylesheet">'.$code;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return 'Gist';
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return 'https://gist.github.com';
    }
}

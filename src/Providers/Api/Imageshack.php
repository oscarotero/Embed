<?php

namespace Embed\Providers\Api;

use Embed\Embed;
use Embed\Http\Uri;
use Embed\Adapters\AdapterInterface;
use Embed\Providers\Provider;
use Embed\Providers\ProviderInterface;

/**
 * Provider to use the API of imageshack.com.
 */
class Imageshack extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(AdapterInterface $adapter)
    {
        parent::__construct($adapter);

        $id = $adapter->getResponse()->getUri()->getDirectoryPosition(1);
        $endPoint = Uri::create('https://api.imageshack.com/v2/images/'.$id);
        $response = $adapter->getDispatcher()->dispatch($endPoint);

        if (($json = $response->getJsonContent()) && !empty($json['result'])) {
            $this->bag->set($json['result']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('title');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->bag->get('description');
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishedTime()
    {
        return $this->bag->get('creation_date');
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->bag->get('width');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->bag->get('height');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('owner[username]');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        $username = $this->getAuthorName();

        if (!empty($username)) {
            return 'http://imageshack.com/user/'.$username;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return $this->normalizeUrls($this->bag->get('direct_link'));
    }
}

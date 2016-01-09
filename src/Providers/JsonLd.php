<?php

namespace Embed\Providers;

/**
 * JsonLd provider.
 *
 * Load the json-ld data of an url and store it
 */
class JsonLd extends Provider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!($html = $this->request->getHtmlContent())) {
            return false;
        }

        foreach ($html->getElementsByTagName('script') as $script) {
            if ($script->hasAttribute('type') && strtolower($script->getAttribute('type')) === 'application/ld+json') {
                $value = trim($script->nodeValue);

                if (empty($value)) {
                    return false;
                }

                try {
                    $json = json_decode($value, true);
                    $this->bag->set($json);
                } catch (\Exception $exception) {
                    return false;
                }

                break;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->bag->get('name');
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

    }

    /**
     * {@inheritdoc}
     */
    public function getTags()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->bag->get('url');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->bag->get('author[name]');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->bag->get('author[url]');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return $this->bag->get('provider[name]');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return $this->bag->get('provider[url]');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        if ($this->bag->has('image[contentUrl]')) {
            return $this->bag->get('image[contentUrl]');
        }

        return $this->bag->get('image');
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->bag->get('image[width]');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->bag->get('image[height]');
    }
}

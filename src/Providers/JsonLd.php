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
        return $this->getMainProperty('url');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->getMainProperty('author[name]');
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorUrl()
    {
        return $this->getMainProperty('author[url]');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderName()
    {
        return $this->getMainProperty('provider[name]');
    }

    /**
     * {@inheritdoc}
     */
    public function getProviderUrl()
    {
        return $this->getMainProperty('provider[url]');
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        if ($this->hasMainProperty('image[contentUrl]')) {
            return $this->getMainProperty('image[contentUrl]');
        }

        return $this->getMainProperty('image');
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->getMainProperty('image[width]');
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->getMainProperty('image[height]');
    }

    private function hasMainEntity()
    {
        return $this->bag->has('mainEntity');
    }

    private function getMainProperty($name)
    {
        if ($this->hasMainEntity()) {
            return $this->bag->get("mainEntity[$name]");
        }

        return $this->bag->get($name);
    }

    private function hasMainProperty($name)
    {
        if ($this->hasMainEntity()) {
            return $this->bag->has("mainEntity[$name]");
        }

        return $this->bag->has($name);
    }
}

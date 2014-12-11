<?php
/**
 * Generic oembed provider.
 * Load the oembed data of an url and store it
 */
namespace Embed\Providers;

use Embed\Request;

class OEmbed extends Provider
{
    /**
     * Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $format = (($request->url->getExtension() === 'xml') || ($request->url->getParameter('format') === 'xml')) ? 'xml' : 'json';

        switch ($format) {
            case 'json':
                if (($parameters = $request->getJsonContent()) && empty($parameters['Error'])) {
                    $this->set($parameters);
                }
                break;

            case 'xml':
                if ($parameters = $request->getXmlContent()) {
                    foreach ($parameters as $element) {
                        $this->set($element->getName(), (string) $element);
                    }
                }
                break;

            default:
                throw new \Exception("No valid format specified");
        }
    }

    /**
     * Gets the title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * Gets the description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * Gets the type
     *
     * @return string|null
     */
    public function getType()
    {
        $type = $this->get('type');

        if (strpos($type, ':') !== false) {
            $type = substr(strrchr($type, ':'), 1);
        }

        switch ($type) {
            case 'video':
            case 'photo':
            case 'link':
            case 'rich':
                return $type;

            case 'movie':
                return 'video';
        }
    }

    /**
     * Gets the code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->get('html');
    }

    /**
     * Gets the url
     *
     * @return string|null
     */
    public function getUrl()
    {
        if ($this->getType() === 'photo') {
            return $this->get('web_page');
        }

        return $this->get('url') ?: $this->get('web_page');
    }

    /**
     * Gets the author name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->get('author_name');
    }

    /**
     * Gets the author url
     *
     * @return string|null
     */
    public function getAuthorUrl()
    {
        return $this->get('author_url');
    }

    /**
     * Gets the provider name
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->get('provider_name');
    }

    /**
     * Gets the provider url
     *
     * @return string|null
     */
    public function getProviderUrl()
    {
        return $this->get('provider_url');
    }

    /**
     * Gets the image
     *
     * @return string|null
     */
    public function getImage()
    {
        if ($this->getType() === 'photo') {
            return $this->get('url') ?: $this->get('thumbnail_url');
        }

        return $this->get('thumbnail_url');
    }

    /**
     * Gets the code width
     *
     * @return integer|null
     */
    public function getWidth()
    {
        return $this->get('width');
    }

    /**
     * Gets the code height
     *
     * @return integer|null
     */
    public function getHeight()
    {
        return $this->get('height');
    }
}

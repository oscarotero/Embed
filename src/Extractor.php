<?php
declare(strict_types = 1);

namespace Embed;

use DomainException;
use Embed\Detectors\AuthorName;
use Embed\Detectors\AuthorUrl;
use Embed\Detectors\Cms;
use Embed\Detectors\Code;
use Embed\Detectors\Description;
use Embed\Detectors\Detector;
use Embed\Detectors\Favicon;
use Embed\Detectors\Feeds;
use Embed\Detectors\Icon;
use Embed\Detectors\Image;
use Embed\Detectors\Keywords;
use Embed\Detectors\Language;
use Embed\Detectors\Languages;
use Embed\Detectors\License;
use Embed\Detectors\LinkedData;
use Embed\Detectors\ProviderName;
use Embed\Detectors\ProviderUrl;
use Embed\Detectors\PublishedTime;
use Embed\Detectors\Redirect;
use Embed\Detectors\Title;
use Embed\Detectors\Url;
use Embed\Http\Crawler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Class to extract the info
 */
class Extractor
{
    private RequestInterface $request;
    private ResponseInterface $response;
    private UriInterface $uri;
    private Crawler $crawler;

    private Document $document;
    private OEmbed $oembed;

    protected AuthorName $authorName;
    protected AuthorUrl $authorUrl;
    protected Cms $cms;
    protected Code $code;
    protected Description $description;
    protected Favicon $favicon;
    protected Feeds $feeds;
    protected Icon $icon;
    protected Image $image;
    protected Keywords $keywords;
    protected Language $language;
    protected Languages $languages;
    protected License $license;
    protected LinkedData $linkedData;
    protected ProviderName $providerName;
    protected ProviderUrl $providerUrl;
    protected PublishedTime $publishedTime;
    protected Redirect $redirect;
    protected Title $title;
    protected Url $url;

    public function __construct(UriInterface $uri, RequestInterface $request, ResponseInterface $response, Crawler $crawler)
    {
        $this->uri = $uri;
        $this->request = $request;
        $this->response = $response;
        $this->crawler = $crawler;

        //APIs
        $this->document = new Document($this);
        $this->oembed = new OEmbed($this);

        //Detectors
        $this->authorName = new AuthorName($this);
        $this->authorUrl = new AuthorUrl($this);
        $this->cms = new Cms($this);
        $this->code = new Code($this);
        $this->description = new Description($this);
        $this->favicon = new Favicon($this);
        $this->feeds = new Feeds($this);
        $this->icon = new Icon($this);
        $this->image = new Image($this);
        $this->keywords = new Keywords($this);
        $this->language = new Language($this);
        $this->languages = new Languages($this);
        $this->license = new License($this);
        $this->linkedData = new LinkedData($this);
        $this->providerName = new ProviderName($this);
        $this->providerUrl = new ProviderUrl($this);
        $this->publishedTime = new PublishedTime($this);
        $this->redirect = new Redirect($this);
        $this->title = new Title($this);
        $this->url = new Url($this);
    }

    public function __get(string $name)
    {
        $detector = $this->$name ?? null;

        if (!$detector || !($detector instanceof Detector)) {
            throw new DomainException(sprintf('Invalid key "%s". No detector found for this value', $name));
        }

        return $detector->get();
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getOEmbed(): OEmbed
    {
        return $this->oembed;
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getUri(): UriInterface
    {
        return $this->uri;
    }

    public function getCrawler(): Crawler
    {
        return $this->crawler;
    }
}

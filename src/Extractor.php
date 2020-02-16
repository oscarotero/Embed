<?php

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
use Embed\Detectors\Type;
use Embed\Detectors\Url;
use Embed\Http\Crawler;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class to extract the info
 */
class Extractor
{
    private RequestInterface $request;
    private ResponseInterface $response;
    private Crawler $crawler;

    private Document $document;
    private OEmbed $oembed;

    private AuthorName $authorName;
    private AuthorUrl $authorUrl;
    private Cms $cms;
    private Code $code;
    private Description $description;
    private Favicon $favicon;
    private Feeds $feeds;
    private Icon $icon;
    private Image $image;
    private Keywords $keywords;
    private Language $language;
    private Languages $languages;
    private License $license;
    private LinkedData $linkedData;
    private ProviderName $providerName;
    private ProviderUrl $providerUrl;
    private PublishedTime $publishedTime;
    private Redirect $redirect;
    private Title $title;
    private Type $type;
    private Url $url;

    public function __construct(RequestInterface $request, ResponseInterface $response, Crawler $crawler)
    {
        $this->request = $request;
        $this->response = $response;
        $this->crawler = $crawler;

        $this->document = Document::create((string) $response->getBody());
        $this->oembed = new OEmbed($this);

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
        $this->type = new Type($this);
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

    public function getCrawler(): Crawler
    {
        return $this->crawler;
    }
}

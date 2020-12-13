<?php
namespace App\Authors;

use App\Dom\Document;
use App\Dom\Element;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SetCookie;

class Cheers extends Author
{
    protected $document;

    const FEED_URL = 'http://www.cw.com.tw/RSS/cheers.xml';
    const NOPAGER_URL = 'www.cheers.com.tw/article/no-pager?no_pager=1';
    const COOKIE_DOMAIN = 'www.cheers.com.tw';

    public function toXml()
    {
        $this->fetcher->options = [
            'cookies' => $this->getNoPagerCookies()
        ];

        $xml = $this->fetcher->get(self::FEED_URL);
        $this->document = Document::parse($xml, 'xml');
        $this->full_xml = $this->fillContent();
        return $this->document->toXml();
    }

    protected function fillContent()
    {
        $links = [];
        foreach ($this->document->items() as $item) {
            $item->link = $this->getNormalisedLink($item);
            $links[] = $item->link;
        }

        $this->fetcher->cacheByUrls($links);
        $this->bodies = $this->fetcher->getCacheByUrls($links);

        foreach ($this->document->items() as $item) {
            $content = $this->getContent($item->link);

            if ($content) {
                $item->description = $content;
            }
        }
    }

    public function getNoPagerCookies()
    {
        $clinet = $this->fetcher->client;
        $response = $clinet->request('GET', self::NOPAGER_URL);
        $cookies = $response->getHeader('Set-Cookie');
        foreach ($cookies as $key => $cookieString) {
            $cookies[$key] = SetCookie::fromString($cookieString);
            $cookies[$key]->setDomain(self::COOKIE_DOMAIN);
        }
        $cookieJar = new CookieJar(false, $cookies);

        return $cookieJar;
    }

    protected function getContent($link)
    {
        $body = array_get($this->bodies, $link);
        if (!$body) {
            return;
        }

        $article = Document::parse($body, 'html');
        if (!$article) {
            return;
        }

        $elements = $article->xpath("//article");
        if (0 == $elements->length) {
            return;
        }

        $content = $article->toHtml($elements->item(0));
        return $content;
    }

    private function getNormalisedLink(Element $item)
    {
        return htmlspecialchars($item->link);
    }
}

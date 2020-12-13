<?php
namespace App\Authors;

use App\Dom\Document;
use App\Dom\Element;

class Commonhealth extends Author
{
    const FEED_URL = 'https://www.commonhealth.com.tw/rss.xml';

    public function toXml()
    {
        $xml = $this->fetcher->get(self::FEED_URL);

        $this->document = Document::parse($xml, 'xml');
        $this->fillContent();
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

        $elements = $article->xpath("//section[@class='article__body']");

        if (0 == $elements->length) {
            return;
        }

        $content = $article->toHtml($elements->item(0));
        return $content;
    }

    private function getNormalisedLink(Element $item)
    {
        $link = str_replace('www.commonhealth.com.tw', 'm.commonhealth.com.tw', $item->link);
        return $link;
    }
}

<?php
namespace App\Authors;

use App\Dom\Document;
use App\Dom\Element;

class ProjectUp extends Author
{
    const FEED_URL = 'https://feeds.feedburner.com/projectup/WDNW';

    public function toXml()
    {
        $xml = $this->fetcher->get(self::FEED_URL);
        $this->document = Document::parse($xml, 'xml');
        $this->full_xml = $this->fillContent();
        return $this->document->toXml();
    }

    protected function fillContent()
    {
        $links = [];
        foreach ($this->document->items() as $item) {
            $link = $this->getNormalisedLink($item);
            $links[] = $link;
        }

        $this->fetcher->cacheByUrls($links);
        $this->bodies = $this->fetcher->getCacheByUrls($links);

        foreach ($this->document->items() as $item) {
            $link = $this->getNormalisedLink($item);
            $content = $this->getContent($link);

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

        $article = Document::parse('<?xml encoding="utf-8" ?>' . $body, 'html');
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
        return $item->guid;
    }
}

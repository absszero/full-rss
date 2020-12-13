<?php
namespace App\Authors;

use App\Dom\Document;
use App\Dom\Element;

class Parenting extends Author
{
    const FEED_URL = 'http://www.parenting.com.tw/RSS/parenting.xml';

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

        $elements = $article->xpath("//article");

        if (0 == $elements->length) {
            return;
        }

        $content = $article->toHtml($elements->item(0));
        return $content;
    }

    private function getNormalisedLink(Element $item)
    {
        $info = parse_url($item->link);
        $info['host'] = str_replace('www.parenting.com.tw', 'm.parenting.com.tw', $info['host']);
        $link = $info['scheme'] . '://' . $info['host'] . $info['path'];
        return $link;
    }
}

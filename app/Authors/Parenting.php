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
            $links[] = $this->getNormalisedLink($item);
        }

        $this->fetcher->cacheByUrls($links);
        $this->bodies = $this->fetcher->getCacheByUrls($links);

        foreach ($this->document->items() as $item) {
            $content = $this->getContent($item);

            if ($content) {
                $item->description = $content;
            }
        }
    }

    protected function getContent(Element $item)
    {
        $link = $this->getNormalisedLink($item);

        $body = array_get($this->bodies, $link['url']);

        if (!$body) {
            return;
        }

        $body = preg_replace('/[[:cntrl:]]/', '', $body);
        $body = json_decode($body);

        return $body->data->article->content;
    }

    private function getNormalisedLink(Element $item)
    {
        preg_match('/\d+/', $item->link, $matches);

        return [
            'url' => 'https://www-gql.parenting.com.tw/graphql?' . $matches[0],
            'method' => 'POST',
            'options' => [
                'json' => [
                    "operationName" => "article",
                    "variables" =>  ["id" => $matches[0]],
                    "query" =>  "query article(\$id: ID!) {article(id: \$id) {content}}"
                ]
            ]
        ];
    }
}

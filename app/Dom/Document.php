<?php

namespace App\Dom;

use App\Dom\Element;
use DOMXpath;

class Document extends \DOMDocument
{
    public static function parse($body, $format)
    {
        $insatace = new self('1.0', 'UTF-8');
        $insatace->registerNodeClass('DOMElement', Element::class);

        $method = "load" . strtoupper($format);
        libxml_use_internal_errors(true);
        $result = $insatace->$method($body);
        libxml_use_internal_errors(false);

        if (!$result) {
            $insatace = false;
        };

        return $insatace;
    }

    public function xpath($expression)
    {
        $xpath = new DOMXpath($this);
        return $xpath->query($expression);
    }

    public function items()
    {
        return $this->tag('item');
    }

    public function tag($name)
    {
        return $this->getElementsByTagName($name);
    }

    public function toXml(Element $e = null)
    {
        return $this->saveXml($e);
    }

    public function toHtml(Element $e = null)
    {
        return $this->saveHtml($e);
    }
}

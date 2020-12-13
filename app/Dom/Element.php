<?php

namespace App\Dom;

class Element extends \DOMElement
{
/*   function appendElement($name) {
      return $this->appendChild(new Element($name));
   }*/

    public function __get($name)
    {
        return $this->getElementsByTagName($name)->item(0)->nodeValue;
    }
    public function __set($name, $value)
    {
        $this->getElementsByTagName($name)->item(0)->nodeValue = $value;
    }
    public function __toString()
    {
        return $this->element->textContent;
    }
}

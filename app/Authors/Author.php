<?php

namespace App\Authors;

use App\Dom\Document;
use App\FeedInterface;
use App\Fetcher;
use Cache;

abstract class Author implements FeedInterface
{
    const CACHE_TIME = 15;

    protected $fetcher;
    protected $document;
    protected $bodies = [];

    public function __construct(Fetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

    final public function render()
    {
        $xml = Cache::get(static::class);
        if ($xml) {
            return $xml;
        }

        $xml = $this->toXml();
        Cache::put(static::class, $xml, self::CACHE_TIME);
        return $xml;
    }
}

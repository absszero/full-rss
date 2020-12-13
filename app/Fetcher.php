<?php

namespace App;

use Cache;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class Fetcher
{
    public $client;

    public $options = [];

    const CACHE_TIME = 15;

    const USER_AGENT = "Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36";

    public function __construct()
    {
        $this->client = new Client();
        $this->options = [
            'headers' => [
                'User-Agent' => self::USER_AGENT,
            ],
            'verify' => false,
        ];
    }

    public function get($url)
    {
        $this->cacheByUrls([$url]);
        $bodies = $this->getCacheByUrls([$url]);
        return array_get($bodies, $url);
    }

    public function getCacheByUrls(array $urls)
    {
        $bodies = [];
        foreach ($urls as $url) {
            $bodies[$url] = Cache::get($url);
        }

        return $bodies;
    }

    public function cacheByUrls(array $urls)
    {
        $urls = array_filter($urls, function ($url) {
            if (!Cache::has($url)) {
                return $url;
            }
        });

        $promises = [];
        foreach ($urls as $url) {
            $promises[$url] = $this->client->requestAsync('GET', $url, $this->options);
        }

        $results = Promise\settle($promises)->wait();

        $bodies = [];
        foreach ($results as $url => $result) {
            if ('fulfilled' !== $result['state']) {
                continue;
            }
            $body = $result['value']->getBody()->getContents();
            Cache::put($url, $body, self::CACHE_TIME);
        }
    }

    public function truncateCache(array $urls)
    {
        foreach ($urls as $url) {
            Cache::forget($url);
        }
    }
}

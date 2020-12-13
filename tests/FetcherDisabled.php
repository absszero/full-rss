<?php

use App\Fetcher;

class FetcherTest extends TestCase
{
    private $fetcher;

    public function setUp()
    {
        parent::setUp();
        $this->fetcher = new Fetcher();
    }

    public function testGet()
    {
        $url = 'https://www.parenting.com.tw/RSS/parenting.xml';
        $body = $this->fetcher->get($url);
        $this->assertTrue(starts_with($body, '<?xml'));
    }

    public function testGetCacheByUrls()
    {
        $urls = [
            'https://www.parenting.com.tw/article/5070321-一個道具幾十種玩法　刺激身體大腦/',
            'https://www.parenting.com.tw/article/5074310-吳沁婕：我可以乖乖坐好哦！/'
        ];
        $this->fetcher->cacheByUrls($urls);
        $bodies = $this->fetcher->getCacheByUrls($urls);
        $this->assertEquals(count($urls), count($bodies));
    }

    public function testTruncateCache()
    {
        $urls = [
            'https://www.parenting.com.tw/article/5070321-一個道具幾十種玩法　刺激身體大腦/',
            'https://www.parenting.com.tw/article/5074310-吳沁婕：我可以乖乖坐好哦！/'
        ];
        $this->fetcher->cacheByUrls($urls);
        $this->fetcher->truncateCache($urls);
        $bodies = $this->fetcher->getCacheByUrls($urls);
        $this->assertNull($bodies[$urls[0]]);
    }
}

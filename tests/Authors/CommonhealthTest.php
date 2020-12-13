<?php

namespace App\Authors;

class CommonhealthTest extends \TestCase
{
    public function testToXml()
    {
        $mock = $this->initMock(\App\Fetcher::class);
        $mock
        ->shouldReceive('get')->andReturn($this->xml())
        ->shouldReceive('cacheByUrls')
        ->shouldReceive('getCacheByUrls')->andReturn($this->bodies());

        $author = app(Commonhealth::class);
        $this->assertContains('三采文化出版', $author->toXml());
    }

    protected function bodies()
    {
        $html = <<<HTML
<!DOCTYPE html>
<html lang="zh-Hant">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="UTF-8">
</head>
<body>
<section class="article__body">
                    <div class="assistive assistive--single">
                        <div class="assistive__btn gtm-track" data-action="手機內頁點擊" gtm-name="放大字體">
                            <div class="icon icon--horizontalText icon__assistive icon__assistive--enlarge gtm-track" data-assistive="enlarge" data-action="手機內頁點擊" gtm-name="放大字體">
                                <span class="icon__text gtm-track" data-action="手機內頁點擊" gtm-name="放大字體">放大字體</span>
                            </div>
                        </div>
                                            </div>

                    <span id="innity-in-post"></span>
                        <div class="essay" style="font-size: 20px;">
        <div class="essay__intro">
            <p>寒氣四季都有，即使炎熱的夏季一樣會受寒。現代生活環境與公共空間多半冷氣橫行，加之凍飲氾濫，寒氣不免侵淫。我指的寒氣涵蓋風寒溼，三氣雜揉，交相為禍。</p>
        </div>
        <div class="essay__editor editorBlock">
            <p>寒氣致病因素相去不遠，故四季排寒、提升體氣的原則大體相同，羅列如下：</p>
<p><strong>1.保暖，即啟動排寒。</strong>四季都要做好保暖，好好吃飯，身心同在，以天然餐食長養色身，飲食遵守12字箴言：戒「冰冷寒涼、燒烤炸辣、濫補濫清」，注意生活細節，嚴防冷氣。</p>
<p><strong>2.免吃藥排寒，首推泡腳</strong>（最簡單的是薑片煮水）。睡前拉筋暖足，確保一夜好眠。只要體氣不虛，有外感皆可泡腳。</p>
<blockquote><p>簡易的泡腳也是止痛良方，頭疼腹痛，引熱下行，汗出即解。</p></blockquote>
<p><strong>3.運動生陽，首推站樁。</strong>氣足自然神強精飽，東方式的運動，如太極拳、八段錦、易筋經、瑜珈、靜坐、經行等，都能讓人放鬆，真氣得以運行無礙。</p>
<p><strong>4.排寒族的妙方：</strong></p>
<p>●<mark data-popper-type="mark" data-mark-id="01">吹風機、暖暖包保暖驅寒，過汗時補充米油，加些鹽花當水喝，非常顧胃氣養津液。若溼氣重、心臟無力，就要避免飲水過度。</mark></p>
<p>●發燒時暫停蛋白質攝取，吃點葱白薑粥，發汗解表。</p>
<p>●薑煮米酒水可用於刮痧、皮膚止癢。</p>
<p>●外傷跌磕、蜂螫蟲咬別忘隨身寶人尿，尤其童子尿滋陰降火，止血散瘀最速。</p>
<figure class="imageCaptioned"><img alt="" height="498" src="//as.chdev.tw/web/article/photos/1/5/5/ff054f1ad82c7738fd2b521140ff3d1ebe60107c.jpg" width="830"><figcaption>（圖片來源：shutterstock）</figcaption></figure><h2>排寒常見食療方</h2>
<p><strong>葱白薑粥</strong></p>
<p>功效：驅風散邪，發汗解表。</p>
<p>作法：先將米煮成粥，再加入葱白、薑燜煮5分鐘，趁熱食用。體力差的，可酌加幾粒紅棗，或調入一些麥芽糖。小小孩餵米湯，大小孩可連糊爛米粥食。</p>
<p><strong>米油</strong></p>
<p>功效：發燒、過汗、過下、連續嘔吐後可服用，滋陰補液。</p>
<p>作法：粥久熬爛熟後，上面浮著一層米粒化成的稠湯水，即所謂「米油」，酌加鹽花，營養滋補。</p>
<p><strong>黑糖薑棗茶</strong></p>
<p>功效：因寒與虛引起的一切症狀皆適用。</p>
<p>作法：黑糖、薑片加紅棗共煮，當茶飲。</p>
<p>本文節錄自<a href="https://www.books.com.tw/products/0010802189" target="_blank">《病從排寒解》</a>，由三采文化出版。</p><!-- /110393698/ROS_list_content_mid_336x280(1) --><div class="contentLeaflet"><div id="div-gpt-ad-1547089571070-0"></div></div>
        </div>
    </div>
                                        <div class="popper popper--mark" data-popper-mark="01" style="display: none;">
                        <div class="popper__content">
                            <div class="popper__body">
                                重點分享
                                <i class="icon icon--single icon__articleSocial icon__articleSocial--fb gtm-track" data-action="手機內頁點擊" gtm-name="文內FB重點分享" id="share_quote_fb"></i>
                                <i class="icon icon--single icon__articleSocial icon__articleSocial--line gtm-track" data-action="手機內頁點擊" gtm-name="文內LINE重點分享" id="share_quote_line"></i>
                            </div>
                        </div>
                    </div>
                </section>
</body></html>
HTML;

        return ['http://m.commonhealth.com.tw/article/article.action?nid=70150' => $html];
    }

    protected function xml()
    {
        return <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
  <channel>
    <title>康健雜誌精選文章</title>
    <description>康健雜誌提供身心靈健康的資訊，包括就醫資訊、醫療趨勢、健康樂活、心靈、飲食、測驗、幸福部落格等內容，為台灣的健康類指標刊物。</description>
    <language>zh-tw</language>
    <pubDate>2019-03-15 10:06:12 +0800</pubDate>
    <ttl>0</ttl>
    <skipHours />
    <skipDays />
    <item>
      <title>心智飲食，讓大腦青春慢老</title>
      <description>想降低將來失智的風險，這樣吃就對了。</description>
      <link>http://www.commonhealth.com.tw/article/article.action?nid=70150</link>
      <author>張靜慧</author>
      <guid isPermaLink="true">http://www.commonhealth.com.tw/article/article.action?nid=70150</guid>
      <pubDate>2019-03-15 10:06:12 +0800</pubDate>
    </item>
</channel>
</rss>
XML;
    }
}

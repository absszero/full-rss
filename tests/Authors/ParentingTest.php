<?php

namespace App\Authors;

class ParentingTest extends \TestCase
{
    public function testToXml()
    {
        $mock = $this->initMock(\App\Fetcher::class);
        $mock
        ->shouldReceive('get')->andReturn($this->xml())
        ->shouldReceive('cacheByUrls')
        ->shouldReceive('getCacheByUrls')->andReturn($this->bodies());

        $author = app(Parenting::class);
        $this->assertStringContainsString('決定性的影響力', $author->toXml());
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
<article class="containerBoxMain">
<section class="article">
                <p>與孩子討論種族話題，是否就能引導他們接納多元文化？美國社會學家瑪格麗特·哈格曼（Margaret Hagerman）在新書《White Kids》（暫譯：白種小孩）中指出，與孩子討論種族話題很重要，但還不夠。</p><p>在族群被政治分化、少數族裔經常受到剝削的當代，多數族裔家庭的家長，要去思考如何教出仁愛、富有同情心的孩子，至少不要教出種族主義者。這些家長經常得到一個簡單的建議：與孩子討論種族歧視與種族問題。</p><p>但哈格曼領導的最新研究顯示並非如此。她花了兩年時間，研究30個位於美國中西部的富裕白種家庭。她發現，孩子對種族的態度，最大的影響來自他們成長的環境。孩子對種族的態度，不只來自與父母的對話，更多來自於他們個人的經驗。</p><!-- AdAsia --><script type="application/javascript" src="//ced.sascdn.com/tag/2060/smart.js" async=""></script><div id="sas_44269"></div><script type="application/javascript">var sas = sas || {};sas.cmd = sas.cmd || [];</script><!-- IR & MIR 廣告插入點(開始) --><div id="oneadIRMIRTag"></div><script type="text/javascript" src="https://cp.cw1.tw/files/js/onead_www_ir_mir.js?v=1537368705"></script><!-- IR & MIR 廣告插入點(結束) --><p><!-- pagebreak --></p><p>他們的個人經驗來自他們與同儕、老師、鄰居、教練、手足、陌生人⋯⋯社區中每一個人的互動。家長如何規劃孩子的成長環境，對孩子的種族觀有很大的影響力。他們所居住的社區，他們上的學校，他們參與的活動、俱樂部、夏令營⋯⋯孩子從這些地方學習到什麼是種族，以及種族的意義。家長在做這些決定時，如果對種族問題有意識，就能讓孩子在一個多元文化的環境中成長，成為一個胸襟開闊的人。</p><p><span style="color: #ff6600;"><strong>生活在單一族群社區，認為種族問題不嚴重</strong></span></p><p>哈格曼訪問了36個10至13歲的孩子，觀察他們每天的生活。其中約一半的孩子上多元種族學校，社區裡有黑人及拉美裔鄰居，跟有色人種孩子一起參加活動。這些孩子多半能很自然的討論種族話題，能思考複雜的種族歧視問題，甚至參與推動種族平權的社會運動。一個從小跟各種不同族裔孩子相處的11歲白種孩子說：「我想（種族歧視問題）比我們多數人以為的更重大。種族歧視從來沒有像現在這麼嚴重，只是白種人假裝種族歧視不存在，或者想要隱藏它。」</p><p>而那些上白人學校的孩子、在全白人社區長大的孩子、從未與有色人種小孩一起參加活動的白種孩子，經常拿種族話題開玩笑，吵架時罵對方「你是種族主義者」。對他們而言，這跟罵「你很笨」是一樣的。雖然他們的父母也與他們討論種族問題，但這些孩子對種族問題的複雜性與歷史了解都很有限。一個從未與其他族裔孩子相處的11歲白種孩子說：「種族歧視問題是黑奴時代的問題，還有以前在公車上黑人不能跟白人坐在一起。但是1920年以後已經沒有種族歧視了。」對於社會上種族問題的感受和現實之間，明顯有落差。</p><p>哈格曼認為，只和孩子討論種族歧視，對孩子的種族觀影響很小。父母如何選擇學校與住家環境，以及如何跟少數族裔人士互動，對孩子的種族觀才有真正決定性的影響力。</p><p><strong>延伸閱讀：</strong></p>   <!-- /6171979/mobile_content_mid1 -->
    <div id="div-gpt-ad-1489035682104-0">
    <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1489035682104-0'); });
    </script>
    </div>
<p><a href="https://www.parenting.com.tw/article/5076778-/" target="_blank" rel="noopener noreferrer">黃哲斌：世界中的孩子，我們的孩子</a></p><p><a href="https://www.parenting.com.tw/article/5076700-/" target="_blank" rel="noopener noreferrer">貧窮、難民、種族歧視和國際衝突，孩子的世界觀怎麼教？</a></p><p><a href="https://flipedu.parenting.com.tw/article/4006" target="_blank" rel="noopener noreferrer">3步驟培養青少年的國際觀</a></p><p><a href="https://www.parenting.com.tw/article/5076696-/" target="_blank" rel="noopener noreferrer">學生對國際議題沒興趣？李貞慧：目前不關心，不代表不重要</a></p>                </section></article>
</body></html>
HTML;

        return ['https://m.parenting.com.tw/article/test/' => $html];
    }

    protected function xml()
    {
        return <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
    <channel>
        <title>親子天下精選文章</title>
        <link>https://www.parenting.com.tw</link>
        <description></description>
        <language>zh-tw</language>
        <pubDate>Thu, 30 Apr 2015 05:00:25 5AprGMT</pubDate>
        <dc:date>2015-04-30T13:00:25Z</dc:date>
        <dc:language>zh-tw</dc:language>
        <image>
            <title>親子天下</title>
            <url>https://cw1.tw/CW/images/Photo/C1312285846062.jpg</url>
            <link>https://www.parenting.com.tw</link>
        </image>
        <item>
            <title>以身作則，教孩子接納和自己不一樣的族群</title>
            <link>https://www.parenting.com.tw/article/test/?utm_source=MobileRSS.website&amp;utm_medium=referral&amp;utm_campaign=normal_article</link>
                            <link rel="related" type="text/html" title="" href="" />
                            <link rel="related" type="text/html" title="" href="" />
                            <link rel="related" type="text/html" title="" href="" />
                                                <description>對於「與己不同」族群的不理解、排擠、仇恨，是造成人類社會許多悲劇的源頭之一。要能促進對於不同族群的理解和包容，光和孩子「談」不夠，在生活環境中親身體驗和互動，才是根本。</description>

            <enclosure url="https://cp.cw1.tw/files/md5/3d/36/3d36bcd8e72280b1cc8fcaa3fbdea0ea-203414.jpg" type="image/jpg" />
            <pubDate>Wed, 19 Sep 2018 01:56:29 1SepGMT</pubDate>
            <guid>https://www.parenting.com.tw/article/5077818-以身作則，教孩子接納和自己不一樣的族群/?utm_source=MobileRSS.website&amp;utm_medium=referral&amp;utm_campaign=normal_article</guid>
            <dc:creator>曾多聞</dc:creator>
            <dc:date>2018-09-19T09:56:29Z</dc:date>
        </item>
</channel>
</rss>
XML;
    }
}

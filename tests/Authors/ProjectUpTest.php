<?php

namespace App\Authors;

class ProjectUpTest extends \TestCase
{
    public function testToXml()
    {
        $mock = $this->initMock(\App\Fetcher::class);
        $mock
        ->shouldReceive('get')->andReturn($this->xml())
        ->shouldReceive('cacheByUrls')
        ->shouldReceive('getCacheByUrls')->andReturn($this->bodies());

        $author = app(ProjectUp::class);
        $this->assertStringContainsString('本站所有文章未經事先書面授權，請勿任意利用、引用、轉載。', $author->toXml());
    }

    protected function bodies()
    {
        $html = <<<'HTML'
<!DOCTYPE html>
<html lang="zh-TW">
    <head>

                <title>長賜號擱淺事件帶來的專案啟發 - 專案管理生活思維</title>
                <meta name="description" content="長賜號貨輪在蘇伊士運河擱淺，影響全球相關產業的供貨，對全球經濟(特別是油價)帶來不小的波動。當地政府為了盡速疏通運河，派...">
<meta name="keywords" content="ProjectUp 專案管理生活思維,專案管理,長賜號擱淺事件帶來的專案啟發">

<meta property="fb:app_id" content="991445827629809">
<meta property="og:type" content="article">
<meta property="og:site_name" content="專案管理生活思維">
<meta property="og:url" content="https://www.projectup.net/article/view/id/16725">
<meta property="og:title" content="長賜號擱淺事件帶來的專案啟發 - 專案管理生活思維">
<meta property="og:description" content="長賜號貨輪在蘇伊士運河擱淺，影響全球相關產業的供貨，對全球經濟(特別是油價)帶來不小的波動。當地政府為了盡速疏通運河，派...">
<meta property="og:image" content="https://www.projectup.net/images/backend/article/02837a6a3e9fc4a5b79fd3251e0d7470.jpg">

<meta itemprop="image" content="https://www.projectup.net/images/backend/article/02837a6a3e9fc4a5b79fd3251e0d7470.jpg">
<meta name="image" content="https://www.projectup.net/images/backend/article/02837a6a3e9fc4a5b79fd3251e0d7470.jpg">
<link rel="image_src" href="https://www.projectup.net/images/backend/article/02837a6a3e9fc4a5b79fd3251e0d7470.jpg">
        <!-- ======== META TAGS ======== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- ======== FAVICONS ======== -->
                <link rel="icon" href="/images/favicon.ico?v=202103181603">
                <link rel="apple-touch-icon" href="/images/xfavicon.png,qv=202103181603.pagespeed.ic.WRNcFM7TC2.webp">
        <!-- ======== RSS ======== -->
                <link rel="alternate" type="application/rss+xml" title="RSS Feed for www.projectup.net" href="https://www.projectup.net/rss"/>
        <!-- ======== STYLESHEETS ======== -->
        <link rel="preload prefetch" href="/fonts/Fontawesome/fontawesome-webfont.woff2?v=4.3.0" as="font" type="font/woff2" crossorigin>
                <link rel="preload prefetch stylesheet" href="/css/A.main.css,qv=202103181603.pagespeed.cf.3ZZHIm32st.css">
                <script>var jQuery_root="https://www.projectup.net/jQuery/";</script><script type="text/javascript" src="https://www.projectup.net/jQuery/jquery.min.js,qv=202103181603.pagespeed.jm.OVVl-rMgcg.js"></script>
<style>.owl-carousel .owl-wrapper:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel{display:none;position:relative;width:100%;-ms-touch-action:pan-y}.owl-carousel .owl-wrapper{display:none;position:relative;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-wrapper-outer{overflow:hidden;position:relative;width:100%}.owl-carousel .owl-wrapper-outer.autoHeight{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out}.owl-carousel .owl-item{float:left}.owl-controls .owl-page,.owl-controls .owl-buttons div{cursor:pointer}.owl-controls{-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}.grabbing{cursor:url(/jQuery/img/carousel/grabbing.png) 8 8 , move}.owl-item.loading{min-height:150px;background:url(/jQuery/img/carousel/AjaxLoader.gif) no-repeat center center}.owl-carousel .owl-wrapper,.owl-carousel .owl-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}</style>
<script src="https://www.projectup.net/jQuery/fitvids,_jquery.fitvids.js,qv==202103181603+magnific_pop,_jquery.magnific.popup.min.js,qv==202103181603+scrolly,_jquery.scrolly.js,qv==202103181603+smoothScroll,_jquery.smooth.scroll.js,qv==202103181603+scrollTo,_jquery.scrollTo.min.js,qv==202103181603+owlcarousel,_jquery.owlcarousel.min.js,qv==202103181603.pagespeed.jc.5z6g3Vzefi.js"></script><script>eval(mod_pagespeed_6fsn6NXAY4);</script>
<script>eval(mod_pagespeed_cHaGjVhn8t);</script>
<script>eval(mod_pagespeed_Pgw3gBaMHa);</script>
<script>eval(mod_pagespeed_ONL8WYSa3y);</script>
<script>eval(mod_pagespeed_W38wLlasm4);</script>
<script>eval(mod_pagespeed_VIC4jNLYtU);</script>
    </head>
    <body>
                                <div id="fb-root"></div>
                <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.4&appId=991445827629809";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>

        <!-- ======== WRAPPER ======== -->
        <div id="wrapper" class="wide">
            <!-- ======== HEADER ======== -->
            <header id="header" class="style_1">
                <!-- ======== META ======== -->
                <!-- ======== BODY ======== -->
                <div class="header_body light">
                    <div class="container">
                        <h1 class="logo_brand">
                                                        <a href="/"><img src="/images/logo.png,qv=202103181603.pagespeed.ce.HyKYJPZoQN.png" width="200px" alt="ProjectUp 專案管理生活思維"></a>
                        </h1>
                        <div style="margin-left:5px;" class="slogan">最多專案工作者聚集的華文管理網站</div>
                        <div class="h_right">
                            <div class="socialbar">
                                <a href="/rss" class="btn btn_white"> <i class="fa fa-rss"></i></a>
                                <a href="https://www.facebook.com/projectup" class="btn btn_white" target="_blank"> <i class="fa fa-facebook"></i></a>                                <a href="/images/static_qr_code_without_logo.jpg" class="btn btn_white wechat"><i class="fa fa-weixin"></i></a>
                                <a href="mailto:info@ftpm.com.tw" class="btn btn_white"> <i class="fa fa-envelope-o"></i></a>
                            </div>

                                                        <div class="search_block">
                                                                <div class="input-group">
                                                                        <form action="/index/query" meyhod="GET" id="query_form">
                                                                                <input type="search" name="query" value="" placeholder="輸入關鍵字..." id="query_input">
                                                                                <div class="input-group-btn">
                                                                                        <!-- multi select btn-->
                                                                                        <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                                                                                                <span class="caret"></span>
                                                                                        </button><!-- search btn--><button type="submit" class="btn">
                                                                                                <i class="fa fa-search"></i>
                                                                                        </button>
                                                                                        <!-- dropdown checkbox-->
                                                                                                                                    <ul role="menu" class="dropdown-menu">
                                                                                                <li>
                                                                                                        <a href="javascript: void(0);">
                                                                                                                <input type="checkbox" name="title" value="1" checked class="dropdown_checkbok">
                                                                                                                <span class="lbl"> 包含標題</span>
                                                                                                        </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <a href="javascript: void(0);">
                                                                                                                <input type="checkbox" name="contents" value="1" checked class="dropdown_checkbok">
                                                                                                                <span class="lbl"> 內文</span>
                                                                                                        </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <a href="javascript: void(0);">
                                                                                                                <input type="checkbox" name="tag" value="1" checked class="dropdown_checkbok">
                                                                                                                <span class="lbl"> 標籤</span>
                                                                                                        </a>
                                                                                                </li>
                                                                                        </ul>
                                                                                </div>
                                                                        </form>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                </div>
                <!-- ======== MENU ======== -->
                                <script type="text/javascript">$(document).ready(function(){function setupMenu($menu){$menu.each(function(){var mobileMenu=$(this).clone();var mobileMenuWrap=$("<div></div>").append(mobileMenu);mobileMenuWrap.attr("class","mobile_site_navigation");$(this).parent().append(mobileMenuWrap);mobileMenu.attr("class","menu_mobile");});}function setupMobileMenu(){$(".container").each(function(){var clickTopOpenMenu=$(this).find(".open_menu_mobile");clickTopOpenMenu.click(function(){$(this).parent().find(".mobile_site_navigation").toggle();});});}setupMenu($("nav.site_navigation ul.menu"));setupMenu($("nav.top_navigation ul.menu"));setupMobileMenu();});</script>

<div class="header_menu dark">
        <div class="container">
                <!-- ======== BUTTON FOR MOBILE MENU ======== -->
                <a class="open_menu_mobile"><i class="fa fa-bars"></i></a>
                <!-- ======== MENU ======== -->
                <nav class="site_navigation">
                        <ul class="menu">
                                <li class="">
                                        <a href="/">首頁</a>
                                </li>
                                                                <li class="menu-item-has-children has_cs_mega_menu current-menu-item">
                                    <a href="javascript:void(0);">專案管理</a>
                                                                                <ul class="cs_mega_menu">
                                                <li>
                                                        <!-- ======== WIDGET - CATEGORY ======== -->
                                                        <div class="widget widget_categories">
                                                                <ul>
                                                                                                                                                <li>
                                                                                <a href="/article/category/id/3">企業專案治理</a>
                                                                        </li>
                                                                                                                                                <li>
                                                                                <a href="/article/category/id/4">進階專案知識</a>
                                                                        </li>
                                                                                                                                                <li>
                                                                                <a href="/article/category/id/5">新手PM入門</a>
                                                                        </li>
                                                                                                                                                <li>
                                                                                <a href="/article/category/id/6">資訊系統PMIS</a>
                                                                        </li>
                                                                                                                                                <li>
                                                                                <a href="/article/category/id/7">管理小故事</a>
                                                                        </li>
                                                                                                                                        </ul>
                                                        </div>
                                                </li>
                                        </ul>
                                                                        </li>
                                <li class="">
                                        <a href="/author">作者介紹</a>
                                </li>
                                <li class="">
                                        <a href="/course">課程一覽</a>
                                </li>
                                <li>
                                        <a href="https://shop.darencademy.com" target="_blank">課程報名</a>
                                </li>
                                <!-- <li>
                                        <a href="#">大人商品</a>
                                </li> -->
                                <li class="">
                                    <a href="/about">關於我們</a>
                                </li>
                                <li>
                                    <a href="https://shop.darencademy.com/article" target="_blank">學員見證</a>
                                </li>
                                <li class="pull-right">
                                        <a href="javascript:void(0);" id="translate_btn"><i class="fa fa-globe"></i> 簡体</a>
                                </li>
                                <li class="pull-right">
                                <!--
                                                                                <a href="/login"><i class="fa fa-sign-in"></i> 登入/註冊會員</a>
                                                                        -->
                                </li>
                        </ul>
                </nav>
        </div>
        <!-- === border === -->
        <div class="header_border"></div>
</div>

                                <!-- ======== HELLO BAR ======== -->
                                <script type="text/javascript">$(document).ready(function(){$(document).on('scroll',function(){if($('.helloBar')[0].offsetTop<$(document).scrollTop()){$('.helloBar').css({position:"fixed",top:0,display:"block"});}if($(document).scrollTop()<$(".header_border")[0].offsetTop){$('.helloBar').css({position:"static",top:0,display:"none"});}});});</script>
<div class="helloBar">就算不善言辭者，也能提升協調能力的談判課&nbsp;<a href="https://shop.darencademy.com/product/view/id/13?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Bar" class="btn btn_red" target="_blank">即刻了解</a></div>
            </header>
                        <script type="text/javascript">$(document).ready(function(){$(".featured_carousel").owlCarousel({items:3,navigation:true,navigationText:["&#xf104;","&#xf105;"],pagination:false});$(".magnificPopupImage").magnificPopup({type:"image"});});</script>
<!-- ======== SECTION ======== -->
<section id="page_wrapper">
        <div class="container">
                <div class="row">
                        <ul class="breadcrumb">
        <li>
                <a href="/">首頁</a>
        </li>
                        <li>專案管理</li>
                <li><a href="/article/category/id/4">進階專案知識</a></li>
                <li>長賜號擱淺事件帶來的專案啟發</li>
                </ul>
                        <!-- ======== MAIN CONTENT ======== -->
                        <div class="col col_8_of_12 main_content">
                                <article class="single_post" itemscope itemtype="http://schema.org/Article">
                                        <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid=""/>
                                        <!-- ======== ARTICLE HEADER ======== -->
                                        <header class="post_header">
                                                <h1 itemprop="headline">長賜號擱淺事件帶來的專案啟發</h1>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="content_meta">
                                                                                                                                                                        <span class="category"><a href="/article/tag/id/29">溝通管理</a></span>
                                                                                                                                                                </div>
                                                                                                <div class="content_meta">
                                                        <span class="date">2021-04-01 13:25</span>                                                      <span class="author"><a href="/article/author/id/15">VictorHsu</a></span>
                                                        <!--<span class="comments">0 則回應</span>-->
                                                        <span class="views">2272</span>
                                                                                                                                                                        <span class="social">
                                                                <div class="line-it-button" data-lang="zh_Hant" data-type="share-a" data-ver="3" data-url="https://www.projectup.net/article/view/id/16725" data-color="default" data-size="small" data-count="true" style="display: none;"></div><script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                                                                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.projectup.net%2Farticle%2Fview%2Fid%2F16725&amp;layout=button_count&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px; float: right; margin: 3px 0 0 6px;" allowtransparency="true"></iframe>
                                                        </span>
                                                                                                        </div>
                                        </header>
                                        <!-- ======== ARTICLE FEATURED ======== -->
                                                                                <div class="post_featured" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                                                                                <img src="/images/backend/article/x02837a6a3e9fc4a5b79fd3251e0d7470.jpg.pagespeed.ic.SFI8RPsMI6.webp" alt="長賜號擱淺事件帶來的專案啟發">
                                                <meta itemprop="url" content="https://www.projectup.net/images/backend/article/02837a6a3e9fc4a5b79fd3251e0d7470.jpg">
                                                <meta itemprop="width" content="1020">
                                                <meta itemprop="height" content="612">
                                        </div>
                                                                                <!-- ======== ARTICLE CONTENT ======== -->
                                        <div class="post_content" itemprop="description">
                                                                        <p>台灣時間2021年3月23日至29日間，長榮海運公司的長賜號貨輪在埃及蘇伊士運河擱淺(註1)，不僅造成該運河每日龐大的轉運作業停擺，連帶影響全球相關產業的供貨，對全球經濟(特別是油價)帶來不小的波動。</p>

<p>當地政府為了盡速疏通運河，派出挖土機試圖清除貨輪前端淤泥，但挖土機和長賜號不成比例的差異，很快就被網友笑稱是「工程師資源和業務承諾」的寫照，後來各種詼諧甚至惡搞的圖文紛紛出爐。除了讚嘆網友的創意之外，也讓人意識到，原來大家對職場上這種不對等的落差有如此深切的感慨。</p>

<p>雖然每家企業的行事風格不同，企業和老闆們是否過度畫大餅也並非我們可以掌控的，但本篇文章將從範疇、品質這兩個管理面向來檢視，看看長賜號事件可以為我們在專案管理的學習上帶來什麼樣的啟發。</p>

<p>「確認範疇」是專案一開始相當重要的任務，<span style="color:#B22222">很多工程師與PM、業務之間的認知差異，甚至是委託者和承包商之間的誤會，就來自於範疇的界定不清楚，導致雙方各說各話。</span>要描述一個專案的範疇，首先必須定義邊界，以長賜號擱淺的案件來看，任務可以簡單區分為「清除淤泥」、「減輕重量」、「拖曳船隻」三個大方向，但淤泥要清除的邊界到哪裡? 是船頭陷入泥砂的區塊? 還是延伸到船頭周圍幾碼的範圍? 這是委託方交辦任務時必須要清楚告知的，而承包商為了自己的權益，也應該主動了解全貌，因為其他作業的成敗，可能也會影響淤泥清除範疇的界定，當長賜號順利迴正後，是不是還有場復的作業要進行? 例如泥沙的回填、運河周邊的補強等等。&nbsp;</p>

<p>角色不同對範疇的解讀自然有所差異，對蘇伊士運河當局而言，任務目標是盡快排除長賜號擱淺事件，並讓運河恢復正常營運，因此只要運河一天無法消化轉運量，這個專案就一天不會結束。而對清除淤泥的承包商來說，則是專注在處理「造成長賜號卡住無法移動的泥沙」，如果事前雙方沒有明確界定範疇，那麼清除過程中造成的其他影響(例如淤泥的處理、前述的場復作業等)，很可能就會變成事後爭議的問題點。</p>

<p>委託方與承包商可以透過合約來約束，但公司內部協作就無法如此白紙黑字規範(雖然大公司內多少還是有龜毛的協作單位)，因此會議紀錄、Email等形式往往就成為跨部門之間留存證據的方法，<span style="color:#B22222">PM若希望減少跨部門工作的推託，該花時間填寫的紀錄或該發送的郵件就盡量不要缺漏。</span></p>

<p>與範疇息息相關的另一項任務，是完成後的驗收準則，在軟體開發的領域裡，從初期定義範疇的use case diagram、執行階段的flow chart，一直到驗收使用的test case(註2)，基本上是有一定的脈絡依循，多少的spec就會衍生多少的test case，多一個或少一個都是工程師及品管人員會追究到底的。這個目的在於精確檢驗開發的項目是否完全依據產品規格來製作，不但有憑有據，藉由spec及test case的數量還可以來估算所需的作業時間。</p>

<p>但在軟體開發之外，或者無法具體量化的工作項目，該如何定義驗收準則呢? <span style="color:#B22222">通常還是要盡量找出可以比較的基準，例如清除的淤泥範圍，至少須包含長賜號可垂直升起的上下空間 ; 船隻拖曳的距離，至少要使長賜號遠離港口幾公里以上。</span>基本上而言，以「達成什麼目標」當作準則會比完成多少量更加貼近專案需求，畢竟「清除50噸淤泥是否能夠使貨輪浮動」是無法被確認的。除此之外，還必須排除其他因素的影響，例如「垂直升起的上下空間」便是不考慮船隻拖曳的情況，避免將不同的工作權責與成效混為一談。</p>

<p>當然，實務上來說，像長賜號這一類重大的突發事件，不一定適合用這種在商言商、斤斤計較的方式來界定範疇，因此在執行期間，勢必經過不少協商、妥協、互助等過程，這也是不同專案必然會出現的差異，如果一昧使用同一套制式論點來執行專案，反而會衍生更多問題，因此PM必須學習依據不同屬性的專案，將專案管理的精神妥善發揮。</p>

<hr/>
<p>註1 : 長賜號擱淺事件共歷經151小時，出動共約5台怪手挖沙清淤、至少12艘拖船搶救，估計滯留貨物金額達120億美元，改道的船隻航程至少增加3500英里、運河營運收入每天減少約1400萬-1500萬美元。</p>

<p>註2 : test case是軟體工程中用來進行測試驗證的基準，通常是根據規格內容，以功能項目逐條列舉操作情境及預期的結果，測試者根據它來檢查專案產出是否正確。</p>
                        <span style="font-size:9px;">本站所有文章未經事先書面授權，請勿任意利用、引用、轉載。</span>
                                        </div>
                                        <!-- ======== ARTICLE photos ======== -->
                                                                                <!-- ======== ARTICLE FOOTER ======== -->
                                        <footer class="post_footer">
                                                                                                <!-- ======== SHARING ======== -->
                                                <div class="post_sharing" data-pg-collapsed>
                                                        <!-- BEGIN: ValAddThis Plugin -->
                                                        <script type="text/javascript">var addthis_share={url:"https://www.projectup.net/article/view/id/16725",title:"長賜號擱淺事件帶來的專案啟發"}</script>
<style>.addthis_button_google_plusone{overflow:hidden;width:75px!important}</style>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-503a4f4e6d3bccc8" async="async"></script>
<div class="shareDesc">覺得這篇文章好嗎？ 請分享給您的朋友</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                <div class="fb-like" data-href="https://www.projectup.net/article/view/id/16725" data-layout="button_count" data-share="true"></div>
        <a class="addthis_button_tweet" addthis:url="https://www.projectup.net/article/view/id/16725" addthis:title="長賜號擱淺事件帶來的專案啟發"></a>
        <a class="addthis_button_google_plusone" addthis:url="https://www.projectup.net/article/view/id/16725" addthis:title="長賜號擱淺事件帶來的專案啟發"></a>
                        <a class="addthis_button_linkedin"></a>
        <a class="addthis_button_pocket"></a>
        <a class="addthis_button_sinaweibo"></a>
        <a class="addthis_button_baidu"></a>
        <a class="addthis_button_plurk"></a>
        <a class="addthis_button_pinterest_share"></a>
        <a class="addthis_button_compact"></a>
</div>
                                                        <!-- END: ValAddThis Plugin -->
                                                </div>
                                                <!-- ======== RELATED ACT ======== -->
                                                <script type="text/javascript">$(document).ready(function(){$(".rep_carousel.rep_carousel_articles").owlCarousel({items:3,navigation:true,navigationText:["&#xf104;","&#xf105;"],pagination:false});});</script>

<div class="related_articles">
        <div class="block_title">
                <div class="fake-h2">相關活動</div>
        </div>
        <!-- 暫時停用 owlCarousel<div class="rep_carousel owl-carousel light rep_carousel_articles">-->
        <div class="light rep_carousel_articles">
                                <div class="item">
                        <div class="item_header">
                                <a href="https://shop.darencademy.com/product/view/id/1?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">
                                        <img src="/images/backend/course/x33a81e05135cdfe9971f26cb3e6e0cd9.jpg.pagespeed.ic.zb6NnyAl4C.webp" alt="101 專案管理一日特訓班 (7PDU)">
                                </a>
                        </div>
                        <h4><a href="https://shop.darencademy.com/product/view/id/1?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">101 專案管理一日特訓班 (7PDU)</a></h4>
                </div>
                                <div class="item">
                        <div class="item_header">
                                <a href="https://shop.darencademy.com/product/view/id/2?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">
                                        <img src="/images/backend/course/84ad00525eded8ffe1f75f754c143e22.jpg.pagespeed.ce.20UP1r6JJS.jpg" alt="102 流程設計與跨部門溝通 (7PDU)">
                                </a>
                        </div>
                        <h4><a href="https://shop.darencademy.com/product/view/id/2?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">102 流程設計與跨部門溝通 (7PDU)</a></h4>
                </div>
                                <div class="item">
                        <div class="item_header">
                                <a href="https://shop.darencademy.com/product/view/id/78?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">
                                        <img src="/images/backend/course/x561e587d29061790e6892a28671a0929.jpg.pagespeed.ic.uunwEHYu3l.webp" alt="201a搞定利害關係人所需的職場政治力 (7PDU)">
                                </a>
                        </div>
                        <h4><a href="https://shop.darencademy.com/product/view/id/78?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Article_Bottom">201a搞定利害關係人所需的職場政治力 (7PDU)</a></h4>
                </div>
                        </div>
</div>
                                                <!-- ======== LIKE OUR PAGE ======== -->
                                                <div class="post_sharing2">
                                                        <div class="shareDesc">歡迎「讚」一下我們的粉絲專頁，接收最新文章!</div>
                                                        <div id="fb-root"></div>
                                                        <div class="fb-like" data-href="https://www.facebook.com/projectup/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                                                </div>
                                                <!-- ======== RELATED Article ======== -->
                                                                                                <!-- ======== AUTHOR BOX ======== -->
                                                <div class="author_box" data-pg-collapsed>
                                                        <img src="/images/backend/author/x36c79a418fd2f263343881fc59ca43a7.png.pagespeed.ic.oKU3F4a112.webp" class="avatar" alt="VictorHsu">
                                                        <div class="info">
                                                                <div class="author_name" itemprop="author">
                                                                        <a href="/article/author/id/15">VictorHsu</a>
                                                                        <meta itemprop="name" content="VictorHsu">
                                                                </div>
                                                                <div class="author_url">
                                                                        <a href="http://victorhsu0202.pixnet.net/blog" target="_blank">http://victorhsu0202.pixnet.net/blog</a>
                                                                </div>
                                                                <div class="author_info">
                                                                        <p>曾經主修科學，也當過工程師寫過程式，其實最大的興趣卻是是寫文章說故事，目前在網際網路產業擔任PM工作。
自認只是職場上的小人物，但深知專案管理的知識應用廣泛，2011年取得PMP證照後，開啟對專案管理的學習之路，於是結合自身的經驗，以及大眾最熟悉的電影劇情，讓生活、理論與虛構的情節在專案管理的世界裡產生交集，期許能引領更多同好認識專案管理。</p>
                                                                </div>
                                                                <div class="author_social">
                                                                                                                                                                                                                        <iframe src="//www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Faboutproject%2F&amp;width=100&amp;height=20&amp;colorscheme=light&amp;layout=button_count&amp;show_faces=false" mce_src="http://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Faboutproject%2F&amp;width=100&amp;height=20&amp;colorscheme=light&amp;layout=button_count&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px; float: right; margin: 3px 0 0 6px;" allowtransparency="true"></iframe>
                                                                                                                                                                                                                                                                                        </div>
                                                        </div>
                                                </div>
                                        </footer>
                                        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none">
                                                <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                                        <img src="data:image/webp;base64,UklGRvADAABXRUJQVlA4TOQDAAAvV8IdEG9AIEARZvi/sxsE2TbbOe+vMbIBijD6/97mPwBAk0lk+m+bGCEwYoToCrQjwG0rOIsOsC3oPDp/xwJiHR7NmM6xKBcQC3FLTwAhEpDo+4ro/wQwFMsyhpSlQq4VPoavWqYXcK3IUqEsFa4VWSp8d0WWCteKrAqYulQAF9cH5lKeSzrK8/uhHnlhr1xCb5Dy3OKFPXSKg1cG7Nt5z76dWpt/GFz1GkZ/Jkq3VPE6hg5AiWFvHsreQrZtLMZRItifBrulku24DkNQ+jRAkmBgKVsS7GOkpKARUsp2nY7BHg1hCgyt5RhILpEOxkoCGiOlbEnQp0FMgMG1HFdhBmald2BLQjwaJtMxWmo5cmCQQD1MBR7eHsFpFJ141TTUIXit4Winnm0iQB0SgXO1ZBCEe3BuSQGt5QANUEsMZEEbpnqcaiB0rrfWMRUsBsBWg0mIBYMltCS0j6Y4kINaKOqtsc2FOERINlpKS0J7NERToCkeGFLLkYP0yOPYy4DBFODW26HXoYcmstFLWEO7Y/KA1JCJGIMbg7HkuWyXcDRNDzHyf4w6ZCoYfDi8Cxql90LHo4ms5M4ovQjT8uCvTHl7Autip1yHp3T0BF/AseQhYTJ9APtIEqdLhaYkxxuwmW0EhGmPZtB7yySO1aCufSREKZ3okOexDSRdkfJ0NvsYAE9v/2AkGQEPJbJdJhhAHtNxmWAErAL4w+Q5tWvQG4bHdMQJIqPwnFoArgzCczruB2JvwpsfV0rzTiQRfCLvtVkEpxF4MEebTc9YiZTVuu+NVnW08BlgyEBYInzXQs/4/4iSvF/iUEMKISljtbJQBwz28JbxMjXkxmwV6J07nhryOGoQCwbTUUN8erMwCk2sAT6Fr6uSbGDQx3NJ5EhO+zREb9Bei/QxRFKQBPazzfd+UQhhChqhs3wZsp+15GAwQLKihyZG243DtVVHh1oIkWFgSR6bZ69C+9QSi8nQUkOGa9bh2KqRABpqSQeHU0sMTvOvtVm7cVTGE+VokV2UE9oYrjk2YzP/TA8GLXgoAL2YDA5SQO8EnzjevOxvrKMg9XRKJn6ZYHd0tzokP43CBC3sKED7EIbpkMh+JzRIejQNyeS7AmDQgSAkoDGY4o+g/1pNGiIZIETmaHvMT6WIAyHo5hQagUlaxKe/txI0QgMQh6EQINO0gK2VBe2SPp0EfZin9bVi6IJ2CEzlmXIW9GCmHz7oaFUgBnAJPKRA6R0O6hFM1druOdpwSFcteF86xTGwheH7Wmv7SZsxn9gc5g2ZuCi8qyJLBStFlgpWiiwVrBSsDsAhWCAAlKSg4JtWdi4="/>
                                                        <meta itemprop="url" content="https://www.projectup.net/img/logo.png?v=202103181603">
                                                        <meta itemprop="width" content="188">
                                                        <meta itemprop="height" content="72">
                                                </div>
                                                <meta itemprop="name" content="大人學">
                                        </div>
                                        <meta itemprop="datePublished" content="2021-04-01T05:25:04+0800"/>
                                        <meta itemprop="dateModified" content="2021-04-01T06:24:10+0800"/>
                                </article>
                        </div>
                        <!-- ======== SIDEBAR ======== -->
                        <div class="col col_4_of_12 sidebar">
                                <div class="widget widget_banner_300x250" data-pg-collapsed>
        <div class="widget_title">
                <h4>關於專案管理生活思維</h4>
        </div>
        <div class="intro">
                <div class="intro">
<p>這裡是由兩位企業管理顧問：張國洋(Joe)與姚詩豪(Bryan)共同創立。2015年他們將經營多年的管理部落格：<a href="http://www.projectup.net" target="_blank">專案管理生活思維</a>當中，與職場兩性相關的文章獨立出來，成立<a href="http://www.darencademy.com" target="_blank">大人學網站</a>。基於工程師與顧問的背景，兩位創辦人著重透過羅輯思考來分析、解決人生各類問題，近年也陸續邀集理念相同的作者與講師加入。</p>

<p>「相信思考，勇於改變」是大人學的核心理念，各類講座課程在內容設計上均以「切身實用」為目標，並為學習者歸納出立即可用的「系統化做法」。除了台灣，也有來自中國大陸、香港、新加坡、澳門、馬來西亞、美國等地的朋友專程來參加活動，每年參與課程超過4,000人次。</p>

<p>大人學的營運實體為識博管理顧問公司（統一編號：28552691），想瞭解更多資訊，歡迎利用<a href="mailto:info@ftpm.com.tw">客服信箱</a>或致電+886 227112720與我們聯絡！</p>
</div>
        </div>
</div>

                                                                <!-- ======== WIDGET - FB ======== -->
                                <div class="widget widget_banner_300x250" data-pg-collapsed>
                                        <div class="widget_title">
                                                <h4>FB粉絲團</h4>
                                        </div>
                                        <div class="intro">
                                                <div class="fb-page" data-href="https://www.facebook.com/projectup" data-width="440" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/projectup"><a href="https://www.facebook.com/projectup">專案管理的生活思維</a></blockquote></div></div>
                                        </div>
                                </div>
                                                                <div class="widget widget_banner_300x250" data-pg-collapsed>
    <div class="widget_title">
        <h4>下載APP</h4>
    </div>
    <div class="app_block">
        <a href="https://apps.apple.com/tw/app/%E5%A4%A7%E4%BA%BA%E5%AD%B8/id1499792474" target="_blank"><img alt="" src="/images/xDownload_on_the_App_Store_Badge_US-UK_blk_092917,402x.png.pagespeed.ic.UJiz5YNkWc.webp"></a>&nbsp;<a href="https://play.google.com/store/apps/details?id=com.darencademy.app" target="_blank"><img alt="" src="/images/xgoogle-play-badge,402x.png.pagespeed.ic.9tHiAZ-rm1.webp"></a>
    </div>
</div>
                                <div class="widget widget_latest_posts">
        <div class="widget_title">
                <h4>本分類熱門文章</h4>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/15726">
                                                                <img src="/images/backend/article/xacdcbf478355c6e2bfe19fd939473916.jpg.pagespeed.ic.D4sOxJVnYV.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/15726">你真的搞懂了什麼叫敏捷式 ( Agile ) 開發嗎?</a></h4>
                        </div>
                        <div class="content_meta">
                                                                <!--<span class="comments"><a href="/article/view/id/15726">5 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16470">
                                                                <img src="/images/backend/article/xbf4a878e1839d19b4175d540358e296f.jpg.pagespeed.ic.8wCkrc04WL.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16470">為何大家從擁抱PMP到排斥PMP？</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/38">PMP</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/46">學習專案管理</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/16470">5 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/11520">
                                                                                                                                <img src="/blog/images/stories/x20121101-02_thumb.jpg.pagespeed.ic.my5Os2CQto.webp"/>
                                                                                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/11520">YA~考上PMP了！那…然後咧？</a></h4>
                        </div>
                        <div class="content_meta">
                                                                <!--<span class="comments"><a href="/article/view/id/11520">10 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/13823">
                                                                <img src="/images/backend/article/xa960f38dd2ebf62be386d78f447e3bd6.jpg.pagespeed.ic.sP31iuLiDx.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/13823">專案經理該在45歲前思索的4個職涯方向</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/18">職場策略</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/13823">2 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/2709">
                                                                                                                                <img src="/blog/images/stories/admin/xpmbok.jpg.pagespeed.ic.6nQ29nqg7P.webp"/>
                                                                                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/2709">PMBOK導讀系列 – 品保(QA)與品管(QC)</a></h4>
                        </div>
                        <div class="content_meta">
                                                                <!--<span class="comments"><a href="/article/view/id/2709">2 回應</a></span>-->
                        </div>
                </div>
        </div>
        </div>
                                <div class="widget widget_latest_posts">
        <div class="widget_title">
                <h4>本分類最新文章</h4>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16725">
                                                                <img src="/images/backend/article/x02837a6a3e9fc4a5b79fd3251e0d7470.jpg.pagespeed.ic.SFI8RPsMI6.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16725">長賜號擱淺事件帶來的專案啟發</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/29">溝通管理</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/16725">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16720">
                                                                <img src="/images/backend/article/x547761c2cd3e118b519b63fb2b36c710.jpg.pagespeed.ic.lAjnMB2bZH.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16720">敏捷團隊中有人總是不合群、難合作，怎麼處理才好？</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/30">利害關係人</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/48">組織行為</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/16720">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16717">
                                                                <img src="/images/backend/article/x3ceccc560d0b39657554b0f163ac006b.jpg.pagespeed.ic.6iifbEmGnQ.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16717">《FBI談判協商術》最有效果的10個談判策略</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/6">讀書心得</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/18">職場策略</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/26">溝通知識</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/16717">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16715">
                                                                <img src="/images/backend/article/xecfbea7e442e53e7368d7af828f945c0.jpg.pagespeed.ic.7udAopivV8.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16715">從「鬼滅之刃」鬼殺隊的運作談專案中的Role & Responsibility</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/29">溝通管理</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/30">利害關係人</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/48">組織行為</a></span>
                                                                                                <!--<span class="comments"><a href="/article/view/id/16715">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16714">
                                                                <img src="/images/backend/article/x583d8dcf467469d3ee9b0100c253ccd4.jpg.pagespeed.ic.DVzRuHwbrO.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16714">小專案也該用專案管理系統嗎？如何選擇系統？3個關於「專案管理系統」的常見問題</a></h4>
                        </div>
                        <div class="content_meta">
                                                                <!--<span class="comments"><a href="/article/view/id/16714">0 回應</a></span>-->
                        </div>
                </div>
        </div>
        </div>
                                <!-- ======== WIDGET - LATEST POSTS ======== -->
<div class="widget widget_latest_posts">
        <div class="widget_title">
                <h4>隨選文章</h4>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/6786">
                                                                                                                                <img src="/blog/images/stories/x12501_thumb.jpg.pagespeed.ic.v28ik0zI0q.webp"/>
                                                                                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/6786">如何最低成本的取得PDU與考PMP</a></h4>
                        </div>
                        <div class="content_meta">
                                                <!--<span class="comments"><a href="/article/view/id/6786">23 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/10410">
                                                                                                                                <img src="/blog/images/stories/xccpm1601_thumb.jpg.pagespeed.ic.2DJ032eG9r.webp"/>
                                                                                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/10410">關鍵鏈實務案例─HP Digital Camera Group (上)</a></h4>
                        </div>
                        <div class="content_meta">
                                                <!--<span class="comments"><a href="/article/view/id/10410">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/16563">
                                                                <img src="/images/backend/article/x62b214b4fbf02a70e01fc5c290133c96.jpg.pagespeed.ic.rO0f8O4qp_.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/16563">我如何引用敏捷思維在人生中實作</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/55">敏捷</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/21">如何選擇</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/18">職場策略</a></span>
                                                                                <!--<span class="comments"><a href="/article/view/id/16563">0 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/265">
                                                                <img src="/images/backend/article/x68f9d23bc1fc4d2e676694eee0acc72a.jpg.pagespeed.ic.RNOF_bUg4z.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/265">3-4, 下去就浮不起來了</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/34">成本管理</a></span>
                                                                                <!--<span class="comments"><a href="/article/view/id/265">7 回應</a></span>-->
                        </div>
                </div>
        </div>
                                        <div class="item">
                <div class="item_header">
                        <a href="/article/view/id/127">
                                                                <img src="/images/backend/article/xd7ee0362fb1855875faa799729476a6f.jpg.pagespeed.ic.b9tXmfkwFP.webp"/>
                                                        </a>
                </div>
                <div class="item_wrapper">
                        <div class="item_content">
                                <h4><a href="/article/view/id/127">超激婚禮規劃實錄 - 勝犬必讀！</a></h4>
                        </div>
                        <div class="content_meta">
                                                                                                <span class="category"><a href="/article/tag/id/46">學習專案管理</a></span>
                                                                                                                                <span class="category"><a href="/article/tag/id/30">利害關係人</a></span>
                                                                                <!--<span class="comments"><a href="/article/view/id/127">0 回應</a></span>-->
                        </div>
                </div>
        </div>
        </div>
                                                                <div class="widget widget_banner_125x125">
        <div class="widget_title">
                <h4>推薦購買</h4>
        </div>
        <div class="banners">
                                                <div class="row">
                                        <div class="banner">
                                <a href="https://www.books.com.tw/products/0010641668?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Bar" target="_blank">
                                        <img src="/images/backend/banner/x48277feb29efc266fc1578300fd4390f.jpg.pagespeed.ic.KyMFKt0XTk.webp"/><h5>三年後你的工作還在嗎</h5>
                                </a>
                        </div>
                                                                        <div class="banner">
                                <a href="https://www.books.com.tw/products/0010743247?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Banner" target="_blank">
                                        <img src="data:image/webp;base64,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"/><h5>沒了名片你還剩下甚麼</h5>
                                </a>
                        </div>
                                </div>
                                                                <div class="row">
                                        <div class="banner">
                                <a href="http://www.books.com.tw/products/0010729881?utm_source=P_Blog&utm_medium=Blog&utm_campaign=Banner" target="_blank">
                                        <img src="data:image/webp;base64,UklGRpALAABXRUJQVlA4IIQLAADQLwCdASpaAH0APm0skUWkIqGWrGb8QAbEoA0bTpVAi9ugHtnmA6AG8t/sBwNuREdJesP4U+Kr1N+vfuJ63eRfqL1F/ln2q/S/l97J99/wW1CPX/+f3ncAX5r/Tf9b4RH+N6EfVT/ce4B+nv+W9Xf9t4rv13/I+wH/N/6//v/8h+TPySf8n3Qe3f6a/73+l+An+Yf2T/lf3v2zPY3+0HsZ/rMmqrHQwZT0hxJitNvcKdYmkzQQUjBatFhKxwAA8AYSb345BuTB8He304vrCON9znDO8+EMDr8u336CUm5+qnTU5V9pU2p0tuJJnYuGVNT/Yk/r+uSjpUBulk088hde+xEqGlbeNZuK1qZ5k2WLljQAvpeMF+wqLZ4kMUvMX8vEnUEN7nPzOjx7OPfisnElwYoiY+v6rsrLsqVTTovSgPFyxbMMk3bZ7qAaAqa+oBYJPrGVNcsBfhXYQD5e1J2sg47FFOjYVIDLucWP4tpG2arSOpeuhv+fxhzV6wPooRywm17dezgAAP79SiFLwEeC12uiil8OBwAdNSTHpV30mgf8pIqvZ3qfFp8osdOxhyoG7/GKd9i2eROy2h6JVAlYCBD7Ae8sid+gFvD3b0ybJwiOZDBYKgKmDGCbSi85CNKspSNn3FLatKUf2Cw6f4BDS0dmP015XrD0m/tp52AoV5e3VrB6Arlx58GwGiPMIP8X03TqGyudA371530LXcwX7PFn7TRmdXnvLnjVW2jPnbqqmQxltsPNlRtKYTqAklNfWrgINRYPi9Ql/Ndv1MbZqIQamudcnxgHZUAmdcRkl3XHYFK5eJTW43GDDYTOg/iDp83Cc+wkcKfInC1zYqwHMiXpe3W5tQL5tSLzlUdh5elKmHlVVw+Qhx9Ygb3smpHq4a3SG9MS1MwHxYkzAlgV7JYqzyttMpV2WhmR3+01nBmADhYeBTspdhHbq0M6DYOKu5QeI5DOw33yL/0T5MueZD2fm7PK6HaSE1mj6SMg/zZzS5S2q6GtWQULLdq455T0SEbS7KVquDEbTwPLtVdaOWFIz/1dBDFmXrkQF9U1sf3GvgEVQsB3W/FHA7UIVkDZ523ncu5Y+8A+CnTjWFU8U5A1DqTueGjXlu0EfYVWaQLAo9mdhvRwBAfyFQRAAMPDvTmbJGWNdmivTlc/JEQkiB02Ywtr4TuxCOp95JEKSOsXaVWpwfEpAi3OxNHi3+z3Yel1JDntBQTEwpIdzAhmptP/6mYwktPTyXE/LWv/5iiJcvEKH8b5BtVbkX+NArmFboEvwBB+eUOB4qSmDEBWNXFnitIAhYm1QoCOt6iagyjB9jKM7yKt+MZVnUfVu1fiR/kQf68a/Lk8SW/vfGXp9ugiXbqvbU9L8wQ32ZDmnyauZaMuYUurnNccY7V6K3GFOb2JHOuXsllz7HfQRqTRjhSzqj4/M2WBVx4mz2GCzmh/H5uU1cJuQ9T6k9OgmLRxRJC5zJuMmo1OKTfh/d38rgnWlI1QoV/w3ti66QxIFuT6QyxWkrOvBkx4xpLdgxkhivbZTL59OcU9Hu8NA8CULDtIdvxG3c4m+SsdhIlxXAIqH/Ne9+DHdX167vi2IK217dZ42/YGoVK4GvR1IIJMb+/p8VV2Pf3QrplvhqbnT1MUOlCIG5j2TD+YPm7UyvjErwl0l9VtMOIr8E9PgsjYgXERVD3y3HfzMMW775V0ULhwbTGDPZFcNk+8SdB1oX5C2t/fMex8s58ueUNiupMtX9dX3vHkJbvtUj4sAsGnQ+XJcmZQI8OAS/fhkAs0UABDRSQSOsp5b28Nbz4O4apzHhIJkpmZPHF3CapyVhWSITG7gXqTRmPmiAM9rhdSs3/0rJCbJp5wOuqzjHlyzXLrxb9mBkhR5rE5uk5mCcFdowLejNTdscSoH2ppbJ2J2bGCPlVWUcfk6nrqLaZbL64wxlnH+i7Co1QPxOoHkGUyvHQg7rN+65A2Wqt5c1LowP3i5iqNEMojs/3+aiUG6P5CV3jIflZWpQrrBkEazuuvR/mNy7LDQGHUCQSpssWjBf3bIr7CtJxAgKoWcNNce+r+XZh3OLPx0gSq710awAjqi041T/utVjoSNWcItGYOaL858Ru4ZBj7YCkQQ+v0V0s08p+NFKFU0g5ngXg1klGyPff71n+0Z8DZ5W9252FSOqNJ1rJnc7oRZtMiLxb9RdYYdUVowvGKEXhNebuDQI10bkH2PnEiOPzV71/wyT5a636ECU8FsPNcaWwrSUto16fpe8E+QWkcHnqtNKBLmwVIyiC3jdP7nrQWoQpVdpmMosv4qnPUv6x7eu3wu/C7R2/0PfJDT+xpTTagXfVOOf5PhnnhMgclAlshIMqAeG4Q4VfVeOD+CUOod039Q7AQLv2re4/MfTwP6W4c+2Sxb9rmV1KfmhJ1cc4sELJEFrr3wRjtz1UCHWpPnP+glF87Cl6mI6nSuRj62IHb7woYs7QLqV9dFRaa3avh9DgwperZ9+IYBM/sZU7Kp99tci8CCbCGz+811LwTdUXBDXS2gxA7e5DKyFR43HwWOk6tn6pRVE3hKs99CjYURjmnuau7cUfP9vdo8G8XAgZq2J3v2WsE1ATDz4Cjv5bmoVcdaK1O7V3RfD+yM/5NQCNk8n4wRnHFNonlA2NknLCq6+C2dSTnjUgjTGzYt4DAg4COTe2JTJARB0LRw8xhrItqugRUrR3Lw4P/BQtm6UKPPlRbwqbVZUP39VKwmyN2wVhwuHU8yaLoJPC9SjQYvXW0TO0oWtrqyRFxvQ9lbhETab03PsTLLP8f8/bh9gHEFFSLbfGd/kvXlQXW0TGd67vzkDJJFnQR5aXy2ndJtpga59+i1GalioHHlEs0E57EbZxEgoJNRmuEdy9KjotwAFfUgiVcAGHqqmGHpfeHfBky5EaPmyKPLAI+Nu9QN5h9fY1YyBnF0S9TSov57JcJ5fGnhc+fB/hFDji3uUMtiV/g6dFrdwaNcs/x9DIjeupOZ2vA9dqnNL7bX/lpmVenngTEpE+5DYMFZknZZfhMfhNhG+7Tt19Aj7n/kcTR1C6d16kfPUfr/A8f2GBthl2wl8T3h0MGOeS0s7qGWdk3aigfao/VnG4eMZwP537U7mH71Zqc9rP6giKeQWrwsVtnDgQfmRWk8PPTrD0CsWDGmd+eIuDKWtz3uMMqq1Bcg/o86IGdBkzN8hbeRw7H289WauN/iPtXJzH0zJnwfVDqrQQGDqydH/sL82244zF5BaJTUGJT2WD1FI9YMHZyR9ZSfA3JjU/L6qYVAcR7ZopO9yLxP87kTPDZ3ZxEuCVQSejE107c50o+IQ2cZ8XIQmh4nd2VmRd0aHsd/Eju6NJxP4GUhF0TyqLg3nQ/+3hx32ksh6RvpE0O/tV7gwQiQkS+9ejZEnZwPy3dt9kR4nzNOYVVO+GdbKfN2DAyWdnOFn2c34sppavxkBjgRRApm00JpPH4+LnWUJ8AgdDMgHsqYgASwKsP+f4YXsvN9oTWJqhs3vOVVFl4G/nGT15YqsUZ3X3orZu2sr/4Q2UFbLSTOT/QLI9JPBjX+jsa6U+6ZmjvOkQIWyloNs+pdKtgFN7EvqmHIpAsBL2oJhXI7bq1fHkBMKNdYnRK5JU79RXG4+63WhG36WF8I/qpGOQ7tLJid0CzJQnm0suHlNeeHkOQ6LZxO0MeOXOcujsbBBegvT0QOk0umXw1tnzqJSzTfKpNzncCVWSYht2Udoi0AULrmqQ2B7PHX/VqwE+Vzf3m86i2DIJpOCd//NFQbWUMTiJwG/SHJPovHv1cynq56mxmqQc+d7enp5hT1zOyQ2UqT+RzCdh2Xy4/Y/Yfdqw78iOO9NamAiafbGBB/A/eu6GDtcKwD8shbX38Ya9GTLcnKr14tDFXLcRzWg9FVB892WnUz3ypnSH335qf9AAAAA=="/><h5>大人學選擇</h5>
                                </a>
                        </div>
                                                                </div>
                        </div>
</div>
                                                <div class="widget">
                    若有轉貼需求，請來信討論。 轉貼時禁止修改內容及標題、須保持所有連結、禁止商業使用，並且必須註明原文標題、連結、及作者訊息。
                </div>

                        </div>
                </div>
        </div>
</section>
<br/>
            <!-- ======== FOOTER ======== -->
            <!-- ======== COPYRIGHT ======== -->
            <div id="copyright">
                <div class="container">
                    <p><a href="/">首頁</a> | <a href="http://www.darencademy.com" target="_blank">大人學</a> | <a href="/about">關於我們</a> | <a href="/privacyPolicy">隱私權政策</a> | <a href="/termsOfService">服務條款</a></p>
                    <p>識博管理顧問公司&nbsp;&nbsp;台北市大安區仁愛路四段107號9樓&nbsp;&nbsp;02-2711-2720&nbsp;&nbsp;<a href="mailto:info@ftpm.com.tw">info@ftpm.com.tw</a></p>
                    <p>專案管理的生活思維 © 2007 All Rights Reserved.</p>
                </div>
            </div>
        </div>

                <script type="text/javascript">var defaultEncoding=1;var translateDelay=0;var cookieDomain='https://www.projectup.net';var msgToTraditionalChinese='繁體';var msgToSimplifiedChinese='简体';var translateButtonId='translate_btn';</script>
                <script src="/js/tw_cn.js,qv==202103181603+dropdown.js,qv==202103181603.pagespeed.jc.hKCb-7ccu2.js"></script><script>eval(mod_pagespeed_0NMGV84rEi);</script>
                <script>eval(mod_pagespeed_E6seIcnp25);</script>
                <script type="text/javascript">if(location.protocol!='https:'){location.href='https:'+window.location.href.substring(window.location.protocol.length);}if(location.host=='www-image-cdn.projectup.net'){window.location=location.protocol+'//www.projectup.net'+location.pathname+location.search+location.hash;}$(document).ready(function(){translateInitilization();$(".wechat").magnificPopup({type:"image"});$(".dropdown-toggle").dropdown();$("#query_form").submit(function(e){if($("#query_input").val()==''||$("#query_input").val()==$("#query_input").attr('placeholder')){alert('請輸入關鍵字！');e.preventDefault();e.stopPropagation();return false;}if($(".dropdown_checkbok:checked").length==0){alert('請至少選擇一種條件！');e.preventDefault();e.stopPropagation();return false;}var uri='/index/query/query/'+$("#query_input").val();$(".dropdown_checkbok:checked").each(function(){uri+='/type[]/'+$(this).attr('name');});ga('send','pageview','/?q='+$("#query_input").val());location.href=uri;e.preventDefault();e.stopPropagation();return false;});});</script>

        <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-17107887-1','auto');ga('send','pageview');</script>
<!-- Facebook Pixel Code -->
<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init','295539717451831');fbq('track',"PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=295539717451831&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
    </body>
</html>
HTML;

        return ['http://www.projectup.net/article/view/id/16721' => $html];
    }

    protected function xml()
    {
        return <<<'XML'
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
            <title>5 個翻轉行事曆用法的高效率思維，我多年累積的管理日曆實踐</title>
            <description><![CDATA[<img width='480px' src='http://www.projectup.net/images/backend/article/54a0e894eb8466cd9ec198ba363b5a7d.jpg' ><br>行事曆是大家都需要的簡單工具，只是如果要記錄會議時間，如何安排可以讓會議更有效率？如果要處理待辦事項，如何讓行事曆的安排是有效的，而不是變成壓力日曆？除了行事曆的特殊工具功能外，這篇文章，想要分享的是行事曆的通用管理策略。
            <a href="/article/view/id/16721">...more</a>]]></description>
            <pubDate>Thu, 25 Mar 2021 17:56:12 +0800</pubDate>
            <link>http://feedproxy.google.com/~r/projectup/WDNW/~3/scQXEaHlduo/16721</link>
            <guid isPermaLink="false">http://www.projectup.net/article/view/id/16721</guid>
            <author>異塵行者 Esor Huang  </author>
            <dc:creator>異塵行者 Esor Huang  </dc:creator>
            <feedburner:origLink>http://www.projectup.net/article/view/id/16721</feedburner:origLink>
        </item>
    </channel>
</rss>
XML;
    }
}

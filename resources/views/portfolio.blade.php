<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Nunito';
        }
        .portfolio_img{
            width: 100%;
        }
        .portfolio_img_content{
            display: none;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="portfolio_content" style="display: flex;margin:auto;width: 70%;padding: 20px;">
        <div class="portfolio_content_tab" style="width: 100%">
            <ul class="nav nav-tabs">
                <li  class="active"><a href="#greattree" data-toggle="tab">大樹健康購物網</a></li>
                <li><a href="#matching" data-toggle="tab">未來科技展</a></li>
                <li><a href="#haostore" data-toggle="tab">全網好店家</a></li>
                <li><a href="#tigerairshop" data-toggle="tab">虎航購物網</a></li>
                <li><a href="#liteled" data-toggle="tab">萊特光電</a></li>
            </ul>
            <div class="tab-content">
                <div id="greattree" class="tab-pane fade in active">
                    <h3>大樹健康購物網</h3>
                    <a  target ="_blank" href="https://shop.greattree.com.tw/greattree/index.php?action=product_detail&prod_no=P0000100013696">https://shop.greattree.com.tw/greattree/index.php?action=product_detail&prod_no=P0000100013696</a>
                    <br>
                    <div class="btn btn btn-primary" onclick="show_hide_change('greentree01')">商品詳細頁套版</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('greentree02')">購物車元件套版</div>
                    <div class="portfolio_img">
                        <img class="portfolio_img_content greentree01" src="../portfolio_img/greentree/greentree01.jpg" alt="">
                        <img class="portfolio_img_content greentree02" src="../portfolio_img/greentree/greentree02.jpg" alt="">
                    </div>
                </div>
                <div id="matching" class="tab-pane fade">
                    <h3>未來科技展</h3>
                    <a  target ="_blank" href="https://matching.org.tw/matching/">https://matching.org.tw/matching/</a>
                    <br>
                    <div class="btn btn btn-primary" onclick="show_hide_change('matching01')">全文檢索系統開發</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('matching02')">熱門技術元件套版</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('matching03')">熱門技術詳細說明頁套版</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('matching04')">技術搜尋-分類篩選功能套版</div>
                    <div class="portfolio_img">
                        <img class="portfolio_img_content matching01" src="../portfolio_img/matching/matching01.jpg" alt="">
                        <img class="portfolio_img_content matching02" src="../portfolio_img/matching/matching02.jpg" alt="">
                        <img class="portfolio_img_content matching03" src="../portfolio_img/matching/matching03.png" alt="">
                        <img class="portfolio_img_content matching04" src="../portfolio_img/matching/matching04.jpg" alt="">
                    </div>
                </div>
                <div id="haostore" class="tab-pane fade">
                    <h3>全網好店家</h3>
                    <a href="https://haostore.fami.life/haostore/index.php?action=open_store">https://haostore.fami.life/haostore/index.php?action=open_store</a>
                    <br>
                    <div class="btn btn btn-primary" onclick="show_hide_change('haostore01')">自動化開店API串接</div>
                    <div class="portfolio_img">
                        <img class="portfolio_img_content haostore01" src="../portfolio_img/haostore/haostore01.png" alt="">
                    </div>
                </div>
                <div id="tigerairshop" class="tab-pane fade">
                    <h3>虎航購物網</h3>
                    <a  target ="_blank" href="https://www.tigerairshop.com.tw/tigerairshoppreorder/">https://www.tigerairshop.com.tw/tigerairshoppreorder/</a>
                    <br>
                    <div class="btn btn btn-primary" onclick="show_hide_change('tigherairshop01')">版頭頁籤套版</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('tigherairshop02')">熱銷商品元件套版</div>
                    <div class="btn btn btn-primary" onclick="show_hide_change('tigherairshop03')">商品詳細頁套版</div>
                    <div class="portfolio_img">
                        <img class="portfolio_img_content tigherairshop01" src="../portfolio_img/tigerairshop/tigerairshop01.jpg" alt="">
                        <img class="portfolio_img_content tigherairshop02" src="../portfolio_img/tigerairshop/tigerairshop02.jpg" alt="">
                        <img class="portfolio_img_content tigherairshop03" src="../portfolio_img/tigerairshop/tigerairshop03.jpg" alt="">
                    </div>
                </div>
                <div id="liteled" class="tab-pane fade">
                    <h3>萊特光電</h3>
                    <a target ="_blank"  href="https://www.liteled.com.tw/liteled/index.php?action=product_sort&prod_sort_uid=6606">https://www.liteled.com.tw/liteled/index.php?action=product_sort&prod_sort_uid=6606</a>
                    <br>
                    <div class="btn btn btn-primary" onclick="show_hide_change('liteled01')">左方商品分類套版</div>
                    <div class="portfolio_img">
                        <img class="portfolio_img_content liteled01" src="../portfolio_img/liteled/liteled01.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function show_hide_change(kk){
    $("."+kk).toggle('fast');
}
</script>
</body>
</html>

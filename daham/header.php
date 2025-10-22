<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$sns=array();
$sSql="SELECT * FROM sns ORDER BY num ASC";
$sRes=mysqli_query($conn, $sSql);
while($sRow=mysqli_Fetch_array($sRes)){
    array_push($sns, $sRow['url']);
}

$tSql="SELECT * FROM map";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);
$kor_tel=explode("/", $tRow['kor_tel']);
$iu_tel=$tRow['iu_tel'];
$cd_tel=$tRow['cd_tel'];

$basename=basename($_SERVER['PHP_SELF']);
define("_BBC_PAGE_NAME", $basename); 
define("_BBCLONE_DIR", $root."bbclone/"); 
define("COUNTER", _BBCLONE_DIR."mark_page.php"); 
if (is_readable(COUNTER)) include_once(COUNTER); 
?>
<header>
    <div class="inner">
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
        <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt=""></div>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/company.php">회사소개</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/company.php">다함 트레이딩</a></li>
                    <li><a href="<?php echo $root?>sub/gallery.php">갤러리</a></li>
                </ul>
            </li> 
            <li>
                <a href="<?php echo $root?>sub/trading.php">무역 진행 안내</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/trading.php">무역진행시스템</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/visit_guide.php">방문단신청 이란</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/visit_guide.php">방문단 신청 안내</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/product_request.php">신청하기</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/product_request.php">상품조사 신청</a></li>
                    <li><a href="<?php echo $root?>sub/visit_request.php">방문단 신청</a></li>
                    <li><a href="<?php echo $root?>sub/commerce_request.php">전자상거래 신청</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/inquiry.php">실시간 문의</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/inquiry.php">문의 및 현황</a></li>
                </ul>
            </li>
        </ul>
        <div class="header_top">
            <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/icon-naver.png" alt=""></a>
            <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
        </div>
    </div>
</header>
<div class="left_fix">
    <div><img src="<?php echo $root?>img/f-logo.png" alt=""></div>
    <a href="<?php echo $root?>sub/product_request.php">
        <img src="<?php echo $root?>img/icon-paper.png" alt="">
        <p>상품조사신청</p>
        <span>바로가기</span>
    </a>
    <a href="<?php echo $root?>sub/visit_request.php">
        <img src="<?php echo $root?>img/icon-paper.png" alt="">
        <p>방문단신청</p>
        <span>바로가기</span>
    </a>
    <a href="<?php echo $root?>sub/commerce_request.php">
        <img src="<?php echo $root?>img/icon-paper.png" alt="">
        <p>전자상거래신청</p>
        <span>바로가기</span>
    </a>
</div>
<div class="right_fix">
    <a href="<?php echo $sns[2]?>" target="_blank">
        <img src="<?php echo $root?>img/icon-kakao.png" alt="">
        <p>카카오톡 상담</p>
    </a>
    <a href="tel:<?php echo str_replace(" ", "", $kor_tel[0])?>">
        <img src="<?php echo $root?>img/icon-call.png" alt="">
        <p>한국 전화 상담</p>
        <span><?php echo str_replace(" ", "", $kor_tel[0])?></span>
    </a>
    <a href="tel:<?php echo $iu_tel?>">
        <img src="<?php echo $root?>img/icon-call.png" alt="">
        <p>이우 전화 상담</p>
        <span><?php echo $iu_tel?></span>
    </a>
    <a href="tel:<?php echo $cd_tel?>">
        <img src="<?php echo $root?>img/icon-call.png" alt="">
        <p>청도 전화 상담</p>
        <span><?php echo $cd_tel?></span>
    </a>
</div>
<aside>
    <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li><a href="<?php echo $root?>index.php">HOME</a></li>
        <li>
            <a href="javascript:void(0);">회사소개
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/company.php">다함 트레이딩</a></li>
                <li><a href="<?php echo $root?>sub/gallery.php">갤러리</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">무역 진행 안내
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/trading.php">무역진행시스템</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">방문단신청 이란
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/visit_guide.php">방문단 신청 안내</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">신청하기
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/product_request.php">상품조사 신청</a></li>
                <li><a href="<?php echo $root?>sub/visit_request.php">방문단 신청</a></li>
                <li><a href="<?php echo $root?>sub/commerce_request.php">전자상거래 신청</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">실시간 문의
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/inquiry.php">문의 및 현황</a></li>
            </ul>
        </li>
    </ul>
    <div class="aside-sns">
        <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/icon-naver.png" alt=""></a>
        <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
    </div>
</aside>
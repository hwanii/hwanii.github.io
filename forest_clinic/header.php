<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$sSql="SELECT * FROM sns ORDER BY num ASC";
$sRes=mysqli_query($conn, $sSql);
$sns=array();
while($sRow=mysqli_fetch_array($sRes)){
    array_push($sns, $sRow['url']);
}

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
            <li><a href="<?php echo $root?>index.php">HOME</a></li>
            <li>
                <a href="<?php echo $root?>sub/introduce.php">센터소개</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                    <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                    <li><a href="<?php echo $root?>sub/doctor.php">의료진 소개</a></li>
                    <li><a href="<?php echo $root?>sub/facility.php">시설 안내</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/mental.php">정신건강검진안내</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/list.php">검사 항목 안내</a></li>
                    <li><a href="<?php echo $root?>sub/procedure.php">검진 절차 안내</a></li>
                    <li><a href="<?php echo $root?>sub/time.php">예약 및 검진 시간 안내</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $root?>sub/treat.php">외래 진료</a></li>
            <li><a href="https://booking.naver.com/booking/13/bizes/424255" target="blank">예약신청</a></li>
        </ul>
        <div class="sns">
            <!-- <a href="<?php echo $sns[0]?>" target="blank"><img src="<?php echo $root?>img/icon-facebook.png" alt=""></a> -->
            <a href="<?php echo $sns[1]?>" target="blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
            <a href="<?php echo $sns[2]?>" target="blank"><img src="<?php echo $root?>img/icon-youtube.png" alt=""></a>
            <a href="<?php echo $sns[3]?>" target="blank"><img src="<?php echo $root?>img/icon-kakao.png" alt=""></a>
        </div>
    </div>
</header>
<section class="right-fix">
    <a href="<?php echo $sns[4]?>" target="blank">
        <img src="<?php echo $root?>img/right-naver.png" alt="">
        <p>네이버<br>예약하기</p>
    </a>
    <a href="<?php echo $sns[5]?>" target="blank">
        <img src="<?php echo $root?>img/right-reservation.png" alt="">
        <p>검진 예약</p>
    </a>
    <a href="<?php echo $sns[6]?>" target="blank">
        <img src="<?php echo $root?>img/right-reservation01.png" alt="">
        <p>외래 예약</p>
    </a>
    <a href="<?php echo $sns[3]?>" target="blank">
        <img src="<?php echo $root?>img/right-kakao.png" alt="">
        <p>카카오 오픈톡</p>
    </a>
</section>

<aside>
    <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li><a href="<?php echo $root?>index.php">HOME</a></li>
        <li>
            <a href="javascript:void(0);">센터소개
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                <li><a href="<?php echo $root?>sub/doctor.php">의료진 소개</a></li>
                <li><a href="<?php echo $root?>sub/facility.php">시설 안내</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">정신건강검진안내
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/mental.php">정신건강검진안내</a></li>
                <li><a href="<?php echo $root?>sub/list.php">검사 항목 안내</a></li>
                <li><a href="<?php echo $root?>sub/procedure.php">검진 절차 안내</a></li>
                <li><a href="<?php echo $root?>sub/time.php">예약 및 검진 시간 안내</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $root?>sub/treat.php">외래 진료</a></li>
        <li><a href="https://booking.naver.com/booking/13/bizes/424255">예약신청</a></li>
    </ul>
    <div class="aside-sns">
        <!-- <a href="<?php echo $sns[0]?>" target="blank"><img src="<?php echo $root?>img/icon-facebook.png" alt=""></a> -->
        <a href="<?php echo $sns[1]?>" target="blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
        <a href="<?php echo $sns[2]?>" target="blank"><img src="<?php echo $root?>img/icon-youtube.png" alt=""></a>
        <a href="<?php echo $sns[3]?>" target="blank"><img src="<?php echo $root?>img/icon-kakao.png" alt=""></a>
    </div>
    <div class="aside-fix">
        <a href="<?php echo $sns[4]?>" target="blank">
            <div>
                <img src="<?php echo $root?>img/right-naver.png" alt="">
                <p>네이버 예약하기</p>
            </div>
        </a>
        <a href="<?php echo $sns[5]?>" target="blank">
            <div>
                <img src="<?php echo $root?>img/right-reservation.png" alt="">
                <p>검진 예약</p>
            </div>
        </a>
        <a href="<?php echo $sns[6]?>" target="blank">
            <div>
                <img src="<?php echo $root?>img/right-reservation01.png" alt="">
                <p>외래 예약</p>
            </div>
        </a>
        <a href="<?php echo $sns[3]?>" target="blank">
            <div>
                <img src="<?php echo $root?>img/right-kakao.png" alt="">
                <p>카카오 오픈톡</p>
            </div>
        </a>
    </div>
</aside>
<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}
?>
<header>
    <div class="inner">
        <div class="ham-btn"><img src="<?php echo $root?>img/menu.png" alt=""></div>
        <h1><a href="<?php echo $root?>index.php"></a></h1>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/introduction.php">대원 로지스틱</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/introduction.php">인사말</a></li>
                    <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                    <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/car_transport.php">사업 분야</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/car_transport.php">자동차 부품 운송</a></li>
                    <li><a href="<?php echo $root?>sub/steel_transport.php">철강 운송</a></li>
                    <li><a href="<?php echo $root?>sub/car_processing.php">자동차 부품 가공</a></li>
                    <li><a href="<?php echo $root?>sub/distribution.php">3PL 물류</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/performance.php">주요 실적</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/performance.php">통합 실적 안내</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/facility.php">시설/장비/차량현황</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/facility.php">시설 현황</a></li>
                    <li><a href="<?php echo $root?>sub/equipments.php">설비 현황</a></li>
                    <li><a href="<?php echo $root?>sub/vehicles.php">차량 현황</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/notice.php">커뮤니티</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                    <li><a href="<?php echo $root?>sub/estimate.php">견적요청</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<aside>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <h2><a href=""><img src="<?php echo $root?>img/logo05.png" alt=""></a></h2>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0)">대원 로지스틱</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/introduction.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">사업 분야</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/car_transport.php">자동차 부품 운송</a></li>
                <li><a href="<?php echo $root?>sub/steel_transport.php">철강 운송</a></li>
                <li><a href="<?php echo $root?>sub/car_processing.php">자동차 부품 가공</a></li>
                <li><a href="<?php echo $root?>sub/distribution.php">3PL 물류</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $root?>sub/performance.php">주요 실적</a>
        </li>
        <li>
            <a href="javascript:void(0)">시설/장비/차량현황</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/facility.php">시설 현황</a></li>
                <li><a href="<?php echo $root?>sub/equipments.php">설비 현황</a></li>
                <li><a href="<?php echo $root?>sub/vehicles.php">차량 현황</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">커뮤니티</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/estimate.php">견적요청</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="back-bg"></div>
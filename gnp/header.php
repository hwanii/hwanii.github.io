<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$basename=basename($_SERVER['PHP_SELF']);
define("_BBC_PAGE_NAME", $basename); 
define("_BBCLONE_DIR", $root."bbclone/"); 
define("COUNTER", _BBCLONE_DIR."mark_page.php"); 
if (is_readable(COUNTER)) include_once(COUNTER); 
?>
<header>
    <div class="inner">
        <div class="top-header">
            <p>고객센터</p>
            <span>031.548.2355</span>
        </div>
        <div class="h-menu">
            <div class="ham-btn"><img src="<?php echo $root?>img/w-ham.png" alt="메뉴버튼"></div>
            <!-- <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="GNP Logo"></a></h1> -->
            <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt="GNP Logo"></a></h1>
            <nav>
                <ul class="gnb">
                    <li>
                        <a href="<?php echo $root?>sub/sun-01.php">태양광</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/sun-01.php">태양광 인버터</a></li>
                            <li><a href="<?php echo $root?>sub/sun-03.php">태양광 발전사업</a></li>
                            <li><a href="<?php echo $root?>sub/sun-04.php">ESS SYSTEM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/shield.php">막구조물</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/shield.php">막교체사업</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/result-01.php">주요실적</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/result-02.php">태양광 발전사업</a></li>
                            <li><a href="<?php echo $root?>sub/result-01.php">건물일체형태양광</a></li>
                            <li><a href="<?php echo $root?>sub/result-03.php">막구조물</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $root?>sub/certification.php">인증현황</a></li>
                    <li>
                        <a href="<?php echo $root?>sub/material.php">고객지원</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/material.php">자료실</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/introduce.php">회사소개</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                            <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                            <li><a href="<?php echo $root?>sub/organization.php">조직도</a></li>
                            <li><a href="<?php echo $root?>sub/map-01.php">오시는 길</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<aside>
    <!-- <h1 class="a-logo"><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="GNP Logo"></a></h1> -->
    <h1 class="a-logo"><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt="GNP Logo"></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">태양광</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/sun-01.php">태양광 인버터</a></li>
                <li><a href="<?php echo $root?>sub/sun-03.php">태양광 발전사업</a></li>
                <li><a href="<?php echo $root?>sub/sun-04.php">ESS SYSTEM</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">막구조물</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/shield.php">막교체사업</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">주요실적</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/result-02.php">태양광 발전사업</a></li>
                <li><a href="<?php echo $root?>sub/result-01.php">건물일체형태양광</a></li>
                <li><a href="<?php echo $root?>sub/result-03.php">막구조물</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $root?>sub/certification.php">인증현황</a></li>
        <li>
            <a href="javascript:void(0);">고객지원</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/material.php">자료실</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">회사소개</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                <li><a href="<?php echo $root?>sub/organization.php">조직도</a></li>
                <li><a href="<?php echo $root?>sub/map-01.php">오시는 길</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="back-bg"></div>
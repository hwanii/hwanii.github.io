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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXSSXXCW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="h-inner">
        <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt="메뉴 버튼"></div>
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt=""></a></h1>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/company.php">메타키움</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/company.php">회사소개</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/class_vr.php">CLASS VR</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/class_vr.php">클래스브이알 소개</a></li>
                    <li><a href="<?php echo $root?>sub/headset.php">CLASSVR 헤드셋</a></li>
                    <li><a href="<?php echo $root?>sub/student.php">학생관리 프로그램</a></li>
                    <li><a href="<?php echo $root?>sub/contents.php">VR.AR.MR 콘텐츠</a></li>
                    <li><a href="<?php echo $root?>sub/metaverse.php">메타버스 콘텐츠</a></li>
                    <li><a href="<?php echo $root?>sub/connection.php">교과 연계 학습계획서</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/coding.php">VR 코딩</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/coding.php">VR코딩</a></li>
                    <li><a href="<?php echo $root?>sub/coding_edu.php">쿠링VR AI 코딩</a></li>
                    <li><a href="<?php echo $root?>sub/case.php">쿠링VR 활용사례</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/aptitude.php">XR CONTENTS</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/edu_pro.php">Edu Pro</a></li>
                    <li><a href="<?php echo $root?>sub/aptitude.php">VR 진로적성검사</a></li>
                    <li><a href="<?php echo $root?>sub/multi01.php">멀티키움</a></li>
                    <li><a href="<?php echo $root?>sub/english.php">VR영어교육</a></li>
                    <!-- <li><a href="<?php echo $root?>sub/safety.php">안전교육</a></li> -->
                    <li><a href="<?php echo $root?>sub/vr_contents.php">XR CONTENTS 제작</a></li>
                    <li><a href="<?php echo $root?>sub/experience.php">XR 교실</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/notice.php">고객센터</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                    <li><a href="<?php echo $root?>sub/faq.php">FAQ</a></li>
                    <li><a href="<?php echo $root?>sub/portfolio.php">포트폴리오</a></li>
                    <li><a href="<?php echo $root?>sub/estimate.php">견적문의</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="gnb_back"></div>
</header>

<aside>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo02.png" alt=""></a></h2>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">메타키움</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/company.php">회사소개</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">CLASS VR</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/class_vr.php">클래스브이알 소개</a></li>
                <li><a href="<?php echo $root?>sub/headset.php">CLASSVR 헤드셋</a></li>
                <li><a href="<?php echo $root?>sub/student.php">학생관리 프로그램</a></li>
                <li><a href="<?php echo $root?>sub/contents.php">VR.AR.MR 콘텐츠</a></li>
                <li><a href="<?php echo $root?>sub/metaverse.php">메타버스 콘텐츠</a></li>
                <li><a href="<?php echo $root?>sub/connection.php">교과 연계 학습계획서</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">VR 코딩</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/coding.php">VR코딩</a></li>
                <li><a href="<?php echo $root?>sub/english.php">VR교실</a></li>
                <li><a href="<?php echo $root?>sub/coding_edu.php">쿠링VR AI 코딩</a></li>
                <li><a href="<?php echo $root?>sub/case.php">쿠링VR 활용사례</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">XR CONTENTS</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/aptitude.php">VR 진로적성검사</a></li>
                <li><a href="<?php echo $root?>sub/multi01.php">멀티키움</a></li>
                <!-- <li><a href="<?php echo $root?>sub/safety.php">안전교육</a></li> -->
                <li><a href="<?php echo $root?>sub/vr_contents.php">XR CONTENTS 제작</a></li>
                <li><a href="<?php echo $root?>sub/experience.php">XR 교실</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">고객센터</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/faq.php">FAQ</a></li>
                <li><a href="<?php echo $root?>sub/portfolio.php">포트폴리오</a></li>
                <li><a href="<?php echo $root?>sub/estimate.php">견적문의</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="back_bg"></div>
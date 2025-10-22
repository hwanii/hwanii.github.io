<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

?>
<header>
    <div class="top"></div>
    <div class="inner">
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/intro.php">GLOBAL EP</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/intro.php">인사말<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/vision.php">비전<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/branch.php">해외 지사<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/way.php">오시는 길</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/work_flow.php">BUSINESS</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/work_flow.php">업무흐름도<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/operate.php">운영대행<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/erp.php">ERP<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/consulting.php">컨설팅<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/marketing.php">마케팅<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/delivery.php">배송대행<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/live.php">LIVE</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/branding.php">WORK</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/branding.php">브랜딩<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/work_marketing.php">글로벌라이제이션<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/b2b.php">B2B &amp; B2C<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/government.php">정부지원사업<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/influencer.php">인플루언서</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/reference.php">REFERENCE</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/reference.php">전체보기<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/refer_branding.php">브랜딩<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/refer_marketing.php">마케팅<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/refer_b2b.php">B2B &amp; B2C<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/refer_government.php">정부지원사업</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/notice.php">COMMUNITY</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/faq.php">FAQ<i></i></a></li>
                    <li><a href="<?php echo $root?>sub/recruit.php">채용안내</a></li>
                </ul>
            </li>
        </ul>
        <img src="<?php echo $root?>img/icon-menu.png" alt="메뉴 버튼" class="ham">
    </div>
</header>
<aside>
    <div class="top">
        <img src="<?php echo $root?>img/f-logo.png">
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">GLOBAL EP</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/intro.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/vision.php">비전</a></li>
                <li><a href="<?php echo $root?>sub/branch.php">해외 지사</a></li>
                <li><a href="<?php echo $root?>sub/way.php">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">BUSINESS</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/work_flow.php">업무흐름도</a></li>
                <li><a href="<?php echo $root?>sub/operate.php">운영대행</a></li>
                <li><a href="<?php echo $root?>sub/erp.php">ERP</a></li>
                <li><a href="<?php echo $root?>sub/consulting.php">컨설팅</a></li>
                <li><a href="<?php echo $root?>sub/marketing.php">마케팅</a></li>
                <li><a href="<?php echo $root?>sub/delivery.php">배송대행</a></li>
                <li><a href="<?php echo $root?>sub/live.php">LIVE</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">WORK</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/branding.php">브랜딩</a></li>
                <li><a href="<?php echo $root?>sub/work_marketing.php">글로벌라이제이션</a></li>
                <li><a href="<?php echo $root?>sub/b2b.php">B2B &amp; B2C</a></li>
                <li><a href="<?php echo $root?>sub/government.php">정부지원사업</a></li>
                <li><a href="<?php echo $root?>sub/influencer.php">인플루언서</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">REFERENCE</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/reference.php">전체보기</a></li>
                <li><a href="<?php echo $root?>sub/refer_branding.php">브랜딩</a></li>
                <li><a href="<?php echo $root?>sub/refer_marketing.php">마케팅</a></li>
                <li><a href="<?php echo $root?>sub/refer_b2b.php">B2B &amp; B2C</a></li>
                <li><a href="<?php echo $root?>sub/refer_government.php">정부지원사업</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">COMMUNITY</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/faq.php">FAQ</a></li>
                <li><a href="<?php echo $root?>sub/recruit.php">채용안내</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="aside_bg"></div>
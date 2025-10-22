<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

@session_start();
$id=$_SESSION['id'];

$basename=basename($_SERVER['PHP_SELF']);
define("_BBC_PAGE_NAME", $basename); 
define("_BBCLONE_DIR", $root."bbclone/"); 
define("COUNTER", _BBCLONE_DIR."mark_page.php"); 
if (is_readable(COUNTER)) include_once(COUNTER); 
?>
<header>
    <div class="header-top">
        <div class="inner">
            <div class="right">
                <?php
                if($id){
                ?>
                <a href="<?php echo $root?>logout.php">로그아웃</a>
                <a href="<?php echo $root?>sub/mypage.php">마이페이지</a>
                <?php } else { ?>
                <a href="<?php echo $root?>sub/login_terms.php">회원가입</a>
                <a href="<?php echo $root?>sub/login.php">로그인</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="inner">
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/<?php echo ($root) ? "f-logo.png" : "logo.png"?>" alt=""></a></h1>
        <div class="ham-btn"><img src="<?php echo $root?>img/<?php echo ($root) ? "ham01.png" : "ham.png"?>" alt=""></div>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/client.php">FOR CLIENTS</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/client.php">채용의뢰</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/candidate_information.php">FOR CANDIDATES</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/candidate_information.php">채용정보</a></li>
                    <li><a href="<?php echo $root?>sub/resume.php">이력서등록</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/consultant.php">CONSULTANTS</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/consultant.php">구성원</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/company.php">COMPANY</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/company.php">WHY SU</a></li>
                    <li><a href="<?php echo $root?>sub/location.php">위치</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/notice.php">NOTICE</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                    <li><a href="<?php echo $root?>sub/faq.php">FAQ</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <?php
    if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    ?>
    <div class="gra"></div>
    <?php } ?>
</header>

<aside>
    <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/f-logo.png" alt=""></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">FOR CLIENTS
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/client.php">채용의뢰</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">FOR CANDIDATES
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/candidate_information.php">채용정보</a></li>
                <li><a href="<?php echo $root?>sub/resume.php">이력서등록</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">CONSULTANTS
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/consultant.php">구성원</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">COMPANY
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/company.php">WHY SU</a></li>
                <li><a href="<?php echo $root?>sub/location.php">위치</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">NOTICE
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/faq.php">FAQ</a></li>
            </ul>
        </li>
    </ul>
    <div class="aside-info">
        <?php
        if($id){
        ?>
        <a href="<?php echo $root?>logout.php">로그아웃</a>
        <?php } else { ?>
        <a href="<?php echo $root?>sub/login_terms.php">회원가입</a>
        <a href="<?php echo $root?>sub/login.php">로그인</a>
        <a href="<?php echo $root?>sub/mypage.php">마이페이지</a>
        <?php } ?>
    </div>
</aside>
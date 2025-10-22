<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}
@session_start();
$id=$_SESSION['id'];

$sSql="SELECT * FROM sns ORDER BY num ASC";
$sRes=mysqli_query($conn, $sSql);
$url=array();
if(!empty($sRes) || $sRes==true){
    while($sRow=mysqli_fetch_array($sRes)){
        array_push($url, $sRow['url']);
    }
}
?>
<header>
    <div class="header-top">
        <div class="inner">
            <div class="left">
                <ul>
                    <li><a href="<?php echo $url[0]?>" target="blank"><img src="<?php echo $root?>img/facebook.png" alt=""></a></li>
                    <li><a href="<?php echo $url[2]?>" target="blank"><img src="<?php echo $root?>img/blog.png" alt=""></a></li>
                    <li><a href="<?php echo $url[1]?>" target="blank"><img src="<?php echo $root?>img/youtube.png" alt=""></a></li>
                </ul>
                <p>Metal Sourcing Platform Expertise / 금속 가공 소싱 플렛폼 전문기업
                </p>
            </div>
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
    <div class="inner_b">
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/<?php echo ($root) ? "logo01.png" : "logo.png"?>" alt=""></a></h1>
        <div class="ham-btn"><img src="<?php echo $root?>img/<?php echo ($root) ? "ham01.png" : "ham.png"?>" alt=""></div>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/company.php">COMPANY</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/company.php">회사소개</a></li>
                    <li><a href="<?php echo $root?>sub/history.php">HISTORY</a></li>
                    <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/platform.php">PLATFORM</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/platform.php">PLATFORM</a></li>
                    <li><a href="<?php echo $root?>sub/vendor.php">VENDOR</a></li>
                    <li><a href="<?php echo $root?>sub/customer.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/product01.php">PRODUCT</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/product01.php">PRODUCT</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/customer_center.php">고객센터</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                    <li><a href="<?php echo $root?>sub/request.php">문의하기</a></li>
                    <li><a href="<?php echo $root?>sub/download.php">자료실</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<aside>
    <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt=""></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">COMPANY
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/company.php">회사소개</a></li>
                <li><a href="<?php echo $root?>sub/history.php">HISTORY</a></li>
                <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">PLATFORM
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/platform.php">PLATFORM</a></li>
                <li><a href="<?php echo $root?>sub/vendor.php">VENDOR</a></li>
                <li><a href="<?php echo $root?>sub/customer.php">CUSTOMER</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">PRODUCT
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/product.php">PRODUCT</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">고객센터
            <div class="plus">
                <span></span>
                <span></span>
            </div></a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/request.php">문의하기</a></li>
                <li><a href="<?php echo $root?>sub/download.php">자료실</a></li>
            </ul>
        </li>
    </ul>
    <div class="aside-sns">
        <a href="<?php echo $url[0]?>"><img src="<?php echo $root?>img/facebook.png" alt=""></a>
        <a href="<?php echo $url[1]?>"><img src="<?php echo $root?>img/blog.png" alt=""></a>
        <a href="<?php echo $url[2]?>"><img src="<?php echo $root?>img/youtube.png" alt=""></a>
    </div>
    <div class="aside-info">
        <?php
        if($id){
        ?>
        <a href="<?php echo $root?>sub/mypage.php">마이페이지</a>
        <a href="<?php echo $root?>logout.php">로그아웃</a>
        <?php } else { ?>
        <a href="<?php echo $root?>sub/login_terms.php">회원가입</a>
        <a href="<?php echo $root?>sub/login.php">로그인</a>
        <?php } ?>
    </div>
</aside>
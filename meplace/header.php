<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$nSql="SELECT * FROM sns ORDER BY num ASC";
$nRes=mysqli_query($conn, $nSql);
$sns=array();
while($nRow=mysqli_fetch_array($nRes)){
    array_push($sns, $nRow['url']);
}
?>
<header>
    <div class="inner">
        <div class="header-top">
            <div class="ham-btn"><img src="<?php echo $root?>img/ham-btn.png" alt="메뉴 열기"></div>
            <h1 class="h_logo"><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="미플레이스 로고"></a></h1>
            <div class="sns">
                <a href="<?php echo $sns[0]?>" target="blank">
                    <img src="<?php echo $root?>img/insta.png" alt="MEPLACE 인스타그램 바로가기">
                    <p>MEPLACE</p>
                </a>
                <a href="<?php echo $sns[1]?>" target="blank">
                    <img src="<?php echo $root?>img/insta.png" alt="CAFE & SPACE 인스타그램 바로가기">
                    <p>CAFE&amp;SPACE</p>
                </a>
                <a href="<?php echo $sns[2]?>" target="blank">
                    <img src="<?php echo $root?>img/insta.png" alt="CIRCLE 인스타그램 바로가기">
                    <p>CIRCLE</p>
                </a>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <ul class="gnb">
            <li><a href="<?php echo $root?>sub/meplace.php">COMPANY</a></li>
            <li><a href="javasvript:void(0)"></a></li>
            <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "local") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/local.php">LOCAL</a></li>
            <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "life_style") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/life_style.php">RETAIL&amp;SERVICE</a></li>
            <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "circle") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/circle.php">LIFE STYLE</a></li>
        </ul>
    </div>
</header>
<aside>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/f_logo.png" alt=""></a></h2>
    <ul class="gnb">
        <li><a href="<?php echo $root?>sub/meplace.php">MEPLACE</a></li>
        <li><a href="javasvript:void(0)"></a></li>
        <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "local") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/local.php">LOCAL</a></li>
        <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "life_style") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/life_style.php">RETAIL&amp;SERVICE</a></li>
        <li class="<?php echo (strpos($_SERVER['PHP_SELF'], "circle") !== false) ? "on" : "" ?>"><a href="<?php echo $root?>sub/circle.php">LIFE STYLE</a></li>
    </ul>
    <div class="sns">
        <a href="<?php echo $sns[0]?>" target="blank">
            <img src="<?php echo $root?>img/insta.png" alt="MEPLACE 인스타그램 바로가기">
            <p>MEPLACE</p>
        </a>
        <a href="<?php echo $sns[1]?>" target="blank">
            <img src="<?php echo $root?>img/insta.png" alt="CAFE & SPACE 인스타그램 바로가기">
            <p>CAFE&amp;SPACE</p>
        </a>
        <a href="<?php echo $sns[2]?>" target="blank">
            <img src="<?php echo $root?>img/insta.png" alt="CIRCLE 인스타그램 바로가기">
            <p>CIRCLE</p>
        </a>
    </div>
</aside>
<div class="back-bg"></div>
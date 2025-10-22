<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$sSql="SELECT * FROM sns WHERE `url`!='' ORDER BY num ASC";
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
    <div class="h-inner">
        <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt="메뉴버튼"></div>
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="circle logo"></a></h1>
        <div class="h-menu">
            <nav>
                <ul class="gnb">
                    <li><a href="<?php echo $root?>sub/what.php">WHAT’S_ON</a></li>
                    <li><a href="<?php echo $root?>sub/modulev-1f.php">Lifestyle Station</a></li>
                    <li><a href="<?php echo $root?>sub/circle.php">CIRCLE</a></li>
                    <!-- <li><a href="<?php echo $root?>sub/update.php">UPDATE</a> -->
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sns">
            <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/naver.png" alt="네이버 바로가기"></a>
            <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/facebook.png" alt="페이스북 바로가기"></a>
            <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/insta.png" alt="인스타그램 바로가기"></a>
        </div>
    </div>
</header>

<aside>
    <h1 class="a-logo"><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="DMI SNT logo"></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li><a href="<?php echo $root?>sub/what.php">WHAT’S_ON</a></li>
        <li><a href="<?php echo $root?>sub/modulev-1f.php">Lifestyle Station</a></li>
        <li><a href="<?php echo $root?>sub/circle.php">CIRCLE</a></li>
        <!-- <li><a href="<?php echo $root?>sub/update.php">UPDATE</a></li> -->
    </ul>
    <div class="sns">
        <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/b-naver.png" alt="네이버 바로가기"></a>
        <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/b-facebook.png" alt="페이스북 바로가기"></a>
        <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/b-insta.png" alt="인스타그램 바로가기"></a>
    </div>
</aside>

<div class="back-bg"></div>
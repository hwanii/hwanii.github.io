<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$hSql="SELECT * FROM information";
$hRes=mysqli_query($conn, $hSql);
$hRow=mysqli_fetch_array($hRes);
$company=$hRow['kor_company'];
$ceo=$hRow['name'];
$busi_num=$hRow['business_number'];
$tel=$hRow['tel'];
$input_file=$hRow['file'];
$addr=$hRow['addr'];
$detail=$hRow['detail_addr'];
$fax=$hRow['fax'];
$email=$hRow['email'];

$lSql="SELECT * FROM sns";
$lRes=mysqli_query($conn, $lSql);
$lRow=mysqli_fetch_array($lRes);
$youtube=$lRow['youtube'];
?>
<header>
    <div class="middle">
        <div class="left">
            <a href="tel:<?php echo $tel?>"><img src="<?php echo $root?>img/icon-call.png"></a>
            <a href="<?php echo $youtube?>" target="_blank"><img src="<?php echo $root?>img/icon-youtube.png"></a>
            <a href="<?php echo $root?><?php echo $input_file?>" download><img src="<?php echo $root?>img/icon-pdf.png"></a>
        </div>
        <a href="<?php echo $root?>index.php" class="logo"><img src="<?php echo $root?>img/logo.png"></a>
        <img src="<?php echo $root?>img/icon-menu.png" class="ham">
    </div>
    <div class="gnb">
        <a href="<?php echo $root?>sub/intro.php">인사말</a>
        <a href="<?php echo $root?>sub/forum.php">강연안내</a>
        <a href="<?php echo $root?>sub/forum_intro.php">포럼소개</a>
        <a href="<?php echo $root?>sub/membership.php">멤버쉽 가입</a>
        <a href="<?php echo $root?>sub/inquiry.php">문의하기</a>
    </div>
</header>
<aside>
    <div class="top">
        <a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/f-logo.png"></a>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="gnb">
        <a href="<?php echo $root?>sub/intro.php">인사말</a>
        <a href="<?php echo $root?>sub/forum.php">강연안내</a>
        <a href="<?php echo $root?>sub/forum_intro.php">포럼소개</a>
        <a href="<?php echo $root?>sub/membership.php">멤버쉽 가입</a>
        <a href="<?php echo $root?>sub/inquiry.php">문의하기</a>
    </div>
</aside>
<div class="aside_bg"></div>
<div class="left_fix">
    <a href="tel:<?php echo $tel?>">
        <h2><?php echo $tel?></h2>
        <p>상담 전화</p>
    </a>
    <div class="middle">
        <a href="tel:<?php echo $tel?>">
            <img src="<?php echo $root?>img/icon-g-call.png">
            <p>전화걸기</p>
            <span></span>
        </a>
        <a href="<?php echo $youtube?>" target="_blank">
            <img src="<?php echo $root?>img/icon-g-youtube.png">
            <p>유튜브</p>
            <span></span>
        </a>
        <a href="<?php echo $root?>img/file/<?php echo $input_file?>" download>
            <img src="<?php echo $root?>img/icon-g-pdf.png">
            <p>리플렛<br>다운로드</p>
            <span></span>
        </a>
    </div>
    <a href="javascript:void(0);">
        <h2>TOP</h2>
    </a>
</div>
<div class="bottom_fix">
    <a href="tel:<?php echo $tel?>">
        <h2><?php echo $tel?></h2>
        <p>상담 전화</p>
    </a>
    <div class="middle">
        <a href="tel:<?php echo $tel?>">
            <img src="<?php echo $root?>img/icon-g-call.png">
            <p>전화걸기</p>
            <span></span>
        </a>
        <a href="<?php echo $youtube?>" target="_blank">
            <img src="<?php echo $root?>img/icon-g-youtube.png">
            <p>유튜브</p>
            <span></span>
        </a>
        <a href="<?php echo $root?>img/file/<?php echo $input_file?>" download>
            <img src="<?php echo $root?>img/icon-g-pdf.png">
            <p>리플렛<br>다운로드</p>
            <span></span>
        </a>
    </div>
    <a href="javascript:void(0);">
        <h2>TOP</h2>
    </a>
</div>
<?php

@ob_start();
@session_start();
$user=$_COOKIE['user'];

$urSql="SELECT * FROM member WHERE id='$user'";
$urRes=mysqli_query($conn, $urSql);
$urRow=mysqli_fetch_array($urRes);
$uName=$urRow['name'];
$uTel=$urRow['tel'];

$iSql="SELECT * FROM infor";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$ic=$iRow['kor_company'];
$im=$iRow['main_white'];
$ib=$iRow['main_blank'];
$if=$iRow['f_number'];
$it=$iRow['tel'];
$ie=$iRow['email'];
?>
<header>
    <div class="inner">
        <h1><a href="<?php echo $_SERVER['PHP_SELF'];?>"><img src="../../admin/img/logo/<?php echo $im?>"></a></h1>
        <div class="right">
            <img src="../../img/icon-m-loca.png" class="on">
            <img src="../../img/icon-menu01.png" class="on">
        </div>
    </div>
    <img src="../../img/header-b.png">
</header>
<div class="left_menu">
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <h2>지점별<br>카톡, 전화상담</h2>
    <ul>
        <?php
        $hSql="SELECT * FROM branch ORDER BY num ASC";
        $hRes=mysqli_query($conn, $hSql);
        while($hRow=mysqli_fetch_array($hRes)){
            $hbn=$hRow['branch_name'];
            $hTel=$hRow['tel'];
            $hKakao=$hRow['kakao'];
            $hw=$hRow['web_url'];
        ?>
        <li>
            <span></span>
            <p onclick="window.open('<?php echo $hw?>.php')"><?php echo $hbn?></p>
            <div>
                <a href="tel:<?php echo $hTel?>"><b></b></a>
                <a href="<?php echo $hKakao?>" target="_blank"><i></i></a>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<aside>
    <ul>
        <li><a href="javascript:void(0);">여러분들의 피부 건강,<br><b>로담 한의원</b>이 함께 합니다.</a></li>
        <li>
            <a href="javascript:void(0);">
                새살침 코라테라피
                <img src="../../img/select-bottom-arrow.png" class="d_arrow">
            </a>
            <ul class="depth">
                <li><a href="../../coratherapy.php">새살침 코라테라피란?</a></li>
                <li><a href="../../philosophy.php">진료 철학</a></li>
                <li><a href="../../fact.php">오해하지 마세요</a></li>
            </ul>
        </li>
        <li><a href="../../sub02_01.php">여드름 패인 흉터</a></li>
        <li><a href="../../sub03.php">수두/대상포진 흉터</a></li>
        <li><a href="../../sub04.php">수술/성형 흉터</a></li>
        <li><a href="../../sub05.php">기타 패인 흉터</a></li>
        <li><a href="../../sub06.php">여드름</a></li>
        <li><a href="../../sub07.php">모공 치료</a></li>
        <li><a href="../../sub09.php">전후 사진</a></li>
        <li><a href="https://byrodam.com/" target="_blank">바이로담</a></li>
    </ul>
    <div class="top">
        <div class="close">
            <span></span>
            <span></span>
        </div>
        <?php if($user){ ?>
        <a href="../../mypage.php">마이페이지</a>
        <span></span>
        <a href="../../logout.php">로그아웃</a>
        <?php } else { ?>
        <a href="../../join.php">회원가입</a>
        <span></span>
        <a href="../../login.php">로그인</a>
        <?php } ?>
    </div>
</aside>
<div class="q_menu_wrap">
    <div class="bg"></div>
    <div class="inner">
        <div class="center">
            <span></span>
            <span></span>
        </div>
        <a href="#none" class="btn call">
            <i></i>
            <span>지점별 전화</span>
        </a>
        <a href="#none" class="btn kakao">
            <i></i>
            <span>지점별 카톡</span>
        </a>
        <a href="#none" class="btn counsel">
            <i></i>
            <span>빠른 상담신청</span>
        </a>
    </div>
</div>
<div class="mob_bg"></div>
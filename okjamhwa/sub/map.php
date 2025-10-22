<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    $header="intro";
    include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <img src="../img/banner-logo.png" alt="">
            <h2>당신이 먹기에, 더 안전하게</h2>
            <p>건강한 최상의 재료에서, 최고의 결과를 만들기 위해<br>옥잠화영농조합법인은 작은 수고도 마다하지 않겠습니다.</p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;회사소개&nbsp;&nbsp;&#62;&nbsp;&nbsp;오시는 길</p>
        </div>
    </section>
    <section class="map sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>회사소개</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/introduce.html">인사말</a>
                <a href="../sub/organization.html">조직도</a>
                <a href="../sub/history.html">연혁</a>
                <a href="../sub/vision.html">비전</a>
                <a href="../sub/certification.html">인증서</a>
                <a href="../sub/map.html" class="on">오시는 길</a>
            </div>
            <a href="<?php echo $store?>" target="_blank" class="store flex_menu">
                <p>스토어 바로가기</p>
                <img src="../img/icon-shop.png" alt="스토어 바로가기">
            </a>
            <a href="../sub/estimate.html" class="ques flex_menu">
                <p>견적 문의</p>
                <img src="../img/icon-q.png" alt="견적 문의 바로가기">
            </a>
        </div>
        <div class="inner950">
            <h2>오시는 길</h2>
            <?php
            $sql="SELECT * FROM map";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $map=$row['map'];
            $tel=$row['tel'];
            $fax=$row['fax'];
            $email=$row['email'];
            $addr=$row['addr'];
            $f_tel=$row['f_tel'];
            $f_fax=$row['f_fax'];
            $f_email=$row['f_email'];
            $f_addr=$row['f_addr'];
            ?>
            <div class="sub_map">
                <?php echo $map?>
            </div>
            <div class="map_contents">
                <div class="left">
                    <h3>본사 주소</h3>
                    <div>
                        <h4>TEL</h4>
                        <p><?php echo $tel?></p>
                    </div>
                    <div>
                        <h4>FAX</h4>
                        <p><?php echo $fax?></p>
                    </div>
                    <div>
                        <h4>E-MAIL</h4>
                        <p><?php echo $email?></p>
                    </div>
                    <div>
                        <h4>ADDRESS</h4>
                        <p><?php echo $addr?></p>
                    </div>
                </div>
                <div class="right">
                    <h3>공장 주소</h3>
                    <div>
                        <h4>TEL</h4>
                        <p><?php echo $f_tel?></p>
                    </div>
                    <div>
                        <h4>FAX</h4>
                        <p><?php echo $f_fax?></p>
                    </div>
                    <div>
                        <h4>E-MAIL</h4>
                        <p><?php echo $f_email?></p>
                    </div>
                    <div>
                        <h4>ADDRESS</h4>
                        <p><?php echo $f_addr?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

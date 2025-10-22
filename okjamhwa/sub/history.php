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
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;회사소개&nbsp;&nbsp;&#62;&nbsp;&nbsp;연혁</p>
        </div>
    </section>
    <section class="history sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>회사소개</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/introduce.php">인사말</a>
                <a href="../sub/organization.php">조직도</a>
                <a href="../sub/history.php" class="on">연혁</a>
                <a href="../sub/vision.php">비전</a>
                <a href="../sub/certification.php">인증서</a>
                <a href="../sub/map.php">오시는 길</a>
            </div>
            <a href="<?php echo $store?>" target="_blank" class="store flex_menu">
                <p>스토어 바로가기</p>
                <img src="../img/icon-shop.png" alt="스토어 바로가기">
            </a>
            <a href="../sub/estimate.php" class="ques flex_menu">
                <p>견적 문의</p>
                <img src="../img/icon-q.png" alt="견적 문의 바로가기">
            </a>
        </div>
        <div class="inner900">
            <h2>연혁</h2>
            <?php
            $sql="SELECT DISTINCT DATE_FORMAT(`datetime`, '%Y') AS `year` FROM history ORDER BY `datetime` ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $year=$row['year'];
            ?>
            <div class="history_contents">
                <h2><?php echo $year?></h2>
                <div class="right">
                    <div class="content">
                        <?php
                        $ySql="SELECT * FROM history WHERE DATE_FORMAT(`datetime`, '%Y')='$year' ORDER BY `datetime` ASC";
                        $yRes=mysqli_query($conn, $ySql);
                        while($yRow=mysqli_fetch_array($yRes)){
                            $title=$yRow['title'];
                        ?>
                        <h3><?php echo $title?></h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

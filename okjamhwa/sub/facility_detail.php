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
    $header="facility";
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
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;시설 설비&nbsp;&nbsp;&#62;&nbsp;&nbsp;설비안내</p>
        </div>
    </section>
    <section class="plant sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>시설 설비</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/plant.php">시설안내</a>
                <a href="../sub/facility.php" class="on">설비안내</a>
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
        <div class="inner950">
            <?php
            $num=$_GET['num'];

            $hSql="UPDATE facility SET hit=hit+1 WHERE num='$num'";
            $hRes=mysqli_query($conn, $hSql);

            $sql="SELECT * FROM facility WHERE num='$num'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $title=$row['title'];
            $contents=$row['contents'];
            ?>
            <h2><?php echo $title?></h2>
            <div class="plant_post">
                <!-- <img src="../img/first-slide01.png" alt=""> -->
                <?php echo $contents?>
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

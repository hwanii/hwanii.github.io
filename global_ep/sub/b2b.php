<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_work.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>B2C to B2B</h2>
            <p>
                글로벌이피의 B2C to B2B 서비스는 기업들이 소비자(B2C) 시장으로부터 비즈니스(B2B) 시장으로 진출하고자 할 때 지원하는 서비스입니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>WORK</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>B2B &amp; B2C</h2>
        </div>
    </section>
    <section class="influencer">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>B2B &amp; B2C</h2>
                <p>
                    기업들은 기존의 소비자 중심의 비즈니스 모델에서<br><b>새로운 비즈니스 파트너와 거래를 맺어 B2B 시장에서도 성장할 수 있습니다.</b>
                </p>
            </div>
            <div class="work_marketing">
                <?php
                $sql="SELECT * FROM work_bab";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                ?>
                <div data-aos="fade-up">
                    <img src="../img/work_bab/<?php echo $row['thumb1'];?>" class="work_img">
                    <!-- <h2><?php echo $row['title1']?></h2> -->
                    <h2>이커머스 채널을 통한 B2C 작업</h2>
                    <p><?php echo $row['contents1']?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/work_bab/<?php echo $row['thumb2'];?>" class="work_img">
                    <!-- <h2><?php echo $row['title2']?></h2> -->
                    <h2>알리바바닷컴을 통한 B2B 작업</h2>
                    <p><?php echo $row['contents2']?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/work_bab/<?php echo $row['thumb3'];?>" class="work_img">
                    <!-- <h2><?php echo $row['title3']?></h2> -->
                    <h2>B2C to B2B 연계작업 서비스</h2>
                    <p><?php echo $row['contents3']?></p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

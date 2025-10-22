<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner02">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option value="../sub/car_transport.php">자동차 부품 운송</option>
                <option value="../sub/steel_transport.php">철강 운송</option>
                <option selected value="../sub/car_processing.php">자동차 부품 가공</option>
                <option value="../sub/distribution.php">3PL 물류</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>사업 분야</li>
                <li>자동차 부품 가공</li>
            </ul>
        </div>
    </section>
    <section class="car_transport">
        <div class="inner contents_inner">
            <div class="sub_title">
                <h2>자동차 부품 가공</h2>
            </div>
            <?php
            $sql="SELECT * FROM business WHERE `type`='processing'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $contents=$row['contents'];
            $thumb1=$row['thumb1'];
            $thumb2=$row['thumb2'];
            $thumb3=$row['thumb3'];
            $thumb4=$row['thumb4'];
            ?>
            <p class="business_content">
                <?php echo $contents?>
            </p>
            <div class="contents business_contents">
                <img src="../img/business/<?php echo $thumb1?>" alt="">
                <img src="../img/business/<?php echo $thumb2?>" alt="">
                <img src="../img/business/<?php echo $thumb3?>" alt="">
                <img src="../img/business/<?php echo $thumb4?>" alt="">
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

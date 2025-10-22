<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub02">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>PLATFORM</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;PLATFORM&nbsp;&nbsp;>&nbsp;&nbsp;VENDOR</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li><a href="../sub/platform.php">PLATFORM</a></li>
            <li class="on"><a href="../sub/vendor.php">VENDOR</a></li>
            <li><a href="../sub/customer.php">CUSTOMER</a></li>
        </ul>
    </div>
    <section class="vendor">
        <div class="title-txt">
            <h2>VENDOR</h2>
            <p>VENDOR 소개입니다.</p>
        </div>
        <div class="contents">
            <h2 class="plat-h2-w">VENDOR 업체 현황</h2>
            <div class="ven-map">
                <img src="../img/platform-vendor03.png" alt="">
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map01.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map02.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map03.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map04.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map05.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map06.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map07.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map08.png" alt="">
                </div>
                <div>
                    <img src="../img/platform-vendor-point01.png" alt="" class="scale-updown">
                    <img src="../img/map09.png" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-container vendor-slide">
            <div class="swiper-wrapper">
                <?php
                $sql="SELECT * FROM bo_vendor ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $thumb=$row['thumbnail'];
                ?>
                <div class="swiper-slide">
                    <img src="../img/vendor/<?php echo $thumb?>" alt="">
                </div>
                <?php } ?>
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

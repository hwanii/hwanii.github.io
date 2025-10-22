<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt-box">
            <img src="../img/slide-logo.png" alt="">
            <h2>마음 속, 편안한 숲을<br>가꾸어 드립니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;센터소개&nbsp;&nbsp;>&nbsp;&nbsp;시설안내</p>
        </div>
    </section>
    <div class="sub_title">
        <h2>시설안내</h2>
        <p>FOREST CLINIC FACILITY</p>
    </div>
    <div class="imagee" id="imagee">
        <div class="gallery-box">
            <!-- main slider -->
            <div class="gallery-main-box gallery-main-swiper swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $sql="SELECT * FROM bo_facility ORDER BY num ASC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <div class="swiper-slide">
                        <p class="info-img object-fit"><img src="../img/facility/<?php echo $thumb?>" alt=""></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="floor1-prev floor-prev1"><img src="../img/big-slide-left-arrow.png" alt=""></div>
            <div class="floor1-next floor-next1"><img src="../img/big-slide-right-arrow.png" alt=""></div>
            <!-- // main slider -->
            <!-- thumbnail slider -->
            <div class="gallery-thumb-box gallery-thumb-swiper swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $sql="SELECT * FROM bo_facility ORDER BY num ASC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <div class="swiper-slide">
                        <p class="info-img object-fit"><img src="../img/facility/<?php echo $thumb?>" alt=""></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="floor2-prev floor-prev2"><img src="../img/small-slide-left-arrow.png" alt=""></div>
            <div class="floor2-next floor-next2"><img src="../img/small-slide-right-arrow.png" alt=""></div>
            <!-- // thumbnail slider -->
        </div>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

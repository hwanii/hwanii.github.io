<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="font/font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="swiper-container mainBg">
        <div class="swiper-wrapper">
            <?php
            $sql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $contents=$row['contents'];
                $movie=$row['background'];
            ?>
            <div class="swiper-slide">
                <video id="vid" autoplay="autoplay" muted="muted" loop playsinline>
                    <source src="./admin/img/background/<?php echo $movie?>" type="video/mp4">
                </video>
                <div class="bg"></div>
                <div class="txt_box">
                    <img src="img/logo.png" alt="">
                    <h2><?php echo $title?></h2>
                    <p><?php echo $contents?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-btn-prev"><img src="img/left_arrow.png" alt=""></div>
        <div class="swiper-btn-next"><img src="img/left_arrow.png" alt=""></div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

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
    include '../header.php';
    $sql="SELECT * FROM vr_coding WHERE area='coding'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner10">
        <div class="txt_inner">
            <div class="left">
                <?php echo $row['area1'];?>
            </div>
            <img class="right" src="../img/vr01.png" alt="">
        </div>
    </section>
    <div class="movie">
        <?php echo $row['movie']?>
    </div>
    <section class="coding" data-aos="fade-up">
        <div class="inner">
            <div class="title">
                <?php echo $row['area2'];?>
            </div>
            <div class="description" data-aos="fade-up">
                <?php echo $row['area3'];?>
            </div>
            <div class="description" data-aos="fade-up">
                <?php echo $row['area4'];?>
            </div>
            <div class="coding_img" data-aos="fade-up">
                <img src="../img/vr_coding/coding/<?php echo $row['img_1']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_2']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_3']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_4']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_5']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_6']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_7']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_8']?>" alt="">
                <img src="../img/vr_coding/coding/<?php echo $row['img_9']?>" alt="">
            </div>
            <div class="why_vr" data-aos="fade-up">
                <?php echo $row['area5'];?>
            </div>
            <div class="vr_effect" data-aos="fade-up">
                <?php echo $row['area6'];?>
                <img src="../img/coding001.png" alt="">
            </div>
            <div class="product_check" data-aos="fade-up">
                <?php echo $row['area7'];?>
                <div>
                    <img src="../img/vr_coding/coding/<?php echo $row['img_10']?>" alt="">
                    <img src="../img/vr_coding/coding/<?php echo $row['img_11']?>" alt="">
                    <img src="../img/vr_coding/coding/<?php echo $row['img_12']?>" alt="">
                    <img src="../img/vr_coding/coding/<?php echo $row['img_13']?>" alt="">
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

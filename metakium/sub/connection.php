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
    $sql="SELECT * FROM class_vr WHERE area='plan'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner09">
        <div class="bg"></div>
        <div class="txt_inner">
            <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="connection" data-aos="fade-up">
        <div class="inner">
            <?php echo $row['area2'];?>
            <div class="contents01" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_1']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_2']?>" alt="">
            </div>
            <?php echo $row['area3'];?>
            <div class="contents02" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_3']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_4']?>" alt="">
            </div>
            <h2 data-aos="fade-up">과학 학습계획서</h2>
            <div class="contents03" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_5']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_6']?>" alt="">
            </div>
            <h2 data-aos="fade-up">사회 학습계획서</h2>
            <div class="contents04" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_7']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_8']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_9']?>" alt="">
            </div>
            <?php echo $row['area4'];?>
            <div class="contents05" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_10']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_11']?>" alt="">
            </div>
            <?php echo $row['area5'];?>
            <div class="contents06" data-aos="fade-up">
                <img src="../img/class_vr/plan/<?php echo $row['img_12']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_13']?>" alt="">
                <img src="../img/class_vr/plan/<?php echo $row['img_14']?>" alt="">
            </div>
            <div class="movie00">
                <?php echo $row['movie'];?>
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

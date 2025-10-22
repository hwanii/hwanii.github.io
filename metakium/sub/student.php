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
    $sql="SELECT * FROM class_vr WHERE area='program'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner06">
        <div class="bg"></div>
        <div class="txt_inner">
                <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="student" data-aos="fade-up">
        <div class="inner">
            <?php echo $row['area2'];?>
            <img data-aos="fade-up" src="../img/class_vr/program/<?php echo $row['img_1']?>" alt="">
            <?php echo $row['area3'];?>
            <div class="inner_video" data-aos="fade-up" style="margin-bottom: 150px">
                <?php echo $row['area6'];?>
            </div>
            <?php echo $row['area4'];?>
            <div class="inner_video" data-aos="fade-up" style="margin-bottom: 150px">
                <?php echo $row['area7'];?>
            </div>
            <?php echo $row['area5'];?>
            <img data-aos="fade-up" src="../img/class_vr/program/<?php echo $row['img_2']?>" alt="">
        </div>
        <div class="movie01">
            <?php echo $row['movie'];?>
        </div>
        <!-- <video class="vr_video" playsinline controls loop muted autoplay>
            <source src="https://www.classvr.co.kr/wp-content/uploads/2022/08/An-Overview-Of-Classvr-Korean-August-2022.m4v" type="video/mp4">
        </video> -->
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

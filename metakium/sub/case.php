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
    $sql="SELECT * FROM vr_coding WHERE area='case'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <div class="viedo_youtube">
        <?php echo $row['area1'];?>
    </div>
    <div class="case">
        <div class="inner">
            <h2 data-aos="fade-up">유튜브 영상</h2>
            <div class="inner_video" data-aos="fade-up">
                <?php echo $row['area2'];?>
            </div>
            <div class="inner_video" data-aos="fade-up" style="margin-top: 40px">
                <?php echo $row['area3'];?>
            </div>
            <h2 data-aos="fade-up">쿠링 VR 콘텐츠 화면</h2>
            <div class="contents" data-aos="fade-up">
                <img src="../img/vr_coding/case/<?php echo $row['img_1']?>" alt="">
                <img src="../img/vr_coding/case/<?php echo $row['img_2']?>" alt="">
            </div>
            <h2 data-aos="fade-up">쿠링 VR 활용 사례</h2>
            <div class="case_ex" data-aos="fade-up">
                <img src="../img/vr_coding/case/<?php echo $row['img_3']?>" alt="">
                <img src="../img/vr_coding/case/<?php echo $row['img_4']?>" alt="">
                <img src="../img/vr_coding/case/<?php echo $row['img_5']?>" alt="">
            </div>
        </div>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

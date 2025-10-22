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
    $sql="SELECT * FROM class_vr WHERE area='intro'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner02">
        <div class="bg"></div>
        <div class="txt_inner">
            <div class="left">
                <?php echo $row['area1'];?>
            </div>
            <img src="../img/class_vr01.png" alt="">
        </div>
    </section>
    <section class="sub-banner sub-banner03" style="margin-top:0">
        <div class="bg"></div>
        <div class="txt_inner">
            <div class="left">
                <?php echo $row['area2'];?>
            </div>
            <img src="../img/class_vr02.png" alt="">
        </div>
    </section>
    <section class="class_vr">
        <div class="contents" data-aos="fade-up">
            <div class="left"><img src="../img/icon_class_vr01.png" alt=""></div>
            <div class="right">
                <?php echo $row['area3'];?>
            </div>
        </div>
        <div class="contents" data-aos="fade-up">
            <div class="left"><img src="../img/icon_class_vr02.png" alt=""></div>
            <div class="right">
                <?php echo $row['area4'];?>
            </div>
        </div>
        <div class="contents" data-aos="fade-up">
            <div class="left"><img src="../img/icon_class_vr03.png" alt=""></div>
            <div class="right">
                <?php echo $row['area5'];?>
            </div>
        </div>
    </section>
    <div class="movie01">
        <?php echo $row['movie'];?>
    </div>
    <!-- <video class="vr_video" playsinline controls loop muted autoplay>
        <source src="https://www.classvr.co.kr/wp-content/uploads/2022/08/An-Overview-Of-Classvr-Korean-August-2022.m4v" type="video/mp4">
    </video> -->
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

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
    $sql="SELECT * FROM class_vr WHERE area='headset'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner04">
        <div class="bg"></div>
        <div class="txt_inner">
            <div class="left">
                <?php echo $row['area1'];?>
            </div>
            <img src="../img/class_vr01.png" alt="">
        </div>
    </section>
    <section class="headset" data-aos="fade-up">
        <img src="../img/logo.png" alt="">
        <h2>프리미엄 헤드셋</h2>
        <div class="contents" data-aos="fade-up">
            <div class="left">
                <img src="../img/icon_class_vr04.png" alt="">
            </div>
            <div class="right">
                <?php echo $row['area2'];?>
            </div>
        </div>
        <div class="contents" data-aos="fade-up">
            <div class="left">
                <img src="../img/icon_class_vr05.png" alt="">
            </div>
            <div class="right">
                <?php echo $row['area3'];?>
            </div>
        </div>
        <div class="contents" data-aos="fade-up">
            <div class="left">
                <img src="../img/icon_class_vr06.png" alt="">
            </div>
            <div class="right">
                <?php echo $row['area4'];?>
            </div>
        </div>
        <div class="contents" data-aos="fade-up">
            <div class="left">
                <img src="../img/icon_class_vr07.png" alt="">
            </div>
            <div class="right">
                <?php echo $row['area5'];?>
            </div>
        </div>
    </section>
    <section class="sub-banner sub-banner05">
        <div class="txt_inner">
                <?php echo $row['area6'];?>
            <img src="../img/class_vr03.png" alt="">
            <h3>ClassVR 프리미엄 헤드셋 : 기술 사양</h3>
            <div class="contents">
                <div class="left">
                <?php echo $row['area7'];?>
                </div>
                <div class="right">
                <?php echo $row['area8'];?>
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

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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;센터소개&nbsp;&nbsp;>&nbsp;&nbsp;의료진 소개</p>
        </div>
    </section>
    <section class="doctor">
        <div class="inner">
            <div class="sub_title">
                <h2>의료진 소개</h2>
                <p>CLINIC MEMBERS</p>
            </div>
            <h3>의료진 안내</h3>
            <div class="contents">
                <?php
                $sql="SELECT * FROM staff WHERE `type`='의료진'";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $name=$row['name'];
                    $thumbnail=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="../sub/doctor_detail.php?num=<?php echo $num?>">
                    <div class="img-box"><img src="../img/staff/<?php echo $thumbnail?>" alt=""></div>
                    <div class="txt-box">
                        <h2><?php echo $name?> <span>원장님</span></h2>
                        <img src="../img/icon-doctor.png" alt="">
                    </div>
                </a>
                <?php } ?>
            </div>
            <h3 class="mt60">치료진 안내</h3>
            <div class="contents">
                <?php
                $sql="SELECT * FROM staff WHERE `type`='치료진'";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $name=$row['name'];
                    $thumbnail=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="../sub/doctor_detail.php?num=<?php echo $num?>">
                    <div class="img-box"><img src="../img/staff/<?php echo $thumbnail?>" alt=""></div>
                    <div class="txt-box ex_color">
                        <h2><?php echo $name?> <span>상담사</span></h2>
                        <img src="../img/icon-doctor.png" alt="">
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

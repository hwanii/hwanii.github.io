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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;센터소개&nbsp;&nbsp;>&nbsp;&nbsp;인사말</p>
        </div>
    </section>
    <section class="introduce">
        <div class="inner">
            <div class="sub_title">
                <h2>인사말</h2>
                <p>INTRODUCE</p>
            </div>
            <div class="contents">
                <div class="left"><img src="../img/intro.png" alt=""></div>
                <div class="right">
                    <?php
                    $sql="SELECT * FROM greeting";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    echo $row['sub_contents'];
                    ?>
                    <div>
                        <img src="../img/signature.png" alt="">
                        <p>선릉숲 정신건강의학과 원장</p>
                    </div>
                    <img src="../img/logo.png" alt="">
                </div>
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

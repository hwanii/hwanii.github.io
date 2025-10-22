<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="sub_banner" style="background: url(../img/sub-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="inner"><img src="../img/sub-banner-txt.png"></div>
    </div>
    <div class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;인사말</p>
        </div>
    </div>
    <section class="intro">
        <div class="inner">
            <?php
            $sql="SELECT * FROM greeting";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            echo $row['contents'];
            ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

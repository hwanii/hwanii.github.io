<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner01">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option selected value="../sub/introduction.php">인사말</option>
                <option value="../sub/history.php">연혁</option>
                <option value="../sub/map.php">오시는 길</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>대원 로지스틱</li>
                <li>인사말</li>
            </ul>
        </div>
    </section>
    <?php
    $sql="SELECT * FROM greeting";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $contents=$row['contents'];
    $thumb1=$row['thumb1'];
    $thumb2=$row['thumb2'];
    $thumb3=$row['thumb3'];
    ?>
    <section class="introduction">
        <div class="inner contents_inner">
            <div class="left">
                <div class="sub_title">
                    <h2>
                        <?php echo $title?>
                    </h2>
                </div>
                <p>
                    <?php echo $contents;?>
                </p>
            </div>
            <div class="right">
                <img src="../img/greeting/<?php echo $thumb1?>" alt="">
                <img src="../img/greeting/<?php echo $thumb2?>" alt="">
                <img src="../img/greeting/<?php echo $thumb3?>" alt="">
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

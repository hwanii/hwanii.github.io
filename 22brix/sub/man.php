<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="performance">
        <div class="inner">
            <div class="title">
                <ul class="performance_cate01">
                    <li><a href="../sub/about.php">About</a></li>
                    <li class="on"><a href="../sub/man.php">Man Power</a></li>
                    <li><a href="../sub/map.php">Location</a></li>
                </ul>
            </div>
            <?php
            $mSql="SELECT * FROM icon";
            $mRes=mysqli_query($conn, $mSql);
            $mRow=mysqli_fetch_array($mRes);
            $contents=$mRow['contents'];
            $icon1=$mRow['icon1'];
            $icon1_tit=$mRow['icon1_tit'];
            $icon2=$mRow['icon2'];
            $icon2_tit=$mRow['icon2_tit'];
            $icon3=$mRow['icon3'];
            $icon3_tit=$mRow['icon3_tit'];
            $icon4=$mRow['icon4'];
            $icon4_tit=$mRow['icon4_tit'];
            $icon5=$mRow['icon5'];
            $icon5_tit=$mRow['icon5_tit'];
            $icon6=$mRow['icon6'];
            $icon6_tit=$mRow['icon6_tit'];
            ?>
            <div class="detail_title">
                <h2>
                    <?php echo $contents?>
                </h2>
            </div>
            <div class="man_circle">
                <div><img src="../img/man-logo01.png" alt=""></div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon1?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon1_tit?></h2>
                </div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon2?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon2_tit?></h2>
                </div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon3?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon3_tit?></h2>
                </div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon4?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon4_tit?></h2>
                </div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon5?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon5_tit?></h2>
                </div>
                <div>
                    <p style="background: url('../img/icon/<?php echo $icon6?>') no-repeat center/cover;"></p>
                    <h2><?php echo $icon6_tit?></h2>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub01">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>COMPANY</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMPANY&nbsp;&nbsp;>&nbsp;&nbsp;오시는 길</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li><a href="../sub/company.php">회사소개</a></li>
            <li><a href="../sub/history.php">HISTORY</a></li>
            <li class="on"><a href="../sub/map.php">오시는 길</a></li>
        </ul>
    </div>
    <section class="map">
        <div class="title-txt">
            <h2>오시는 길</h2>
            <p>오시는 길 안내입니다.</p>
        </div>
        <?php
        $sql="SELECT * FROM map";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $osan_map=$row['osan_map'];
        $osan_addr=$row['osan_addr'];
        $osan_tel=$row['osan_tel'];
        $h_map=$row['h_map'];
        $h_addr=$row['h_addr'];
        $h_tel=$row['h_tel'];
        ?>
        <div class="inner">
            <div class="contents">
                <h2>오산 본사</h2>
                <div class="map_contents">
                    <?php echo $osan_map?>
                </div>
                <div class="txt-box">
                    <div>
                        <img src="../img/location-info1.png" alt="">
                        <p><?php echo $osan_addr?></p>
                    </div>
                    <div>
                        <img src="../img/location-info2.png" alt="">
                        <div>
                            <p><?php echo $osan_tel?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents">
                <h2>화성 공장</h2>
                <div class="map_contents">
                    <?php echo $h_map?>
                </div>
                <div class="txt-box">
                    <div>
                        <img src="../img/location-info1.png" alt="">
                        <p><?php echo $h_addr?></p>
                    </div>
                    <div style="<?php echo ($h_tel) ? "display:block" : "display:none"?>">
                        <img src="../img/location-info2.png" alt="">
                        <div>
                            <p><?php echo $h_tel?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line_v"></div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

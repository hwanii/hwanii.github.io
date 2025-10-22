<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="main_bg">
        <div class="swiper-container main_slide">
            <div class="swiper-wrapper">
                <?php
                $mSql="SELECT * FROM slide WHERE `type`='main' ORDER BY `number` ASC";
                $mRes=mysqli_query($conn, $mSql);
                while($mRow=mysqli_fetch_array($mRes)){
                    $mThumb=$mRow['background'];
                ?>
                <div class="swiper-slide" style="background: url('./img/slide/<?php echo $mThumb?>') no-repeat center/cover;">
                    <div class="bg"></div>
                    <div class="txt_box">
                        <h2><?php echo $mRow['title'];?></h2>
                        <p><?php echo $mRow['contents'];?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="main_page_inner">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="business">
        <div class="inner">
            <div class="title">
                <h2>사업분야</h2>
                <p>옥잠화영농조합 법인에서는 친환경 농산물과<br>유기농 재료로 정성껏 제품을 만들고 있습니다.</p>
            </div>
            <div class="business_contents">
                <a href="sub/production.php">
                    <div class="bg"></div>
                    <div class="txt_box">
                        <h2>친환경<br>제품생산</h2>
                        <p>직접 생산한 딸기로 만드는<br>친환경 제품을 판매하고 있습니다.</p>
                        <img src="img/next-btn.png" alt="">
                    </div>
                </a>
                <a href="sub/oem.php">
                    <div class="bg"></div>
                    <div class="txt_box">
                        <h2>OEM<br>위탁생산</h2>
                        <p>직접 생산한 딸기로 만드는<br>친환경 제품을 판매하고 있습니다.</p>
                        <img src="img/next-btn.png" alt="">
                    </div>
                </a>
                <a href="sub/jam.php">
                    <div class="bg"></div>
                    <div class="txt_box">
                        <h2>직영농장<br>운영</h2>
                        <p>직접 생산한 딸기로 만드는<br>친환경 제품을 판매하고 있습니다.</p>
                        <img src="img/next-btn.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="honesty">
        <div class="title">
            <h2>느리지만, 손으로<br>직접 정성을 담습니다.</h2>
            <p></p>
            <div class="honesty_btn">
                <img src="img/prev-btn.png" alt="" class="prev01">
                <img src="img/next-btn.png" alt="" class="next01">
            </div>
        </div>
        <div class="swiper-container honesty_slide">
            <div class="swiper-wrapper">
                <?php
                $miSql="SELECT * FROM slide WHERE `type`='middle' ORDER BY `number` ASC";
                $miRes=mysqli_query($conn, $miSql);
                while($miRow=mysqli_fetch_array($miRes)){
                    $miThumb=$miRow['background'];
                ?>
                <a href="javascript:void(0)" class="swiper-slide" style="background: url('./img/slide/<?php echo $miThumb?>') no-repeat center/cover;">
                    <div class="bg"></div>
                    <p><?php echo $miRow['contents'];?></p>
                </a>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="inner">
            <div class="title">
                <h2>제품 안내</h2>
                <p>옥잠화영농조합 법인에서는 친환경 농산물과<br>유기농 재료로 정성껏 제품을 만들고 있습니다.</p>
            </div>
            <div class="slide_inner">
                <div class="swiper-container product_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM jam UNION ALL SELECT * FROM juice UNION ALL SELECT * FROM tea ORDER BY num ASC";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $pro_type=$row['pro_type'];
                            $title=$row['title'];
                            $thumb=$row['thumb'];
                            $num=$row['num'];
                        ?>
                        <div class="swiper-slide">
                            <p><?php echo $title?></p>
                            <img src="img/<?php echo $pro_type?>/<?php echo $thumb?>" alt="">
                            <a href="sub/<?php echo $pro_type?>_detail.php?num=<?php echo $num?>">상세보기</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="product_btn">
                    <img src="img/prev-btn-color.png" alt="" class="prev02">
                    <img src="img/next-btn-color.png" alt="" class="next02">
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="inner">
            <h2>홍보 영상 보기</h2>
            <div>
                <?php
                $vSql="SELECT * FROM information";
                $vRes=mysqli_query($conn, $vSql);
                $vRow=mysqli_fetch_array($vRes);
                echo $vRow['movie'];
                ?>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="inner">
            <h2>오시는 길</h2>
            <div class="main_map">
                <?php
                $pSql="SELECT * FROM map";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $map=$pRow['map'];
                echo $map;
                ?>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

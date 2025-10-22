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
    $sql="SELECT * FROM xr_contents WHERE area='contents'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner13">
        <div class="bg"></div>
        <div class="txt_inner">
            
        </div>
    </section>
    <section class="vr_contents">
        <div class="inner" data-aos="fade-up">
            <h2>VR콘텐츠</h2>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area1']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_1']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_2']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_3']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_4']?>" alt="">
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area2']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_5']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_6']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_7']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_8']?>" alt="">
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area3']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_9']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_10']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_11']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_12']?>" alt="">
                </div>
            </div>
            <!-- <div class="contents" data-aos="fade-up">
                <h3>장바구니에 담긴 영양소</h3>
                <p>
                    생명유지에 필요한 3대 영양소의 종류와 기능을 이해하고,<br>
                    건강한 식습관을 형성해 보자!
                </p>
                <div>
                    <img src="../img/vr_contents13.png" alt="">
                    <img src="../img/vr_contents14.png" alt="">
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <h3>VR</h3>
                <p>
                    다양한 식품의 무게 측정하기<br>
                    VR로 진행되는 장보기 시뮬레이션
                </p>
                <div>
                    <img src="../img/vr_contents15.png" alt="">
                    <img src="../img/vr_contents16.png" alt="">
                </div>
            </div> -->
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area4']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_13']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_14']?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="ar_contents" data-aos="fade-up">
        <div class="inner">
            <h2>AR콘텐츠</h2>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area5']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_15']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_16']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_17']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_18']?>" alt="">
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area6']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_19']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_20']?>" alt="">
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <?php echo $row['area7']?>
                <div>
                    <img src="../img/xr_contents/contents/<?php echo $row['img_21']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_22']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_23']?>" alt="">
                    <img src="../img/xr_contents/contents/<?php echo $row['img_24']?>" alt="">
                </div>
            </div>
            <!-- <div class="contents" data-aos="fade-up">
                <h3>피부의 구조와 기능</h3>
                <p>
                    피부를 AR로 입체적으로 보며<br>
                    구조를 학습 할 수 있는 콘텐츠
                </p>
                <div>
                    <img src="../img/ar11.png" alt="">
                    <img src="../img/ar12.png" alt="">
                </div>
            </div> -->
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

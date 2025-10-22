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
            <?php
            $sql="SELECT * FROM commerce WHERE `type`='agencies'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $contents=$row['contents'];
            $img1=$row['img1'];
            $img1_tit=$row['img1_tit'];
            $img1_contents=$row['img1_contents'];
            $img1_link=$row['img1_link'];
            $img2=$row['img2'];
            $img2_tit=$row['img2_tit'];
            $img2_contents=$row['img2_contents'];
            $img2_link=$row['img2_link'];
            $img3=$row['img3'];
            $img3_tit=$row['img3_tit'];
            $img3_contents=$row['img3_contents'];
            $img3_link=$row['img3_link'];
            ?>
            <div class="title">
                <ul class="performance_cate cate01">
                    <li class="on"><a href="../sub/commerce.php">운영 대행</a></li>
                    <li><a href="../sub/commerce01.php">교육 및 컨설팅</a></li>
                </ul>
                <p>
                    <?php echo $contents?>
                </p>
            </div>
            <div class="col_contents00">
                <div>
                    <img src="../img/commerce/agencies/<?php echo $img1?>" alt="">
                    <div>
                        <h3><?php echo $img1_tit?></h3>
                        <p>
                        <?php echo $img1_contents?>
                        </p>
                    </div>
                    <a href="<?php echo $img1_link?>">성공<br>사례</a>
                </div>
                <div>
                    <img src="../img/commerce/agencies/<?php echo $img2?>" alt="">
                    <div class="center">
                        <h3><?php echo $img2_tit?></h3>
                        <p>
                        <?php echo $img2_contents?>
                        </p>
                    </div>
                    <a href="<?php echo $img2_link?>">성공<br>사례</a>
                </div>
                <div class="position_re01">
                    <img src="../img/commerce/agencies/<?php echo $img3?>" alt="">
                    <div class="center">
                        <h3><?php echo $img3_tit?></h3>
                        <p>
                        <?php echo $img3_contents?>
                        </p>
                    </div>
                    <a href="<?php echo $img3_link?>">성공<br>사례</a>
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

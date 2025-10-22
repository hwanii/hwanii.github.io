<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_work.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GLOBALIZATION</h2>
            <p>
                글로벌이피는 이커머스, 유통망 구축, 현지화 전략을 활용하여 기업들의 글로벌라이제이션을 지원합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>WORK</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>글로벌라이제이션</h2>
        </div>
    </section>
    <section class="work">
        <div class="inner960">
            <div class="inner_title" data-aos="fade-up">
                <h2>글로벌라이제이션</h2>
                <p>기업들이 국제 시장에 진출하여 비즈니스를 확장하고 글로벌 시장에서 경쟁력을 확보하는 전략입니다.<br><b>이를 위해 글로벌이피는 다양한 서비스를 제공하여 기업들이 글로벌 시장에 성공적으로 진출할 수 있도록 도와줍니다.</b></p>
            </div>
            <div class="work_marketing">
                <?php
                $sql="SELECT * FROM work_marketing";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $contents1=$row['contents1'];
                $contents2=$row['contents2'];
                $contents3=$row['contents3'];
                $contents4=$row['contents4'];
                $contents5=$row['contents5'];
                $thumb1=$row['thumb1'];
                $thumb2=$row['thumb2'];
                $thumb3=$row['thumb3'];
                $thumb4=$row['thumb4'];
                $thumb5=$row['thumb5'];
                ?>
                <div data-aos="fade-up">
                    <img src="../img/global/<?php echo $thumb1?>" class="work_img">
                    <h2>이커머스</h2>
                    <p><?php echo nl2br($contents1)?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/global/<?php echo $thumb2?>" class="work_img">
                    <h2>유통망 구축</h2>
                    <p><?php echo nl2br($contents2)?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/global/<?php echo $thumb3?>" class="work_img">
                    <h2>현지화 전략</h2>
                    <p><?php echo nl2br($contents3)?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/global/<?php echo $thumb4?>" class="work_img">
                    <h2>온라인 마이스/전시회</h2>
                    <p><?php echo nl2br($contents4)?></p>
                </div>
                <div data-aos="fade-up">
                    <img src="../img/global/<?php echo $thumb5?>" class="work_img">
                    <h2>글로벌 소싱</h2>
                    <p><?php echo nl2br($contents5)?></p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>
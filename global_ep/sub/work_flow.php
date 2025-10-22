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
    <section class="sub_banner" style="background: url(../img/sub_busi.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>PROCESS</h2>
            <p>
                컨설팅, 마케팅, 유통 등 다방면의 온라인 B2C&B2B를<br>CBT → 현지화 순서의 서비스로 진행해드립니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>업무흐름도</h2>
        </div>
    </section>
    <section class="work_flow">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>PROCESS</h2>
            </div>
            <?php
            $sql="SELECT * FROM flow";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb1']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title1'];?></h2>
                    <p><?php echo $row['contents1']?></p>
                </div>
            </div>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb2']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title2'];?></h2>
                    <p><?php echo $row['contents2']?></p>
                </div>
            </div>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb3']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title3'];?></h2>
                    <p><?php echo $row['contents3']?></p>
                </div>
            </div>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb4']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title4'];?></h2>
                    <p><?php echo $row['contents4']?></p>
                </div>
            </div>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb5']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title5'];?></h2>
                    <p><?php echo $row['contents5']?></p>
                </div>
            </div>
            <div class="work_flow_contents" data-aos="fade-up">
                <img src="../img/flow/<?php echo $row['thumb6']?>">
                <div class="txt_box">
                    <h2><?php echo $row['title6'];?></h2>
                    <p><?php echo $row['contents6']?></p>
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

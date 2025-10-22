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
            <h2>정부지원사업</h2>
            <p>
                글로벌이피의 정부지원사업은 기업들이 글로벌 시장으로 진출하고 성장할 수 있도록 다양한 분야에서 전문적인 지원을 제공하는 프로그램입니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>WORK</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>정부지원사업</h2>
        </div>
    </section>
    <section class="work">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>정부지원사업</h2>
                <p>
                    글로벌이피의 정부지원사업은 다양한 분야에서<br>
                    기업들의 글로벌 시장 진출을 지원하고 경쟁력을 강화하는데 큰 역할을 합니다.<br>
                    이를 통해 <b>기업들은 글로벌 시장에서 성공적인 비즈니스를 이뤄낼 수 있습니다.</b>
                </p>
            </div>
            <div class="government">
                <?php
                $sql="SELECT * FROM work_government";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                ?>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/work_government/<?php echo $row['thumb1']?>">
                    <div class="right">
                        <h2><?php echo $row['title1']?></h2>
                        <p><?php echo $row['contents1']?></p>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/work_government/<?php echo $row['thumb2']?>">
                    <div class="right">
                        <h2><?php echo $row['title2']?></h2>
                        <p><?php echo $row['contents2']?></p>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/work_government/<?php echo $row['thumb3']?>">
                    <div class="right">
                        <h2><?php echo $row['title3']?></h2>
                        <p><?php echo $row['contents3']?></p>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/work_government/<?php echo $row['thumb4']?>">
                    <div class="right">
                        <h2><?php echo $row['title4']?></h2>
                        <p><?php echo $row['contents4']?></p>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/work_government/<?php echo $row['thumb5']?>">
                    <div class="right">
                        <h2><?php echo $row['title5']?></h2>
                        <p><?php echo $row['contents5']?></p>
                    </div>
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

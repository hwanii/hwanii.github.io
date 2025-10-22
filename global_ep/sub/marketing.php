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
            <h2>MARKETING</h2>
            <p>
                글로벌이피는 ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를<br>향상시키는데 기여합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>마케팅</h2>
        </div>
    </section>
    <section class="consulting">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>MARKETING</h2>
                <p>
                    인플루언서 마케팅, 페이스북/틱톡 광고, 판매 시딩, 인플루언서 샵 입점 및 홍보,<br class="mark_br"> 인스타그램/페이스북/틱톡 운영 등 다양한 온 오프라인 마케팅 서비스를 제공하고 있습니다.
                </p>
            </div>
            <div class="solution">
                <div class="solution_box">
                    <?php
                    $sql="SELECT * FROM marketing";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    ?>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb1']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title1']?></h2>
                            <p><?php echo $row['contents1']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb2']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title2']?></h2>
                            <p><?php echo $row['contents2']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb3']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title3']?></h2>
                            <p><?php echo $row['contents3']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb4']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title4']?></h2>
                            <p><?php echo $row['contents4']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb5']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title5']?></h2>
                            <p><?php echo $row['contents5']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/marketing/<?php echo $row['thumb6']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title6']?></h2>
                            <p><?php echo $row['contents6']?></p>
                        </div>
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

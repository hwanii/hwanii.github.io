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
            <h2>CONSULTING</h2>
            <p>
                글로벌이피는 ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를<br> 향상시키는데 기여합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>컨설팅</h2>
        </div>
    </section>
    <section class="consulting">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>CONSULTING</h2>
                <p>시장조사, 경쟁 브랜드 조사, 제품 가격 조사, 트래픽 조사, 구매 전환율 조사, 진입 전략 수립, 마케팅 예산 편성, 인허가 신청,<br class="con_br"> 물류 방식 조사 및 실행, 바이어 발굴(데이터 제공)등의 종합적인 컨설팅 서비스를 제공 해드립니다.</p>
            </div>
            <div class="solution">
                <div class="solution_box">
                    <?php
                    $sql="SELECT * FROM consulting";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    ?>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb1']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title1']?></h2>
                            <p><?php echo $row['contents1']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb2']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title2']?></h2>
                            <p><?php echo $row['contents2']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb3']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title3']?></h2>
                            <p><?php echo $row['contents3']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb4']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title4']?></h2>
                            <p><?php echo $row['contents4']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb5']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title5']?></h2>
                            <p><?php echo $row['contents5']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb6']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title6']?></h2>
                            <p><?php echo $row['contents6']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb7']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title7']?></h2>
                            <p><?php echo $row['contents7']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb8']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title8']?></h2>
                            <p><?php echo $row['contents8']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb9']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title9']?></h2>
                            <p><?php echo $row['contents9']?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/consulting/<?php echo $row['thumb10']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title10']?></h2>
                            <p><?php echo $row['contents10']?></p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="oper_bottom" data-aos="fade-up">
                글로벌이피는 기업들이 온라인 이커머스 분야에서<br>성공적인 사업을 추진하고 확장할 수 있도록<br>종합적인 컨설팅 서비스를 제공합니다.
            </p>
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

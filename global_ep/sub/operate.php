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
            <h2>운영대행</h2>
            <p>
                ONE STOP SOLUTION으로 고객의 조건에 맞춰 필요하는 서비스를 제공해드리며<br>고객사의 롱런(LONG-RUN)파트너를 되도록 공동 성장하겠습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>운영대행</h2>
        </div>
    </section>
    <section class="operate">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>운영대행</h2>
                <p>라자다&쇼피 입점 / 브랜드 플래그십 스토어 운영,<br>운영 전략 및 샵 인테리어, CS, 스토어 기초 작업 등 의 업무를 대행하고 있습니다.</p>
            </div>
            <div class="operate_inner">
                <?php
                $sql="SELECT * FROM agencies";
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
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/agencies/<?php echo $thumb1?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>요구사항 분석 및<br>계획 수립</span>
                    </div>
                    <p><?php echo nl2br($contents1)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/agencies/<?php echo $thumb2?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>스토어 구축 및 디자인</span>
                    </div>
                    <p><?php echo nl2br($contents2)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/agencies/<?php echo $thumb3?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>상품 등록 및 관리</span>
                    </div>
                    <p><?php echo nl2br($contents3)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/agencies/<?php echo $thumb4?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>마케팅 및 프로모션</span>
                    </div>
                    <p><?php echo nl2br($contents4)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/agencies/<?php echo $thumb5?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>운영 및 성과 평가</span>
                    </div>
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

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
            <h2>LIVE</h2>
            <p>
                글로벌이피는 쇼피, 라자다, 틱톡, 알리바바닷컴 등의 다양한 B2C 및 B2B 플랫폼에서<br>라이브방송을 진행하는 서비스를 제공합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>LIVE</h2>
        </div>
    </section>
    <section class="operate live_con">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>LIVE</h2>
                <p>해외 소비자들과 다이렉트 접점을 만들고, 고객 충성도를 높이기 위한 라이브 커머스를 진행하고 있습니다.<br>타겟에 맞는 인플루언서 또는 쇼호스트를 선정 및 기획하여 적정 시간대에 고객과 소통하는 방식으로 매출 증대에 기여합니다.</p>
            </div>
            <div class="operate_inner">
                <?php
                $sql="SELECT * FROM live";
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
                    <div class="left" style="background: url('../img/live/<?php echo $thumb1?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>타오바오<br>라이브</span>
                    </div>
                    <p><?php echo $contents1?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/live/<?php echo $thumb2?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>틱톡/도우인<br>라이브</span>
                    </div>
                    <p><?php echo $contents2?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/live/<?php echo $thumb3?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>쇼피/라자다<br>라이브</span>
                    </div>
                    <p><?php echo $contents3?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/live/<?php echo $thumb4?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>페이스북/인스타 등<br>기타 SNS 라이브</span>
                    </div>
                    <p><?php echo $contents4?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/live/<?php echo $thumb5?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <span>인플루언서/왕홍<br>라이브 방송<br>& 공동구매</span>
                    </div>
                    <p><?php echo $contents5?></p>
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

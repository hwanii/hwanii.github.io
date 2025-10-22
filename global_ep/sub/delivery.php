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
            <h2>3PL</h2>
            <p>
                글로벌이피는 현재 아시아, 미주, 러시아 등<br>다양한 지역의 여러 전자상거래 플랫폼과 온/오프라인 B2B 기업들을 대상으로<br>3PL(Third-Party Logistics) 대행 서비스를 제공합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>배송대행</h2>
        </div>
    </section>
    <section class="operate delivery">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>3PL(배송대행)</h2>
                <p>제품보관, 재고관리, 포장 및 배송 대행, B2B2C 업무 대행, 결과 보고 등 서비스 제공해드립니다.</p>
            </div>
            <div class="operate_inner">
                <?php
                $sql="SELECT * FROM delivery";
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
                    <div class="left" style="background: url('../img/delivery/<?php echo $thumb1?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <h2>제품보관</h2>
                    </div>
                    <p><?php echo nl2br($contents1)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/delivery/<?php echo $thumb2?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <h2>재고관리</h2>
                    </div>
                    <p><?php echo nl2br($contents2)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/delivery/<?php echo $thumb3?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <h2>포장 및<br>배송 대행</h2>
                    </div>
                    <p><?php echo nl2br($contents3)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/delivery/<?php echo $thumb4?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <h2>B2B, B2C<br>업무대행</h2>
                    </div>
                    <p><?php echo nl2br($contents4)?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left" style="background: url('../img/delivery/<?php echo $thumb5?>') no-repeat center/cover;">
                        <div class="bg"></div>
                        <h2>결과보고</h2>
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

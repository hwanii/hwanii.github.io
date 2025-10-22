<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub01">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>COMPANY</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMPANY&nbsp;&nbsp;>&nbsp;&nbsp;HISTORY</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li><a href="../sub/company.php">회사소개</a></li>
            <li class="on"><a href="../sub/history.php">HISTORY</a></li>
            <li><a href="../sub/map.php">오시는 길</a></li>
        </ul>
    </div>
    <section class="history">
        <div class="title-txt">
            <h2>HISTORY</h2>
            <p>WOWBNB 연혁입니다.</p>
        </div>
        <div class="history-banner">
            <div class="his-bg"></div>
            <div class="txt-box">
                <img src="../img/logo.png" alt="">
                <h2>Wasted Value To Wealth</h2>
                <p>금속가공 공급망의 새로운 혁신</p>
            </div>
        </div>
        <div class="history-att">
            <div class="swiper-container history-slide">
                <div class="swiper-wrapper">
                    <?php
                    $sql="SELECT * FROM history ORDER BY `datetime` ASC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $date=$row['datetime'];
                        $file=$row['file'];
                        $title=$row['title'];
                        $contents=$row['contents'];
                    ?>
                    <div class="swiper-slide">
                        <h2><?php echo date("Y", strtotime($date))?></h2>
                        <img src="../admin/img/history/<?php echo $file?>" alt="">
                        <h3><?php echo $title?></h3>
                        <p>
                            <?php echo $contents?>
                        </p>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-btn-prev"><img src="../img/icon-left-arrow.png" alt=""></div>
                <div class="swiper-btn-next"><img src="../img/icon-left-arrow.png" alt=""></div>
            </div>
        </div>
        <div class="title-txt">
            <h2>CERTIFICATION</h2>
            <p>WOWBNB 인증서입니다.</p>
        </div>
        <div class="certi">
            <?php
            $cSql="SELECT * FROM certification ORDER BY num ASC";
            $cRes=mysqli_query($conn, $cSql);
            while($cRow=mysqli_fetch_array($cRes)){
                $file=$cRow['file'];
            ?>
            <img src="../admin/img/cert/<?php echo $file?>" alt="">
            <?php } ?>
        </div>
        <div class="vision">
            <div class="bg"></div>
            <div class="title-txt" style="color: #fff">
                <h2>VISION</h2>
                <p>WOWBNB ision입니다.</p>
            </div>
            <h3>고객과 동반 성장 <span>할 수 있는</span> 파트너</h3>
            <div class="tri">
                <div>
                    <span>연구하고 발전하여<br>고객의 Needs를 위해<br>Solution 제시</span>
                    <p>고객<br>Needs<br>만족</p>
                </div>
                <div>
                    <span>엄격한 관리 체계로<br>최상의 품질 구현</span>
                    <p>품질<br>준수</p>
                </div>
                <div>
                    <span>Vendor 확장을 통해<br>시장 경쟁력 확보 </span>
                    <p>원가<br>절감</p>
                </div>
                <img src="../img/icon_history05.png" alt="">
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner01">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option value="../sub/introduction.php">인사말</option>
                <option selected value="../sub/history.php">연혁</option>
                <option value="../sub/map.php">오시는 길</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>대원 로지스틱</li>
                <li>연혁</li>
            </ul>
        </div>
    </section>
    <section class="history">
        <div class="inner contents_inner">
            <div class="left">
                <div class="sub_title">
                    <h2>
                        (주)대원로지스틱은<br>
                        종합물류서비스를 제공하는 기업으로,<br>
                        기업과 고객의 운송영역에<br>
                        믿음과 신뢰를 주는 기업입니다.
                    </h2>
                </div>
                <div class="contents">
                    <?php
                    $sql="SELECT DISTINCT DATE_FORMAT(`datetime`, '%Y') AS year FROM history ORDER BY `datetime` DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $year=$row['year'];
                    ?>
                    <div>
                        <h3><?php echo $year?></h3>
                        <div>
                            <?php
                            $ySql="SELECT * FROM history WHERE DATE_FORMAT(`datetime`, '%Y')='$year'";
                            $yRes=mysqli_query($conn, $ySql);
                            while($yRow=mysqli_fetch_array($yRes)){
                            $yTit=$yRow['title'];
                            ?>
                            <p><?php echo $yTit ?></p>
                            <?} ?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="right">
                <div class="swiper-container history_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $pSql="SELECT * FROM history WHERE `file`!='' ORDER BY num ASC";
                        $pRes=mysqli_query($conn, $pSql);
                        while($pRow=mysqli_fetch_array($pRes)){
                        ?>
                        <div class="swiper-slide bg01" style="background: url('../img/history/<?php echo $pRow['file'];?>') no-repeat center/cover;"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-btn-prev01"><img src="../img/slide_up_arrow.png" alt=""></div>
                <div class="swiper-btn-next01"><img src="../img/slide_down_arrow.png" alt=""></div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

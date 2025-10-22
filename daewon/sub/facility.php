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
    <section class="banner banner04">
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
                <option selected value="../sub/facility.php">시설 현황</option>
                <option value="../sub/equipment.php">설비 현황</option>
                <option value="../sub/vehicle.php">차량 현황</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>시설/장비/차량현황</li>
                <li>시설 현황</li>
            </ul>
        </div>
    </section>
    <section class="facility">
        <div class="contents_inner">
            <div class="sub_title">
                <h2>시설 현황</h2>
                <p>물류운영시설</p>
            </div>
            <div class="contents">
                <?php
                $sql="SELECT * FROM bo_facility ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $thumb=$row['thumbnail'];
                ?>
                <div>
                    <img src="../img/<?php echo ($thumb) ? "facility/".$thumb : "no-image.png"?>" alt="">
                    <p><?php echo $title?></p>
                </div>
                <?php } ?>
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

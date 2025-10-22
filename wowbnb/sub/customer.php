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
    <section class="sub-banner sub03">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>PLATFORM</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;PLATFORM&nbsp;&nbsp;>&nbsp;&nbsp;CUSTOMER</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
    <ul>
            <li><a href="../sub/platform.php">PLATFORM</a></li>
            <li><a href="../sub/vendor.php">VENDOR</a></li>
            <li class="on"><a href="../sub/customer.php">CUSTOMER</a></li>
        </ul>
    </div>
    <section class="customer">
        <div class="title-txt">
            <h2>CUSTOMER</h2>
            <p>WOWBNB와 함께하는 고객안내 입니다.</p>
        </div>
        <div class="inner">
            <?php
            $sql="SELECT * FROM bo_customer ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $thumb=$row['thumbnail'];
            ?>
            <img src="../img/customer/<?php echo $thumb?>" alt="">
            <?php } ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

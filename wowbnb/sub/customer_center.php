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
            <h2>CUSTOMER SERVICE</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;CUSTOMER SERVICE&nbsp;&nbsp;>&nbsp;&nbsp;NOTICE</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li><a href="../sub/notice.php">공지사항</a></li>
            <li><a href="../sub/request.php">문의하기</a></li>
            <li><a href="../sub/download.php">자료실</a></li>
        </ul>
    </div>
    <section class="customer-center">
        <div class="inner">
            <div class="title-txt">
                <h2>공지사항</h2>
                <p>WOWBNB 소식입니다.</p>
            </div>
            <div class="notice-box">
                <img src="../img/ico_common_inquiry.png" alt="">
                <div>
                    <h2>1:1 문의</h2>
                    <p>홈페이지 1:1 문의를 통해 궁금하신점을 해결하세요.</p>
                    <a href="request.php">문의하기</a>
                </div>
            </div>
            <div class="center-contents">
                <div class="cen-left">
                    <h2>공지사항</h2>
                    <a href="notice.php" class="more">더보기<img src="../img/bullet_more.png" alt=""></a>
                </div>
                <div class="cen-right">
                    <?php
                    $sql="SELECT * FROM bo_notice ORDER BY num DESC LIMIT 3";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $write_time=$row['write_time'];
                        $num=$row['num'];
                    ?>
                    <a href="notice_detail.php?num=<?php echo $num?>">
                        <p><?php echo $title?></p>
                        <span><?php echo date("Y-m-d", strtotime($write_time))?></span>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="center-contents">
                <div class="cen-left">
                    <h2>자료실</h2>
                    <a href="download.php" class="more">더보기<img src="../img/bullet_more.png" alt=""></a>
                </div>
                <div class="cen-right">
                    <?php
                    $sql="SELECT * FROM bo_data ORDER BY num DESC LIMIT 3";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $write_time=$row['write_time'];
                        $num=$row['num'];
                    ?>
                    <a href="download_detail.php?num=<?php echo $num?>">
                        <p><?php echo $title?></p>
                        <span><?php echo date("Y-m-d", strtotime($write_time))?></span>
                    </a>
                    <?php } ?>
                </div>
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

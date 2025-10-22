<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="../img/main-logo01.png" alt="">
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;회사소개&nbsp;&nbsp;>&nbsp;&nbsp;갤러리</p>
        </div>
    </section>
    <?php
    $num=$_GET['num'];

    $sql="SELECT * FROM gallery WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $time=$row['write_time'];
    $contents=$row['contents'];
    ?>
    <section class="notice">
        <div class="inner">
            <div class="detail-title">
                <p><?php echo $title?></p>
                <div>
                    <p>작성일<span><?php echo date("Y-m-d", strtotime($time))?></span></p>
                </div>
            </div>
            <div class="detail-content">
                <?php echo $contents?>
            </div>
            <div class="line01"></div>
            <?php
            $pSql="SELECT * FROM gallery WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM gallery WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="detail-bottom">
                <a href="gallery_detail.php?num=<?php echo $prev?>" style="<?php echo ($prev) ? "" : "visibility:hidden"?>">
                    <img src="../img/notice-prev-arrow.png" alt="">
                    <p>이전 글 보기</p>
                </a>
                <a href="gallery.php"><span>목록</span></a>
                <a href="gallery_detail.php?num=<?php echo $next?>" style="<?php echo ($next) ? "" : "visibility:hidden"?>">
                    <p>다음 글 보기</p>
                    <img src="../img/notice-next-arrow.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;신청하기&nbsp;&nbsp;>&nbsp;&nbsp;상품조사 신청</p>
        </div>
    </section>
    <?php
    $num=$_GET['num'];
    $aw=$_GET['aw'];

    $sql="SELECT * FROM product WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $time=$row['write_time'];
    $contents=$row['contents'];
    $answer=$row['answer'];
    $answer_time=$row['answer_time'];
    ?>
    <section class="notice">
        <div class="inner">
            <div class="detail-title">
                <p>
                    <?php echo ($aw=="true") ? $title." 답변입니다." : $title?></p>
                <div>
                    <p>작성일<span><?php echo ($aw=="true") ? date("Y-m-d", strtotime($answer_time)) : date("Y-m-d", strtotime($time))?></span></p>
                </div>
            </div>
            <div class="detail-content">
                <p><?php echo ($aw=="true") ? $answer : $contents?></p>
            </div>
            <div class="line01"></div>
            <?php
            $pSql="SELECT * FROM product WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM product WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="detail-bottom">
                <a href="product_request_detail.php?num=<?php echo $prev?>" style="<?php echo ($prev) ? "visibility:hidden" : "visibility:hidden"?>">
                    <img src="../img/notice-prev-arrow.png" alt="">
                    <p>이전 글 보기</p>
                </a>
                <a href="product_request.php"><span>목록</span></a>
                <a href="product_request_detail.php?num=<?php echo $next?>" style="<?php echo ($next) ? "visibility:hidden" : "visibility:hidden"?>">
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

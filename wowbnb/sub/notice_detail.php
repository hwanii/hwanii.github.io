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
            <li class="on"><a href="../sub/notice.php">공지사항</a></li>
            <li><a href="../sub/request.php">문의하기</a></li>
            <li><a href="../sub/download.php">자료실</a></li>
        </ul>
    </div>
    <?php
    $num=$_GET['num'];
    
    $hSql="UPDATE bo_notice SET hit=hit+1 WHERE num='$num'";
    $hRes=mysqli_query($conn, $hSql);

    $sql="SELECT * FROM bo_notice WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $date=$row['write_time'];
    $hit=$row['hit'];
    $contents=$row['contents'];
    ?>
    <section class="notice">
        <div class="inner">
            <div class="title-txt">
                <h2>공지사항</h2>
                <p>WOWBNB 소식입니다.</p>
            </div>
            <div class="detail-title">
                <p><?php echo $title?></p>
                <div>
                    <p>작성일<span><?php echo date("Y-m-d", strtotime($date))?></span></p>
                    <p>조회수<span><?php echo number_format($hit)?></span></p>
                </div>
            </div>
            <div class="detail-content">
                <?php echo $contents?>
            </div>
            <div class="line01"></div>
            <a href="notice.php" class="go-list">목록</a>
            <?php
            $pSql="SELECT * FROM bo_notice WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $pTit=$pRow['title'];
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM bo_notice WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $nTit=$nRow['title'];
            $next=$nRow['num'];
            ?>
            <a href="<?php echo (!$prev) ? "javascirpt:void(0)" : "notice_detail.php?num=".$prev?>" class="before-txt">
                <span>이전글</span>
                <?php echo ($prev) ? "<p>".$pTit."</p>" : ""?>
            </a>
            <a href="<?php echo (!$next) ? "javascirpt:void(0)" : "notice_detail.php?num=".$next?>" class="next-txt">
                <span>다음글</span>
                <?php echo ($next) ? "<p>".$nTit."</p>" : ""?>
            </a>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

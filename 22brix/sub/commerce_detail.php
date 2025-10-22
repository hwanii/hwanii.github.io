<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="notice">
        <?php
        $num=$_GET['num'];

        $hSql="UPDATE live SET hit=hit+1 WHERE num='$num'";
        $hRes=mysqli_query($conn, $hSql);

        $sql="SELECT * FROM live WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $title=$row['title'];
        $contents=$row['contents'];
        $write_time=$row['write_time'];
        $hit=$row['hit'];
        ?>
        <div class="inner">
            <div class="detail-title">
                <p><?php echo $title?></p>
                <div>
                    <p>작성일<span><?php echo date("Y-m-d", strtotime($write_time))?></span></p>
                    <p>조회수<span><?php echo $hit?></span></p>
                </div>
            </div>
            <div class="detail-content">
                <p>
                    <?php echo $contents?>
                </p>
            </div>
            <div class="line01"></div>
            <a href="commerce03.php" class="go-list">목록</a>
            <?php
            $pSql="SELECT * FROM live WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $pTit=$pRow['title'];
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM live WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $nTit=$nRow['title'];
            $next=$nRow['num'];
            ?>
            <a href="<?php echo ($prev) ? "commerce_detail.php?num=".$prev : "javascript:void(0)"?>" class="before-txt">
                <span>이전글</span>
                <p><?php echo ($prev) ? $pTit : "이전 글이 없습니다." ?></p>
            </a>
            <a href="<?php echo ($next) ? "commerce_detail.php?num=".$next : "javascript:void(0)"?>" class="next-txt">
                <span>다음글</span>
                <p><?php echo ($next) ? $nTit : "다음 글이 없습니다." ?></p>
            </a>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

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
    <section class="sub_banner" style="background: url(../img/sub_commu.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>공지사항</h2>
            <p>
                GLOBAL EP는 전자상거래를 통해 CBT(역직구+보세)방식으로<br>
                해외 진출 원스톱 서비스를 제공하고 있습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>COMMUNITY</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>공지사항</h2>
        </div>
    </section>
    <?php
    $num=$_GET['num'];

    $hSql="UPDATE notice SET hit=hit+1 WHERE num='$num'";
    $hRes=mysqli_query($conn, $hSql);

    $sql="SELECT * FROM notice WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $hit=$row['hit'];
    $write_time=$row['write_time'];
    $contents=$row['contents'];
    ?>
    <section class="post">
        <div class="inner960">
            <div class="post_title">
                <p><?php echo $title?></p>
                <div>
                    <p>작성일<span><?php echo date("Y-m-d", strtotime($write_time))?></span></p>
                    <p>조회수<span><?php echo number_format($hit)?></span></p>
                </div>
            </div>
            <div class="post_content">
                <?php echo $contents?>
            </div>
            <div class="line01"></div>
            <a href="notice.php" class="go-list">목록</a>
            <?php
            $pSql="SELECT * FROM guide WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            $pTtile=$pRow['title'];
            
            $nSql="SELECT * FROM guide WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            $nTitle=$nRow['title'];
            ?>
            <a href="<?php echo ($prev) ? "notice_post.php?num=".$prev : "javascript:void(0)"?>" class="before-txt">
                <span>이전글</span>
                <p><?php echo ($prev) ? $pTitle : "이전 글이 없습니다."?></p>
            </a>
            <a href="<?php echo ($next) ? "notice_post.php?num=".$next : "javascript:void(0)"?>" class="next-txt">
                <span>다음글</span>
                <p><?php echo ($next) ? $nTitle : "다음 글이 없습니다."?></p>
            </a>
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

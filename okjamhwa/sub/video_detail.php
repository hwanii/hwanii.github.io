<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    $header="customer";
    include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <img src="../img/banner-logo.png" alt="">
            <h2>당신이 먹기에, 더 안전하게</h2>
            <p>건강한 최상의 재료에서, 최고의 결과를 만들기 위해<br>옥잠화영농조합법인은 작은 수고도 마다하지 않겠습니다.</p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;고객센터&nbsp;&nbsp;&#62;&nbsp;&nbsp;영상 게시판</p>
        </div>
    </section>
    <section class="notice sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>고객센터</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/notice.php">공지사항</a>
                <a href="../sub/video.php" class="on">영상 게시판</a>
                <a href="../sub/gallery.php">사진 게시판</a>
                <a href="../sub/estimate.php">견적 문의</a>
                <a href="../sub/visit.php">견학 신청</a>
            </div>
            <a href="<?php echo $store?>" target="_blank" class="store flex_menu">
                <p>스토어 바로가기</p>
                <img src="../img/icon-shop.png" alt="스토어 바로가기">
            </a>
            <a href="../sub/estimate.php" class="ques flex_menu">
                <p>견적 문의</p>
                <img src="../img/icon-q.png" alt="견적 문의 바로가기">
            </a>
        </div>
        <div class="inner1024">
            <?php
            $num=$_GET['num'];

            $hSql="UPDATE video SET hit=hit+1 WHERE num='$num'";
            $hRes=mysqli_query($conn, $hSql);

            $sql="SELECT * FROM video WHERE num='$num'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $title=$row['title'];
            $date=$row['write_time'];
            $contents=$row['contents'];
            $video=$row['video'];
            $hit=$row['hit'];
            ?>
            <h2>영상 게시판</h2>
            <p>옥잠화영농조합법인 영상들을 소개합니다.</p>
            <div class="detail_title">
                <p><?php echo $title?></p>
                <div>
                    <p>작성일<span><?php echo date("Y-m-d", strtotime($date))?></span></p>
                    <p>조회수<span><?php echo number_format($hit)?></span></p>
                </div>
            </div>
            <div class="detail_contents">
                <div class="video_detail">
                    <?php echo $video?>
                </div>
                <?php echo $contents?>
            </div>
            <div class="detail_line"></div>
            <a href="video.php" class="go_list">목록</a>
            <?php
            $pSql="SELECT * FROM video WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            $pTit=$pRow['title'];
            
            $nSql="SELECT * FROM video WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            $nTit=$nRow['title'];
            ?>
            <a href="<?php echo ($prev) ? $_SERVER['PHP_SELF']."?num=".$prev : "javascript:void(0)"?>" class="before_post">
                <span>이전글</span>
                <p><?php echo ($prev) ? $pTit : "이전 글이 없습니다."?></p>
            </a>
            <a href="<?php echo ($next) ? $_SERVER['PHP_SELF']."?num=".$next : "javascript:void(0)"?>" class="next_post">
                <span>다음글</span>
                <p><?php echo ($next) ? $nTit : "다음 글이 없습니다."?></p>
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

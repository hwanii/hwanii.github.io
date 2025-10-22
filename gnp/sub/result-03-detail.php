<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>

    <section class="sub-banner">
        <div class="img"></div>
        <div class="bg"></div>
        <div class="txt">
            <h2>주요실적</h2>
            <p>Results of business</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>주요실적</li>
            <li>막구조물</li>
        </ul>
    </section>
    
    <section class="click-menu">
        <ul data-aos="fade-up">
            <li><a href="../sub/result-02.php">태양광 발전사업</a></li>
            <li><a href="../sub/result-01.php">건물일체형태양광</a></li>
            <li class="active"><a href="../sub/result-03.php">막구조물</a></li>
        </ul>
    </section>

    <?php
    $num=$_GET['num'];

    $hSql="UPDATE bo_shield SET hit=hit+1 WHERE num='$num'";
    $hRes=mysqli_query($conn, $hSql);

    $sql="SELECT * FROM bo_shield WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $contents=$row['contents'];
    $file=$row['file_1'];
    ?>
    <section class="post" data-aos="fade-up">
        <h2 class="post-title"><?php echo $title?></h2>
        <div class="post-box">
            <?php echo $contents?>
        </div>
        <div class="post-bot">
            <?php 
            $pSql="SELECT * FROM bo_shield WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];

            $nSql="SELECT * FROM bo_shield WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="left" <?php echo ($prev=="") ? "style='visibility:hidden'" : ""?>><a href="result-03-detail.php?num=<?php echo $prev?>"><img src="../img/post-left-arrow.png" alt="이전 게시글"></a></div>
            <div class="center"><a href="result-03.php">리스트</a></div>
            <div class="right" <?php echo ($next=="") ? "style='visibility:hidden'" : ""?>><a href="result-03-detail.php?num=<?php echo $next?>"><img src="../img/post-right-arrow.png" alt="다음 게시글"></a></div>
        </div>
    </section>

    <?php include '../footer.php';?>

</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
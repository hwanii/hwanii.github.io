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

    <section class="sub-banner01">
        <div class="img"></div>
        <div class="bg"></div>
        <div class="txt">
            <h2>자료실</h2>
            <p>Material data</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>고객지원</li>
            <li>자료실</li>
        </ul>
    </section>

    <section class="click-menu">
        <ul data-aos="fade-up">
            <li class="active"><a href="../sub/material.php">자료실</a></li>
        </ul>
    </section>

    <?php
    $num=$_GET['num'];

    $hSql="UPDATE bo_data SET hit=hit+1 WHERE num='$num'";
    $hRes=mysqli_query($conn, $hSql);

    $sql="SELECT * FROM bo_data WHERE num='$num'";
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
        <?php if($file) { ?>
        <div class="down">
            <a id="down" href="../img/file/data/<?php echo $file?>" download></a>
            <div>
                <img src="../img/document.png" alt="다운로드" onclick="document.querySelector('#down').click();">
                <span onclick="document.querySelector('#down').click();"><?php echo $file?></span>
            </div>
        </div>
        <?php } ?>
        <div class="post-bot">
            <?php 
            $pSql="SELECT * FROM bo_data WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];

            $nSql="SELECT * FROM bo_data WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="left" <?php echo ($prev=="") ? "style='visibility:hidden'" : ""?>><a href="material-detail.php?num=<?php echo $prev?>"><img src="../img/post-left-arrow.png" alt="이전 게시글"></a></div>
            <div class="center"><a href="material.php">리스트</a></div>
            <div class="right" <?php echo ($next=="") ? "style='visibility:hidden'" : ""?>><a href="material-detail.php?num=<?php echo $next?>"><img src="../img/post-right-arrow.png" alt="다음 게시글"></a></div>
        </div>
    </section>

    <?php include '../footer.php';?>

</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
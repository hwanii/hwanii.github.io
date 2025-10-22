<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header_en.php';?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>How to use</h2>
            </div>
            <?php
            $num=$_GET['num'];

            $sql="SELECT * FROM guide WHERE num='$num'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $title=$row['title'];
            $contents=$row['contents'];
            $video=$row['video'];
            ?>
            <div class="use_post">
                <h2><?php echo $title?></h2>
                <div class="contents">
                    <div class="use_video">
                        <?php echo $video?>
                    </div>
                    <p><?php echo $contents?></p>
                </div>
            </div>
            <?php
            $pSql="SELECT * FROM guide WHERE num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $pTit=$pRow['title'];
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM guide WHERE num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $nTit=$nRow['title'];
            $next=$nRow['num'];
            ?>
            <div class="use_nav">
                <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $prev?>" style="<?php echo ($prev) ? "" : "visibility:hidden"?>">
                    <img src="../img/red-p-arrow.png">
                    <p><?php echo $pTit?></p>
                </a>
                <a href="use.php"><img src="../img/red-menu.png"></a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?num=<?php echo $next?>" style="<?php echo ($next) ? "" : "visibility:hidden"?>">
                    <p><?php echo $nTit?></p>
                    <img src="../img/red-n-arrow.png">
                </a>
            </div>
            <div class="ask_link">
                <a href="faq_en.php">
                    <p>FAQ</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask01.png">
                </a>
                <a href="use_en.php">
                    <p>How to use</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask02.png">
                </a>
                <a href="emergency_en.php">
                    <p>Damage/accidents received</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask03.png">
                </a>
            </div>
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

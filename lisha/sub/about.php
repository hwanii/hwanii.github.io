<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;국제리샤필라테스협회&nbsp;&nbsp;>&nbsp;&nbsp;ABOUT US</span>
        </div>
    </section>
    <div class="sub_category" style="justify-content: center;">
        <a href="../sub/about.php" class="on">ABOUT US</a>
        <a href="../sub/teacher.php">교육 강사 소개</a>
    </div>
    <section class="about">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>ABOUT US</h2>
            </div>
            <?php
            $sql="SELECT * FROM about";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $contents=$row['contents'];
            $thumbnail=$row['thumbnail'];
            ?>
            <div class="about_contents">
                <div class="left">
                    <p><?php echo nl2br($contents)?></p>
                </div>
                <img src="../img/about/<?php echo $thumbnail?>" alt="" class="right">
            </div>
            <div class="title" data-aos="fade-up">
                <h2>HISTORY</h2>
            </div>
            <div class="history_contents" data-aos="fade-up">
                <?php
                $ySql="SELECT DISTINCT DATE_FORMAT(`datetime`, '%Y') AS `year` FROM history ORDER BY `datetime` DESC";
                $yRes=mysqli_query($conn, $ySql);
                while($yRow=mysqli_fetch_array($yRes)){
                    $year=$yRow['year'];
                ?>
                <div>
                    <h2><?php echo $year?></h2>
                    <p>
                        <?php
                        $hSql="SELECT * FROM history WHERE DATE_FORMAT(`datetime`, '%Y')='$year' ORDER BY num ASC";
                        $hRes=mysqli_query($conn, $hSql);
                        while($hRow=mysqli_fetch_array($hRes)){
                            echo $hRow['title']."<br>";
                        } ?>
                    </p>
                </div>
                <?php } ?>
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

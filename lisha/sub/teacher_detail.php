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
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;국제리샤필라테스협회&nbsp;&nbsp;>&nbsp;&nbsp;교육 강사 소개</span>
        </div>
    </section>
    <?php
    $num=$_GET['num'];

    $sql="SELECT * FROM teacher WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $local=$row['local'];
    $position=$row['position'];
    $name=$row['name'];
    $now=$row['now'];
    $file=$row['file'];
    $career=$row['career'];
    $qualification=$row['qualification'];
    $education=$row['education'];
    ?>
    <section class="about">
        <div class="inner">
            <div class="title">
                <h2><?php echo $local?> 교육팀</h2>
                <p>ILPA TEACHER GROUP</p>
            </div>
            <div class="td_contents">
                <img src="../img/teacher/<?php echo $file?>" alt="">
                <div class="right">
                    <div class="d_top">
                        <p><?php echo $position?></p>
                        <h2><?php echo $name?></h2>
                        <span><?php echo $now?></span>
                    </div>
                    <div class="d_contents">
                        <h2>경력</h2>
                        <?php echo nl2br($career)?>
                    </div>
                    <div class="d_contents">
                        <h2>자격사항</h2>
                        <?php echo nl2br($qualification)?>
                    </div>
                    <div class="d_contents">
                        <h2>교육이수</h2>
                        <?php echo nl2br($education)?>
                    </div>
                </div>
            </div>
            <?php 
            $pSql="SELECT * FROM teacher WHERE `local`='$local' AND num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM teacher WHERE `local`='$local' AND num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="detail_bottom">
                <a href="<?php echo ($prev) ? "teacher_detail.php?num=".$prev : "javascript:void(0)"?>" style="<?php echo ($prev) ? "" : "visibility:hidden"?>"><img src="../img/list-prev.png" alt=""></a>
                <a href="teacher.php">리스트</a>
                <a href="<?php echo ($next) ? "teacher_detail.php?num=".$next : "javascript:void(0)"?>" style="<?php echo ($next) ? "" : "visibility:hidden"?>"><img src="../img/list-next.png" alt=""></a>
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

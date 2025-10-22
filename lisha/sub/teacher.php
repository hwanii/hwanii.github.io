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
    <div class="sub_category" style="justify-content: center;">
        <a href="../sub/about.php">ABOUT US</a>
        <a href="../sub/teacher.php" class="on">교육 강사 소개</a>
    </div>
    <section class="about">
        <div class="inner">
            <div class="title" data-aos="fade-up">
                <h2>본사 교육팀</h2>
            </div>
            <div class="teacher_contents" data-aos="fade-up">
                <?php
                $sql="SELECT * FROM teacher WHERE `local`='본사' ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $position=$row['position'];
                    $name=$row['name'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="teacher_detail.php?num=<?php echo $num?>">
                    <img src="../img/teacher/<?php echo $thumb?>" alt="">
                    <div class="txt_box">
                        <p><?php echo $position?></p>
                        <h3><?php echo $name?></h3>
                    </div>
                </a>
                <?php } ?>
            </div>
            <div class="title">
                <h2 data-aos="fade-up">지부 교육팀</h2>
            </div>
            <div class="teacher_contents" data-aos="fade-up">
                <?php
                $sql="SELECT * FROM teacher WHERE `local`='지부' ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $position=$row['position'];
                    $name=$row['name'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="teacher_detail.php?num=<?php echo $num?>">
                    <img src="../img/teacher/<?php echo $thumb?>" alt="">
                    <div class="txt_box">
                        <p><?php echo $position?></p>
                        <h3><?php echo $name?></h3>
                    </div>
                </a>
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

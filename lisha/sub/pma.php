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
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 소개&nbsp;&nbsp;>&nbsp;&nbsp;PMA 자격 과정</span>
        </div>
    </section>
    <div class="sub_category">
        <a href="../sub/ilpa.php">ILPA란</a>
        <a href="../sub/expert_process.php">전문가 과정 커리큘럼</a>
        <a href="../sub/deepen_process.php">심화 과정 커리큘럼</a>
        <a href="../sub/pma.php" class="on">PMA 자격 과정</a>
        <a href="../sub/benefit.php">교육혜택</a>
    </div>
    <?php
    $sql="SELECT * FROM pma";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $intro=$row['intro'];
    $year=$row['year'];
    $test=$row['test'];
    $area=$row['area'];
    $pass=$row['pass'];
    $curriculum=$row['curriculum'];
    $contents=$row['contents'];
    ?>
    <div class="ilpa">
        <div class="inner">
            <div class="title">
                <h2>PMA 자격 과정</h2>
                <p>LISHA CURRICULUM</p>
            </div>
            <div class="pma">
                <?php echo $title?>
                <img src="../img/pma01.png" alt="" data-aos="fade-up">
                <h3 data-aos="fade-up">PMA 소개</h3>
                <p data-aos="fade-up">
                    <?php echo $intro?>
                </p>
                <h3 data-aos="fade-up">1. 시험자격 *<?php echo $year?>년 기준</h3>
                <p data-aos="fade-up">
                    <?php echo $test?>
                </p>
                <h3 data-aos="fade-up">2. 시험비용 및 장소</h3>
                <p data-aos="fade-up">
                    <?php echo $area?>
                </p>
                <h3 data-aos="fade-up">3. 합격 기준</h3>
                <p data-aos="fade-up">
                    <?php echo $pass?>
                </p>
                <h3 data-aos="fade-up">4. 교과과정</h3>
                <p data-aos="fade-up">
                    <?php echo $curriculum?>
                </p>
                <h2 data-aos="fade-up">
                    <?php echo $contents?>
                </h2>
            </div>
        </div>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

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
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 소개&nbsp;&nbsp;>&nbsp;&nbsp;전문가 과정 커리큘럼</span>
        </div>
    </section>
    <div class="sub_category">
        <a href="../sub/ilpa.php">ILPA란</a>
        <a href="../sub/expert_process.php" class="on">전문가 과정 커리큘럼</a>
        <a href="../sub/deepen_process.php">심화 과정 커리큘럼</a>
        <a href="../sub/pma.php">PMA 자격 과정</a>
        <a href="../sub/benefit.php">교육혜택</a>
    </div>
    <div class="ilpa">
        <div class="inner">
            <div class="title">
                <h2>전문가 과정 커리큘럼</h2>
                <p>LISHA CURRICULUM</p>
            </div>
            <div class="expert_contents">
                <?php
                $sql="SELECT * FROM curriculum ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                ?>
                <div class="content" data-aos="fade-up">
                    <h2><?php echo $row['title'];?></h2>
                    <div class="txt_box">
                        <div>
                            <h3>이론</h3>
                            <p><?php echo $row['theory']?></p>
                        </div>
                        <div style="<?php echo ($row['practice']) ? "" : "display:none"?>">
                            <h3>실기</h3>
                            <p><?php echo $row['practice']?></p>
                        </div>
                        <div>
                            <h3>설명</h3>
                            <p>
                            <?php echo nl2br($row['contents'])?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
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

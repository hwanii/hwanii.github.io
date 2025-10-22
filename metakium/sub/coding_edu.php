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
    include '../header.php';
    $sql="SELECT * FROM vr_coding WHERE area='edu'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner10">
        <div class="txt_inner">
            <div class="left">
                <?php echo $row['area1'];?>
            </div>
            <img class="right" src="../img/vr02.png" alt="">
        </div>
    </section>
    <section class="edu">
        <div class="inner" data-aos="fade-up">
            <h2>
            <?php echo $row['area2'];?>
            </h2>
            <div class="edu_el" data-aos="fade-up">
                <img src="../img/edu01.png" alt="">
                <h3>
                <?php echo $row['area3'];?>
                </h3>
            </div>
            <?php echo $row['area4'];?>
            <div class="edu_school" data-aos="fade-up">
                <?php echo $row['area5'];?>
            </div>
            <div class="edu_why">
                <div data-aos="fade-up">
                    <h2>1</h2>
                    <div class="right">
                        <?php echo $row['area6'];?>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <h2>2</h2>
                    <div class="right">
                        <?php echo $row['area7'];?>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <h2>3</h2>
                    <div class="right">
                        <?php echo $row['area8'];?>
                    </div>
                </div>
            </div>
        </div> 
        <div class="edu_mid">
                <?php echo $row['area9'];?>
        </div>
        <div class="edu_procedure">
            <div data-aos="fade-up">
                <img src="../img/vr_coding/edu/<?php echo $row['img_1']?>" alt="">
                <div class="right">
                <?php echo $row['area10'];?>
                </div>
            </div>
            <div data-aos="fade-up">
                <img src="../img/vr_coding/edu/<?php echo $row['img_2']?>" alt="">
                <div class="right">
                <?php echo $row['area11'];?>
                </div>
            </div>
            <div data-aos="fade-up">
                <img src="../img/vr_coding/edu/<?php echo $row['img_3']?>" alt="">
                <div class="right">
                <?php echo $row['area12'];?>
                </div>
            </div>
        </div>
        <div class="edu_manual" data-aos="fade-up">
            <h2>교사용 메뉴얼 제공</h2>
            <div>
                <img src="../img/vr_coding/edu/<?php echo $row['img_4']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_5']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_6']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_7']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_8']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_9']?>" alt="">
                <!-- <img src="../img/vr_coding/edu/<?php echo $row['img_10']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_11']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_12']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_13']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_14']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_15']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_16']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_17']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_18']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_19']?>" alt="">
                <img src="../img/vr_coding/edu/<?php echo $row['img_20']?>" alt=""> -->
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

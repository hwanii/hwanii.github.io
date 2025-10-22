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
            <h2>인증현황</h2>
            <p>Certification</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>인증현황</li>
            <li>인증현황</li>
        </ul>
    </section>

    <section class="click-menu">
        <ul data-aos="fade-up">
            <li class="active"><a href="certification.php">인증현황</a></li>
        </ul>
    </section>

    <section class="certification" data-aos="fade-up">
        <h2>인증현황</h2>
        <p>Certification</p>
        <div class="inner" data-aos="fade-up">
            <?php
            $sql="SELECT * FROM bo_certification ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $thumb=$row['thumbnail'];
            ?>
            <div>
                <img src="../img/file/certification/thumb/<?php echo $thumb?>" alt="">
                <button>크게보기</button>
                <div class="certi-big">
                    <img src="../img/file/certification/thumb/<?php echo $thumb?>">
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <?php include '../footer.php';?>

</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
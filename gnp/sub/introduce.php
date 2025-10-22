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
            <h2>인사말</h2>
            <p>Message from company</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>회사소개</li>
            <li>인사말</li>
        </ul>
    </section>

    <section class="click-menu-intro">
        <ul data-aos="fade-up">
            <li class="active"><a href="../sub/introduce.php">회사소개</a></li>
            <li><a href="../sub/history.php">연혁</a></li>
            <li><a href="../sub/organization.php">조직도</a></li>
            <li><a href="../sub/map-01.php">오시는 길</a></li>
        </ul>
    </section>

    <section class="introduce" data-aos="fade-up">
        <h2>인사말</h2>
        <p>Message from company</p>
        <?php
        $sql="SELECT * FROM greeting";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        echo $row['contents'];
        ?>
    </section>

    <?php include '../footer.php';?>

</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>
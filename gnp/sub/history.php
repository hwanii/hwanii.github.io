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
            <h2>연혁</h2>
            <p>Company History</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>회사소개</li>
            <li>연혁</li>
        </ul>
    </section>

    <section class="click-menu-intro">
        <ul data-aos="fade-up">
            <li><a href="../sub/introduce.php">회사소개</a></li>
            <li class="active"><a href="../sub/history.php">연혁</a></li>
            <li><a href="../sub/organization.php">조직도</a></li>
            <li><a href="../sub/map-01.php">오시는 길</a></li>
        </ul>
    </section>

    <section class="history" data-aos="fade-up">
        <h2>연혁</h2>
        <p>Company History</p>
        <?php
        $sql="SELECT DISTINCT(DATE_FORMAT(`datetime`, '%Y')) AS year FROM history ORDER BY `datetime` DESC";
        $res=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($res)){
            $year=$row['year'];
        ?>
        <div data-aos="fade-right">
            <div class="on"><?php echo $year?></div>
            <div>
                <?php
                $tSql="SELECT * FROM history WHERE DATE_FORMAT(`datetime`, '%Y')='$year' ORDER BY `datetime` ASC";
                $tRes=mysqli_query($conn, $tSql);
                while($tRow=mysqli_fetch_array($tRes)){
                ?>
                <p><?php echo $tRow['title'];?></p>
                <?php } ?>
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
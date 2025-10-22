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
    $sql="SELECT * FROM intro";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner01">
        <div class="bg"></div>
        <div class="txt_inner">
            <?php echo $row['area1'];?>
            <div class="contents">
                <div>
                    <h4>교육 메타버스<br>NO.1 기업</h4>
                    <div><img src="../img/icon_intro01.png" alt=""></div>
                </div>
                <div>
                    <h4>글로벌<br>교육기업 진출</h4>
                    <div><img src="../img/icon_intro02.png" alt=""></div>
                </div>
                <div>
                    <h4>더 나은 내일을<br>만드는 사회적 기업</h4>
                    <div><img src="../img/icon_intro03.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="history">
        <div class="inner" data-aos="fade-up">
            <h2>HISTORY</h2>
            <?php
            $sql="SELECT DISTINCT(DATE_FORMAT(`datetime`, '%Y')) AS year FROM history ORDER BY `datetime` DESC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $year=$row['year'];
            ?>
            <div class="contents" data-aos="fade-up">
                <h3><?php echo $year?></h3>
                <div>
                    <?php 
                    $ySql="SELECT * FROM history WHERE DATE_FORMAT(`datetime`, '%Y')='$year' ORDER BY `datetime` ASC";
                    $yRes=mysqli_query($conn, $ySql);
                    while($yRow=mysqli_fetch_array($yRes)){
                        $title=$yRow['title'];
                    ?>
                    <p><?php echo $title?></p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="map" data-aos="fade-up">
        <h2>MAP</h2>
        <div class="map_contents">
            <?php
            $mSql="SELECT * FROM map";
            $mRes=mysqli_query($conn, $mSql);
            $mRow=mysqli_fetch_array($mRes);
            $map=$mRow['contents'];

            echo $map;
            ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

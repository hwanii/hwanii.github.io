<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="performance">
        <div class="inner">
            <div class="title">
                <ul class="performance_cate01">
                    <li><a href="../sub/about.php">About</a></li>
                    <li><a href="../sub/man.php">Man Power</a></li>
                    <li class="on"><a href="../sub/map.php">Location</a></li>
                </ul>
            </div>
            <?php
            $sql="SELECT * FROM map";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $map=$row['map'];

            $fSql="SELECT * FROM information";
            $fRes=mysqli_query($conn, $fSql);
            $fRow=mysqli_fetch_array($fRes);
            $tel=$fRow['tel'];
            $email=$fRow['email'];
            $addr=$fRow['addr'];
            $detail=$fRow['detail_addr'];
            ?>
            <div id="map">
                <?php echo $map?>
            </div>
            <div class="map_contents">
                <div class="left">
                    <div>
                        <h2>대표전화</h2>
                        <p><?php echo $tel?></p>
                    </div>
                    <div>
                        <h2>도로명 주소</h2>
                        <p><?php echo $addr.", ".$detail?></p>
                    </div>
                    <div>
                        <h2>이메일</h2>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

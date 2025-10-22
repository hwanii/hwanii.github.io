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
        <div class="bg"></div>
        <div class="txt-box">
            <img src="../img/slide-logo.png" alt="">
            <h2>마음 속, 편안한 숲을<br>가꾸어 드립니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;정신건강검진&nbsp;&nbsp;>&nbsp;&nbsp;정신건강검진 안내</p>
        </div>
    </section>
    <div class="sub_title">
        <h2>정신건강검진 안내</h2>
        <p>MENTAL HEALTH EXAMINATION</p>
    </div>
    <section class="mental">
        <div class="inner">
            <?php
            $sql="SELECT * FROM list";
            $res=mysqli_query($conn, $sql);
            $rows=mysqli_num_rows($res);
            $row=mysqli_fetch_array($res);
            $guide=$row['guide'];
            $mind_basic=$row['mind_basic'];
            $mind_plus=$row['mind_plus'];
            $junior_plus=$row['junior_plus'];
            $senior_plus=$row['senior_plus'];
            ?>
            <h2>정신건강검진 안내</h2>
            <p>
                <?php echo $guide?>
            </p>
            <ul>
                <li>
                    <h2>1.MIND BASIC</h2>
                    <div>
                        <?php echo $mind_basic?>
                    </div>
                </li>
                <li>
                    <h2>2.MIND PLUS (직장인 추천)</h2>
                    <div>
                        <?php echo $mind_plus?>
                    </div>
                </li>
                <li>
                    <h2>3.JUNIOR PLUS (소아청소년)</h2>
                    <div>
                        <?php echo $junior_plus?>
                    </div>
                </li>
                <li>
                    <h2>4.SENIOR PLUS (장년층 및 노인)</h2>
                    <div>
                        <?php echo $senior_plus?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

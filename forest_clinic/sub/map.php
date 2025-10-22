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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;센터소개&nbsp;&nbsp;>&nbsp;&nbsp;오시는 길</p>
        </div>
    </section>
    <section class="map">
        <div class="inner">
            <div class="sub_title">
                <h2>오시는 길</h2>
                <p>MAP INFORMATION</p>
            </div>
            <?php
            $sql="SELECT * FROM map";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $map=$row['map'];
            $subway=$row['subway'];
            $bus=$row['bus'];
            $sub_bus=$row['sub_bus'];
            $line=$row['line'];
            $area=$row['area'];
            $straight=$row['straight'];
            ?>
            <div class="main_map">
                <?php echo $map?>
            </div>
            <div class="contents">
                <?php
                $iSql="SELECT * FROM information";
                $iRes=mysqli_query($conn, $iSql);
                $iRow=mysqli_fetch_array($iRes);
                $tel=$iRow['tel'];
                $addr=$iRow['addr'];
                $detail=$iRow['detail_addr'];
                ?>
                <div class="left">
                    <div>
                        <h2>대표전화</h2>
                        <p><?php echo $tel?></p>
                    </div>
                    <div>
                        <h2>도로명 주소</h2>
                        <p><?php echo $addr.", ",$detail?></p>
                    </div>
                    <div class="top">
                        <h2>평일 운영</h2>
                        <p>AM 10:00 ~ PM 08:00</p>
                    </div>
                    <div>
                        <h2>토요일 운영</h2>
                        <p>AM 10:00 ~ PM 02:00</p>
                    </div>
                    <div>
                        <h2>점심시간</h2>
                        <p>AM 02:00 ~ PM 03:00</p>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <h2>지하철</h2>
                        <p><?php echo $subway?></p>
                    </div>
                    <div>
                        <h2>버스</h2>
                        <p><?php echo $bus?></p>
                    </div>
                    <div class="bus_line co_bl">
                        <span>간선</span>
                        <i><?php echo $sub_bus?></i>
                    </div>
                    <div class="bus_line co_gr">
                        <span>지선</span>
                        <i><?php echo $line?></i>
                    </div>
                    <div class="bus_line co_rd">
                        <span>광역</span>
                        <i><?php echo $area?></i>
                    </div>
                    <div class="bus_line co_rd">
                        <span>직행</span>
                        <i><?php echo $straight?></i>
                    </div>
                </div>
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

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="swiper-container main-slide">
        <div class="swiper-wrapper">
            <?php
            $sql="SELECT * FROM slide ORDER BY `number` ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $contents=$row['contents'];
                $back=$row['background'];
            ?>
            <div class="swiper-slide bg01">
                <video id="vid" autoplay="autoplay" muted="muted" loop playsinline>
                    <source src="./admin/img/background/<?php echo $back?>" type="video/mp4">
                </video>
                <div class="bg"></div>
                <div class="txt-box">
                    <img src="img/slide-logo.png" alt="">
                    <p><?php echo $title?></p>
                    <h2><?php echo $contents?></h2>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-btn-boxes">
            <div class="swiper-btn-prev01"><img src="img/big-slide-left-arrow.png" alt=""></div>
            <div class="swiper-btn-next01"><img src="img/big-slide-right-arrow.png" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section class="main_page">
        <div class="main01">
            <div class="inner">
                <div class="main_title">
                    <h2>인사말</h2>
                    <p>숲 정신건강센터는 여러분을 환영합니다.</p>
                </div>
                <div class="contents">
                    <div class="left">
                        <?php
                        $sql="SELECT * FROM greeting";
                        $res=mysqli_query($conn, $sql);
                        $row=mysqli_fetch_array($res);
                        echo $row['main_contents'];
                        ?>
                    </div>
                    <div class="right">
                        <h2>숲 정신건강증진센터 검사 및 검진 프로그램</h2>
                        <ul>
                            <li><a href="sub/mental.php">종합 정신건강검진 프로그램</a></li>
                            <li><a href="sub/list.php#QEEG">QEEG 정량뇌파검사</a></li>
                            <li><a href="sub/list.php#CNSVS">CNSVS, CAT 신경인지검사</a></li>
                            <li><a href="sub/list.php#synthesis">Full battery 종합심리검사</a></li>
                        </ul>
                        <p>선릉숲정신건강의학과의원의 심리검사센터입니다</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="main02">
                <div class="main_title">
                    <h2>둘러보기</h2>
                    <p>내부 시설을 둘러보실 수 있습니다.</p>
                </div>
                <div class="main_grid">
                    <div class="big_grid">
                        <div class="grid01">
                            <img src="img/grid01.png" alt="">
                            <img src="img/grid02.png" alt="">
                            <img src="img/grid03.png" alt="">
                        </div>
                        <div class="grid02">
                            <img src="img/grid04.png" alt="">
                            <img src="img/grid05.png" alt="">
                        </div>
                    </div>
                    <div class="big_grid">
                        <div class="grid03">
                            <img src="img/grid06.png" alt="">
                            <img src="img/grid07.png" alt="">
                        </div>
                        <div class="grid04">
                            <img src="img/grid08.png" alt="">
                            <img src="img/grid09.png" alt="">
                            <img src="img/grid10.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main03">
                <div class="main_title">
                    <h2>검사항목</h2>
                    <p>체계적인 검사 항목을 소개합니다.</p>
                </div>
                <?php
                $sql="SELECT * FROM list";
                $res=mysqli_query($conn, $sql);
                $rows=mysqli_num_rows($res);
                $row=mysqli_fetch_array($res);
                $mind_basic=$row['mind_basic'];
                $mind_plus=$row['mind_plus'];
                $junior_plus=$row['junior_plus'];
                $senior_plus=$row['senior_plus'];
                ?>
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
            <div class="main04">
                <div class="main_title">
                    <h2>오시는 길</h2>
                    <p>숲 정신건강센터로 오시는 방법입니다.</p>
                </div>
                <div class="main_map">
                    <?php
                    $sql="SELECT * FROM map";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    $subway=$row['subway'];
                    $bus=$row['bus'];
                    $sub_bus=$row['sub_bus'];
                    $line=$row['line'];
                    $area=$row['area'];
                    $straight=$row['straight'];
                    echo $row['map'];
                    ?>
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
                            <p><?php echo $addr.", ".$detail?></p>
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
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

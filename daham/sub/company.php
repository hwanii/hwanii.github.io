<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="../img/main-logo01.png" alt="">
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;회사소개&nbsp;&nbsp;>&nbsp;&nbsp;다함 트레이딩</p>
        </div>
    </section>
    <section class="company">
        <div class="inner">
            <img src="../img/sub-logo.png" alt="">
            <div class="sub_box">
                <p>
                    2013년도부터 무역경험이 축적된 중국 현지 전문가와
                    <b>국내 유통전문가가 최상의 서비스를 제공 합니다.</b>
                </p>
                <span>
                    고객이 필요로 하는 수많은 아이템을 취급하면서 쌓여진 노하우를 제공하며,<br>
                    이우시장 및 중국 모든지역 공장 직접 방문으로 인터넷 검색 대비<br>
                    더 낮은 가격, 더 완벽한 서비스를 제공하고자 합니다.
                </span>
            </div>
            <h2>다함코리아를 선택<span>해야 하는 이유</span></h2>
            <ul class="contents_box" data-aos="fade-up">
                <li>
                    <h2>01</h2>
                    <span>TRUST</span>
                    <p>
                        다함코리아는<br>
                        수수료 이외의 어떠한 추가금도<br>
                        요구하지 않습니다.
                    </p>
                </li>
                <li>
                    <h2>02</h2>
                    <span>PROFESIONAL</span>
                    <p>
                        다함코리아는 한국사무소,<br>
                        이우사무소, 청도사무소 각 지역에<br>
                        전문가들이 있어 발빠르게<br>
                        대응이 가능합니다.
                    </p>
                </li>
                <li>
                    <h2>03</h2>
                    <span>CHECK</span>
                    <p>
                        다함코리아는<br>
                        선적 작업 전 창고 검수를 통해<br>
                        불량율을 최소화 해드립니다.
                    </p>
                </li>
                <li>
                    <h2>04</h2>
                    <span>PARTNERSHIP</span>
                    <p>
                        다함코리아는 고객의 성장을<br>
                        회사의 성장으로 생각하고<br>
                        동반성장을 목표로 합니다.
                    </p>
                </li>
            </ul>
            <?php
            $sql="SELECT * FROM map";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $kor_addr=$row['kor_addr'];
            $kor_tel=$row['kor_tel'];
            $kor_map=$row['kor_map'];

            $iu_addr=$row['iu_addr'];
            $iu_tel=$row['iu_tel'];
            $iu_map=$row['iu_map'];

            $cd_addr=$row['cd_addr'];
            $cd_tel=$row['cd_tel'];
            $cd_map=$row['cd_map'];
            ?>
            <div class="map_contents">
                <div class="contents">
                    <h2>한국 사무소</h2>
                    <p>주소 : <?php echo $kor_addr?></p>
                    <p>전화 : <?php echo $kor_tel?></p>
                    <?php echo $kor_map?>
                </div>
                <div class="contents">
                    <h2>이우 사무소</h2>
                    <p>이우사무소주소 : <?php echo $iu_addr?></p>
                    <p>전화 : <?php echo $iu_tel?></p>
                    <?php echo $iu_map?>
                </div>
                <div class="contents">
                    <h2>청도 사무소</h2>
                    <p>청도사무소주소 : <?php echo $cd_addr?></p>
                    <p>전화 : <?php echo $cd_tel?></p>
                    <?php echo $cd_map?>
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

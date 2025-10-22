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
            <h2>오시는 길</h2>
            <p>MAP</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>회사소개</li>
            <li>오시는 길</li>
        </ul>
    </section>

    <section class="click-menu-intro">
        <ul data-aos="fade-up">
            <li><a href="../sub/introduce.php">회사소개</a></li>
            <li><a href="../sub/history.php">연혁</a></li>
            <li><a href="../sub/organization.php">조직도</a></li>
            <li class="active"><a href="../sub/map-01.php">오시는 길</a></li>
        </ul>
    </section>

    <section class="map" data-aos="fade-up">
        <h2>오시는 길</h2>
        <p>MAP</p>
        <div class="map-cate" data-aos="fade-up">
            <a href="../sub/map-01.php" class="on">본사</a>
            <a href="../sub/map-02.php">제주지사</a>
        </div>

        <?php
        $iSql="SELECT * FROM information";
        $iRes=mysqli_query($conn, $iSql);
        $iRow=mysqli_fetch_array($iRes);
        $iAddr=$iRow['addr'];
        $iDetail=$iRow['detail_addr'];
        $iTel=$iRow['tel'];
        $iFax=$iRow['fax'];
        $iEmail=$iRow['email'];

        $bSql="SELECT * FROM branch";
        $bRes=mysqli_query($conn, $bSql);
        $bRow=mysqli_fetch_array($bRes);
        $bAddr=$bRow['addr'];
        $bDetail=$bRow['detail_addr'];
        $bTel=$bRow['tel'];
        $bFax=$bRow['fax'];
        $bEmail=$bRow['email'];
        ?>
        <div class="map-block" data-aos="fade-up">
            <div class="mapmap">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1669870458410" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1669870458410",
                        "key" : "2cta6",
                        "mapHeight" : "600"
                    }).render();
                </script>
            </div>
        </div>
        <div class="map-des" data-aos="fade-up">
            <div>
                <h2>GNP 본사</h2>
                <p>
                    <?php echo $iAddr?> <?php echo $iDetail?><br>
                    전화 : <?php echo $iTel?> 팩스 : <?php echo $iFax?>
                </p>
            </div>
            <div>
                <h2>제주지사</h2>
                <p>
                    <?php echo $bAddr?> <?php echo $bDetail?><br>
                    전화 : <?php echo $bTel?> 팩스 : <?php echo $bFax?>
                </p>
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
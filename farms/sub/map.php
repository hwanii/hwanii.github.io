<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>팜스 바이오텍</title>
    <meta name="description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/opengraph-img.jpg" />
    <meta property="og:title" content="팜스 바이오텍" />
    <meta property="og:description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업" />
    <meta property="og:url" content="http://farmsbiotech.co.kr" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon//favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <?php
    $bSql="SELECT * FROM banner WHERE `type`='company'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    $back=$bRow['img'];
    ?>
    <div class="sub-banner" style="background:url('../img/file/banner/<?php echo $back?>')">
        <div class="bg"></div>
        <div class="txt">
            <h2>BIO TECH, THIINK FUTURE</h2>
            <p>
                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업  
            </p>
        </div>
    </div>

    <div class="flow">
        <div class="inner">
            <div class="left">
                <div class="head">
                    <p>COMPANY</p>
                    <img src="../img/down-arrow.png" alt="">
                </div>
                <div class="title">
                    <ul>
                        <li><a href="../sub/introduce.php">인사말</a></li>
                        <li><a href="../sub/vision.php">비전</a></li>
                        <li><a href="../sub/history.php">연혁</a></li>
                        <!-- <li><a href="../sub/capa.php">회사역량</a></li> -->
                        <li><a href="../sub/eq.php">보유장비</a></li>
                        <li class="on"><a href="../sub/map.php">오시는 길</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMPANY&nbsp;&nbsp;>&nbsp;&nbsp;오시는 길</div>
        </div>
    </div>

    <section class="map">
            <div class="title">
                <h2>오시는 길</h2>
                <p>MAP</p>
            </div>
            <h4>팜스 바이오텍에 방문하시는 방법입니다.</h4>
            <div id="map">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1667975714679" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1667975714679",
                        "key" : "2cg75",
                        // "mapWidth" : "640",
                        "mapHeight" : "640"
                    }).render();
                </script>
            </div>
            <div id="map02">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1667975481712" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1667975481712",
                        "key" : "2cg6w",
                        // "mapWidth" : "640",
                        "mapHeight" : "300"
                    }).render();
                </script>
            </div>
            <div class="box01">
                <h2>대중교통 이용안내</h2>
                <div>
                    <p>버스번호  13,20,121,200,201</p>
                    <p>도착지 : 단대병원</p>
                    <p>배차시간 : 20분</p>
                    <p>단대 부속병원 주차장 방향</p>
                </div>
            </div>
            <div class="box02">
                <h2>자가용 이용안내</h2>
                <p>
                    천안 IC → 천안 IC에서 ‘입장, 성거’ 방면으로 오른쪽 방향 → ‘단국대병원’ 방면으로 비보호 좌회전 →<br>
                    ‘단국대학교 부속병원 주차장’ 방면으로 우회전 → ‘단국대학교 생명공학 창업보육센터’ 방면으로 좌회전
                </p>
                <span>※ 지도 애플리케이션 검색창에 ‘팜스 바이오텍’을 검색하시면 쉽게 찾아오실 수 있습니다.</span>
            </div>
            <div class="box03">
                <h2>주소 및 연락처</h2>
                <p>충남 천안시 동남구 단대로119, 단국대학교 생명공학 창업보육센터 309호</p>
                <p>Tel. 070) 8845-3542&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax. 041) 566-3542</p>
            </div>
    </section>

    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

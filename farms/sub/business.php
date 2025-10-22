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
    $bSql="SELECT * FROM banner WHERE `type`='business'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    $back=$bRow['img'];
    ?>
    <div class="sub-banner02" style="background:url('../img/file/banner/<?php echo $back?>')">
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
                    <p>BUSINESS</p>
                    <img src="../img/down-arrow.png" alt="">
                </div>
                <div class="title">
                    <ul>
                        <li class="on"><a href="../sub/business.php">사업분야</a></li>
                        <li><a href="../sub/licenses.php">허가사항</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;BUSINESS&nbsp;&nbsp;>&nbsp;&nbsp;사업분야</div>
        </div>
    </div>

    <section class="ba">
        <div class="inner">
            <div class="title">
                <h2>사업분야</h2>
                <p>BUSINESS AREA</p>
                <span>
                    생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                    다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업
                </span>
            </div>
            <div class="ba-box">
                <img src="../img/business01.jpg" alt="">
                <div>
                    <h2>01</h2>
                    <h3>생물학적 제제 연구개발</h3>
                    <p>
                        기능성 미생물을 스크리닝, 발효 분석, 효소, 향균활성, 2<sup>nd</sup> 대사산물 등을<br>
                        연구개발 산업적 응용
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business02.jpg" alt="">
                <div>
                    <h2>02</h2>
                    <h3>미생물 분석 및 분석 대행</h3>
                    <p>
                        일반시험(현미경 검경, 수분측정, pH 측정, 입도시험, 탁도시험 등)<br>
                        미생물 시험분석(일반세균수, 진균수, 혐기성 미생물, 특정 미생물)<br>
                        효소 분석시험(a, b-Amylase, Protease, Cellulose, Lipase)
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business03.jpg" alt="">
                <div>
                    <h2>03</h2>
                    <h3>연구개발, 컨설팅, 교육</h3>
                    <p>
                        산학연 및 협력업체와의 공동 연구개발, 선도농가 등을 대상으로 한 컨설팅 교육<br>
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business04.jpg" alt="">
                <div>
                    <h2>04</h2>
                    <h3>미생물 생배지, 분말 배지 제조</h3>
                    <p>
                        연구소, 실험실 등과 같은 곳에서 분석용으로 사용 가능한 배지 제조<br>
                        학생들이 과학실습 시 이용할 수 있는 배지 제조<br>
                        바실러스, 유산균, 효모 등을 배양할 수 있는 배양 배지 공급<br>
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business05.jpg" alt="">
                <div>
                    <h2>05</h2>
                    <h3>조달청&#47;학교장터 공급업체</h3>
                    <p>
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business06.jpg" alt="">
                <div>
                    <h2>06</h2>
                    <h3>생물 비료, 유기질 비료 제조</h3>
                    <p>
                        식물 생육에 필요한 영양소 공급<br>
                        제품에 포함된 미생물 기능성을 활용한 토양(또는 유기질 비료)의 유기물 분해 공급, 세균성 <br>
                        질병예방에 도움이 되는 제품 개발
                    </p>
                </div>
            </div>
            <div class="ba-box">
                <img src="../img/business07.jpg" alt="">
                <div>
                    <h2>07</h2>
                    <h3>동물 보조사료 제조</h3>
                    <p>
                        동물의 장내기능 개선, 소화율 개선, 세균성 질병의 예방에 도움이 되는 제품 개발,<br>
                        악취저감과 관련한 제품 개발
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

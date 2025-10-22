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
                        <li class="on"><a href="../sub/introduce.php">인사말</a></li>
                        <li><a href="../sub/vision.php">비전</a></li>
                        <li><a href="../sub/history.php">연혁</a></li>
                        <!-- <li><a href="../sub/capa.php">회사역량</a></li> -->
                        <li><a href="../sub/eq.php">보유장비</a></li>
                        <li><a href="../sub/map.php">오시는 길</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMPANY&nbsp;&nbsp;>&nbsp;&nbsp;인사말</div>
        </div>
    </div>

    <section class="introduce">
        <div class="title">
            <h2>인사말</h2>
            <p>MESSAGE FROM FARMS</p>
        </div>
        <?php
        $sql="SELECT * FROM greeting";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $contents=$row['contents'];
        ?>

        <?php
        echo $contents;
        ?>
        <!-- <div class="hello">
            <h2>
                안녕하십니까?<br>
                팜스바이오텍 홈페이지를 방문해 주셔서<br>
                진심으로 감사드립니다.
            </h2>
            <p>
                팜스 바이오텍은 기능성 미생물을 활용한<br>
                산업의 다양한 문제를 해결하고자 설립되었습니다.
            </p>
        </div>
        <div class="box">
            <h4>팜스 바이오텍은<br>안전을 실천합니다.</h4>
            <p>
                팜스 바이오텍은 일반적으로 안전하다고 알려진 미생물인<br><br>
                GRAs(Generally Recognized as Safe) 균주를 스크리닝하고 그 기능성을 발굴하고 있습니다.<br><br>
                그 중 대표적인 미생물 그룹인 B. Subtilis, Lactobacillus sp., S. Cerevisiae 등의 기능성을 활용한 제품을 산업에 적용하고 있습니다.<br><br>
                이는 우리가 오랫동안 알게, 모르게 생활에 활용된 미생물로 사람을 포함하여 모든 동,식물에 유익하게 작용을 합니다.<br><br>
                토양, 사람 및 가축의 장내, 식품, 과일 등에 존재하면서 인류와 함께 지내온 미생물로 화학제제에 비하여 매우 안전합니다.<br><br>
                이러한 미생물 및 그 기능성을 생물학적제제, 동물보조사료, 생물비료 등에 다양하게 활용할수 있도록 연구개발하고 있습니다.
            </p>
        </div>
        <div class="box">
            <h4>팜스 바이오텍은<br>친환경을 실천합니다.</h4>
            <p>
                팜스 바이오텍은 미생물을 활용한 생분해성플라스틱의 연구개발을 통해, 합성플라스틱으로 인한 문제를 해결합니다.<br><br>
                플라스틱의 소재 중 "비스페놀A", "프탈레이트" 등과 같은 화학물질은 지하수를 오염, 동식물에 독성을 유발합니다.<br><br>
                저희는 안전한 생분해성플라스틱의 연구개발을 통해서 화학합성플라스틱으로 발생하는 환경문제를 예방 및 해결하려고 합니다.
            </p>
        </div>
        <div class="box">
            <h4>팜스 바이오텍은<br>미생물 배양/분석용배지를 생산합니다.</h4>
            <p>
                침, 객담, 혈액에 존재하는 미생물의 배양 및 분석에 활용가능합니다.<br><br>
                수질, 토양, 대기 등 일반환경 뿐만아니라 GMP시설의 환경모니터링용으로 활용이 가능합니다.<br><br>
                학생들의 교구용으로 활용이 가능합니다.
            </p>
        </div>
        <h3>
            항상 초지일관(初志一貫)의 자세로,<br>
            세계 정상을 향해 끊임없이 나아가겠습니다.<br>
            고객님들의 응원과 지지에 감사드립니다.
        </h3> -->
    </section>

    <?php include '../footer.php'; ?>
</body>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

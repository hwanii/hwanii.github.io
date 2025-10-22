<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MEPLACE</title>
    <meta name="description" content="로컬의 자산을 발굴하고 공간의 경험으로 제안하여 지속가능한 도시와 공간을 만드는 플랫폼 기업입니다.">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="../img/opengraph-img.jpg" />
    <meta property="og:title" content="MEPLACE" />
    <meta property="og:description" content="로컬의 자산을 발굴하고 공간의 경험으로 제안하여 지속가능한 도시와 공간을 만드는 플랫폼 기업입니다." />
    <meta property="og:url" content="http://www.meplace.co.kr/" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="local">
        <div class="inner">
            <h3>
                지역의 자산으로 남을 콘텐츠를 만들고, 지속 가능한 경제성을 확보하고,<br>
                사람이 머무는 공간을 만듭니다
            </h3>
            <p>
                날것의 자연과 시골 고유의 매력을 즐기면서도 도시 생활에 여유와 편안함을 부여하는 RUSTIC+LIFE를 지향합니다.<br>
                MEPLACE는 공간과 그곳의 사람들이 가지고 있는 스토리와 콘텐츠를 기반으로 가치를 부여하고,<br>
                이를 통해 <span>VISIT</span> - <span>STAY</span> - <span>WORK</span> - <span>LIVE</span>의 단계를 통해 도시에 새생명을 불어 넣는 일을 합니다.
            </p>
        </div>
    </section>
    <section class="local-re">
        <div class="inner">
            <h2>STORY</h2>
            <div class="contents">
                <?php
                $sql="SELECT * FROM bo_local ORDER BY num DESC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $contents=$row['contents'];
                    $thumb=$row['thumbnail'];
                ?>
                <div>
                    <h3><?php echo $title?></h3>
                    <img src="../img/file/local/<?php echo $thumb?>" alt="">
                    <div class="txt">
                        <h4>사업 개요</h4>
                        <p>
                            <?php echo nl2br($contents)?>
                        </p>
                    </div>
                </div>
                <?php } ?>
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

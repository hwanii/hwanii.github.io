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
    <section class="retail">
        <div class="inner">
            <div class="contents">
                <div class="left">
                    <h3>
                        MEPLACE는 Sustainability(지속가능성)을 통한 부가가치의 창출을 추구합니다.
                    </h3>
                    <p>
                        우리의 비즈니스 모델은 사람과 상생을 기반으로 창출되며<br class="retail-br-none">
                        그 안의 공동체를 중요하게 생각합니다.<br>
                        MEPLACE는 그 안에서 사회적 가치를 키워 가고자 합니다.
                    </p>
                </div>
                <ul class="right">
                    <li>
                        <h3>Community</h3>
                        <p>
                            편안한 휴식과 만남,<br>
                            함께 모여 책을 읽고 토론도 하는<br>
                            소셜 공간
                        </p>
                    </li>
                    <li>
                        <h3>Utility</h3>
                        <p>
                            우리 생활에 필요한<br>
                            유틸리티 시설의 결합으로<br>
                            유용성이 한층 높아진 공간
                        </p>
                    </li>
                    <li>
                        <h3>Creative</h3>
                        <p>
                            제품촬영, 라이브방송 영상<br>
                            작업까지 한번에 가능한<br>
                            콘텐츠제작의 크리에이티브 공간
                        </p>
                    </li>
                    <li>
                        <h3>Collaboration</h3>
                        <p>
                            회의, 교육 및 모임, 회식 등이<br>
                            가능한 협업의 공감
                        </p>
                    </li>
                    <li>
                        <h3>Study</h3>
                        <p>
                            주의를 의식하지 않고<br>
                            집중력을 발휘 할 수 있는<br>
                            최적화 된 학습공간
                        </p>
                    </li>
                    <li>
                        <h3>Culture</h3>
                        <p>
                            문화 예술의 전반적 활동을<br>
                            수용할 수 있는<br>
                            복합문화 공간
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="people">
        <div class="inner">
            <h2>STORY</h2>
            <div class="contents">
                <?php
                $sSql="SELECT * FROM bo_story ORDER BY num ASC";
                $sRes=mysqli_query($conn, $sSql);
                while($sRow=mysqli_fetch_array($sRes)){
                    $sThumb=$sRow['thumbnail'];
                ?>
                <div><img src="../img/file/story/<?php echo $sThumb?>" alt=""></div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="cafe">
        <div class="inner">
            <h2>café & space</h2>
            <div class="contents">
                <?php
                $sql="SELECT * FROM bo_cafe_space ORDER BY num DESC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $thumb=$row['thumbnail'];
                    $title=$row['title'];
                    $contents=$row['contents'];
                    $addr=$row['file_3'];
                    $time=$row['file_4'];
                ?>
                <div>
                    <h3><?php echo $title?></h3>
                    <img src="../img/file/cafe_space/<?php echo $thumb?>" alt="">
                    <div class="txt">
                        <div>
                            <h4>주소</h4>
                            <p><?php echo $addr?></p>
                        </div>
                        <div>
                            <h4>운영기간</h4>
                            <p><?php echo $time?></p>
                        </div>
                        <span class="cafe-mb">
                            <?php echo nl2br($contents)?>
                        </span>
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

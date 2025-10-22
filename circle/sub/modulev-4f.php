<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CIRCLE</title>
    <meta name="description" content="운영시간AM 09:00 ~ PM 12:00 Address경기도 성남시 분당구 대왕판교로 131 Tel070) 8807 - 8131">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="../img/opengraph-img.PNG" />
    <meta property="og:title" content="CIRCLE" />
    <meta property="og:description" content="운영시간AM 09:00 ~ PM 12:00 Address경기도 성남시 분당구 대왕판교로 131 Tel070) 8807 - 8131" />
    <meta property="og:url" content="홈페이지 URL 입력" />
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
    <?php include '../header.php';?>

    <div class="banner">
        <!-- <img src="../img/banner.png" alt=""> --><?php
        $bSql="SELECT * FROM banner WHERE `type`='Lifestyle' AND `number`='4'";
        $bRes=mysqli_query($conn, $bSql);
        $bRow=mysqli_fetch_array($bRes);
        $img=$bRow['img'];
        $text=$bRow['contents'];
        ?>
        <div class="img" style="background: url('../img/file/banner/<?php echo $img?>') no-repeat center/cover;"></div>
        <div class="bn-bg"></div>
        <div class="wh-txt">
            <h2>Lifestyle Station</h2>
            <p><?php echo $text?></p>
        </div>
    </div>

    <main class="module">
        <section class="floor" data-aos="fade-up">
            <div class="left">
                <a href="../sub/modulev-3f.php">
                    <p>3F</p>
                    <span>&#60;&#60;&#60;&#60;</span>
                </a>
            </div>
            <div class="center">
                <h2>Skywalk</h2>
                <p>Unexpected</p>
            </div>
            <div class="right">
                <a href="../sub/modulev-1f.php">
                    <span>&#62;&#62;&#62;&#62;</span>
                    <p>1F</p>
                </a>
            </div>
        </section>
        <section class="space-des" data-aos="fade-up">
            <h2>SPACE DESCRIPTION</h2>
            <a href="javascript:void(0)" class="space-con01">
                <div>
                    <h3>Skywalk</h3>
                    <p>
                        그냥 음악을 들으며 아무생각없이 한번만 걸어보세요. 눈을감고 코끝을 스치는 바람과 소리를 들어보세요.  Circle이 오늘을 이야기 하는 아름다운 음악과 도심속의 자연과 여유를 선물해 드립니다.
                    </p>
                </div>
                <img src="../img/SIK_9841.jpg" alt="">
            </a>
        </section>
        <section class="space-view" data-aos="fade-up">
            <h2>DETAIL VIEW</h2>
            <div class="space-wrap">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM slide WHERE `type`='Skywalk' AND background!='' ORDER BY `number` ASC";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $slide=$row['background'];
                        ?>
                        <div class="swiper-slide">
                            <a href="javascript:void(0)">
                                <img src="../img/file/slider/<?php echo $slide?>" alt="">
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

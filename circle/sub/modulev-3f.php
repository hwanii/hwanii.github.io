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
        $bSql="SELECT * FROM banner WHERE `type`='Lifestyle' AND `number`='3'";
        $bRes=mysqli_query($conn, $bSql);
        $bRow=mysqli_fetch_array($bRes);
        $img=$bRow['img'];
        $text=$bRow['contents'];
        ?>
        <div class="img cafe" style="background: url('../img/file/banner/<?php echo $img?>') no-repeat center/cover;"></div>
        <div class="bn-bg"></div>
        <div class="wh-txt">
            <h2>Lifestyle Station</h2>
            <p><?php echo $text?></p>
        </div>
    </div>

    <main class="module">
        <section class="floor" data-aos="fade-up">
            <div class="left">
                <a href="../sub/modulev-2f.php">
                    <p>2F</p>
                    <span>&#60;&#60;&#60;&#60;</span>
                </a>
            </div>
            <div class="center">
                <h2>3F</h2>
                <p>Open space</p>
            </div>
            <div class="right">
                <a href="../sub/modulev-4f.php">
                    <span>&#62;&#62;&#62;&#62;</span>
                    <p>Skywalk</p>
                </a>
            </div>
        </section>
        <section class="space-des" data-aos="fade-up">
            <h2>SPACE DESCRIPTION</h2>
            <a href="javascript:void(0)" class="space-con01">
                <div>
                    <h3>Cafe</h3>
                    <i>Circle의 Coffee 이야기</i>
                    <p>
                        circle은 좋은원두를 제공해 드리기 위해 서클을 중심으로 전세계 동서남북의 커피를 매년 소싱합니다. 최고의 블랜드를 위해 원두가 가진 잠재력을 최대한 발휘할 수 있도록 로스팅 하는것도 우리가 가장 중요하게 생각하는 일 입니다. 좋은 원두에서 시작해서 여러분을 만나는 순간까지 circle은 최선을 다하고 있습니다. Coffee를 통해 여러분과 커뮤니티가 되고 싶은 circle의 마음입니다. 
                    </p>
                </div>
                <img src="../img/SIK_9780.jpg" alt="">
            </a>
        </section>

        <section class="cafe-img">
            <div>
                <img src="../img/1_1.jpg" alt="">
                <img src="../img/1_2.jpg" alt="">
            </div>
            <div>
                <img src="../img/1_3.jpg" alt="">
                <img src="../img/1_4.jpg" alt="">
            </div>
            <div>
                <img src="../img/1_5.jpg" alt="">
                <img src="../img/1_6.jpg" alt="">
            </div>
            <div>
                <img src="../img/1_7.jpg" alt="">
                <img src="../img/1_8.jpg" alt="">
            </div>
            <div>
                <img src="../img/1_9.jpg" alt="">
                <img src="../img/1_10.jpg" alt="">
            </div>
        </section>

        <section class="space-view" data-aos="fade-up">
            <h2>DETAIL VIEW</h2>
            <div class="space-wrap">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM slide WHERE `type`='3F' AND background!='' ORDER BY `number` ASC";
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

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
        $bSql="SELECT * FROM banner WHERE `type`='Lifestyle' AND `number`='2'";
        $bRes=mysqli_query($conn, $bSql);
        $bRow=mysqli_fetch_array($bRes);
        $img=$bRow['img'];
        $text=$bRow['contents'];
        ?>
        <div class="img fika" style="background: url('../img/file/banner/<?php echo $img?>') no-repeat center/cover;"></div>
        <div class="bn-bg"></div>
        <div class="wh-txt">
            <h2>Lifestyle Station</h2>
            <p><?php echo $text?></p>
        </div>
    </div>

    <main class="module">
        <section class="floor" data-aos="fade-up">
            <div class="left">
                <a href="../sub/modulev-1f.php">
                    <p>1F</p>
                    <span>&#60;&#60;&#60;&#60;</span>
                </a>
            </div>
            <div class="center">
                <h2>2F</h2>
                <p>Creative space</p>
            </div>
            <div class="right">
                <a href="../sub/modulev-3f.php">
                    <span>&#62;&#62;&#62;&#62;</span>
                    <p>3F</p>
                </a>
            </div>
        </section>
        <section class="space-des" data-aos="fade-up">
            <h2>SPACE DESCRIPTION</h2>
            <a href="javascript:void(0)" class="space-con01">
                <div>
                    <h3>F.I.K.A</h3>
                    <p>
                        피카(FIKA)는＂커피와 함께하는 휴식시간”을 뜻합니다, 스웨덴에서는 단순히 커피를 마시는 것이 아니라 커피와 간식을 즐기며 가족이나 친구와 대화를 나누는 시간을 의미합니다, 친구를 만들고 함께 즐거운취미를 가지고 머리를 식히고 잠시 숨을 고르는 일상의 여유를 드리고 싶은 circle의 공간 입니다. 
                    </p>
                </div>
                <img src="../img/fika_des.jpg" alt="">
            </a>
            <a href="javascript:void(0)" class="space-con02">
                <img src="../img/fika_room.jpg" alt="">
                <div>
                    <h3>F.I.K.A Room 이용안내</h3>
                    <p>
                        가족의 소중한 시간을 함께 하고<br>
                        취미로 친구가 되는 시간을 만들고<br>
                        온전히 나에게 집중할 수 있는 공간<br>
                        F.I.K.A Room 은 예약제로 운영됩니다. (1층 또는 3층 카운터에 문의해 주세요)
                    </p>
                </div>
            </a>
            <a href="javascript:void(0)" class="space-con01">
                <div>
                    <h3>Circle x 솜씨당</h3>
                    <p>
                        취미를 가지는 것만으로도 누군가의 인생이 풍요로워 질수 있다는 것을 믿고 실천하는 국내 최대의 취미 플랫폼  솜씨당이 즐겁고 활력넘치는 유익한 공간으로 circle과 함께 합니다. 
                    </p>
                </div>
                <img src="../img/som.jpg" alt="">
            </a>
        </section>
        <section class="space-view" data-aos="fade-up">
            <h2>DETAIL VIEW</h2>
            <div class="space-wrap">
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM slide WHERE `type`='2F' AND background!='' ORDER BY `number` ASC";
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

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

    <div class="wh-bn">
        <!-- <img src="../img/what-banner.png" alt=""> -->
        <?php
        $bSql="SELECT * FROM banner WHERE `type`='WHATS_ON'";
        $bRes=mysqli_query($conn, $bSql);
        $bRow=mysqli_fetch_array($bRes);
        $img=$bRow['img'];
        $text=$bRow['contents'];
        ?>
        <div class="img" style="background: url('../img/file/banner/<?php echo $img?>') no-repeat center/cover;"></div>
        <div class="bn-bg"></div>
        <div class="wh-txt">
            <h2>WHAT’S_<span>ON</span></h2>
            <p><?php echo $text?></p>
        </div>
    </div>

    <section class="today" data-aos="fade-up">
        <h2>TODAY</h2>
        <?php
        $sql="SELECT * FROM bo_whats ORDER BY num DESC";
        $res=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($res)){
            $title=$row['title'];
            $locate=$row['file_3'];
            $time=$row['file_4'];
            $thumb=$row['thumbnail'];
            $contents=$row['contents'];
        ?>
        <div class="today-con">
            <a href="javascript:void(0)">
                <img src="../img/file/whats/<?php echo $thumb?>" alt="today image">
                <div class="today-right">
                    <span><?php echo $locate?></span>
                    <i><?php echo $time?></i>
                    <h3><?php echo $title?></h3>
                    <p><?php echo $contents?></p>
                </div>
            </a>
        </div>
        <?php } ?>
    </section>

    <!-- <section class="recent" data-aos="fade-up">
        <h2>RECENTLY</h2>
        <div class="recent-con">
            <a href="#">
                <img src="../img/recent01.png" alt="recent image">
                <div class="recent-right">
                    <span>DATE</span>
                    <i>MM/DD ~ MM/DD</i>
                    <h3>What’s on title print out here. Plz write here</h3>
                    <p>
                        What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too
                    </p>
                </div>
            </a>
        </div>
        <div class="recent-con">
            <a href="#">
                <img src="../img/recent02.png" alt="recent image">
                <div class="recent-right">
                    <span>DATE</span>
                    <i>MM/DD ~ MM/DD</i>
                    <h3>What’s on title print out here. Plz write here</h3>
                    <p>
                        What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too
                    </p>
                </div>
            </a>
        </div>
        <div class="recent-con">
            <a href="#">
                <img src="../img/recent03.png" alt="recent image">
                <div class="recent-right">
                    <span>DATE</span>
                    <i>MM/DD ~ MM/DD</i>
                    <h3>What’s on title print out here. Plz write here</h3>
                    <p>
                        What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too
                    </p>
                </div>
            </a>
        </div>
        <div class="recent-con">
            <a href="#">
                <img src="../img/recent04.png" alt="recent image">
                <div class="recent-right">
                    <span>DATE</span>
                    <i>MM/DD ~ MM/DD</i>
                    <h3>What’s on title print out here. Plz write here</h3>
                    <p>
                        What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too
                    </p>
                </div>
            </a>
        </div>
        <div class="recent-con">
            <a href="#">
                <img src="../img/recent05.png" alt="recent image">
                <div class="recent-right">
                    <span>DATE</span>
                    <i>MM/DD ~ MM/DD</i>
                    <h3>What’s on title print out here. Plz write here</h3>
                    <p>
                        What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too much writing here What’s on detail wording is here too
                    </p>
                </div>
            </a>
        </div>
    </section> -->
    
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

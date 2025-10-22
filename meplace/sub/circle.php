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
    <section class="circle">
        <div class="inner">
            <div>
                <div class="left">
                    <h3>라이프스타일 스테이션 서클(Circle)</h3>
                    <div class="contents">
                        <img src="../img/b_circle_logo.png" alt="">
                        <div>
                            <p class="circle-mb">
                                서클(circle) 은 동그라미, 원, 원형을 뜻하기도 하지만 
                                Club, Society, Group처럼<br> 같은 이해관계나 
                                직업, 취미 따위로 모인 사람들의 단체나 무리를 뜻하기도 합니다.
                            </p>
                            <p class="circle-mb">
                                서클(circle) 은 누군가에게는 창의적인 일터가, 누군가에게는<br>새로운 즐거움과 경험을 주는 놀이터가 되며 모두에게 늘 열려있는 여유로운 쉼터가 되고자 합니다.
                            </p>
                            <p class="circle-mb">
                                일상의 라이프스타일에 새로운 활력을 더해주는 곳,<br>
                                삶을 더 쉽고 편리하게 해주는 모빌리티 의 거점 다양한 서비스와 경험을 함께 만들고 누리는 커뮤니티(Group) 서클이 추구하는 공간의 미래 입니다.
                            </p>
                            <p>(주)SK가스와 플랫폼 빌더 MEPLACE가 함께 하는 지속가능한 라이프스타일 스테이션 서클 입니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $sql="SELECT * FROM bo_circle ORDER BY num ASC";
    $res=mysqli_query($conn, $sql);
    $thumb=array();
    while($row=mysqli_fetch_array($res)){
        array_push($thumb, $row['thumbnail']);
    }
    ?>
    <section class="circle-img">
        <div class="contents01">
            <div><img src="../img/file/circle/<?php echo $thumb[0]?>" alt="" style="<?php echo empty($thumb[0]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[1]?>" alt="" style="<?php echo empty($thumb[1]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[2]?>" alt="" style="<?php echo empty($thumb[2]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[3]?>" alt="" style="<?php echo empty($thumb[3]) ? "display:none" : "" ?>"></div>
        </div>
        <div class="contents02">
            <div><img src="../img/file/circle/<?php echo $thumb[4]?>" alt="" style="<?php echo empty($thumb[4]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[5]?>" alt="" style="<?php echo empty($thumb[5]) ? "display:none" : "" ?>"></div>
        </div>
        <div class="contents03"><div><img src="../img/file/circle/<?php echo $thumb[6]?>" alt="" style="<?php echo empty($thumb[6]) ? "display:none" : "" ?>"></div></div>
        <div class="contents04">
            <div><img src="../img/file/circle/<?php echo $thumb[7]?>" alt="" style="<?php echo empty($thumb[7]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[8]?>" alt="" style="<?php echo empty($thumb[8]) ? "display:none" : "" ?>"></div>
        </div>
        <div class="contents05">
            <div><img src="../img/file/circle/<?php echo $thumb[9]?>" alt="" style="<?php echo empty($thumb[9]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[10]?>" alt="" style="<?php echo empty($thumb[10]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[11]?>" alt="" style="<?php echo empty($thumb[11]) ? "display:none" : "" ?>"></div>
            <div><img src="../img/file/circle/<?php echo $thumb[12]?>" alt="" style="<?php echo empty($thumb[12]) ? "display:none" : "" ?>"></div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

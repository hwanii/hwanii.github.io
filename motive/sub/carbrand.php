<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>MOTIVE</title>
    <meta name="description" content="MOTIVE에서 만드는 나만의 선팅 간편 견적">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="MOTIVE" />
    <meta property="og:description" content="MOTIVE에서 만드는 나만의 선팅 간편 견적" />
    <meta property="og:url" content="홈페이지 URL 입력" />
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
    <div class="step_body">
        <?php
        $header="back";
        include 'header.php';

        $color=$_GET['color'];

        $cSql="UPDATE counsel SET color='$color' WHERE temp_number='$temp'";
        $cRes=mysqli_query($conn, $cSql);
        ?>
        <div class="step_title">
            <div>
                <h2>STEP</h2>
                <p>04</p>
            </div>
            <span>시공을 원하는 브랜드를 선택해주세요</span>
        </div>
        <div class="brand_category swiper-container">
            <div class="swiper-wrapper">
                <?php
                $sql="SELECT * FROM brand_intro ORDER BY num ASC LIMIT 1";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $cTtile=$row['title'];

                $sql="SELECT * FROM brand_intro ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                $no=1;
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                ?>
                <p class="swiper-slide <?php echo ($no==1) ? "brand_active" : ""?>" onclick="$('#brand').val('<?php echo $title?>')"><?php echo $title?></p>
                <?php 
                $no++;
                } ?>
            </div>
        </div>
        <div class="brand_detail">
            <?php
            $sql="SELECT * FROM brand_intro ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            $no=1;
            while($row=mysqli_fetch_array($res)){
                $contents=$row['contents'];
            ?>
            <div class="contents <?php echo ($no==1) ? "active" : ""?>">
                <?php echo $contents?>
            </div>
            <?php 
            $no++;
            } ?>
        </div>
        <div class="bottom_btn">
            <form method="GET" action="cardensity.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" id="brand" name="brand" value="<?php echo $cTtile?>">
            </form>
            <button type="button" onclick="$('#sub').click();">다음으로</button>
            <p>해당 웹 페이지는 모티브에서 소유권을 보유하고 있으며,<br class="sub_br"> 무단으로 복제 시 법적 책임을 물을 수 있습니다.<br>동종 업계 관계자들의 무단 활용을 금지합니다.</p>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

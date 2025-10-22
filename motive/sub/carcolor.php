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
        $header="all";
        include 'header.php';

        $car=$_GET['car'];

        $cSql="UPDATE counsel SET car='$car' WHERE temp_number='$temp'";
        $cRes=mysqli_query($conn, $cSql);
        ?>
        <div class="step_title">
            <div>
                <h2>STEP</h2>
                <p>03</p>
            </div>
            <span>색상을 선택해주세요</span>
        </div>
        <div class="color_contents">
            <?php
            $sql="SELECT * FROM color WHERE car='$car'";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $color=$row['color'];
                $thumb=$row['thumb'];
            ?>
            <div onclick="$('#color').val('<?php echo $color?>')">
                <div class="color_img"><img src="../img/color/<?php echo $thumb?>" alt=""></div>
                <p><?php echo $color?></p>
            </div>
            <?php } ?>
            <!-- <div onclick="$('#color').val('흰색')" style="<?php echo (strpos($color, '흰색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color01.png" alt=""></div>
                <p>흰색</p>
            </div>
            <div onclick="$('#color').val('검정색')" style="<?php echo (strpos($color, '검정색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color02.png" alt=""></div>
                <p>검정색</p>
            </div>
            <div onclick="$('#color').val('쥐색')" style="<?php echo (strpos($color, '쥐색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color03.png" alt=""></div>
                <p>쥐색</p>
            </div>
            <div onclick="$('#color').val('은색')" style="<?php echo (strpos($color, '은색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color04.png" alt=""></div>
                <p>은색</p>
            </div>
            <div onclick="$('#color').val('청색')" style="<?php echo (strpos($color, '청색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color05.png" alt=""></div>
                <p>청색</p>
            </div>
            <div onclick="$('#color').val('은회색')" style="<?php echo (strpos($color, '은회색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color06.png" alt=""></div>
                <p>은회색</p>
            </div>
            <div onclick="$('#color').val('노란색')" style="<?php echo (strpos($color, '노란색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color07.png" alt=""></div>
                <p>노란색</p>
            </div>
            <div onclick="$('#color').val('빨간색')" style="<?php echo (strpos($color, '빨간색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color08.png" alt=""></div>
                <p>빨간색</p>
            </div>
            <div onclick="$('#color').val('진주색')" style="<?php echo (strpos($color, '진주색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color09.png" alt=""></div>
                <p>진주색</p>
            </div>
            <div onclick="$('#color').val('하늘색')" style="<?php echo (strpos($color, '하늘색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color10.png" alt=""></div>
                <p>하늘색</p>
            </div>
            <div onclick="$('#color').val('갈색')" style="<?php echo (strpos($color, '갈색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color11.png" alt=""></div>
                <p>갈색</p>
            </div>
            <div onclick="$('#color').val('담녹색')" style="<?php echo (strpos($color, '담녹색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color12.png" alt=""></div>
                <p>담녹색</p>
            </div>
            <div onclick="$('#color').val('검정투톤')" style="<?php echo (strpos($color, '검정투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color13.png" alt=""></div>
                <p>검정투톤</p>
            </div>
            <div onclick="$('#color').val('녹색')" style="<?php echo (strpos($color, '녹색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color14.png" alt=""></div>
                <p>녹색</p>
            </div>
            <div onclick="$('#color').val('연두색')" style="<?php echo (strpos($color, '연두색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color15.png" alt=""></div>
                <p>연두색</p>
            </div>
            <div onclick="$('#color').val('은색투톤')" style="<?php echo (strpos($color, '은색투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color16.png" alt=""></div>
                <p>은색투톤</p>
            </div>
            <div onclick="$('#color').val('명은색')" style="<?php echo (strpos($color, '명은색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color17.png" alt=""></div>
                <p>명은색</p>
            </div>
            <div onclick="$('#color').val('연금색')" style="<?php echo (strpos($color, '연금색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color18.png" alt=""></div>
                <p>연금색</p>
            </div>
            <div onclick="$('#color').val('은하색')" style="<?php echo (strpos($color, '은하색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color19.png" alt=""></div>
                <p>은하색</p>
            </div>
            <div onclick="$('#color').val('갈대색')" style="<?php echo (strpos($color, '갈대색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color20.png" alt=""></div>
                <p>갈대색</p>
            </div>
            <div onclick="$('#color').val('주황색')" style="<?php echo (strpos($color, '주황색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color21.png" alt=""></div>
                <p>주황색</p>
            </div>
            <div onclick="$('#color').val('흰색투톤')" style="<?php echo (strpos($color, '흰색투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color22.png" alt=""></div>
                <p>흰색투톤</p>
            </div>
            <div onclick="$('#color').val('청옥색')" style="<?php echo (strpos($color, '청옥색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color23.png" alt=""></div>
                <p>청옥색</p>
            </div>
            <div onclick="$('#color').val('자주색')" style="<?php echo (strpos($color, '자주색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color24.png" alt=""></div>
                <p>자주색</p>
            </div>
            <div onclick="$('#color').val('금색')" style="<?php echo (strpos($color, '금색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color25.png" alt=""></div>
                <p>금색</p>
            </div>
            <div onclick="$('#color').val('진주투톤')" style="<?php echo (strpos($color, '진주투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color26.png" alt=""></div>
                <p>진주투톤</p>
            </div>
            <div onclick="$('#color').val('보라색')" style="<?php echo (strpos($color, '보라색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color27.png" alt=""></div>
                <p>보라색</p>
            </div>
            <div onclick="$('#color').val('금색투톤')" style="<?php echo (strpos($color, '금색투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color28.png" alt=""></div>
                <p>금색투톤</p>
            </div>
            <div onclick="$('#color').val('분홍색')" style="<?php echo (strpos($color, '분홍색,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color29.png" alt=""></div>
                <p>분홍색</p>
            </div>
            <div onclick="$('#color').val('갈색투톤')" style="<?php echo (strpos($color, '갈색투톤,')===false) ? "display:none" : ""?>">
                <div class="color_img"><img src="../img/color30.png" alt=""></div>
                <p>갈색투톤</p>
            </div> -->
        </div>
        <div class="bottom_btn">
            <form method="GET" action="carbrand.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" id="color" name="color">
            </form>
            <button type="button">다음으로</button>
            <h2 class="warning">필수적인 선택을 안하셨어요!<br class="sub_br"> 꼭 필요한 선택이니 선택해주세요</h2>
            <p class="basic">해당 웹 페이지는 모티브에서 소유권을 보유하고 있으며,<br class="sub_br"> 무단으로 복제 시 법적 책임을 물을 수 있습니다.<br>동종 업계 관계자들의 무단 활용을 금지합니다.</p>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

<script>
    $(function(){
        $(".bottom_btn button").click(function(){
            if ($(".color_contents > div div").hasClass("on") == true) {
                $("#sub").click();
                // $(location).attr("href", "../sub/carbrand.php");
            } else {
                $(".bottom_btn .warning").css({"display" : "block"});
            }
        })
    })
</script>

</html>

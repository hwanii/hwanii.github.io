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

        $sql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $brand=$row['brand'];
        $car=$row['car'];
        ?>
        <div class="step_title">
            <div>
                <h2>STEP</h2>
                <p>05</p>
            </div>
            <span>제품 및 세부 농도를 선택해주세요</span>
        </div>
        <div class="density_title">
            <h2>선택 브랜드 안내</h2>
            <div></div>
        </div>
        <div class="density_top">
            <?php
            $sql="SELECT * FROM brand_list WHERE brand='$brand' AND car='$car'";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $product=$row['product'];
                
                $bSql="SELECT * FROM brand WHERE brand='$brand' AND product='$product'";
                $bRes=mysqli_query($conn, $bSql);
                $bRow=mysqli_fetch_array($bRes);
                $thumb=$bRow['thumbnail'];
            ?>
            <div class="contents" onclick="$('#product').val('<?php echo $product?>')">
                <div class="img_box"><img src="../img/brand/<?php echo $thumb?>" alt=""></div>
                <h2><?php echo $product?></h2>
            </div>
            <?php } ?>
        </div>
        <div class="density_title">
            <h2>직접 선택하기</h2>
            <div></div>
        </div>
        <div class="density_middle">
            <div class="contents">
                <div class="img_box"><img src="../img/density01.png" alt=""></div>
                <div class="right">
                    <h2>전면 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density01" value="front70" onclick="sun_sel('front', '70%')">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front50" onclick="sun_sel('front', '50%')">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front30" onclick="sun_sel('front', '30%')">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front15" onclick="sun_sel('front', '15%')">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="frontAfter" onclick="sun_sel('front', 'after')">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="frontNo" onclick="sun_sel('front', 'no')">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents">
                <div class="img_box"><img src="../img/density02.png" alt=""></div>
                <div class="right">
                    <h2>측면 1열 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density02" value="sideFirst70" onclick="sun_sel('side1', '70%')">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst50" onclick="sun_sel('side1', '50%')">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst30" onclick="sun_sel('side1', '30%')">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst15" onclick="sun_sel('side1', '15%')">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirstAfter" onclick="sun_sel('side1', 'after')">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirstNo" onclick="sun_sel('side1', 'no')">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents">
                <div class="img_box"><img src="../img/density03.png" alt=""></div>
                <div class="right">
                    <h2>측면 2열 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density03" value="sideSecond70" onclick="sun_sel('side2', '70%')">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond50" onclick="sun_sel('side2', '50%')">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond30" onclick="sun_sel('side2', '30%')">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond15" onclick="sun_sel('side2', '15%')">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecondAfter" onclick="sun_sel('side2', 'after')">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecondNo" onclick="sun_sel('side2', 'no')">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents">
                <div class="img_box"><img src="../img/density04.png" alt=""></div>
                <div class="right">
                    <h2>후면 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density04" value="rear70" onclick="sun_sel('back', '70%')">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear50" onclick="sun_sel('back', '50%')">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear30" onclick="sun_sel('back', '30%')">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear15" onclick="sun_sel('back', '15%')">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rearAfter" onclick="sun_sel('back', 'after')">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rearNo" onclick="sun_sel('back', 'no')">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents">
                <div class="img_box"><img src="../img/density05.png" alt=""></div>
                <div class="right">
                    <h2>썬루프 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density05" value="sun70" onclick="sun_sel('sun', '70%')">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun50" onclick="sun_sel('sun', '50%')">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun30" onclick="sun_sel('sun', '30%')">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun15" onclick="sun_sel('sun', '15%')">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sunAfter" onclick="sun_sel('sun', 'after')">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sunNo" onclick="sun_sel('sun', 'no')">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_btn_two">
            <form method="GET" action="addinformation.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" name="brand" value="<?php echo $brand?>">
                <input type="hidden" id="product" name="product">
                <input type="hidden" name="type" value="choice">
                <input type="hidden" id="tinting_chk" name="tinting">
                <input type="hidden" id="front" name="front">
                <input type="hidden" id="side1" name="side1">
                <input type="hidden" id="side2" name="side2">
                <input type="hidden" id="back" name="back">
                <input type="hidden" id="sun" name="sun">
            </form>
            <div>
                <button type="button">담고 다음으로</button>
                <button type="button" onclick="location.href='addinformation.php'">선택 안 함</button>
            </div>
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
        $(".bottom_btn_two > div button:first-child").click(function(){
            var densityInput = $(".density_middle .contents .right .density_choice label input:checked").length;

            if (densityInput < 5 || $(".density_top .contents").hasClass("on") == false) {
                $(".bottom_btn_two .warning").css({"display" : "block"});
            } else {
                // $(location).attr("href", "../sub/addinformation.php");
                $("#sub").click();
            }
        })
    })

    function sun_sel(type, val){
        $("#"+type).val(val);
    }
</script>

</html>

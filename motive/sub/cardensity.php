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

        $brand=$_GET['brand'];

        $cSql="UPDATE counsel SET brand='$brand' WHERE temp_number='$temp'";
        $cRes=mysqli_query($conn, $cSql);

        $aSql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $aRes=mysqli_query($conn, $aSql);
        $aRow=mysqli_fetch_array($aRes);
        $car=$aRow['car'];
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
            $sql="SELECT DISTINCT brand FROM sun_package WHERE brand LIKE '%$brand%' AND car='$car'";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $bd=explode("-", $row['brand']);
                $product=$bd[1];
                
                $bSql="SELECT * FROM brand WHERE brand='$brand' AND product='$product'";
                $bRes=mysqli_query($conn, $bSql);
                $bRow=mysqli_fetch_array($bRes);
                $thumb=$bRow['thumbnail'];
            ?>
            <div class="contents" onclick="tinting('<?php echo $brand?>', '<?php echo $product?>');$('input:radio').prop('checked', false);$('.density_bottom .tip_contents .contents').removeClass('on');">
                <div class="img_box"><img src="../img/brand/<?php echo $thumb?>" alt=""></div>
                <h2><?php echo $product?></h2>
            </div>
            <?php } ?>
            <!-- <div class="contents">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <h2>버텍스 전면 900<br>측1, 2 후면 700</h2>
            </div> -->
        </div>
        
        <div class="density_title" style="display:none">
            <h2>직접 선택하기</h2>
            <div></div>
        </div>
        <div class="density_middle">
            <form method="GET" action="addinformation.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" name="brand" value="<?php echo $brand?>">
                <input type="hidden" id="product" name="product">
                <input type="hidden" name="type" value="package">
                <input type="hidden" id="tinting_chk" name="tinting">
            <div class="contents contents_read">
                <div class="img_box"><img src="../img/density01.png" alt=""></div>
                <div class="right">
                    <h2>전면 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density01" value="front70">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front50">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front30">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="front15">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="frontAfter">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density01" value="frontNo">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents contents_second">
                <div class="img_box"><img src="../img/density02.png" alt=""></div>
                <div class="right">
                    <h2>측면 1열 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density02" value="sideFirst70">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst50">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst30">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirst15">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirstAfter">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density02" value="sideFirstNo">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents contents_third">
                <div class="img_box"><img src="../img/density03.png" alt=""></div>
                <div class="right">
                    <h2>측면 2열 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density03" value="sideSecond70">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond50">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond30">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecond15">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecondAfter">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density03" value="sideSecondNo">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents contents_fourth">
                <div class="img_box"><img src="../img/density04.png" alt=""></div>
                <div class="right">
                    <h2>후면 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density04" value="rear70">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear50">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear30">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rear15">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rearAfter">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density04" value="rearNo">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="contents contents_fifth">
                <div class="img_box"><img src="../img/density05.png" alt=""></div>
                <div class="right">
                    <h2>썬루프 농도</h2>
                    <div class="density_choice">
                        <label>
                            <input type="radio" name="density05" value="sun70">
                            <span class="density70">70%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun50">
                            <span class="density50">50%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun30">
                            <span class="density30">30%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sun15">
                            <span class="density15">15%</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sunAfter">
                            <span>나중에 선택</span>
                        </label>
                        <label>
                            <input type="radio" name="density05" value="sunNo">
                            <span>선택 안함</span>
                        </label>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="density_title package_title" style="display:none">
            <h2>패키지로 선택하기</h2>
            <div></div>
        </div>
        <p class="suggestion" style="line-height: 16px;display:none">잘모르시겠다면, 추천 농도를 이용해보세요.</p>
        <div class="density_bottom" style="display:none">
            <div class="tip_contents">
                <div id="contents1" class="contents" style="visibility:hidden">
                    <div class="top">
                        <span></span>
                        <h2 id="title1">국민 농도</h2>
                    </div>
                    <div class="detail">
                        <div>
                            <p>전면 농도</p>
                            <p id="front1" class="densitySelect01">50%</p>
                        </div>
                        <div>
                            <p>측면 1열 농도</p>
                            <p id="fside1" class="densitySelect02">70%</p>
                        </div>
                        <div>
                            <p>측면 2열 농도</p>
                            <p id="sside1" class="densitySelect03">70%</p>
                        </div>
                        <div>
                            <p>후면 농도</p>
                            <p id="back1" class="densitySelect04">50%</p>
                        </div>
                        <div>
                            <p>썬루프 농도</p>
                            <p id="sun1" class="densitySelect05">70%</p>
                        </div>
                    </div>
                    <p>선택된 패키지에요</p>
                </div>
                <div id="contents2" class="contents" style="visibility:hidden">
                    <div class="top">
                        <span></span>
                        <h2 id="title2">밝은 농도</h2>
                    </div>
                    <div class="detail">
                        <div>
                            <p>전면 농도</p>
                            <p id="front2" class="densitySelect01">30%</p>
                        </div>
                        <div>
                            <p>측면 1열 농도</p>
                            <p id="fside2" class="densitySelect02">50%</p>
                        </div>
                        <div>
                            <p>측면 2열 농도</p>
                            <p id="sside2" class="densitySelect03">50%</p>
                        </div>
                        <div>
                            <p>후면 농도</p>
                            <p id="back2" class="densitySelect04">30%</p>
                        </div>
                        <div>
                            <p>썬루프 농도</p>
                            <p id="sun2" class="densitySelect05">50%</p>
                        </div>
                    </div>
                    <p>선택된 패키지에요</p>
                </div>
                <div id="contents3" class="contents" style="visibility:hidden">
                    <div class="top">
                        <span></span>
                        <h2 id="title3">더 밝은 농도</h2>
                    </div>
                    <div class="detail">
                        <div>
                            <p>전면 농도</p>
                            <p id="front3" class="densitySelect01">15%</p>
                        </div>
                        <div>
                            <p>측면 1열 농도</p>
                            <p id="fside3" class="densitySelect02">30%</p>
                        </div>
                        <div>
                            <p>측면 2열 농도</p>
                            <p id="sside3" class="densitySelect03">30%</p>
                        </div>
                        <div>
                            <p>후면 농도</p>
                            <p id="back3" class="densitySelect04">15%</p>
                        </div>
                        <div>
                            <p>썬루프 농도</p>
                            <p id="sun3" class="densitySelect05">30%</p>
                        </div>
                    </div>
                    <p>선택된 패키지에요</p>
                </div>
            </div>
        </div>
        <div class="bottom_btn">
            <button>담고 다음으로</button>
            <h2 class="warning">필수적인 선택을 안하셨어요!<br class="sub_br"> 꼭 필요한 선택이니 선택해주세요</h2>
            <p style="font-size: 14px; font-weight: 700; color: #000;">추가 옵션 작업들이에요,<br class="sub_br"> 함께 신청하시는걸 추천드립니다.</p>
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
            var densityInput = $(".density_middle .contents .right .density_choice label input:checked").length;

            if (densityInput < 5 || $(".density_top .contents").hasClass("on") == false) {
                $(".bottom_btn .warning").css({"display" : "block"});
            } else {
                // $(location).attr("href", "addinformation.php");
                $("#sub").click();
            }
        })
    })

    function tinting(b, p){
        $.ajax({
            url:"package.php",
            type:"POST",
            data:{
                car:"<?php echo $car?>",
                brand:b,
                product:p
            },
            dataType:"JSON",
            success:function(data){
                $("#product").val(p);
                // console.log(data);
                $(".package_title").css("display", "flex");
                $(".suggestion").css("display", "block");
                $(".density_bottom").css("display", "block");
                if(data[0]){
                    $("#contents1").css("visibility", "visible");
                    $("#contents1").attr("onclick", "$('#tinting_chk').val('"+data[0]+"')");
                    $("#title1").text(data[0]);
                    $("#front1").text(data[1]);
                    $("#fside1").text(data[2]);
                    $("#sside1").text(data[3]);
                    $("#back1").text(data[4]);
                    $("#sun1").text(data[5]);
                } else {
                    $("#contents1").css("visibility", "hidden");
                }
                if(data[6]){
                    $("#contents2").css("visibility", "visible");
                    $("#contents2").attr("onclick", "$('#tinting_chk').val('"+data[6]+"')");
                    $("#title2").text(data[6]);
                    $("#front2").text(data[7]);
                    $("#fside2").text(data[8]);
                    $("#sside2").text(data[9]);
                    $("#back2").text(data[10]);
                    $("#sun2").text(data[11]);
                } else {
                    $("#contents2").css("visibility", "hidden");
                }
                if(data[12]){
                    $("#contents3").css("visibility", "visible");
                    $("#contents3").attr("onclick", "$('#tinting_chk').val('"+data[12]+"')");
                    $("#title3").text(data[12]);
                    $("#front3").text(data[13]);
                    $("#fside3").text(data[14]);
                    $("#sside3").text(data[15]);
                    $("#back3").text(data[16]);
                    $("#sun3").text(data[17]);
                } else {
                    $("#contents3").css("visibility", "hidden");
                }
            }
        });
    }
</script>

</html>
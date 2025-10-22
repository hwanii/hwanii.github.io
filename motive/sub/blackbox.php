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

        $deafening=$_GET['deafening'];
        if($deafening!=""){
        $dp=$_GET['dp'];
        }

        $uSql="UPDATE counsel SET deafening='$deafening', deafening_price='$dp' WHERE temp_number='$temp'";
        $uRes=mysqli_query($conn, $uSql);

        $sql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $company=$row['company'];
        $car=$row['car'];
        $bd=$row['brand'];
        $tinting=$row['tinting'];
        $tt=explode("/", $row['tinting_type']);
        $tp=$row['tinting_price'];
        $pf=$row['ppf'];
        $pt=$row['ppf_type'];
        $pp=$row['ppf_price'];
        $glass=$row['glass'];
        $gp=$row['glass_price'];
        $leather=$row['leather'];
        $lp=$row['leather_price'];
        
        if($pt=="package"){
            $pSql="SELECT * FROM ppf_package WHERE title='$pf' AND car='$car'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $hl=($pRow['hl']!="0") ? "헤드램프 / " : "";
            $fbs=($pRow['fbs']!="0") ? "프런트 범퍼 사이드 / " : "";
            $sm=($pRow['sm']!="0") ? "사이드 미러 / " : "";
            $dc=($pRow['dc']!="0") ? "도어컵 / " : "";
            $ds=($pRow['ds']!="0") ? "도어 스텝 / " : "";
            $de=($pRow['de']!="0") ? "도어 에지 / " : "";
            $gd=($pRow['gd']!="0") ? "주유구 & 도어 / " : "";
            $rbs=($pRow['rbs']!="0") ? "리어 범퍼 사이드 / " : "";
            $rbu=($pRow['rbu']!="0") ? "리어 범퍼 어퍼" : "";
        } else {
            $pSql="SELECT * FROM ppf WHERE car='$car'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
        }

        ?>
        <div class="step_title">
            <div class="gray">
                <h2>PLUS</h2>
                <p>06</p>
            </div>
            <span>블랙박스와 보조 배터리 선택해보기</span>
        </div>
        <div class="product product01">
            <div class="top">
                <h2>블랙 박스 선택해보기</h2>
                <label onclick="sum('', '0', 'blackbox')">
                    <input type="checkbox">
                    <p>선택 안함</p>
                </label>
            </div>
            <div class="contents">
                <?php
                $bSql="SELECT * FROM blackbox WHERE car='$car'";
                $bRes=mysqli_query($conn, $bSql);
                while($bRow=mysqli_fetch_array($bRes)){
                    $brand=explode("-", $bRow['brand']);
                    $price=$bRow['price'];
                ?>
                <div class="contents_box" onclick="sum('<?php echo $brand[1]?>', '<?php echo $price?>', 'blackbox')">
                    <div class="img_box"><img src="../img/product.png" alt=""></div>
                    <div class="txt_box">
                        <span></span>
                        <p><i><?php echo $brand[1]?></i></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="product product02">
            <div class="top">
                <h2>보조배터리 선택해보기</h2>
                <label onclick="sum('', '0', 'battery')">
                    <input type="checkbox">
                    <p>선택 안함</p>
                </label>
            </div>
            <div class="contents">
                <?php
                $btSql="SELECT * FROM battery WHERE car='$car'";
                $btRes=mysqli_query($conn, $btSql);
                while($btRow=mysqli_fetch_array($btRes)){
                    $brand=explode("-", $btRow['brand']);
                    $price=$btRow['price'];
                ?>
                <div class="contents_box" onclick="sum('<?php echo $brand[1]?>', '<?php echo $price?>', 'battery')">
                    <div class="img_box"><img src="../img/product.png" alt=""></div>
                    <div class="txt_box">
                        <span></span>
                        <p><i><?php echo $brand[1]?></i></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="density_title">
            <h2>합산 금액</h2>
            <div></div>
        </div>
        <p class="suggestion">현재까지 합산 견적을 알려드려요</p>
        <div class="estimate">
            <div style="<?php echo ($tinting=="") ? "display:none" : ""?>">
                <h2>썬팅 견적</h2>
                <p>
                    <?php echo $bd?><br>
                    전면 <?php echo $tt[0]?> / 측면1열 <?php echo $tt[1]?> / 측면2열 <?php echo $tt[2]?> / 후면 <?php echo $tt[3]?> / 썬루프 <?php echo $tt[4]?><br>
                    <?php echo number_format($tp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($pf=="") ? "display:none" : ""?>">
                <?php if($pt=="package"){?>
                <h2>PPF 패키지</h2>
                <?php } else if($pt=="choice"){ ?>
                <h2>PPF 자유 선택</h2>
                <?php } ?>
                <p>
                    <?php echo $hl.$fbs.$sm.$dc.$ds.$de.$gd.$rbs.$rbu;?><br>
                    <?php echo number_format($pp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($glass!="true") ? "display:none" : ""?>">
                <h2>유리막 코팅</h2>
                <p>
                    유리막 코팅 시공 비용<br>
                    <?php echo number_format($gp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($leather!="true") ? "display:none" : ""?>">
                <h2>가죽 코팅</h2>
                <p>
                    가죽 코팅 시공 비용<br>
                    <?php echo number_format($lp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($deafening=="") ? "display:none" : ""?>">
                <h2>방음 패키지</h2>
                <p>
                    방음 패키지 옵션<br>
                    <?php echo number_format($dp)?>원 (VAT10%포함)
                </p>
            </div>
            <div id="blackbox" style="display:none">
                <h2>블랙박스</h2>
                <p>
                    <span id="bName">블랙박스 제품명</span><br>
                    <span id="bp">0</span>원 (VAT10%포함)
                </p>
            </div>
            <div id="battery" style="display:none">
                <h2>보조 배터리</h2>
                <p>
                    <span id="btName">보조 배터리 제품명</span><br>
                    <span id="btp">0</span>원 (VAT10%포함)
                </p>
            </div>
            <div>
                <h2>합계</h2>
                <p style="font-weight: 700; color: #000;"><span id="total"><?php echo number_format($tp+$pp+$gp+$lp+$dp)?></span>원 (VAT10%포함)</p>
            </div>
        </div>
        <div class="bottom_btn_two">
            <form method="GET" action="afterblow.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" id="blackbox_chk" name="blackbox" value="false">
                <input type="hidden" id="battery_chk" name="battery" value="false">
                <input type="hidden" id="blackbox_price" name="blackbox_price" value="0">
                <input type="hidden" id="battery_price" name="battery_price" value="0">
            </form>
            <div>
                <button type="button">담고 다음으로</button>
                <button type="button" onclick="location.href='afterblow.php'">건너뛰기</button>
            </div>
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
        $(".bottom_btn_two div button:first-child").click(function(){
            var blackInput01 = $(".product01 .top label input:checked").length;
            var blackInput02 = $(".product02 .top label input:checked").length;
            var blackOn01 = $(".product01 .contents .contents_box.on").length;
            var blackOn02 = $(".product02 .contents .contents_box.on").length;

            if (blackInput01 == 0 && blackInput02 == 0 && blackOn01 == 0 && blackOn02 == 0) {
                $(".bottom_btn_two .warning").css({"display" : "block"});
            } else if (blackInput01 == 0 && blackInput02 == 0 && blackOn01 == 1 && blackOn02 == 1) {
                // $(location).attr("href", "../sub/afterblow.php");
                $("#sub").click();
            } else if (blackInput01 == 1 && blackInput02 == 1 && blackOn01 == 0 && blackOn02 == 0) {
                // $(location).attr("href", "../sub/afterblow.php");
                $("#sub").click();
            } else if (blackInput01 == 0 && blackInput02 == 1 && blackOn01 == 1 && blackOn02 == 0) {
                // $(location).attr("href", "../sub/afterblow.php");
                $("#sub").click();
            } else if (blackInput01 == 1 && blackInput02 == 0 && blackOn01 == 0 && blackOn02 == 1) {
                // $(location).attr("href", "../sub/afterblow.php");
                $("#sub").click();
            }   else {
                $(".bottom_btn_two .warning").css({"display" : "block"});
            }
        });

        $(".product01 .top label input").click(function(){
            var blackTop01 = $(".product01 .top label input:checked").length;

            if ( blackTop01 == 1 ) {
                $(".product01 .contents .contents_box").removeClass("on");
                $(".product01 .contents .contents_box").css({"pointer-events" : "none"});
            } else {
                $(".product01 .contents .contents_box").css({"pointer-events" : "all"});
            }
        });

        $(".product02 .top label input").click(function(){
            var blackTop02 = $(".product02 .top label input:checked").length;

            if ( blackTop02 == 1 ) {
                $(".product02 .contents .contents_box").removeClass("on");
                $(".product02 .contents .contents_box").css({"pointer-events" : "none"});
            } else {
                $(".product02 .contents .contents_box").css({"pointer-events" : "all"});
            }
        });
    })

    function sum(t, p, b){
        var np = parseInt(p);
        var total = parseInt($("#total").text().replace(/,/g,""));
        var op = 0;
        if(b=="blackbox"){
            op = parseInt($("#bp").text().replace(/,/g,""));
            var temp = "bp";
            var name = "bName";
        } else {
            op = parseInt($("#btp").text().replace(/,/g,""));
            var temp = "btp";
            var name = "btName";
        }

        if($("#"+b).css("display")=="none"){
            $("#"+b).css("display", "flex");
        }
        
        if(np==0){
            $("#"+b).css("display", "none");
        }

        total=total-op+np;
        $("#"+b+"_chk").val(t);
        $("#"+name).text(t);
        $("#"+b+"_price").val(np);
        $("#"+temp).text(AddComma(np));
        $("#total").text(AddComma(total));
    }

    function AddComma(num) {
        var regexp = /\B(?=(\d{3})+(?!\d))/g;
        return num.toString().replace(regexp, ',');
    }
    </script>
</script>

</html>

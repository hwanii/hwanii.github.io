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

        $aSql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $aRes=mysqli_query($conn, $aSql);
        $aRow=mysqli_fetch_array($aRes);
        $car=$aRow['car'];
        $brand=$aRow['brand'];
        $tinting=$aRow['tinting'];
        $tt=explode("/", $aRow['tinting_type']);
        $tp=($aRow['tinting_price']) ? $aRow['tinting_price'] : "0";
        ?>
        <div class="step_title">
            <div class="gray">
                <h2>PLUS</h2>
                <p>02</p>
            </div>
            <span>PPF 개별 선택하기</span>
        </div>
        <div class="swiper-container ad_slide">
            <div class="swiper-wrapper">
                <?php
                $sql="SELECT * FROM slide WHERE `type`='package'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                for($i=1;$i<=9;$i++){
                    $slide=$row['slide'.$i];

                    if($slide==""){
                        continue;
                    } else {
                ?>
                <div class="swiper-slide">
                    <img src="../img/slide/package/<?php echo $slide?>" alt=""> 
                </div>
                <?php } 
                } ?>
            </div>
        </div>
        <div class="density_title">
            <h2>내 맘대로 선택하기</h2>
            <div></div>
        </div>
        <p class="suggestion">적용하고 싶으신 위치를 선택해주세요</p>
        <form method="GET" action="glass.php">
            <input type="submit" id="sub" style="display:none">
            <input type="hidden" name="type" value="choice">
            <input type="hidden" id="ppf_chk" name="ppf" value="">
            <input type="hidden" id="pp" name="pp" value="">
        <div class="ppf_click_contents">
            <?php
            $sql="SELECT * FROM ppf WHERE car='$car'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $hl=$row['hl'];
            $fbs=$row['fbs'];
            $sm=$row['sm'];
            $dc=$row['dc'];
            $ds=$row['ds'];
            $de=$row['de'];
            $gd=$row['gd'];
            $rbs=$row['rbs'];
            $rbu=$row['rbu'];
            ?>
            <div style="<?php echo ($hl==0) ? "display:none" : ""?>" onclick="add_ppf('hl', '<?php echo $hl?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="headlamp" value="true">
                    <span></span>
                    <p>헤드램프</p>
                </div>
            </div>
            <div style="<?php echo ($fbs==0) ? "display:none" : ""?>" onclick="add_ppf('fbs', '<?php echo $fbs?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="front" value="true">
                    <span></span>
                    <p>프런트 범퍼 사이드</p>
                </div>
            </div>
            <div style="<?php echo ($sm==0) ? "display:none" : ""?>" onclick="add_ppf('sm', '<?php echo $sm?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="sidemirror" value="true">
                    <span></span>
                    <p>사이드 미러</p>
                </div>
            </div>
            <div style="<?php echo ($dc==0) ? "display:none" : ""?>" onclick="add_ppf('dc', '<?php echo $dc?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="doorcup" value="true">
                    <span></span>
                    <p>도어컵</p>
                </div>
            </div>
            <div style="<?php echo ($ds==0) ? "display:none" : ""?>" onclick="add_ppf('ds', '<?php echo $ds?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="doorstep" value="true">
                    <span></span>
                    <p>도어 스텝</p>
                </div>
            </div>
            <div style="<?php echo ($de==0) ? "display:none" : ""?>" onclick="add_ppf('de', '<?php echo $de?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="dooredge" value="true">
                    <span></span>
                    <p>도어 에지</p>
                </div>
            </div>
            <div style="<?php echo ($gd==0) ? "display:none" : ""?>" onclick="add_ppf('gd', '<?php echo $gd?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="oildoor" value="true">
                    <span></span>
                    <p>주유구 &amp; 도어</p>
                </div>
            </div>
            <div style="<?php echo ($rbs==0) ? "display:none" : ""?>" onclick="add_ppf('rbs', '<?php echo $rbs?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox"name="side" value="true">
                    <span></span>
                    <p>리어 범퍼 사이드</p>
                </div>
            </div>
            <div style="<?php echo ($rbu==0) ? "display:none" : ""?>" onclick="add_ppf('rbu', '<?php echo $rbu?>')">
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="upper" value="true">
                    <span></span>
                    <p>리어 범퍼 어퍼</p>
                </div>
            </div>
        </div>
        </form>
        <div class="density_title">
            <h2>합산 금액</h2>
            <div></div>
        </div>
        <p class="suggestion">현재까지 합산 견적을 알려드려요</p>
        <div class="estimate">
            <div style="<?php echo ($tinting=="") ? "display:none" : ""?>">
                <h2>썬팅 견적</h2>
                <p>
                    <?php echo $brand?><br>
                    전면 <?php echo $tt[0]?> / 측면1열 <?php echo $tt[1]?> / 측면2열 <?php echo $tt[2]?> / 후면 <?php echo $tt[3]?> / 썬루프 <?php echo $tt[4]?><br>
                    <?php echo number_format($tp)?>원 (VAT10%포함)
                </p>
            </div>
            <div id="ppf" id="display:none">
                <h2>PPF 자유 선택</h2>
                <p>
                    <span id="hl" style="display:none">헤드램프 / </span><span id="fbs" style="display:none">프런트 범퍼 사이드 / </span><span id="sm" style="display:none">사이드 미러 / </span><span id="dc" style="display:none">도어컵 / </span><span id="ds" style="display:none">도어 스텝 / </span><span id="de" style="display:none">도어 에지 / </span><span id="gd" style="display:none">주유구&도어 / </span><span id="rbs" style="display:none">리어 범퍼 사이드 / </span><span id="rbu" style="display:none">리어 범퍼 어퍼</span><br>
                    <span id="op">0</span>원 (VAT10%포함)
                </p>
            </div>
            <div>
                <h2>합계</h2>
                <p style="font-weight: 700; color: #000;"><span id="total"><?php echo number_format($tp)?></span>원 (VAT10%포함)</p>
            </div>
        </div>
        <div class="bottom_btn">
            <div>
                <button type="button" class="non_select">담고 다음으로</button>
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
        $(".bottom_btn button").click(function(){
            var ppfInput = $(".ppf_click_contents > div .txt_box input:checked").length;

            if (ppfInput == 0) {
                $(".bottom_btn .warning").css({"display" : "block"});
            } else {
                // $(location).attr("href", "../sub/glass.php");
                $("#sub").click();
            }
        })
    })

    function add_ppf(t, p){
        var val = $("#ppf_chk").val();
        var now = parseInt(p);
        var op = parseInt($("#op").text().replace(/,/g,""));
        var total = parseInt($("#total").text().replace(/,/g,""));

        if($("#"+t).css("display")=="none"){
            $("#"+t).show();
            op=op+now;
            total=total+now;
            $("#ppf_chk").val(val+t);
        } else {
            $("#"+t).css("display", "none");
            op=op-now;
            total=total-now;
        }

        $("#pp").val(op);
        $("#op").text(AddComma(op));
        $("#total").text(AddComma(total));
    }

    function AddComma(num) {
        var regexp = /\B(?=(\d{3})+(?!\d))/g;
        return num.toString().replace(regexp, ',');
    }
</script>

</html>

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
                <p>01</p>
            </div>
            <span>PPF 패키지를 제안드립니다.</span>
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
            <h2>패키지로 선택하기</h2>
            <div></div>
        </div>
        <p class="suggestion">잘모르시겠다면, 추천 패키지를 이용해보세요</p>
        <div class="ppf_package">
            <?php
            $sql="SELECT * FROM ppf_package WHERE car='$car' ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
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
            <div class="contents" onclick="ppf_sel('<?php echo $title?>')">
                <div class="bg"></div>
                <div class="top">
                    <span></span>
                    <h2><?php echo $title?></h2>
                </div>
                <div class="txt_box">
                    <?php if($hl>0){ ?>
                    <p class="ppfHeadLamp">헤드램프</p>
                    <?php } 
                    if($fbs>0){ ?>
                    <p class="ppfFrontBumperSide">프런트 범퍼 사이드</p>
                    <?php } 
                    if($sm>0){ ?>
                    <p class="ppfSideMirror">사이드 미러</p>
                    <?php } 
                    if($dc>0){ ?>
                    <p class="ppfDoorCup">도어컵</p>
                    <?php } 
                    if($ds>0){ ?>
                    <p class="ppfDoorStep">도어 스텝</p>
                    <?php } 
                    if($de>0){ ?>
                    <p class="ppfDoorEdge">도어 에지</p>
                    <?php } 
                    if($gd>0){ ?>
                    <p class="ppfGasDoor">주유구 &amp; 도어</p>
                    <?php } 
                    if($rbs>0){ ?>
                    <p class="ppfRearBumperSide">리어 범퍼 사이드</p>
                    <?php } 
                    if($rbu>0){ ?>
                    <p class="ppfRearBumperUpper">리어 범퍼 어퍼</p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="ppf_click_contents01">
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="headlamp">
                    <span></span>
                    <p class="headLamp">헤드램프</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="front">
                    <span></span>
                    <p class="frontBumperSide">프런트 범퍼 사이드</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="sidemirror">
                    <span></span>
                    <p class="sideMirror">사이드 미러</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="doorcup">
                    <span></span>
                    <p class="doorCup">도어컵</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="doorstep">
                    <span></span>
                    <p class="doorStep">도어 스텝</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="dooredge">
                    <span></span>
                    <p class="doorEdge">도어 에지</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="oildoor">
                    <span></span>
                    <p class="gasDoor">주유구 &amp; 도어</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="side">
                    <span></span>
                    <p class="rearBumperSide">리어 범퍼 사이드</p>
                </div>
            </div>
            <div>
                <div class="img_box"><img src="../img/non-image.png" alt=""></div>
                <div class="txt_box">
                    <input type="checkbox" name="upper">
                    <span></span>
                    <p class="rearBumperUpper">리어 범퍼 어퍼</p>
                </div>
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
                    <?php echo $brand?><br>
                    전면 <?php echo $tt[0]?> / 측면1열 <?php echo $tt[1]?> / 측면2열 <?php echo $tt[2]?> / 후면 <?php echo $tt[3]?> / 썬루프 <?php echo $tt[4]?><br>
                    <?php echo number_format($tp)?>원 (VAT10%포함)
                </p>
            </div>
            <div id="ppf" style="display:none">
                <h2>PPF 패키지</h2>
                <p>
                    <span id="package"></span><br>
                    <span id="op">0</span>원 (VAT10%포함)
                </p>
            </div>
            <div>
                <h2>합계</h2>
                <p style="font-weight: 700; color: #000;"><span id="total"><?php echo number_format($tp)?></span>원 (VAT10%포함)</p>
            </div>
        </div>
        <div class="bottom_btn_two">
            <form method="GET" action="glass.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" name="type" value="package">
                <input type="hidden" id="ppf_chk" name="ppf" value="">
                <input type="hidden" id="pp" name="pp" value="">
            </form>
            <button style="margin-bottom: 10px;">담고 다음으로</button>
            <div>
                <button type="button" onclick="location.href='ppfchoice.php'">개별 선택하기</button>
                <button type="button" onclick="location.href='glass.php'">선택 안 함</button>
            </div>
            <h2 class="warning">필수적인 선택을 안하셨어요!<br class="sub_br"> 꼭 필요한 선택이니 선택해주세요</h2>
            <p class="basic" style="font-size: 14px; font-weight: 700; color: #000;">PPF를 자유롭게 선택하시려면,<br class="sub_br"> 개별 선택하기를 눌러주세요</p>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

<script>
    $(function(){
        $(".bottom_btn_two > button").click(function(){
            if ($(".ppf_package .contents").hasClass("on") == false) {
                $(".bottom_btn_two .warning").css({"display" : "block"});
            } else {
                // $(location).attr("href", "../sub/glass.php");
                $("#sub").click();
            }
        })
    })

    function ppf_sel(t){
        var op = parseInt($("#op").text().replace(/,/g,""));
        var total = parseInt($("#total").text().replace(/,/g,""));

        $.ajax({
            url:"ppf_sel.php",
            type:"POST",
            data:{
                title:t,
                car:"<?php echo $car?>"
            },
            dataType:"JSON",
            success:function(data){
                console.log(data);
                var pp = parseInt(data[1]);
                if($("#ppf").css("display")=="none"){
                    $("#ppf").css("display", "flex");

                    total=total+pp;
                } else {
                    total=total-op+pp;
                }

                $("#package").text(data[0]);
                $("#op").text(AddComma(data[1]));
                $("#pp").val(data[1]);
                $("#ppf_chk").val(t);
                $("#total").text(AddComma(total));
            }
        });
    }
    
    function AddComma(num) {
        var regexp = /\B(?=(\d{3})+(?!\d))/g;
        return num.toString().replace(regexp, ',');
    }
</script>

</html>

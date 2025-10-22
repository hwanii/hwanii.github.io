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

        $type=$_GET['type'];
        $pf=$_GET['ppf'];
        $pp=$_GET['pp'];

        if($type=="package"){
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
            $hl=($_GET['headlamp']=="true") ? "헤드램프 / " : "";
            $fbs=($_GET['front']=="true") ? "프런트 범퍼 사이드 / " : "";
            $sm=($_GET['sidemirror']=="true") ? "사이드 미러 / " : "";
            $dc=($_GET['doorcup']=="true") ? "도어컵 / " : "";
            $ds=($_GET['doorstep']=="true") ? "도어 스텝 / " : "";
            $de=($_GET['dooredge']=="true") ? "도어 에지 / " : "";
            $gd=($_GET['oildoor']=="true") ? "주유구 & 도어 / " : "";
            $rbs=($_GET['side']=="true") ? "리어 범퍼 사이드 / " : "";
            $rbu=($_GET['upper']=="true") ? "리어 범퍼 어퍼" : "";

            $pf=$hl.$fbs.$sm.$dc.$ds.$de.$gd.$rbs.$rbu;
        }

        $uSql="UPDATE counsel SET ppf='$pf', ppf_type='$type', ppf_price='$pp' WHERE temp_number='$temp'";
        $uRes=mysqli_query($conn, $uSql);

        $sql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $brand=$row['brand'];
        $company=$row['company'];
        $car=$row['car'];
        $tinting=$row['tinting'];
        $tt=explode("/", $row['tinting_type']);
        $tp=$row['tinting_price'];

        $gSql="SELECT * FROM glass WHERE car='$car'";
        $gRes=mysqli_query($conn, $gSql);
        $gRow=mysqli_fetch_array($gRes);
        $gp=$gRow['color1'];
        ?>
        <div class="step_title">
            <div class="gray">
                <h2>PLUS</h2>
                <p>03</p>
            </div>
            <span>유리막 코팅도 함께 추가해보세요</span>
        </div>
        <div class="swiper-container ad_slide">
            <div class="swiper-wrapper">
                <?php
                $sql="SELECT * FROM slide WHERE `type`='glass'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                for($i=1;$i<=9;$i++){
                    $slide=$row['slide'.$i];

                    if($slide==""){
                        continue;
                    } else {
                ?>
                <div class="swiper-slide">
                    <img src="../img/slide/glass/<?php echo $slide?>" alt=""> 
                </div>
                <?php } 
                } ?>
            </div>
        </div>
        <label class="middle_choice" onclick="sum()">
            <span></span>
            <p>유리막코팅 담기</p>
        </label>
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
            <div style="<?php echo ($pf=="") ? "display:none" : ""?>">
                <?php if($type=="package"){?>
                <h2>PPF 패키지</h2>
                <?php } else if($type=="choice"){ ?>
                <h2>PPF 자유 선택</h2>
                <?php } ?>
                <p>
                    <?php echo $hl.$fbs.$sm.$dc.$ds.$de.$gd.$rbs.$rbu;?><br>
                    <?php echo number_format($pp)?>원 (VAT10%포함)
                </p>
            </div>
            <div id="glass" style="display:none">
                <h2>유리막 코팅</h2>
                <p>
                    유리막 코팅 시공 비용<br>
                    <?php echo number_format($gp)?>원 (VAT10%포함)
                </p>
            </div>
            <div>
                <h2>합계</h2>
                <p style="font-weight: 700; color: #000;"><span id="total"><?php echo number_format($tp+$pp)?></span>원 (VAT10%포함)</p>
            </div>
        </div>
        <div class="bottom_btn_two">
            <form method="GET" action="leather.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" id="glass_chk" name="glass" value="">
                <input type="hidden" id="gp" name="gp" value="<?php echo $gp?>">
            </form>
            <div>
                <button type="button">담고 다음으로</button>
                <button type="button" onclick="location.href='leather.php'">건너뛰기</button>
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
            if ($(".middle_choice").hasClass("on") == true) {
                // $(location).attr("href", "../sub/leather.php");
                $("#sub").click();
            } else {
                $(".bottom_btn_two .warning").css({"display" : "block"});
            }
        })
    })

    function sum(){
        var gp = parseInt($("#gp").val());
        var total = parseInt($("#total").text().replace(/,/g,""));

        if($("#glass").css("display")=="none"){
            $("#glass").css("display", "flex");
            $("#glass_chk").val("true");
            total=total+gp;
        } else {
            $("#glass_chk").val("false");
            $("#glass").css("display", "none");
            total=total-gp;
        }
        $("#total").text(AddComma(total));
    }

    function AddComma(num) {
        var regexp = /\B(?=(\d{3})+(?!\d))/g;
        return num.toString().replace(regexp, ',');
    }
</script>

</html>

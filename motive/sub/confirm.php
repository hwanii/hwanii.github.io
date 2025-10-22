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
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
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

        $after_blow=$_GET['after_blow'];
        if($after_blow!=""){
            $ap=$_GET['ap'];
        }

        $uSql="UPDATE counsel SET after_blow='$after_blow', after_blow_price='$ap' WHERE temp_number='$temp'";
        $uRes=mysqli_query($conn, $uSql);

        $sql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $company=$row['company'];
        $car=$row['car'];
        $brand=$row['brand'];
        $color=$row['color'];
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
        $deafening=$row['deafening'];
        $dp=$row['deafening_price'];
        $blackbox=$row['blackbox'];
        $bp=$row['blackbox_price'];
        $battery=$row['battery'];
        $btp=$row['battery_price'];
        
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
                <h2>FINAL</h2>
                <p>01</p>
            </div>
            <span>최종확인하기</span>
        </div>
        <div class="density_title">
            <h2>차량 정보</h2>
            <div></div>
        </div>
        <p class="suggestion">최종 확인을 위한 차량 정보입니다.</p>
        <div class="estimate">
            <div>
                <h2>브랜드</h2>
                <p><?php echo $company?></p>
            </div>
            <div>
                <h2>차종</h2>
                <p><?php echo $car?></p>
            </div>
            <div>
                <h2>컬러</h2>
                <p><?php echo $color?></p>
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
                    전면 <?php echo ($tt[0]=="after") ? "나중에 선택" : ($tt[0]=="no") ? "선택안함" : $tt[0]?> / 측면1열 <?php echo ($tt[1]=="after") ? "나중에 선택" : ($tt[1]=="no") ? "선택안함" : $tt[1]?> / 측면2열 <?php echo ($tt[2]=="after") ? "나중에 선택" : ($tt[2]=="no") ? "선택안함" : $tt[2]?> / 후면 <?php echo ($tt[3]=="after") ? "나중에 선택" : ($tt[3]=="no") ? "선택안함" : $tt[3]?> / 썬루프 <?php echo ($tt[4]=="after") ? "나중에 선택" : ($tt[4]=="no") ? "선택안함" : $tt[4]?><br>
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
            <div style="<?php echo ($blackbox=="") ? "display:none" : ""?>">
                <h2>블랙박스</h2>
                <p>
                    <?php echo $blackbox?><br>
                    <?php echo number_format($bp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($battery=="") ? "display:none" : ""?>">
                <h2>보조 배터리</h2>
                <p>
                    <?php echo $battery?><br>
                    <?php echo number_format($btp)?>원 (VAT10%포함)
                </p>
            </div>
            <div style="<?php echo ($after_blow=="") ? "display:none" : ""?>">
                <h2>애프터 블로우</h2>
                <p>
                    <?php echo $after_blow?><br>
                    <?php echo number_format($ap)?>원 (VAT10%포함)
                </p>
            </div>
            <div>
                <h2>합계</h2>
                <p style="font-weight: 700; color: #000;"><span id="total"><?php echo number_format($tp+$pp+$gp+$lp+$dp+$bp+$btp+$ap)?></span>원 (VAT10%포함)</p>
            </div>
        </div>
        <?php
        $eaSql="SELECT * FROM event_area";
        $eaRes=mysqli_query($conn, $eaSql);
        $eaRow=mysqli_fetch_array($eaRes);
        $eThumb=$eaRow['thumb'];
        if($eThumb){
        ?>
        <div class="evnet_banner">
            <img src="../img/event/<?php echo $eThumb?>" alt="">
        </div>
        <?php } ?>
        <div class="link">
            <a href="javascript:void(0)">
                <img src="../img/kakao.png" alt="카카오톡 아이콘">
                <p>카카오톡 보내기</p>
            </a>
            <a href="javascript:clip()">
                <img src="../img/link.png" alt="링크 아이콘">
                <p>링크 복사하기 </p>
            </a>
        </div>
        <div class="bottom_btn">
            <form method="GET" action="date.php">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" name="total" value="<?php echo ($tp+$pp+$gp+$lp+$dp+$bp+$btp+$ap)?>">
            </form>
            <button type="button" onclick="chk_confirm()">예약하기</button>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function clip(){
        var url = '';
        var temp = "?temp=<?php echo $temp?>";
        var textarea = document.createElement("textarea");
        document.body.appendChild(textarea);
        url = window.location.href + temp;
        textarea.value = url;
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        alert("링크가 복사되었습니다. 필요하신 곳에 붙여넣기 하세요!")
    };

    function chk_confirm(){
        if(confirm("예약을 접수하시겠습니까?")){
            $("#sub").click();
        }
    }
</script>
</html>

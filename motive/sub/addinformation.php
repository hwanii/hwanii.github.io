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

        $sql="SELECT * FROM counsel WHERE temp_number='$temp'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $car=$row['car'];
        
        $brand=$_GET['brand'];
        $type=$_GET['type'];
        $product=$_GET['product'];
        $bp=$brand."-".$product;

        if($type=="package"){
            $density01=(strpos($_GET['density01'], "No")!==false) ? "선택안함" : ((strpos($_GET['density01'], "After")!==false) ? "나중에 선택" : substr($_GET['density01'], -2, 2)."%");
            $density02=(strpos($_GET['density02'], "No")!==false) ? "선택안함" : ((strpos($_GET['density02'], "After")!==false) ? "나중에 선택" : substr($_GET['density02'], -2, 2)."%");
            $density03=(strpos($_GET['density03'], "No")!==false) ? "선택안함" : ((strpos($_GET['density03'], "After")!==false) ? "나중에 선택" : substr($_GET['density03'], -2, 2)."%");
            $density04=(strpos($_GET['density04'], "No")!==false) ? "선택안함" : ((strpos($_GET['density04'], "After")!==false) ? "나중에 선택" : substr($_GET['density04'], -2, 2)."%");
            $density05=(strpos($_GET['density05'], "No")!==false) ? "선택안함" : ((strpos($_GET['density05'], "After")!==false) ? "나중에 선택" : substr($_GET['density05'], -2, 2)."%");

            $tinting=$_GET['tinting'];
            $pSql="SELECT * FROM sun_package WHERE title='$tinting' AND brand='$bp' AND car='$car'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $front=($density01!="선택안함") ? $pRow['front_price'] : 0;
            $side1=($density02!="선택안함") ? $pRow['side1_price'] : 0;
            $side2=($density03!="선택안함") ? $pRow['side2_price'] : 0;
            $back=($density04!="선택안함") ? $pRow['back_price'] : 0;
            $sun=($density05!="선택안함") ? $pRow['sun_price'] : 0;
            $tinting_type=$density01." / ".$density02." / ".$density03." / ".$density04." / ".$density05;
            $total=$front+$side1+$side2+$back+$sun;
        } else if($type=="choice"){
            $pSql="SELECT * FROM tinting WHERE brand='$brand' AND product='$product' AND car='$car'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $ft=($_GET['front']=="after" || $_GET['front']=="no") ? "0" : $pRow['front'];
            $s1=($_GET['side1']=="after" || $_GET['side1']=="no") ? "0" : $pRow['side1'];
            $s2=($_GET['side2']=="after" || $_GET['side2']=="no") ? "0" : $pRow['side2'];
            $bk=($_GET['back']=="after" || $_GET['back']=="no") ? "0" : $pRow['back'];
            $sn=($_GET['sun']=="after" || $_GET['sun']=="no") ? "0" : $pRow['roof'];
            $front=$_GET['front'];
            $side1=$_GET['side1'];
            $side2=$_GET['side2'];
            $back=$_GET['back'];
            $sun=$_GET['sun'];
            $tinting_type=$front."/".$side1."/".$side2."/".$back."/".$sun;
            $total=$ft + $s1 + $s2 + $bk + $sn;
        }

        $uSql="UPDATE counsel SET tinting='$bp', tinting_type='$tinting_type', tinting_price='$total' WHERE temp_number='$temp'";
        $uRes=mysqli_query($conn, $uSql);
        
        ?>
        <div class="add_title">
            <h2>추가 시공도 함께 해보세요</h2>
            <p>시간이 절약되는 추가 시공 신청 시작하기</p>
        </div>
        <div class="add">
            <div class="left">
                <?php
                $sql="SELECT * FROM product_intro ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                $no=1;
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    ?>
                    <p <?php echo ($no==1) ? "class='on'" : ""?>><?php echo $title?></p>
                    <?php
                    $no++;
                }
                ?>
            </div>
            <div class="right">
                <?php
                $sql="SELECT * FROM product_intro ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                $no=1;
                while($row=mysqli_fetch_array($res)){
                    $contents=$row['contents'];
                    ?>
                    <div <?php echo ($no==1) ? "class='active'" : ""?>><?php echo $contents?></div>
                    <?php
                $no++;
                }
                ?>
            </div>
        </div>
        <div class="bottom_btn_two">
            <div>
                <button type="button" onclick="location.href='ppf.php'">다음으로</button>
                <button>건너뛰기</button>
            </div>
            <p style="font-size: 14px; font-weight: 700; color: #000;">추가 옵션 작업들이에요,<br class="sub_br"> 함께 신청하시는걸 추천드립니다.</p>
        </div>
        <div class="popup">
            <p><b>'확인'</b> 을 누르시면 <b>최종 확인 페이지</b>로 이동되며,<br>다른 추가 시공을 선택하실 수 없습니다.<br><b>추가 시공을 선택</b>하시려면 <b>'취소'</b> 를 눌러주세요</p>
            <div class="pop_btn">
                <button type="button" onclick="location.href='confirm.php'">확인</button>
                <button>취소</button>
            </div>
        </div>
        <div class="pop_bg"></div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

<script>
    $(".bottom_btn_two div button:last-child").click(function(){
        $(".popup").css({"display" : "flex"});
        $(".pop_bg").show();
    });

    $(".pop_btn button:last-child").click(function(){
        $(".popup").hide();
        $(".pop_bg").hide();
    });
</script>

</html>

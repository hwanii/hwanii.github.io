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
<?php
include '../connect.php';

$num=$_GET['num'];

$sql="SELECT * FROM counsel WHERE num='$num'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$name=$row['res_name'];
$tel=$row['tel'];
$carnumber=$row['carnumber'];
$company=$row['company'];
$car=$row['car'];
$color=$row['color'];
$date=$row['confirm_time'];
$input_date=$row['input_date'];
$brand=$row['brand'];
$tinting=$row['tinting'];
$tinting_type=explode("/", $row['tinting_type']);
$ppf=$row['ppf'];
$ppf_type=$row['ppf_type'];
$glass=$row['glass'];
$leather=$row['leather'];
$deafening=$row['deafening'];
$blackbox=$row['blackbox'];
$battery=$row['battery'];
$after_blow=$row['after_blow'];
$total=$row['total'];
$progress=$row['progress'];
?>
<body style="background-color: #f1f1f2;">
    <div id="pdfDiv" class="warranty_body spoka">
        <div class="warranty spoka">
            <div class="in_header">
                <a href="../index.html" class="logo">
                    <img src="../img/logo-red.png" alt="모티브 로고">
                    <p style="color: #ec1c24;">PRODUCT WARRANTY</p>
                </a>
            </div>
            <div class="top">
                <div class="contents">
                    <h2>Name</h2>
                    <h2><?php echo $name?></h2>
                </div>
                <div class="contents">
                    <h2>Phone number</h2>
                    <h2><?php echo $tel?></h2>
                </div>
                <div class="contents">
                    <h2>Vin</h2>
                    <h2><?php echo $carnumber?></h2>
                </div>
                <div class="contents">
                    <h2>Date of purchase</h2>
                    <h2><?php echo date("Y-m-d", strtotime($date))?></h2>
                </div>
            </div>
            <h2>
                모티브와 함께 해주셔서 감사합니다.<br>
                고객님께서는 모티브를 통해 <br class="wr_none">정식 시공 서비스를 받으셨으며<br>
                내역은 아래와 같습니다.
            </h2>
            <div class="middle">
                <?php
                if($tinting){
                ?>
                <div class="contents">
                    <h2>썬팅</h2>
                    <h2><?php echo $brand?></h2>
                </div>
                <?php } 
                if($ppf){
                ?>
                <div class="contents">
                    <h2>PPF</h2>
                    <h2>모티브 프리미엄</h2>
                </div>
                <?php } 
                if($glass){
                ?>
                <div class="contents">
                    <h2>유리막 코팅 ㅣ 그래핀 코팅</h2>
                    <h2>모티브 슈프림 블랙</h2>
                </div>
                <?php } 
                if($leather){
                ?>
                <div class="contents">
                    <h2>가죽 코팅</h2>
                    <h2>그래핀 시공</h2>
                </div>
                <?php } 
                if($deafening){
                ?>
                <div class="contents">
                    <h2>방음 패키지</h2>
                    <h2><?php echo $deafening?> 옵션</h2>
                </div>
                <?php } 
                if($blackbox){
                ?>
                <div class="contents">
                    <h2>블랙박스</h2>
                    <h2><?php echo $blackbox?></h2>
                </div>
                <?php } 
                if($battery){
                ?>
                <div class="contents">
                    <h2>보조배터리</h2>
                    <h2><?php echo $battery?></h2>
                </div>
                <?php } 
                if($after_blow){
                ?>
                <div class="contents">
                    <h2>애프터 블로우</h2>
                    <h2><?php echo $after_blow?></h2>
                </div>
                <?php } ?>
            </div>
            <a href="" class="bottom">
                시공된 차량에 대하여 고의적, 부주의, 천재지변으로 인한 훼손 시에는 무상 A/S에서 제외됩니다.<br>
                시공 항목에 대한 상세한 정보는 GOMOTIVE.CO.KR를 참조해 주십시오.
            </a>
        </div>
    </div>
    <button class="paper_download" onclick="down_img()">다운로드</button>
    <div class="empty"></div>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script type="text/javascript">
    function down_img(){
            html2canvas($('#pdfDiv')[0]).then(function(canvas){
            var img = document.createElement("a");
            img.download = "MOTIVE 보증서.png";
            img.href=canvas.toDataURL();
            document.body.appendChild(img);
            img.click();
            });
        }
</script>
</html>

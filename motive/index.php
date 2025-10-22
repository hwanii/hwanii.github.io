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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<?php
include 'connect.php';


$sql="SELECT * FROM basic_design";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$logo=$row['logo'];
$back=$row['back'];

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

@ob_start();
@session_start();

$temp=$_SESSION['temp'];
$today=date("Y-m-d");
$yDay = date("Y-m-d", strtotime($today."-1 day"));// 어제 날짜

$dSql="DELETE FROM counsel WHERE counsel_time < '$today 00:00:00' AND stat=''";
// echo $dSql;
$dRes=mysqli_query($conn, $dSql);

if(!isset($temp)){
    $result="false";
    while($result=="false"){
        $temp_number=generateRandomString(4);

        $tSql="SELECT * FROM temp_number WHERE temp='$temp_number' AND DATE_FORMAT('temp_time', '%Y-%m-%d')='$today'";
        $tRes=mysqli_query($conn, $tSql);
        $tRows=mysqli_num_rows($tRes);
        if($tRows==0){
            $iSql="INSERT INTO temp_number SET temp='$temp_number', temp_time=now()";
            $iRes=mysqli_query($conn, $iSql);
            $result="true";
        }
    }

    $_SESSION['temp']=$temp_number;
    // setcookie("temp", $temp_number, time()+3600);

}

// echo $_SESSION['temp'];
?>
<body>
    <section class="index_show" style="background: url('img/basic/<?php echo $back?>') no-repeat center/cover;">
        <!-- <img src="img/indexCar.png" alt=""> -->
        <div class="txt_box">
            <img src="img/logo-index.png" alt="모티브 로고">
            <p>MOTIVE에서 만드는 나만의 선팅 간편 견적</p>
            <div>
                <a href="sub/check.php">내 견적 조회하기</a>
                <a href="sub/cartype.php">견적 만들기</a>
            </div>
            <span>해당 웹 페이지는 모티브에서 소유권을 보유하고 있으며,<br class="index_br"> 무단으로 복제 시 법적 책임을 물을 수 있습니다.<br>동종 업계 관계자들의 무단 활용을 금지합니다.</span>
        </div>
    </section>
    <a href="admin" class="ad_page">관리자</a>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date(" H:i:s");
$yester = date("Y-m-d", strtotime($currdt."-1 day"));// 어제 날짜
$userip = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) 
    $referer = $_SERVER['HTTP_REFERER'];  
else 
    $referer = "";
if($conn){
    $sql="SELECT * FROM tb_stat_visit WHERE regip='$userip' AND regdate='$currdt'";
    $res=mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    // 처음 방문했는지 검사
    if($rows==0) { 
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
</html>

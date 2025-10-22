<?php
include 'connect.php';

$mSql="SELECT * FROM opengraph";
$mRes=mysqli_query($conn, $mSql);
$mRow=mysqli_fetch_array($mRes);
?>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<title><?php echo $mRow['title'];?></title>
<meta name="description" content="<?php echo $mRow['contents'];?>">
<meta property="og:type" content="website" />
<meta property="og:image" content="../admin/img/opengraph/<?php echo $mRow['thumb'];?>" />
<meta property="og:title" content="<?php echo $mRow['title'];?>" />
<meta property="og:description" content="<?php echo $mRow['contents'];?>" />
<meta property="og:url" content="홈페이지 URL 입력" />
<meta name="robots" content="index,follow" />
<meta name="keywords" content="<?php echo $mRow['keywords'];?>">

<!-- Mobile Stuff -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msapplication-tap-highlight" content="no">
<meta name="keywords" content="">
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
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="rgba(0,0,0,0)">
<meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
<link rel="canonical" href="홈페이지 URL 입력">
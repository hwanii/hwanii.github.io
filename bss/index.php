<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php';?>
    <div class="main">
        <div class="main_btn">
            <a href="sub/reservation.php">
                <p>예약하기</p>
                <div class="line"></div>
                <img src="img/icon-main01.png">
            </a>
            <a href="sub/search.php">
                <p>조회하기</p>
                <div class="line"></div>
                <img src="img/icon-main02.png">
            </a>
            <a href="sub/process.php">
                <p>사진 업로드하기</p>
                <div class="line"></div>
                <img src="img/icon-main03.png">
            </a>
            <a href="sub/ask.php">
                <p>상담하기</p>
                <div class="line"></div>
                <img src="img/icon-main04.png">
            </a>
        </div>
    </div>
    <div class="map">
        <h2>찾아오는 길<br>공항 매장 위치 안내도</h2>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30672.352356903644!2d108.2040713221194!3d16.063204055503903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219438eba342f%3A0x589c26046f1c7d74!2zQlNTIOuLpOuCreqzte2VreyImO2VmOusvOuwsOyGoSBCQUdHQUdFIFNUT1JBR0UgU0VSVklDRQ!5e0!3m2!1sko!2s!4v1695535630507!5m2!1sko!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1139.90750763656!2d108.20248182836067!3d16.056325768801113!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219438eba342f%3A0x589c26046f1c7d74!2zQlNTIOuLpOuCreqzte2VreyImO2VmOusvOuwsOyGoSBCQUdHQUdFIFNUT1JBR0UgU0VSVklDRQ!5e0!3m2!1sko!2skr!4v1696986132058!5m2!1sko!2skr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="admin_btn">
        <a href="admin_login.php">관리자모드</a>
        <a href="staff.php">STAFF</a>
    </div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
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

    if($rows==0) { 
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
</html>

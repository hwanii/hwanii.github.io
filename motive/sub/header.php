<?php
include '../connect.php';

@ob_start();
@session_start();

$temp=($_GET['temp']) ? $_GET['temp'] : $_SESSION['temp'];
$today=date("Y-m-d");

if(!isset($_SESSION['temp'])){
    $_SESSION['temp']=$temp;
}

if(!isset($temp)){
    ?>
    <script>
        alert("세션 시간이 만료되었습니다.\n다시 입력해주세요.");
        location.href="../index.php";
    </script>
    <?php
}
// echo $temp;

$bSql="SELECT * FROM basic_design";
$bRes=mysqli_query($conn, $bSql);
$bRow=mysqli_fetch_array($bRes);
$logo=$bRow['logo'];

$eSql="SELECT * FROM element";
$eRes=mysqli_query($conn, $eSql);
$eRow=mysqli_fetch_array($eRes);
$back_img=$eRow['back'];
$empty_img=$eRow['empty'];

if($header=="back"){
    ?>
    <div class="back_header">
        <a href="javascript:window.history.back();" class="back_btn">
            <div><img src="../img/element/<?php echo $back_img?>" alt=""></div>
            <p>돌아가기</p>
        </a>
        <a href="../index.php" class="logo">
            <img src="../img/basic/<?php echo $logo?>" alt="모티브 로고">
            <p>MOTIVE에서 만드는<br class="header_br"> 나만의 선팅 간편 견적</p>
        </a>
    </div>
    <?php
} else if($header=="all"){
    ?>
    <div class="all_header">
        <a href="javascript:window.history.back();" class="back_btn">
            <div><img src="../img/element/<?php echo $back_img?>" alt=""></div>
            <p>돌아가기</p>
        </a>
        <a href="../index.php" class="logo">
            <img src="../img/basic/<?php echo $logo?>" alt="모티브 로고">
            <p>MOTIVE에서 만드는<br class="header_br"> 나만의 선팅 간편 견적</p>
        </a>
        <div class="clear_btn">
            <div><img src="../img/element/<?php echo $empty_img?>" alt=""></div>
            <p>내용 비우기</p>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="header">
        <a href="../index.php" class="logo">
            <img src="../img/basic/<?php echo $logo?>" alt="모티브 로고">
            <p>MOTIVE에서 만드는<br class="header_br"> 나만의 선팅 간편 견적</p>
        </a>
    </div>
    <?php
}
?>
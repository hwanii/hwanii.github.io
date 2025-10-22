<?php
if(!isset($_SESSION)) { @session_start(); } 
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
        $_SESSION['visit'] = "1";
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}

$fSql="SELECT * FROM information";
$fRes=mysqli_query($conn, $fSql);
$fRow=mysqli_fetch_array($fRes);
$fTime=$fRow['time'];
$addr=$fRow['addr'];
$detail=$fRow['detail_addr'];
$tel=$fRow['tel'];
$bn=$fRow['business_number'];
$time=$fRow['time'];
?>
<footer class="g-footer">
    <div class="f-inner">
        <h1>
            <a href="<?php echo $root?>index.php">
                <img src="<?php echo $root?>img/g-logo.png" alt="circle logo">
            </a>
        </h1>
        <div class="f-box">
            <div>
                <h2>Time</h2>
                <p><?php echo $time?></p>
            </div>
            <div>
                <h2>Address</h2>
                <p><?php echo $addr." ".$detail?></p>
            </div>
            <div>
                <h2>Tel</h2>
                <p><?php echo $tel?></p>
            </div>
            <div class="sa">
                <h2>사업자등록번호</h2>
                <p><?php echo $bn?></p>
            </div>
            <p class="copy">COPYRIGHT ALL RESERVED 2022 CIRCLE STATION</p>
        </div>
    </div>
</footer>
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

$fSql="SELECT * FROM information";
$fRes=mysqli_query($conn, $fSql);
$fRow=mysqli_fetch_array($fRes);
$company=$fRow['kor_company'];
$name=$fRow['name'];
$business_number=$fRow['business_number'];
$addr=$fRow['addr'];
$p_addr=$fRow['p_addr'];
$b_addr=$fRow['b_addr'];
$tel=$fRow['tel'];
$email=$fRow['email'];
?>
<footer>
    <div class="inner">
        <div class="footer_left">
            <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/f_logo.png" alt="미플레이스 로고"></a></h2>
            <div class="left">
                <div>
                    <p>Email</p>
                    <p><?php echo $email?></p>
                </div>
            </div>
        </div>
        <div class="footer_center">
            <div class="left">
                <div>
                    <p>HQ</p>
                    <p><?php echo $addr?></p>
                </div>
                <div>
                    <p>Pohang Branch</p>
                    <p><?php echo $p_addr?></p>
                </div>
                <div>
                    <p>Bundang Branch</p>
                    <p><?php echo $b_addr?></p>
                </div>
            </div>
        </div>
        <p class="copy">© 2022 <?php echo $company?>, Inc. All Rights Reserved</p>
    </div>
</footer>
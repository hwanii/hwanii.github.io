<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date("H:i:s");
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

$iSql="SELECT * FROM information";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$iAddr=$iRow['addr'];
$iDetail=$iRow['detail_addr'];
$iTel=$iRow['tel'];
$iFax=$iRow['fax'];
$iEmail=$iRow['email'];

$bSql="SELECT * FROM branch";
$bRes=mysqli_query($conn, $bSql);
$bRow=mysqli_fetch_array($bRes);
$bAddr=$bRow['addr'];
$bDetail=$bRow['detail_addr'];
$bTel=$bRow['tel'];
$bFax=$bRow['fax'];
$bEmail=$bRow['email'];
?>
<footer>
    <div class="inner">
        <!-- <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="GNP Logo"></a></h2> -->
        <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo01.png" alt="GNP Logo"></a></h2>
        <p>㈜지엔피 Gnp. Co., Ltd.</p>
        <div class="footer-con">
            <div class="left">
                <div>
                    <span>본사/공장 : <?php echo $iAddr?> <br><?php echo $iDetail?></span>
                </div>
                <div>
                    <p>Tel : <?php echo $iTel?></p>
                    <p>Fax : <?php echo $iFax?></p>
                    <p>Email : <?php echo $iEmail?></p>
                </div>
            </div>
            <div class="center">
                <div>
                    <span>제주지사 : <?php echo $bAddr?> <?php echo $bDetail?></span>
                </div>
                <div>
                    <p>Tel : <?php echo $bTel?></p>
                    <p>Fax : <?php echo $bFax?></p>
                </div>
            </div>
            <ul class="right">
                <li><a href="<?php echo $root?>sub/introduce.php">회사소개</a></li>
                <li><a href="<?php echo $root?>sub/map-01.php">오시는 길</a></li>
                <li><a href="#">개인정보취급방침</a></li>
                <li><a href="#">무단이메일수집거부</a></li>
            </ul>
            <p><a href="<?php echo $root?>admin/">[관리자]</a></p>
        </div>
        <p class="copy">COPYRIGHT © GNP. ALL RIGHTS RESERVED</p>
    </div>
</footer>
<?php
include '../connect.php';

$idx=$_POST['idx'];

$vSql="SELECT * FROM curri_info WHERE curri_type='wedorg' AND idx='$idx'";
$vRes=mysqli_query($conn, $vSql);
$vRow=mysqli_fetch_array($vRes);
$start=$vRow['curri_period_mins'];
$end=$vRow['curri_period_mine'];
$title=$vRow['curri_title'];
$content=$vRow['curri_content'];
$spector=$vRow['spector'];
$place=$vRow['curri_place'];
$period=$vRow['curri_period'];

$fSql="select file_org,file_chg from board_file where 1=1 and board_tbname='curri_info' and board_code = 'pc' and board_idx='$idx' order by idx asc limit 0,1";
$fRes=mysqli_query($conn, $fSql);
$fRow=mysqli_fetch_array($fRes);
$file=$fRow['file_chg'];

$arr=array($file, $title, $spector, $place, $period, $start, $end, $content);

echo json_encode($arr);
?>
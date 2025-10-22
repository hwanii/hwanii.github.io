<?php
include '../connect.php';

$tel=$_POST['tel'];

$sql="SELECT * FROM counsel WHERE tel='$tel'";
$res=mysqli_query($conn, $sql);
$txt="";
while($row=mysqli_fetch_array($res)){
    $confirm_time=date("Y-m-d H:i", strtotime($row['confirm_time']));
    $progress=$row['progress'];
    $num=$row['num'];

    if($progress=="대기중"){
        $css="before";
    } else if($progress=="진행중"){
        $css="going";
    } else if($progress=="시공완료"){
        $css="complete";
    }

    $txt.='<li>';
    $txt.='<h2>'.$confirm_time.'</h2>';
    $txt.='<p class="'.$css.'">상태 - '.$progress.'</p>';
    $txt.='<div>';
    $txt.='<a href="warranty.php?num='.$num.'" target="blank">보증서다운</a>';
    $txt.='<a href="invoice.php?num='.$num.'" target="blank">견적서다운</a>';
    $txt.='</div>';
    $txt.='</li>';
}

$arr=array($txt);

echo json_encode($arr);
?>
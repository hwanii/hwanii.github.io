<?php
include '../connect.php';

$title=$_POST['title'];
$car=$_POST['car'];

$sql="SELECT * FROM ppf_package WHERE title='$title' AND car='$car'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$hl=($row['hl']!="0") ? "헤드램프" : "";
$fbs=($row['fbs']!="0") ? "프런트 범퍼 사이드" : "";
$sm=($row['sm']!="0") ? "사이드 미러" : "";
$dc=($row['dc']!="0") ? "도어컵" : "";
$ds=($row['ds']!="0") ? "도어 스템" : "";
$de=($row['de']!="0") ? "도어 에지" : "";
$gd=($row['gd']!="0") ? "주유구&도어" : "";
$rbs=($row['rbs']!="0") ? "리어 범퍼 사이드" : "";
$rbu=($row['rbu']!="0") ? "리어 범퍼 어퍼" : "";

$total=$row['total'];

$ary=array($hl, $fbs, $sm, $dc, $ds, $de, $gd, $rbs, $rbu);

$txt="";
for($i=0;$i<count($ary);$i++){
    if($ary[$i]==""){
        continue;
    } else {
        $txt.=$ary[$i]." / ";
    }
}

$arr=array($txt, $total);

echo json_encode($arr);
?>
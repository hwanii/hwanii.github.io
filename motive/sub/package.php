<?php
include '../connect.php';

$car=$_POST['car'];
$brand=$_POST['brand'];
$product=$_POST['product'];

$bp=$brand."-".$product;

$arr=array();
$txt="";
$sql="SELECT * FROM sun_package WHERE brand='$bp' AND car='$car' ORDER BY num ASC";
$res=mysqli_query($conn, $sql);
// $txt.='<div class="tip_contents">';
while($row=mysqli_fetch_array($res)){
    array_push($arr, $row['title']);
    array_push($arr, $row['front']);
    array_push($arr, $row['side1']);
    array_push($arr, $row['side2']);
    array_push($arr, $row['back']);
    array_push($arr, $row['sun']);
    
    // $txt.='<div class="contents">';
    // $txt.='<div class="top">';
    // $txt.='<span></span>';
    // $txt.='<h2>'.$title.'</h2>';
    // $txt.='</div>';
    // $txt.='<div class="detail">';
    // $txt.='<div>';
    // $txt.='<p>전면 농도</p>';
    // $txt.='<p class="densitySelect01">'.$front.'%</p>';
    // $txt.='</div>';
    // $txt.='<div>';
    // $txt.='<p>측면 1열 농도</p>';
    // $txt.='<p class="densitySelect02">'.$side1.'%</p>';
    // $txt.='</div>';
    // $txt.='<div>';
    // $txt.='<p>측면 2열 농도</p>';
    // $txt.='<p class="densitySelect03">'.$side2.'%</p>';
    // $txt.='</div>';
    // $txt.='<div>';
    // $txt.='<p>후면 농도</p>';
    // $txt.='<p class="densitySelect04">'.$back.'%</p>';
    // $txt.='</div>';
    // $txt.='<div>';
    // $txt.='<p>썬루프 농도</p>';
    // $txt.='<p class="densitySelect05">'.$sun.'%</p>';
    // $txt.='</div>';
    // $txt.='</div>';
    // $txt.='<p>선택된 패키지에요</p>';
    // $txt.='</div>';
}
// $txt.='</div>';
// $arr=array($txt);

// array_push($arr, $sql);
echo json_encode($arr);
?>
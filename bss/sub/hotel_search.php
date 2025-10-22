<?php
include '../connect.php';

$hotel=$_POST['hotel'];
$no=($_POST['no']) ? $_POST['no'] : "";

$s="";
if($no!=""){
    $target="hotel_input".$no;
    $pop="#hotel_pop".$no;

    $s=" AND (region='Đà Nẵng' OR region='Hội An')";
} else {
    $target="hotel";
    $pop=".hotel_pop";
}

$sql="SELECT * FROM hotel WHERE lower(eng) LIKE lower('%$hotel%'){$s}";
$res=mysqli_query($conn, $sql);
$txt="";
while($row=mysqli_fetch_array($res)){
    $eng=$row['eng'];

    $txt.='<p onclick="$(\'#'.$target.'\').val(\''.$eng.'\');hotel_change(\''.$eng.'\', \''.$no.'\');$(\''.$pop.'\').hide();">'.$eng.'</p>';
}

echo json_encode($txt);
?>
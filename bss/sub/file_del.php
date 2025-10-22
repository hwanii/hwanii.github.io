<?php
include '../connect.php';

$number=$_POST['number'];
$file=$_POST['file'];

$dir="../img/baggage/";

$sql="DELETE FROM baggage WHERE `number`='$number' AND `file`='$file'";
$res=mysqli_query($conn, $sql);

if($res){
    unlink($dir.$file);

    echo json_encode("true");
}
?>
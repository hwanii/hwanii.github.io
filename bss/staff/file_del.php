<?php
include '../connect.php';

$type=$_POST['type'];
$number=$_POST['number'];
$file=$_POST['file'];

$dir="../img/{$type}/";

$sql="DELETE FROM {$type} WHERE `number`='$number' AND `file`='$file'";
$res=mysqli_query($conn, $sql);

if($res){
    unlink($dir.$file);

    echo json_encode("true");
}
?>
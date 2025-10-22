<?php
include '../connect.php';

$type=$_POST['type'];
$num=$_POST['num'];

$dir="../img/{$type}/";
$sql="SELECT * FROM {$type} WHERE `number`='$num'";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $file=$row['file'];

    unlink($dir.$file);
}

$dSql="DELETE FROM {$type} WHERE `number`='$num'";
$dRes=mysqli_query($conn, $dSql);
?>
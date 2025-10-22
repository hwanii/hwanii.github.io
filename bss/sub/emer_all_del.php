<?php
include '../connect.php';

$num=$_POST['num'];

$dir="../img/emergency/";
$sql="SELECT * FROM emer_file WHERE `number`='$num'";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $file=$row['file'];

    unlink($dir.$file);
}

$dSql="DELETE FROM emer_file WHERE `number`='$num'";
$dRes=mysqli_query($conn, $dSql);
?>
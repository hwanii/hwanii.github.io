<?php
include '../connect.php';

$num=$_POST['num'];

$dir="../img/baggage/";
$sql="SELECT * FROM baggage WHERE `number`='$num'";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $file=$row['file'];

    unlink($dir.$file);
}

$dSql="DELETE FROM baggage WHERE `number`='$num'";
$dRes=mysqli_query($conn, $dSql);
?>
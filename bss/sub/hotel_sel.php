<?php
include '../connect.php';

$hotel=$_POST['hotel'];

$sql="SELECT * FROM hotel WHERE eng='$hotel'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$price=$row['price'];
$add=$row['add_price'];

$arr=array($price, $add);

echo json_encode($arr);
?>
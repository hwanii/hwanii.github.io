<?php
include '../connect.php';

$type=$_POST['type'];

// $sql="SELECT * FROM rate WHERE `type`='$type'";
// $res=mysqli_query($conn, $sql);
// $row=mysqli_fetch_array($res);
// $basic=($row['basic']) ? $row['basic'] : 0;
// $add=($row['add']) ? $row['add'] : 0;
// $air_box=($row['air_box']) ? $row['air_box'] : 0;

$sql="SELECT * FROM rating";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$add_baggage=$row['add_baggage'];
$air_box=$row['air_box'];

$arr=array($air_box);

echo json_encode($arr);
?>
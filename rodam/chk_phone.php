<?php
include 'connect.php';

$phone=$_POST['phone'];

$sql="SELECT * FROM member WHERE tel='$phone'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows==0){
    $stat="true";
} else {
    $stat="false";
}

echo json_encode($stat);
?>
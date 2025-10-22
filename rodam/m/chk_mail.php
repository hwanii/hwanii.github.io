<?php
include 'connect.php';

$email=$_POST['email'];

$sql="SELECT * FROM member WHERE email='$email'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows==0){
    $stat="true";
} else {
    $stat="false";
}

echo json_encode($stat);
?>
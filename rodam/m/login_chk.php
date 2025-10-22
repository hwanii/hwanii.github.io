<?php
include 'connect.php';

$id=$_POST['id'];
$pass=$_POST['pw'];

$sql="SELECT * FROM member WHERE id='$id' AND `password`='$pass'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows==0){
    $stat="false";
} else {
    $stat="true";
}

echo json_encode($stat);
?>
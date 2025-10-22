<?php
include 'connect.php';

$user=$_POST['user'];

$sql="SELECT * FROM member WHERE id='$user'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows==0){
    $stat="true";
} else {
    $stat="false";
}

echo json_encode($stat);
?>
<?php
include '../connect.php';

$id=$_POST['id'];

$sql="SELECT * FROM member WHERE id='$id'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows){
    $result="false";
} else {
    $result="true";
}

echo $result;
?>
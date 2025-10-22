<?php
include '../connect.php';

@session_start();
@session_destroy();

$id=$_POST['id'];

$sql="DELETE FROM member WHERE id='$id'";
$res=mysqli_query($conn, $sql);

if($res){
    echo json_encode("true");
}
?>
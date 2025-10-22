<?php
include "../connect.php";

$type=$_POST['type'];
$pw=$_POST['pass'];
$num=$_POST['num'];

$sql="SELECT * FROM {$type} WHERE num='$num'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);
$pass=$row['pass'];

$len=mb_strlen($pw);
if($len==4){
    if($pw==$pass){
        $result="true";
    } else {
        $result="false";
    }
} else {
    $result="";
}
// if($pw==$pass){
//     $result="true";
// } else {
//     $len=mb_strlen($pw);
//     if($len==4){
//         $result="true";
//     } else {
//         $result="false";
//     }
// }

$arr=array($result, $pw, $pass);

echo json_encode($arr);
?>
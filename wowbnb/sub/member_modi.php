<?php
include '../connect.php';

$id=$_POST['id'];
$pass=$_POST['pass'];
$name=$_POST['name'];

$fTel=$_POST['fTel'];
$mTel=$_POST['mTel'];
$lTel=$_POST['lTel'];
$tel=$fTel."-".$mTel."-".$lTel;

$email=$_POST['email'];

$sql="UPDATE member SET pass='$pass', tel='$tel', email='$email' WHERE id='$id'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("수정되었습니다.");
        parent.location.href="mypage.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
<?php
include '../connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$area=$_POST['area'];
$type=$_POST['type'];

$sql="INSERT INTO counsel SET write_time=now(), `write_name`='$name', email='$email', tel='$tel', counsel_type='$type', area='$area', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("상담이 접수되었습니다.");
        parent.location.href="branch_recruit.php";
    </script>
    <?php
}
?>
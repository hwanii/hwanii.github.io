<?php
include '../connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$type=$_POST['type'];
$count=$_POST['count'];

$sql="INSERT INTO counsel SET write_time=now(), `name`='$name', email='$email', tel='$tel', `type`='$type', count='$count', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수되었습니다.");
        parent.location.href="estimate.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
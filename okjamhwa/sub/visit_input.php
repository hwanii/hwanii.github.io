<?php
include '../connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$type=$_POST['type'];
$people=$_POST['people'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO visit SET write_time=now(), `name`='$name', email='$email', tel='$tel', `type`='$type', people='$people', visit_date='$date', visit_time='$time', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("견학 신청이 접수되었습니다.");
        parent.location.href="visit.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
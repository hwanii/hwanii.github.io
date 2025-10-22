<?php
include '../connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cate=$_POST['cate'];
$title=$_POST['title'];
$contents=addslashes($_POST['contents']);

$sql="INSERT INTO counsel SET `name`='$name', email='$email', tel='$tel', cate='$cate', title='$title', contents='$contents', stat='미확인', write_time=now()";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수되었습니다.");
        parent.location.href="inquiry.php";
    </script>
    <?php
}
?>
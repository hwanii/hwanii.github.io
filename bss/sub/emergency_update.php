<?php
include '../connect.php';

$num=$_POST['num'];

$title=$_POST['title'];
$contents=addslashes($_POST['contents']);
$name=$_POST['name'];

$sql="INSERT INTO `emergency` SET `datetime`='now', `number`='$num', title='$title', contents='$contents', writer='$name'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("접수가 완료되었습니다.")
        parent.location.href="emergency.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
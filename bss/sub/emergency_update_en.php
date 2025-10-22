<?php
include '../connect.php';

$num=$_POST['num'];

$title=$_POST['title'];
$contents=addslashes($_POST['contents']);
$name=$_POST['name'];

$sql="INSERT INTO `emergency` SET `datetime`=now(), `number`='$num', title='$title', contents='$contents', writer='$name'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("Your application has been completed.")
        parent.location.href="emergency_en.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
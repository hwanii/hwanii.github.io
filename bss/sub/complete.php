<?php
include '../connect.php';

$num=$_POST['num'];

$sql="UPDATE reservation SET stat='complete' WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("이용해주셔서 감사합니다.");
        parent.location.href="process.php";
    </script>
    <?php
}
?>
<?php
include '../connect.php';

$num=$_POST['num'];

$sql="UPDATE reservation SET stat='complete' WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("Thank you for using our service.");
        parent.location.href="process_en.php";
    </script>
    <?php
}
?>
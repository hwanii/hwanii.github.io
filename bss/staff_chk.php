<?php
include 'connect.php';

$id=$_POST['id'];
$pass=$_POST['pass'];

$sql="SELECT * FROM staff WHERE staff_id='$id' AND staff_pw='$pass'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows>0){
    setcookie("staff_id", $id);

    ?>
    <script>
        parent.location.href="staff/check.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("There is no matching member information.");
    </script>
    <?php
}
?>
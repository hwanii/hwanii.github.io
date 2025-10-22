<?php
include 'connect.php';

@ob_start();
@session_start();
$user=$_COOKIE['user'];

setcookie("user", "", time()-3600);

$sql="DELETE FROM member WHERE id='$user'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        parent.location.href="index.php";
    </script>
    <?php
}
?>
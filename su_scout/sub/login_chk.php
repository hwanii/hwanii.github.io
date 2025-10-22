<?php
include '../connect.php';

$id=$_POST['id'];
$pass=$_POST['pass'];

$sql="SELECT * FROM member WHERE id='$id' AND pass='$pass'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows){
    @session_start();

    $_SESSION['id']=$id;
    ?>
    <script>
        parent.location.href="../";
        document.location.href="about:blank";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("일치하는 정보가 없습니다.")
    </script>
    <?php
}
?>
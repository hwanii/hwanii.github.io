<?php
include '../connect.php';

$num=$_GET['num'];

$sql="DELETE FROM reservation WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("삭제되었습니다.");
        document.location.href="about:blank";
    </script>
    <?php
}
?>
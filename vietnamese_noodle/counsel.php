<?php
include 'connect.php';

$name=$_POST['name'];
$tel=$_POST['tel'];
$area=$_POST['area'];

$sql="INSERT INTO counsel SET write_time=now(), `write_name`='$name', tel='$tel', area='$area', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("상담 에약이 접수 되었습니다.");
        parent.document.querySelector(".reset").click();
    </script>
    <?php
}
?>
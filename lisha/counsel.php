
<?php
include 'connect.php';

$name=$_POST['name'];
$tel=$_POST['tel'];
$local=$_POST['local'];
$type=$_POST['type'];

$sql="INSERT INTO quick_counsel SET write_time=now(), `write_name`='$name', tel='$tel', counsel_type='$type', `local`='$local', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("상담이 접수되었습니다.");
        parent.location.href="index.php";
    </script>
    <?php
}
?>
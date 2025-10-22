<?php
include '../connect.php';

$type=$_POST['type'];

$gender=$_POST['gender'];
$supportArea=$_POST['supportArea'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$service=$_POST['service'];

$sql="INSERT INTO counsel SET `type`='$type', gender='$gender', support='$supportArea', `write_name`='$name', tel='$tel', email='$email', `service`='$service', stat='미확인', write_time=now()";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("<?php echo $type?> 접수가 완료되었습니다.");
        parent.document.querySelector("#sub_reset").click();
        parent.document.querySelector("#subs_reset").click();
    </script>
    <?php
}
?>
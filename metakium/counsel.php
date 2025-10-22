<?php
include 'connect.php';

$local=$_POST['local'];

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$root=$_POST['root'];
$company=$_POST['company'];
$addr=$_POST['addr'];
$detail=$_POST['detail'];
$request=$_POST['request'];
$set=$_POST['set'];
$contents=$_POST['contents'];
$info=$_POST['info'];

$sql="INSERT INTO counsel SET write_time=now(), write_name='$name', email='$email', tel='$tel', `root`='$root', company='$company', addr='$addr', detail='$detail', request='$request', vr_set='$set', contents='$contents', info='$info', stat='대기 중'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수되었습니다.");
        parent.location.href="<?php echo $local?>";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
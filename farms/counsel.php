<?php
include 'connect.php';

$page=$_POST['page'];

if($page=="ask.php"){
    $locate="./sub/".$page;
} else {
    $locate=$page;
}

$type=$_POST['type'];
$name=$_POST['name'];
$fTel=$_POST['fTel'];
$mTel=$_POST['mTel'];
$lTel=$_POST['lTel'];

$tel=$fTel."-".$mTel."-".$lTel;

$email=$_POST['email'];
$addr=$_POST['addr'];

$e=$email."@".$addr;

$title=$_POST['title'];
$contents=$_POST['contents'];

$sql="INSERT INTO counsel SET write_time=now(), ask_type='$type', write_name='$name', tel='$tel', email='$e', title='$title', contents='$contents', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수 되었습니다.");
        parent.location.href="<?php echo $locate?>";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
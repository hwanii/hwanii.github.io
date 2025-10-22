<?php
include 'connect.php';
@session_start();

$code=$_POST['code'];

if($_SESSION['captcha']['code']!=$code){
    ?>
    <!-- <script>
        alert("자동등록방지 코드가 일치하지 않습니다.");
    </script> -->
    <?php
    // exit;
}

$id=$_POST['id'];
$password=$_POST['pass'];
$tel=($_POST['phone']) ? ", tel='$tel'" : "";
$email=($_POST['email']) ? ", email='$email'" : "";

$sql="UPDATE member SET `password`='$password'{$tel}{$email} WHERE id='$id'";
$res=mysqli_query($conn, $sql);

if($res){
?>
    <script>
        alert("수정이 완료되었습니다.");
        parent.location.href="index.php";
    </script>
<?php
}
?>
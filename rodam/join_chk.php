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
$name=$_POST['name'];
$gender=$_POST['gender'];
$tel=$_POST['phone'];
$email=$_POST['email'];
$birthday=$_POST['birthday'];
$contact=$_POST['contact'];
$etc_contact=$_POST['etc_contact'];
$consult=$_POST['consult'];
$c="";
for($i=0;$i<count($consult);$i++){
    if($i==0){
        $c.=$consult[$i];
    } else {
        $c.=",".$consult[$i];
    }
}
$etc_consult=$_POST['etc_consult'];
$important=$_POST['important'];
$etc_important=$_POST['etc_important'];

$sql="INSERT INTO member SET id='$id', `password`='$password', `name`='$name', gender='$gender', tel='$tel', birthday='$birthday', email='$email', contact='$contact', etc_contact='$etc_contact', consult='$c', etc_consult='$etc_consult', important='$important', etc_important='$etc_important', join_date=now()";
$res=mysqli_query($conn, $sql);

if($res){
?>
    <script>
        alert("가입이 완료되었습니다.");
        parent.location.href="index.php";
    </script>
<?php
}
?>
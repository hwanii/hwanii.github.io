<?php
include '../connect.php';

$id=$_POST['id'];
$pass=$_POST['pass'];
$name=$_POST['name'];

$fTel=$_POST['fTel'];
$mTel=$_POST['mTel'];
$lTel=$_POST['lTel'];
$tel=$fTel."-".$mTel."-".$lTel;

$iSql="SELECT * FROM member WHERE id='$id'";
$iRes=mysqli_query($conn, $iSql);
$iRows=mysqli_num_rows($iRes);

if($iRows==0){
    $sql="INSERT INTO member SET id='$id', pass='$pass', `name`='$name', tel='$tel', join_time=now()";
    $res=mysqli_query($conn, $sql);

    if($res){
        ?>
        <script>
            parent.location.href="login_terms03.php";
            document.location.href="about:blank";
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("중복 된 아이디가 있습니다.");
        document.location.href="about:blank";
    </script>
    <?php
}
?>
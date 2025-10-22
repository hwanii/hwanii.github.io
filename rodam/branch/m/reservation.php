<?php
include 'connect.php';

$name=$_POST['name'];
$tel=$_POST['tel'];
$branch=$_POST['branch'];
$type=$_POST['type'];

$sql="INSERT INTO reservation SET `name`='$name', tel='$tel', branch='$branch', counsel_type='$type', counsel_date=now()";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("상담 신청이 접수되었습니다.");
        parent.document.querySelector('#reset').click();
        document.location.href="about:blank";
    </script>
    <?php
}
?>
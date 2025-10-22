<?php
include '../connect.php';

$name=$_POST['name'];
$pass=$_POST['pass'];
$num=$_POST['num'];

$sql="SELECT * FROM bo_board WHERE write_name='$name' AND file_2='$pass' AND num='$num'";
$res=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($res);

if($rows=="1"){
    ?>
    <script>
        parent.document.location.href="board_write.php?num=<?php echo $num?>";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("성함 또는 비밀번호가 일치하지 않습니다.");
        document.location.href="about:blank";
    </script>
    <?php
}
?>
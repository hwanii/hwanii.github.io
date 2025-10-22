<?php
include '../connect.php';

$num=$_POST['num'];
$memo=$_POST['memo'];

$sql="UPDATE reservation SET memo='$memo' WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("Saved.");
        parent.location.href="work.php?num=<?php echo $num?>";
    </script>
    <?php
}
?>
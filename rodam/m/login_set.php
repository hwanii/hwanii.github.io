<?php
$id=$_POST['user_id'];

@ob_start();
@session_start();
// $_SESSION['user']=$id;
setcookie("user", $id);
?>
<script>
    parent.location.href="index.php";
</script>
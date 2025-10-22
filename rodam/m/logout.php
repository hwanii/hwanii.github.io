<?php
@ob_start();
@session_start();

@session_destroy();

setcookie("user", "", time()-3600);
?>
<script>
    location.href="index.php";
</script>
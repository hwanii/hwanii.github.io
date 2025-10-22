<?php
header("Pragma: no-cache");
header("cache-Control: no-cache, must-revalidate");
@session_start();

@session_destroy();
?>
<script>
    location.href="index.php";
</script>
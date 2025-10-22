<?php
$_SERVER['HTTP_REFERER'];

if(isset($_SERVER['HTTP_REFERER'])){
    $str=$_SERVER['HTTP_REFERER'];
} else {
    $str="없음";
}
?>
<script>
    console.log("<?php echo $str?>");
</script>
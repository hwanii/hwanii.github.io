<?php
include '../connect.php';

$id=$_COOKIE['staff_id'];

if(empty($id)){
    ?>
    <script>
        location.href="../staff.php";
    </script>
    <?php
}

$sSql="SELECT * FROM staff WHERE staff_id='$id'";
$sRes=mysqli_query($conn, $sSql);
$sRow=mysqli_fetch_array($sRes);
$staff_name=$sRow['name'];
$staff_location=$sRow['location'];
$staff_part=$sRow['part'];
?>
<div class="staff_logo">
    <h1><a href="../index_en.php">Baggage Storage Service</a></h1>
</div>
<?php
include '../connect.php';

$num=$_POST['num'];
$add=$_POST['add'];

$sql="SELECT * FROM reservation WHERE num='$num'";
$res=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($res);

$res_no=$row['res_no'];

$aSql="SELECT * FROM reservation WHERE res_no LIKE '%$res_no%' ORDER BY num ASC";
$aRes=mysqli_query($conn, $aSql);
$aRows=mysqli_num_rows($aRes);

$no=$row['res_no']."-".$aRows;
$datetime=$row['datetime'];

$res_type=$row['res_type'];
$stat="request";

$date=$row['date'];
$time=$row['time'];
$arrive_time=$row['arrive_time'];

$airport=$row['airport'];
$hotel=$row['hotel'];

$city_from=$row['city_from'];
$hotel_from=$row['hotel_from'];

$flight_number=$row['flight_number'];

$city_arrive=$row['city_arrive'];
$hotel_arrive=$row['hotel_arrive'];

$payment_type=$row['payment_type'];

$basic_count=$row['basic_count'];
$add_count=$row['add_count'];
$air_box=$row['air_box'];
$hotel_price=$row['hotel_price'];
$add_price=$row['add_price'];
$name_kor=$row['name_kor'];
$name_eng=$row['name_eng'];
$cp=$row['cp'];

$memo=$row['memo'];

$sql="INSERT INTO reservation SET res_no='$no', res_type='$res_type', `date`='$date', `time`='$time', arrive_time='$arrive_time', airport='$airport', flight_number='$flight_number', hotel='$hotel', city_from='$city_from', hotel_from='$hotel_from', city_arrive='$city_arrive', hotel_arrive='$hotel_arrive', payment_type='$payment_type', `basic`='$basic_count', `add`='$add_count', cargo_add='$add', air_box='0', hotel_price='0', add_price='0', `name_kor`='$name_kor', `name_eng`='$name_eng', cp='$cp', memo='$memo', payment='$stat', stat='$stat', `datetime`=now()";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        parent.location.href="cargo_add.php";
    </script>
    <?php
}
?>
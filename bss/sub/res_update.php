<?php
include '../connect.php';

$num=$_POST['num'];

$stat=$_POST['stat'];

$date=$_POST['date'];
$time=$_POST['time'];
$arrive_time=$_POST['arrive_time'];

$airport=$_POST['airport'];
$hotel=$_POST['hotel'];

$city_from=$_POST['city_from'];
$hotel_from=$_POST['hotel_from'];

$flight_number=$_POST['flight_number'];

$city_arrive=$_POST['city_arrive'];
$hotel_arrive=$_POST['hotel_arrive'];

$payment_type=$_POST['payment_type'];

$basic_count=$_POST['basic_count'];
$add_count=$_POST['add_count'];
$air_box=$_POST['air_box'];
$hotel_price=$_POST['hotel_price'];
$add_price=$_POST['add_price'];
$name_kor=$_POST['name_kor'];
$name_eng=$_POST['name_eng'];
$tel=$_POST['tel'];

$memo=$_POST['memo'];

$nSql="SELECT * FROM reservation WHERE res_no LIKE '$today%'";
$nRes=mysqli_query($conn, $nSql);
$nRows=mysqli_num_rows($nRes);

$number=substr($tel,-4);

$no=$today."-".sprintf('%04d', ($nRows+1))."-".$number;

$sql="UPDATE reservation SET `date`='$date', `time`='$time', arrive_time='$arrive_time', airport='$airport', flight_number='$flight_number', hotel='$hotel', city_from='$city_from', hotel_from='$hotel_from', city_arrive='$city_arrive', hotel_arrive='$hotel_arrive', payment_type='$payment_type', `basic`='$basic_count', `add`='$add_count', air_box='$air_box', hotel_price='$hotel_price', add_price='$add_price', `name_kor`='$name_kor', `name_eng`='$name_eng', cp='$tel', memo='$memo', update_time=now() WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        parent.location.href="process01.php?num=<?php echo $num?>";
    </script>
    <?php
}
?>
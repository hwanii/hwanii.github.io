<?php

$year=$_POST['year'];
$month=$_POST['month'];

$date = date('Y-m-d', strtotime($year.$month.'01'));
$max_day = date('t',strtotime($date));
$start_week = date('w',strtotime($year.'-'.$month.'-01'));
$total_week = ceil(($max_day+$start_week)/7);

$option='<option value="">선택</option>';

for($i=1;$i<=$total_week;$i++){
    $option.='<option value="'.$i.'">'.$i.'</option>';
}

$arr=array($option);

echo json_encode($arr);
?>
<?php
include '../connect.php';

$type=$_POST['type'];

$name=$_POST['name'];
$cp=$_POST['cp'];

$sql="SELECT * FROM reservation WHERE name_kor='$name' AND cp='$cp' AND stat='$type'";
$res=mysqli_query($conn, $sql);
$txt="";
while($row=mysqli_fetch_array($res)){
    $num=$row['num'];
    $date=$row['date'];
    $res_type=$row['res_type'];
    $hotel=$row['hotel'];
    $airport=$row['airport'];
    $air=explode("/", $airport);
    $bc=$row['basic'];
    $ad=$row['add'];

    $hf=$row['hotel_from'];
    $ha=$row['hotel_arrive'];

    $w="";
    if($res_type=="ah"){
        $text="공항&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
        $tt=$air[0]."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$hotel;
        $w=" WHERE `type`='$airport'";
    } else if($res_type=="hh"){
        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
        $tt=$hf."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$ha;
        $w=" WHERE `type`='hotel'";
    } else if($res_type=="ha"){
        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;공항";
        $tt=$hotel."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$air[0];
        $w=" WHERE `type`='$airport'";
    }

    $aSql="SELECT * FROM rate{$w}";
    $aRes=mysqli_query($conn, $aSql);
    $aRow=mysqli_fetch_array($aRes);
    $basic=$bc * $aRow['basic'];
    $add=$ac * $aRow['add'];

    $total=number_format($basic+$add);

    $txt.='<div class="contents" id="search'.$num.'">';
    $txt.='<div class="input_check">';
    $txt.='<input type="checkbox" id="iChk01" name="num[]" value="'.$num.'">';
    $txt.='<span><img src="../img/check.png"></span>';
    $txt.='</div>';
    $txt.='<p>'.$date.'</p>';
    $txt.='<p>'.$tt.'</p>';
    $txt.='<p>'.$text.'</p>';
    $txt.='<p>'.$total.'원</p>';
    $txt.='<p>결제 대기</p>';
    $txt.='<div class="search_result_btn">';
    $txt.='<a href="estimate.php?num='.$num.'">보기</a>';
    $txt.='<button type="button" onclick="res_del(\''.$num.'\')">삭제</button>';
    $txt.='</div>';
    $txt.='</div>';
}

echo json_encode($txt);
?>
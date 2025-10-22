<?php
include '../connect.php';

$num=$_POST['num'];
$staff=$_POST['staff'];
$file=$_POST['file'];

$dir="../img/baggage/";

$files=array();
$txt="";
$i=1;
foreach($_FILES as $file){
    $FileName = GetUniqFileName($file['name'], $dir); // 같은 화일 이름이 있는지 검사
    if(move_uploaded_file($file['tmp_name'], $dir.$FileName)) { // 화일을 업로드 위치에 저장
        $sql="INSERT INTO baggage SET upload_time=now(), staff='$staff', `number`='$num', `file`='$FileName'";
        $res=mysqli_query($conn, $sql);

        $tmp=$dir.$FileName;
        $files[] = $dir.$FileName;
        $txt.='<div class="contents" id="baggage'.$i.'">';
        $txt.='<div class="delete" onclick="img_del(\'baggage\', \''.$num.'\', \''.$FileName.'\', \''.$i.'\')">';
        $txt.='<span></span>';
        $txt.='<span></span>';
        $txt.='</div>';
        $txt.='<img src="'.$tmp.'">';
        $txt.='</div>';
    } else {
        $error = true;
    }
    $i++;
}

echo json_encode($txt);

function GetUniqFileName($FN, $PN) {
    $FileExt = substr(strrchr($FN, "."), 1); // 확장자 추출
    $FileName = substr($FN, 0, strlen($FN) - strlen($FileExt) - 1); // 화일명 추출
    $FileCnt=0;
    $ret = $FileName.".".$FileExt;

    while(file_exists($PN.$ret)) // 화일명이 중복되지 않을때 까지 반복
    {
    $FileCnt++;
    $ret = $FileName."_".$FileCnt.".".$FileExt; // 화일명뒤에 (_1 ~ n)의 값을 붙여서....
    }
    
    return($ret); // 중복되지 않는 화일명 리턴
}
?>
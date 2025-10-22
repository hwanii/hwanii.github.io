<?php
include '../connect.php';

$company=$_POST['company'];
$name=$_POST['name'];
$email=$_POST['email'];
$area=$_POST['area'];
$hope=$_POST['hope'];
$tel=$_POST['tel'];
$file=$_FILES['file']['name'];

$upload_dir="../img/counsel/";

if($file){ // 업로드할 화일이 있는지 확인
    $FileName = GetUniqFileName($file, $upload_dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file"]['tmp_name'], $upload_dir.$FileName); // 화일을 업로드 위치에 저장
    $f=", `file`='$FileName'";
}

$sql="INSERT INTO counsel SET write_time=now(), write_name='$name', company='$company', email='$email', area='$area', hope='$hope', tel='$tel', stat='대기 중'{$f}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("견적요청이 접수되었습니다.");
        parent.location.href="estimate.php";
    </script>
    <?php
}

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
<?php
include '../connect.php';

$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$title=$_POST['title'];
$contents=addslashes($_POST['contents']);
$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];

$upload_dir="../file/visit/";

if($file1){ // 업로드할 화일이 있는지 확인
    $FileName = GetUniqFileName($file1, $upload_dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file1"]['tmp_name'], $upload_dir.$FileName); // 화일을 업로드 위치에 저장
    $f1=", file1='$FileName'";
}

if($file2){ // 업로드할 화일이 있는지 확인
    $FileName = GetUniqFileName($file2, $upload_dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file2"]['tmp_name'], $upload_dir.$FileName); // 화일을 업로드 위치에 저장
    $f2=", file2='$FileName'";
}

$sql="INSERT INTO visit SET write_time=now(), `name`='$name', pass='$pass', email='$email', title='$title', contents='$contents', stat='미확인'{$f1}{$f2}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("신청이 완료되었습니다.");
        parent.location.href="visit_request.php";
        document.location.href="about:blank";
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
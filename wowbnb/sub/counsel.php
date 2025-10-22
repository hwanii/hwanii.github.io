<?php
include '../connect.php';

$manager=$_POST['manager'];

$fTel=$_POST['fTel'];
$mTel=$_POST['mTel'];
$lTel=$_POST['lTel'];
$tel=$fTel."-".$mTel."-".$lTel;

$email=$_POST['email'];
$addr=$_POST['addr'];

$e=$email."@".$addr;
$company=$_POST['company'];
$title=$_POST['title'];
$contents=addslashes($_POST['contents']);

$file=$_FILES['file']['name'];

$dir="../img/counsel/";

if($file){ // 업로드할 화일이 있는지 확인
    $FileName = GetUniqFileName($file, $dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file"]['tmp_name'], $dir.$FileName); // 화일을 업로드 위치에 저장
    $f=", file='$FileName'";
}

$sql="INSERT INTO counsel SET write_time=now(), manager='$manager', tel='$tel', email='$e', company='$company', title='$title', contents='$contents', stat='대기중'{$f}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수되었습니다.");
        parent.location.href="request.php";
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
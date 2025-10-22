<?php
include '../connect.php';

$company=addslashes($_POST['company']);
$busi_num=$_POST['busi_num'];
$type=$_POST['type'];
$money=$_POST['money'];
$url=$_POST['url'];
$name=$_POST['name'];
$tel=$_POST['tel'];
$agencies=$_POST['agencies'];
$course=$_POST['course'];
$contents=addslashes($_POST['contents']);

$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];

$fDir="../img/counsel/";

if($file1){ // 업로드할 화일이 있는지 확인
    $sFileName = GetUniqFileName($file1, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file1"]['tmp_name'], $fDir.$sFileName); // 화일을 업로드 위치에 저장
    $f1=",file1='$sFileName'";
}

if($file2){ // 업로드할 화일이 있는지 확인
    $sFileName = GetUniqFileName($file2, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file2"]['tmp_name'], $fDir.$sFileName); // 화일을 업로드 위치에 저장
    $f2=",file2='$sFileName'";
}

$sql="INSERT INTO counsel SET write_time=now(), company='$company', busi_num='$busi_num', `type`='$type', `money`='$money', `url`='$url', `name`='$name', tel='$tel', agencies='$agencies', course='$course', contents='$contents', stat='미확인'{$f1}{$f2}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("문의가 접수되었습니다.");
        parent.location.href="inquire.php";
        document.location.href="about:blank";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("<?php echo $sql?>");
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
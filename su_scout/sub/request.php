<?php
include '../connect.php';
session_start();

$code=$_POST['code'];

if($_SESSION['captcha']['code']!=$code){
    ?>
    <script>
        alert("자동등록방지 코드가 일치하지 않습니다.<?php echo $code?>");
    </script>
    <?php
    exit;
}

$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$company=addslashes($_POST['company']);
$gender=$_POST['gender'];
$rank=$_POST['rank']; // 직급
$r="";
for($i=0;$i<count($rank);$i++){
    $r.=($i==0) ? $rank[$i] : ",".$rank[$i];
}

$start_age=$_POST['start_age'];
$age=$_POST['age'];

$a=($age) ? $age : $start_age;

$start_date=$_POST['start_date'];
$date=$_POST['close'];

$c=($date) ? $date : $start_date;

$type=$_POST['type'];
$process=$_POST['process']; // 진행절차
$p="";
for($i=0;$i<count($process);$i++){
    $p.=($i==0) ? $process[$i] : ",".$process[$i];
}

$classa=$_POST['classa']; // 우선순위1
$ca="";
for($i=0;$i<count($classa);$i++){
    $ca.=($i==0) ? $classa[$i] : ",".$classa[$i];
}

$language=$_POST['language']; // 우선순위2
$l="";
for($i=0;$i<count($language);$i++){
    $l.=($i==0) ? $language[$i] : ",".$language[$i];
}

$area=$_POST['area'];
$salary=$_POST['salary'];

$qualification=addslashes($_POST['qualification']);
$work=addslashes($_POST['work']);
$more=addslashes($_POST['more']);

$file1=$_FILES['file1']['name'];
$file2=$_FILES['file2']['name'];

$upload_dir="../img/request/{$name}/";

if(!is_dir($upload_dir)){
    mkdir($upload_dir, 0777);
}

if($file1){ // 업로드할 화일이 있는지 확인
    $FileName = GetUniqFileName($file1, $upload_dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file1"]['tmp_name'], $upload_dir.$FileName); // 화일을 업로드 위치에 저장
    $f1=",file1='$FileName'";
}

if($file2){ // 업로드할 화일이 있는지 확인
    $sFileName = GetUniqFileName($file2, $upload_dir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["file2"]['tmp_name'], $upload_dir.$sFileName); // 화일을 업로드 위치에 저장
    $f2=",file2='$sFileName'";
}

$sql="INSERT INTO request SET write_date=now(), `name`='$name', tel='$tel', email='$email', company='$company', 
gender='$gender', rank='$r', age='$a', cDate='$c', `type`='$type', process='$p',
classa='$ca', `language`='$l', salary='$salary', area='$area', qualification='$qualification',
work='$work', more='$more', stat='채용 미등록', list_stat='미등록'{$f1}{$f2}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("의뢰서 작성이 완료되었습니다.");
        parent.location.href="client.php";
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
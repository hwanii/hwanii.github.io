<?php
include '../connect.php';
@session_start();

$code=$_POST['code'];

if($_SESSION['captcha']['code']!=$code){
    ?>
    <script>
        alert("자동등록방지 코드가 일치하지 않습니다.");
    </script>
    <?php
    exit;
}

$request_company=$_POST['request_company'];

$id=$_POST['id'];
$pass=$_POST['password'];

$name=$_POST['name'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$area=$_POST['area'];

$mSql="SELECT * FROM member WHERE id='$id'";
$mRes=mysqli_query($conn, $mSql);
$mRows=mysqli_num_rows($mRes);

if($mRows==0){
    $iSql="INSERT INTO member SET id='$id', pass='$pass', `name`='$name', tel='$tel', birthday='$birthday', gender='$gender', addr='$area', join_time=now()";
    $iRes=mysqli_query($conn, $iSql);
} else {
    $iSql="UPDATE member SET birthday='$birthday', gender='$gender', addr='$area' WHERE id='$id'";
    $iRes=mysqli_query($conn, $iSql);
}

$job=$_POST['job']; // for
$work=$_POST['work']; // for

$jCount=count($job);
$j="";
for($o=0;$o<$jCount;$o++){
    if($o==0){
        $j.=$job[$o];
    } else {
        $j.="||".$job[$o];
    }
}

$wCount=count($work);
$w="";
for($k=0;$k<$jCount;$k++){
    if($k==0){
        $w.=$work[$k];
    } else {
        $w.="||".$work[$k];
    }
}

$school=$_POST['school']; //for
$sType=$_POST['sType']; //for
$depart=$_POST['depart']; //for
$graduate=$_POST['graduate']; //for
$company=$_POST['company']; //for
$position=$_POST['position']; //for
$field=$_POST['field']; //for
$stat=$_POST['stat']; //for

$sCount=count($school);
$gs="";
$gt="";
$gd="";
$gg="";
for($i=0;$i<$sCount;$i++){
    if($i==0){
        $gs.=$school[$i];
        $gt.=$sType[$i];
        $gd.=$depart[$i];
        $gg.=$graduate[$i];
    } else {
        $gs.="||".$school[$i];
        $gt.="||".$sType[$i];
        $gd.="||".$depart[$i];
        $gg.="||".$graduate[$i];
    }
}

$cCount=count($company);
$cc="";
$cp="";
$cf="";
$cs="";
for($z=0;$z<$cCount;$z++){
    if($z==0){
        $cc.= $company[$z];
        $cp.= $position[$z];
        $cf.= $field[$z];
        $cs.= $stat[$z];
    } else {
        $cc.= "||".$company[$z];
        $cp.= "||".$position[$z];
        $cf.= "||".$field[$z];
        $cs.= "||".$stat[$z];
    }
}

$career=$_POST['career'];
$salary=$_POST['salary'];
$lan=$_POST['lan'];
$contents=addslashes($_POST['contents']);
$certificate=addslashes($_POST['certificate']);
$photo=$_FILES['photo']['name']; //file
$resume=$_FILES['resume']['name']; //file
$description1=$_FILES['description1']['name']; //file
$description2=$_FILES['description2']['name']; //file

$fDir="../img/resume/{$name}/";

if(!is_dir($fDir)){
    mkdir($fDir, 0777);
}

if($photo){ // 업로드할 화일이 있는지 확인
    $pFileName = GetUniqFileName($photo, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["photo"]['tmp_name'], $fDir.$pFileName); // 화일을 업로드 위치에 저장
    $p=", photo='$pFileName'";
}

if($resume){ // 업로드할 화일이 있는지 확인
    $rFileName = GetUniqFileName($resume, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["resume"]['tmp_name'], $fDir.$rFileName); // 화일을 업로드 위치에 저장
    $r=", resume='$rFileName'";
}

if($description1){ // 업로드할 화일이 있는지 확인
    $dFileName1 = GetUniqFileName($description1, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["description1"]['tmp_name'], $fDir.$dFileName1); // 화일을 업로드 위치에 저장
    $d1=", description1='$dFileName1'";
}

if($description2){ // 업로드할 화일이 있는지 확인
    $dFileName2 = GetUniqFileName($description2, $fDir); // 같은 화일 이름이 있는지 검사
    move_uploaded_file($_FILES["description2"]['tmp_name'], $fDir.$dFileName2); // 화일을 업로드 위치에 저장
    $d2=", description2='$dFileName2'";
}

$sql="INSERT INTO `resume` SET write_date=now(), id='$id', request_company='$request_company', `name`='$name', birthday='$birthday', gender='$gender', tel='$tel', area='$area', job='$j', work='$w', school='$gs', sType='$gt', depart='$gd', graduate='$gg', company='$cc', position='$cp', field='$cf', stat='$cs', career='$career', salary='$salary', lan='$lan', contents='$contents', `certificate`='$certificate'{$p}{$r}{$d1}{$d2}";
$res=mysqli_query($conn, $sql);

if($res){
    ?>
    <script>
        alert("등록이 완료되었습니다.");
        parent.location.href="candidate_information.php";
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
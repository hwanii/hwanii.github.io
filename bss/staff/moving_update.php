<?php
include '../connect.php';

$num=$_POST['num'];
$staff=$_POST['staff'];
$file=$_POST['file'];

$dir="../img/moving/";

$files=array();
$txt="";
$i=1;
foreach($_FILES as $file){
    $FileName = GetUniqFileName($file['name'], $dir); // 같은 화일 이름이 있는지 검사
    if(move_uploaded_file($file['tmp_name'], $dir.$FileName)) { // 화일을 업로드 위치에 저장
        $sql="INSERT INTO moving SET upload_time=now(), staff='$staff', `number`='$num', `file`='$FileName'";
        $res=mysqli_query($conn, $sql);

        $tmp=$dir.$FileName;
        $files[] = $dir.$FileName;
        $txt.='<div class="contents" id="moving'.$i.'">';
        $txt.='<div class="delete" onclick="img_del(\'moving\', \''.$num.'\', \''.$FileName.'\', \''.$i.'\')">';
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

$uSql="UPDATE reservation SET stat='proceeding' WHERE num='$num'";
$uRes=mysqli_query($conn, $uSql);

$tSql="SELECT * FROM reservation WHERE num='$num'";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);

//고객에게 알림톡 전송 S 
$templatecode = "bizp_2023112210040610828234653";
$phoneNumber = $tRow['cp'];
$content ="고객님의 수하물".PHP_EOL;
$content.="수거 완료하였습니다.".PHP_EOL;
$content.="수거사진 등록되었으니".PHP_EOL;
$content.="확인 부탁드립니다.".PHP_EOL.PHP_EOL;
$content.="문의사항은 카카오채널로".PHP_EOL;
$content.="부탁드립니다".PHP_EOL;
$token = getKakaoJWTToken();
	
$url = "https://api.bizppurio.com/v3/message";
$header = array(
	"Content-Type: application/json",
	'Authorization: Bearer ' . $token,
);

$template = array(
	"account" => "cowboy99",  				//계정아이디
	"refkey" => $phoneNumber . '_' . time(),	//보내는발신키(서버에서보내는키맵핑시키는역활이라 비즈뿌리오에서제공하는게아님)
	"type" => "at",								//at : 알림톡
	'from' => '01057138945',					//발신번호
	'to' => $phoneNumber,						//수신번호
	'content' => array(
		'at' => array(
			'message' => $content,
			'senderkey' => '11a2c369f7cb96ed4605f90335f93c7025fcf1a1',
			'templatecode' => $templatecode,
			'button' => array(
				array(
				'name' => '수거 사진 확인',
				"type" => "WL",
				"url_pc" => "http://www.bss8282.com/sub/process.php",
				"url_mobile" => "http://www.bss8282.com/sub/process.php"
				)
			)
		)
	)
);
$response = curl($url, json_encode($template), $header);
//고객에게 알림톡 전송 E

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
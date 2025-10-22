<?php
include '../connect.php';

$num=$_POST['num'];
$payment=$_POST['payment'];

$sql="UPDATE reservation SET payment='$payment' WHERE num='$num'";
$res=mysqli_query($conn, $sql);



//고객에게 알림톡 전송 S
$sql1="SELECT * FROM reservation WHERE num='$num'";
$res1=mysqli_query($conn, $sql1);
$row1=mysqli_fetch_array($res1);

$templatecode = "bizp_2023111411400918915010594";
$phoneNumber = $row1['cp'];
$content =$row1['name_kor']."고객님".PHP_EOL;
$content.="예약접수가 완료되었습니다.".PHP_EOL;
$content.="배송비 입금주시면 ".PHP_EOL;
$content.="예약이 완료됩니다.".PHP_EOL.PHP_EOL;
$content.="하나은행 121-910593-01107".PHP_EOL; 
$content.="임수연(수하물배송대행bss)".PHP_EOL;
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
		)
	)
);
$response = curl($url, json_encode($template), $header);
//고객에게 알림톡 전송 E


//관리자에게 알림톡 전송 S 
$templatecode = "bizp_2023111411425718915978085";
$phoneNumber = '01057138945';
$content ="Customer completed".PHP_EOL;
$content.="the registration".PHP_EOL;
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
		)
	)
);
$response = curl($url, json_encode($template), $header);
//관리자에게 알림톡 전송 E

if($res){
    ?>
    <script>
        location.href="search.php";
    </script>
    <?php
}
?>
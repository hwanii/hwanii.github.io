<?php
include '../connect.php';

$num=$_GET['num'];

$sql="UPDATE reservation SET stat='cancellation request' WHERE num='$num'";
$res=mysqli_query($conn, $sql);

if($res){
	

	$tSql="SELECT * FROM reservation WHERE num='$num'";
	$tRes=mysqli_query($conn, $tSql);
	$tRow=mysqli_fetch_array($tRes);

	//고객에게 알림톡 전송 S 
	$templatecode = "bizp_2023112110440794618066483";
	$phoneNumber = $tRow['cp'];
	$content ="환불취소를 원하시는경우".PHP_EOL;
	$content.="아래 양식에 작성후".PHP_EOL;
	$content.="본 채팅창으로 전송해주세요.".PHP_EOL.PHP_EOL;
	$content.="- BSS 예약일자 :".PHP_EOL;
	$content.="- BSS 예약자명".PHP_EOL;
	$content.="(입금자,예약자가 다른경우 둘다작성):".PHP_EOL;
	$content.="- BSS 입금액 :".PHP_EOL;
	$content.="- 환불계좌 및 예금주:".PHP_EOL.PHP_EOL;
	$content.="전일까지 환불100%".PHP_EOL;
	$content.="이용당일 환불불가.(당일입금분포함)".PHP_EOL;
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
				'templatecode' => $templatecode
			)
		)
	);
	$response = curl($url, json_encode($template), $header);
	//고객에게 알림톡 전송 E

    ?>
    <script>
        location.href="process.php";
    </script>
    <?php
}
?>
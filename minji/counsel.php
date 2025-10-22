<?php
include 'connect.php';

$name=$_POST['name'];
$tel=$_POST['tel'];

$sql="INSERT INTO counsel SET write_time=now(), `write_name`='$name', tel='$tel', stat='미확인'";
$res=mysqli_query($conn, $sql);

if($res){
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // //Load Composer's autoloader
    // require './PHPMailer/src/Exception.php';
    // require './PHPMailer/src/PHPMailer.php';
    // require './PHPMailer/src/SMTP.php';

    // //Create an instance; passing `true` enables exceptions
    // $mail = new PHPMailer(true);
    // //$mail->SMTPDebug  = 2;  //디버깅시 필요
    // $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
    // $mail->SMTPAuth    = true;
    // $mail->SMTPSecure  = 'ssl';
    // $mail->Host        = 'smtp.gmail.com';
    // $mail->Port        = 465;
    // $mail->Mailer        = 'smtp';
    // $mail->Username    = 'mywebcentermaster@gmail.com';
    // $mail->Password    = 'qlosixbqzgpfklbj';
    // $mail->addAddress('yenbrn02@naver.com', '캐스터 김민지'); // 수신자
    // $mail->setFrom('mywebcentermaster@gmail.com', '(주)하이클라스'); // 발신자
    // $mail->isHTML(true);
    // $mail->Subject     = '상담 신청이 접수되었습니다.';
    // $mail->Body        = '상담 신청이 접수되었습니다.<br>
    // 관리자에서 확인해주세요.';
    // $mail->send();
    ?>
    <script>
        alert("상담이 접수 되었습니다.");
        parent.location.href="index.php";
        document.location.href="about:blank";
    </script>
    <?php
}
?>
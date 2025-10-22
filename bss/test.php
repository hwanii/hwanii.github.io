<?php
error_reporting(0);
ini_set('memory_limit', -1);

include 'connect.php';

// PhpSpreadsheet 설정
require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// 업로드된 파일을 변수에 저장
$server_inputFileName=$_FILES['excel_upload']['tmp_name']; // tmp 파일

// PC 파일명 및 확장자 알아내기
$pc_FileName = $_FILES['excel_upload']['name'];
$file_type= pathinfo($pc_FileName, PATHINFO_EXTENSION);

// reader 설정
if ($file_type =='xls') {
	$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
} elseif ($file_type =='xlsx') {
	$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
} else {
	echo 'xls 또는 xlsx 파일로 저장 후 다시 시도해주세요.';
	exit;
}

// echo $pc_FileName;
// PhpSpreadsheet로 읽어서 배열에 저장하기
$spreadsheet = $reader->load($server_inputFileName);
$spreadData = $spreadsheet-> getActiveSheet()->toArray();

// 테이블로 출력하기
$rows=count($spreadData);
$cols=(count($spreadData,1)/count($spreadData))-1;

$sql="INSERT INTO `hotel`(`region`, `eng`, `addr`, `map`) VALUES";

$no=0;

for ($i=2;$i<$rows;$i++) {
    $sql.=($i==2) ? "(" : ", (";

    for ($j=0;$j<($cols);$j++) {
        $sql.= ($j==0) ? "'".$spreadData[$i][$j]."'" : ", '".$spreadData[$i][$j]."'";
    }
    $sql.=")";
}
$res=mysqli_query($conn, $sql);
// for ($i=2;$i<$rows;$i++) {
//     for ($j=0;$j<$cols;$j++) {
//         echo $data=($spreadData[$i][$j]) ? $spreadData[$i][$j]." " : "-";
//     }
//     echo "<br>";
// }

echo $sql;

?>
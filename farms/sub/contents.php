<?php
include '../connect.php';

$num=$_POST['num'];

$name=$_POST['name'];

$title=$_POST['title'];
$contents=$_POST['contents'];
$pass=$_POST['pass'];

if(empty($title)){
    ?>
    <script>
        alert("제목을 입력해주세요.");
        document.location.href="about:blank";
    </script>
    <?php
} else {
    $file=$_FILES['file']['name'];
    $sFile=$_POST['sFile'];

    $upload_dir="../img/file/board/";

    if($file){ // 업로드할 화일이 있는지 확인
        $FileName = GetUniqFileName($file, $upload_dir); // 같은 화일 이름이 있는지 검사
        move_uploaded_file($_FILES["file"]['tmp_name'], $upload_dir.$FileName); // 화일을 업로드 위치에 저장
        $t=",file_1='$FileName'";
        if($sFile!="" && $sFile!=$FileName){
            unlink($upload_dir.$sFile);
        }
    }

    if($num){
        $uSql="UPDATE bo_board SET write_name='$name', title='$title', contents='$contents', file_2='$pass'{$t} WHERE num='$num'";
    } else {
        $uSql="INSERT INTO bo_board SET write_time=now(), write_name='$name', title='$title', contents='$contents', file_2='$pass'{$t}";
    }
    $uRes=mysqli_query($conn, $uSql);

    if($uRes){
        ?>
        <script>
            alert("저장되었습니다.");
            parent.location.href="board.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("오류가 발생하였습니다.");
        </script>
        <?php
    }
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
<?php
include '../connect.php';

$page=$_POST['page'];

$list = 9; // 페이지 당 목록 개수
$b_pageNum_list = 5; // 페이지 당 블록 갯수
$block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

$b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
$b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호

$pSql="SELECT COUNT(*) AS cnt FROM counsel";
$pRes=mysqli_query($conn, $pSql);
$pRow=mysqli_fetch_array($pRes);
$total_count=$pRow['cnt'];

$total_page = ceil($total_count / $list); // 총 페이지 수 
if($b_end_page > $total_page) $b_end_page = $total_page;

$limit=($page - 1) * $list; // 출력 시작 번호
$no=$total_count-$limit;

$txt="<ul>";
$sql="SELECT * FROM counsel ORDER BY num DESC LIMIT $limit, $list";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $title=$row['title'];
    $answer=$row['answer'];
    $num=$row['num'];

    $txt.='<li  onclick="location.href=\'inquiry_detail.php?num='.$num.'\'"><img src="../img/lock.png" alt="">'.$title.'</li>';

    if($answer){
        $txt.='<li  onclick="location.href=\'inquiry_detail.php?num='.$num.'\'"><img src="../img/re-arrow.png" alt=""><img src="../img/lock.png" alt="">답변입니다.</li>';
    }
}
$txt.="</ul>";
$txt.='<div class="list_page">';
if($block <=1){
    $txt.='<a href="javascript:void(0)">&#60;&#60;</a>';
    $txt.='<a href="javascript:void(0)">&#60;</a>';
} else {
    $txt.='<a href="javascript:page(\'1\')">&#60;&#60;</a>';
    $txt.='<a href="javascript:page(\''.($b_start_page - 1).'\')">&#60;</a>';
}
$txt.='<div class="num">';

for($i=$b_start_page;$i<=$b_end_page;$i++){
    if($page == $i){ // page 와 i 가 같으면 현재 페이지
        $txt.='<a href="javascript:void(0)" class="on">'.$i.'</a>';
    } else {
        $txt.='<a href="javascript:page(\''.$i.'\')">'.$i.'</a>';
    }
}
$txt.='</div>';

$total_block = ceil($total_page/$b_pageNum_list);
if($block >= $total_block){
    $txt.='<a href="javascript:void(0)">&#62;</a>';
    $txt.='<a href="javascript:void(0)">&#62;&#62;</a>';
} else {
    $txt.='<a href="javascript:page(\''.($b_end_page + 1).'\')">&#62;</a>';
    $txt.='<a href="javascript:page(\''.$total_page.'\')">&#62;&#62;</a>';
}
$txt.='</div>';

$ary=array($txt, $page);

echo json_encode($ary);
?>
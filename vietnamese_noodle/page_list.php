<?php
include 'connect.php';

$stat=$_POST['stat'];
$area=$_POST['area'];

$page=($_POST['page']) ? $_POST['page'] : 1; // 페이지 번호
$list = 2; // 페이지 당 목록 개수
$b_pageNum_list = 2; // 페이지 당 블록 갯수
$block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

$b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
$b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호

$pSql="SELECT COUNT(*) AS cnt FROM franchise WHERE area='$area' AND  stat='$stat'";
$pRes=mysqli_query($conn, $pSql);
$pRow=mysqli_fetch_array($pRes);
$total_count=$pRow['cnt'];

$total_page = ceil($total_count / $list); // 총 페이지 수 
if($b_end_page > $total_page) $b_end_page = $total_page;

$limit=($page - 1) * $list; // 출력 시작 번호

$sql="SELECT * FROM franchise WHERE area='$area' AND  stat='$stat' ORDER BY num ASC LIMIT 10";
$res=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($res)){
    $title=$row['title'];
    $addr=$row['addr'];
?>
<div class="content">
<div class="txt_box">
<h2>쌀국수공방 <?php echo $row['title']?></h2>
<p><?php echo $row['addr']?></p>
</div>
</div>
<?php } ?>
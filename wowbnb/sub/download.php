<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub03">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>CUSTOMER SERVICE</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;CUSTOMER SERVICE&nbsp;&nbsp;>&nbsp;&nbsp;DOWNLOAD</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li><a href="../sub/notice.php">공지사항</a></li>
            <li><a href="../sub/request.php">문의하기</a></li>
            <li class="on"><a href="../sub/download.php">자료실</a></li>
        </ul>
    </div>
    <section class="notice">
        <div class="inner">
            <div class="title-txt">
                <h2>자료실</h2>
                <p>WOWBNB 자료실입니다.</p>
            </div>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="search-box">
                <select name="stat">
                    <option value="t">제 목</option>
                    <option value="c">내 용</option>
                    <option value="tc">제목 + 내용</option>
                </select>
                <input name="search" required>
                <button>검색</button>
            </div>
            </form>
            <ul class="board-title">
                <li>번호</li>
                <li>제목</li>
                <div>
                    <li>작성자</li>
                    <li>작성일</li>
                    <li>조회</li>
                </div>
            </ul>
            <?php
            $stat=$_GET['stat'];
            $search=$_GET['search'];

            if($stat=="t"){
                $s=" WHERE title LIKE '%$search%'";
            } else if($stat=="c"){
                $s=" WHERE contents LIKE '%$search%'";
            } else if($stat=="tc"){
                $s=" WHERE (title LIKE '%$search%' OR contents LIKE '%$search%')";
            }

            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 10; // 페이지 당 목록 개수
            $b_pageNum_list = 5; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
            
            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
            
            $pSql="SELECT COUNT(*) AS cnt FROM bo_data{$s}";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];
            
            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;
            
            $limit=($page - 1) * $list; // 출력 시작 번호

            $no=$total_count-$limit;

            $today=strtotime("now");
            $sql="SELECT * FROM bo_data{$s} ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $write_time=$row['write_time'];
                $hot= floor(($today - strtotime($write_time)) / 86400);
                $hit=$row['hit'];
                $file=$row['file_1'];
                $num=$row['num'];
            ?>
            <a href="download_detail.php?num=<?php echo $num?>" class="board-content board-content-top">
                <p><?php echo $no--; ?></p>
                <p><?php echo $title?><img src="../img/hot.gif" alt="" style="<?php echo ($hot>3) ? "display:none" : ""?>"><img src="../img/file.gif" alt="" style="<?php echo (empty($file)) ? "display:none" : ""?>"></p>
                <div>
                    <p>관리자</p>
                    <p><?php echo date("Y-m-d", strtotime($write_time))?></p>
                    <p><?php echo number_format($hit)?></p>
                </div>
            </a>
            <?php } ?>
            <a href="download.php" class="go-list">리스트</a>
            <div class="page-ch">
                <div class="prev">
                    <?php
                    if($page > 1){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>"><img src="../img/pagination-backward.png" alt=""></a>
                    <?php } 
                    if($block > 1){ ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/pagination-prev.png" alt=""></a>
                    <?php } ?>
                </div>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                        <?php
                        } else {
                        ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>">2</a>
                        <?php
                        }
                    }
                    ?>
                </div>
                <div class="next">
                    <?php
                    $total_block = ceil($total_page/$b_pageNum_list);
                    if($block < $total_block){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/pagination-prev.png" alt=""></a>
                    <?php } 
                    if($page < $total_page){
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page?>"><img src="../img/pagination-backward.png" alt=""></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

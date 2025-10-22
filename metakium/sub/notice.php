<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <div class="click-menu">
        <a class="on" href="../sub/notice.php">공지사항</a>
        <a href="../sub/faq.php">FAQ</a>
        <a href="../sub/portfolio.php">PORTFOLIO</a>
    </div>
    <section class="board">
        <h2>최신 소식을 알려드립니다.</h2>
        <div class="inner">
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
            <div class="search">
                <input type="text" name="search" value="<?php echo ($_GET['search']) ? $_GET['search'] : ""?>" placeholder="검색하고 싶은 단어를 입력하세요" required>
                <button>검색</button>
            </div>
            </form>
            <div class="line"></div>
            <?php 
            $search=$_GET['search'];

            $se="";
            if($search){
                $s=" WHERE title LIKE '%$search%' OR contents LIKE '%$search%'";
                $se="&search=".$search;
            }

            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 10; // 페이지 당 목록 개수
            $b_pageNum_list = 5; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
            
            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
            
            $pSql="SELECT COUNT(*) AS cnt FROM bo_notice{$s}";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];
            
            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;
            
            $limit=($page - 1) * $list; // 출력 시작 번호

            $no=$total_count - $limit;

            $sql="SELECT * FROM bo_notice{$s} ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $file=$row['file_1'];
                $time=$row['write_time'];
                $num=$row['num'];
            ?>
            <a href="notice_detail.php?num=<?php echo $num?><?php echo $se?>" class="board-con on">
                <p class="type">공지</p>
                <p class="title">[필독] <?php echo $title?></p>
                <img src="../img/b-down.png" alt="" style="<?php echo (empty($file)) ? "visibility:hidden" : ""?>">
                <p class="name">최고관리자</p>
                <p class="date"><?php echo date("Y-m-d", strtotime($time))?></p>
            </a>
            <?php } ?>
            <!-- <a href="../sub/notice_detail.php" class="board-con on">
                <p class="type">공지</p>
                <p class="title">[필독] 메타키움 홈페이지 공지사항 제목 노출 영역 여기에</p>
                <img onclick="window.open('')" src="../img/b-down.png" alt="">
                <p class="name">최고관리자</p>
                <p class="date">2023-01-05</p>
            </a> -->
            <div class="line01"></div>
        </div>
    </section>

    <div class="list-page">
        <?php if($block < 1){ ?>
        <div class="prev">
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?><?php echo $se?>">
                <span></span>
                <span></span>
            </a>
        </div>
        <?php } ?>
        <div class="num">
            <?php
            for($i=$b_start_page;$i<=$b_end_page;$i++){
                if($page == $i){ // page 와 i 가 같으면 현재 페이지
                ?>
                <div class="on"><a href="javasciprt:void(0)"><?php echo $i?></a></div>
                <?php
                } else {
                ?>
                <div><a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?><?php echo $se?>"><?php echo $i?></a></div>
                <?php
                }
            }
            ?>
        </div>
        <?php
        $total_block = ceil($total_page/$b_pageNum_list);
        if($block < $total_block){
        ?>
        <div class="next">
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?><?php echo $se?>">
                <span></span>
                <span></span>
            </a>
        </div>
        <?php } ?>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

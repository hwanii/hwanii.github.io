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
        <a href="../sub/notice.php">공지사항</a>
        <a class="on" href="../sub/faq.php">FAQ</a>
        <a href="../sub/portfolio.php">PORTFOLIO</a>
    </div>
    <section class="board">
        <h2>메타키움의 FAQ 입니다.</h2>
        <div class="inner">
            <!-- <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
            <div class="search">
                <input type="text" name="search" placeholder="검색하고 싶은 단어를 입력하세요" required>
                <button>검색</button>
            </div>
            </form>
            <div class="line"></div> -->
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
            
            $pSql="SELECT COUNT(*) AS cnt FROM bo_faq{$s}";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];
            
            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;
            
            $limit=($page - 1) * $list; // 출력 시작 번호

            $no=$total_count - $limit;

            $sql="SELECT * FROM bo_faq{$s} ORDER BY num DESC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $contents=$row['contents'];
                $time=$row['write_time'];
                $write=$row['write_name'];
                $num=$row['num'];
            ?>

            <div class="faq-board">
                <ul>
                    <li>
                        <div>
                            <img src="../img/q.png" alt="">
                            <p><?php echo $title?></p>
                        </div>
                        <span></span>
                    </li>
                    <li>
                        <div>
                            <img src="../img/a.png" alt="">
                            <p><?php echo $contents?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <?php } ?>
            <!-- <a href="faq_detail.php?num=<?php echo $num?><?php echo $se?>" class="board-con on">
                <p class="type">일반</p>
                <p class="title"><?php echo $title?></p>
                <p class="name"><?php echo $write?></p>
                <p class="date"><?php echo date("Y-m-d", strtotime($time))?></p>
            </a> -->

            <!-- <div class="line01"></div> -->
        </div>
    </section>

    
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

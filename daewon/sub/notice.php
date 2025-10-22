<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner05">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option selected value="../sub/notice.php">공지사항</option>
                <option value="../sub/estimate.php">견적요청</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>커뮤니티</li>
                <li>공지사항</li>
            </ul>
        </div>
    </section>
    <section class="board">
        <div class="sub_title">
            <h2 class="notice_h2">공지사항</h2>
        </div>
        <div class="inner">
            <div class="search">
                <form method="POST" action="/im/sub/notice.php">
                <input type="text" name="search" placeholder="검색하고 싶은 단어를 입력하세요" required>
                <button>검색</button>
                </form>
            </div>
            <div class="line"></div>
            <!-- <a href="../sub/notice_detail.php" class="board-con on">
                <p class="type">공지</p>
                <p class="title">[필독] 대원로지스틱스 공지사항 제목 나오는 곳</p>
                <img src="../img/b-down.png" alt="">
                <p class="name">관리자</p>
                <p class="date">2023-01-16</p>
            </a> -->
            <?php
            $search=$_GET['search'];

            $se="";
            if($search){
                $s=" WHERE title LIKE '%$search%' OR contents LIKE '%$search%'";
                $se="&search=".$search;
            }

            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 10; // 페이지 당 목록 개수
            $b_pageNum_list = 10; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
            
            $pSql="SELECT COUNT(*) AS cnt FROM `bo_notice` {$s}";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];

            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;

            $limit=($page - 1) * $list; // 출력 시작 번호
            $no=$total_count-$limit;
                //$limit+1;
            $lSql="SELECT * FROM bo_notice {$s} ORDER BY num DESC LIMIT $limit, $list";
            $lRes=mysqli_query($conn, $lSql);
            while($lRow=mysqli_fetch_array($lRes)){
                $title=$lRow['title'];
                $file=$lRow['file_1'];
                $time=$lRow['write_time'];
                $num=$lRow['num'];
            ?>
            <a href="../sub/notice_detail.php?num=<?php echo $num?><?php echo $se?>" class="board-con">
                <p class="type">일반</p>
                <p class="title"><?php echo $title?></p>
                <img src="../img/g-down.png" style="<?php echo ($file) ? "display:block" : "display:none"?>" alt="">
                <p class="name">관리자</p>
                <p class="date"><?php echo date("Y-m-d", strtotime($time))?></p>
            </a>
            <?php } ?>
            <div class="line01"></div>
        </div>
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
    </section>
    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

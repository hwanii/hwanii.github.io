<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub05">
        <h2>NOTICE</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/notice.php" class="">NOTICE</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/client.php" class="">FOR CLIENTS</a></li>
                            <li><a href="../sub/candidate_information.php" class="">FOR CANDIDATES</a></li>
                            <li><a href="../sub/consultant.php" class="">CONSULTANTS</a></li>
                            <li><a href="../sub/company.php" class="">COMPANY</a></li>
                            <li><a href="../sub/notice.php" class="">NOTICE</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="select">
                <dl>
                    <dt><a href="../sub/faq.php" class="">FAQ</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/notice.php" class="">공지사항</a></li>
                            <li><a href="../sub/faq.php" class="">FAQ</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="faq">
        <div class="title-sub">
            <h2>FAQ</h2>
            <p>빠른 질문 답변을 확인하세요</p>
        </div>
        <div class="inner">
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
            <div class="search">
                <input type="text" name="search" value="<?php echo $_GET['search']?>" placeholder="검색하고 싶은 단어를 입력하세요">
                <button>검색</button>
            </div>
            </form>
            <div class="line"></div>
            <?php
            $search=$_GET['search'];
            $s=($search) ? " WHERE title LIKE '%$search%' OR contents LIKE '%$search%'" : "";

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

            $sql="SELECT * FROM bo_faq{$s} ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $time=$row['write_time'];
                $file=$row['file_1'];
                $num=$row['num'];
            ?>
            <a href="../sub/faq_detail.php?num=<?php echo $num?>" class="board-con">
                <p class="title"><?php echo $title?></p>
                <img src="../img/document.png" alt="" style="<?php echo (empty($file)) ? "visibility:hidden" : ""?>">
                <p class="name">최고관리자</p>
                <p class="date"><?php echo date("Y-m-d", strtotime($time))?></p>
            </a>
            <?php } ?>
            <div class="line01"></div>
        </div>
        <div class="list-page">
            <?php
            if($block > 1){
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1?>" class="prev"><img src="../img/list-arrow.png" alt=""></a>
            <?php
            }
            ?>
            <div class="num">
                <?php
                for($i=$b_start_page;$i<=$b_end_page;$i++){
                    if($page == $i){ // page 와 i 가 같으면 현재 페이지
                    ?>
                    <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                    <?php
                    } else {
                    ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a>
                    <?php
                    }
                }
                ?>
            </div>
            <?php
            if($block < $total_block){
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>" class="next"><img src="../img/list-arrow.png" alt=""></a>
            <?php
            }
            ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

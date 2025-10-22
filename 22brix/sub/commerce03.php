<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="performance">
        <div class="inner">
            <div class="title">
                <ul class="performance_cate">
                    <li><a href="../sub/performance03.php">퍼포먼스</a></li>
                    <li><a href="../sub/commerce02.php">교육 및 컨설팅</a></li>
                    <li class="on"><a href="../sub/commerce03.php">라이브 커머스</a></li>
                </ul>
            </div>
            <div class="sub_title">
                <h2>라이브 커머스 사례</h2>
            </div>
            <div class="commerce_gallery">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 3; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호

                $pSql="SELECT COUNT(*) AS cnt FROM live";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];

                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;

                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM live ORDER BY num ASC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $contents=$row['contents'];
                    $thumb=$row['thumbnail'];
                    $num=$row['num'];
                ?>
                <a href="commerce_detail.php?num=<?php echo $num?>">
                    <div class="img_box">
                        <img src="../img/live/<?php echo $thumb?>" alt="" style="height:540px;">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <h2><?php echo $title?></h2>
                    <span style="line-height: 1.2;max-height: 5em;overflow: hidden;isplay: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;">
                        <?php echo strip_tags($contents, '<p>');?>
                    </span>
                </a>
                <?php } ?>
                <!-- <a href="">
                    <div class="img_box">
                        <img src="../img/commerce-gallery01.png" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <h2>쇼핑 라이브 대행 성공사례 제목</h2>
                    <span>
                        쇼핑라이브 카테고리 정보 노출<br>
                        쇼핑라이브 성과 내용들까지 넣고 싶은<br>
                        내용은 여기에 중앙정렬로 쭉 나열합니다.<br>
                        최대 5줄 까지만 지원하고<br>
                        글쓰기 중앙정렬, 엔터를 해야 합니다. 
                    </span>
                </a> -->
            </div>
            <div class="page_list">
                <?php
                if($block <=1){
                ?>
                <a href="javascript:void(0)" style="visibility:hidden"><img src="../img/left-arrow.png" alt=""></a>
                <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/left-arrow.png" alt=""></a>
                <?php
                }
                ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                    ?>
                    <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                    <?php } else { ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a>
                    <?php } 
                    } ?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block >= $total_block){
                    ?>
                    <a href="javascript:void(0)" style="visibility:hidden"><img src="../img/right-arrow.png" alt=""></a>
                    <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/right-arrow.png" alt=""></a>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

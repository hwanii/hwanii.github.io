<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    $header="facility";
    include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <img src="../img/banner-logo.png" alt="">
            <h2>당신이 먹기에, 더 안전하게</h2>
            <p>건강한 최상의 재료에서, 최고의 결과를 만들기 위해<br>옥잠화영농조합법인은 작은 수고도 마다하지 않겠습니다.</p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;시설 설비&nbsp;&nbsp;&#62;&nbsp;&nbsp;시설안내</p>
        </div>
    </section>
    <section class="plant sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>시설 설비</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/plant.php" class="on">시설안내</a>
                <a href="../sub/facility.php">설비안내</a>
            </div>
            <a href="<?php echo $store?>" target="_blank" class="store flex_menu">
                <p>스토어 바로가기</p>
                <img src="../img/icon-shop.png" alt="스토어 바로가기">
            </a>
            <a href="../sub/estimate.php" class="ques flex_menu">
                <p>견적 문의</p>
                <img src="../img/icon-q.png" alt="견적 문의 바로가기">
            </a>
        </div>
        <div class="inner950">
            <h2>시설안내</h2>
            <div class="plant_contents">
                <!-- contents 최대 9개에용 -->
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 9; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM plant";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM plant ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="plant_detail.php?num=<?php echo $num?>" class="contents">
                    <img src="../img/plant/<?php echo $thumb?>" alt="">
                    <p><?php echo $title?></p>
                </a>
                <?php } ?>
            </div>
            <div class="list_page">
                <?php
                if($block > 1){
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=1"><img src="../img/page-arrow02.png" alt=""></a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/page-arrow01.png" alt=""></a>
                <?php } ?>
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
                if($block < $total_block){
                ?>
                <a class="next" href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/page-arrow01.png" alt=""></a>
                <a class="nnext" href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page?>"><img src="../img/page-arrow02.png" alt=""></a>
                <?php } ?>
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

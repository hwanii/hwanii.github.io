<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_ref.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>REFERENCE</h2>
            <p>
                GLOBAL EP는 전자상거래를 통해 CBT(역직구+보세)방식으로<br>
                해외 진출 원스톱 서비스를 제공하고 있습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>REFERENCE</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>마케팅</h2>
        </div>
    </section>
    <section class="reference">
        <div class="inner1200">
            <div class="reference_category" data-aos="fade-up">
                <a href="../sub/reference.php">전체보기</a>
                <a href="../sub/refer_branding.php">브랜딩</a>
                <a href="../sub/refer_marketing.php" class="on">마케팅</a>
                <a href="../sub/refer_b2b.php">B2B &amp; B2C</a>
                <a href="../sub/refer_government.php">정부지원사업</a>
            </div>
            <div class="reference_contents">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 9; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM reference WHERE marketing1!='' OR marketing2!='' OR marketing3!='' OR marketing4!='' OR marketing5!='' OR marketing6!='' OR marketing7!='' OR marketing8!=''";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM reference WHERE marketing1!='' OR marketing2!='' OR marketing3!='' OR marketing4!='' OR marketing5!='' OR marketing6!='' OR marketing7!='' OR marketing8!='' ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="reference_post.php?num=<?php echo $num?>&type=marketing" class="contents" data-aos="fade-up">
                    <img src="../img/reference/<?php echo $thumb?>">
                    <p><?php echo $title?></p>
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="post_pagination">
            <?php if($block > 1){ ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=1"><img src="../img/b-icon-p-p-arrow.png"></a>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/b-icon-p-arrow.png"></a>
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
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/b-icon-n-arrow.png"></a>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page ?>"><img src="../img/b-icon-n-n-arrow.png"></a>
            <?php } ?>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

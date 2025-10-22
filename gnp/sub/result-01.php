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

    <section class="sub-banner">
        <div class="img"></div>
        <div class="bg"></div>
        <div class="txt">
            <h2>주요실적</h2>
            <p>Results of business</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>주요실적</li>
            <li>건물일체형태양광</li>
        </ul>
    </section>

    <section class="click-menu">
        <ul data-aos="fade-up">
            <li><a href="../sub/result-02.php">태양광 발전사업</a></li>
            <li class="active"><a href="../sub/result-01.php">건물일체형태양광</a></li>
            <li><a href="../sub/result-03.php">막구조물</a></li>
        </ul>
    </section>

    <section class="gallery" data-aos="fade-up">
        <h2 data-aos="fade-up">건물일체형태양광</h2>
        <div class="inner" data-aos="fade-up">
        <?php
            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 9; // 페이지 당 목록 개수
            $b_pageNum_list = 5; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭

            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호

            $pSql="SELECT COUNT(*) AS cnt FROM bo_building";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];

            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;

            $limit=($page - 1) * $list; // 출력 시작 번호

            $sql="SELECT * FROM bo_building ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $sub_title=$row['file_2'];
                $thumb=$row['thumbnail'];
                $num=$row['num'];
            ?>
            <div class="con">
                <a href="result-01-detail.php?num=<?php echo $num?>">
                    <img src="../img/file/building/thumb/<?php echo $thumb?>" alt="">
                    <div>
                        <h4><?php echo $title?></h4>
                        <span><?php echo $sub_title?></span>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </section>

    <div class="list-page">
        <?php
        if($block > 1){
        ?>
        
        <div class="prev">
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1?>">
                <span></span>
                <span></span>
            </a>
        </div>
        <?php
        } 
        ?>
        <div class="num">
            <?php
            for($i=$b_start_page;$i<=$b_end_page;$i++){
                if($page == $i){ // page 와 i 가 같으면 현재 페이지
            ?>
            <div class="on"><a href="javascript:void(0)"><?php echo $i?></a></div>
            <?php } else {?>
            <div><a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a></div>
            <?php } 
            }?>
        </div>
        <?php
        $total_block = ceil($total_page/$b_pageNum_list);
        if($block < $total_block){
        ?>
        <div class="next">
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">
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
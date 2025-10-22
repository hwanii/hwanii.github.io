<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header_en.php';?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>How to use</h2>
            </div>
            <div class="use_contents">
                <div class="contents">
                    <?php
                    $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                    $list = 6; // 페이지 당 목록 개수
                    $b_pageNum_list = 5; // 페이지 당 블록 갯수
                    $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                    
                    $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                    $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                    
                    $pSql="SELECT COUNT(*) AS cnt FROM guide";
                    $pRes=mysqli_query($conn, $pSql);
                    $pRow=mysqli_fetch_array($pRes);
                    $total_count=$pRow['cnt'];
                    
                    $total_page = ceil($total_count / $list); // 총 페이지 수 
                    if($b_end_page > $total_page) $b_end_page = $total_page;
                    
                    $limit=($page - 1) * $list; // 출력 시작 번호

                    $sql="SELECT * FROM guide ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="use_post_en.php?num=<?php echo $num?>">
                        <img src="../img/guide/<?php echo ($thumb) ? $thumb : "use.png"?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
                <div class="contents_pagination">
                    <?php if($block > 1){ ?>
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
                    <?php } ?>
                </div>
            </div>
            <div class="ask_link">
                <a href="faq_en.php">
                    <p>FAQ</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask01.png">
                </a>
                <a href="use_en.php">
                    <p>How to use</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask02.png">
                </a>
                <a href="emergency_en.php">
                    <p>Damage/accidents received</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask03.png">
                </a>
            </div>
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

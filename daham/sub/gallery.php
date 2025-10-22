<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="../img/main-logo01.png" alt="">
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;회사소개&nbsp;&nbsp;>&nbsp;&nbsp;갤러리</p>
        </div>
    </section>
    <section class="gallery">
        <div class="inner">
            <div class="title">
                <h2>다함 갤러리</h2>
                <p>DAHAM GALLERY</p>
            </div>
            <div class="contents">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 9; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM gallery";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM gallery ORDER BY num ASC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $thumb=$row['thumbnail'];
                    $title=$row['title'];
                    $num=$row['num'];
                ?>
                <a href="gallery_detail.php?num=<?php echo $num?>">
                    <img src="../img/gallery/<?php echo $thumb?>" alt="">
                    <p><?php echo $title?></p>
                </a>
                <?php } ?>
            </div>
            <div class="list_page">
                <?php
                if($block <=1){
                ?>
                <a href="javascript:void(0)">&#60;&#60;</a>
                <a href="javascript:void(0)">&#60;</a>
                <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=1">&#60;&#60;</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>">&#60;</a>
                <?php } ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                        <?php } else { ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a>
                        <?php
                        }
                    }?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block >= $total_block){
                ?>
                <a href="javascript:void(0)">&#62;</a>
                <a href="javascript:void(0)">&#62;&#62;</a>
                <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">&#62;</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page?>">&#62;&#62;</a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

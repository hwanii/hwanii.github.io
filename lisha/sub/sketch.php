<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;커뮤니티&nbsp;&nbsp;>&nbsp;&nbsp;교육현장 / 스케치</span>
        </div>
    </section>
    <section class="sketch">
        <div class="inner">
            <div class="title">
                <h2>교육현장 / 스케치</h2>
                <p>리샤필라테스의 수강 모습입니다.</p>
            </div>
        </div>
        <div class="sketch_contents">
            <?php
            $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
            $list = 24; // 페이지 당 목록 개수
            $b_pageNum_list = 5; // 페이지 당 블록 갯수
            $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
            
            $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
            $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
            
            $pSql="SELECT COUNT(*) AS cnt FROM photo";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $total_count=$pRow['cnt'];
            
            $total_page = ceil($total_count / $list); // 총 페이지 수 
            if($b_end_page > $total_page) $b_end_page = $total_page;
            
            $limit=($page - 1) * $list; // 출력 시작 번호

            $sql="SELECT * FROM photo ORDER BY num DESC LIMIT $limit, $list";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $thumb=$row['thumbnail'];
                $num=$row['num'];
            ?>
            <img src="../img/photo/<?php echo $thumb?>" alt="">
            <?php } ?>
        </div>
        <div class="list-page">
            <?php
            if($block <=1){
            ?>
            <div class="prev" style="visibility:hidden">
                <a href="#">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <?php
            } else {
            ?>
            <div class="prev">
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>">
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
                <div class="on"><a href="javascript:void(0)"><?php echo $i?></a></div>
                <?php } else { ?>
                <div><a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a></div>
                <?php } 
                } ?>
            </div>
            <?php
            $total_block = ceil($total_page/$b_pageNum_list);
            if($block >= $total_block){
            ?>
            <div class="next" style="visibility:hidden">
                <a href="#">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <?php
            } else {
            ?>
            <div class="next">
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="sketch_pop_contents_box">
        <?php
        $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
        $list = 24; // 페이지 당 목록 개수
        $b_pageNum_list = 5; // 페이지 당 블록 갯수
        $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
        
        $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
        $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
        
        $pSql="SELECT COUNT(*) AS cnt FROM photo";
        $pRes=mysqli_query($conn, $pSql);
        $pRow=mysqli_fetch_array($pRes);
        $total_count=$pRow['cnt'];
        
        $total_page = ceil($total_count / $list); // 총 페이지 수 
        if($b_end_page > $total_page) $b_end_page = $total_page;
        
        $limit=($page - 1) * $list; // 출력 시작 번호

        $sql="SELECT * FROM photo ORDER BY num DESC LIMIT $limit, $list";
        $res=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($res)){
            $thumb=$row['thumbnail'];
            $num=$row['num'];
        ?>
        <div class="sketch_pop_contents">
            <div class="contents">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <img src="../img/photo/<?php echo $thumb?>" alt="">
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="sketch_bg"></div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

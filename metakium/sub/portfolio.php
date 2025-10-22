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
        <a href="../sub/faq.php">FAQ</a>
        <a class="on" href="../sub/portfolio.php">PORTFOLIO</a>
    </div>
    <section class="portfolio" data-aos="fade-up">
        <div class="inner">
            <h2>OUR PORTFOLIO</h2>
            <ul class="port_cate">
                <li class="on"><a href="javascript:void(0)">ALL</a></li>
                <li><a href="javascript:void(0)">BRANDING</a></li>
                <li><a href="javascript:void(0)">CONFERENCE&EVENT</a></li>
                <li><a href="javascript:void(0)">DT</a></li>
                <li><a href="javascript:void(0)">EDUCATION</a></li>
            </ul>
            <div class="contents">
                <div class="content active">
                    <?php 
                    $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                    $list = 9; // 페이지 당 목록 개수
                    $b_pageNum_list = 5; // 페이지 당 블록 갯수
                    $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                    
                    $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                    $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                    
                    $pSql="SELECT COUNT(*) AS cnt FROM bo_portfolio";
                    $pRes=mysqli_query($conn, $pSql);
                    $pRow=mysqli_fetch_array($pRes);
                    $total_count=$pRow['cnt'];
                    
                    $total_page = ceil($total_count / $list); // 총 페이지 수 
                    if($b_end_page > $total_page) $b_end_page = $total_page;
                    
                    $limit=($page - 1) * $list; // 출력 시작 번호

                    $no=$total_count - $limit;

                    $sql="SELECT * FROM bo_portfolio ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <a href="javascript:void(0)"><img src="../img/portfolio/<?php echo $thumb?>" style="width:100%" alt=""></a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM bo_portfolio WHERE file_2='BRANDING' ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <a href="javascript:void(0)"><img src="../img/portfolio/<?php echo $thumb?>" style="width:100%" alt=""></a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM bo_portfolio WHERE file_2='CONFERENCE&EVENT' ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <a href="javascript:void(0)"><img src="../img/portfolio/<?php echo $thumb?>" style="width:100%" alt=""></a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM bo_portfolio WHERE file_2='DT' ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <a href="javascript:void(0)"><img src="../img/portfolio/<?php echo $thumb?>" style="width:100%" alt=""></a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM bo_portfolio WHERE file_2='EDUCATION' ORDER BY num DESC LIMIT $limit, $list";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $thumb=$row['thumbnail'];
                    ?>
                    <a href="javascript:void(0)"><img src="../img/portfolio/<?php echo $thumb?>" style="width:100%" alt=""></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <div class="list-page">
        <?php if($block < 1){ ?>
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
                <div class="on"><a href="javasciprt:void(0)"><?php echo $i?></a></div>
                <?php
                } else {
                ?>
                <div><a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a></div>
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

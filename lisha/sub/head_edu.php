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
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 일정&nbsp;&nbsp;>&nbsp;&nbsp;본사 교육일정</span>
        </div>
    </section>
    <div class="sub_category">
        <a href="../sub/head_edu.php" class="on">본사 교육일정</a>
        <a href="../sub/branch_edu.php">지부 교육일정</a>
        <a href="../sub/workshop.php">워크샵 일정</a>
    </div>
    <section class="schedule">
        <div class="inner">
            <div class="title">
                <h2>본사 교육일정</h2>
                <p>ILPA SCHEDULE</p>
            </div>
            <div class="contents">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 6; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM schedule WHERE `local`='본사'";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM schedule WHERE `local`='본사' ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $local_name=$row['local_name'];
                    $open_date=$row['open_date'];
                    $period=$row['period'];
                    $tel=$row['tel'];
                    $kakao=$row['kakao'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <div class="content">
                    <div class="top_box">
                        <img src="../img/schedule/<?php echo $thumb?>" alt="">
                    </div>
                    <div class="bottom_box">
                        <h3><?php echo $title?></h3>
                        <div>
                            <p>지부</p>
                            <span><?php echo $local_name?></span>
                        </div>
                        <div>
                            <p>개강일</p>
                            <span><?php echo $open_date?></span>
                        </div>
                        <div>
                            <p>기간</p>
                            <span><?php echo $period?></span>
                        </div>
                        <div>
                            <p>문의</p>
                            <span><?php echo ($tel) ? "전화문의" : ""?> <?php echo ($kakao) ? (($tel) ? "/ 카카오톡 문의" : "카카오톡 문의") : ""?></span>
                        </div>
                    </div>
                    <a href="head_edu_detail.php?num=<?php echo $num?>">DETAIL INFO</a>
                </div>
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
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

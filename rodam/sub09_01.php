<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/sub.css">
</head>

<body>
    <?php include 'header.php';?>
    <?php
    $bnSql="SELECT * FROM pc_sub_banner";
    $bnRes=mysqli_query($conn, $bnSql);
    $bnRow=mysqli_fetch_array($bnRes);
    ?>
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file8']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>전후 사진</h2>
            <p>BEFORE &amp; AFTER</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>전후 사진</h2>
        </div>
    </div>
    <div class="report_fix">
        <div class="top"></div>
        <div class="contents">
            <a href="sub09.php">전체보기</a>
            <a href="sub09_01.php" class="on">여드름 흉터</a>
            <a href="sub09_02.php">수두·대상포진 흉터</a>
            <a href="sub09_03.php">수술·성형 흉터</a>
            <a href="sub09_04.php">기타 패인 흉터</a>
            <a href="sub09_05.php">모공·여드름</a>
        </div>
        <div class="bottom"></div>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="report_fix_btn">
        <span></span>
        <span></span>
    </div>
    <section class="report" style="background-color: #fff;">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>BEFORE &amp; AFTER</h2>
                <div class="title_line"></div>
                <p>로담한의원 후기 사진으로 직접 효과를 확인해보세요</p>
            </div>
            <p class="ba_txt">
                <b>로담 한의원은 의료법을 준수합니다.</b><br>
                치료 사진 사례는 의료법상 회원 가입 또는 로그인 후 열람하실 수 있습니다.<br>
                불편하시더라도 양해 부탁드립니다.<br>
                <br>
                로그인 후에 상세한 설명과 함께 전후 사진을 확인하실 수 있습니다.
            </p>
            <div class="report_link">
                <a href="sub09.php">전체보기</a>
                <a href="sub09_01.php" class="on">여드름 패인 흉터</a>
                <a href="sub09_02.php">수두·대상포진 흉터</a>
                <a href="sub09_03.php">수술·성형 흉터</a>
                <a href="sub09_04.php">기타 패인 흉터</a>
                <a href="sub09_05.php">모공·여드름</a>
            </div>
            <div class="report_contents">
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 10; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM bna WHERE `type`='type01'";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호

                $sql="SELECT * FROM bna WHERE `type`='type01' ORDER BY num DESC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $before=$row['thumb'];
                    $after=$row['file'];
                    $bDate=$row['before'];
                    $aDate=$row['after'];
                    $bn=$row['branch'];
                    $count=$row['count'];
                ?>
                <div class="box_contents no_login" data-aos="fade-up">
                    <div class="txt_box">
                        <div class="box">
                            <div>
                                <h2>BEFORE</h2>
                                <p><?php echo date("Y.m.d", strtotime($bDate))?></p>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <h2>AFTER</h2>
                                <p><?php echo date("Y.m.d", strtotime($aDate))?></p>
                            </div>
                            <h3><?php echo $count?>회</h3>
                        </div>
                    </div>
                    <div class="contents">
                        <?php if(!isset($user)){ ?>
                        <a href="login.php" class="login_bg" style="display: block;"><h2>로그인 후 이용이 가능합니다.</h2></a>
                        <?php } ?>
                        <div class="report_branch"><h2><?php echo $bn?></h2></div>
                        <div class="top_contents">
                            <img src="./admin/img/bna/<?php echo $before?>">
                            <img src="./admin/img/bna/<?php echo $after?>">
                        </div>
                        <div class="cocoen_box">
                            <div class="cocoen">
                                <div>
                                    <img src="./admin/img/bna/<?php echo $before?>">
                                </div>
                                <img src="./admin/img/bna/<?php echo $after?>">
                            </div>
                        </div>
                    </div>
                    <ul class="box_cate">
                        <li class="on">→&nbsp;&nbsp;겹쳐보기&nbsp;&nbsp;←</li>
                        <li>←&nbsp;&nbsp;나눠보기&nbsp;&nbsp;→</li>
                    </ul>
                </div>
                <?php } ?>
            </div>
            <div class="report_page">
                <?php
                if($block > 1){
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>">
                    <span></span>
                    <span></span>
                </a>
                <?php } ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지 ?>
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
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">
                    <span></span>
                    <span></span>
                </a>
                <?php } ?>
            </div>
            <p class="re_bot_txt">치료 중에는 붉은기, 붓기, 멍, 염증성 트러블이 발생할 수 있으며,<br>환자의 치료결과는 환자의 상태, 치료 방법 등에 따라 차이가 있을 수 있습니다.</p>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/cocoen/dist/cocoen.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/sub.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var subB = $(".sub_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var report = $(".report").innerHeight();
            var totalHeight = subB + menu_flow + report;

            console.log();


            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
                $(".right_fix").css({
                    "bottom" : "280px"
                });
                $(".top_btn").css({
                    "position" : "absolute",
                    "top" : "-40px",
                    "bottom" : "auto"
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
                $(".right_fix").css({
                    "bottom" : "60px"
                });
                $(".top_btn").css({
                    "position" : "fixed",
                    "top" : "auto",
                    "bottom" : "60px"
                });
            };
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

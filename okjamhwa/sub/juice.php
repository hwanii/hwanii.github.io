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
    $type=($_GET['type']) ? $_GET['type'] : "new";

    $header="product";
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
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;제품소개&nbsp;&nbsp;&#62;&nbsp;&nbsp;쥬스</p>
        </div>
    </section>
    <section class="jam sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>제품소개</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/jam.php">잼</a>
                <a href="../sub/juice.php" class="on">쥬스</a>
                <a href="../sub/tea.php">전통차</a>
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
            <h2>쥬스 제품</h2>
            <div class="sort_btn">
                <button class="<?php echo ($type=="new") ? "on" : ""?>" onclick="location.href='<?php echo $_SERVER['PHP_SELF']?>?type=new'">최신순</button>
                <button class="<?php echo ($type=="old") ? "on" : ""?>" onclick="location.href='<?php echo $_SERVER['PHP_SELF']?>?type=old'">과거순</button>
            </div>
            <div class="jam_contents">
                <?php
                if($type=="new"){
                    $s=" ORDER BY num DESC";
                } else {
                    $s=" ORDER BY num ASC";
                }

                $sql="SELECT * FROM juice {$s}";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $thumb=$row['thumb'];
                    $num=$row['num'];
                ?>
                <a href="juice_detail.php?num=<?php echo $num?>">
                    <img src="../img/juice/<?php echo $thumb?>" alt="">
                    <h2><?php echo $title?></h2>
                </a>
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

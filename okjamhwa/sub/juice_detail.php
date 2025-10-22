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
    <section class="jam_detail sub_page">
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
        <?php
        $num=$_GET['num'];

        $hSql="UPDATE juice SET hit=hit+1 WHERE num='$num'";
        $hRes=mysqli_query($conn, $hSql);

        $sql="SELECT * FROM juice WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $title=$row['title'];
        $type=$row['type'];
        $volume=$row['volume'];
        $courage=$row['courage'];
        $ex=$row['ex'];
        $contents=$row['contents'];
        $naver=$row['naver'];
        $kakao=$row['kakao'];
        $gmarket=$row['gmarket'];
        $coupang=$row['coupang'];
        $auction=$row['auction'];
        $st=$row['st'];
        $thumb=$row['thumb'];
        ?>
        <div class="inner950">
            <div class="jam_detail_contents">
                <img src="../img/juice/<?php echo $thumb?>" alt="">
                <div class="right">
                    <h2><?php echo $title?></h2>
                    <div>
                        <h2>종류</h2>
                        <p><?php echo $type?></p>
                    </div>
                    <div>
                        <h2>용량</h2>
                        <p><?php echo $volume?></p>
                    </div>
                    <div>
                        <h2>용기</h2>
                        <p><?php echo $courage?></p>
                    </div>
                    <h3>상품 설명</h3>
                    <span><?php echo nl2br($ex)?></span>
                </div>
            </div>
            <div class="sell">
                <div class="left"></div>
                <div class="sell_contents">
                    <h2>판매처</h2>
                    <div class="swiper-container detail_thumb">
                        <div class="swiper-wrapper">
                            <?php if($naver){ ?>
                            <a href="<?php echo $naver?>" target="_blank" class="swiper-slide"><img src="../img/s-naver.png" alt=""></a>
                            <?php }
                            if($kakao){ ?>
                            <a href="<?php echo $kakao?>" target="_blank" class="swiper-slide"><img src="../img/s-kakao.png" alt=""></a>
                            <?php }
                            if($gmarket){ ?>
                            <a href="<?php echo $gmarket?>" target="_blank" class="swiper-slide"><img src="../img/s-gmarket.png" alt=""></a>
                            <?php }
                            if($coupang){ ?>
                            <a href="<?php echo $coupang?>" target="_blank" class="swiper-slide"><img src="../img/s-coupang.png" alt=""></a>
                            <?php }
                            if($auction){ ?>
                            <a href="<?php echo $auction?>" target="_blank" class="swiper-slide"><img src="../img/s-auction.png" alt=""></a>
                            <?php }
                            if($st){ ?>
                            <a href="<?php echo $st?>" target="_blank" class="swiper-slide"><img src="../img/s-11st.png" alt=""></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail_img">
                <h2></h2>
                <?php echo $contents?>
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

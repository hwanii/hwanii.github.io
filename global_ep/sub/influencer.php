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
    <section class="sub_banner" style="background: url(../img/sub_work.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>인플루언서</h2>
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
            <h2>WORK</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>인플루언서</h2>
        </div>
    </section>
    <section class="influencer">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>인플루언서</h2>
            </div>
            <?php
            $iSql="SELECT * FROM influencer";
            $iRes=mysqli_query($conn, $iSql);
            $iRow=mysqli_fetch_array($iRes);
            ?>
            <div class="influencer_name" data-aos="fade-up">SUNNY</div>
            <div class="influencer_contents">
                <div class="left" data-aos="fade-up">
                    <h2>PROFILE</h2>
                    <h3>Sunnydahye</h3>
                    <?php echo $iRow['contents'];?>
                </div>
                <div class="right" data-aos="fade-up">
                    <img src="../img/influencer/<?php echo $iRow['thumb'];?>">
                    <div class="sns">
                        <a href="<?php echo ($iRow['insta']) ? $iRow['insta'] : "javascript:void(0)"?>" <?php echo ($iRow['insta']) ? 'target="_blank"' : ""?>><img src="../img/icon-black-insta.png"></a>
                        <a href="<?php echo ($iRow['youtube']) ? $iRow['youtube'] : "javascript:void(0)"?>" <?php echo ($iRow['youtube']) ? 'target="_blank"' : ""?>><img src="../img/icon-black-youtube.png"></a>
                        <a href="<?php echo ($iRow['tiktok']) ? $iRow['tiktok'] : "javascript:void(0)"?>" <?php echo ($iRow['tiktok']) ? 'target="_blank"' : ""?>><img src="../img/icon-black-tictok.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="news_title" data-aos="fade-up">NEWS</h2>
        <div class="news_inner" data-aos="fade-up">
            <div class="swiper-container news_slide">
                <div class="swiper-wrapper">
                    <?php
                    $nSql="SELECT * FROM news ORDER BY num ASC";
                    $nRes=mysqli_query($conn, $nSql);
                    while($nRow=mysqli_fetch_array($nRes)){
                    ?>
                    <a href="<?php echo ($nRow['link']) ? $nRow['link'] : "javascript:void(0)";?>" <?php echo ($nRow['link']) ? 'target="_blank"' : '';?> class="swiper-slide">
                        <img src="../img/news/<?php echo $nRow['thumb'];?>">
                        <div class="txt_box">
                            <h2><?php echo $nRow['title']?></h2>
                            <p><?php echo $nRow['contents']?></p>
                            <span><?php echo $nRow['new_date']?><br><?php echo $nRow['name']?></span>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <img src="../img/news-prev.png" class="news_prev">
            <img src="../img/news-next.png" class="news_next">
        </div>
        <div class="inner1200">
            <h2 class="news_title" data-aos="fade-up">REFERENCE</h2>
            <div class="ref_contents">
                <div class="contents" data-aos="fade-up">
                    <p>한국 A 브랜드 8월11일 기준 영상 업로드 후</p>
                    <div class="img_box"><img src="../img/influ-ref01.png"></div>
                    <h3>방문자 수 220배UP ↑&nbsp;&nbsp;매출 40배UP ↑</h3>
                </div>
                <div class="contents" data-aos="fade-up">
                    <p>한국 A 브랜드 11월16일 써니마켓 샵 오픈 당일 DATA</p>
                    <div class="img_box"><img src="../img/influ-ref02.png"></div>
                    <h3>페이지뷰 수 600%UP ↑&nbsp;&nbsp;장바구니 800건 ↑&nbsp;&nbsp;매출 300% ↑</h3>
                </div>
            </div>
            <div class="ref_contents">
                <div class="contents" data-aos="fade-up">
                    <p>한국  B브랜드 8월27일 기준 컨텐츠 업로드 후</p>
                    <div class="img_box"><img src="../img/influ-ref03.png"></div>
                    <h3>방문자 수 8배UP ↑&nbsp;&nbsp;매출 약 2배UP ↑</h3>
                </div>
                <div class="contents" data-aos="fade-up">
                    <p>한국 B 신생 브랜드 써니마켓 1주일 DATA</p>
                    <div class="img_box"><img src="../img/influ-ref04.png"></div>
                    <h3>페이지 뷰 수 14,113명, 전주 대비 464% 상승<br>
                        장바구니 담은 수 405, 전주 대비 193% 상승<br>
                        매출 250% ↑</h3>
                </div>
            </div>
            <div class="ref_contents">
                <div class="contents" data-aos="fade-up">
                    <p>한국 C 브랜드 8월11일 8월27일 기준 컨텐츠 업로드 후  </p>
                    <div class="img_box"><img src="../img/influ-ref05.png"></div>
                    <h3>방문자 수 10배UP ↑&nbsp;&nbsp;매출 약 70배 ↑</h3>
                </div>
                <div class="contents" data-aos="fade-up">
                    <p>한국 C 신생 브랜드 써니마켓 1주일 DATA</p>
                    <div class="img_box"><img src="../img/influ-ref06.png"></div>
                    <h3>페이지 뷰 수 2,706명, 전주 대비 52.36% 상승<br>
                        장바구니 담은 수 195, 전주 대비 14.71% 상승<br>
                        매출 100% ↑</h3>
                </div>
            </div>
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

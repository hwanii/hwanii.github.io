<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>팜스 바이오텍</title>
    <meta name="description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="팜스 바이오텍" />
    <meta property="og:description" content="생명과학 기술을 기반으로 산업의 전반적인 분야에서 다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업" />
    <meta property="og:url" content="http://farmsbiotech.co.kr" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="http://farmsbiotech.co.kr">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="main-banner">
        <div id="main-wrap">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $sSql="SELECT * FROM slide ORDER BY number ASC";
                    $sRes=mysqli_query($conn, $sSql);
                    while($sRow=mysqli_fetch_array($sRes)){
                        $bg=$sRow['background'];
                    ?>
                    <div class="swiper-slide" style="background: url('./admin/img/background/<?php echo $bg?>') no-repeat center/cover;height: 100vh;">
                        <div class="slide-bg"></div>
                        <div class="txt">
                            <h2>BIO TECH,<br>THINK FUTURE</h2>
                            <p>
                                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="swiper-slide main-bg01">
                        <div class="slide-bg"></div>
                        <div class="txt">
                            <h2>BIO TECH,<br>THINK FUTURE</h2>
                            <p>
                                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-btn-prev"><img src="img/mv_prev.png" alt=""></div>
            <div class="swiper-btn-next"><img src="img/mv_next.png" alt=""></div>
        </div>
    </div>

    <section class="mid">
        <img src="img/logo01.png" alt="farms biotech">
        <h2>
            유용 미생물과, 천연물을 활용하여<br>
            산업에 다양하게 활용할 수 있는<br>
            제품을 연구 개발합니다.
        </h2>
        <p>
            1. 생물비료를 활용하여 식물에게 필요한 영양소 제공<br>
            2. 미생물의 발효를 통하여 동물의 질병예방,<br>&nbsp;&nbsp;&nbsp;&nbsp;증체량 향상에 도움이 되는 보조사료 개발<br>
            3. 단백질 분해능이 우수한 미생물을 활용한 악취저감제 연구개발<br>
            4. 미생물 배양 및 분석배지를 활용한 교육, 분석, 연구개발 가능<br>
            5. PHAs 생성 미생물을 활용한 생분해성 플라스틱 제조 연구개발
        </p>
        <div>
            <span></span>
            <span></span>
        </div>
    </section>

    <section class="business">
        <div class="bg"></div>
        <div class="inner">
            <h2>BUSINESS</h2>
            <span>팜스바이오텍사업분야를 소개합니다.</span>
            <p>
                생명과학 기술을 기반으로 산업의 전반적인 분야에서<br>
                다양하게 활용할 수 있는 기능성 제품을 연구개발하는 기업  
            </p>
            <div class="img-box">
                <div class="img-con">
                    <img src="img/business01.jpg" alt="">
                    <div class="txt">
                        <h2>01</h2>
                        <p>생물학적 제제<br>연구개발</p>
                    </div>
                </div>
                <div class="img-con">
                    <img src="img/business02.jpg" alt="">
                    <div class="txt">
                        <h2>02</h2>
                        <p>미생물 분석 및<br>분석 대행</p>
                    </div>
                </div>
                <div class="img-con">
                    <img src="img/business03.jpg" alt="">
                    <div class="txt">
                        <h2>03</h2>
                        <p>연구개발,<br>컨설팅, 교육</p>
                    </div>
                </div>
                <div class="img-con">
                    <img src="img/business04.jpg" alt="">
                    <div class="txt">
                        <h2>04</h2>
                        <p>미생물 생배지,<br>분말 배지 제조</p>
                    </div>
                </div>
                <div class="img-con img-con-logo">
                    <div><img src="img/logo.png" alt=""></div>
                </div>
                <div class="img-con">
                    <img src="img/business05.jpg" alt="">
                    <div class="txt">
                        <h2>05</h2>
                        <p>조달청&#47;학교장터<br>공급업체</p>
                    </div>
                </div>
                <div class="img-con">
                    <img src="img/business06.jpg" alt="">
                    <div class="txt">
                        <h2>06</h2>
                        <p>생물 비료,<br>유기물 비료 제조</p>
                    </div>
                </div>
                <div class="img-con">
                    <img src="img/business07.jpg" alt="">
                    <div class="txt">
                        <h2>07</h2>
                        <p>동물 보조사료<br>제조</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="inner">
            <h2>PRODUCT</h2>
            <span>팜스바이오텍의 다양한 제품을 소개합니다.</span>
            <div class="product-boxes">
                <?php
                $pSql="SELECT * FROM pro_bio UNION ALL SELECT * FROM pro_edu UNION ALL SELECT * FROM pro_micro UNION ALL SELECT * FROM pro_etc LIMIT 12";
                $pRes=mysqli_query($conn, $pSql);
                while($pRow=mysqli_fetch_array($pRes)){
                    $pNum=$pRow['num'];
                    $pThumb=$pRow['thumbnail'];
                    $page=$pRow['file_1'];
                ?>
                <div class="product-contents">
                    <a href="sub/<?php echo $page?>_detail.php?num=<?php echo $pNum?>">
                        <img src="img/product/<?php echo $page?>/<?php echo $pThumb?>" alt="">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="community">
        <div class="bg"></div>
        <div class="b-inner">
            <h2>COMMUNITY</h2>
            <span>팜스바이오텍의 새로운 소식을 확인해주세요</span>
        </div>
        <div class="inner">
            <div class="main-board">
                <h2>NOTICE</h2>
                <div class="board-box01">
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $ntSql="SELECT * FROM bo_notice";
                            $ntRes=mysqli_query($conn, $ntSql);
                            $ntRows=ceil(mysqli_num_rows($ntRes)/5);
                            for($n=0;$n<$ntRows;$n++){
                                $ns=$n*5;
                            ?>
                            <div class="swiper-slide">
                                <?php
                                $nSql="SELECT * FROM bo_notice ORDER BY num DESC LIMIT $ns, 5";
                                $nRes=mysqli_query($conn, $nSql);
                                while($nRow=mysqli_fetch_array($nRes)){
                                    $nNum=$nRow['num'];
                                    $nTit=$nRow['title'];
                                ?>
                                <div class="board-con">
                                    <a href="sub/notice_detail.php?num=<?php echo $nNum?>">
                                        <p><?php echo $nTit?></p>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-btn-prev01"><img src="img/left-arrow.png" alt=""></div>
                    <div class="swiper-btn-next01"><img src="img/right-arrow.png" alt=""></div>
                </div>
            </div>
            <div class="main-board">
                <h2>게시판</h2>
                <div class="board-box02">
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $btSql="SELECT * FROM bo_board";
                            $btRes=mysqli_query($conn, $btSql);
                            $btRows=ceil(mysqli_num_rows($btRes)/5);
                            for($b=0;$b<$btRows;$b++){
                                $bs=$b*5;
                            ?>
                            <div class="swiper-slide">
                                <?php
                                $bSql="SELECT * FROM bo_board ORDER BY num DESC LIMIT $bs, 5";
                                $bRes=mysqli_query($conn, $bSql);
                                while($bRow=mysqli_fetch_array($bRes)){
                                    $bNum=$bRow['num'];
                                    $bTit=$bRow['title'];
                                ?>
                                <div class="board-con">
                                    <a href="sub/board_detail.php?num=<?php echo $bNum?>">
                                        <p><?php echo $bTit?></p>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper-btn-prev02"><img src="img/left-arrow.png" alt=""></div>
                    <div class="swiper-btn-next02"><img src="img/right-arrow.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="inner">
            <div class="left">
                <h2>CONTACT US</h2>
                <p>팜스바이오텍에 연락하시는 방법입니다.</p>
                <form method="POST" action="counsel.php" target="ifrm">
                <input type="hidden" name="page" value="index.php">
                <div class="form">
                    <div class="subject">
                        <input type="text" name="type" placeholder="문의유형 선택해주세요.">
                    </div>
                    <div class="name">
                        <input type="text" name="name" placeholder="이름(필수입력)" required>
                    </div>
                    <div class="tel">
                        <input type="tel" name="fTel" placeholder="전화번호(필수입력)" numberOnly required>
                        -<input type="tel" name="mTel" numberOnly>
                        -<input type="tel" name="lTel" numberOnly>
                    </div>
                    <div class="email">
                        <input type="email" name="email" placeholder="이메일(필수입력)" required>
                        @<input type="email" name="addr">
                    </div>
                    <div class="title">
                        <input type="text" name="title" placeholder="제목(필수입력)" required>
                    </div>
                    <textarea name="contents" placeholder="내용을 입력하세요."></textarea>
                    <div class="inquire">
                        <div>
                            <input type="checkbox" required>
                            <a href="javascript:void(0)">
                                <span>홈페이지의 개인정보처리방침에 동의합니다. &#91;보기&#93;</span>
                            </a>
                        </div>
                        <button>문의하기</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="right">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1668064126615" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                    2. 설치 스크립트
                    * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1668064126615",
                        "key" : "2ch5q",
                        "mapWidth" : "690",
                        "mapHeight" : "350"
                    }).render();
                </script>
                <div class="address">
                    <h3>주소</h3>
                    <p>충남 천안시 동남구 단대로119, 단국대학교 생명공학창업보육센터 309호</p>
                </div>
                <div class="time">
                    <h3>운영시간</h3>
                    <p>운영시간 : 평일 오전 9시 ~ 오후 06시</p>
                    <p>점심시간 : 평일 오후 12시 ~ 오후 01시</p>
                </div>
            </div>
        </div>
    </section>
    <iframe name="ifrm" width="0" height="0" frameborder="0" style="display:none"></iframe>
    <?php include 'footer.php'; ?>

</body>

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
<script>
    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9]/g,""));
    });
</script>
</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="swiper-container main-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-bg01">
                <div class="bg"></div>
                <div class="txt-box">
                    <h2>Executive Search &<br>Career Consulting</h2>
                    <p>기업의 니즈와 개인 커리어의 시너지를 위한<br>신뢰기반 파트너로 함께 합니다.</p>
                </div>
                <div class="icon-box">
                    <div class="left">
                        <a href="sub/client.php">
                            <div><img src="img/icon-main01.png" alt=""></div>
                            <p>채용의뢰</p>
                        </a>
                        <a href="sub/candidate_information.php">
                            <div><img src="img/icon-main02.png" alt=""></div>
                            <p>채용정보</p>
                        </a>
                        <a href="sub/resume.php">
                            <div><img src="img/icon-main03.png" alt=""></div>
                            <p>이력서 등록</p>
                        </a>
                    </div>
                    <div class="right">
                        <a href="sub/notice.php">
                            <div><img src="img/icon-main04.png" alt=""></div>
                            <p>공지 & 문의</p>
                        </a>
                        <a href="sub/location.php">
                            <div><img src="img/icon-main05.png" alt=""></div>
                            <p>오시는 길</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-btn-box">
            <div class="swiper-btn-prev"><img src="img/icon-left-arrow.png" alt=""></div>
            <div class="swiper-btn-next"><img src="img/icon-left-arrow.png" alt=""></div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

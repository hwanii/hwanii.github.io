<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="inner">
            <a href="javascript:void(0)"><img src="<?php echo $root?>img/icon-menu.png"></a>
            <div class="language">
                <a href="index.php">KOR</a>
                <a href="">ENG</a>
            </div>
        </div>
        <h1><a href="<?php echo $root?>index_en.php">Baggage Storage Service</a></h1>
    </header>
    <aside>
        <div class="close">
            <span></span>
            <span></span>
        </div>
        <a href="index.php"><img src="img/b-logo.png"></a>
        <div class="gnb">
            <a href="sub/reservation.php">
                <p>예약하기</p>
                <div class="line"></div>
                <img src="img/icon-main01.png">
            </a>
            <a href="sub/search.php">
                <p>조회하기</p>
                <div class="line"></div>
                <img src="img/icon-main02.png">
            </a>
            <a href="sub/process.php">
                <p>진행하기</p>
                <div class="line"></div>
                <img src="img/icon-main03.png">
            </a>
            <a href="sub/ask.php">
                <p>상담하기</p>
                <div class="line"></div>
                <img src="img/icon-main04.png">
            </a>
        </div>
    </aside>
    <div class="sub_login">
        <form method="POST" action="admin/login.php">
        <div>
            <h2>ID</h2>
            <input type="text" name="id" placeholder="LOGIN ID">
        </div>
        <div>
            <h2>PW</h2>
            <input type="password" name="password" placeholder="INPUT PW">
        </div>
        <button>LOGIN</button>
        </form>
    </div>
    <div class="swiper-container sub_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
        </div>
    </div>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>

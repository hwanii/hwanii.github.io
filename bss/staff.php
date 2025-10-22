<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header_en.php';?>
    <form method="POST" action="staff_chk.php" target="ifrm">
    <div class="sub_login">
        <div>
            <h2>ID</h2>
            <input type="text" name="id" placeholder="LOGIN ID">
        </div>
        <div>
            <h2>PW</h2>
            <input type="password" name="pass" placeholder="INPUT PW">
        </div>
        <button>LOGIN</button>
    </div>
    </form>
    <div class="swiper-container sub_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
            <div class="swiper-slide" style="background: url(img/sub01.png) no-repeat center/cover;"></div>
        </div>
    </div>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>

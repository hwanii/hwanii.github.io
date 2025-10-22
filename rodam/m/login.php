<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/m-sub.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="login_banner" style="background: url(../img/login-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>로담 회원 로그인</h2>
            <p>MEMBER LOGIN</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="../img/menu-flow.png">
            <h2>로그인</h2>
        </div>
    </div>
    <section class="login">
        <div class="sub_title log">
            <h2>MEMBER LOGIN</h2>
            <div class="title_line"></div>
            <p>로그인 후 페이지 열람 및 서비스 이용이 가능합니다.</p>
        </div>
        <div class="login_box login_underLine">
            <p><b>홈페이지 회원</b> 로그인</p>
            <a href="login_submit.php" class="login_btn"><p><b>홈페이지 회원</b> 로그인</p></a>
        </div>
        <div class="login_box">
            <p><b>SNS 계정</b> 로그인</p>
            <div class="sns_box">
                <a href="javascript:void(0);" class="social_link sns_naver">
                    <img src="../img/login-naver.png">
                    <span>네이버 로그인</span>
                </a>
                <a href="javascript:void(0);" class="social_link sns_kakao">
                    <img src="../img/login-kakao.png">
                    <span>카카오 로그인</span>
                </a>
                <a href="javascript:void(0);" class="social_link sns_google">
                    <img src="../img/login-google.png">
                    <span>Google 로그인</span>
                </a>
            </div>
        </div>
        <div class="bottom_btn">
            <a href="find_id.php" class="gray">아이디 찾기</a>
            <a href="find_password.php" class="gray">비밀번호 찾기</a>
            <a href="join.php" class="black">회원가입</a>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../https://unpkg.com/cocoen/dist/cocoen.js"></script>
<script src="../https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="../js/jquery.ui.touch-punch.min.js"></script>
<script src="../js/m-script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var subS = $(".login_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var loginS = $(".login").innerHeight();
            var totalHeight = subS + menu_flow + loginS;

            console.log();


            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "sticky",
                });
                $(".q_bottom").css({
                    "position" : "relative",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "fixed",
                });
                $(".q_bottom").css({
                    "position" : "fixed",
                });
            };
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

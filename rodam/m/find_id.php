<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'; ?>
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
            <h2>로담 회원 아이디 찾기</h2>
            <p>Find ID</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="../img/menu-flow.png">
            <h2>로그인</h2>
            <img src="../img/menu-flow.png">
            <h2>아이디 찾기</h2>
        </div>
    </div>
    <section class="login">
        <div class="sub_title log">
            <h2>FIND ID</h2>
            <div class="title_line"></div>
            <p>회원님의 아이디를 찾아드립니다.</p>
        </div>
        <div class="login_box login_underLine">
            <p><b>회원 정보 찾기</b></p>
            <span class="tt_txt">
                회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                해당 이메일로 아이디 정보를 보내드립니다.
            </span>
            <input type="email" placeholder="가입시 입력하신 E-MAIL 주소를 입력해주세요." class="find_email">
            <div class="auto-no">
                <div>
                    <h3>자동 등록 방지</h3>
                    <p id="auto-no"><img src="" alt="" title="captcha" id="capt_img"></p>
                    <img src="../img/refresh.png" class="captcha_reload" alt="reload" onclick="reload()">
                    <input type="text" name="code">
                </div>
                <div>
                    <span></span>
                    <p>자동등록방지 문자를 순서대로 입력하세요.</p>
                </div>
            </div>
        </div>
        <div class="find_box">
            <span>
                이메일로 아이디가 전송되지 않는 경우, 이메일 주소를 잘못입력하셨거나<br>
                이메일 계정이 휴면 계정인 경우에는 메일이 발송되지 않습니다.<br>
                정상적으로 발송된 경우 스팸으로 구분 되었을 수 있으니 스팸 메일함 확인 부탁드립니다.
            </span>
            <button>아이디 찾기</button>
            <div class="find_txt">
                <p style="display: none; color: #c1272d;">“가입하신 기록을 찾을 수 없습니다.”</p>
                <p style="display: none;">“가입하신 이메일로 아이디가 전송되었습니다.”</p>
            </div>
        </div>
        <div class="bottom_btn">
            <a href="login.php" class="black">로그인</a>
            <a href="find_password.php" class="gray">비밀번호 찾기</a>
            <a href="join.php" class="black">회원가입</a>
        </div>
    </section>
    <?php include 'footer.php';?>
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

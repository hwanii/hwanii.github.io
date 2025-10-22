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
    <?php include 'header.php'; ?>
    <section class="sub_banner" style="background: url(img/login-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>로담 회원가입</h2>
            <p>MEMBER JOIN</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>JOIN</h2>
        </div>
    </div>
    <form method="POST" action="join01.php">
    <section class="join">
        <div class="inner">
            <div class="title">
                <h2>MEMBER JOIN</h2>
                <div class="title_line"></div>
                <p>회원가입 후 페이지 열람 및 서비스 이용이 가능합니다.</p>
            </div>
            <?php
            $sql="SELECT * FROM terms";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="contents">
                <h2>회원가입약관</h2>
                <div>
                    <p><?php echo nl2br($row['terms'])?></p>
                </div>
                <label>
                    <input type="checkbox" required>
                    <p>회원가입약관의 내용에 동의합니다. </p>
                </label>
            </div>
            <div class="contents">
                <h2>개인정보처리방침안내</h2>
                <div>
                    <p><?php echo nl2br($row['policy'])?></p>
                </div>
                <label>
                    <input type="checkbox" required>
                    <p>개인정보처리방침안내 내용에 동의합니다. </p>
                </label>
            </div>
            <div class="join_btn">
                <p>“위 약관에 모두 동의하셔야 회원 가입이 진행됩니다.”</p>
                <button>회원가입</button>
            </div>
        </div>
    </section>
    </form>
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
            var subS = $(".sub_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var loginS = $(".login").innerHeight();
            var totalHeight = subS + menu_flow + loginS;

            console.log();


            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
                $(".right_fix").css({
                    "bottom" : "280px"
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
                $(".right_fix").css({
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

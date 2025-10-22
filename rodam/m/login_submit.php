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
        <form name="loginForm" method="POST" action="login_set.php" target="lifrm">
        <div class="login_box login_underLine">
            <p><b>홈페이지 회원</b> 로그인</p>
            <div class="login_contents">
                <p>아이디</p>
                <input type="text" id="user_id" name="user_id" placeholder="아이디를 입력해주세요" required>
            </div>
            <div class="login_contents">
                <p>비밀번호</p>
                <input type="password" id="user_pw" name="pass" placeholder="비밀번호를 입력해주세요" required>
            </div>
            <!-- 정보가 일치하지 않을 경우 display: block; -->
            <span class="warning" id="warning" style="display: none;">입력하신 정보가 일치하지 않습니다.</span>
        </div>
        <button type="button" onclick="login_chk()" class="login_go">로그인</button>
    </section>
    <iframe name="lifrm" frameborder="0" style="display:none"></iframe>
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
    function login_chk(){
        var user_id=$("#user_id").val();
        var user_pw=$("#user_pw").val();

        $.ajax({
            url:"login_chk.php",
            type:"POST",
            data:{
                id:user_id,
                pw:user_pw
            },
            dataType:"JSON",
            success:function(data){
                if(data=="true"){
                    $("#warning").css("display", "none");
                    var form=document.loginForm;
                    form.method="POST";
                    form.action="login_set.php";
                    form.target="lifrm";

                    form.submit();
                } else {
                    $("#warning").css("display", "block");
                }
            }
        })
    }
</script>
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

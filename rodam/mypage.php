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
    <?php include 'header.php'; 
    include("simple-php-captcha.php");

    $_SESSION['captcha'] = simple_php_captcha();
    ?>
    <section class="sub_banner" style="background: url(img/login-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>로담 회원 공간</h2>
            <p>MEMBER SPACE</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>MY PAGE</h2>
        </div>
    </div>
    <form method="POST" action="join_update.php" onsubmit="return form_chk()" target="ifrm">
    <input type="hidden" name="id" value="<?php echo $user?>">
    <input type="hidden" id="check_pw">
    <section class="login">
        <div class="title">
            <h2>MY PAGE</h2>
            <div class="title_line"></div>
            <p>회원님의 정보를 수정하실 수 있습니다.</p>
        </div>
        <div class="login_box login_underLine">
            <p><b>기본 정보 입력</b></p>
            <div class="mypage_box">
                <div class="contents">
                    <p>비밀번호 변경</p>
                    <div class="right">
                        <input type="password" id="pass" name="pass" onkeydown="checkSpacebar()" required>
                    </div>
                </div>
                <div class="contents">
                    <p>변경 확인</p>
                    <div class="right">
                        <input type="password" id="re_pass" onkeydown="checkSpacebar()" required>
                        <button type="button" onclick="pass_chk()">검증</button>
                    </div>
                </div>
                <!-- 검증 눌렀을 때 contents -> display: flex; -->
                <div class="contents" id="pw_chk" style="display: none;">
                    <p></p>
                    <div class="right">
                        <!-- 상황 맞춰서 display: block; -->
                        <span id="pw_no" style="display: none;">“비밀번호가 일치하지 않습니다.”</span>
                        <span id="pw_yes" style="display: none;">“비밀번호가 일치합니다.”</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="login_box">
            <p><b>추가 정보 변경</b></p>
            <div class="mypage_box">
                <div class="contents">
                    <p>이메일 주소</p>
                    <div class="right">
                        <input type="email" id="email" name="email" onkeydown="checkSpacebar()" placeholder="이메일 주소 전체를 입력해주세요">
                        <button type="button" onclick="mail_chk()">중복체크</button>
                    </div>
                </div>
                <!-- 검증 눌렀을 때 contents -> display: flex; -->
                <div class="contents" id="email_chk" style="display: none;">
                    <p></p>
                    <div class="right">
                        <!-- 상황 맞춰서 display: block; -->
                        <span id="email_no" style="display: none;">“이미 가입된 이메일입니다.”</span>
                        <span id="email_yes" style="display: none;">“사용 가능한 이메일 주소 입니다.”</span>
                    </div>
                </div>
                <div class="contents phone">
                    <p>휴대전화번호</p>
                    <div class="right">
                        <input type="tel" id="phone" name="phone" onkeydown="checkSpacebar()" placeholder="휴대전화번호 입력">
                        <button type="button" onclick="phone_chk()">중복체크</button>
                    </div>
                </div>
                <!-- 검증 눌렀을 때 contents -> display: flex; -->
                <div class="contents" id="ph_chk" style="display: none;">
                    <p></p>
                    <div class="right">
                        <!-- 상황 맞춰서 display: block; -->
                        <span id="ph_no" style="display: none;">“이미 가입된 휴대전화번호입니다.”</span>
                        <span id="ph_yes" style="display: none;">“사용 가능한 휴대전화번호입니다.”</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_btn">
            <div class="auto-no">
                <div>
                    <h3>자동 등록 방지</h3>
                    <p id="auto-no"><img src="<?php echo $_SESSION['captcha']['image_src']?>" alt="" title="captcha" id="capt_img"></p>
                    <img src="img/refresh.png" class="captcha_reload" alt="reload" onclick="reload()">
                    <input type="text" name="code">
                </div>
                <div>
                    <span></span>
                    <p>자동등록방지 문자를 순서대로 입력하세요.</p>
                </div>
            </div>
            <button>수정 저장</button>
            <a href="javascript:window.history.back();" class="gray">수정 취소</a>
            <button type="button" class="orange" onclick="secession()">회원 탈퇴</button>
        </div>
    </section>
    </form>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
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
$(".not-kor").keyup(function(e) { 
	if (!(e.keyCode >=37 && e.keyCode<=40)) {
		var v = $(this).val();
		$(this).val(v.replace(/[^a-z0-9]/gi,''));
	}
});
</script>
<script>
    function checkSpacebar(){
        var kcode = event.keyCode;
        if(kcode==32) event.returnValue=false;
    }

    function pass_chk(){
        var p1 = $("#pass").val();
        var p2 = $("#re_pass").val();

        if(p1!="" && p2!=""){
            $("#pw_chk").css("display", "flex");
            if(p1!=p2){
                $("#check_pw").val("false");
                $("#pw_no").css("display", "block");
                $("#pw_yes").css("display", "none");
            } else {
                $("#check_pw").val("true");
                $("#pw_yes").css("display", "block");
                $("#pw_no").css("display", "none");
            }
        } else {
            alert("비밀번호를 입력해주세요.")
        }
    }
    
    function mail_chk(){
        var email = $("#email").val();
        if(email==""){
            alert("이메일을 입력해주세요.");
            $("#email").focus();
        } else {
            $.ajax({
                url:"chk_mail.php",
                type:"POST",
                data:{email:email},
                dataType:"JSON",
                success:function(data){
                    $("#email_chk").css("display", "flex");
                    if(data=="true"){
                        $("#check_email").val("true");
                        $("#email_yes").css("display", "block");
                        $("#email_no").css("display", "none");
                    } else {
                        $("#check_email").val("false");
                        $("#email_no").css("display", "block");
                        $("#email_yes").css("display", "none");
                    }
                }
            })
        }
    }
    
    function phone_chk(){
        var phone = $("#phone").val();
        if(phone==""){
            alert("휴대전화번호를 입력해주세요.");
            $("#phone").focus();
        } else {
            $.ajax({
                url:"chk_phone.php",
                type:"POST",
                data:{phone:phone},
                dataType:"JSON",
                success:function(data){
                    $("#ph_chk").css("display", "flex");
                    if(data=="true"){
                        $("#check_tel").val("true");
                        $("#ph_yes").css("display", "block");
                        $("#ph_no").css("display", "none");
                    } else {
                        $("#check_tel").val("false");
                        $("#ph_no").css("display", "block");
                        $("#ph_yes").css("display", "none");
                    }
                }
            })
        }
    }
</script>
<script>
    function form_chk(){
        var stat="true";
        if($("#check_pw").val()!="true"){
            alert("비밀번호 중복체크를 해주세요.");
            $("#user_id").focus();
            stat="false";
        }

        if(stat=="true"){
            return true;
        } else {
            return false;
        }
    }
</script>
<script>
    function secession(){
        if(confirm("정말로 탈퇴하시겠습니까?")){
            ifrm.location.href="secession.php";
        }
    }
</script>
<script>
    Cocoen.parse(document.body);
</script>

</html>

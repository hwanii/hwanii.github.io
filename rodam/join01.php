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
    <form method="POST" action="join_chk.php" onsubmit="return form_chk()" target="ifrm">
    <input type="hidden" id="check_id">
    <input type="hidden" id="check_pw">
    <input type="hidden" id="check_email">
    <input type="hidden" id="check_tel">
    <section class="login">
        <div class="title">
            <h2>MEMBER JOIN</h2>
            <div class="title_line"></div>
            <p>회원가입 후 페이지 열람 및 서비스 이용이 가능합니다.</p>
        </div>
        <div class="login_box login_underLine">
            <p><b>기본 정보 입력</b></p>
            <div class="mypage_box">
                <div class="contents">
                    <p>아이디</p>
                    <div class="right">
                        <input type="text" class="not-kor" id="user_id" name="id" onkeydown="checkSpacebar()" placeholder="영문&숫자만 입력, 최소 5글자 이상">
                        <button type="button" onclick="user_chk()">중복체크</button>
                    </div>
                </div>
                <!-- 중복체크 눌렀을 때 contents -> display: flex; -->
                <div class="contents" id="id_chk" style="display: none;">
                    <p></p>
                    <div class="right">
                        <!-- 상황 맞춰서 display: block; -->
                        <span id="id_yes" style="display: block;">“사용 가능한 아이디입니다.”</span>
                        <span id="id_no" style="display: none;">“이미 사용중인 아이디입니다.”</span>
                    </div>
                </div>
                <div class="contents">
                    <p>비밀번호</p>
                    <div class="right">
                        <input type="password" id="pass" name="pass" onkeydown="checkSpacebar()" required>
                    </div>
                </div>
                <div class="contents">
                    <p>비밀번호 확인</p>
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
        <div class="login_box login_underLine">
            <p><b>추가 정보 입력</b></p>
            <div class="mypage_box">
                <div class="contents phone">
                    <p>가입자명</p>
                    <div class="right">
                        <input type="text" name="name" placeholder="가입자명" onkeydown="checkSpacebar()" required>
                        <div class="label_contents01">
                            <p>가입자 성별</p>
                            <div>
                                <label>
                                    <input type="radio" name="gender" value="여성" required>
                                    <i>여성</i>
                                </label>
                                <label>
                                    <input type="radio" name="gender" value="남성" required>
                                    <i>남성</i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contents phone">
                    <p>생년월일</p>
                    <div class="right">
                        <input type="tel" name="birthday" placeholder="8자리 숫자 입력">
                    </div>
                </div>
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
        <div class="login_box">
            <p><b>상담 정보 입력</b></p>
            <div class="label_contents">
                <div class="title">
                    <h2>로담한의원을 최초로 알게된 경로를 선택해주세요.</h2>
                    <span>(택1)</span>
                </div>
                <div class="contents contents50">
                    <label>
                        <input type="radio" name="contact" value="로담한의원 채널">
                        <span>로담한의원 채널(홈페이지, 유튜브, 블로그 등)</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="블로그 후기">
                        <span>블로그 후기</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="네이버 카페 후기">
                        <span>네이버 카페 후기</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="유튜브 후기">
                        <span>유튜브 후기</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="페이스북/인스타그램">
                        <span>페이스북/인스타그램</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="온라인 배너(이미지) 광고">
                        <span>온라인 배너(이미지) 광고</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="외부 간판">
                        <span>외부 간판</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="기타">
                        <span>기타</span>
                    </label>
                    <label>
                        <input type="radio" name="contact" value="지인 소개">
                        <span>지인 소개</span>
                    </label>
                    <input type="text" name="etc_contact" placeholder="기타 접한 경로">
                </div>
            </div>
            <div class="label_contents">
                <div class="title">
                    <h2>상담을 원하시는 진료 분야를 선택해주세요.</h2>
                    <span>(다중선택 가능)</span>
                </div>
                <div class="contents">
                    <label>
                        <input type="checkbox" name="consult[]" value="여드름 흉터">
                        <span>여드름 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="수두 흉터">
                        <span>수두 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="대상포진 흉터">
                        <span>대상포진 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="수술 흉터">
                        <span>수술 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="성형 흉터">
                        <span>성형 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="기타 패인 흉터">
                        <span>기타 패인 흉터</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="여드름">
                        <span>여드름</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="모공/탄력">
                        <span>모공/탄력</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="기타">
                        <span>기타</span>
                    </label>
                    <label>
                        <input type="checkbox" name="consult[]" value="다이어트">
                        <span>다이어트</span>
                    </label>
                    <label></label>
                    <input type="text" name="etc_consult" placeholder="기타 진료 분야">
                </div>
            </div>
            <div class="label_contents">
                <div class="title">
                    <h2>시술 결정시 가장 중요하게 생각하는 점을 선택해주세요.</h2>
                    <span>(택1)</span>
                </div>
                <div class="contents">
                    <label>
                        <input type="radio" name="important" value="병원의 인지도">
                        <span>병원의 인지도</span>
                    </label>
                    <label>
                        <input type="radio" name="important" value="주변 입소문">
                        <span>주변 입소문</span>
                    </label>
                    <label>
                        <input type="radio" name="important" value="기타">
                        <span>기타</span>
                    </label>
                    <label>
                        <input type="radio" name="important" value="시술 비용">
                        <span>시술 비용</span>
                    </label>
                    <label>
                        <input type="radio" name="important" value="시술 효과">
                        <span>시술 효과</span>
                    </label>
                    <input type="text" name="etc_important" placeholder="기타 의견">
                </div>
            </div>
        </div>
        <div class="bottom_btn" style="justify-content: center; gap: 10px;">
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
            <button>회원가입</button>
            <a href="javascript:window.history.back();" class="gray">취소</a>
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

    function user_chk(){
        var user = $("#user_id").val();
            $("#user_id").focus();
        if(user.length<5){
            alert("아이디는 최소 5글자 이상입니다.");
            $("#user_id").focus();
        } else {
            if(user==""){
                alert("아이디를 입력해주세요.");
            } else {
                $.ajax({
                    url:"chk_user.php",
                    type:"POST",
                    data:{user:user},
                    dataType:"JSON",
                    success:function(data){
                        $("#id_chk").css("display", "flex");
                        if(data=="true"){
                            $("#check_id").val("true");
                            $("#id_yes").css("display", "block");
                            $("#id_no").css("display", "none");
                        } else {
                            $("#check_id").val("false");
                            $("#id_no").css("display", "block");
                            $("#id_yes").css("display", "none");
                        }
                    }
                })
            }
        }
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
        if($("#check_id").val()!="true"){
            alert("아이디 중복체크를 해주세요.");
            $("#user_id").focus();
            stat="false";
        } else if($("#check_pw").val()!="true"){
            alert("비밀번호 중복체크를 해주세요.");
            $("#user_id").focus();
            stat="false";
        } else if($("#check_email").val()!="true"){
            alert("이메일 중복체크를 해주세요.");
            $("#user_id").focus();
            stat="false";
        } else if($("#check_tel").val()!="true"){
            alert("휴대전화번호 중복체크를 해주세요.");
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
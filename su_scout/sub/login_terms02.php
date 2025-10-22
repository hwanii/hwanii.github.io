<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <div class="login">
        <h2>이용약관</h2>
        <div class="login-terms">
            <div>
                <p>1</p>
                <span>약관동의</span>
            </div>
            <div class="on">
                <p>2</p>
                <span>정보입력</span>
            </div>
            <div>
                <p>3</p>
                <span>가입완료</span>
            </div>
        </div>
        <div class="line02"></div>
        <form method="POST" action="member.php" onsubmit="return form_chk()" target="ifrm">
        <div class="log-input">
            <div>
                <h3>아이디 *</h3>
                <input type="email" name="id" placeholder="이메일 주소" required>
            </div>
            <div>
                <h3>비밀번호 *</h3>
                <input type="password" id="pass" name="pass" placeholder="8~20자리 영문, 숫자, 특수문자" required>
            </div>
            <div>
                <h3>비밀번호 확인 *</h3>
                <input type="password" id="re_pass" name="re_pass" placeholder="비밀번호 확인을 위해 재입력 해주세요" required>
            </div>
            <div>
                <h3>이름 *</h3>
                <input type="text" name="name" required>
            </div>
            <div>
                <h3>연락처 *</h3>
                <div>
                    <input type="text" name="fTel" numberOnly required>-
                    <input type="text" name="mTel" numberOnly required>-
                    <input type="text" name="lTel" numberOnly required>
                </div>
            </div>
        </div>
        <div class="log-btn">
            <button type="button" onclick="location.href='../index.php'">취소</button>
            <button>개인정보 입력</button>
        </div>
        </form>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9]/g,""));
    });

    function form_chk(){
        if($("#pass").val()!=$("#re_pass").val()){
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        }
    }
</script>
</html>

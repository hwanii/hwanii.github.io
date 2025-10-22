<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="login">
        <h2>이용약관</h2>
        <div class="login-terms">
            <div class="on">
                <p>1</p>
                <span>약관동의</span>
            </div>
            <div>
                <p>2</p>
                <span>정보입력</span>
            </div>
            <div>
                <p>3</p>
                <span>가입완료</span>
            </div>
        </div>
        <div class="line01"></div>
        <form method="POST" action="login_terms02.php">
        <div class="contents">
            <h2>이용약관</h2>
            <div>
                제1조(목적)이 약관은 와우비엔비 회사(전자상거래 사업자)가 운영하는 와우비엔비 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련<br>
                서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리 의무 및 책임사항을 규정함을 목적으로 합니다.<br>
                <br>
                ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」<br>
                <br>
                제2조(정의)
                <br>
                ① “몰”이란 와우비엔비 회사가 재화 또는 용역(이하 “재화 등”이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화
                등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.<br>
                <br>
                ② “이용자”란 “몰”에 접속하여 이 약관에 따라 “몰”이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br>
                <br>
            </div>
            <label>
                <input type="checkbox" id="chk" required>
                <span>이용약관에 동의합니다.</span>
            </label>
        </div>
        <div class="contents">
            <h2>이용약관</h2>
            <div>
                와우비엔비(이하"회사라 합니다)은(는) 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을
                원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.<br>
                이용자는 본 개인정보 수집•이용 동의서에 따른 동의 시, '필요한 최소한의 정보 외의 개인정보' 수집•이용에 동의하지 않을 권리가 있습니다<br>
                회사는 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.<br><br>
                ○ 본 방침은부터 2020년 05월 01일부터 시행됩니다.<br>
                1. 개인정보의 처리 목적<br>
                가. 홈페이지 회원가입 및 관리<br>
                회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용<br>
                <br>
            </div>
            <label>
                <input type="checkbox" id="chk" required>
                <span>개인정보처리방침에 동의합니다.</span>
            </label>
            <label>
                <input type="checkbox" id="checkall">
                <span>전체 동의합니다.</span>
            </label>
        </div>
        <div class="log-btn">
            <button type="reset">취소</button>
            <button>다음 단계로</button>
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
    $("#checkall").click(function () {
        //클릭되었으면
        if ($("#checkall").prop("checked")) {
            $("input[id=chk]").prop("checked", true);
            //클릭이 안되있으면
        } else {
            $("input[id=chk]").prop("checked", false);
        }
    })
</script>
</html>

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
        <form method="POST" action="login_chk.php" target="ifrm">
        <div class="login-first">
            <h2>로그인</h2>
            <input type="text" id="id" name="id" placeholder="아이디" required>
            <input type="password" name="pass" placeholder="비밀번호" required>
            <label>
                <input type="checkbox" id="idsave">
                <span>아이디 저장</span>
            </label>
            <button>로그인 하기</button>
            <div>
                <a href="login_terms.php">회원가입</a>
                <a href="find_id.php">아이디·비밀번호 찾기</a>
            </div>
        </div>
        </form>
    </div>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
$(document).ready(function(){

    //저장된 쿠기값을 가져와서 id 칸에 넣어준다 없으면 공백으로 처리
    var key = getCookie("key");
    $("#id").val(key);

 if($("#id").val() !=""){               // 페이지 로딩시 입력 칸에 저장된 id가 표시된 상태라면 id저장하기를 체크 상태로 둔다
    $("#idsave").attr("checked", true); //id저장하기를 체크 상태로 둔다 (.attr()은 요소(element)의 속성(attribute)의 값을 가져오거나 속성을 추가합니다.)
    }

    $("#idsave").change(function(){ // 체크박스에 변화가 있다면,
        if($("#idsave").is(":checked")){ // ID 저장하기 체크했을 때,
            setCookie("key", $("#id").val(), 2); // 하루 동안 쿠키 보관
        }else{ // ID 저장하기 체크 해제 시,
            deleteCookie("key");
        }
    });

    // ID 저장하기를 체크한 상태에서 ID를 입력하는 경우, 이럴 때도 쿠키 저장.
    $("#id").keyup(function(){ // ID 입력 칸에 ID를 입력할 때,
        if($("#idsave").is(":checked")){ // ID 저장하기를 체크한 상태라면,
            setCookie("key", $("#id").val(), 2); // 7일 동안 쿠키 보관
        }
    });
});

//쿠키 함수 
function setCookie(cookieName, value, exdays){
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var cookieValue = escape(value) + ((exdays==null) ? "" : "; expires=" + exdate.toGMTString());
    document.cookie = cookieName + "=" + cookieValue;
}

function deleteCookie(cookieName){
    var expireDate = new Date();
    expireDate.setDate(expireDate.getDate() - 1);
    document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
}

function getCookie(cookieName) {
    cookieName = cookieName + '=';
    var cookieData = document.cookie;
    var start = cookieData.indexOf(cookieName);
    var cookieValue = '';
    if(start != -1){
        start += cookieName.length;
        var end = cookieData.indexOf(';', start);
        if(end == -1)end = cookieData.length;
        cookieValue = cookieData.substring(start, end);
    }
    return unescape(cookieValue);
}
</script>
</html>

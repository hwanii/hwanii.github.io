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
                <a href="find_ip.php">아이디·비밀번호 찾기</a>
            </div>
        </div>
        </form>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

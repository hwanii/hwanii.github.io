<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="sub_banner" style="background: url(../img/sub-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="inner"><img src="../img/sub-banner-txt.png"></div>
    </div>
    <div class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;문의하기</p>
        </div>
    </div>
    <section class="inquiry">
        <div class="inner">
            <div class="title_box">
                <h2>NSI 수요포럼3.0</h2>
                <p>문의 하기</p>
            </div>
            <form method="POST" action="counsel.php" target="ifrm">
            <div class="in_contents">
                <div class="contents">
                    <h2>이름</h2>
                    <input type="text" name="name" placeholder="작성자님 성함을 입력해주세요" required>
                </div>
                <div class="contents">
                    <h2>이메일</h2>
                    <input type="email" name="email" placeholder="이메일주소를 입력해주세요" required>
                </div>
                <div class="contents">
                    <h2>휴대폰 번호</h2>
                    <input type="tel" name="tel" placeholder="휴대폰 번호를 입력해주세요" required>
                </div>
                <div class="contents">
                    <h2>카테고리</h2>
                    <select name="cate" required>
                        <option value="">카테고리를 선택해주세요</option>
                        <option value="회원가입">회원가입</option>
                        <option value="협업 및 제안">협업 및 제안</option>
                        <option value="기타">기타</option>
                    </select>
                </div>
                <div class="contents">
                    <h2>문의 제목</h2>
                    <input type="text" name="title" placeholder="문의 제목을 입력해주세요" required>
                </div>
                <div class="contents">
                    <h2>문의 내용</h2>
                    <textarea name="contents" placeholder="문의 내용을 입력해주세요" required></textarea>
                </div>
                <p class="in_p">
                    답변은 입력하신 이메일로 발송됩니다.<br>
                    메일 수신이 안되는 경우 nsi21@nsi.or.kr 차단 여부 확인 또는 스팸 메일로 구분되었는지 확인바랍니다.
                </p>
                <div class="bottom">
                    <div class="left">
                        <label>
                            <input type="checkbox" required>
                            <span>사이트 이용약관 및 개인정보 취급방침에 동의합니다.</span>
                        </label>
                        <div>
                            <a href="javascript:void(0);">[ 사이트 이용약관 ]</a>
                            <a href="javascript:void(0);">[ 개인정보 취급방침 ]</a>
                        </div>
                    </div>
                    <button>작성 완료</button>
                </div>
            </div>
            </form>
        </div>
    </section>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

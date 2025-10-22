<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner05">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option value="../sub/notice.php">공지사항</option>
                <option selected value="../sub/estimate.php">견적요청</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>커뮤니티</li>
                <li>견적요청</li>
            </ul>
        </div>
    </section>
    <section class="estimate">
        <div class="contents_inner">
            <div class="sub_title">
                <h2>견적요청</h2>
            </div>
            <form method="POST" action="counsel.php" enctype="multipart/form-data" target="ifrm">
            <div class="contents">
                <div>
                    <h2>기업명</h2>
                    <input type="text" name="company" placeholder="기업명">
                </div>
                <div>
                    <h2>담당자명</h2>
                    <input type="text" name="name" placeholder="담당자명">
                </div>
                <div>
                    <h2>이메일</h2>
                    <input type="text" name="email" placeholder="이메일">
                </div>
                <div>
                    <h2>지역선택</h2>
                    <select name="area">
                        <option>지역을 선택해주세요</option>
                        <option value="당진">당진</option>
                        <option value="서산">서산</option>
                        <option value="화성">화성</option>
                    </select>
                </div>
                <div>
                    <h2>희망분야</h2>
                    <select name="hope">
                        <option value="">희망 분야를 선택해주세요</option>
                        <option value="운송">운송</option>
                        <option value="창고">창고</option>
                        <option value="수철업">수출업</option>
                    </select>
                </div>
                <div>
                    <h2>연락처</h2>
                    <input type="text" name="tel" placeholder="연락처">
                </div>
                <div>
                    <h2>파일첨부</h2>
                    <a href="javascript:document.querySelector('#file').click();" class="file_find">파일찾기</a>
                    <input type="file" name="file" id="file" onchange="change_file(this)" style="display:none">
                </div>
                <span id="sFile">50메가 이하 파일 1개만 업로드 가능합니다.</span>
                <div>
                    <div class="check-in">
                        <input type="checkbox" name="info" value="true" id="check1" required>
                        <label for="check1"></label>
                        <a href="javascript:void(0)" class="pri">개인정보수집에 동의체크 [보기]</a>
                    </div>
                    <button>작성완료</button>
                </div>
            </div>
            </form>
            <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
        </div>
    </section>
    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function change_file(obj) {
        var str = obj.value;
        var num = str.length;
        var i = str.lastIndexOf("\\");
        var index = str.substr(i + 1, num);
        document.getElementById('sFile').innerHTML = index;
    }
</script>
</html>

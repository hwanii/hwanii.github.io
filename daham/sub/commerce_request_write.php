<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="../img/main-logo01.png" alt="">
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;신청하기&nbsp;&nbsp;>&nbsp;&nbsp;전자상거래 신청</p>
        </div>
    </section>
    <section class="re_write">
        <form method="POST" action="commerce.php" enctype="multipart/form-data" target="ifrm">
        <div class="inner">
            <div class="title">
                <h2>신청하기</h2>
                <p>SERVICE REQUEST</p>
            </div>
            <div class="write_top">
                <div>
                    <p>작성자명</p>
                    <input type="text" name="name" placeholder="작성자명" required>
                </div>
                <div>
                    <p>비밀번호</p>
                    <input type="password" name="pass" maxlength="4" placeholder="숫자4개" required>
                </div>
                <div>
                    <p>이메일주소</p>
                    <input type="email" name="email" placeholder="이메일주소입력" required>
                </div>
            </div>
            <input type="text" name="title" placeholder="제목을 입력해주세요" required>
            <textarea name="contents" placeholder="내용을 입력해주세요" required></textarea>
            <div class="attached">
                <div>
                    <button type="button" onclick="document.querySelector('#file1').click();">파일 첨부 1</button>
                    <input type="file" name="file1" id="file1" onchange="change(this, '1')" style="display:none">
                    <p id="sFile1">첨부 파일 명 노출 영역</p>
                </div>
                <div>
                    <button type="button" onclick="document.querySelector('#file2').click();">파일 첨부 2</button>
                    <input type="file" name="file2" id="file2" onchange="change(this, '2')" style="display:none">
                    <p id="sFile2">첨부 파일 명 노출 영역</p>
                </div>
            </div>
            <button>신청하기</button>
        </div>
        </form>
        <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function change(obj, t) {
        var str = obj.value;
        var num = str.length;
        var i = str.lastIndexOf("\\");
        var index = str.substr(i + 1, num);
        document.getElementById('sFile'+t).innerHTML = index;
    }
</script>

</html>

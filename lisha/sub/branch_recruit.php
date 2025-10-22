<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 지부&nbsp;&nbsp;>&nbsp;&nbsp;지부 모집</span>
        </div>
    </section>
    <div class="sub_category" style="justify-content: center;">
        <a href="../sub/branch.php">지부 안내</a>
        <a href="../sub/branch_recruit.php" class="on">지부 모집</a>
    </div>
    <section class="recruit">
        <div class="inner">
            <h2><span>리샤필라테스와</span> 함께하실 분들을 모집합니다.</h2>
            <form method="POST" action="counsel.php" target="ifrm">
            <div class="input_contents">
                <div>
                    <h3>작성자명</h3>
                    <input type="text" name="name" placeholder="작성자명">
                </div>
                <div>
                    <h3>이메일</h3>
                    <input type="email" name="email" placeholder="이메일">
                </div>
                <div>
                    <h3>연락처</h3>
                    <input type="tel" name="tel" placeholder="연락처">
                </div>
                <div>
                    <h3>지역</h3>
                    <select id="sido" name="area">
                        <option>희망 지역 선택 (시도구군)</option>
                    </select>
                </div>
                <div>
                    <h3>신청종류</h3>
                    <select name="type">
                        <option value="지부 상담">지부 상담 신청</option>
                    </select>
                </div>
                <div class="submit_box">
                    <label>
                        <input type="checkbox" required>
                        <h4>개인정보수집 동의체크란</h4>
                    </label>
                    <button>작성완료</button>
                </div>
            </div>
            </form>
        </div>
        <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
        <div class="recruit_contents">
            <img src="../img/re01.png" alt="">
            <div class="txt_box">
                <span>리샤필라테스지점 / 지부 설명</span>
                <h2>국제리샤필라테스 교육기관은<br>교육을 연구하며<br><i>전문 강사양성을 배출 할 원장님을 모십니다.</i></h2>
                <p>필라테스 전문 지식을 업그레이드하고 싶은 원장님</p>
                <p>제대로 마인드와 수업을 진행하는 강사님을 구하기 어려운 원장님</p>
                <p>전문적인 필라테스 센터의 이미지를 만들고 싶은 원장님</p>
                <p>창업을 원하시는 원장님</p>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../js/hangjungdong.js"></script>
<script type="text/javascript" src="../js/sido.js"></script>

</html>

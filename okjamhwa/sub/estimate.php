<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    $header="customer";
    include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <img src="../img/banner-logo.png" alt="">
            <h2>당신이 먹기에, 더 안전하게</h2>
            <p>건강한 최상의 재료에서, 최고의 결과를 만들기 위해<br>옥잠화영농조합법인은 작은 수고도 마다하지 않겠습니다.</p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;고객센터&nbsp;&nbsp;&#62;&nbsp;&nbsp;견적 문의</p>
        </div>
    </section>
    <section class="estimate sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>고객센터</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/notice.php">공지사항</a>
                <a href="../sub/video.php">영상 게시판</a>
                <a href="../sub/gallery.php">사진 게시판</a>
                <a href="../sub/estimate.php" class="on">견적 문의</a>
                <a href="../sub/visit.php">견학 신청</a>
            </div>
            <a href="<?php echo $store?>" target="_blank" class="store flex_menu">
                <p>스토어 바로가기</p>
                <img src="../img/icon-shop.png" alt="스토어 바로가기">
            </a>
            <a href="../sub/estimate.php" class="ques flex_menu">
                <p>견적 문의</p>
                <img src="../img/icon-q.png" alt="견적 문의 바로가기">
            </a>
        </div>
        <div class="inner520">
            <h2>견적 문의</h2>
            <p>옥잠화영농조합법인과 함께하세요</p>
            <form method="POST" action="counsel.php" target="ifrm">
            <div class="estimate_contents">
                <div>
                    <h2>작성자명</h2>
                    <input type="text" name="name" placeholder="담당자명" required>
                </div>
                <div>
                    <h2>이메일</h2>
                    <input type="email" name="email" placeholder="이메일" required>
                </div>
                <div>
                    <h2>연락처</h2>
                    <input type="tel" name="tel" placeholder="연락처" required>
                </div>
                <div>
                    <h2>문의종류</h2>
                    <select name="type" required>
                        <option value="">선택</option>
                        <option value="OEM 잼">OEM 잼</option>
                        <option value="OEM 쥬스">OEM 쥬스</option>
                        <option value="OEM 전통차">OEM 전통차</option>
                    </select>
                </div>
                <div>
                    <h2>희망수량</h2>
                    <select name="count">
                        <option value="1,000 ~ 2,000">1,000 ~ 2,000</option>
                    </select>
                </div>
            </div>
            <div class="bottom_btn">
                <label class="chk1">
                    <input type="checkbox" required>
                    <span for="chk1">개인정보수집 동의</span>
                </label>
                <button>작성완료</button>
            </div>
            </form>
        </div>
    </section>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

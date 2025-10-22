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
    $header="intro";
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
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;회사소개&nbsp;&nbsp;&#62;&nbsp;&nbsp;조직도</p>
        </div>
    </section>
    <section class="organization sub_page">
        <div class="left_fix_menu">
            <div class="top_img">
                <img src="../img/w-logo01.png" alt="옥잠화 로고">
            </div>
            <div class="gnb_menu_name flex_menu">
                <p>회사소개</p>
                <span></span>
            </div>
            <div class="sub_gnb_menu">
                <a href="../sub/introduce.php">인사말</a>
                <a href="../sub/organization.php" class="on">조직도</a>
                <a href="../sub/history.php">연혁</a>
                <a href="../sub/vision.php">비전</a>
                <a href="../sub/certification.php">인증서</a>
                <a href="../sub/map.php">오시는 길</a>
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
        <div class="inner900">
            <h2>조직도</h2>
            <!-- <div class="orga_table">
                <div class="ceo">
                    <h2>사장</h2>
                    <p>홍길동</p>
                </div>
                <div class="vice">
                    <h2>부사장</h2>
                    <p>홍길동</p>
                </div>
                <p class="horizontal_line"></p>
                <div class="staff">
                    <ul>
                        <li>
                            <p>생산팀</p>
                            <p>홍길동</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>생산팀</p>
                            <p>홍길동</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>생산팀</p>
                            <p>홍길동</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>생산팀</p>
                            <p>홍길동</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>생산팀</p>
                            <p>홍길동</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="orga_chart">
                <div class="head">
                    <h2>조합원 총회</h2>
                </div>
                <div class="audit">
                    <div class="contents" style="opacity: 0;">
                        <h2></h2>
                    </div>
                    <div class="lline" style="opacity: 0;"></div>
                    <div class="line"></div>
                    <div class="lline"></div>
                    <div class="contents">
                        <h2>감 사</h2>
                    </div>
                </div>
                <div class="board_direct">
                    <h2>이 사 회</h2>
                </div>
                <div class="orga_line">
                    <div class="vertical_line"></div>
                    <div class="horizontal_line"></div>
                </div>
                <div class="bottom_chart">
                    <div class="left bot_contents">
                        <div class="top"><p>생 산</p></div>
                        <ul>
                            <li><p>잼 라인</p></li>
                            <li><p>음료 라인</p></li>
                        </ul>
                    </div>
                    <div class="right bot_contents">
                        <div class="top"><p>경영지원</p></div>
                        <ul>
                            <li><p>품질 관리</p></li>
                            <li><p>회 계</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

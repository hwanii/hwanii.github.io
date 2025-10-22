<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_intro.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>인사말</h2>
            <p>
                GLOBALEP(E-COMMERCE PARTNER)의<br>공식 홈페이지에 방문하신것을 환영합니다!
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>GLOBAL EP</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>인사말</h2>
        </div>
    </section>
    <section class="intro">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <?php
                $sql="SELECT * FROM greeting";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $contents=$row['contents'];
                ?>
                <img src="../img/v-logo.png">
                <h2>FROM KOREA TO GLOBAL</h2>
                <?php echo $contents?>
            </div>
            <div class="intro_img" data-aos="fade-up">
                <img src="../img/intro01.png">
                <img src="../img/intro02.png">
                <img src="../img/intro03.png">
            </div>
            <div class="solution" data-aos="fade-up">
                <h2>SOLUTION</h2>
                <div class="solution_box">
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/solu01.png">
                        <div class="txt_box">
                            <h2>01</h2>
                            <h3>모든 제품 라이센스 등록 및 초기 기초 세팅</h3>
                            <p>운영전략, 포커스 제품 선정 등 시장 및 경쟁사 조사를<br>
                                통한 초기 계획</p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/solu02.png">
                        <div class="txt_box">
                            <h2>02</h2>
                            <h3>행사 및 이벤트</h3>
                            <p>초기에 협업 가능한 경우 그랜드 오프닝을 통한<br>
                                노이즈 마케팅 및 시장 진출. 행사를 통한 신규 고객 유치</p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/solu03.png">
                        <div class="txt_box">
                            <h2>03</h2>
                            <h3>다양한 마케팅</h3>
                            <p>인플루언서 마케팅, 페북, 틱톡.인스타 등 광고<br>
                                로컬 샵 입점 및 홍보 오피셜 온 오프라인 입점</p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/solu04.png">
                        <div class="txt_box">
                            <h2>04</h2>
                            <h3>B2B / B2C 관리</h3>
                            <p>B2B를 꾸준히 관리를 함으로써 시장가를 장기적으로<br>
                                유지하며, 브랜드의 가치도 높임.</p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/solu05.png">
                        <div class="txt_box">
                            <h2>05</h2>
                            <h3>크로스 보딩 협업</h3>
                            <p>현지 물류 및 칭고를 통한 3PL 가능<br>
                                제품 보관 부터 관리, 포장 및 배송 풀필먼트 대행 가능</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>

    <section class="sub-banner01">
        <div class="img"></div>
        <div class="bg"></div>
        <div class="txt">
            <h2>조직도</h2>
            <p>Company Organization</p>
        </div>
    </section>

    <section class="menu-flow">
        <ul data-aos="fade-right">
            <li>HOME</li>
            <li>회사소개</li>
            <li>조직도</li>
        </ul>
    </section>

    <section class="click-menu-intro">
        <ul data-aos="fade-up">
            <li><a href="../sub/introduce.php">회사소개</a></li>
            <li><a href="../sub/history.php">연혁</a></li>
            <li class="active"><a href="../sub/organization.php">조직도</a></li>
            <li><a href="../sub/map-01.php">오시는 길</a></li>
        </ul>
    </section>

    <section class="diagram-pc" data-aos="fade-up">
        <h2>조직도</h2>
        <p>Company Organization</p>
        <div class="inner" data-aos="fade-right">
            <div class="box-con01">대표이사</div>
            <div class="boxes">
                <div class="box-con02">경영지원팀</div>
                <ul>
                    <li>인사</li>
                    <li>재무</li>
                    <li>총무</li>
                    <li>영업관리</li>
                </ul>
            </div>
            <div class="boxes">
                <div class="box-con02">기술지원팀</div>
                <ul>
                    <li>설계</li>
                    <li>품질관리</li>
                    <li>A/S 센터</li>
                    <li class="none"></li>
                </ul>
            </div>
            <div class="boxes">
                <div class="box-con02">생산관리팀</div>
                <ul>
                    <li>생산</li>
                    <li>구매</li>
                    <li>자재</li>
                    <li class="none"></li>
                </ul>
            </div>
            <div class="boxes">
                <div class="box-con02">부설연구소</div>
                <ul>
                    <li>태양광</li>
                    <li>구조물</li>
                    <li>연구과제</li>
                    <li class="none"></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="diagram-mobile">
        <h2>조직도</h2>
        <p>Company Organization</p>
        <div class="inner">
            <div class="box-con01">대표이사</div>
            <div class="float">
                <div class="boxes">
                    <div class="box-con02">경영지원팀</div>
                    <ul>
                        <li>인사</li>
                        <li>재무</li>
                        <li>총무</li>
                        <li>영업관리</li>
                    </ul>
                </div>
                <div class="boxes">
                    <div class="box-con02">기술지원팀</div>
                    <ul>
                        <li>설계</li>
                        <li>품질관리</li>
                        <li>A/S 센터</li>
                    </ul>
                </div>
                <div class="boxes">
                    <div class="box-con02">생산관리팀</div>
                    <ul>
                        <li>생산</li>
                        <li>구매</li>
                        <li>자재</li>
                    </ul>
                </div>
                <div class="boxes">
                    <div class="box-con02">부설연구소</div>
                    <ul>
                        <li>태양광</li>
                        <li>구조물</li>
                        <li>연구과제</li>
                    </ul>
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
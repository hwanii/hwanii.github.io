<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>

    <div class="main-banner">
        <div id="main-wrap">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $sql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)) {
                        $slide=$row['background'];
                        $title=$row['title'];
                        $contents=$row['contents'];
                        $link=$row['link'];
                    ?>
                    <div class="swiper-slide main-bg01" style="background: url('admin/img/background/<?php echo $slide?>') no-repeat center/cover;">
                        <div class="slide-bg"></div>
                        <div class="txt">
                            <h2><?php echo nl2br($title)?></h2>
                            <p><?php echo $contents?></p>
                            <div><a href="<?php echo $link?>">MORE READ</a></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-btn-prev"><img src="img/left-arrow.png" alt=""></div>
            <div class="swiper-btn-next"><img src="img/right-arrow.png" alt=""></div>
        </div>
    </div>

    <section class="area" data-aos="fade-up">
        <h2>BUSINESS AREA</h2>
        <p>GNP의 사업 분야 바로가기</p>
        <div class="inner">
            <div data-aos="fade-up">
                <a href="sub/sun-01.php">
                    <img src="img/area01.jpg" alt="">
                    <div>
                        <h3>SOLAR POWER<br>SYSTEM</h3>
                        <span>신재생 에너지! 태양광 시스템의 선두주자 GNP</span>
                    </div>
                </a>
            </div>
            <div data-aos="fade-up">
                <a href="sub/shield.php">
                    <img src="img/area02.jpg" alt="">
                    <div>
                        <h3>MEMBRANE<br>STRUCTURE</h3>
                        <span>안정적인 막구조물 구축 및 제작 시스템 GNP</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="about" data-aos="fade-up">
        <h2>ABOUT GNP</h2>
        <p>GNP를 여러분께 소개합니다.</p>
        <div class="inner">
            <div class="about-con">
                <a href="sub/introduce.php" class="about-link">
                    <img src="img/about01.jpg" alt="">
                    <div class="bg01"></div>
                    <div class="txt">
                        <p>COMPANY</p>
                        <h2>회사소개</h2>
                        <span>
                            &#40;주&#41;지엔피는 고객님들께 사랑받고<br>
                            신뢰받는 기업이 되도록 노력하겠습니다.
                        </span>
                    </div>
                    <div class="plus-btn"><img src="img/plus.png" alt=""></div>
                </a>
            </div>
            <div>
                <a href="sub/history.php" class="about-link">
                    <img src="img/about02.jpg" alt="">
                    <div class="bg02"></div>
                    <div class="txt">
                        <p>HISTORY</p>
                        <h2>연혁</h2>
                        <span>
                            &#40;주&#41;지엔피가 걸어온 길을<br>
                            여러분께 소개 합니다.
                        </span>
                    </div>
                    <div class="plus-btn"><img src="img/plus.png" alt=""></div>
                </a>
            </div>
            <div>
                <a href="sub/organization.php" class="about-link">
                    <img src="img/about03.jpg" alt="">
                    <div class="bg02"></div>
                    <div class="txt">
                        <p>ORGANIZATION</p>
                        <h2>조직도</h2>
                        <span>
                            튼튼한 조직을 바탕으로<br>
                            하나되어 사업을 운영하고 있습니다.
                        </span>
                    </div>
                    <div class="plus-btn"><img src="img/plus.png" alt=""></div>
                </a>
            </div>
            <div>
                <a href="sub/map-01.php" class="about-link">
                    <img src="img/about04.jpg" alt="">
                    <div class="bg01"></div>
                    <div class="txt">
                        <p>CONTACT US</p>
                        <h2>오시는 길</h2>
                        <span>
                            (주)지엔피에 찾아오시는 방법을<br>
                            알려드립니다.
                        </span>
                    </div>
                    <div class="plus-btn"><img src="img/plus.png" alt=""></div>
                </a>
            </div>
        </div>
    </section>

    <section class="reference" data-aos="fade-up">
        <h2>REFERENCE</h2>
        <p>GNP의 다양한 설치 성공 사례</p>
        <div class="inner">
            <div class="left" data-aos="fade-up">
                <h3>태양광 발전사업</h3>
                <div class="more-btn"><a href="sub/result-02.php">+ 더 읽기</a></div>
                <div class="left-box">
                    <?php
                    $sSql="SELECT * FROM bo_sun ORDER BY num DESC LIMIT 6";
                    $sRes=mysqli_query($conn, $sSql);
                    while($sRow=mysqli_fetch_array($sRes)){
                        $sTitle=$sRow['title'];
                        $sSub=$sRow['sub_title'];
                        $sThumb=$sRow['thumbnail'];
                        $sNum=$sRow['num'];
                    ?>
                    <div class="left-con">
                        <a href="sub/result-02-detail.php?num=<?php echo $sNum?>">
                            <img src="img/file/sun/thumb/<?php echo $sThumb?>" alt="">
                            <div>
                                <h4><?php echo $sTitle?></h4>
                                <span><?php echo $sSub?></span>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="line" data-aos="fade-up"></div>
            <div class="right" data-aos="fade-up">
                <h3>막구조물</h3>
                <div class="more-btn"><a href="sub/result-03.php">+ 더 읽기</a></div>
                <div class="right-box">
                    <?php
                    $rSql="SELECT * FROM bo_shield ORDER BY num DESC LIMIT 6";
                    $rRes=mysqli_query($conn, $rSql);
                    while($rRow=mysqli_fetch_array($rRes)){
                        $rTitle=$rRow['title'];
                        $rSub=$rRow['sub_title'];
                        $rThumb=$rRow['thumbnail'];
                        $rNum=$rRow['num'];
                    ?>
                    <div class="right-con">
                        <a href="sub/result-03-detail.php?num=<?php echo $rNum?>">
                            <img src="img/file/shield/thumb/<?php echo $rThumb?>" alt="">
                            <div>
                                <h4><?php echo $rTitle?></h4>
                                <span><?php echo $rSub?></span>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="contact">
        <div class="inner">
            <h2>CONTACT US</h2>
            <p>GNP에 연락하시는 방법</p>
            <span>
                (주)지엔피에 의뢰할 프로젝트가 있거나 필요한 서비스가 있다면 아래 항목을 작성해주세요.<br>
                해당 담당자가 문의 사항을 읽고 연락 드리겠습니다.
            </span>
            <div class="form">
                <div class="subject">
                    <input type="text" placeholder="문의유형 선택해주세요.">
                </div>
                <div class="name">
                    <input type="text" placeholder="이름(필수입력)">
                </div>
                <div class="tel">
                    <input type="tel" placeholder="전화번호(필수입력)">
                    -<input type="tel">
                    -<input type="tel">
                </div>
                <div class="email">
                    <input type="email" placeholder="이메일(필수입력)">
                    @<input type="email">
                </div>
                <div class="title">
                    <input type="text" placeholder="제목(필수입력)">
                </div>
                <textarea placeholder="내용을 입력하세요."></textarea>
                <div class="inquire">
                    <div>
                        <input type="checkbox">
                        <a href="#">홈페이지의 개인정보처리방침에 동의합니다. &#91;보기&#93;</a>
                    </div>
                    <button>문의하기</button>
                </div>
            </div>
        </div>
    </section> -->

    <?php include 'footer.php';?>

</body>

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

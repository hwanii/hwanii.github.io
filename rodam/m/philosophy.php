<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/m-sub.css">
</head>

<body>
    <?php include 'header.php';?>
    <?php
    $bnSql="SELECT * FROM mobile_sub_banner";
    $bnRes=mysqli_query($conn, $bnSql);
    $bnRow=mysqli_fetch_array($bnRes);
    ?>
    <section class="sub_banner" style="background: url('../admin/img/mobile_sub_banner/<?php echo $bnRow['file10']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>진료철학</h2>
            <p>PHILOSOPHY</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="../img/menu-flow.png">
            <h2>새살침 코라테라피</h2>
            <img src="../img/menu-flow.png">
            <h2>진료철학</h2>
        </div>
    </div>
    <section class="intro philo">
        <div class="inner">
            <div class="sub_title orange_title" style="margin-bottom: 0;" data-aos="fade-up">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>로담의 진료 철학</p>
            </div>
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM PEOPLE</h2>
                </div>
                <p>로담한의원 원장들의 진료 철학</p>
            </div>
            <div class="rodam_philo">
                <div class="contents" data-aos="fade-up">
                    <img src="../img/cora-you01.png">
                    <div class="blank_box">
                        <div class="left"></div>
                        <div class="txt_box">
                            <p>
                                회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                새살침 코라테라피의 흉터치료에<br>
                                큰 매력을 느꼈습니다.
                            </p>
                            <h2>
                                환자분들과의 소통을 통해<br>
                                더 나은 결과를 만들어갑니다.
                            </h2>
                            <span>로담한의원 강남점 정동빈원장</span>
                        </div>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/cora-you01.png">
                    <div class="blank_box">
                        <div class="left"></div>
                        <div class="txt_box">
                            <p>
                                회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                새살침 코라테라피의 흉터치료에<br>
                                큰 매력을 느꼈습니다.
                            </p>
                            <h2>
                                환자분들과의 소통을 통해<br>
                                더 나은 결과를 만들어갑니다.
                            </h2>
                            <span>로담한의원 강남점 정동빈원장</span>
                        </div>
                    </div>
                </div>
                <div class="contents" data-aos="fade-up">
                    <img src="../img/cora-you01.png">
                    <div class="blank_box">
                        <div class="left"></div>
                        <div class="txt_box">
                            <p>
                                회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                새살침 코라테라피의 흉터치료에<br>
                                큰 매력을 느꼈습니다.
                            </p>
                            <h2>
                                환자분들과의 소통을 통해<br>
                                더 나은 결과를 만들어갑니다.
                            </h2>
                            <span>로담한의원 강남점 정동빈원장</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rodam_slide_box" data-aos="fade-up">
                <div class="swiper-container rodam_slide">
                    <div class="swiper-wrapper">
                        <a href="javascript:void(0);" class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <div class="blank_box">
                                <div class="left"></div>
                                <div class="txt_box">
                                    <p>
                                        회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                        환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                        새살침 코라테라피의 흉터치료에<br>
                                        큰 매력을 느꼈습니다.
                                    </p>
                                    <h2>
                                        환자분들과의 소통을 통해<br>
                                        더 나은 결과를 만들어갑니다.
                                    </h2>
                                    <span>로담한의원 강남점 정동빈원장</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <div class="blank_box">
                                <div class="left"></div>
                                <div class="txt_box">
                                    <p>
                                        회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                        환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                        새살침 코라테라피의 흉터치료에<br>
                                        큰 매력을 느꼈습니다.
                                    </p>
                                    <h2>
                                        환자분들과의 소통을 통해<br>
                                        더 나은 결과를 만들어갑니다.
                                    </h2>
                                    <span>로담한의원 강남점 정동빈원장</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <div class="blank_box">
                                <div class="left"></div>
                                <div class="txt_box">
                                    <p>
                                        회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                        환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                        새살침 코라테라피의 흉터치료에<br>
                                        큰 매력을 느꼈습니다.
                                    </p>
                                    <h2>
                                        환자분들과의 소통을 통해<br>
                                        더 나은 결과를 만들어갑니다.
                                    </h2>
                                    <span>로담한의원 강남점 정동빈원장</span>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <div class="blank_box">
                                <div class="left"></div>
                                <div class="txt_box">
                                    <p>
                                        회차마다 달라지는 모습을 제가 직접 느끼고<br>
                                        환자분들의 만족도도 더욱 직접적으로 다가오는<br>
                                        새살침 코라테라피의 흉터치료에<br>
                                        큰 매력을 느꼈습니다.
                                    </p>
                                    <h2>
                                        환자분들과의 소통을 통해<br>
                                        더 나은 결과를 만들어갑니다.
                                    </h2>
                                    <span>로담한의원 강남점 정동빈원장</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <img src="../img/slide-prev.png" class="you_prev">
                    <img src="../img/slide-next.png" class="you_next">
                </div>
                <div class="swiper-container rodam_slide01">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <p>로담한의원 강남점 정동빈원장</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <p>로담한의원 강남점 정동빈원장</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <p>로담한의원 강남점 정동빈원장</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/cora-you01.png">
                            <p>로담한의원 강남점 정동빈원장</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="founder">
        <div class="inner">
            <div class="top_txt">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM FOUNDER</h2>
                </div>
                <p>새살침 코라테라피 개발자<br>홍무석원장과의 영상 인터뷰</p>
            </div>
            <div class="founder_box">
                <div>
                    <iframe src="https://www.youtube.com/embed/NLrrNVjZRHA?si=ieaBezfZk1gMKIsD&amp;controls=0&autoplay=1&mute=1&modestbranding=1&playlist=NLrrNVjZRHA&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <p class="founder_p">“타 병원에서 흉터치료법 ‘새살침’이라고 동일하게 표현하지만, 로담한의원 코라테라피의 절개침과 교차침법과 동일한 치료 방법이 아닙니다.</p>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/cocoen/dist/cocoen.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="../js/jquery.ui.touch-punch.min.js"></script>
<script src="../js/m-script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var subB = $(".sub_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var intro = $(".intro").innerHeight();
            var cora_youtube = $(".cora_youtube").innerHeight();
            var histroy01 = $(".histroy01").innerHeight();
            var skin01 = $(".skin01").innerHeight();
            var treat_work = $(".treat_work").innerHeight();
            var scar_contents = $(".scar_contents").innerHeight();
            var skin02 = $(".skin02").innerHeight();
            var custom_treat = $(".custom_treat").innerHeight();
            var survey = $(".survey").innerHeight();
            var watch = $(".watch").innerHeight();
            var faq = $(".faq").innerHeight();
            var totalHeight = subB + menu_flow + intro + cora_youtube + histroy01 + skin01 + treat_work + scar_contents + skin02 + custom_treat + survey + watch + faq;

            console.log();

            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "fixed",
                });
            };
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/sub.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php
    $bnSql="SELECT * FROM pc_sub_banner";
    $bnRes=mysqli_query($conn, $bnSql);
    $bnRow=mysqli_fetch_array($bnRes);
    ?>
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file7']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>다이어트</h2>
            <p>RODAM DIET</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>다이어트</h2>
        </div>
    </div>
    <section class="diet">
        <div class="inner">
            <div class="title" data-aos="fade-up">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>채비톡 다이어트 소개</p>
            </div>
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>introducing</h2>
                </div>
                <p>로담<b>채비톡</b> 코칭 다이어트</p>
            </div>
            <div class="diet_contents">
                <div class="contents" data-aos="fade-up">
                    <p>특허공정제재<br>다이어트환약</p>
                    <h2>[ 채비톡 ]</h2>
                </div>
                <div class="contents" data-aos="fade-up" data-aos-delay="150">
                    <p>발효농축환약<br>간과 장 해독</p>
                    <h2>[ 정화환 ]</h2>
                </div>
                <div class="contents" data-aos="fade-up" data-aos-delay="300">
                    <p>식약청<br>건강기능성식품<br>체중 조절용 영양식</p>
                    <h2>[ 로담 한끼 ]</h2>
                </div>
            </div>
            <div class="detail_txt" data-aos="fade-up">
                <p>라이프 스타일에 맞춘 <b>현실적인 다이어트 습관교정으로<br> 목표한 체중 감량도 도달 후</b> 스스로 건강하게 다이어트 상태 유지</p>
                <span class="cover_txt">
                    <i>카카오톡으로</i> 매일 식사 내용을 공유하고<br>
                    <i>효과적인 식이요법과 운동요법을</i> 코칭해드립니다.
                </span>
            </div>
        </div>
    </section>
    <?php 
    $page="sub08";
    include 'watch.php';?>
    <section class="diet01">
        <div class="inner">
            <div class="diet_title" data-aos="fade-up">
                <h2 class="title_circle">1</h2>
                <p>다이어트 한약 <b>"채비톡"</b> 소개</p>
            </div>
            <p class="big_title" data-aos="fade-up">
                건강은 <b>채</b>우고<br>
                지방은 <b>비</b>운다
            </p>
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>채비톡 상세 소개 01</h2>
                </div>
                <p>쓰고, 무겁고, 관리하기 힘든 다이어트 한약?</p>
                <h4>로담 한의원 슬림 채비톡은<br>가볍다! 편리하다! 먹기쉽다!</h4>
                <i>채비톡은 어떠한 인공색소도 넣지 않았으며,<br>천연부연재로 알갱이 환으로 조제 하였습니다.</i> 
            </div>
            <img src="img/diet-contents01.png" class="diet_contents_img mb80" data-aos="fade-up">
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>채비톡 상세 소개 02</h2>
                </div>
                <p>쓰고, 무겁고, 관리하기 힘든 다이어트 한약?</p>
                <h4>비만도와 목표 체중 감량<br>일정에 따라 일일 2~3회 복용</h4>
            </div>
            <img src="img/diet-box01.png" class="diet_contents_img" data-aos="fade-up">
        </div>
    </section>
    <section class="diet02">
        <div class="inner">
            <div class="diet_title" data-aos="fade-up">
                <h2 class="title_circle">2</h2>
                <p>다이어트 기간 중 독소배출 한약<b>"정화환"</b> 소개</p>
            </div>
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>정화환 상세 소개 01</h2>
                </div>
                <p>다이어트 중에 더 많은 독소가<br><b>생기는 걸 알고 계시나요?</b></p>
                <i>
                    백색 식품과 가공 식품에 길들여진 우리 몸은 이미 독소로 오염되어 있습니다.<br>
                    뿐만 아니라, 불규칙한 식사시간과 불규칙하고 부족한 수면 시간으로 인해<br>
                    신체의 정화 능력은 바닥으로 떨어져 있습니다.<br>
                    <br>
                    이런 상태에서 다이어트를 시작하면 우리 몸에 더 많은 독소가 발생하게 되며<br>
                    특히, 우리 몸에서 해독과 배출을 담당하는 장기인<br>
                    간, 신장, 장 기능은 더욱 저하될 수 밖에 없습니다.
                </i>
            </div>
            <img src="img/diet-contents0002.png" class="diet_contents_img mb80" data-aos="fade-up">
            <p class="diet_bottom_txt cover_txt" data-aos="fade-up">
                로담 정화한은 간, 장, 신장 기능을 개선하여<br>
                다이어트 기간 중에 발생하는 <i>체내 독소의 체외 배출을 적극적으로</i> 도와<br>
                다이어트 정체기를 빠르게 해소하고<br>
                <i>체지방 분해와 체지방 배출 효과를 극대화</i> 합니다.
            </p>
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>정화환 상세 소개 02</h2>
                </div>
                <p>독소 배출 한약 "정화환" 중요 기능</p>
                <h4>생활 습관 및 간, 장 기능에 따라<br>일일 1~2회 복용</h4>
            </div>
            <img src="img/diet-box02.png" class="diet_contents_img" data-aos="fade-up">
        </div>
    </section>
    <section class="diet03">
        <div class="inner">
            <div class="diet_title" data-aos="fade-up">
                <h2 class="title_circle">3</h2>
                <p>체중 조절용 조제식품<b>"로담한끼"</b></p>
            </div>
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>로담한끼 상세 소개 01</h2>
                </div>
                <p>로담이 다이어트 관리에 효과적인 영양식<br><b>"로담한끼"를 직접 만들었습니다.</b></p>
                <h5>이제 굶지 마시고 영양을 챙기세요!</h5>
                <i>식품의약품 안전처기준, 규격에 따른 체중조절용 건강기능성 식품<br>한포 40g, 17종의 비타민, 미네랄 17종 필수</i>
            </div>
            <img src="img/diet-contents0003.png" class="diet_contents_img mb80" data-aos="fade-up">
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i> 
                    <h2>로담한끼 상세 소개 02</h2>
                </div>
                <h5 style="margin: 0;">체중 조절용 조제 식품이란?</h5>
                <i>
                    체중의 감소 또는 증가가 필요한 사람을 위해<br>
                    식사의 일부 또는 전부를 대신할 수 있도록 필요한 성분을 가감하여 조제된 식품입니다.<br>
                    체중 조절용 조제 식품은 한 끼 식사의 전부 또는 일부를 대신하기 위하여,<br>
                    1회 섭취시 비타민 A, B1, B6, C, 나이아신, 엽산, 비타민E, 영양성분 기준치의 25% 이상,<br>
                    단백질, 칼슘, 철 및 아연을 영양 성분 기준치 10% 이상이 되도록<br>
                    원료 식품을 조합하고 영양소를 첨가해야 합니다.
                </i>
            </div>
            <img src="img/diet-box03.png" class="diet_contents_img" data-aos="fade-up">
        </div>
    </section>
    <section class="diet04">
        <div class="inner">
            <div class="diet_title">
                <h2 class="title_circle">4</h2>
                <p>목적별 다이어트 프로그램</p>
            </div>
            <div class="top_txt diet_txt_box">
                <div class="t_top_c">
                    <i></i>
                    <h2>로담 다이어트 프로그램 소개</h2>
                </div>
            </div>
            <div class="box6">
                <div class="contents">
                    <div class="top"><h2>폭풍 감량 다이어트</h2></div>
                    <div class="bot"><p>
                        취업, 오디션, 결혼 등 중요한 개인사를<br>
                        앞두고 있을 때 건강을 최대한 보존하면서<br>
                        목표 기간 내 체중 감량을 실현해야 할 때
                    </p></div>
                </div>
                <div class="contents">
                    <div class="top"><h2>유전자 다이어트</h2></div>
                    <div class="bot"><p>
                        요요 부작용으로 체중 감량이 잘 되지 않거나<br>
                        계속적으로 체중이 늘어나서 유전자 분석으로<br>
                        다이어트 터닝포인트가 필요할 때
                    </p></div>
                </div>
                <div class="contents">
                    <div class="top"><h2>임신 준비 다이어트</h2></div>
                    <div class="bot"><p>임신을 위해 다이어트가 필요할 때</p></div>
                </div>
                <div class="contents">
                    <div class="top"><h2>갑상선 다이어트</h2></div>
                    <div class="bot"><p>
                        갑상선 증후군, 부신 피로 증후군으로 인해<br>
                        체중 감량이 쉽지 않을 때
                    </p></div>
                </div>
                <div class="contents">
                    <div class="top"><h2>꽃중년 다이어트</h2></div>
                    <div class="bot"><p>
                        복부비만, 대사증후군, 고혈압이 있을 경우<br>
                        활력을 잃지 않으면서 체중 감량이 필요할 때
                    </p></div>
                </div>
                <div class="contents">
                    <div class="top"><h2>갱년기 다이어트</h2></div>
                    <div class="bot"><p>
                        폐경기 전후로 갱년기 증후군이면서<br>
                        무력감, 만성피로에 시달리며 체중 감량과<br>
                        생기가 필요할 때
                    </p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="inner">
            <div class="title">
                <h2>F A Q</h2>
                <div class="title_line"></div>
                <p>다이어트 자주 묻는 질문들 입니다.</p>
            </div>
            <div class="faq_contents">
                <?php
                $fSql="SELECT * FROM sub_faq WHERE `page`='sub08'";
                $fRes=mysqli_query($conn, $fSql);
                $fNo=1;
                while($fRow=mysqli_fetch_array($fRes)){
                    $fTitle=$fRow['title'];
                    $fContents=$fRow['contents'];
                ?>
                <ul>
                    <li>
                        <h2><?php echo sprintf('%02d',$fNo++);?></h2>
                        <p><?php echo $fTitle?></p>
                    </li>
                    <li>
                        <?php echo nl2br($fContents)?>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/cocoen/dist/cocoen.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/sub.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var subB = $(".sub_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var diet = $(".diet").innerHeight();
            var watch = $(".watch").innerHeight();
            var diet01 = $(".diet01").innerHeight();
            var diet02 = $(".diet02").innerHeight();
            var diet03 = $(".diet03").innerHeight();
            var diet04 = $(".diet04").innerHeight();
            var faq = $(".faq").innerHeight();
            var totalHeight = subB + menu_flow + diet + watch + diet01 + diet02 + diet03 + diet04 + faq;

            console.log();

            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
                $(".right_fix").css({
                    "bottom" : "280px"
                });
                $(".top_btn").css({
                    "position" : "absolute",
                    "top" : "-40px",
                    "bottom" : "auto"
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
                $(".right_fix").css({
                    "bottom" : "60px"
                });
                $(".top_btn").css({
                    "position" : "fixed",
                    "top" : "auto",
                    "bottom" : "60px"
                });
            };
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>
<?php
function get_youtube_thumbnail($url)
{
    $video_id = explode("?v=", $url);
    $video_id = explode("&", $video_id[1]);
    $video_id = $video_id[0];

    $thumbnail = "http://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";

    return $thumbnail;
}
?>
</html>

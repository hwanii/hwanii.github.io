<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
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
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file4']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>기타 얼굴 패인 흉터</h2>
            <p>CORA THERAPY</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>기타 얼굴 패인 흉터</h2>
        </div>
    </div>
    <section class="intro">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>진료 과목 소개</p>
            </div>
            <?php
            $sql="SELECT * FROM sub_etc_scar WHERE cate='introducing'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="intro_contents">
                <div class="contents">
                    <div class="left" data-aos="fade-left">
                        <div class="t_top_c">
                            <i></i>
                            <h2>INTRODUCING</h2>
                        </div>
                        <p style="letter-spacing: -2px;">얼굴 패인 흉터의 가장 큰 특징<br> <b>오래되거나 언제 생겼는지<br>모른다는 점</b></p>
                        <span>
                            얼굴 패인 흉터는 치료가 안된다고 알고 계시고, 이곳 저곳을<br>
                            방문해봐도 효과를 못 보거나 거절당하셔서 치료를 하지 않고<br>
                            스트레스를 받으시는 경우가 많습니다.
                        </span>
                    </div>
                    <div class="right" data-aos="fade-right">
                        <div class="swiper-container intro_slide intro_slide01">
                            <div class="swiper-wrapper">
                                <?php 
                                for($i=1;$i<=4;$i++){ 
                                    if($row['text'.$i]==""){
                                        continue;
                                    }
                                ?>
                                <div class="swiper-slide">
                                    <img src="./admin/img/etc_scar/introducing/<?php echo $row['text'.$i]?>">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper_pagination01"></div>
                        </div>
                        <div class="back_bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="report">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>CASE REPORT</h2>
                <div class="title_line"></div>
                <p>전후 사진 보기</p>
            </div>
            <div class="report_contents">
                <?php
                $nSql="SELECT * FROM sub_page_bna WHERE `type`='type04' ORDER BY num DESC LIMIT 4";
                $nRes=mysqli_query($conn, $nSql);
                while($nRow=mysqli_fetch_array($nRes)){
                    $before=$nRow['thumb'];
                    $after=$nRow['file'];
                    $bDate=$nRow['before'];
                    $aDate=$nRow['after'];
                    $bn=$nRow['branch'];
                    $count=$nRow['count'];
                ?>
                <div class="box_contents no_login" data-aos="fade-up">
                    <div class="txt_box">
                        <div class="box">
                            <div>
                                <h2>BEFORE</h2>
                                <p><?php echo date("Y.m.d", strtotime($bDate))?></p>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <h2>AFTER</h2>
                                <p><?php echo date("Y.m.d", strtotime($aDate))?></p>
                            </div>
                            <h3><?php echo $count?>회</h3>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="report_branch"><h2><?php echo $bn?></h2></div>
                        <div class="top_contents">
                            <img src="./admin/img/sub_page_bna/type04/<?php echo $before?>">
                            <img src="./admin/img/sub_page_bna/type04/<?php echo $after?>">
                        </div>
                        <div class="cocoen_box">
                            <div class="cocoen">
                                <div>
                                    <img src="./admin/img/sub_page_bna/type04/<?php echo $before?>">
                                </div>
                                <img src="./admin/img/sub_page_bna/type04/<?php echo $after?>">
                            </div>
                        </div>
                    </div>
                    <ul class="box_cate">
                        <li class="on">→&nbsp;&nbsp;겹쳐보기&nbsp;&nbsp;←</li>
                        <li>←&nbsp;&nbsp;나눠보기&nbsp;&nbsp;→</li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php 
    $page="sub04";
    include 'watch.php';?>
    <section class="point">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>RODAM POINT</h2>
                <div class="title_line"></div>
                <p>치료 장점 및 포인트</p>
            </div>
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM POINT</h2>
                </div>
                <p>얼굴 패인 흉터치료 <b>가장 중요한 요소</b></p>
                <span>패인 흉터의 형태와<br> 환자의 피부 특성을 고려하는 것이</span>
                <h3>가장 중요합니다!</h3>
            </div>
            <?php
            $sql="SELECT * FROM sub_etc_scar WHERE cate='point'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="point_contents">
                <div class="left" data-aos="fade-left">
                    <h2>1</h2>
                    <h3>패인 흉터 형태 파악</h3>
                    <p>흉터의 모양 ㅣ 위치 ㅣ 패인 정도</p>
                    <div class="bottom">
                        <div>
                            <img src="./admin/img/etc_scar/point/<?php echo $row['text1'];?>">
                        </div>
                        <div>
                            <img src="./admin/img/etc_scar/point/<?php echo $row['text2'];?>">
                        </div>
                    </div>
                </div>
                <div class="right" data-aos="fade-right">
                    <h2>2</h2>
                    <h3>환자의 피부 특성 분석</h3>
                    <p>피부의 민감도, 두께 ㅣ 피부선, 주름 방향</p>
                    <img src="./admin/img/etc_scar/point/<?php echo $row['text3'];?>">
                </div>
            </div>
        </div>
    </section>
    <?php 
    $page="etc_scar";
    $txt="얼굴ㆍ패인 흉터";
    include 'solution.php';
    include 'work.php';
    include 'treat.php';
    include 'tof.php';
    include 'mat.php';
    ?>
    <section class="charge sub_change01">
        <div class="inner">
            <div class="title" data-aos="fade-up">
                <h2>CHARGE &amp; PROCESS</h2>
                <div class="title_line"></div>
                <p>치료 비용과 진행과정을 알려드립니다.</p>
            </div>
            <?php 
            $cate="etc";
            $txt="얼굴 패인 흉터";
            include 'price.php';
            
            $pSql="SELECT * FROM sub_etc_scar WHERE cate='process'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            ?>
            <div class="cp_contents cp_contents02">
                <div class="cp_title" data-aos="fade-up">
                    <h2>2</h2>
                    <h3>치료 과정 안내</h3>
                </div>
                <h4 data-aos="fade-up">새살침 코라테라피 <span>얼굴 패인</span> 흉터 시술 과정</h4>
                <div class="contents">
                    <div data-aos="fade-up">
                        <h2>시술 대상</h2>
                        <div class="line"></div>
                        <p><?php echo $pRow['text1'];?></p>
                    </div>
                    <div data-aos="fade-up">
                        <h2>시술 시간</h2>
                        <div class="line"></div>
                        <p><?php echo $pRow['text2'];?></p>
                    </div>
                    <div data-aos="fade-up">
                        <h2>회복 시간</h2>
                        <div class="line"></div>
                        <p><?php echo $pRow['text3'];?></p>
                    </div>
                </div>
                <div class="bottom">
                    <img src="./admin/img/etc_scar/process/<?php echo $pRow['text4'];?>" data-aos="fade-left">
                    <img src="./admin/img/etc_scar/process/<?php echo $pRow['text5'];?>" data-aos="fade-right">
                </div>
            </div>
            <ul class="charge_contents01" data-aos="fade-up">
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>01</h2>
                    <h3>자가 세안</h3>
                    <p>시술전 직접 세안 후<br>대기해 주시면 됩니다.</p>
                </li>
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>02</h2>
                    <h3>진단 및 상담</h3>
                    <p>사진 촬영 및 3D 촬영 후<br>1:1 상담을 진행 합니다.</p>
                </li>
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>03</h2>
                    <h3>시술 부위 마취</h3>
                    <p>통증 최소화를 위해<br>시술 부위를 마취 합니다.</p>
                </li>
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>04</h2>
                    <h3>코라 테라피 시술</h3>
                    <p>
                        얼굴 패인 흉터 치료가<br>
                        필요한 부위 마다<br>
                        코라 테라피 시술을 합니다.<br>
                        피부 상태에 맞추어 강도를 조절합니다.
                    </p>
                </li>
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>05</h2>
                    <h3>진정 관리</h3>
                    <p>자극 받은 피부를<br>진정 시켜 줍니다.</p>
                </li>
                <li>
                    <div class="icon_box"><p></p></div>
                    <div class="line"></div>
                    <h2>06</h2>
                    <h3>마무리</h3>
                    <p>재생 크림과 자외선 차단제로<br>마무리 합니다.</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="faq sub_faq">
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <h2>F A Q</h2>
                <div class="title_line"></div>
                <p>얼굴 패인 흉터 자주 묻는 질문들 입니다.</p>
            </div>
            <div class="faq_contents">
                <?php
                $fSql="SELECT * FROM sub_faq WHERE `page`='sub04'";
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
            <a href="coratherapy.php" class="charge_go" data-aos="fade-up">
                <p>새살침 코라테라피 <b>더 알아보기</b></p>
                <i></i>
                <img src="img/link-black.png">
            </a>
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
            var intro = $(".intro").innerHeight();
            var report = $(".report").innerHeight();
            var watch = $(".watch").innerHeight();
            var point = $(".point").innerHeight();
            var solution = $(".solution").innerHeight();
            var skin01 = $(".skin01").innerHeight();
            var skin02 = $(".skin02").innerHeight();
            var treat_target = $(".treat_target").innerHeight();
            var trueS = $(".true").innerHeight();
            var trueS01 = $(".true01").innerHeight();
            var charge = $(".charge").innerHeight();
            var faq = $(".faq").innerHeight();
            var totalHeight = subB + menu_flow + intro + report + watch + point + solution + skin01 + skin02 + treat_target + trueS + trueS01 + charge + faq;

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

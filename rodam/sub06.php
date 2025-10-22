<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
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
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file5']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>여드름 / 여드름자국</h2>
            <p>ACNE VULGARIS</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>여드름</h2>
        </div>
    </div>
    <section class="intro">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>진료 과목 소개</p>
            </div>
            <div class="intro_contents">
                <div class="contents">
                    <div class="left" data-aos="fade-left">
                        <div class="t_top_c">
                            <i></i>
                            <h2>INTRODUCING</h2>
                        </div>
                        <p>여드름이 진행중이라면<br> <b>병행치료가 효과적입니다</b></p>
                        <span>
                            염증성 여드름과 함께 여드름자국, 여드름 흉터를<br>
                            동시에 치료할 수 있습니다.
                        </span>
                    </div>
                    <div class="right" data-aos="fade-right">
                        <div class="swiper-container intro_slide intro_slide01">
                            <div class="swiper-wrapper">
                                <?php
                                $sql="SELECT * FROM sub_pimple WHERE cate='introducing'";
                                $res=mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($res);
                                for($i=1;$i<=5;$i++){ 
                                    if($row['text'.$i]==""){
                                        continue;
                                    }
                                ?>
                                <div class="swiper-slide">
                                    <img src="./admin/img/pimple/introducing/<?php echo $row['text'.$i]?>">
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
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <p>여드름 흉터 <b>치료, 모양으로 확인하세요</b></p>
            </div>
            <div class="pimple_box01 acne_box01" data-aos="fade-up">
                <div class="left">
                    <div class="contents on">
                        <div><span></span></div>
                        <p>면포성 여드름</p>
                    </div>
                    <div class="contents">
                        <div><span></span></div>
                        <p>구진성 여드름</p>
                    </div>
                    <div class="contents">
                        <div><span></span></div>
                        <p>농포성 여드름</p>
                    </div>
                    <div class="contents">
                        <div><span></span></div>
                        <p>결절성 여드름</p>
                    </div>
                </div>
                <div class="right">
                    <ul class="pim_box_category">
                        <li class="on">면포성 여드름</li>
                        <li>구진성 여드름</li>
                        <li>농포성 여드름</li>
                        <li>결절성 여드름</li>
                    </ul>
                    <?php
                    $sql="SELECT * FROM sub_pimple WHERE cate='pimple_type'";
                    $res=mysqli_query($conn, $sql);
                    $row=mysqli_fetch_array($res);
                    ?>
                    <div class="right_contents_box">
                        <div class="contents active">
                            <h2>면포성 여드름</h2>
                            <p><?php echo $row['text21']?></p>
                            <div class="swiper-container pimple_slide pimple_slide01">
                                <div class="swiper-wrapper">
                                    <?php
                                    for($i=1;$i<=5;$i++){ 
                                        if($row['text'.$i]==""){
                                            continue;
                                        }
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="./admin/img/pimple/pimple_type/<?php echo $row['text'.$i]?>">
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="contents">
                            <h2>구진성 여드름</h2>
                            <p><?php echo $row['text22']?></p>
                            <div class="swiper-container pimple_slide pimple_slide02">
                                <div class="swiper-wrapper">
                                    <?php
                                    for($i=6;$i<=10;$i++){ 
                                        if($row['text'.$i]==""){
                                            continue;
                                        }
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="./admin/img/pimple/pimple_type/<?php echo $row['text'.$i]?>">
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="contents">
                            <h2>농포성 여드름</h2>
                            <p><?php echo $row['text23']?></p>
                            <div class="swiper-container pimple_slide pimple_slide03">
                                <div class="swiper-wrapper">
                                    <?php
                                    for($i=11;$i<=15;$i++){ 
                                        if($row['text'.$i]==""){
                                            continue;
                                        }
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="./admin/img/pimple/pimple_type/<?php echo $row['text'.$i]?>">
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="contents">
                            <h2>결절성 여드름</h2>
                            <p><?php echo $row['text24']?></p>
                            <div class="swiper-container pimple_slide pimple_slide03">
                                <div class="swiper-wrapper">
                                    <?php
                                    for($i=16;$i<=20;$i++){ 
                                        if($row['text'.$i]==""){
                                            continue;
                                        }
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="./admin/img/pimple/pimple_type/<?php echo $row['text'.$i]?>">
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <h2>CASE REPORT</h2>
                <div class="title_line"></div>
                <p>전후 사진 보기</p>
            </div>
            <div class="report_contents">
                <?php
                $nSql="SELECT * FROM sub_page_bna WHERE `type`='type05' ORDER BY num DESC LIMIT 4";
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
                            <img src="./admin/img/sub_page_bna/type05/<?php echo $before?>">
                            <img src="./admin/img/sub_page_bna/type05/<?php echo $after?>">
                        </div>
                        <div class="cocoen_box">
                            <div class="cocoen">
                                <div>
                                    <img src="./admin/img/sub_page_bna/type05/<?php echo $before?>">
                                </div>
                                <img src="./admin/img/sub_page_bna/type05/<?php echo $after?>">
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
    $page="sub05";
    include 'watch.php';?>
    <section class="point">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title">
                <h2>RODAM POINT</h2>
                <div class="title_line"></div>
                <p>치료 장점 및 포인트</p>
            </div>
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM POINT</h2>
                </div>
                <p>여드름 치료에서 <b>가장 중요한 요소</b></p>
                <span>여드름은 내부와 외부<br> 모두를 치료해주는 것이</span>
                <h3>가장 중요합니다!</h3>
            </div>
            <div class="ance_point">
                <div class="txt_box" data-aos="fade-up">
                    <p>압출, 필링, 레이저침</p>
                    <h2>외부치료</h2>
                </div>
                <img src="img/ance-img01.png" data-aos="fade-up">
                <div class="txt_box" data-aos="fade-down">
                    <h2>내부치료</h2>
                    <p>여드름 피지 억제 한약</p>
                </div>
                <span data-aos="fade-up">
                    <i>내부적으로 여드름 피지를 억제</i>하고<br>
                    <i>외부적인 관리</i>를 통해<br>
                    더 이상 여드름이 나지 않는 깨끗한 피부결로!
                </span>
            </div>
        </div>
    </section>
    <section class="solution">
        <div class="inner">
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>SOLUTION</h2>
                </div>
                <p class="before_bg">내부치료</p>
                <span>
                    피지 싹클린 <b><i style="font-style: normal;">[</i> 여치음 <i style="font-style: normal;">]</i></b><br>
                    먹기 편한 <b>시럽형 여드름 치료 한약</b>
                </span>
                <h3><i style="font-style: normal;">NO</i> 스테로이드, <i style="font-style: normal;">NO</i> 스트레스</h3>
            </div>
            <div class="ance_simple_img">
                <img src="img/ance-inner01.png" data-aos="fade-left">
                <img src="img/ance-inner02.png" data-aos="fade-right">
            </div>
            <div class="ance_check_box" data-aos="fade-up">
                <div class="pos_h2">피지싹클린 효능</div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>여드름을 발생시키는 장부 기능 정상화</p>
                </div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>재발방지 및 피부장벽 강화</p>
                </div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>여드름 염증 빠르게 소염</p>
                </div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>염증으로 손상된 피부 회복</p>
                </div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>피지분비 조절 억제 통해 피부문제 치료</p>
                </div>
                <div class="contents">
                    <img src="img/ance-check.png">
                    <p>체질적인 문제치료</p>
                </div>
            </div>
            <div class="eat_contents">
                <div class="contents" data-aos="fade-left">
                    <div class="img_box">
                        <img src="img/여드름전.jpg">
                        <div class="bg"></div>
                    </div>
                    <p>복용전</p>
                </div>
                <div class="contents" data-aos="fade-right">
                    <div class="img_box">
                        <img src="img/여드름후.jpg">
                        <div class="bg"></div>
                    </div>
                    <p>복용후</p>
                </div>
            </div>
            <p class="eat_p" data-aos="fade-up">
                여드름을 꾸준히 압출해도 계속 나는 이유는 내부적으로 피지분비와 염증을 조절하지 못했기 때문입니다.<br>
                로담의 여드름 치료 한약 &#60;피지 싹클린(여치음)&#62;으로 피지분비, 염증, 여드름 스트레스에서 벗어나시기 바랍니다.<br>
                장기 복용에도 간독성 걱정 없는 천연생약으로 부작용 걱정 없이 언제든 복용하실 수 있습니다.<br>
                미성년자, 가임기 여성 모두 안심하고 드실 수 있는 한의사의 처방 한약입니다. 
            </p>
        </div>
    </section>
    <section class="out_treat">
        <div class="inner">
            <div class="top_txt diet_txt_box" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>SOLUTION</h2>
                </div>
                <p class="before_bg">외부치료</p>
                <span><b><i style="font-style: normal;">[</i></b> 치료 진행 순서 <b><i style="font-style: normal;">]</i></b></span>
            </div>
            <div class="contents mt100" data-aos="fade-up">
                <div class="img_box">
                    <img src="img/ance-treat01.png">
                    <div class="bg"></div>
                </div>
                <div class="txt_box">
                    <h2>01</h2>
                    <h3>여드름 압출</h3>
                    <p>
                        과도한 피지분비로 생성된 여드름 제거와<br>
                        세밀하고 정교한 압출로<br>
                        흉터, 자국을 최소화하고 있습니다.
                    </p>
                </div>
            </div>
            <div class="contents reverse_con" data-aos="fade-up">
                <div class="txt_box">
                    <h2>02</h2>
                    <h3>천연재생침</h3>
                    <p>
                        항염효과를 가지고 있는 해초추출물을 사용하여<br>
                        피부 본연의 재생력과 순환을 높여<br>
                        여드름 염증 억제, 피지분비량 감소,<br>
                        여드름 자국 완화를 돕습니다.
                    </p>
                </div>
                <div class="img_box">
                    <img src="img/ance-treat02.png">
                    <div class="bg"></div>
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <div class="img_box">
                    <img src="img/ance-treat03.png">
                    <div class="bg"></div>
                </div>
                <div class="txt_box">
                    <h2>03</h2>
                    <h3>레이저침</h3>
                    <p>
                        PDT(광선역학요법)를 통해<br>
                        피지선 위축, 모공을 막는 각질과 플라그를 제거합니다.<br>
                        또한 가벼운 박피효과를 통해<br>
                        검붉은 여드름자국을 개선할 수 있습니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $page="pimple";
    $txt="여드름";
    include 'treat.php';
    ?>
    <section class="charge sub_change01 sub06_charge">
        <div class="inner">
            <?php 
            $pSql="SELECT * FROM sub_pimple WHERE cate='process'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            ?>
            <div class="title" data-aos="fade-up">
                <h2>PROCESS</h2>
                <div class="title_line"></div>
                <p>여드름 치료 진행 과정을 알려드립니다.</p>
            </div>
            <div class="cp_contents cp_contents02">
                <div class="cp_title" data-aos="fade-up">
                    <h3>로담 한의원 여드름 치료 과정</h3>
                </div>
                <h4 class="font48" data-aos="fade-up">새살침 코라테라피 <span>여드름</span> 치료 과정</h4>
                <div class="contents">
                    <div data-aos="fade-up">
                        <h2>시술 대상</h2>
                        <div class="line"></div>
                        <p><?php echo $pRow['text1']?></p>
                    </div>
                    <div data-aos="fade-up">
                        <h2>시술 시간</h2>
                        <div class="line"></div>
                        <p><?php echo $pRow['text2']?></p>
                    </div>
                </div>
                <div class="bottom">
                    <img src="./admin/img/pimple/process/<?php echo $pRow['text4'];?>" data-aos="fade-left">
                    <img src="./admin/img/pimple/process/<?php echo $pRow['text5'];?>" data-aos="fade-right">
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
                    <h3>천연재생침, 레이저침</h3>
                    <p>
                        천연 스피큘을 진피층으로 침투시켜
                        염증완화, 피지분비 억제를 돕습니다.
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
                    <p>재생 크림과 자외선 차단제로<br>마무리하며, 홈케어를 위한<br>코칭을 도와드립니다.</p>
                </li>
            </ul>
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
            var out_treat = $(".out_treat").innerHeight();
            var treat_target = $(".treat_target").innerHeight();
            var charge = $(".charge").innerHeight();
            var totalHeight = subB + menu_flow + intro + report + watch + point + solution + treat_target + charge + out_treat;

            console.log(totalHeight);

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

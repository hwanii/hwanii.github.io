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
    <?php include 'header.php';?>
    <?php
    $bnSql="SELECT * FROM pc_sub_banner";
    $bnRes=mysqli_query($conn, $bnSql);
    $bnRow=mysqli_fetch_array($bnRes);
    ?>
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file6']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>모공 치료</h2>
            <p>CORA THERAPY</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>모공 치료</h2>
        </div>
    </div>
    <section class="intro sub07">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>진료 과목 소개</p>
            </div>
            <div class="top_txt" data-aos="fade-up">
                <p>한방 흉터 성형 18년 연구</p>
                <h3>모공 새살 부스터</h3>
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM POINT</h2>
                </div>
                <div class="sub07_txt">
                    <span>식물 유래 엑소좀과 산삼 배양액이 만난</span>
                    <p>모공 새살 부스터의<br> <b>놀라운 효과</b></p>
                </div>
            </div>
        </div>
        <img src="img/pore01.png" class="sub07_bg"></img>
        <div class="sub07_circle_contents">
            <div class="txt_box">
                <p>식물 유래 <b>엑소좀</b></p>
                <span>식물 유래 엑소좀은 콜라겐 생성 효과가 있어<br> <b>항노화, 피부 장벽 개선, 보습, 항염 효과가 뛰어납니다.</b></span>
            </div>
            <div class="c_contents">
                <div class="contents">
                    <div class="img_box"><p></p></div>
                    <p>피부 재생 효과</p>
                </div>
                <div class="contents">
                    <div class="img_box"><p></p></div>
                    <p>콜라겐 생성</p>
                </div>
                <div class="contents">
                    <div class="img_box"><p></p></div>
                    <p>항염 효과</p>
                </div>
                <div class="contents">
                    <div class="img_box"><p></p></div>
                    <p>항산화 효과</p>
                </div>
            </div>
        </div>
        <div class="sub07_circle_contents">
            <div class="txt_box">
                <p><b>자양삼</b> 배양액</p>
                <span>자양삼 배양액은 미백과 피부 탄력 개선 효과가 있으며<br> <b>늘어진 피부, 주름 등을 개선 시킬 수 있습니다.</b></span>
            </div>
            <div class="c_contents">
                <div class="contents bot_con">
                    <div class="img_box"><p></p></div>
                    <p>피부 탄력</p>
                </div>
                <div class="contents bot_con">
                    <div class="img_box"><p></p></div>
                    <p>피부 미백</p>
                </div>
            </div>
        </div>
    </section>
    <section class="report pore_report">
        <div class="inner" data-aos="fade-up">
            <p class="sub07_report_title"><b>모공이</b> 좋아지면<br> <b>피부가 달라보입니다.</b></p>
            <div class="report_contents">
                <?php
                $nSql="SELECT * FROM sub_page_bna WHERE `type`='type06' ORDER BY num ASC LIMIT 4";
                $nRes=mysqli_query($conn, $nSql);
                while($nRow=mysqli_fetch_array($nRes)){
                    $title=$nRow['title'];
                    $before=$nRow['thumb'];
                    $after=$nRow['file'];
                    $bDate=$nRow['before'];
                    $aDate=$nRow['after'];
                    $bn=$nRow['branch'];
                    $count=$nRow['count'];
                ?>
                <div class="box_contents no_login" data-aos="fade-up">
                    <p class="box_title"><?php echo $title?></p>
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
                            <img src="./admin/img/sub_page_bna/type06/<?php echo $before?>">
                            <img src="./admin/img/sub_page_bna/type06/<?php echo $after?>">
                        </div>
                        <div class="cocoen_box">
                            <div class="cocoen">
                                <div>
                                    <img src="./admin/img/sub_page_bna/type06/<?php echo $before?>">
                                </div>
                                <img src="./admin/img/sub_page_bna/type06/<?php echo $after?>">
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
    $sql="SELECT * FROM sub_pore WHERE cate='point'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="special">
        <div class="inner">
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM POINT</h2>
                </div>
                <div class="sub07_txt">
                    <span>한방흉터성형 18년 연구로 탄생한</span>
                    <p>모공 새살 부스터의<br> <b>특별함</b></p>
                </div>
            </div>
        </div>
        <div class="special_inner">
            <div class="inner990">
                <div class="txt_box">
                    <span>01</span>
                    <p>피부 속 탄력부터 잡아주는<br> <b>모공치료</b></p>
                    <i style="font-style: normal;">
                        모공 새살부스터는 피부 속 진피틍을 자극합니다.<br>
                        피부 안쪽에서부터 탄력을 채워주어 속 모공부터 겉으로 보이는 모공까지 개선시킵니다.
                    </i>
                </div>
                <div class="contents mt50">
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text1']?>">
                            <p class="bottom_p">겉 부분 모공만 개선</p>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text3']?>">
                            <p class="bottom_p">안쪽 모공부터 개선</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="special_inner gray_bg">
            <div class="inner990">
                <div class="txt_box">
                    <span>02</span>
                    <p>1회 만에 느껴지는<br> <b>내 모공의 변화</b></p>
                    <i style="font-style: normal;">
                        탄력이 떨어진 피부는 원래보다 모공이 더 커보일 수 있습니다.<br>
                        단 1회 만으로도 이전과는 다르게 보다 탄력있고 촘촘해진 모공을 확인할 수 있습니다.
                    </i>
                </div>
                <div class="contents">
                    <h2>모공 새살 부스터 1회 치료만에 개선된 모공</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text6']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text7']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text8']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text9']?></p>
                                </div>
                                <h3><?php echo $row['text10']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="special_inner">
            <div class="inner990">
                <div class="txt_box">
                    <span>03</span>
                    <p>근본적인 원인 개선으로<br> <b>오래 지속되는 효과</b></p>
                    <i style="font-style: normal;">
                        모공이 넓어지는 원인인 피부 속 수분 균형, 피부 속 탄력, 과한 피지 분비 등을<br>
                        개성시키기 때문에 다시 과도하게 모공이 늘어지지 않고록 관리 됩니다.
                    </i>
                </div>
                <div class="contents">
                    <h2>염증 완화 및 모공 주변 색소 침착 개선</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text11']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text12']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text13']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text14']?></p>
                                </div>
                                <h3><?php echo $row['text15']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <h2>과도한 피지 분비 및 유수분 밸런스 정상화</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text16']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text17']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text18']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text19']?></p>
                                </div>
                                <h3><?php echo $row['text20']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <h2>전반적인 피부 탄력 개선으로 모공 축소</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text21']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text22']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text23']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text24']?></p>
                                </div>
                                <h3><?php echo $row['text25']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="special_inner gray_bg">
            <div class="inner990">
                <div class="txt_box">
                    <span>04</span>
                    <p>색소침착 개선으로<br> <b>모공이 없었던 것처럼</b></p>
                    <i style="font-style: normal;">
                        모공과 모공 주변의 색소침착은 원래 크기보다 모공이 커져 보이게 합니다.<br>
                        색소침착을 동시에 개선해 모공이 눈에 띄게 보이는 현상을 완화시킬 수 있습니다.
                    </i>
                </div>
                <div class="contents">
                    <h2>크기는 물론 색소침착도 개선된 모공</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text26']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text27']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text28']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text29']?></p>
                                </div>
                                <h3><?php echo $row['text30']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="special_inner">
            <div class="inner990">
                <div class="txt_box">
                    <span>05</span>
                    <p>하루만에<br> <b>복귀하는 일상 생활</b></p>
                    <i style="font-style: normal;">
                        시술 다음날부터 일상 생활로의 복귀가 가능합니다.<br>
                        세안 및 화장을 자유롭게 하실 수 있어 부담 없이 시술을 받으시면 됩니다.
                    </i>
                </div>
                <div class="contents">
                    <h2>크기는 물론 색소침착도 개선된 모공</h2>
                    <div class="img_contents">
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text31']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>BEFORE</h2>
                                    <p><?php echo $row['text32']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="ic_box">
                            <img src="./admin/img/pore/point/<?php echo $row['text33']?>">
                            <div class="img_bot">
                                <div>
                                    <h2>AFTER</h2>
                                    <p><?php echo $row['text34']?></p>
                                </div>
                                <h3><?php echo $row['text35']?>회</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $page="pore";
    $txt="모공 치료";
    include 'treat.php';
    ?>
    <section class="charge sub_change01 sub06_charge" style="background-color: #eef1f3;">
        <div class="inner">
            <?php 
            $pSql="SELECT * FROM sub_pore WHERE cate='process'";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            ?>
            <div class="title" data-aos="fade-up">
                <h2>PROCESS</h2>
                <div class="title_line"></div>
                <p>모공 치료 진행 과정을 알려드립니다.</p>
            </div>
            <div class="cp_contents cp_contents02">
                <div class="cp_title" data-aos="fade-up">
                    <h3>로담 한의원 모공 치료 과정</h3>
                </div>
                <h4 data-aos="fade-up"><span>모공 치료</span> 시술 과정</h4>
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
                    <img src="./admin/img/pore/process/<?php echo $pRow['text4'];?>" data-aos="fade-left">
                    <img src="./admin/img/pore/process/<?php echo $pRow['text5'];?>" data-aos="fade-right">
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
                    <h3>모공 새살 부스터 시술</h3>
                    <p>
                        개선이 필요한 부위에<br>
                        모공 새살 부스터 시술을 합니다.<br>
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
                    <p>재생 크림과 자외선 차단제로<br>마무리하며, 홈케어를 위한<br>코칭을 도와드립니다.</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="faq sub_faq sub07_faq" style="background-color: #fff;">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title">
                <h2>F A Q</h2>
                <div class="title_line"></div>
                <p>모공 치료 자주 묻는 질문들 입니다.</p>
            </div>
            <div class="faq_contents">
                <?php
                $fSql="SELECT * FROM sub_faq WHERE `page`='sub06'";
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
            var special_c = $(".special").innerHeight();
            var treat_target = $(".treat_target").innerHeight();
            var charge = $(".charge").innerHeight();
            var faq = $(".faq").innerHeight();
            var totalHeight = subB + menu_flow + intro + report + special_c + treat_target + charge + faq;

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

</html>

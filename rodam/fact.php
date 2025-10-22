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
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file11']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>오해하지 마세요</h2>
            <p>ACCURATE FACT</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>새살침 코라테라피</h2>
            <img src="img/menu-flow.png">
            <h2>오해하지 마세요</h2>
        </div>
    </div> 
    <section class="intro" style="padding: 100px 0 80px;">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>새살침 코라테라피 소개</p>
            </div>
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>RODAM TRUE INFO</h2>
                </div>
                <p>새살침 코라테라피, <b>오해와 진실</b></p>
            </div>
        </div>
    </section>
    <section class="true01 fact" style="background-color: #fff; padding: 0 0 100px">
        <div class="inner">
            <div class="bottom_txt" data-aos="fade-up" style="letter-spacing: -1px;">
                <p><b>01_일시적으로 부어서</b> 새살이 차올라 보이는 것이다?</p>
                <h2>자극으로 인해 붓기가 발생할 수 있지만, <br>한 번 차오른 새살을 몇 년이 지나도 꺼지지 않습니다.</h2>
                <h3>치료 진행 결과</h3>
            </div>
            <div class="true_contents">
                <?php
                $sql="SELECT * FROM sub_fact WHERE cate='01'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);

                if($row['text1']!="" && $row['text2']!="" && $row['text3']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text1'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text2'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/01/<?php echo $row['text3'];?>">
                            <p><?php echo $row['text4'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text5']!="" && $row['text6'] && $row['text7']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text5'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text6'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/01/<?php echo $row['text7'];?>">
                            <p><?php echo $row['text8'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text9']!="" && $row['text10'] && $row['text11']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text9'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text10'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/01/<?php echo $row['text11'];?>">
                            <p><?php echo $row['text12'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text13']!="" && $row['text14'] && $row['text15']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text13'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/01/<?php echo $row['text14'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/01/<?php echo $row['text15'];?>">
                            <p><?php echo $row['text16'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="true01 true05 fact">
        <div class="inner">
            <div class="bottom_txt" data-aos="fade-up" style="letter-spacing: -1px;">
                <p><b>02_새살침 후 붉은기는</b> 없어지지 않는다?</p>
                <h2 style="margin-bottom: 20px;">시술 중 붉은 기는 마지막 치료 후 <br>평균 2 ~ 4 주 이내에 사라집니다.</h2>
                <span>
                    다만, 치료 종료 시기는 개인의 생활 환경과 건강 상태에 따라<br>
                    1개월 경과 ~ 6개월 경과 정도 붉은 기 흔적이 있을 수 있습니다.
                </span>
                <h3>치료 진행 결과</h3>
            </div>
            <div class="true_contents">
                <?php
                $sql="SELECT * FROM sub_fact WHERE cate='02'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);

                if($row['text1']!="" && $row['text2']!="" && $row['text3']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text1'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text2'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/02/<?php echo $row['text3'];?>">
                            <p><?php echo $row['text4'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text5']!="" && $row['text6'] && $row['text7']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text5'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text6'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/02/<?php echo $row['text7'];?>">
                            <p><?php echo $row['text8'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text9']!="" && $row['text10'] && $row['text11']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text9'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text10'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/02/<?php echo $row['text11'];?>">
                            <p><?php echo $row['text12'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text13']!="" && $row['text14'] && $row['text15']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text13'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/02/<?php echo $row['text14'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/02/<?php echo $row['text15'];?>">
                            <p><?php echo $row['text16'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="true01 true06 fact" style="background-color: #fff;">
        <div class="inner">
            <div class="bottom_txt" data-aos="fade-up" style="letter-spacing: -1px;">
                <p><b>03_새살침은 흉터를</b> 더 커지게 만든다?</p>
                <h2>치료 중 붉은기로 인해 흉터가 퍼져보일 수 있지만 <br>치료 종료 후 비교하면 그렇지 않습니다.</h2>
                <h3>치료 진행 결과</h3>
            </div>
            <div class="true_contents">
                <?php
                $sql="SELECT * FROM sub_fact WHERE cate='03'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);

                if($row['text1']!="" && $row['text2']!="" && $row['text3']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text1'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text2'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/03/<?php echo $row['text3'];?>">
                            <p><?php echo $row['text4'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text5']!="" && $row['text6'] && $row['text7']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text5'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text6'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/03/<?php echo $row['text7'];?>">
                            <p><?php echo $row['text8'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text9']!="" && $row['text10'] && $row['text11']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text9'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text10'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/03/<?php echo $row['text11'];?>">
                            <p><?php echo $row['text12'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } 
                if($row['text13']!="" && $row['text14'] && $row['text15']!=""){
                ?>
                <div class="contents_box" data-aos="fade-up">
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text13'];?>">
                        <h2>치료 전</h2>
                    </div>
                    <div class="contents">
                        <img src="./admin/img/fact/03/<?php echo $row['text14'];?>">
                        <h2>치료 중</h2>
                    </div>
                    <div class="contents">
                        <div class="img_box">
                            <img src="./admin/img/fact/03/<?php echo $row['text15'];?>">
                            <p><?php echo $row['text16'];?>개월 경과</p>
                        </div>
                        <h2>치료 후</h2>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="cora_result">
        <div class="inner">
            <div class="cora_title">
                <h2>로담한의원</h2>
                <p>새살침 코라테라피에 대한 신뢰,<br>결과로 보답해드리겠습니다.</p>
            </div>
            <div class="contents_box">
                <div class="contents">
                    <div class="con_cir">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <p>효과는<br> <b>영구적</b>이고</p>
                    <img src="img/cora-result.png">
                </div>
                <div class="contents">
                    <div class="con_cir">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <p>붉은기는<br> <b>일시적</b>이며</p>
                    <img src="img/cora-result.png">
                </div>
                <div class="contents">
                    <div class="con_cir">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <p>패인 흉터에<br> <b>새살이 차오릅니다.</b></p>
                    <img src="img/cora-result.png">
                </div>
            </div>
        </div>
        <img src="img/corat.png">
    </section>
    <?php include 'footer.php'; ?>
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
            var true01 = $(".true01").innerHeight();
            var true06 = $(".true05").innerHeight();
            var true05 = $(".true06").innerHeight();
            var cora_result = $(".cora_result").innerHeight();
            var totalHeight = subB + menu_flow + intro + true01 + true05 + true06 + cora_result;

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

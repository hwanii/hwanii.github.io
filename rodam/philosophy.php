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
    <section class="sub_banner" style="background: url('./admin/img/pc_sub_banner/<?php echo $bnRow['file10']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>진료철학</h2>
            <p>PHILOSOPHY</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="img/menu-flow.png">
            <h2>새살침 코라테라피</h2>
            <img src="img/menu-flow.png">
            <h2>진료철학</h2>
        </div>
    </div> 
    <section class="intro philo" style="padding: 100px 0 80px;">
        <div class="inner" data-aos="fade-up">
            <div class="title orange_title" style="margin-bottom: 0;">
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
                <?php
                $sql="SELECT * FROM sub_philosophy WHERE `cate`='introducing'";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                for($i=0;$i<4;$i++){
                    $n=($i*4)+1;
                    if($row['text'.$n]==""){
                        continue;
                    }
                ?>
                <div class="contents" data-aos="fade-up">
                    <img src="./admin/img/philosophy/introducing/<?php echo $row['text'.($n)]?>">
                    <div class="blank_box">
                        <div class="left"></div>
                        <div class="txt_box">
                            <?php echo $row['text'.($n+2)]?>
                            <span>로담한의원 <?php echo $row['text'.($n+1)]?> <?php echo $row['text'.($n+3)]?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="rodam_slide_box" data-aos="fade-up">
                <div class="swiper-container rodam_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM sub_philosophy WHERE `cate`='point'";
                        $res=mysqli_query($conn, $sql);
                        $row=mysqli_fetch_array($res);
                        for($i=0;$i<4;$i++){
                            $n=($i*4)+1;
                            if($row['text'.$n]==""){
                                continue;
                            }
                        ?>
                        <a href="javascript:void(0);" class="swiper-slide">
                            <img src="./admin/img/philosophy/point/<?php echo $row['text'.($n)]?>">
                            <div class="blank_box">
                                <div class="left"></div>
                                <div class="txt_box">
                                    <?php echo $row['text'.($n+2)]?>
                                    <span>로담한의원 <?php echo $row['text'.($n+1)]?> <?php echo $row['text'.($n+3)]?></span>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <img src="img/slide-prev.png" class="you_prev">
                    <img src="img/slide-next.png" class="you_next">
                </div>
                <div class="swiper-container rodam_slide01">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM sub_philosophy WHERE `cate`='point'";
                        $res=mysqli_query($conn, $sql);
                        $row=mysqli_fetch_array($res);
                        for($i=0;$i<4;$i++){
                            $n=($i*4)+1;
                            if($row['text'.$n]==""){
                                continue;
                            }
                        ?>
                        <div class="swiper-slide">
                            <img src="./admin/img/philosophy/point/<?php echo $row['text'.($n)]?>">
                            <p>로담한의원 <?php echo $row['text'.($n+1)]?> <?php echo $row['text'.($n+3)]?></p>
                        </div>
                        <?php } ?>
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
                    <iframe src="https://www.youtube.com/embed/NLrrNVjZRHA?si=ieaBezfZk1gMKIsD&amp;controls=1&autoplay=1&mute=1&modestbranding=1&playlist=NLrrNVjZRHA&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <p class="founder_p">“타 병원에서 흉터치료법 ‘새살침’이라고 동일하게 표현하지만, 로담한의원 코라테라피의 절개침과 교차침법과 동일한 치료 방법이 아닙니다.</p>
        </div>
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
            var founder = $(".founder").innerHeight();
            var totalHeight = subB + menu_flow + intro + founder;

            var leftFixHeight = subB + menu_flow;

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

            // $("body").on("mousewheel", function (e) {
            //     var wheel = e.originalEvent.wheelDelta;

            //     if (wheel > 0) {
            //         //스크롤 올릴때
            //         console.log("올리는 중");

            //         if (mainHeight < leftFixHeight - 130) {
            //             $(".left_fix").stop().animate({"left" : "-220px"},300);
            //         }

            //         // if (mainHeight > leftFixHeight - 200) {
            //         //     $(".left_fix").stop().animate({"left" : "50px"},300);
            //         //     $(".left_fix_btn").stop().animate({"left" : "-40px"},300);
            //         // }
            //     } else {
            //         //스크롤 내릴때
            //         console.log("내리는 중");

            //         // if (mainHeight < leftFixHeight - 130) {
            //         //     $(".left_fix").stop().animate({"left" : "-220px"},300);
            //         // }

            //         if (mainHeight > leftFixHeight - 200) {
            //             $(".left_fix").stop().animate({"left" : "50px"},300);
            //             $(".left_fix_btn").stop().animate({"left" : "-40px"},300);
            //         }
            //     }
            // });

            // $(".left_fix .close").click(function(){
            //     $(".left_fix").stop().animate({"left" : "-220px"},300);
            //     setTimeout(function(){
            //         $(".left_fix_btn").stop().animate({"left" : "0px"},300);
            //     },300);
            // });

            // $(".left_fix_btn").click(function(){
            //     $(this).stop().animate({"left" : "-40px"},300);
            //     setTimeout(function(){
            //         $(".left_fix").stop().animate({"left" : "50px"},300);
            //     },300);
            // });
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

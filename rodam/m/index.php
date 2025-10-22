<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/m-style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="swiper-container main_slide">
        <div class="swiper-wrapper">
            <?php
            $mSql="SELECT * FROM slide_mobile WHERE `location`='메인슬라이더' ORDER BY num ASC";
            $mRes=mysqli_query($conn, $mSql);
            while($mRow=mysqli_fetch_array($mRes)){
                $mLink=$mRow['link'];
                $text1=$mRow['text1'];
                $text2=$mRow['text2'];
                $text3=$mRow['text3'];
                $mFile=$mRow['file'];
            ?>
            <div class="swiper-slide" style="background: url('../admin/img/slide/mobile/<?php echo $mFile?>') no-repeat center/cover;">
                <div class="bg"></div>
                <div class="txt_box">
                    <p><b><?php echo $text1?></b></p>
                    <h2 class="serif"><?php echo $text2?></h2>
                    <span class="serif"><?php echo $text3?></span>
                    <a href="<?php echo $mLink?>">더 알아보기</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <img src="../img/slide-b.png" class="gradi">
    <section class="record">
        <div class="section_inner">
            <div class="title" data-aos="fade-up">
                <h2>여러분과 함께한, 로담의 기록</h2>
                <p>오늘도 그리고 내일도 변치 않고 달려가겠습니다.</p>
            </div>
            <?php
            $sql="SELECT * FROM counting";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $since=str_split($row['since']);
            $date=$row['date'];
            $cumulative=str_split($row['cumulative']);
            $satisfaction=str_split($row['satisfaction']);
            ?>
            <div class="number_count serif" data-aos="fade-up">
                <div class="contents">
                    <p>SINCE</p>
                    <div class="odometer">
                        <?php
                        $since_ary=array();
                        for($i=0;$i<count($since);$i++){
                            $n=$since[$i];
                            $txt= $n;
                            for($j=1;$j<=9;$j++){
                                $nn=$n-$j;
                        
                                if($nn<0){
                                    $nn=$nn+10;
                                }
                                $txt.= " ".$nn;
                            }
                            $txt.= " ".$n;
                            array_push($since_ary, $txt);
                        }
                        ?>
                        <div class="digit">
                            <div class="digit-container digit-hundred"><?php echo $since_ary[0]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-ten"><?php echo $since_ary[1]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-one"><?php echo $since_ary[2]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-thousand"><?php echo $since_ary[3]?></div>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <p>23년 11월 30일 기준 누적 환자</p>
                    <div class="odometer">
                        <?php
                        $cumulative_ary=array();
                        for($i=0;$i<count($cumulative);$i++){
                            $n=$cumulative[$i];
                            $txt= $n;
                            for($j=1;$j<=9;$j++){
                                $nn=$n-$j;
                        
                                if($nn<0){
                                    $nn=$nn+10;
                                }
                                $txt.= " ".$nn;
                            }
                            $txt.= " ".$n;
                            array_push($cumulative_ary, $txt);
                        }
                        ?>
                        <div class="digit">
                            <div class="digit-container digit-thousand"><?php echo $cumulative_ary[0]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-hundred"><?php echo $cumulative_ary[1]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container">,</div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-ten"><?php echo $cumulative_ary[2]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-one"><?php echo $cumulative_ary[3]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-thousand"><?php echo $cumulative_ary[4]?></div>
                        </div>
                        <div class="digit text_box">
                            <div class="digit-container">명</div>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <p>환자만족도</p>
                    <div class="odometer">
                        <?php
                        $satisfaction_ary=array();
                        for($i=0;$i<count($satisfaction);$i++){
                            $n=$satisfaction[$i];
                            $txt= $n;
                            for($j=1;$j<=9;$j++){
                                $nn=$n-$j;
                        
                                if($nn<0){
                                    $nn=$nn+10;
                                }
                                $txt.= " ".$nn;
                            }
                            $txt.= " ".$n;
                            array_push($satisfaction_ary, $txt);
                        } ?>
                        <div class="digit">
                            <div class="digit-container digit-ten"><?php echo $satisfaction_ary[0]?></div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-one"><?php echo $satisfaction_ary[1]?></div>
                        </div>
                        <div class="digit text_box">
                            <div class="digit-container">%</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $mpSql="SELECT * FROM main_photo";
            $mpRes=mysqli_query($conn, $mpSql);
            $mpRow=mysqli_fetch_array($mpRes);
            $photo1=$mpRow['photo1'];
            $photo2=$mpRow['photo2'];
            $photo3=$mpRow['photo3'];
            $photo4=$mpRow['photo4'];
            $photo5=$mpRow['photo5'];
            $photo6=$mpRow['photo6'];
            $photo7=$mpRow['photo7'];
            ?>
            <div class="record_link">
                <a href="../m/coratherapy.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo1?>">
                    <div class="bg"></div>
                    <p>새살침 코라테라피</p>
                </a>
                <a href="../m/sub02_01.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo2?>">
                    <div class="bg"></div>
                    <p>여드름 패인 흉터</p>
                </a>
                <a href="../m/sub03.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo3?>">
                    <div class="bg"></div>
                    <p>수두/대상포진 흉터</p>
                </a>
                <a href="../m/sub04.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo4?>">
                    <div class="bg"></div>
                    <p>수술/성형 흉터</p>
                </a>
                <a href="../m/sub05.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo5?>">
                    <div class="bg"></div>
                    <p>기타 패인 흉터</p>
                </a>
                <a href="../m/sub06.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo6?>">
                    <div class="bg"></div>
                    <p>여드름 / 여드름 자국</p>
                </a>
                <a href="../m/sub07.php" data-aos="fade-up">
                    <img src="../admin/img/main_photo/<?php echo $photo7?>">
                    <div class="bg"></div>
                    <p>모공치료</p>
                </a>
            </div>
        </div>
    </section>
    <?php
    $bbSql="SELECT * FROM banner";
    $bbRes=mysqli_query($conn, $bbSql);
    $bbRows=mysqli_num_rows($bbRes);
    if($bbRows>0){
    ?>
    <section class="swiper-container sub_slide" data-aos="fade-up">
        <div class="swiper-wrapper">
            <?php
            $bSql="SELECT * FROM banner ORDER BY num ASC"; 
            $bRes=mysqli_query($conn, $bSql);
            while($bRow=mysqli_fetch_array($bRes)){
                $banner=$bRow['thumb'];
                $bLink=$bRow['link'];
            ?>
            <div class="swiper-slide" style="background: url('../admin/img/banner/<?php echo $banner?>') no-repeat center/cover;" onclick="location.href='<?php echo $bLink?>'">
                <!-- <div class="bg"></div>
                <div class="txt_box">
                    <img src="../img/big-w-logo.png">
                    <div class="right">
                        <p><b>마음의 흉터도 채우기 위해 노력하고 있습니다.</b></p>
                        <h2 class="serif">피부의 자연 회복능력,</h2>
                        <span class="serif">로담 한의원에서 확인하세요</span>
                    </div>
                </div> -->
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <?php } ?>
    <section class="youtube" data-aos="fade-up">
        <div class="sub_title" data-aos="fade-up">
            <h2>WATCH ON</h2>
            <div class="title_line"></div>
            <p>로담 유튜브ㅣ흉터 지우는 한의사들</p>
        </div>
        <!-- <div class="swiper-container youtube_slide">
            <div class="swiper-wrapper">
                <?php
                $ySql="SELECT * FROM youtube_link ORDER BY num ASC";
                $yRes=mysqli_query($conn, $ySql);
                $yRow=mysqli_fetch_array($yRes);
                for($y=0;$y<5;$y++){
                    $yy=$y+1;
                    $link=$yRow['link_'.($y+1)];
                    ?>
                <a href="<?php echo $link?>" target="_blank" class="swiper-slide"><img src="<?php echo get_youtube_thumbnail($link)?>"></a>
                    <?php
                }
                ?>
            </div>
            <img src="../img/slide-prev.png" class="you_prev">
            <img src="../img/slide-next.png" class="you_next">
        </div>
        <div class="swiper-container youtube_slide01">
            <div class="swiper-wrapper">
                <?php
                $ySql="SELECT * FROM youtube_link ORDER BY num ASC";
                $yRes=mysqli_query($conn, $ySql);
                $yRow=mysqli_fetch_array($yRes);
                for($y=0;$y<5;$y++){
                    $yy=$y+1;
                    $link=$yRow['link_'.($y+1)];
                    ?>
                    <div class="swiper-slide">
                        <div class="bg"></div>
                        <img src="<?php echo get_youtube_thumbnail($link)?>">
                    </div>
                    <?php
                }
                ?>
            </div>
        </div> -->
        <?php
        $ySql="SELECT * FROM youtube_link ORDER BY num ASC";
        $yRes=mysqli_query($conn, $ySql);
        $yRow=mysqli_fetch_array($yRes);
        $link_1=explode("?v=", $yRow['link_1']);
        $link_2=explode("?v=", $yRow['link_2']);
        $link_3=explode("?v=", $yRow['link_3']);
        $link_4=explode("?v=", $yRow['link_4']);
        $photo1=$yRow['photo1'];
        $photo2=$yRow['photo2'];
        $photo3=$yRow['photo3'];
        $photo4=$yRow['photo4'];
        ?>
        <div class="watch_contents">
            <div class="main_watch_contents">
                <iframe id="zVideo" src="https://www.youtube.com/embed/<?php echo $link_1[1]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="bottom_watch">
                <div class="bottom_watch_box" onclick="change('<?php echo $link_1[1]?>')">
                    <img src="../admin/img/youtube/<?php echo $photo1?>">
                    <!-- <div class="bg"></div>
                    <div class="bottom_watch_contents">
                        <iframe src="https://www.youtube.com/embed/<?php echo $link_1[1]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> -->
                </div>
                <div class="bottom_watch_box" onclick="change('<?php echo $link_2[1]?>')">
                    <img src="../admin/img/youtube/<?php echo $photo2?>">
                </div>
                <div class="bottom_watch_box" onclick="change('<?php echo $link_3[1]?>')">
                    <img src="../admin/img/youtube/<?php echo $photo3?>">
                </div>
                <div class="bottom_watch_box" onclick="change('<?php echo $link_4[1]?>')">
                    <img src="../admin/img/youtube/<?php echo $photo4?>">
                </div>
            </div>
        </div>
    </section>
    <script>
    function change(n){
        var link = "https://www.youtube.com/embed/" + n;
        $("#zVideo").attr('src', link);
    }
    </script>
    <section class="treat">
        <div class="title" data-aos="fade-up">
            <h2>로담 치료 사례</h2>
            <p>로담에서 치료 받으신 분들의 전후 사진입니다.</p>
        </div>
        <div class="box" data-aos="fade-up">
            <?php
            $nSql="SELECT * FROM bna ORDER BY num DESC LIMIT 4";
            $nRes=mysqli_query($conn, $nSql);
            while($nRow=mysqli_fetch_array($nRes)){
                $before=$nRow['thumb'];
                $after=$nRow['file'];
                $bDate=$nRow['before'];
                $aDate=$nRow['after'];
                $bn=$nRow['branch'];
                $count=$nRow['count'];
            ?>
            <div class="box_contents" data-aos="fade-up">
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
                        <img src="../admin/img/bna/<?php echo $before?>">
                        <img src="../admin/img/bna/<?php echo $after?>">
                    </div>
                    <div class="cocoen_box">
                        <div class="cocoen">
                            <div>
                                <img src="../admin/img/bna/<?php echo $before?>">
                            </div>
                            <img src="../admin/img/bna/<?php echo $after?>">
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
        <a href="../m/sub09.php">전체 사례보기</a>
    </section>
    <section class="network">
        <div class="n_title" data-aos="fade-up">
            <h2>로담 네트워크 소개</h2>
            <div>
                <img src="../img/icon-network.png">
                <p>지도핀을 선택하시면, 네트워크 지점 정보로 이동합니다.</p>
            </div>
        </div>
        <ul class="network_cate" data-aos="fade-up">
            <li class="on">서울 지역</li>
            <li>전국</li>
        </ul>
        <div class="contents_box">
            <div class="contents active">
                <div class="swiper_inner">
                    <div class="swiper-container map_slide01">
                        <div class="map01" data-aos="fade-up">
                            <img src="../img/map01.png">
                            <div class="swiper-pagination03"></div>
                        </div>
                        <div class="swiper-wrapper">
                            <?php
                            $bSql="SELECT * FROM branch ORDER BY num ASC LIMIT 5";
                            $bRes=mysqli_query($conn, $bSql);
                            $b=0;
                            while($bRow=mysqli_fetch_array($bRes)){
                                $branch=$bRow['branch_name'];
                                $addr=$bRow['addr'];
                                $detail=$bRow['detail'];
                                $tel=$bRow['tel'];
                                $kakao=$bRow['kakao'];
                                $blog=$bRow['blog'];
                                $naver=$bRow['naver'];
                                $web_url=$bRow['web_url'];
                            ?>
                            <div class="swiper-slide" data-aos="fade-up">
                                <h2>로담한의원 <?php echo $branch?></h2>
                                <p><?php echo $addr?> <?php echo $detail?></p>
                                <div class="sl_box">
                                    <a href="tel:02-3444-7523">
                                        <img src="../img/icon-g-call.png">
                                        <span><?php echo $tel?></span>
                                    </a>
                                    <a href="<?php echo $kakao?>" target="_blank">
                                        <img src="../img/icon-g-talk.png">
                                        <span>카카오톡 상담</span>
                                    </a>
                                    <a href="<?php echo $blog?>" target="_blank">
                                        <img src="../img/icon-g-blog.png">
                                        <span>네이버 블로그</span>
                                    </a>
                                    <a href="<?php echo $naver?>" target="_blank">
                                        <img src="../img/icon-g-naver.png">
                                        <span>네이버 예약</span>
                                    </a>
                                </div>
                                <a href="../branch/<?php echo $web_url?>.php" target="_blank">지점 페이지 이동</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <img src="../img/net-prev.png" class="net_prev net_prev01">
                    <img src="../img/net-next.png" class="net_next net_next01">
                </div>
            </div>
            <div class="contents">
                <div class="swiper_inner">
                    <div class="swiper-container map_slide02">
                        <div class="map02" data-aos="fade-up">
                            <img src="../img/map02.png">
                            <div class="swiper-pagination04"></div>
                        </div>
                        <div class="swiper-wrapper">
                            <?php
                            $bSql="SELECT * FROM branch ORDER BY num ASC LIMIT 5, 3";
                            $bRes=mysqli_query($conn, $bSql);
                            $b=0;
                            while($bRow=mysqli_fetch_array($bRes)){
                                $branch=$bRow['branch_name'];
                                $addr=$bRow['addr'];
                                $detail=$bRow['detail'];
                                $tel=$bRow['tel'];
                                $kakao=$bRow['kakao'];
                                $web_url=$bRow['web_url'];

                                $bcSql="SELECT * FROM branch_contact WHERE branch='$branch'";
                                $bcRes=mysqli_query($conn, $bcSql);
                                $bcRow=mysqli_fetch_array($bcRes);
                                $kakao=$bcRow['kakao'];
                                $blog=$bcRow['blog'];
                                $naver=$bcRow['naver_res'];
                            ?>
                            <div class="swiper-slide" data-aos="fade-up">
                                <h2>로담한의원 <?php echo $branch?></h2>
                                <p><?php echo $addr?> <?php echo $detail?></p>
                                <div class="sl_box">
                                    <a href="tel:02-3444-7523">
                                        <img src="../img/icon-g-call.png">
                                        <span><?php echo $tel?></span>
                                    </a>
                                    <a href="<?php echo $kakao?>" target="_blank">
                                        <img src="../img/icon-g-talk.png">
                                        <span>카카오톡 상담</span>
                                    </a>
                                    <a href="<?php echo $blog?>" target="_blank">
                                        <img src="../img/icon-g-blog.png">
                                        <span>네이버 블로그</span>
                                    </a>
                                    <a href="<?php echo $naver?>" target="_blank">
                                        <img src="../img/icon-g-naver.png">
                                        <span>네이버 예약</span>
                                    </a>
                                </div>
                                <a href="../branch/<?php echo $web_url?>.php" target="_blank">지점 페이지 이동</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <img src="../img/net-prev.png" class="net_prev net_prev02">
                    <img src="../img/net-next.png" class="net_next net_next02">
                </div>
            </div>
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
            var mainS = $(".main_slide").innerHeight();
            var record = $(".record").innerHeight();
            var subS = $(".sub_slide").innerHeight();
            var youtube = $(".youtube").innerHeight();
            var treat = $(".treat").innerHeight();
            var network = $(".network").innerHeight();
            var totalHeight = mainS + record + subS + youtube + treat + network;

            // console.log();

            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
            };

            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "sticky",
                });
                $(".q_bottom").css({
                    "position" : "relative",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "fixed",
                });
                $(".q_bottom").css({
                    "position" : "fixed",
                });
            };
        });

        $(".floating").draggable({
            axis: "x",
            drag: function(e) {
                var test = $(this);
                var testNum = test.position().left;
                var Num = Math.abs(testNum);
                // console.log(Num);
                if ( Num > 30 ) {
                    e.preventDefault();
                }
            }
        });

        $(window).scroll(function(){
            var mainHeight00 = $(window).scrollTop();
            var mainS00 = $(".main_slide").innerHeight();

            // console.log(mainHeight00);
            // console.log(mainS00);

            if ( mainHeight00 > 50 ) {
                $(".odometer").addClass("on");
            }
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

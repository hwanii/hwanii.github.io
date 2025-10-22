<!DOCTYPE html>
<html lang="ko">
<?php include 'connect.php';?>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title></title>
    <meta name="description" content="">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/opengraph-img.jpg" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="홈페이지 URL 입력" />
    <meta name="robots" content="index,follow" />
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="keywords" content="">
    <!-- Chrome on Android -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="rgba(0,0,0,0)">
    <meta name="naver-site-verification" content="01f26d1bf9dfb238fe359fb66ee4c816281dd2fe" />
    <link rel="canonical" href="홈페이지 URL 입력">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
$iSql="SELECT * FROM information";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$name=$iRow['name'];
$email=$iRow['email'];
$insta=$iRow['insta'];
$bank=$iRow['bank'];
$bank_number=$iRow['bank_number'];
$file=$iRow['file'];

$nSql="SELECT * FROM sns";
$nRes=mysqli_query($conn, $nSql);
$nRow=mysqli_fetch_array($nRes);
$facebook=$nRow['facebook'];
$youtube=$nRow['youtube'];
$instagram=$nRow['insta'];
$naver=$nRow['naver'];
$tiktok=$nRow['tiktok'];
$kakao_open=$nRow['kakao_open'];
?>
<body class="wrap">
    <header>
        <div class="inner">
            <div class="left">
                <?php
                if($naver){
                ?>
                <a href="<?php echo $naver?>" target="_blank"><img src="img/icon-naver.png" alt=""></a>
                <?php } 
                if($insta){
                ?>
                <a href="<?php echo $insta?>" target="_blank"><img src="img/icon-insta.png" alt=""></a>
                <?php } 
                if($file){
                ?>
                <a href="./img/info/<?php echo $file?>" download><img src="img/icon-pdf.png" alt=""></a>
                <?php } 
                if($kakao_open){
                ?>
                <a href="<?php echo $kakao_open?>" target="_blank"><img src="img/icon-talk.png" alt=""></a>
                <?php } ?>
            </div>
            <div class="center">
                <img src="img/logo.png" onclick="location.href='index.php'">
                <div class="gnb">
                    <a href="#intro" class="page_scroll">인사말</a>
                    <a href="#career" class="page_scroll">경력 소개</a>
                    <a href="#mc" class="page_scroll">방송 MC</a>
                    <a href="#live" class="page_scroll">라이브 커머스</a>
                    <a href="#model" class="page_scroll">모델 활동</a>
                </div>
            </div>
            <img src="img/icon-menu.png" alt="메뉴 버튼" class="ham">
        </div>
    </header>
    <aside>
        <img src="img/logo.png">
        <div class="gnb">
            <a href="#intro" class="page_scroll">인사말</a>
            <a href="#career" class="page_scroll">경력 소개</a>
            <a href="#mc" class="page_scroll">방송 MC</a>
            <a href="#live" class="page_scroll">라이브 커머스</a>
            <a href="#model" class="page_scroll">모델 활동</a>
        </div>
        <div class="bottom">
            <p><?php echo $name?></p>
            <p>E-MAIL : <?php echo $email?></p>
            <p>INSTA : <?php echo $insta?></p>
            <p>BANK : <?php echo $bank_number?> &#91;<?php echo $bank?>&#93;</p>
            <i id="copybtn1" onclick="copyToclipboard();" title="계좌번호 복사하기">복사</i>
        </div>
        <span>닫기</span>
    </aside>
    <div class="aside_bg"></div>
    <section class="swiper-container main_slide">
        <div class="swiper-wrapper">
            <?php
            $sSql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
            $sRes=mysqli_query($conn, $sSql);
            while($sRow=mysqli_fetch_array($sRes)){
                $sThumb=$sRow['background'];
            ?>
            <div class="swiper-slide" style="background: url('./img/slide/<?php echo $sThumb?>') no-repeat center/cover;"></div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section id="intro">
        <div class="inner">
            <div class="left">
                <div class="title">
                    <h2>인사말</h2>
                    <p>INTRODUCE</p>
                </div>
                <?php
                $cSql="SELECT * FROM greeting";
                $cRes=mysqli_query($conn, $cSql);
                $cRow=mysqli_fetch_array($cRes);
                echo $cRow['contents'];
                ?>
            </div>
            <img src="img/intro/<?php echo $cRow['thumb']?>">
        </div>
    </section>
    <section id="career">
        <div class="inner">
            <div class="title black_title">
                <h2>경력소개</h2>
                <p>career</p>
            </div>
            <div class="career">
                <div class="swiper-container career_slide left">
                    <div class="swiper-wrapper">
                        <?php
                        $cSql="SELECT * FROM career_img WHERE background!='' ORDER BY `number` ASC";
                        $cRes=mysqli_query($conn, $cSql);
                        while($cRow=mysqli_fetch_array($cRes)){
                            $cThumb=$cRow['background'];
                        ?>
                        <div class="swiper-slide"><img src="img/career/<?php echo $cThumb?>"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination01"></div>
                </div>
                <div class="right">
                    <?php
                    $dSql="SELECT DATE_FORMAT(`date`, '%Y') AS `year` FROM history ORDER BY `date` DESC";
                    $dRes=mysqli_query($conn, $dSql);
                    while($dRow=mysqli_fetch_array($dRes)){
                        $year=$dRow['year'];
                        $sql="SELECT * FROM history WHERE DATE_FORMAT(`date`, '%Y')='$year' ORDER BY `date` DESC";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $dTit=$row['title'];
                    ?>
                    <div>
                        <h2><?php echo $year?></h2>
                        <p><?php echo $dTit?></p>
                    </div>
                    <?php } 
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="mc">
        <div class="inner">
            <div class="title">
                <h2>방송 MC</h2>
                <p>MC PORTFOLIO</p>
            </div>
        </div>
        <div class="slider_inner">
            <div class="swiper-container mc_slide">
                <div class="swiper-wrapper">
                    <?php
                    $mSql="SELECT * FROM mc ORDER BY num DESC";
                    $mRes=mysqli_query($conn, $mSql);
                    while($mRow=mysqli_fetch_array($mRes)){
                    ?>
                    <div class="swiper-slide">
                        <img src="img/mc/<?php echo $mRow['thumb']?>">
                        <p><?php echo $mRow['title'];?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <img src="img/w-double-prev.png" class="prev prev01">
            <img src="img/w-double-next.png" class="next next01">
        </div>
    </section>
    <section id="live">
        <div class="inner">
            <div class="head">
                <div class="title black_title">
                    <h2>라이브 커머스</h2>
                    <p>LIVE COMMERCE</p>
                </div>
                <ul class="live_category">
                    <?php
                    $pSql="SELECT * FROM portfolio ORDER BY num ASC";
                    $pRes=mysqli_query($conn, $pSql);
                    $p=1;
                    while($pRow=mysqli_fetch_array($pRes)){
                        $portfolio_name=$pRow['portfolio_name'];
                    ?>
                    <li <?php echo ($p==1) ? 'class="on"' : ''?>><?php echo $portfolio_name?></li>
                    <?php $p++; } ?>
                </ul>
            </div>
        </div>
        <div class="slider_inner">
            <?php
            $plSql="SELECT * FROM portfolio ORDER BY num ASC";
            $plRes=mysqli_query($conn, $plSql);
            $o=1;
            while($plRow=mysqli_fetch_array($plRes)){
                $portfolio=$plRow['portfolio_name'];
            ?>
            <div class="live_contents <?php echo ($o==1) ? "active" : ""?>">
                <div class="swiper-container live_slide live_slide0<?php echo $o?>">
                    <div class="swiper-wrapper">
                        <?php
                        $oSql="SELECT * FROM portfolio_list WHERE portfolio='$portfolio' ORDER BY num DESC";
                        $oRes=mysqli_query($conn, $oSql);
                        while($oRow=mysqli_fetch_array($oRes)){
                            $pTitle=$oRow['title'];
                            $pThumb=$oRow['thumb'];
                            $pAddr=$oRow['addr'];
                        ?>
                        <div class="swiper-slide">
                            <img src="img/live/<?php echo $pThumb?>">
                            <p><?php echo $pTitle?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <img src="img/b-double-prev.png" class="prev prev0<?php echo $o+1?>">
                <img src="img/b-double-next.png" class="next next0<?php echo $o+1?>">
            </div>
            <?php 
            $o++;
            } ?>
        </div>
    </section>
    <section id="model">
        <div class="inner">
            <div class="title">
                <h2>모델 활동</h2>
                <p>MODEL</p>
            </div>
            <div class="model">
                <?php
                $oSql="SELECT * FROM model ORDER BY num DESC";
                $oRes=mysqli_query($conn, $oSql);
                if(!empty($oRes) || $oRes==true){
                while($oRow=mysqli_fetch_array($oRes)){
                    $oThumb=$oRow['thumb'];
                ?>
                <img src="img/model/<?php echo $oThumb?>">
                <?php } 
                } ?>
            </div>
        </div>
    </section>
    <form method="POST" action="counsel.php" target="ifrm">
    <section class="bottom_fix">
        <div class="inner">
            <div class="left">
                <div>
                    <h2>이름</h2>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <h2>전화번호</h2>
                    <input type="tel" name="tel" required>
                </div>
            </div>
            <div class="right">
                <div>
                    <div>
                        <input type="checkbox" id="chk1" required>
                        <span><i><img src="img/check.png"></i></span>
                        <p>개인정보취급방침 동의</p>
                    </div>
                    <a href="javascript:void(0);">&#91;전문보기&#93;</a>
                </div>
                <button>상담 신청</button>
            </div>
        </div>
    </section>
    </form>
    <form method="POST" action="counsel.php" target="ifrm">
    <section class="bottom_fix_mob">
        <div class="inner">
            <div class="top">
                <h2>상담 신청 하기</h2>
                <img src="img/slide-prev-arrow.png">
            </div>
            <div class="bottom">
                <div class="name">
                    <h2>이름</h2>
                    <input type="text" name="name" required>
                </div>
                <div class="phone">
                    <h2>전화번호</h2>
                    <input type="tel" name="tel" required>
                </div>
                <div class="pri_contents">
                    <div class="pri">
                        <div>
                            <input type="checkbox" id="chk2" required>
                            <span><i><img src="img/check.png"></i></span>
                            <p>개인정보취급방침 동의</p>
                        </div>
                        <a href="javascript:void(0);">&#91;전문보기&#93;</a>
                    </div>
                    <button>상담 신청</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="inner">
            <img src="img/logo.png">
            <div class="middle">
                <div class="left">
                    <p><?php echo $name?></p>
                    <p>E-MAIL : <?php echo $email?></p>
                    <p>INSTA : <?php echo $insta?></p>
                    <p>BANK : <?php echo $bank_number?> &#91;<?php echo $bank?>&#93;</p>
                </div>
                <div class="right">
                    <div>
                        <a href="javascript:void(0);">정보무단수집거부</a>
                        <a href="javascript:void(0);">사이트이용약관</a>
                        <a href="admin/loginpage.php">관리자모드</a>
                    </div>
                    <p class="bottom">ALL RIGHTS RESERVED 2023 COMPANY</p>
                </div>
            </div>
        </div>
    </footer>
    <?php include 'privacy.php';?>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var intro = $("#intro").innerHeight();
            var career = $("#career").innerHeight();
            var mc = $("#mc").innerHeight();
            var live = $("#live").innerHeight();
            var model = $("#model").innerHeight();
            var totalHeight = intro + career + mc + live + model;

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
                $(".bottom_fix_mob").css({
                    "position" : "sticky",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".bottom_fix_mob").css({
                    "position" : "fixed",
                });
            };

        });

        function copyToClipboard(val) {
            var t = document.createElement("textarea");
            document.body.appendChild(t);
            t.value = val;
            t.select();
            document.execCommand('copy');
            document.body.removeChild(t);
        }
        
        $('#copybtn1').click(function() {
            var textCopy = '<?php echo $bank_number?> [<?php echo $bank?>]'
            copyToClipboard(textCopy);
            alert('계좌번호를 복사했습니다.');
        });
    })
</script>

<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date(" H:i:s");
$yester = date("Y-m-d", strtotime($currdt."-1 day"));// 어제 날짜
$userip = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) 
    $referer = $_SERVER['HTTP_REFERER'];  
else 
    $referer = ""; 
if($conn){
    $sql="SELECT * FROM tb_stat_visit WHERE regip='$userip' AND regdate='$currdt'";
    $res=mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    // 처음 방문했는지 검사
    if($rows==0) { 
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>




</html>

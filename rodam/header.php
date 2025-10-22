<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

@ob_start();
@session_start();
$user=$_COOKIE['user'];

$urSql="SELECT * FROM member WHERE id='$user'";
$urRes=mysqli_query($conn, $urSql);
$urRow=mysqli_fetch_array($urRes);
$uName=$urRow['name'];
$uTel=$urRow['tel'];

function rtn_mobile_chk() {
    // 모바일 기종(배열 순서 중요, 대소문자 구분 안함)
    $ary_m = array("iPhone","iPod","IPad","Android","Blackberry","SymbianOS|SCH-M\d+","Opera Mini","Windows CE","Nokia","Sony","Samsung","LGTelecom","SKT","Mobile","Phone");

    for($i=0; $i<count($ary_m); $i++){
        if(preg_match("/$ary_m[$i]/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return $ary_m[$i];
            break;
        }
    }
    return "PC";
}

// 사용예 
$chk_m = rtn_mobile_chk();

$chk_De = "";

if($chk_m == "PC"){
    $chk_De = "pc";
} else {
    $chk_De = "mobile";
    $now=basename($_SERVER['PHP_SELF']);
    ?>
    <script>
        location.href="./m/<?php echo $now ?>";
    </script>
    <?php
}

$iSql="SELECT * FROM infor";
$iRes=mysqli_query($conn, $iSql);
$iRow=mysqli_fetch_array($iRes);
$ic=$iRow['kor_company'];
$im=$iRow['main_white'];
$ib=$iRow['main_blank'];
$if=$iRow['f_number'];
$it=$iRow['tel'];
$ie=$iRow['email'];
?>
<div class="menu_btn">
    <span></span>
    <span></span>
    <span></span>
</div>
<header>
    <div class="inner">
        <h1><a href="index.php"><img src="admin/img/logo/<?php echo $im?>"></a></h1>
        <ul class="gnb">
            <li>
                <a href="coratherapy.php">새살침 코라테라피</a>
                <ul>
                    <li><a href="coratherapy.php">새살침 코라테라피란?</a></li>
                    <li><a href="philosophy.php">진료 철학</a></li>
                    <li><a href="fact.php">오해하지 마세요</a></li>
                </ul>
            </li>
            <li><a href="sub02_01.php">여드름 패인 흉터</a></li>
            <li><a href="sub03.php">수두/대상포진 흉터</a></li>
            <li><a href="sub04.php">수술/성형 흉터</a></li>
            <li><a href="sub05.php">기타 패인 흉터</a></li>
            <li><a href="sub06.php">여드름</a></li>
            <li><a href="sub07.php">모공 치료</a></li>
            <li><a href="sub08.php">다이어트</a></li>
            <li><a href="sub09.php">전후 사진</a></li>
            <li><a href="https://byrodam.com/" target="_blank">바이로담</a></li>
        </ul>
        <div class="right">
            <?php if($user){ ?>
            <div class="top_log">
                <a href="logout.php">로그아웃</a>
                <span></span>
                <a href="mypage.php">마이페이지</a>
            </div>
            <?php } else { ?>
            <div class="top_log">
                <a href="login.php">로그인</a>
                <span></span>
                <a href="join.php">회원가입</a>
            </div>
            <?php } ?>
            <div class="header_select">
                <div>
                    <h2>지점안내</h2>
                    <img src="img/select-down-w-arrow.png">
                </div>
                <ul>
                    <?php
                    $hSql="SELECT * FROM branch ORDER BY num ASC";
                    $hRes=mysqli_query($conn, $hSql);
                    while($hRow=mysqli_fetch_array($hRes)){
                        $hbn=$hRow['branch_name'];
                        $hw=$hRow['web_url'];
                    ?>
                    <li>
                        <a href="branch/<?php echo $hw?>.php" target="_blank">
                            <span></span>
                            <p><?php echo $hbn?></p>
                            <i></i>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_slide_inner">
        <div class="swiper-container header_slide">
            <div class="swiper-wrapper">
                <?php
                $sSql="SELECT * FROM slide_pc_header ORDER BY num ASC";
                $sRes=mysqli_query($conn, $sSql);
                while($sRow=mysqli_fetch_array($sRes)){
                    $sLink=$sRow['link'];
                    $sFile=$sRow['file'];
                ?>
                <a href="<?php echo ($sLink) ? $sLink : "javascript:void(0)" ?>" target="_blank" class="swiper-slide">
                    <img src="admin/img/slide/pc/<?php echo $sFile?>">
                </a>
                <?php } ?>
            </div>
        </div>
        <img src="img/header-prev.png" class="header_prev">
        <img src="img/header-next.png" class="header_next">
    </div>
</header>

<div class="right_fix">
    <a href="https://www.youtube.com/@rodam_haniwon" target="_blank">
        <img src="img/icon-youtube.png">
        <p>유튜브 바로가기</p>
    </a>
    <a href="javascript:void(0);">
        <img src="img/icon-cal.png">
        <p>상담/예약 신청</p>
    </a>
    <a href="javascript:void(0);">
        <img src="img/icon-kakao.png">
        <p>카톡 상담/예약</p>
    </a>
</div>

<form method="POST" action="reservation.php" target="cIfrm">
<input type="hidden" name="hidden" value="hReset">
<div class="reservation_pop">
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <h2>상담/예약 신청</h2>
    <p>- 빠른 상담/예약을 원하시면<br>지점별 플러스친구를 이용해주세요</p>
    <input type="text" name="name" value="<?php echo $uName?>" placeholder="이름" required>
    <input type="tel" name="tel" value="<?php echo $uTel?>" placeholder="연락처 ex) 01011112222" required>
    <div>
        <select name="branch" required>
            <option value="" selected disabled style="display:none">지점 선택</option>
            <?php
            $brSql="SELECT * FROM branch ORDER BY num ASC";
            $brRes=mysqli_query($conn, $brSql);
            while($brRow=mysqli_fetch_array($brRes)){
            ?>
            <option value="<?php echo $brRow['branch_name']?>"><?php echo $brRow['branch_name']?></option>
            <?php } ?>
        </select>
        <select name="type" required>
            <option value="" selected disabled style="display:none">상담 분야</option>
            <option value="여드름흉터">여드름흉터</option>
            <option value="수두/대상포진흉터">수두/대상포진흉터</option>
            <option value="수술/성형흉터">수술/성형흉터</option>
            <option value="기타 패인 흉터">기타 패인 흉터</option>
            <option value="여드름/모공·탄력">여드름/모공·탄력</option>
            <option value="다이어트">다이어트</option>
        </select>
    </div>
    <label>
        <input type="checkbox">
        <span>개인정보 수집/이용 동의하기</span>
    </label>
    <button>상담신청</button>
    <input type="reset" id="hReset" style="display:none">
</div>
</form>
<div class="pop_bg"></div>
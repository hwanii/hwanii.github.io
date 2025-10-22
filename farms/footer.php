<?php
if(!isset($_SESSION)) { @session_start(); } 
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
        $_SESSION['visit'] = "1";
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
<footer>
    <div class="inner">
        <div class="top">
            <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="farms biotech logo"></a></h1>
            <div class="sns">
                <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/insta.png" alt="인스타그램 바로가기"></a>
                <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/youtube.png" alt="유튜브 바로가기"></a>
                <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/blog.png" alt="네이버 블로그 바로가기"></a>
                <a href="<?php echo $sns[3]?>" target="_blank"><img src="<?php echo $root?>img/kakao.png" alt="카카오톡 바로가기"></a>
                <a href="https://smartstore.naver.com/farms_biotech" target="_blank"><img src="<?php echo $root?>img/shopping.png" alt="쇼핑 바로가기"></a>
            </div>
        </div>
        <div class="bottom">
            <div class="left">
                <div>
                    <h3>상호명</h3>
                    <p>팜스 바이오텍</p>
                </div>
                <div>
                    <h3>대표자명</h3>
                    <p>이재훈</p>
                </div>
                <div>
                    <h3>사업장 주소</h3>
                    <p>31116 충청남도 천안시 동남구 단대로 119 (안서동)단국대 생명공학창업보육센터 309호</p>
                </div>
                <div>
                    <h3>대표 전화</h3>
                    <p>070-8845-3542</p>
                </div>
                <div>
                    <h3>사업자 등록번호</h3>
                    <p>4230701574</p>
                </div>
                <div>
                    <h3>통신판매업 신고번호</h3>
                    <p>제2020-충남천안-1527호</p>
                </div>
                <div>
                    <h3>개인정보보호책임자</h3>
                    <p>이재훈</p>
                </div>
            </div>
            <div class="right">
                <a href="<?php echo $root?>sub/site.php">사이트이용약관</a>
                <a href="<?php echo $root?>sub/privacy.php">개인정보취급방침</a>
                <a href="<?php echo $root?>admin/">관리자모드</a>
            </div>
        </div>
        <p class="copy">Copyright © 팜스 바이오텍. All Rights Reserved</p>
    </div>
</footer>
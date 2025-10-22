<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$snSql="SELECT * FROM sns ORDER BY num ASC";
$snRes=mysqli_query($conn, $snSql);
$sns=array();
while($snRow=mysqli_fetch_array($snRes)){
    array_push($sns, $snRow['url']);
}
?>
<header>
    <div class="inner">
        <div class="top-header">
            <div class="txt">
                <div>
                    <p>전화</p>
                    <span>070.8845.3542</span>
                </div>
                <div>
                    <p>이메일</p>
                    <span>farmsbiotech@naver.com</span>
                </div>
            </div>
            <div class="sns">
                <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/top-insta.png" alt="인스타그램 바로가기"></a>
                <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/top-youtube.png" alt="유튜브 바로가기"></a>
                <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/top-blog.png" alt="블로그 바로가기"></a>
                <a href="<?php echo $sns[3]?>" target="_blank"><img src="<?php echo $root?>img/top-kakao.png" alt="카카오톡 바로가기"></a>
                <a href="https://smartstore.naver.com/farms_biotech" target="_blank"><img src="<?php echo $root?>img/top-shop.png" alt="쇼핑 바로가기"></a>
            </div>
        </div>
        <div class="h-menu">
            <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt="메뉴버튼"></div>
            <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="GNP Logo"></a></h1>
            <nav>
                <ul class="gnb">
                    <li>
                        <a href="<?php echo $root?>sub/introduce.php">COMPANY</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                            <li><a href="<?php echo $root?>sub/vision.php">비전</a></li>
                            <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                            <!-- <li><a href="<?php echo $root?>sub/capa.php">회사역량</a></li> -->
                            <li><a href="<?php echo $root?>sub/eq.php">보유장비</a></li>
                            <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/business.php">BUSINESS</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/business.php">사업분야</a></li>
                            <li><a href="<?php echo $root?>sub/licenses.php">허가사항</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/bio.php">PRODUCT</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/all.php">제품 전체보기</a></li>
                            <li><a href="<?php echo $root?>sub/bio.php">생물학적 제제</a></li>
                            <li><a href="<?php echo $root?>sub/edu.php">교육,분석용 배지</a></li>
                            <li><a href="<?php echo $root?>sub/micro.php">미생물 배양용 분말배지</a></li>
                            <li><a href="<?php echo $root?>sub/etc.php">기타</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/notice.php">COMMUNITY</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                            <li><a href="<?php echo $root?>sub/board.php">게시판</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $root?>sub/ask.php">CONTACT</a>
                        <ul>
                            <li><a href="<?php echo $root?>sub/ask.php">문의하기</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<aside>
    <h1 class="a-logo"><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt="GNP Logo"></a></h1>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0);">COMPANY</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/vision.php">비전</a></li>
                <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                <!-- <li><a href="<?php echo $root?>sub/capa.php">회사역량</a></li> -->
                <li><a href="<?php echo $root?>sub/eq.php">보유장비</a></li>
                <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">BUSINESS</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/business.php">사업분야</a></li>
                <li><a href="<?php echo $root?>sub/licenses.php">허가사항</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">PRODUCT</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/all.php">제품 전체보기</a></li>
                <li><a href="<?php echo $root?>sub/bio.php">생물학적 제제</a></li>
                <li><a href="<?php echo $root?>sub/edu.php">교육,분석용 배지</a></li>
                <li><a href="<?php echo $root?>sub/micro.php">미생물 배양용 분말배지</a></li>
                <li><a href="<?php echo $root?>sub/etc.php">기타</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">COMMUNITY</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/board.php">게시판</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">CONTACT</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/ask.php">문의하기</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="back-bg"></div>
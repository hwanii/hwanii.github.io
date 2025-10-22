<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$sSql="SELECT * FROM sns ORDER BY num ASC";
$sRes=mysqli_query($conn, $sSql);
$sns=array();
while($sRow=mysqli_fetch_array($sRes)){
    array_push($sns, $sRow['url']);
}

$basename=basename($_SERVER['PHP_SELF']);
define("_BBC_PAGE_NAME", $basename); 
define("_BBCLONE_DIR", $root."bbclone/"); 
define("COUNTER", _BBCLONE_DIR."mark_page.php"); 
if (is_readable(COUNTER)) include_once(COUNTER); 
?>
<header>
    <div class="top_inner">
        <div class="top_inner01">
            <h2>SINCE 2014</h2>
            <img src="<?php echo $root?>img/h-top-text01.png" alt="">
            <div class="sns">
                <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
                <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/icon-blog.png" alt=""></a>
                <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/icon-cafe.png" alt=""></a>
                <a href="<?php echo $sns[3]?>" target="_blank"><img src="<?php echo $root?>img/icon-kakao.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="inner">
        <div class="ham-btn"><img src="<?php echo $root?>img/ham.png" alt=""></div>
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
        <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/h-top-text02.png" alt=""></a></h2>
        <ul class="gnb">
            <li>
                <a href="<?php echo $root?>sub/about.php">국제리샤필라테스협회</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/about.php">ABOUT US</a></li>
                    <li><a href="<?php echo $root?>sub/teacher.php">교육 강사 소개</a></li>
                </ul>
            </li> 
            <li>
                <a href="<?php echo $root?>sub/ilpa.php">교육 소개</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/ilpa.php">ILPA란</a></li>
                    <li><a href="<?php echo $root?>sub/expert_process.php">전문가 과정 커리큘럼</a></li>
                    <li><a href="<?php echo $root?>sub/deepen_process.php">심화 과정 커리큘럼</a></li>
                    <li><a href="<?php echo $root?>sub/pma.php">PMA 자격 과정</a></li>
                    <li><a href="<?php echo $root?>sub/benefit.php">교육혜택</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/head_edu.php">교육 일정</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/head_edu.php">본사 교육일정</a></li>
                    <li><a href="<?php echo $root?>sub/branch_edu.php">지부 교육일정</a></li>
                    <li><a href="<?php echo $root?>sub/workshop.php">워크샵 일정</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/branch.php">교육지부</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/branch.php">지부 안내</a></li>
                    <li><a href="<?php echo $root?>sub/branch_recruit.php">지부 모집</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $root?>sub/qna.php">커뮤니티</a>
                <ul>
                    <li><a href="<?php echo $root?>sub/qna.php">Q&A</a></li>
                    <li><a href="<?php echo $root?>sub/sketch.php">교육현장 / 스케치</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<aside>
    <div class="logo">
        <h1><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/logo.png" alt=""></a></h1>
        <h2><a href="<?php echo $root?>index.php"><img src="<?php echo $root?>img/h-top-text02.png" alt=""></a></h2>
    </div>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <ul class="gnb">
        <li><a href="<?php echo $root?>index.php">HOME</a></li>
        <li>
            <a href="javascript:void(0);">국제리샤필라테스협회
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/about.php">ABOUT US</a></li>
                <li><a href="<?php echo $root?>sub/teacher.php">교육 강사 소개</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">교육 소개
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/ilpa.php">ILPA란</a></li>
                <li><a href="<?php echo $root?>sub/expert_process.php">전문가 과정 커리큘럼</a></li>
                <li><a href="<?php echo $root?>sub/deepen_process.php">심화 과정 커리큘럼</a></li>
                <li><a href="<?php echo $root?>sub/pma.php">PMA 자격 과정</a></li>
                <li><a href="<?php echo $root?>sub/benefit.php">교육혜택</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">교육 일정
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/head_edu.php">본사 교육일정</a></li>
                <li><a href="<?php echo $root?>sub/branch_edu.php">지부 교육일정</a></li>
                <li><a href="<?php echo $root?>sub/workshop.php">워크샵 일정</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">교육지부
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/branch.php">지부 안내</a></li>
                <li><a href="<?php echo $root?>sub/branch_recruit.php">지부 모집</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);">커뮤니티
                <div class="plus">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/qna.php">Q&A</a></li>
                <li><a href="<?php echo $root?>sub/sketch.php">교육현장 / 스케치</a></li>
            </ul>
        </li>
    </ul>
    <div class="aside-sns">
        <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
        <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/icon-blog.png" alt=""></a>
        <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/icon-cafe.png" alt=""></a>
        <a href="<?php echo $sns[3]?>" target="_blank"><img src="<?php echo $root?>img/icon-kakao.png" alt=""></a>
    </div>
</aside>
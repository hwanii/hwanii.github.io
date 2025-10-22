<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}

$sSql="SELECT * FROM sns";
$sRes=mysqli_query($conn, $sSql);
$sRow=mysqli_fetch_array($sRes);
$store=$sRow['store'];

if($root){
?>
<div class="header">
    <div class="main_header">
        <div class="inner">
            <h1 class="logo">
                <a href="<?php echo $root?>index.php">
                    <p></p>
                </a>
            </h1>
            <ul class="gnb">
                <li class="<?php echo ($header=="intro") ? "on" : ""?>"><a href="<?php echo $root?>sub/introduce.php">회사소개</a></li>
                <li class="<?php echo ($header=="facility") ? "on" : ""?>"><a href="<?php echo $root?>sub/plant.php">시설 설비</a></li>
                <li class="<?php echo ($header=="type") ? "on" : ""?>"><a href="<?php echo $root?>sub/oem.php">사업분야</a></li>
                <li class="<?php echo ($header=="product") ? "on" : ""?>"><a href="<?php echo $root?>sub/jam.php">제품소개</a></li>
                <li class="<?php echo ($header=="customer") ? "on" : ""?>"><a href="<?php echo $root?>sub/notice.php">고객센터</a></li>
            </ul>
            <div class="right">
                <a href="<?php echo $root?>sub/estimate.php">문의</a>
                <div>
                    <a href="<?php echo $store?>" target="_blank"></a>
                    <p style="display:none"></p>
                </div>
                <span></span>
            </div>
        </div>
    </div>
    <div class="sub_header">
        <div class="inner">
            <span class="empty"></span>
            <div class="sub_gnb">
                <div>
                    <a href="<?php echo $root?>sub/introduce.php">인사말</a>
                    <a href="<?php echo $root?>sub/organization.php">조직도</a>
                    <a href="<?php echo $root?>sub/history.php">연혁</a>
                    <a href="<?php echo $root?>sub/vision.php">비전</a>
                    <a href="<?php echo $root?>sub/certification.php">인증서</a>
                    <a href="<?php echo $root?>sub/map.php">오시는 길</a>
                </div>
                <div>
                    <a href="<?php echo $root?>sub/plant.php">시설안내</a>
                    <a href="<?php echo $root?>sub/facility.php">설비안내</a>
                </div>
                <div>
                    <a href="<?php echo $root?>sub/oem.php">OEM 생산</a>
                    <a href="<?php echo $root?>sub/production.php">자체 생산</a>
                </div>
                <div>
                    <a href="<?php echo $root?>sub/jam.php">잼</a>
                    <a href="<?php echo $root?>sub/juice.php">쥬스</a>
                    <a href="<?php echo $root?>sub/tea.php">전통차</a>
                </div>
                <div>
                    <a href="<?php echo $root?>sub/notice.php">공지사항</a>
                    <a href="<?php echo $root?>sub/video.php">영상 게시판</a>
                    <a href="<?php echo $root?>sub/gallery.php">사진 게시판</a>
                    <a href="<?php echo $root?>sub/estimate.php">견적 문의</a>
                    <a href="<?php echo $root?>sub/visit.php">견학 신청</a>
                </div>
            </div>
        </div>
    </div>
    <div class="search_box_contents" style="display:none">
        <div class="search_box">
            <input type="text">
            <button>검색</button>
        </div>
    </div>
</div>
<aside>
    <div class="top">
        <h1 class="logo">
            <a href="../index.php">
                <p></p>
            </a>
        </h1>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="gnb">
        <li>
            <a href="javascript:void(0)">회사소개</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                <li><a href="<?php echo $root?>sub/organization.php">조직도</a></li>
                <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                <li><a href="<?php echo $root?>sub/vision.php">비전</a></li>
                <li><a href="<?php echo $root?>sub/certification.php">인증서</a></li>
                <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">시설 설비</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/plant.php">시설안내</a></li>
                <li><a href="<?php echo $root?>sub/facility.php">설비안내</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">사업분야</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/oem.php">OEM 생산</a></li>
                <li><a href="<?php echo $root?>sub/production.php">자체 생산</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">제품소개</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/jam.php">잼</a></li>
                <li><a href="<?php echo $root?>sub/juice.php">쥬스</a></li>
                <li><a href="<?php echo $root?>sub/tea.php">전통차</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)">고객센터</a>
            <ul class="depth">
                <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                <li><a href="<?php echo $root?>sub/video.php">영상 게시판</a></li>
                <li><a href="<?php echo $root?>sub/gallery.php">사진 게시판</a></li>
                <li><a href="<?php echo $root?>sub/estimate.php">견적 문의</a></li>
                <li><a href="<?php echo $root?>sub/visit.php">견학 신청</a></li>
            </ul>
        </li>
    </ul>
</aside>
<div class="back-bg"></div>
<?php } else { ?>
    <header>
        <div class="main_header">
            <div class="inner">
                <h1 class="logo">
                    <a href="<?php echo $root?>index.php">
                        <p></p>
                    </a>
                </h1>
                <ul class="gnb">
                    <li><a href="<?php echo $root?>sub/introduce.php">회사소개</a></li>
                    <li><a href="<?php echo $root?>sub/plant.php">시설 설비</a></li>
                    <li><a href="<?php echo $root?>sub/oem.php">사업분야</a></li>
                    <li><a href="<?php echo $root?>sub/jam.php">제품소개</a></li>
                    <li><a href="<?php echo $root?>sub/notice.php">고객센터</a></li>
                </ul>
                <div class="right">
                    <a href="<?php echo $root?>sub/estimate.php">문의</a>
                    <div>
                        <a href="<?php echo $store?>" target="_blank"></a>
                        <p style="display:none"></p>
                    </div>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="sub_header">
            <div class="inner">
                <span class="empty"></span>
                <div class="sub_gnb">
                    <div>
                        <a href="<?php echo $root?>sub/introduce.php">인사말</a>
                        <a href="<?php echo $root?>sub/organization.php">조직도</a>
                        <a href="<?php echo $root?>sub/history.php">연혁</a>
                        <a href="<?php echo $root?>sub/vision.php">비전</a>
                        <a href="<?php echo $root?>sub/certification.php">인증서</a>
                        <a href="<?php echo $root?>sub/map.php">오시는 길</a>
                    </div>
                    <div>
                        <a href="<?php echo $root?>sub/plant.php">시설안내</a>
                        <a href="<?php echo $root?>sub/facility.php">설비안내</a>
                    </div>
                    <div>
                        <a href="<?php echo $root?>sub/oem.php">OEM 생산</a>
                        <a href="<?php echo $root?>sub/production.php">자체 생산</a>
                    </div>
                    <div>
                        <a href="<?php echo $root?>sub/jam.php">잼</a>
                        <a href="<?php echo $root?>sub/juice.php">쥬스</a>
                        <a href="<?php echo $root?>sub/tea.php">전통차</a>
                    </div>
                    <div>
                        <a href="<?php echo $root?>sub/notice.php">공지사항</a>
                        <a href="<?php echo $root?>sub/video.php">영상 게시판</a>
                        <a href="<?php echo $root?>sub/gallery.php">사진 게시판</a>
                        <a href="<?php echo $root?>sub/estimate.php">견적 문의</a>
                        <a href="<?php echo $root?>sub/visit.php">견학 신청</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_box_contents" style="display:none">
            <div class="search_box">
                <input type="text">
                <button>검색</button>
            </div>
        </div>
    </header>
    <aside>
        <div class="top">
            <h1 class="logo">
                <a href="<?php echo $root?>index.php">
                    <p></p>
                </a>
            </h1>
            <div class="close">
                <span></span>
                <span></span>
            </div>
        </div>
        <ul class="gnb">
            <li>
                <a href="javascript:void(0)">회사소개</a>
                <ul class="depth">
                    <li><a href="<?php echo $root?>sub/introduce.php">인사말</a></li>
                    <li><a href="<?php echo $root?>sub/organization.php">조직도</a></li>
                    <li><a href="<?php echo $root?>sub/history.php">연혁</a></li>
                    <li><a href="<?php echo $root?>sub/vision.php">비전</a></li>
                    <li><a href="<?php echo $root?>sub/certification.php">인증서</a></li>
                    <li><a href="<?php echo $root?>sub/map.php">오시는 길</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">시설 설비</a>
                <ul class="depth">
                    <li><a href="<?php echo $root?>sub/plant.php">시설안내</a></li>
                    <li><a href="<?php echo $root?>sub/facility.php">설비안내</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">사업분야</a>
                <ul class="depth">
                    <li><a href="<?php echo $root?>sub/oem.php">OEM 생산</a></li>
                    <li><a href="<?php echo $root?>sub/production.php">자체 생산</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">제품소개</a>
                <ul class="depth">
                    <li><a href="<?php echo $root?>sub/jam.php">잼</a></li>
                    <li><a href="<?php echo $root?>sub/juice.php">쥬스</a></li>
                    <li><a href="<?php echo $root?>sub/tea.php">전통차</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">고객센터</a>
                <ul class="depth">
                    <li><a href="<?php echo $root?>sub/notice.php">공지사항</a></li>
                    <li><a href="<?php echo $root?>sub/video.php">영상 게시판</a></li>
                    <li><a href="<?php echo $root?>sub/gallery.php">사진 게시판</a></li>
                    <li><a href="<?php echo $root?>sub/estimate.php">견적 문의</a></li>
                    <li><a href="<?php echo $root?>sub/visit.php">견학 신청</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <div class="back-bg"></div>
<?php } ?>
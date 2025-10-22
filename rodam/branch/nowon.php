<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
    $base=explode(".", basename($_SERVER['PHP_SELF']));
    
    $bsSql="SELECT * FROM branch WHERE web_url='$base[0]'";
    $bsRes=mysqli_query($conn, $bsSql);
    $bsRow=mysqli_fetch_array($bsRes);
    $rb=$bsRow['branch_name'];
    include 'header.php'; 

    $sql="SELECT * FROM branch WHERE branch_name='$rb'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $addr=$row['addr'];
    $detail=$row['detail'];

    $bSql="SELECT * FROM branch_contact WHERE branch='$rb'";
    $bRes=mysqli_query($conn, $bSql);
    $bRow=mysqli_fetch_array($bRes);
    $tel=$bRow['tel'];

    $lSql="SELECT * FROM branch_slide WHERE branch='$rb'";
    $lRes=mysqli_query($conn, $lSql);
    $lRow=mysqli_fetch_array($lRes);
    ?>
    <section class="branch_banner" style="background: url('../admin/img/branch_banner/<?php echo $lRow['thumb']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <p class="serif">로담한의원 <b><?php echo $rb?></b></p>
            <a href="tel:051-791-0200" class="serif"><?php echo str_replace("-", ".", $tel)?></a>
        </div>
    </section>
    <section class="time">
        <div class="title" data-aos="fade-up">
            <h2>로담한의원 <?php echo $rb?> 진료시간</h2>
            <p>진료에 불편한 점이 없도록 최선의 노력을 다하겠습니다.</p>
        </div>
        <div class="time_table" data-aos="fade-up">
            <div class="top">
                <h2></h2>
                <h2>월요일</h2>
                <h2>화요일</h2>
                <h2>수요일</h2>
                <h2>목요일</h2>
                <h2>금요일</h2>
                <h2>토요일</h2>
            </div>
            <?php
            $tSql="SELECT * FROM branch_time WHERE branch='$rb'";
            $tRes=mysqli_query($conn, $tSql);
            $tRow=mysqli_fetch_array($tRes);
            ?>
            <ul class="list">
                <li>오전진료</li>
                <li <?php echo ($tRow['m1']=="") ? "class='none'" : ""?>><?php echo ($tRow['m1']=="") ? "<p></p><span></span>" : $tRow['m1'];?></li>
                <li <?php echo ($tRow['m2']=="") ? "class='none'" : ""?>><?php echo ($tRow['m2']=="") ? "<p></p><span></span>" : $tRow['m2'];?></li>
                <li <?php echo ($tRow['m3']=="") ? "class='none'" : ""?>><?php echo ($tRow['m3']=="") ? "<p></p><span></span>" : $tRow['m3'];?></li>
                <li <?php echo ($tRow['m4']=="") ? "class='none'" : ""?>><?php echo ($tRow['m4']=="") ? "<p></p><span></span>" : $tRow['m4'];?></li>
                <li <?php echo ($tRow['m5']=="") ? "class='none'" : ""?>><?php echo ($tRow['m5']=="") ? "<p></p><span></span>" : $tRow['m5'];?></li>
                <li <?php echo ($tRow['m6']=="") ? "class='none'" : ""?>><?php echo ($tRow['m6']=="") ? "<p></p><span></span>" : $tRow['m6'];?></li>
            </ul>
            <ul class="list">
                <li>오후진료</li>
                <li <?php echo ($tRow['a1']=="") ? "class='none'" : ""?>><?php echo ($tRow['a1']=="") ? "<p></p><span></span>" : $tRow['a1'];?></li>
                <li <?php echo ($tRow['a2']=="") ? "class='none'" : ""?>><?php echo ($tRow['a2']=="") ? "<p></p><span></span>" : $tRow['a2'];?></li>
                <li <?php echo ($tRow['a3']=="") ? "class='none'" : ""?>><?php echo ($tRow['a3']=="") ? "<p></p><span></span>" : $tRow['a3'];?></li>
                <li <?php echo ($tRow['a4']=="") ? "class='none'" : ""?>><?php echo ($tRow['a4']=="") ? "<p></p><span></span>" : $tRow['a4'];?></li>
                <li <?php echo ($tRow['a5']=="") ? "class='none'" : ""?>><?php echo ($tRow['a5']=="") ? "<p></p><span></span>" : $tRow['a5'];?></li>
                <li <?php echo ($tRow['a6']=="") ? "class='none'" : ""?>><?php echo ($tRow['a6']=="") ? "<p></p><span></span>" : $tRow['a6'];?></li>
            </ul>
            <ul class="list">
                <li>야간진료</li>
                <li <?php echo ($tRow['n1']=="") ? "class='none'" : ""?>><?php echo ($tRow['n1']=="") ? "<p></p><span></span>" : $tRow['n1'];?></li>
                <li <?php echo ($tRow['n2']=="") ? "class='none'" : ""?>><?php echo ($tRow['n2']=="") ? "<p></p><span></span>" : $tRow['n2'];?></li>
                <li <?php echo ($tRow['n3']=="") ? "class='none'" : ""?>><?php echo ($tRow['n3']=="") ? "<p></p><span></span>" : $tRow['n3'];?></li>
                <li <?php echo ($tRow['n4']=="") ? "class='none'" : ""?>><?php echo ($tRow['n4']=="") ? "<p></p><span></span>" : $tRow['n4'];?></li>
                <li <?php echo ($tRow['n5']=="") ? "class='none'" : ""?>><?php echo ($tRow['n5']=="") ? "<p></p><span></span>" : $tRow['n5'];?></li>
                <li <?php echo ($tRow['n6']=="") ? "class='none'" : ""?>><?php echo ($tRow['n6']=="") ? "<p></p><span></span>" : $tRow['n6'];?></li>
            </ul>
        </div>
        <div class="time_etc" data-aos="fade-up">
            <?php if($tRow['note1']){?>
            <div>
                <p <?php echo ($tRow['note1']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note1']?></p>
                <p <?php echo ($tRow['note2']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note2']?></p>
            </div>
            <?php } 
            if($tRow['note3']){?>
            <div>
                <p <?php echo ($tRow['note3']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note3']?></p>
                <p <?php echo ($tRow['note4']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note4']?></p>
            </div>
            <?php }
            if($tRow['note5']){?>
            <div>
                <p <?php echo ($tRow['note5']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note5']?></p>
                <p <?php echo ($tRow['note6']=="") ? "style='display:none'" : ""?>><?php echo $tRow['note6']?></p>
            </div>
            <?php } ?>
        </div>
        <div class="time_link">
            <?php
            $bSql="SELECT * FROM branch_contact WHERE branch='$rb'";
            $bRes=mysqli_query($conn, $bSql);
            $bRow=mysqli_fetch_array($bRes);
            $tel=$bRow['tel'];
            $kakao=$bRow['kakao'];
            $insta=$bRow['insta'];
            $blog=$bRow['blog'];
            $youtube=$bRow['youtube'];
            ?>
            <a href="tel:<?php echo $tel?>" data-aos="fade-up">
                <p>전화문의</p>
                <img src="../img/icon-branch-call.png">
            </a>
            <a href="<?php echo $kakao?>" target="_blank" data-aos="fade-up">
                <p>카카오 상담</p>
                <img src="../img/icon-branch-kakao.png">
            </a>
            <a href="javascript:void(0);" class="res_pop_btn" data-aos="fade-up">
                <p>빠른 상담</p>
                <img src="../img/icon-branch-talk.png">
            </a>
            <a href="<?php echo $insta?>" target="_blank" data-aos="fade-up">
                <p>인스타그램</p>
                <img src="../img/icon-branch-insta.png">
            </a>
            <a href="<?php echo $blog?>" target="_blank" data-aos="fade-up">
                <p>네이버 블로그</p>
                <img src="../img/icon-branch-blog.png">
            </a>
            <a href="<?php echo $youtube?>" target="_blank" data-aos="fade-up">
                <p><?php echo $rb?> 유튜브</p>
                <img src="../img/icon-branch-youtube.png">
            </a>
        </div>
    </section>
    <section class="gallery">
        <div class="title" data-aos="fade-up">
            <h2>로담한의원 <?php echo $rb?> 둘러보기</h2>
            <p>방문하시는 분들의 마음을 편안하게 할 수 있도록 시설 및 설비를 유지하고 있습니다.</p>
        </div>
        <div class="gallery_contents">
            <?php
            $fSql="SELECT * FROM branch_facility WHERE branch='$rb'";
            $fRes=mysqli_query($conn, $fSql);
            while($fRow=mysqli_fetch_array($fRes)){
            ?>
            <img src="../admin/img/facility/<?php echo $fRow['thumb'];?>" data-aos="fade-up">
            <?php } ?>
        </div>
        <div class="gallery_pop">
            <div class="close">
                <span></span>
                <span></span>
            </div>
            <img src="">
        </div>
        <div class="gallery_bg"></div>
    </section>
    <section class="doctors">
        <div class="title" data-aos="fade-up">
            <h2>의료진 소개</h2>
            <p>흉터로 아프셨던 마음까지 치료해드리도록 노력하겠습니다.</p>
        </div>
        <?php
        $sSql="SELECT * FROM branch_staff WHERE branch='$rb'";
        $sRes=mysqli_query($conn, $sSql);
        while($sRow=mysqli_fetch_array($sRes)){
        ?>
        <div class="contents">
            <img src="../admin/img/staff/<?php echo $sRow['staff']?>" data-aos="fade-right">
            <div class="right" data-aos="fade-up">
                <div class="top">
                    <h2><?php echo $rb?></h2>
                    <p><?php echo $sRow['name']?></p>
                    <span><?php echo $sRow['position']?></span>
                </div>
                <p><?php echo nl2br($sRow['greeting']);?></p>
                <div class="bottom">
                    <ul class="doctor_cate">
                        <li class="<?php echo ($sRow['career']!="") ? "on" : ""?>" <?php echo ($sRow['career']=="") ? "style='display:none'" : ""?>>
                            <span></span>
                            <p>경력&학력 사항</p>
                        </li>
                        <li class="<?php echo ($sRow['career']=="" && $sRow['interview']!="") ? "on" : ""?>" <?php echo ($sRow['interview']=="") ? "style='display:none'" : ""?>>
                            <span></span>
                            <p>인터뷰 영상보기</p>
                        </li>
                    </ul>
                    <div class="bot_box">
                        <ul class="<?php echo ($sRow['career']!="") ? "active" : ""?>" <?php echo ($sRow['career']=="") ? "style='display:none'" : ""?>>
                            <?php echo $sRow['career']?>
                        </ul>
                        <ul class="<?php echo ($sRow['career']=="" && $sRow['interview']!="") ? "active" : ""?>" <?php echo ($sRow['interview']=="") ? "style='display:none'" : ""?>>
                            <div>
                                <?php echo $sRow['interview'];?>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <section class="review">
        <div class="title" data-aos="fade-up">
            <h2><?php echo $rb?> 후기 안내</h2>
            <p>방문하신 분들이 남겨주신 <?php echo $rb?>의 후기입니다.</p>
        </div>
        <div class="inner" data-aos="fade-up">
            <div class="top">
                <div>
                    <h2 class="serif">로담 한의원 <?php echo $rb?> 베스트 리뷰</h2>
                    <div class="swiper_btn">
                        <img src="../img/branch-prev.png" class="review_prev">
                        <img src="../img/branch-next.png" class="review_next">
                    </div>
                </div>
            </div>
            <div class="swiper-container review_slide">
                <div class="swiper-wrapper">
                    <?php
                    $rSql="SELECT * FROM branch_review WHERE branch='$rb'";
                    $rRes=mysqli_query($conn, $rSql);
                    while($rRow=mysqli_fetch_array($rRes)){
                    ?>
                    <div class="swiper-slide">
                        <h2><?php echo $rRow['title']?></h2>
                        <p>
                            <?php echo strip_tags($rRow['contents'])?>
                        </p>
                        <?php if($rRow['link']){ ?>
                        <a href="<?php echo $rRow['link'];?>" target="_blank"><img src="../img/branch-naver.png"></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="way" data-aos="fade-up">
        <div class="title">
            <h2><?php echo $rb?> 오시는 길</h2>
            <p>로담 <?php echo $rb?>으로 오시는 길을 안내해 드립니다.</p>
        </div>
        <div class="map_box">
            <?php
            $mSql="SELECT * FROM branch_map WHERE branch='$rb'";
            $mRes=mysqli_query($conn, $mSql);
            $mRow=mysqli_fetch_array($mRes);
            echo $mRow['contents'];
            ?>
        </div>
        <div class="information">
            <div class="contents" data-aos="fade-up">
                <h2>로담한의원 <?php echo $rb?></h2>
                <div class="right">
                    <div class="address">
                        <p><?php echo $addr." ".$detail?></p>
                        <button id="copybtn1" onclick="copyToclipboard();" title="주소 복사하기">복사하기</button>
                    </div>
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <h2>지하철</h2>
                <div class="right">
                    <div class="subway">
                        <p>노원역</p>
                        <div>
                            <span class="line07Seoul">7</span>
                            <span class="line04Seoul">4</span>
                        </div>
                        <p>8번 출구 도보 1분</p>
                    </div>
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <h2>버스</h2>
                <div class="right">
                    <div class="bus">
                        <div class="top">
                            <p>노원역8번출구 ㅣ 11931</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11931/bus-station/83571?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>147</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1120</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원15</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>노원역5번출구 ㅣ 11596</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11596/bus-station/124157?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1167</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원05</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>상계6동우체국 ㅣ 11590</p>
                            <a href="https://map.naver.com/v5/bus/bus-station/부전시장입구/bus-station/623338?c=18,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1120</span>
                                <span>1144</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원05</span>
                            </div>
                        </div>
                        <div class="green airport">
                            <h2>공항</h2>
                            <div class="bus_num">
                                <span>6101</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>롯데백화점.노원역4번출구 ㅣ 11556</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11556/bus-station/124185?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원05</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>노원구청앞 ㅣ 11563</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11563/bus-station/195824?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>147</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1120</span>
                                <span>1144</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원05</span>
                                <span>노원15</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>롯데백화점<?php echo $rb?>.노원역4번출구 ㅣ 11212</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11212/bus-station/107827?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1132</span>
                                <span>1167</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>상계주공6단지 ㅣ 11255</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11255/bus-station/107745?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>102</span>
                                <span>105</span>
                                <span>111</span>
                                <span>146</span>
                                <span>8146</span>
                                <span>N13</span>
                                <span>N61</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1120</span>
                                <span>1137</span>
                                <span>1139</span>
                            </div>
                        </div>
                        <div class="green jikhang">
                            <h2>직행</h2>
                            <div class="bus_num">
                                <span>3100</span>
                                <span>3100N</span>
                                <span>3200</span>
                                <span>3500</span>
                                <span>3600</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>노원구청 ㅣ 11252</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11252/bus-station/107606?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>147</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1120</span>
                                <span>1129</span>
                                <span>1138</span>
                                <span>1142</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>1-8</span>
                                <span>7</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원08</span>
                                <span>노원15</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>노원역9번출구 ㅣ 11210</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11210/bus-station/107785?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>102</span>
                                <span>N13</span>
                                <span>N61</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1129</span>
                                <span>1138</span>
                                <span>1142</span>
                                <span>1154</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>1-8</span>
                                <span>72-1</span>
                            </div>
                        </div>
                        <div class="green jikhang">
                            <h2>직행</h2>
                            <div class="bus_num">
                                <span>1100</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원02</span>
                                <span>노원08</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>노원구청 ㅣ 11251</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11251/bus-station/107588?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1129</span>
                                <span>1138</span>
                                <span>1142</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>노원02</span>
                                <span>노원08</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>ehqhdausgjtlgjawkd ㅣ 11185</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11185/bus-station/107695?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>105</span>
                                <span>111</span>
                                <span>146</span>
                                <span>8146</span>
                                <span>N13</span>
                                <span>N61</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1137</span>
                                <span>1139</span>
                                <span>1144</span>
                                <span>1154</span>
                                <span>1167</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>7</span>
                                <span>72-1</span>
                            </div>
                        </div>
                        <div class="green jikhang">
                            <h2>직행</h2>
                            <div class="bus_num">
                                <span>3100</span>
                                <span>3100N</span>
                                <span>3200</span>
                                <span>3500</span>
                                <span>3600</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>도봉면허시험장 ㅣ 11186</p>
                            <a href="https://map.naver.com/p/bus/bus-station/11186/bus-station/107682?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>105</span>
                                <span>111</span>
                                <span>146</span>
                                <span>8146</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>1137</span>
                                <span>1139</span>
                                <span>1144</span>
                                <span>1154</span>
                                <span>1167</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>7</span>
                            </div>
                        </div>
                        <div class="green jikhang">
                            <h2>직행</h2>
                            <div class="bus_num">
                                <span>3100</span>
                                <span>3100N</span>
                                <span>3200</span>
                                <span>3500</span>
                                <span>3600</span>
                            </div>
                        </div>
                    </div>
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
<script src="../js/script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var mainS = $(".branch_banner").innerHeight();
            var time = $(".time").innerHeight();
            var gallery = $(".gallery").innerHeight();
            var doctors = $(".doctors").innerHeight();
            var review = $(".review").innerHeight();
            var way = $(".way").innerHeight();
            var totalHeight = mainS + time + gallery + doctors + review + way;

            if (mainHeight > totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "sticky",
                });
                $(".right_fix").css({
                    "bottom" : "280px"
                });
            };

            if (mainHeight < totalHeight - 750) {
                $(".bottom_fix").css({
                    "position" : "fixed",
                });
                $(".right_fix").css({
                    "bottom" : "60px"
                });
            };
        });

        $(".floating").draggable({
        axis: "x",
        drag: function(e) {
            var test = $(this);
            var testNum = test.position().left;
            var Num = Math.abs(testNum);
            if ( Num > 30 ) {
                e.preventDefault();
            }
        }
    });

        $(window).scroll(function(){
            var mainHeight00 = $(window).scrollTop();
            var mainS00 = $(".main_slide").innerHeight();

            if ( mainHeight00 > mainS00 -400 ) {
                $(".odometer").addClass("on");
            }
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
            var textCopy = '<?php echo $addr." ".$detail?>'
            copyToClipboard(textCopy);
            alert('주소를 복사했습니다.');
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

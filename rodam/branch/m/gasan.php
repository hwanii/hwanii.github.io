<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../../css/aos.css">
    <link rel="stylesheet" href="../../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../css/m-style.css">
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
    <section class="branch_banner" style="background: url('../../admin/img/branch_banner/<?php echo $lRow['thumb']?>') no-repeat center/cover;">
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
                <li>오전</li>
                <li <?php echo ($tRow['m1']=="") ? "class='none'" : ""?>><?php echo ($tRow['m1']=="") ? "<p></p><span></span>" : "<i>".$tRow['m1']."</i>";?></li>
                <li <?php echo ($tRow['m2']=="") ? "class='none'" : ""?>><?php echo ($tRow['m2']=="") ? "<p></p><span></span>" : "<i>".$tRow['m2']."</i>";?></li>
                <li <?php echo ($tRow['m3']=="") ? "class='none'" : ""?>><?php echo ($tRow['m3']=="") ? "<p></p><span></span>" : "<i>".$tRow['m3']."</i>";?></li>
                <li <?php echo ($tRow['m4']=="") ? "class='none'" : ""?>><?php echo ($tRow['m4']=="") ? "<p></p><span></span>" : "<i>".$tRow['m4']."</i>";?></li>
                <li <?php echo ($tRow['m5']=="") ? "class='none'" : ""?>><?php echo ($tRow['m5']=="") ? "<p></p><span></span>" : "<i>".$tRow['m5']."</i>";?></li>
                <li <?php echo ($tRow['m6']=="") ? "class='none'" : ""?>><?php echo ($tRow['m6']=="") ? "<p></p><span></span>" : "<i>".$tRow['m6']."</i>";?></li>
            </ul>
            <ul class="list">
                <li>오후</li>
                <li <?php echo ($tRow['a1']=="") ? "class='none'" : ""?>><?php echo ($tRow['a1']=="") ? "<p></p><span></span>" : "<i>".$tRow['a1']."</i>";?></li>
                <li <?php echo ($tRow['a2']=="") ? "class='none'" : ""?>><?php echo ($tRow['a2']=="") ? "<p></p><span></span>" : "<i>".$tRow['a2']."</i>";?></li>
                <li <?php echo ($tRow['a3']=="") ? "class='none'" : ""?>><?php echo ($tRow['a3']=="") ? "<p></p><span></span>" : "<i>".$tRow['a3']."</i>";?></li>
                <li <?php echo ($tRow['a4']=="") ? "class='none'" : ""?>><?php echo ($tRow['a4']=="") ? "<p></p><span></span>" : "<i>".$tRow['a4']."</i>";?></li>
                <li <?php echo ($tRow['a5']=="") ? "class='none'" : ""?>><?php echo ($tRow['a5']=="") ? "<p></p><span></span>" : "<i>".$tRow['a5']."</i>";?></li>
                <li <?php echo ($tRow['a6']=="") ? "class='none'" : ""?>><?php echo ($tRow['a6']=="") ? "<p></p><span></span>" : "<i>".$tRow['a6']."</i>";?></li>
            </ul>
            <ul class="list">
                <li>야간</li>
                <li <?php echo ($tRow['n1']=="") ? "class='none'" : ""?>><?php echo ($tRow['n1']=="") ? "<p></p><span></span>" : "<i>".$tRow['n1']."</i>";?></li>
                <li <?php echo ($tRow['n2']=="") ? "class='none'" : ""?>><?php echo ($tRow['n2']=="") ? "<p></p><span></span>" : "<i>".$tRow['n2']."</i>";?></li>
                <li <?php echo ($tRow['n3']=="") ? "class='none'" : ""?>><?php echo ($tRow['n3']=="") ? "<p></p><span></span>" : "<i>".$tRow['n3']."</i>";?></li>
                <li <?php echo ($tRow['n4']=="") ? "class='none'" : ""?>><?php echo ($tRow['n4']=="") ? "<p></p><span></span>" : "<i>".$tRow['n4']."</i>";?></li>
                <li <?php echo ($tRow['n5']=="") ? "class='none'" : ""?>><?php echo ($tRow['n5']=="") ? "<p></p><span></span>" : "<i>".$tRow['n5']."</i>";?></li>
                <li <?php echo ($tRow['n6']=="") ? "class='none'" : ""?>><?php echo ($tRow['n6']=="") ? "<p></p><span></span>" : "<i>".$tRow['n6']."</i>";?></li>
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
                <img src="../../img/icon-branch-call.png">
            </a>
            <a href="<?php echo $kakao?>" target="_blank" data-aos="fade-up">
                <p>카카오 상담</p>
                <img src="../../img/icon-branch-kakao.png">
            </a>
            <a href="javascript:void(0);" class="res_pop_btn" data-aos="fade-up">
                <p>빠른 상담</p>
                <img src="../../img/icon-branch-talk.png">
            </a>
            <a href="<?php echo $insta?>" target="_blank" data-aos="fade-up">
                <p>인스타그램</p>
                <img src="../../img/icon-branch-insta.png">
            </a>
            <a href="<?php echo $blog?>" target="_blank" data-aos="fade-up">
                <p>네이버 블로그</p>
                <img src="../../img/icon-branch-blog.png">
            </a>
            <a href="<?php echo $youtube?>" target="_blank" data-aos="fade-up">
                <p><?php echo $rb?> 유튜브</p>
                <img src="../../img/icon-branch-youtube.png">
            </a>
        </div>
    </section>
    <section class="gallery">
        <div class="title" data-aos="fade-up">
            <h2>로담한의원 <?php echo $rb?> 둘러보기</h2>
            <p>방문하시는 분들의 마음을 편안하게 할 수 있도록<br class="gal_br"> 시설 및 설비를 유지하고 있습니다.</p>
        </div>
        <div class="gallery_contents" data-aos="fade-up">
            <?php
            $fSql="SELECT * FROM branch_facility WHERE branch='$rb'";
            $fRes=mysqli_query($conn, $fSql);
            while($fRow=mysqli_fetch_array($fRes)){
            ?>
            <img src="../../admin/img/facility/<?php echo $fRow['thumb'];?>" data-aos="fade-up">
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
            <img src="../../admin/img/staff/<?php echo $sRow['staff']?>" data-aos="fade-right">
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
                        <li class="<?php echo ($sRow['career']=="") ? "on" : ""?>" <?php echo ($sRow['interview']=="") ? "style='display:none'" : ""?>>
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
                    <h2 class="serif">로담 한의원 <?php echo $rb?><br class="re_br"> 베스트 리뷰</h2>
                    <div class="swiper_btn">
                        <img src="../../img/branch-prev.png" class="review_prev">
                        <img src="../../img/branch-next.png" class="review_next">
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
                        <h2><?php echo $rRow['title'];?></h2>
                        <p>
                            <?php echo nl2br($rRow['contents'])?>
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
                        <p>가산디지털단지역</p>
                        <div>
                            <span class="line07Seoul">7</span>
                            <span class="line01Seoul">1</span>
                        </div>
                        <p>4번 출구 도보 1분</p>
                    </div>
                    <div class="subway">
                        <p>남구로역</p>
                        <div>
                            <span class="line07Seoul">7</span>
                        </div>
                        <p>3번 출구 도보 2분</p>
                    </div>
                </div>
            </div>
            <div class="contents" data-aos="fade-up">
                <h2>버스</h2>
                <div class="right">
                    <div class="bus">
                        <div class="top">
                            <p>국민연금공단구로금천지사앞 ㅣ 18208</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18208/bus-station/126894?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5537</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18603</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18603/bus-station/93086?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>tmxkqoffldkv ㅣ 18227</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18227/bus-station/90215?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5616</span>
                                <span>5712</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18209</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18209/bus-station/123640?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5537</span>
                                <span>5616</span>
                                <span>5712</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18226</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18226/bus-station/123678?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5611</span>
                                <span>5616</span>
                                <span>5712</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천03</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18503</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18503/bus-station/196216?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천03</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>마리오아울렛 ㅣ 18210</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18210/bus-station/122182?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5537</span>
                                <span>5616</span>
                                <span>5712</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천03</span>
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>한신IT타워 ㅣ 18586</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18586/bus-station/193903?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>7호선가산디지털단지역 ㅣ 18999</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18999/bus-station/162754?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>21</span>
                                <span>75</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천05</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>마리오아울렛 ㅣ 18207</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18207/bus-station/122181?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5537</span>
                            </div>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천03</span>
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>이앤씨드림타워7차 ㅣ 18592</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18592/bus-station/93085?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천07</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18107</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18107/bus-station/101814?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>571</span>
                                <span>652</span>
                                <span>653</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5012</span>
                                <span>5528</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>21</span>
                                <span>75</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역1호선앞 ㅣ 18594</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18594/bus-station/196229?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천05</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역입구 ㅣ 18215</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18215/bus-station/206475?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>643</span>
                                <span>651</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5528</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>388</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역1호선 ㅣ 18797</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18797/bus-station/196230?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green town">
                            <h2>마을</h2>
                            <div class="bus_num">
                                <span>금천05</span>
                            </div>
                        </div>
                    </div>
                    <div class="bus">
                        <div class="top">
                            <p>가산디지털단지역 ㅣ 18106</p>
                            <a href="https://map.naver.com/p/bus/bus-station/18106/bus-station/101810?c=15.00,0,0,0,dh" target="_blank">정류장 보기</a>
                        </div>
                        <div class="green gansun">
                            <h2>간선</h2>
                            <div class="bus_num">
                                <span>571</span>
                                <span>652</span>
                            </div>
                        </div>
                        <div class="green jisun">
                            <h2>지선</h2>
                            <div class="bus_num">
                                <span>5012</span>
                                <span>5528</span>
                            </div>
                        </div>
                        <div class="green basic">
                            <h2>일반</h2>
                            <div class="bus_num">
                                <span>75</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="../../js/jquery-3.6.0.min.js"></script>
<script src="../../js/aos.js"></script>
<script src="../../js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/cocoen/dist/cocoen.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="../../js/jquery.ui.touch-punch.min.js"></script>
<script src="../../js/m-script.js"></script>

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

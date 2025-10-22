<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="main_intro">
        <div class="inner">
            <div class="top">
                <div class="left" style=" background: url(img/main01.png) no-repeat center/cover;">
                    <div class="bg"></div>
                    <a href="sub/inquiry.php"><img src="img/slide-txt.png"></a>
                </div>
                <div class="right">
                    <div class="r_top" style="background: url(img/main-color.png) no-repeat center/cover;">
                        <h2>국내 최고 전통의 조찬강연회</h2>
                        <p>(매월, 첫째주 셋째주 수요일) * 1월, 7월 휴회</p>
                    </div>
                    <div class="r_bottom">
                        <div class="swiepr-container main_slide03">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background: url(img/main02-01.png) no-repeat center/cover;">
                                    <div class="bg"></div>
                                    <div class="txt_box">
                                        <h2>AI 미래</h2>
                                        <p>AI 주도권 싸움이 미래의 부를 바꾼다.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="background: url(img/main02-02.png) no-repeat center/cover;">
                                    <div class="bg"></div>
                                    <div class="txt_box">
                                        <h2>관계의 힘</h2>
                                        <p>관계는 미래를 여는 Key</p>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="background: url(img/main02-03.png) no-repeat center/cover;">
                                    <div class="bg"></div>
                                    <div class="txt_box">
                                        <h2>경영전략</h2>
                                        <p>판을 바꾸는 혁신: 디지털 대전환 (Digital Transformation)</p>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="background: url(img/main02-04.png) no-repeat center/cover;">
                                    <div class="bg"></div>
                                    <div class="txt_box">
                                        <h2>세계는 지금</h2>
                                        <p>국제질서 대격변과 신냉전시대의 대한민국의 미래</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination03"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom" style="background: url(img/main03.png) no-repeat center/cover;">
                <div class="bg"></div>
                <div class="txt_box">
                    <h2>FOR FUTURE</h2>
                    <p>수요일 아침 특별한 대화가 당신을 기다립니다.<br>미래에 대한 통찰과 폭넓은 네트워킹에 함께 하십시오.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="forum">
        <div class="inner">
            <div class="title_box">
                <h2>NSI 수요포럼</h2>
                <div class="forum_category">
                    <li class="on">전체보기</li>
                    <li>진행중</li>
                    <li>진행완료</li>
                </div>
            </div>
            <?php $date=date("Y-m-d");?>
            <div class="forum_contents">
                <div class="contents active">
                    <?php
                    $vSql="SELECT * FROM curri_info WHERE curri_type='wedorg' ORDER BY idx DESC LIMIT 6";
                    $vRes=mysqli_query($conn, $vSql);
                    while($vRow=mysqli_fetch_array($vRes)){
                        $idx=$vRow['idx'];
                        $week_type=$vRow['week_type'];
                        $start=$vRow['curri_period_mins'];
                        $end=$vRow['curri_period_mine'];

                        $fSql="select file_org,file_chg from board_file where 1=1 and board_tbname='curri_info' and board_code = 'pc' and board_idx='$idx' order by idx asc limit 0,1";
                        $fRes=mysqli_query($conn, $fSql);
                        $fRow=mysqli_fetch_array($fRes);
                        $file=$fRow['file_chg'];
                    ?>
                    <a href="javascript:change('<?php echo $idx?>')">
                        <div class="forum_num"><p><?php echo $week_type?>회</p></div>
                        <img src="img/img_thumb/<?php echo $file?>">
                        <div class="txt_box">
                            <div>
                                <h2>주제</h2>
                                <p><?php echo $vRow['curri_title']?></p>
                            </div>
                            <div>
                                <h2>연사</h2>
                                <p><?php echo $vRow['spector']?></p>
                            </div>
                            <div>
                                <h2>장소</h2>
                                <p><?php echo $vRow['curri_place']?></p>
                            </div>
                            <div>
                                <h2>일시</h2>
                                <p><?php echo $vRow['curri_period']?>, <?php echo $start?>~<?php echo $end?></p>
                            </div>
                        </div>
                        <span>상세보기</span>
                    </a>
                    <?php } ?>
                </div>
                <div class="contents">
                    <?php
                    $vSql="SELECT * FROM curri_info WHERE curri_type='wedorg' AND DATE_FORMAT(curri_period, '%Y-%m-%d')>='$date' ORDER BY idx DESC LIMIT 6";
                    $vRes=mysqli_query($conn, $vSql);
                    while($vRow=mysqli_fetch_array($vRes)){
                        $idx=$vRow['idx'];
                        $week_type=$vRow['week_type'];
                        $start=$vRow['curri_period_mins'];
                        $end=$vRow['curri_period_mine'];

                        $fSql="select file_org,file_chg from board_file where 1=1 and board_tbname='curri_info' and board_code = 'pc' and board_idx='$idx' order by idx asc limit 0,1";
                        $fRes=mysqli_query($conn, $fSql);
                        $fRow=mysqli_fetch_array($fRes);
                        $file=$fRow['file_chg'];
                    ?>
                    <a href="javascript:change('<?php echo $idx?>')">
                        <div class="forum_num"><p><?php echo $week_type?>회</p></div>
                        <img src="img/img_thumb/<?php echo $file?>">
                        <div class="txt_box">
                            <div>
                                <h2>주제</h2>
                                <p><?php echo $vRow['curri_title']?></p>
                            </div>
                            <div>
                                <h2>연사</h2>
                                <p><?php echo $vRow['spector']?></p>
                            </div>
                            <div>
                                <h2>장소</h2>
                                <p><?php echo $vRow['curri_place']?></p>
                            </div>
                            <div>
                                <h2>일시</h2>
                                <p><?php echo $vRow['curri_period']?>, <?php echo $start?>~<?php echo $end?></p>
                            </div>
                        </div>
                        <span>상세보기</span>
                    </a>
                    <?php } ?>
                </div>
                <div class="contents">
                    <?php
                    $vSql="SELECT * FROM curri_info WHERE curri_type='wedorg' AND curri_period<'$date' ORDER BY idx DESC LIMIT 6";
                    $vRes=mysqli_query($conn, $vSql);
                    while($vRow=mysqli_fetch_array($vRes)){
                        $idx=$vRow['idx'];
                        $week_type=$vRow['week_type'];
                        $start=$vRow['curri_period_mins'];
                        $end=$vRow['curri_period_mine'];

                        $fSql="select file_org,file_chg from board_file where 1=1 and board_tbname='curri_info' and board_code = 'pc' and board_idx='$idx' order by idx asc limit 0,1";
                        $fRes=mysqli_query($conn, $fSql);
                        $fRow=mysqli_fetch_array($fRes);
                        $file=$fRow['file_chg'];
                    ?>
                    <a href="javascript:change('<?php echo $idx?>')">
                        <div class="forum_num"><p><?php echo $week_type?>회</p></div>
                        <img src="img/img_thumb/<?php echo $file?>">
                        <div class="txt_box">
                            <div>
                                <h2>주제</h2>
                                <p><?php echo $vRow['curri_title']?></p>
                            </div>
                            <div>
                                <h2>연사</h2>
                                <p><?php echo $vRow['spector']?></p>
                            </div>
                            <div>
                                <h2>장소</h2>
                                <p><?php echo $vRow['curri_place']?></p>
                            </div>
                            <div>
                                <h2>일시</h2>
                                <p><?php echo $vRow['curri_period']?>, <?php echo $start?>~<?php echo $end?></p>
                            </div>
                        </div>
                        <span>상세보기</span>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="forum_pop">
            <div class="top">
                <h2>강연안내</h2>
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="top_contents">
                <div class="contents">
                    <img id="pop_img" src="">
                    <div class="right">
                        <p id="pop_title"></p>
                        <div>
                            <h2>연사</h2>
                            <span id="pop_sp"></span>
                        </div>
                        <div>
                            <h2>장소</h2>
                            <span id="pop_place"></span>
                        </div>
                        <div>
                            <h2>일시</h2>
                            <span id="pop_period"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_contents">
                <p id="pop_content">
                </p>
            </div>
        </div>
        <div class="forum_bg"></div>
    </section>
    <section class="flow">
        <div class="inner">
            <div class="title_box">
                <h2>FLOW<br><span>포럼 진행순서</span></h2>
            </div>
            <div class="top">
                <div class="left">
                    <div>
                        <h2>접수</h2>
                        <p>06:30 ~ 07:00</p>
                    </div>
                    <div>
                        <h2>조찬</h2>
                        <p>07:00 ~ 07:25</p>
                    </div>
                    <div>
                        <h2>공지 및 연사소개</h2>
                        <p>07:25 ~ 07:30</p>
                    </div>
                    <div>
                        <h2>강연 (40분)</h2>
                        <p>07:30 ~ 08:10</p>
                    </div>
                    <div>
                        <h2>테이블별 네트워킹 및 토의</h2>
                        <p>08:10 ~ 08:30</p>
                    </div>
                    <div>
                        <h2>질의응답 (30분)</h2>
                        <p>08:30 ~ 09:00</p>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <h2>일시</h2>
                        <div> 
                            <p>매월 첫째주, 셋째주 수요일, 오전 7:00 ~ 09:00</p>
                            <p>* 1월과 7월은 휴회입니다. (총 20회 진행)</p>
                        </div>
                    </div>
                    <div>
                        <h2>장소</h2>
                        <div>
                            <p>전국은행연합회관 16F, 뱅커스클럽<br>바이 반얀트리 (02-3705-5111)</p>
                            <p>* 당일 3시간 무료주차 가능</p>
                            <p>주소: (04538) (명동1가 4-1)</p>
                            <p>교통: 2호선 을지로 입구역 하차 (5번 출구)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div id="daumRoughmapContainer1691472233458" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1691472233458",
                        "key" : "2fs66",
                    }).render();
                </script>
            </div>
        </div>
    </section>
    <section class="with">
        <div class="inner">
            <div class="title_box">
                <h2>WITH US<br><span>함께하는 기업</span></h2>
            </div>
            <div class="contents">
                <?php
                $pSql="SELECT * FROM partners ORDER BY num DESC";
                $pRes=mysqli_query($conn, $pSql);
                while($pRow=mysqli_fetch_array($pRes)){
                    $thumb=$pRow['thumb'];
                ?>
                <div><img src="img/partners/<?php echo $thumb?>"></div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
    function change(idx){
        $.ajax({
            url:"sub/pop.php",
            type:"POST",
            data:{idx:idx},
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                var img_src = "img/img_thumb/"+data[0];
                var period = data[4]+", "+data[5]+"~"+data[6];
                $("#pop_img").attr("src", img_src);
                $("#pop_title").text(data[1]);
                $("#pop_sp").text(data[2]);
                $("#pop_place").text(data[3]);
                $("#pop_period").text(period);
                $("#pop_content").html(data[7]);
            }
        })
    }
</script>
</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="sub_banner" style="background: url(../img/sub-banner.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="inner"><img src="../img/sub-banner-txt.png"></div>
    </div>
    <div class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;&#62;&nbsp;&nbsp;강연안내</p>
        </div>
    </div>
    <section class="forum">
        <div class="inner">
            <div class="title_box">
                <h2>강연안내</h2>
                <p>미래에 대한 특별한 대화</p>
            </div>
            <div class="lecture">
                <div class="contents">
                    <img src="../img/lecture01.png">
                    <div class="txt_box">
                        <h2>[ AI 미래 ]</h2>
                        <p>
                            AI 주도권 싸움이 미래의 부를 바꾼다<br>
                            챗GPT, 질문이 돈이 되는 세상, 리딩하려는 이들을 위한 미래 생존 전략<br>
                            AI는 인간을 위협할까? AI, 인간에게 답하다<br>
                            AI는 예술의 창조자? - 과학기술과 예술의 경계<br>
                            AI는 인문학을 먹고 산다 - 인문학으로 인공지능 시대를 주도하라
                        </p>
                    </div>
                </div>
                <div class="contents">
                    <img src="../img/lecture02.png">
                    <div class="txt_box">
                        <h2>[ 관계의 힘 ]</h2>
                        <p>
                            관계의 힘: 미래는 여는 Key<br>
                            슬기로운 직장생활: 조직 내 세대공존을 위한 소통법<br>
                            디지털 세상을 바꿔 놓을 ‘알파세대’가 온다<br>
                            관계에도 유통기한이 있다<br>
                            거인의 노트: 기록은 매일 나를 성장시킨다
                        </p>
                    </div>
                </div>
                <div class="contents">
                    <img src="../img/lecture03.png">
                    <div class="txt_box">
                        <h2>[ 경영전략 ]</h2>
                        <p>
                            환율과 금리로 보는 앞으로 3년 경제전쟁의 미래<br>
                            트렌드 코리아 2024<br>
                            ESG 생존 경영 - 메가 리스크 시대를 돌파하는 기업의 필수 무기<br>
                            판을 바꾸는 혁신: 디지털 대전환<br>
                            진짜 돈이 되는 시장: 1,000만 시니어 시장을 잡아라
                        </p>
                    </div>
                </div>
                <div class="contents">
                    <img src="../img/lecture04.png">
                    <div class="txt_box">
                        <h2>[ 세계는 지금 ]</h2>
                        <p>
                            국제질서 대격변과 신냉전시대의 대한민국의 미래<br>
                            넥스트 China - 왜 인도에 주목해야 하는가?<br>
                            미중 패권전쟁: 한국외교 기로에 서다<br>
                            석유를 지배하는 자, 세계를 지배한다: 중동에서 벌어진 석유 패권전쟁<br>
                            일본경제 부활하는가?: 대외정책 전략과 전망
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="forum_title">다음행사</h2>
            <?php
            $date=date("Y-m-d");

            $sql="SELECT * FROM curri_info WHERE curri_type='wedorg' AND curri_period>='$date' ORDER BY curri_period ASC LIMIT 1";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $idx=$row['idx'];
            $start=$row['curri_period_mins'];
            $end=$row['curri_period_mine'];

            $fSql="select file_org,file_chg from board_file where 1=1 and board_tbname='curri_info' and board_code = 'pc' and board_idx='$idx' order by idx asc limit 0,1";
            $fRes=mysqli_query($conn, $fSql);
            $fRow=mysqli_fetch_array($fRes);
            $file=$fRow['file_chg'];
            ?>
            <div class="next_event">
                <div class="top_contents">
                    <div class="contents">
                        <img src="../img/img_thumb/<?php echo $file?>">
                        <div class="right">
                            <p><?php echo $row['curri_title']?></p>
                            <div>
                                <h2>연사</h2>
                                <span><?php echo $row['spector']?></span>
                            </div>
                            <div>
                                <h2>장소</h2>
                                <span><?php echo $row['curri_place']?></span>
                            </div>
                            <div>
                                <h2>일시</h2>
                                <span><?php echo $row['curri_period']?>, <?php echo $start?>~<?php echo $end?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom_contents">
                    <p><?php echo $row['curri_content']?></p>
                </div>
            </div>
            <h2 class="forum_title">지난행사</h2>
            <div class="forum_contents">
                <div class="contents">
                    <?php
                    $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                    $list = 9; // 페이지 당 목록 개수
                    $b_pageNum_list = 5; // 페이지 당 블록 갯수
                    $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                    
                    $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                    $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                    
                    $pSql="SELECT COUNT(*) AS cnt FROM curri_info WHERE curri_type='wedorg' AND curri_period<'$date'";
                    $pRes=mysqli_query($conn, $pSql);
                    $pRow=mysqli_fetch_array($pRes);
                    $total_count=$pRow['cnt'];
                    
                    $total_page = ceil($total_count / $list); // 총 페이지 수 
                    if($b_end_page > $total_page) $b_end_page = $total_page;
                    
                    $limit=($page - 1) * $list; // 출력 시작 번호

                    $vSql="SELECT * FROM curri_info WHERE curri_type='wedorg' AND curri_period<'$date' ORDER BY idx DESC LIMIT $limit, $list";
                    // echo $vSql;
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
                    <a href="javascript:change(<?php echo $idx?>)">
                        <div class="forum_num"><p><?php echo $week_type?>회</p></div>
                        <img src="../img/img_thumb/<?php echo $file?>">
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
                    <img id="pop_img" src="../img/main04.png">
                    <div class="right">
                        <p id="pop_title">리더의 지혜 - 내 삶의 기준이 되는 8가지 심리학</p>
                        <div>
                            <h2>연사</h2>
                            <span id="pop_sp">김경일 아주대 교수</span>
                        </div>
                        <div>
                            <h2>장소</h2>
                            <span id="pop_place">서울 한국프레스센터 20층 내셔널프레스클럽</span>
                        </div>
                        <div>
                            <h2>일시</h2>
                            <span id="pop_period">2023-08-16, 07:00~09:00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_contents">
                <p id="pop_content">
                    NSI수요포럼 홈페이지를 방문해주신 여러분을 진심으로 환영합니다. 엔에스아이(NSI)는 1991년 비영리 민간연구기관으로 설립후 1992년부터 NSI수요포럼을 32년 넘게 진행하고 있습니다. 지난 32년간 NSI 수요포럼은 각계 오피니언리더 회원들이 참여하는 가운데 국가정책, 경제, 경영, 인문, 과학 등 분야별 최고의 연사를 초청해 강연을 듣고 토론과 대화를 이어나가고 있습니다.
                    <br><br>
                    2023년 'NSI 수요포럼 3.0: 세상을 바라보는 새로운 시선' 으로 새롭게 단장하고, 4개 핵심 주제에 대한 최고의 정보와 인싸이트를 가지고 있는 전문가와 권위자를 모시고 강연과 회원들과의 토론을 진행합니다. 더불어 NSI수요포럼은 실질적인 필요를 충족할 양질의 포럼을 확대하고, 가치 있는 정보와 교류의 장으로 넓혀 나아가겠습니다.
                    <br><br>
                    개인과 기업(단체), 전문가, 미래세대 등 미래를 만들어 가고자 하는 모든분들을 국내 최고 전통의 조찬포럼인 NSI 수요포럼에 초대합니다.
                    많은 관심과 격려를 부탁드립니다. 감사합니다.
                    <br><br>
                    NSI수요포럼 홈페이지를 방문해주신 여러분을 진심으로 환영합니다. 엔에스아이(NSI)는 1991년 비영리 민간연구기관으로 설립후 1992년부터 NSI수요포럼을 32년 넘게 진행하고 있습니다. 지난 32년간 NSI 수요포럼은 각계 오피니언리더 회원들이 참여하는 가운데 국가정책, 경제, 경영, 인문, 과학 등 분야별 최고의 연사를 초청해 강연을 듣고 토론과 대화를 이어나가고 있습니다.
                    <br><br>
                    2023년 'NSI 수요포럼 3.0: 세상을 바라보는 새로운 시선' 으로 새롭게 단장하고, 4개 핵심 주제에 대한 최고의 정보와 인싸이트를 가지고 있는 전문가와 권위자를 모시고 강연과 회원들과의 토론을 진행합니다. 더불어 NSI수요포럼은 실질적인 필요를 충족할 양질의 포럼를 확대하고, 가치 있는 정보와 교류의 장으로 넓혀 나아가겠습니다.
                    <br><br>
                    개인과 기업(단체), 전문가, 미래세대 등 미래를 만들어 가고자 하는 모든분들을 국내 최고 전통의 조찬포럼인 NSI 수요포럼에 초대합니다.
                    많은 관심과 격려를 부탁드립니다. 감사합니다.
                </p>
            </div>
        </div>
        <div class="forum_bg"></div>
        <div class="list_pagination">
            <?php if($block > 1){?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>"><img src="../img/page-prev.png"></a>
            <?php } ?>
            <div class="num">
                <?php
                for($i=$b_start_page;$i<=$b_end_page;$i++){
                    if($page == $i){ // page 와 i 가 같으면 현재 페이지
                    ?>
                    <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                <?php } else { ?>
                    <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i ?>"><?php echo $i?></a>
                <?php } 
                } ?>
            </div>
            <?php
            $total_block = ceil($total_page/$b_pageNum_list);
            if($block < $total_block){
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>"><img src="../img/page-next.png"></a>
            <?php
            }
            ?>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>
<script>
    function change(idx){
        $.ajax({
            url:"pop.php",
            type:"POST",
            data:{idx:idx},
            dataType:"JSON",
            success:function(data){
                // console.log(data);
                var img_src = "../img/img_thumb/"+data[0];
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

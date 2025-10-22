<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/m-sub.css">
</head>

<body>
    <?php include 'header.php';?>
    <?php
    $bnSql="SELECT * FROM mobile_sub_banner";
    $bnRes=mysqli_query($conn, $bnSql);
    $bnRow=mysqli_fetch_array($bnRes);
    ?>
    <section class="sub_banner" style="background: url('../admin/img/mobile_sub_banner/<?php echo $bnRow['file9']?>') no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>새살침 코라테라피</h2>
            <p>CORA THERAPY</p>
        </div>
    </section>
    <div class="menu_flow">
        <div class="inner">
            <h2>HOME</h2>
            <img src="../img/menu-flow.png">
            <h2>새살침 코라테라피</h2>
        </div>
    </div>
    <div class="left_fix">
        <a href="#history_contents" class="page_scroll">
            <div>1</div>
            <p>새살침 히스토리</p>
        </a>
        <a href="#treat0101" class="page_scroll">
            <div>2</div>
            <p>치료 원리</p>
        </a>
        <a href="#custom_treat" class="page_scroll">
            <div>3</div>
            <p>흉터 치료 대상</p>
        </a>
        <a href="#survey" class="page_scroll">
            <div>4</div>
            <p>추천하는 이유</p>
        </a>
        <!-- <a href="#youtube" class="page_scroll">
            <div>5</div>
            <p>유튜브로 보기</p>
        </a> -->
        <a href="#faq" class="page_scroll">
            <div>5</div>
            <p>자주 묻는 질문</p>
        </a>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="left_fix_btn">
        <span></span>
        <span></span>
    </div>
    <section class="intro" style="padding: 80px 0 0;">
        <div class="inner">
            <div class="sub_title orange_title" data-aos="fade-up">
                <h2>INTRODUCING</h2>
                <div class="title_line"></div>
                <p>새살침 코라테라피 소개</p>
            </div>
        </div>
    </section>
    <div class="cora_youtube">
        <div>
            <iframe src="https://www.youtube.com/embed/ujtiVH3y4e4?si=yHy5kLz1xgUze0Q9&amp;controls=0&autoplay=1&mute=1&modestbranding=1&playlist=ujtiVH3y4e4&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <section class="history histroy01" id="history_contents">
        <div class="inner">
            <div class="skin_txt" data-aos="fade-up">
                <h2>1</h2>
                <h3>새살침 HISTORY</h3>
                <h4>2006 <span>새살침 코라테라피의 시작</span></h4>
            </div>
            <p class="history_p">
                한방흉터성형의 대표성을 가진 ‘새살침’ 이름은<br>
                로담한의원의 피부 재생마술사 카페에서 최초로 시작되었습니다.
            </p>
            <div class="his_contents">
                <div class="contents">
                    <div class="img_box">
                        <img src="../img/history-back.png">
                        <img src="../img/cora-start01.png">
                    </div>
                    <h2>
                        로담한의원 강남전 2006년 개원,<br>
                        다음카페(피부 재생마술사)<br>
                        새살침이라는 말 최초 사용
                    </h2>
                    <a href="javascript:void(0);">클릭하고 상세보기</a>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../img/history-back.png">
                        <img src="../img/cora-start02.png">
                    </div>
                    <h2>
                        새살침! 2007년 ‘코라테라피’<br>
                        정식 특허상표 획득!
                    </h2>
                    <a href="javascript:void(0);">클릭하고 상세보기</a>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../img/history-back.png">
                        <img src="../img/cora-start03.png">
                    </div>
                    <h2>
                        논문 &#60;코라테라피(절개침)을 이용한<br>
                        위축성 여드름흉터의 치험례&#62;<br>
                        2012년 11월, &#60;한방 안이비인후 피부과&#62;<br>
                        학회지 제25권 제4호 발표
                    </h2>
                    <a href="javascript:void(0);">클릭하고 상세보기</a>
                </div>
            </div>
            <div class="history_pop">
                <div class="contents">
                    <h2>
                        로담한의원 강남전 2006년 개원, 다음카페(피부 재생마술사)<br>
                        새살침이라는 말 최초 사용
                    </h2>
                    <div>
                        <p>
                            2006년, 한의원에서 흉터치료를 한다라는 것 자체가 전무했던 시절, 강남점본원 홍무석원장은 여드름뿐만 아니라 침시술을 이용한 여드름 흉터를 비롯 패인 ‘함몰흉터에 한방 피부흉터성형’이라는 선구자적인 진료를 시작하게 되었습니다.<br>
                            <br>
                            로담한의원‘에서 운형했던 (피부 재생마술사)카페에서 패인흉터에 ’새살을 돋게 한다‘라는 말에서 자연스럽게 흉터치료를 하는 방법을 ’새살침‘ 이라고 부르게 되었습니다.<br>
                            <br>
                            홍무석원장은 ’새살침‘에 대한 상표권보호를 위해 특허상표신청을 출원하였으나 누구든 쓸 수 있는 보통명사’라는 이유로 특허등록을 거절당했고 그래서 새살 침의 영문 해석인 “Collagen Regeneration Therapy”를 줄여서 “코라테라피(CORA Therapy)”라는 상표로 ‘새살침’ 대신 특허상표 출원을 하게 되었습니다.
                        </p>
                    </div>
                </div>
                <div class="contents">
                    <h2>
                        새살침! 2007년 ‘코라테라피’<br>
                        정식 특허상표 획득!
                    </h2>
                    <div>
                        <p>
                            ‘새살침’ 의 대리 상표로 &#60;코라테라피&#62;는 2006년 8월9일 상표출원하여 2007년 12월17일 정식으로 특허상표 서비스표 등록을 받게 되었습니다.<br>
                            <br>
                            2006년 개원하여 2021년 3월 기준으로 로담한의원의 새살침 코라테라피를 연마해 간 한의사는 대략 100여명 그리고 2012년 ‘한방안이비인후 피부과 학회지’에 논문을 게재하고 약 1년간의 다수의 한의사들에게 학회활동으로 시술방법을 공유한 것이 어느 덧 만 16년차가 되었습니다.<br>
                            <br>
                            치료법이라는 것이 한 시점에서 머물러 있는 것이 아니고 수 많은 임상경험과 세월이 갈수록 발전하는 의료기술과 정보와 더불어 2006년 시작된 새살침 코라테라피보다 2021년 03월 기준으로 로담한의원 전국 지점 네트워크와 함께 치료임상을 공유하며 더 높은 난이도의 피부 흉터치료 완성도를 쌓아 갈 수 있게 되었습니다.
                        </p>
                    </div>
                </div>
                <div class="contents">
                    <h2>
                        논문 &#60;코라테라피(절개침)을 이용한 위축성 여드름흉터의 치험례&#62;<br>
                        2012년 11월, &#60;한방 안이비인후 피부과&#62; 학회지 제25권 제4호 발표
                    </h2>
                    <div>
                        <p>
                            새살침의 다른이름, 코라테라피로 여드름흉터를 치료한 3명의 환자를 몇년간 추적하여 그 치료결과를 논문으로 발표하였습니다.<br>
                            해당 논문은 침을 이용하여 한방 피부흉터성형의 성공적인 결과를 보여줄 수 있는 신호탄과 같았습니다.<br>
                            <br>
                            &#60;절개침&#62;이라고 표기한 것은 침을 ‘ㄱ(기역)자’ 형으로 구부려서 피부흉터 아래의 표피층과 피하조직과 유착된 섬유아세포를 절개하는 침이라고해서 &#60;절개침&#62;이라고 부르게 되었습니다.<br> 
                            즉, 로담한의원의 한방피부흉터 성형에서 사용하는 전용침을 &#60;절개침&#62;이라고 부릅니다.<br>
                            <br>
                            그리고 논문에서는 이 절개침을 이용해서 &#60;교차침법&#62;으로 흉터치료를 하고 있음을 게재하였습니다. 이것은 환자의 피부흉터의 종류, 길이, 넓이, 깊이, 피부재생 능력에 따라 어떤 절개침을 
                            사용하고 피부의 표피층과 피하조직과 유착된 섬유아세포를 끊어내면서 진피층의 공간을 만들면서 피부가 원래 가지고 있는 재생능력을 만들어주는 치료법으로 새살침 코라테라피의 치료 
                            노하우에 해당됩니다.<br>
                            <br>
                            즉, 로담한의원에서 사용하는 절개침은 여타 한의원과 동일한 절개침이 아니며 설령 동일한 절개침을 사용한다고 하더라도 실제 새살을 돋게하는 치료노하우에 해당하는 &#60;교차침법&#62;은 
                            수 많은 임상에서 얻을 수 있습니다.<br>
                            <br>
                            그래서 로담한의원의 수만건의 치료사례는 성공적인 치료노하우로 만들어집니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skin01 history" id="treat0101" style="background-color: #fff;">
        <div class="inner">
            <div class="skin_txt" data-aos="fade-up">
                <h2>2</h2>
                <h3>새살침 코라테라피, 피부 재생의 원리</h3>
                <h4>함몰 흉터, 코라테라피로 새살로 채우다</h4>
            </div>
            <div class="skin_contents01">
                <img src="../img/skin01.png" data-aos="fade-up">
                <div class="right" data-aos="fade-up">
                    <div class="contents">
                        <h3>표피</h3>
                        <div>
                            <p>가장 겉에 있는 피부인 “표피”</p>
                            <span>외부 환경으로부터 피부를 보호하는 층 입니다.</span>
                        </div>
                    </div>
                    <div class="contents">
                        <h3>진피</h3>
                        <div>
                            <p>영양 공급의 주체인 ‘진피’</p>
                            <span>진피에서는 콜라겐이 생성됩니다.</span>
                        </div>
                    </div>
                    <div class="contents">
                        <h3>피하<br>조직</h3>
                        <div>
                            <p>지방으로 구성된 ‘피하조직’</p>
                            <span>피하지방을 지지하는 조직 탄력이 떨어지면, 피부가 처지는 원인이 됩니다.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="treat_work">
        <div class="inner">
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>HOW TO WORK</h2>
                </div>
                <p>새살침 코라테라피가 흉터를 치료하는 원리</p>
            </div>
            <div class="txt_box">
                <h2>우리의 피부는 손상이 일어나면<br>어떻게 대처할까요?</h2>
                <p>
                    외부 바이러스로부터 인체를 보호하기 위해 진피층이 완성되기도 전에 표피가 먼저 덮어버립니다.<br>
                    그 과정에서 진피층의 공간이 함몰되고 유착이 생기면서 패인흉터가 발생합니다.
                </p>
            </div>
            <div class="txt_box">
                <h2>그래서, 함몰흉터·패인흉터 복원을 위해서는<br>진피층을 새롭게 채워야 합니다.</h2>
                <p>
                    새살침 코라테라피는 흉터의 진피층을 자극하여 유착된 곳을 끊어주고,<br>
                    그 공간에 재생물질이 차오르면서 진피층에 새살이 채워질 수 있도록 유도합니다.
                </p>
            </div>
        </div>
    </section>
    <section class="scar_contents">
        <div class="con_inner">
            <div class="top_txt" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>HOW TO WORK</h2>
                </div>
                <p>새살침 코라테라피가 흉터를 자극하는 방법</p>
            </div>
            <div class="contents">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/B22syy7VnrI?si=4pQVZU8LvFkUecjA&amp;controls=0&autoplay=1&mute=1&modestbranding=1&playlist=B22syy7VnrI&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="skin02" style="background-color: #fff;">
        <div class="inner" data-aos="fade-up">
            <div class="top_txt mb40" data-aos="fade-up">
                <div class="t_top_c">
                    <i></i>
                    <h2>HOW TO WORK</h2>
                </div>
                <p>새살침 코라테라피로<br>새살침 코라테라피로 흉터를 치료하는 과정</p>
            </div>
            <div class="swiper-container skin02_slide">
                
            <div class="swiper_pagination03"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p>
                            함몰된 흉터에 침을 이용해<br>
                            결손된 세포를 자극하고, 잘못 뭉쳐진 콜라겐 층을 끊어 주며<br>
                            새살이 올라올 수 있는 공간을 만들어줍니다.
                        </p>
                        <img src="../img/skin02-01.png">
                        <div class="ani01">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p>
                            오랫동안 재생력을 잃은 피부가<br>
                            근본적으로 바뀌면서<br>
                            재생력이 생겨나게 됩니다.
                        </p>
                        <img src="../img/skin02-02.png">
                        <div class="ani02"><img src="../img/small-spin.png"></div>
                        <div class="ani03"><img src="../img/big-spin.png"></div>
                    </div>
                    <div class="swiper-slide">
                        <p>
                            재생력을 스스로 되찾은 피부는<br>
                            스스로 재생을 시작합니다. 시술 횟수를<br>
                            거듭하면서 차곡차곡 새살이 올라옵니다.
                        </p>
                        <img src="../img/skin02-03.png">
                        <div class="ani01">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                            <img src="../img/small-arrow.png">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p>
                            새살이 올라오고<br>
                            각질이 탈락함을 반복하면서<br>
                            주변 정상 피부 높이까지 재생하게 됩니다.
                        </p>
                        <img src="../img/skin02-04.png">
                        <div class="ani04">
                            <img src="../img/big-arrow.png">
                            <img src="../img/big-arrow.png">
                            <img src="../img/big-arrow.png">
                        </div>
                    </div>
                </div>
                <img src="../img/branch-prev.png" class="skin_prev">
                <img src="../img/branch-next.png" class="skin_next">
            </div>
        </div>
    </section>
    <section class="custom_treat" id="custom_treat">
        <div class="inner">
            <div class="skin_txt" data-aos="fade-up">
                <h2>3</h2>
                <h3>새살침 코라테라피, 어떤 치료가 가능할까요?</h3>
                <h4>흉터의 종류별 맞춤 치료</h4>
            </div>
            <p class="history_p">
                흉터 치료의 경험이 많을수록 다양한 흉터의 치료방법과<br>
                예상 효과를 실제 결과와 가깝게 예측할 수 있습니다.
            </p>
            <?php
            $sql="SELECT * FROM sub_coratherapy WHERE cate='pimple'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="custom_contents">
                <h2>여드름 흉터</h2>
                <div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/pimple/<?php echo $row['text1']?>">
                        <div class="txt_box">
                            <h2>아이스픽 형</h2>
                            <p>날카로운 모양의<br>여드름 흉터</p>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/pimple/<?php echo $row['text2']?>">
                        <div class="txt_box">
                            <h2>박스형</h2>
                            <p>경계가 명확하고<br>넓은 형태의 여드름 흉터</p>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/pimple/<?php echo $row['text3']?>">
                        <div class="txt_box">
                            <h2>라운드 형</h2>
                            <p>패인흉터가 둥근 모양의<br>여드름 흉터</p>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/pimple/<?php echo $row['text4']?>">
                        <div class="txt_box">
                            <h2>모공 형</h2>
                            <p>모공처럼 작고 조밀한<br>여드름 흉터</p>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/pimple/<?php echo $row['text5']?>">
                        <div class="txt_box">
                            <h2>복합 형</h2>
                            <p>아이스픽형, 박스형, 라운드형이<br>복합적으로 나타나는 여드름 흉터</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $sql="SELECT * FROM sub_coratherapy WHERE cate='scar'";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            ?>
            <div class="custom_contents">
                <h2>다양한 패인 흉터</h2>
                <div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text1']?>">
                        <div class="txt_box">
                            <h2>사고 함몰 흉터</h2>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text2']?>">
                        <div class="txt_box">
                            <h2>여드름 함몰 흉터</h2>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text3']?>">
                        <div class="txt_box">
                            <h2>봉합 함몰 흉터</h2>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text4']?>">
                        <div class="txt_box">
                            <h2>수두 함몰 흉터</h2>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text5']?>">
                        <div class="txt_box">
                            <h2>손톱 함몰 흉터</h2>
                        </div>
                    </div>
                    <div class="contents">
                        <img src="../admin/img/coratherapy/scar/<?php echo $row['text6']?>">
                        <div class="txt_box">
                            <h2>코 모공 함몰 흉터</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="survey" id="survey">
        <div class="inner">
            <div class="skin_txt" data-aos="fade-up">
                <h2>4</h2>
                <h3>추천하는 이유</h3>
                <h4>REAL SURVEY</h4>
            </div>
            <span class="history_span">
                로담한의원은 구글 온라인 고객설문을 실시간 시행하고 있습니다.<br>
                코라테라피 시술 만족도는 늘 높은 편이며 특히 다른 곳에서 흉터치료 경험이 있으신<br>
                분들 사이에서는 높은 추천율을 받고 있습니다.
            </span>
            <i class="history_i" style="font-style: normal;">
                2019년 1월 ~ 12월 통계 자료 조사<br>
                <span>로담한의원 치료환자 436명</span>
            </i>
            <div class="survey_contents">
                <div class="contents">
                    <div class="odometer">
                        <div class="digit">
                            <div class="digit-container digit-hundred">9 8 7 6 5 4 3 2 1 0 9</div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-ten">5 4 3 2 1 0 9 8 7 6 5</div>
                        </div>
                        <div class="digit text_box">
                            <div class="digit-container">%</div>
                        </div>
                    </div>
                    <h2>평균만족도</h2>
                </div>
                <div class="contents">
                    <div class="odometer">
                        <div class="digit">
                            <div class="digit-container digit-thousand">8 7 6 5 4 3 2 1 0 9 8</div>
                        </div>
                        <div class="digit">
                            <div class="digit-container digit-one">6 5 4 3 2 1 0 9 8 7 6</div>
                        </div>
                        <div class="digit text_box">
                            <div class="digit-container">%</div>
                        </div>
                    </div>
                    <h2>추천의향도</h2>
                </div>
            </div>
            <div class="graph_contents">
                <img src="../img/survey01.png">
                <img src="../img/survey02.png">
            </div>
        </div>
    </section>
    <!-- <section class="watch" id="youtube" data-aos="fade-up">
        <div class="sub_title">
            <h2>WATCH ON</h2>
            <div class="title_line"></div>
            <p>유튜브로 자세히 보기</p>
        </div>
        <div class="swiper-container youtube_slide">
            <div class="swiper-wrapper">
                <a href="" target="_blank" class="swiper-slide"><img src="../img/m-youtube-thumb01.png"></a>
                <a href="" target="_blank" class="swiper-slide"><img src="../img/m-youtube-thumb02.png"></a>
                <a href="" target="_blank" class="swiper-slide"><img src="../img/m-youtube-thumb03.png"></a>
                <a href="" target="_blank" class="swiper-slide"><img src="../img/m-youtube-thumb04.png"></a>
            </div>
            <img src="../img/slide-prev.png" class="you_prev">
            <img src="../img/slide-next.png" class="you_next">
        </div>
        <div class="swiper-container youtube_slide01">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg"></div>
                    <img src="../img/m-youtube-thumb01.png">
                </div>
                <div class="swiper-slide">
                    <div class="bg"></div>
                    <img src="../img/m-youtube-thumb02.png">
                </div>
                <div class="swiper-slide">
                    <div class="bg"></div>
                    <img src="../img/m-youtube-thumb03.png">
                </div>
                <div class="swiper-slide">
                    <div class="bg"></div>
                    <img src="../img/m-youtube-thumb04.png">
                </div>
            </div>
        </div>
    </section> -->
    <section class="faq sub_faq cora_faq" id="faq" style="position: unset; background: #fff;">
        <div class="inner">
            <div class="skin_txt" data-aos="fade-up">
                <h2>5</h2>
                <h3>자주 묻는 질문</h3>
                <h4>새살침 코라테라피 자주 묻는 질문들 입니다.</h4>
            </div>
            <div class="faq_contents" style="margin: 30px auto 0;">
                <?php
                $fSql="SELECT * FROM sub_faq WHERE `page`='sub00'";
                $fRes=mysqli_query($conn, $fSql);
                $fNo=1;
                while($fRow=mysqli_fetch_array($fRes)){
                    $fTitle=$fRow['title'];
                    $fContents=$fRow['contents'];
                ?>
                <ul>
                    <li>
                        <h2><?php echo sprintf('%02d',$fNo++);?></h2>
                        <p><?php echo $fTitle?></p>
                    </li>
                    <li>
                        <?php echo nl2br($fContents)?>
                    </li>
                </ul>
                <?php } ?>
            </div>
            <!-- <a href="" class="charge_go" data-aos="fade-up">
                <p>새살침 코라테라피 <b>더 알아보기</b></p>
                <i></i>
                <img src="../img/link-black.png">
            </a> -->
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
<script src="../js/m-script.js"></script>

<script>
    $(function () {
        $(window).scroll(function(){
            var mainHeight = $(window).scrollTop();
            var subB = $(".sub_banner").innerHeight();
            var menu_flow = $(".menu_flow").innerHeight();
            var intro = $(".intro").innerHeight();
            var cora_youtube = $(".cora_youtube").innerHeight();
            var histroy01 = $(".histroy01").innerHeight();
            var skin01 = $(".skin01").innerHeight();
            var treat_work = $(".treat_work").innerHeight();
            var scar_contents = $(".scar_contents").innerHeight();
            var skin02 = $(".skin02").innerHeight();
            var custom_treat = $(".custom_treat").innerHeight();
            var survey = $(".survey").innerHeight();
            var watch = $(".watch").innerHeight();
            var faq = $(".faq").innerHeight();

            var sur01 = $(".survey .skin_txt").innerHeight();
            var sur02 = $(".survey .history_span").innerHeight();
            var sur03 = $(".survey .history_i").innerHeight();

            var totalHeight = subB + menu_flow + intro + cora_youtube + histroy01 + skin01 + treat_work + scar_contents + skin02 + custom_treat + survey + watch + faq;

            var countSurvey = subB + menu_flow + intro + cora_youtube + histroy01 + skin01 + treat_work + scar_contents + skin02 + custom_treat + sur01 + sur02 + sur03;

            console.log();

            var mobHeight = $(window).scrollTop();

            if (mobHeight > totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "sticky",
                });
            };

            if (mobHeight < totalHeight - 850) {
                $(".mob_bottom_fix").css({
                    "position" : "fixed",
                });
            };

            if (mainHeight > countSurvey - 300) {
                $(".survey .odometer").addClass("on");
            }
        });
    });
</script>

<script>
    Cocoen.parse(document.body);
</script>

</html>

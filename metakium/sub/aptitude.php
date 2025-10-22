<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php 
    include '../header.php';
    $sql="SELECT * FROM xr_contents WHERE area='aptitude'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner11">
        <div class="bg"></div>
        <div class="txt_inner">
            <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="aptitude">
        <div class="inner" data-aos="fade-up">
            <h2>VR 적성검사(메타퀘스트2)</h2>
            <img src="../img/xr_contents/aptitude/<?php echo $row['img_1']?>" alt="">
            <p data-aos="fade-up">
                <?php echo $row['area2'];?>
            </p>
            <h2 data-aos="fade-up">차별점</h2>
            <div class="differ" data-aos="fade-up">
                <ul>
                    <li></li>
                    <li>프레디저</li>
                    <li>기존 적성검사</li>
                </ul>
                <ul>
                    <li class="black">진단방식</li>
                    <li class="orange">스마트폰어플 / VR</li>
                    <li class="gray">OMR카드 / 온라인체크식</li>
                </ul>
                <ul>
                    <li class="black">결과전달</li>
                    <li class="orange">실시간 개별 카톡 전달</li>
                    <li class="gray">1주일후 전달 / 개별로그인</li>
                </ul>
                <ul>
                    <li class="black">진단방법</li>
                    <li class="orange">앱 또는 화면에서 그림 이동</li>
                    <li class="gray">자기보고식 답안체크</li>
                </ul>
                <ul>
                    <li class="black">세계관</li>
                    <li class="orange">직무와 뇌과학 중심</li>
                    <li class="gray">성격중심</li>
                </ul>
                <ul>
                    <li class="black">결과도출</li>
                    <li class="orange">자동처리</li>
                    <li class="gray">시험(수거)-채점-전달</li>
                </ul>
                <ul>
                    <li class="black">기타</li>
                    <li class="orange">학교단체 리포트 제공</li>
                    <li class="gray">진단가격은 대동소이</li>
                </ul>
            </div>
            <!-- <img data-aos="fade-up" src="../img/aptitude02.png" alt=""> -->
            <div class="swiper-container aptitude_slide" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <?php
                    for($i=0;$i<15;$i++){
                        $j=$i+2;
                        $slide=$row['img_'.$j];
                        
                        if($slide){
                            ?>
                            <div class="swiper-slide"><img src="../img/xr_contents/aptitude/<?php echo $slide?>" alt=""></div>
                            <?php
                        }
                    }
                    ?>
                    <!-- <div class="swiper-slide"><img src="../img/xr_contents/aptitude/<?php echo $row['img_1']?>" alt=""></div>
                    <div class="swiper-slide"><img src="../img/aptitude07.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="../img/aptitude08.png" alt=""></div>
                    <div class="swiper-slide"><img src="../img/aptitude09.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="../img/aptitude10.png" alt=""></div>
                    <div class="swiper-slide"><img src="../img/aptitude11.png" alt=""></div> -->
                </div>
                <div class="swiper-btn-prev02"><img src="../img/left_arrow.png" alt=""></div>
                <div class="swiper-btn-next02"><img src="../img/left_arrow.png" alt=""></div>
            </div>
            <div class="txt_box">
                <div data-aos="fade-up">
                    <?php echo $row['area3'];?>
                </div>
                <div data-aos="fade-up">
                    <?php echo $row['area4'];?>
                </div>
                <div data-aos="fade-up">
                    <?php echo $row['area5'];?>
                </div>
                <div data-aos="fade-up">
                    <?php echo $row['area6'];?>
                </div>
            </div>
            <div class="diagnosis">
                <h2>프레디저 진단</h2>
                <img class="diagnosis_img01" src="../img/xr_contents/aptitude/<?php echo $row['img_17']?>" alt="">
                <?php echo $row['area7'];?>
            </div>
            <div class="diagnosis">
                <h2>프레디저 적성</h2>
                <img class="diagnosis_img02" src="../img/xr_contents/aptitude/<?php echo $row['img_18']?>" alt="">
                <?php echo $row['area8'];?>
                <img class="diagnosis_img03" src="../img/xr_contents/aptitude/<?php echo $row['img_19']?>" alt="">
            </div>
            <h2 data-aos="fade-up">VR 진단 프로세스</h2>
            <div class="vr_process" data-aos="fade-up">
                <a href="javascript:void(0)">
                    <img src="../img/ap10.jpg" alt="">
                </a>
                <!-- <div class="left">
                    <h2>1단계 <span>앱 다운로드</span></h2>
                    <div>
                        <div>
                            <h4>다운로드 및 VR진단 무료</h4>
                        </div>
                        <div>
                            <span>
                                지금 VR 마켓으로 이동해서<br>
                                프레디저앱을 다운받으세요!
                            </span>
                            <a href="">VR 마켓으로 이동</a>
                        </div>
                    </div>
                    <div>
                        <img src="../img/apt00.png" alt="">
                    </div>
                </div>
                <div class="right">
                    <h2>2단계 <span>VR 진단</span></h2>
                    <div>
                        <img src="../img/icon_aptitude01.png" alt="">
                        <p>프리디저 VR 진단 시작</p>
                    </div>
                    <div>
                        <img src="../img/icon_aptitude02.png" alt="">
                        <h3>결과1 <span>진단결과 VR영상으로 보기</span></h3>
                        <h3>결과2 <span>이메일로 리포트 받아보기</span></h3>
                    </div>
                </div> -->
            </div>
            <div class="viedo_youtube">
                <?php echo $row['movie']?>
            </div>
            <!-- <div class="aptitude_mid" data-aos="fade-up">
                <div class="left">
                    <h2>프레디저VR</h2>
                    <img src="../img/aptitude03.png" alt="">
                    <p>
                        세계 최초로 개발되어 유일하게 VR로서 적성검사를 진행할 수 있습니다.<br>
                        <br>
                        프레디저 VR은 강력하고도 재미있는 도입부로 피검사자에게<br>
                        몰입감과 VR의 시각적인 쾌감을 선사합니다.<br>
                        <br>
                        아울러 중반의 진단은 기존의 방식과는 완전히 다른 VR 화면 내에서<br>
                        선택을 하게 하며 결과도 파노라마 형태의 화면으로 보여줍니다.<br>
                        <br>
                        아울러 개인 이메일로 결과 리포트가 발송되어서<br>
                        개개인의 흥미, 적성, 추천직업, 추천학과, 필독서, 롤모델 등을<br>
                        상세하게 전달해 줍니다.
                    </p>
                </div>
                <div class="right">
                    <h2>프레디저VR</h2>
                    <img src="../img/aptitude04.png" alt="">
                    <p>
                        각 나라의 프레디저 본사에서는 자격과정을 운영하며 일정 시간의<br>
                        자격교육을 이수한 참여자들에게 자격증을 수여할 수 있습니다.<br>
                        <br>
                        프레디저 글로벌에서는 자격과정에 대한 내용과<br>
                        방식을 지원하고  있습니다.<br>
                        <br>
                        각국에서 진로검사, 적성진단에 대한 수요와<br>
                        중요성은 날로 커지고 있습니다.<br>
                        <br>
                        프레디저 카드를 비롯한 프레디저의 컨텐츠와 동시에 프레디저<br>
                        자격과정을 통하여 각 나라의 적성검사 마켓을 주도할 수 있습니다.
                    </p>
                </div>
            </div> -->
            <div class="aptitude_bottom" data-aos="fade-up">
                <img src="../img/xr_contents/aptitude/<?php echo $row['img_20']?>" alt="">
                <p data-aos="fade-up">
                    <?php echo $row['area9'];?>
                </p>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

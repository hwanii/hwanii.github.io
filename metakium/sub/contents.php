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
    $sql="SELECT * FROM class_vr WHERE area='vrarmr'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner07">
        <div class="bg"></div>
        <div class="txt_inner">
            <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="sub_contents">
        <div class="inner" data-aos="fade-up">
            <?php echo $row['area2'];?>
            <div class="contents_top" data-aos="fade-up">
                <div>
                    <div><img src="../img/icon_contents01.png" alt=""></div>
                    <h3>역사적시간</h3>
                    <p>
                        고대 사회, 고대 영국,<br>
                        고대 로마, 고대 중국,<br>
                        고대 이집트 등
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents02.png" alt=""></div>
                    <h3>식물&amp;자연</h3>
                    <p>
                        자연 환경, 코스트 및 제도,<br>
                        사막, 숲, 열대 우림,<br>
                        계절 변화 등
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents03.png" alt=""></div>
                    <h3>국가, 도시&amp;건물</h3>
                    <p>
                        인간 환경, 유렵의 자본,<br>
                        근대 건축물, 아프리카,<br>
                        정부 건물 등
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents01.png" alt=""></div>
                    <h3>재난&amp;안전</h3>
                    <p>
                        갈등, 홀로코스트, 핵 재난,<br>
                        자연 재해, 1차 세계 대전과<br>
                        2차 세계 대전
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents02.png" alt=""></div>
                    <h3>물리&amp;지리</h3>
                    <p>
                        물리 지리학, 산악, 빙하,<br>
                        강, 바위 및 동굴,<br>
                        화산 등
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents03.png" alt=""></div>
                    <h3>예술&amp;문화</h3>
                    <p>
                        디지털 예술, 문화 축제,<br>
                        세계 각지의 학교,<br>
                        종교 축제
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_contents02.png" alt=""></div>
                    <h3>과학&amp;기술</h3>
                    <p>
                        야간 하늘, 우주, 항공 운송,<br>
                        육상 운송, 수상 교통, 교량<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-container contents_mid">
            <div class="swiper-wrapper">
                <?php
                for($i=0;$i<12;$i++){
                    $j=$i+1;
                    $img=$row['img_'.$j];
                    
                    if($img){
                        ?>
                        <div class="swiper-slide bg01" style="background:url('../img/class_vr/vrarmr/<?php echo $img?>') no-repeat center/cover"></div>
                        <?php
                    }
                }
                ?>
                <!-- <div class="swiper-slide bg01"></div>
                <div class="swiper-slide bg02"></div>
                <div class="swiper-slide bg03"></div>
                <div class="swiper-slide bg04"></div>
                <div class="swiper-slide bg05"></div>
                <div class="swiper-slide bg06"></div>
                <div class="swiper-slide bg07"></div>
                <div class="swiper-slide bg08"></div> -->
            </div>
            <div class="swiper-btn-prev01"><img src="../img/left_arrow.png" alt=""></div>
            <div class="swiper-btn-next01"><img src="../img/left_arrow.png" alt=""></div>
        </div>
        <div class="inner" data-aos="fade-up">
            <div class="title">
                <?php echo $row['area3'];?>
            </div>
            <div class="contents_bottom">
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_13']?>" alt="">
                    <div class="txt_box">
                        <h3>3D 모델 한국</h3>
                        <p>ClassVR</p>
                        <span>22 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_14']?>" alt="">
                    <div class="txt_box">
                        <h3>동물 3D</h3>
                        <p>Eduverse expeditions</p>
                        <span>28 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_15']?>" alt="">
                    <div class="txt_box">
                        <h3>예술과 문화 3D</h3>
                        <p>ClassVR</p>
                        <span>16 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_16']?>" alt="">
                    <div class="txt_box">
                        <h3>원자 구조</h3>
                        <p>ClassVR</p>
                        <span>6 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_17']?>" alt="">
                    <div class="txt_box">
                        <h3>세포</h3>
                        <p>Eduverse expeditions</p>
                        <span>15 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_18']?>" alt="">
                    <div class="txt_box">
                        <h3>공룡</h3>
                        <p>Eduverse expeditions</p>
                        <span>7 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_19']?>" alt="">
                    <div class="txt_box">
                        <h3>지구 과학 3D</h3>
                        <p>Eduverse expeditions</p>
                        <span>7 트랙</span>
                    </div>
                </div>
                <div>
                    <img src="../img/class_vr/vrarmr/<?php echo $row['img_20']?>" alt="">
                    <div class="txt_box">
                        <h3>인체 해부학 3D</h3>
                        <p>ClassVR</p>
                        <span>22 트랙</span>
                    </div>
                </div>
            </div>
            <div class="title" data-aos="fade-up">
                <?php echo $row['area4'];?>
            </div>
        </div>
        <div class="movie01">
            <?php echo $row['movie'];?>
        </div>
        <!-- <video class="vr_video" playsinline controls loop muted autoplay>
            <source src="../img/contents01.mp4" type="video/mp4">
        </video> -->
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

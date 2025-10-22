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
    $sql="SELECT * FROM xr_contents WHERE area='multi1'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner12">
        <div class="bg"></div>
        <div class="txt_inner">
            <img src="../img/multikium.png" alt="" style="margin-bottom: 10px; display: block;">
            <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="multi">
        <div class="title" data-aos="fade-up">
            <h2>멀티키움 컨셉</h2>
            <img src="../img/multi01.png" alt="">
        </div>
        <div class="merit">
            <h2>멀티키움의 장점</h2>
            <div class="contents">
                <div>
                    <div>
                        <img src="../img/icon01.png" alt="">
                        <h3>운동 효과 향상</h3>
                    </div>
                    <img src="../img/icon_donw_arrow.png" alt="">
                    <p>
                        멀티키움은 3면을 모두 활용하여<br>
                        비교적 좁은 공간에서도<br>
                        운동 효과를 높일 수 있습니다.
                    </p>
                </div>
                <div>
                    <div>
                        <img src="../img/icon02.png" alt="">
                        <h3>교사 편의성 중진</h3>
                    </div>
                    <img src="../img/icon_donw_arrow.png" alt="">
                    <p>
                        직관적이고 조작이 쉬운<br>
                        키오스크를 제공하여<br>
                        교사와 유아들이 편리하게<br>
                        콘텐츠를 선택하고<br>
                        실행할 수 있습니다.
                    </p>
                </div>
                <div>
                    <div>
                        <img src="../img/icon03.png" alt="">
                        <h3>교육효과 제고</h3>
                    </div>
                    <img src="../img/icon_donw_arrow.png" alt="">
                    <p>
                        영어, 수학, 미술 등<br>
                        과목과 누리과정 융합한<br>
                        콘텐츠를 제공하여<br>
                        다양한 영역 발달을 돕습니다.
                    </p>
                </div>
                <div>
                    <div>
                        <img src="../img/icon04.png" alt="">
                        <h3>전문성 강화</h3>
                    </div>
                    <img src="../img/icon_donw_arrow.png" alt="">
                    <p>
                        서울대학교 스포츠과학연구실과<br>
                        공동개발한 커리큘럼을 제공하여<br>
                        유아체육교육의 전문성을<br>
                        확보하였습니다.
                    </p>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="multi_top" data-aos="fade-up">
                <h2>멀티키움 구축도</h2>
                <img src="../img/multi02.png" alt="">
            </div>
            <div class="multi_mid" data-aos="fade-up">
                <h2>멀티키움 체계도</h2>
                <p>
                    누리과정에서 제시한 교육목표를 달성 할 수 있도록<br>
                    영역 별 연력을 고려하여 교육체계도를 수립하였습니다.
                </p>
                <div class="contents">
                    <img src="../img/multi000.png" alt="">
                </div>
            </div>
            <div class="multi_img">
                <?php echo $row['movie'];?>
                <p>* 이미지를 클릭하시면 유튜브 영상으로 이동합니다.</p>
            </div>
            <ul class="multi_cate" id="multi_cate">
                <li class="on"><a href="../sub/multi01.php#multi_cate">신체영역 주요내용</a></li>
                <li><a href="../sub/multi02.php#multi_cate">인성영역 주요내용</a></li>
                <li><a href="../sub/multi03.php#multi_cate">인지영역 주요내용</a></li>
            </ul>
            <div class="multi_body" data-aos="fade-up">
                <div>
                    <div><img src="../img/icon_multi01.png" alt=""></div>
                    <h2>나의 신체<br>알아가기</h2>
                    <p>
                        점프하는 콘텐츠를 통해<br>
                        신체 상하 운동감각 경험<br>
                        주어진 거리를 좌우로 빠르게<br>
                        이동하는 신체감가 경험
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_multi02.png" alt=""></div>
                    <h2>자유로운<br>신체활동</h2>
                    <p>
                        발을 활용하여 공을 차는 감각과<br>
                        공을 차 올리는 신체활동 경험<br>
                        화면을 터치하면서 빠르게 이동하여<br class="multi_br_none">
                        손과 발의 자유로운 신체 활동 경험
                    </p>
                </div>
                <div>
                    <div><img src="../img/icon_multi03.png" alt=""></div>
                    <h2>도구를 활용한<br>신체조절</h2>
                    <p>
                        스크린을 향해 공을 던지는<br>
                        과정에서 신체조절력 강화<br>
                        손과 발 그리고 시각적 협응력을 높이고<br class="multi_br_none">
                        공을 활용하여 신체활용 범위 확대
                    </p>
                </div>
            </div>
        </div>
        <div class="multi_bottom_img" data-aos="fade-up">
            <img src="../img/xr_contents/multi1/<?php echo $row['img_1']?>" alt="">
            <img src="../img/xr_contents/multi1/<?php echo $row['img_2']?>" alt="">
        </div>
        <div class="multi_bottom_contents" data-aos="fade-up">
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_3']?>" alt="">
                <p>과녁</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_4']?>" alt="">
                <p>새 사냥</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_5']?>" alt="">
                <p>클레이 양궁</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_6']?>" alt="">
                <p>피구</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_7']?>" alt="">
                <p>농구 패스</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_8']?>" alt="">
                <p>족구 서브</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_9']?>" alt="">
                <p>팡팡 핸드볼</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_10']?>" alt="">
                <p>페인트볼</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_11']?>" alt="">
                <p>낮은 패스</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_12']?>" alt="">
                <p>(축구)높은 패스</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_13']?>" alt="">
                <p>패널티킥</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_14']?>" alt="">
                <p>프리킥</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_15']?>" alt="">
                <p>야구</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_16']?>" alt="">
                <p>K-pop</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi1/<?php echo $row['img_17']?>" alt="">
                <p>동요</p>
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

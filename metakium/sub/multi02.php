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
    $sql="SELECT * FROM xr_contents WHERE area='multi2'";
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
                <li><a href="../sub/multi01.php#multi_cate">신체영역 주요내용</a></li>
                <li class="on"><a href="../sub/multi02.php#multi_cate">인성영역 주요내용</a></li>
                <li><a href="../sub/multi03.php#multi_cate">인지영역 주요내용</a></li>
            </ul>
            <div class="multi_we" data-aos="fade-up">
                <div class="circle01">
                    <p>우리</p>
                    <div class="circle02">
                        <p>너</p>
                        <div class="circle03">
                            <p>나</p>
                        </div>
                    </div>
                </div>
                <div class="contents">
                    <div>
                        <h2>나</h2>
                        <p>
                            주어진 콘텐츠를 포기하지 않고<br>
                            끝까지 완료해 나가는 과정에서<br>
                            자기만족과 자아존중감 배양
                        </p>
                    </div>
                    <div>
                        <h2>너</h2>
                        <p>
                            나와 친구들이 함께 콘텐츠를 체험하면서<br>
                            나와 타인의 차이를 이해하고<br>
                            셩쟁과 양보의 개념 학습 및 적용
                        </p>
                    </div>
                    <div>
                        <h2>우리</h2>
                        <p>
                            팀 콘텐츠 활동을 통해 우리라는<br>
                            개념을 이해하고 안전하게 활동하기 위해<br>
                            규칙의 중요성을 학습하고 이해
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img data-aos="fade-up" class="multi_bottom_img01" src="../img/xr_contents/multi2/<?php echo $row['img_1']?>" alt="">
        <div data-aos="fade-up" class="multi_bottom_contents">
            <div>
                <img src="../img/xr_contents/multi2/<?php echo $row['img_2']?>" alt="">
                <p>낮은 패스</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi2/<?php echo $row['img_3']?>" alt="">
                <p>(축구)높은 패스</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi2/<?php echo $row['img_4']?>" alt="">
                <p>패널티킥</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi2/<?php echo $row['img_5']?>" alt="">
                <p>프리킥</p>
            </div>
            <div>
                <img src="../img/xr_contents/multi2/<?php echo $row['img_6']?>" alt="">
                <p>야구</p>
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

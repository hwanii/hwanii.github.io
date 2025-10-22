<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="performance">
        <div class="inner">
            <div class="title">
                <ul class="performance_cate">
                    <li class="on"><a href="../sub/performance03.php">퍼포먼스</a></li>
                    <li><a href="../sub/commerce02.php">교육 및 컨설팅</a></li>
                    <li><a href="../sub/commerce03.php">라이브 커머스</a></li>
                </ul>
            </div>
            <div class="sub_title">
                <h2>퍼포먼스</h2>
            </div>
            <?php
            $sql="SELECT * FROM sucess";
            $res=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($res);
            $img1=$row['img1'];
            $img2=$row['img2'];
            $img3=$row['img3'];
            $img4=$row['img4'];
            $img5=$row['img5'];
            $img6=$row['img6'];
            ?>
            <div class="performance_gallery">
                <a href="../sub/performance03-01.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img1?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>네이버 사이트 검색광고</p>
                        <h2>스포츠레저 업종</h2>
                    </div>
                </a>
                <a href="../sub/performance03-02.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img2?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>네이버 쇼핑검색광고</p>
                        <h2>디지털가전 업종</h2>
                    </div>
                </a>
                <a href="../sub/performance03-03.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img3?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>네이버 GFA</p>
                        <h2>식품 업종</h2>
                    </div>
                </a>
                <a href="../sub/performance03-04.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img4?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>구글 검색광고</p>
                        <h2>패션 잡화 업종</h2>
                    </div>
                </a>
                <a href="../sub/performance03-05.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img5?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>카카오 모먼트</p>
                        <h2>여행 업종</h2>
                    </div>
                </a>
                <a href="../sub/performance03-06.php">
                    <div class="img_box">
                        <img src="../img/sucess/<?php echo $img6?>" alt="">
                        <div>
                            <h3>상세 보기</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="txt_box">
                        <p>DA 및 SNS</p>
                        <h2>건강 / 기능 업종</h2>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

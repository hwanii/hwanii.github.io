<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php';?>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="wrap">
    <?php include 'header.php'; ?>
    <section class="swiper-container main_slide">
        <div class="swiper-wrapper">
            <?php
            $sSql="SELECT * FROM slide WHERE background!='' ORDER BY `number` ASC";
            $sRes=mysqli_query($conn, $sSql);
            while($sRow=mysqli_fetch_array($sRes)){
            ?>
            <div class="swiper-slide" style="background: url('img/slide/<?php echo $sRow['background'];?>') no-repeat center/cover;"></div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section class="business">
        <div class="inner" data-aos="fade-up">
            <h2 class="title">BUSINESS</h2>
            <div thumbsSlider="" class="swiper-container business_slide_right">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>운영 대행</p>
                            <span></span>
                        </div>
                        <p class="line"></p>
                    </div>
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>E.R.P</p>
                            <span></span>
                        </div>
                        <p class="line"></p>
                    </div>
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>컨설팅</p>
                            <span></span>
                        </div>
                        <p class="line"></p>
                    </div>
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>마케팅</p>
                            <span></span>
                        </div>
                        <p class="line"></p>
                    </div>
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>배송대행</p>
                            <span></span>
                        </div>
                        <p class="line"></p>
                    </div>
                    <div class="swiper-slide">
                        <div class="contents">
                            <p>LIVE</p>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container business_slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2>운영대행</h2>
                        <p>ONE STOP SOLUTION으로 고객의 조건에 맞춰 필요하는 서비스를 제공해드립니다.</p>
                        <div class="contents">
                            <p>요구사항 분석 및 계획 수립</p>
                            <p>스토어 구축 및 디자인</p>
                            <p>상품 등록 및 관리</p>
                            <p>마케팅 및 프로모션</p>
                            <p>운영 및 성과 평가</p>
                        </div>
                        <a href="sub/operate.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>E.R.P</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>OMS</p>
                            <p>WMS</p>
                            <p>CRM</p>
                            <p>BIGDATA</p>
                        </div>
                        <a href="sub/erp.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>컨설팅</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>시장조사와 경쟁분석</p>
                            <p>진입 전략</p>
                            <p>제품분석</p>
                            <p>수출입 인허가</p>
                            <p>매출 규모 및 트래픽 조사</p>
                            <p>예산 및 목표 작성</p>
                            <p>바이어 발굴 및 네트워크 구축</p>
                        </div>
                        <a href="sub/consulting.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>마케팅</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>브랜디드(Branded) 마케팅</p>
                            <p>퍼포먼스(Performance) 마케팅</p>
                            <p>인플루언서 마케팅</p>
                            <p>콘텐츠 광고</p>
                            <p>SNS 광고</p>
                            <p>라이브방송</p>
                        </div>
                        <a href="sub/marketing.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>배송대행</h2>
                        <p>글로벌이피는 3PL(Third-Party Logistics) 대행 서비스를 제공합니다.</p>
                        <div class="contents">
                            <p>제품보관</p>
                            <p>재고관리</p>
                            <p>포장 및 배송 대행</p>
                            <p>B2B, B2C 업무대행</p>
                            <p>결과보고</p>
                        </div>
                        <a href="sub/delivery.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>LIVE</h2>
                        <p>글로벌이피는 다양한 B2C 및 B2B 플랫폼에서 라이브방송을 진행하는 서비스를 제공합니다.</p>
                        <div class="contents">
                            <p>타오바오 라이브</p>
                            <p>틱톡/도우인 라이브</p>
                            <p>쇼피/라자다 라이브</p>
                            <p>페이스북/인스타 등 기타 SNS 라이브</p>
                            <p>인플루언서/왕홍 라이브 방송 &amp; 공동구매</p>
                        </div>
                        <a href="sub/live.php">클릭하고 상세보기</a>
                    </div>
                </div>
            </div>
            <div class="swiper-container business_slide01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2>운영대행</h2>
                        <p>ONE STOP SOLUTION으로 고객의 조건에 맞춰 필요하는 서비스를 제공해드립니다.</p>
                        <div class="contents">
                            <p>요구사항 분석 및 계획 수립</p>
                            <p>스토어 구축 및 디자인</p>
                            <p>상품 등록 및 관리</p>
                            <p>마케팅 및 프로모션</p>
                            <p>운영 및 성과 평가</p>
                        </div>
                        <a href="sub/operate.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>E.R.P</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>OMS</p>
                            <p>WMS</p>
                            <p>CRM</p>
                            <p>BIGDATA</p>
                        </div>
                        <a href="sub/erp.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>컨설팅</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>시장조사와 경쟁분석</p>
                            <p>진입 전략</p>
                            <p>제품분석</p>
                            <p>수출입 인허가</p>
                            <p>매출 규모 및 트래픽 조사</p>
                            <p>예산 및 목표 작성</p>
                            <p>바이어 발굴 및 네트워크 구축</p>
                        </div>
                        <a href="sub/consulting.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>마케팅</h2>
                        <p>ERP 시스템을 구축하고 운영하여 기업의 비즈니스 성과를 향상시키는데 기여합니다.</p>
                        <div class="contents">
                            <p>브랜디드(Branded) 마케팅</p>
                            <p>퍼포먼스(Performance) 마케팅</p>
                            <p>인플루언서 마케팅</p>
                            <p>콘텐츠 광고</p>
                            <p>SNS 광고</p>
                            <p>라이브방송</p>
                        </div>
                        <a href="sub/marketing.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>배송대행</h2>
                        <p>글로벌이피는 3PL(Third-Party Logistics) 대행 서비스를 제공합니다.</p>
                        <div class="contents">
                            <p>제품보관</p>
                            <p>재고관리</p>
                            <p>포장 및 배송 대행</p>
                            <p>B2B, B2C 업무대행</p>
                            <p>결과보고</p>
                        </div>
                        <a href="sub/delivery.php">클릭하고 상세보기</a>
                    </div>
                    <div class="swiper-slide">
                        <h2>LIVE</h2>
                        <p>글로벌이피는 다양한 B2C 및 B2B 플랫폼에서 라이브방송을 진행하는 서비스를 제공합니다.</p>
                        <div class="contents">
                            <p>타오바오 라이브</p>
                            <p>틱톡/도우인 라이브</p>
                            <p>쇼피/라자다 라이브</p>
                            <p>페이스북/인스타 등 기타 SNS 라이브</p>
                            <p>인플루언서/왕홍 라이브 방송 &amp; 공동구매</p>
                        </div>
                        <a href="sub/live.php">클릭하고 상세보기</a>
                    </div>
                </div>
            <div class="swiper-pagination01"></div>
            </div>
        </div>
        <div class="scroll">
            <img src="img/scroll-down.png">
            <p>Scroll down</p>
        </div>
    </section>
    <section class="reference">
        <div class="inner" data-aos="fade-up">
            <h2 class="title color_title">REFERENCE</h2>
            <div class="title_box">
                <h2>Reference</h2>
                <p>GLOBAL EP에서 진행한 업무 실적들을 소개 합니다.</p>
            </div>
            <ul class="reference_category" data-aos="fade-up">
                <li class="on">전체보기</li>
                <li>브랜딩</li>
                <li>마케팅</li>
                <li>B2C & B2B</li>
                <li>정부지원사업</li>
            </ul>
            <div class="contents" data-aos="fade-up">
                <div class="content active">
                    <?php
                    $sql="SELECT * FROM reference ORDER BY num DESC LIMIT 9";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="sub/reference_post.php?num=<?php echo $num?>">
                        <img src="img/reference/<?php echo $thumb?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM reference WHERE branding1!='' OR branding2!='' OR branding3!='' OR branding4!='' OR branding5!='' ORDER BY num DESC LIMIT 9";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="sub/reference_post.php?num=<?php echo $num?>&type=branding">
                        <img src="img/reference/<?php echo $thumb?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM reference WHERE marketing1!='' OR marketing2!='' OR marketing3!='' OR marketing4!='' OR marketing5!='' OR marketing6!='' OR marketing7!='' OR marketing8!='' ORDER BY num DESC LIMIT 9";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="sub/reference_post.php?num=<?php echo $num?>&type=marketing">
                        <img src="img/reference/<?php echo $thumb?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM reference WHERE bab1!='' OR bab2!='' OR bab3!='' OR bab4!='' OR bab5!='' ORDER BY num DESC LIMIT 9";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="sub/reference_post.php?num=<?php echo $num?>&type=bab">
                        <img src="img/reference/<?php echo $thumb?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM reference WHERE government1!='' OR government2!='' OR government3!='' OR government4!='' OR government5!='' ORDER BY num DESC LIMIT 9";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $thumb=$row['thumb'];
                        $num=$row['num'];
                    ?>
                    <a href="sub/reference_post.php?num=<?php echo $num?>&type=government">
                        <img src="img/reference/<?php echo $thumb?>">
                        <p><?php echo $title?></p>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="inner" data-aos="fade-up">
            <h2 class="title">PARTNERS</h2>
            <div class="title_box white_title_box">
                <p>GLOBAL EP와 함께 하시는 분들을 소개합니다.</p>
            </div>
        </div>
        <div class="slide_inner">
            <div class="swiper-container part_slide">
                <div class="swiper-wrapper">
                    <?php
                    $pSql="SELECT * FROM partners ORDER BY num ASC";
                    $pRes=mysqli_query($conn, $pSql);
                    while($pRow=mysqli_fetch_array($pRes)){
                    ?>
                    <div class="swiper-slide"><img src="img/partners/<?php echo $pRow['thumb'];?>"></div>
                    <?php } ?>
                </div>
            </div>
            <img src="img/slide-prev.png" class="prev01">
            <img src="img/slide-next.png" class="next01">
        </div>
    </section>
    <section class="community">
        <div class="inner" data-aos="fade-up">
            <h2 class="title commu_title">COMMUNITY</h2>
            <div class="title_box commu_title_box">
                <p>GLOBAL EP와 함께 하시는 분들을 소개합니다.</p>
            </div>
            <div class="commu_con_box">
                <div class="contents" data-aos="fade-up">
                    <h2>NOTICE</h2>
                    <ul>
                        <li>제목</li>
                        <li>조회수</li>
                        <li>첨부파일</li>
                    </ul>
                    <?php
                    $nSql="SELECT * FROM notice ORDER BY num DESC LIMIT 5";
                    $nRes=mysqli_query($conn, $nSql);
                    while($nRow=mysqli_fetch_array($nRes)){
                    ?>
                    <div>
                        <a href="sub/notice_post.php?num=<?php echo $nRow['num']?>"><?php echo $nRow['title'];?></a>
                        <p><?php echo number_format($nRow['hit'])?></p>
                        <a href="javascript:void(0)"><img src="img/icon-file.png" style="<?php echo ($nRow['input_file']) ? "" : "display:none"?>"></a>
                    </div>
                    <?php } ?>
                </div>
                <div class="contents" data-aos="fade-up">
                    <h2>RECRUIT</h2>
                    <ul>
                        <li>제목</li>
                        <li>조회수</li>
                        <li>첨부파일</li>
                    </ul>
                    <?php
                    $rSql="SELECT * FROM guide ORDER BY num DESC LIMIT 5";
                    $rRes=mysqli_query($conn, $rSql);
                    while($rRow=mysqli_fetch_array($rRes)){
                    ?>
                    <div>
                        <a href="sub/recruit_post.php?num=<?php echo $rRow['num']?>"><?php echo $rRow['title'];?></a>
                        <p><?php echo number_format($rRow['hit'])?></p>
                        <a href="javascript:void(0)"><img src="img/icon-file.png" style="<?php echo ($rRow['input_file']) ? "" : "display:none"?>"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="inner" data-aos="fade-up">
            <h2 class="title black_title">CONTACT US</h2>
            <div class="map_contents">
                <div class="left" data-aos="fade-up">
                    <div>
                        <h2>OFFICE</h2>
                        <p>서울특별시 성수동 성수이로 20길 3 세종빌딩 10층</p>
                        <p>02-6956-5168</p>
                    </div>
                    <div>
                        <h2>FULFILLMENT</h2>
                        <p>서울특별시 성수동 성수동2가 272-35 1.5층</p>
                        <p>02-6956-5168</p>
                    </div>
                    <div>
                        <p>인천 서구 원창동 393-183 번지</p>
                        <p>032-583-8777</p>
                    </div>
                </div>
                <div class="map" data-aos="fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.874694910851!2d127.02897709678956!3d37.558015899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca35c3141f0fb%3A0x23fc8e28e25266e7!2z7IS47KKF67mM65Sp!5e0!3m2!1sko!2skr!4v1690508743336!5m2!1sko!2skr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>

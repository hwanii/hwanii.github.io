<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub01">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>COMPANY</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;COMPANY&nbsp;&nbsp;>&nbsp;&nbsp;회사소개</p>
        </div>
    </section>
    <div class="wow-cate wow-cate01">
        <ul>
            <li class="on"><a href="../sub/company.php">회사소개</a></li>
            <li><a href="../sub/history.php">HISTORY</a></li>
            <li><a href="../sub/map.php">오시는 길</a></li>
        </ul>
    </div>
    <section class="company">
        <div class="title-txt">
            <h2>회사소개</h2>
        </div>
        <div class="sub-title-txt">
            <h2>WHO WE ARE</h2>
            <p>WOWBNB 소개</p>
        </div>
        <div class="contents01">
            <div class="bg"></div>
            <div class="txt-box">
                <img class="wow-img" src="../img/logo.png" alt="">
                <p>금속 가공 Sourcing Platform을 통하여 공급망을 만드는 기업입니다.</p>
                <h2>우리의 전략은 Speed입니다.</h2>
                <p>
                    공급 리드타임을 줄여, 고객의 제조시간을 확보해주어<br>
                    더 낮은 비용으로 제조할 수 있도록 하는 것입니다.
                </p>
                <img class="speed-img" src="../img/speed.png" alt="">
                <div class="contents">
                    <div>
                        <img src="../img/spped01.png" alt="">
                        <h2>프로세스 간소화</h2>
                        <p>
                            지구촌 가공 공장을 새로운 조직체계로 탄생시켜
                            프로세스를 간소화하고, 민첩하고, 신속하게
                            차별화된 고객 가치를 창출합니다.
                        </p>
                    </div>
                    <div>
                        <img src="../img/spped02.png" alt="">
                        <h2>공급망 속도</h2>
                        <p>
                            국내외, 가공 공장의 정보를 Digitalize하여
                            잉여 장비 상태와 제조 인력의 흐름을 실시간으로 분석하여
                            효율적인 프로세스 공급망이 속도를 낼 수 있도록 관리 합니다.
                        </p>
                    </div>
                    <div>
                        <img src="../img/spped03.png" alt="">
                        <h2>리드타임 단축</h2>
                        <p>
                            우리의 목표는 리드타임을 줄이고
                            고객들의 시장 진입속도를 높이는 것입니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-title-txt">
            <h2>OUR TEAM</h2>
            <p>WOW의 Manpower는 고객과 공유합니다.</p>
        </div>
        <div class="contents02">
            <div class="bg"></div>
            <div class="txt-box">
                <img src="../img/team01.png" alt="">
                
            </div>
        </div>
        <div class="inner">
            <div class="contents03">
                <div class="sub-title-txt">
                    <h2>OFFICES</h2>
                    <p>WOW의 사업장들을 소개합니다.</p>
                </div>
                <h2>국내 사업장</h2>
                <?php
                $sql="SELECT * FROM offices WHERE `type`='국내'";
                $res=mysqli_query($conn, $sql);
                $rows=ceil(mysqli_num_rows($res)/2);
                
                for($i=0;$i<$rows;$i++){
                    $limit=$i*2;
                ?>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM offices WHERE `type`='국내' ORDER BY num ASC LIMIT $limit, 2";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                        $thumb=$row['thumbnail'];
                    ?>
                    <div>
                        <img src="../img/offices/<?php echo $thumb?>" alt="">
                        <div class="txt-box">
                            <h3><?php echo $title?></h3>
                            <?php echo $contents?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <h2>해외 사업장</h2>
                <?php
                $sql="SELECT * FROM offices WHERE `type`='해외'";
                $res=mysqli_query($conn, $sql);
                $rows=ceil(mysqli_num_rows($res)/2);
                
                for($i=0;$i<$rows;$i++){
                    $limit=$i*2;
                ?>
                <div class="content">
                    <?php
                    $sql="SELECT * FROM offices WHERE `type`='해외' ORDER BY num ASC LIMIT $limit, 2";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                        $thumb=$row['thumbnail'];
                    ?>
                    <div>
                        <img src="../img/offices/<?php echo $thumb?>" alt="">
                        <div class="txt-box">
                            <h3><?php echo $title?></h3>
                            <?php echo $contents?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
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

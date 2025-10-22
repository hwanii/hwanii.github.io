<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="swiper-container main-slide">
        <div class="swiper-wrapper">
            <?php
            $sSql="SELECT * FROM slide ORDER BY `number` ASC";
            $sRes=mysqli_query($conn, $sSql);
            if(!empty($sRes) || $sRes==true){
            while($sRow=mysqli_fetch_array($sRes)){
                $back=$sRow['background'];
                $title=$sRow['title'];
                $contetns=$sRow['contents'];
            ?>
            <div class="swiper-slide main01" style="    background: url('./admin/img/background/<?php echo $back?>') no-repeat center/cover;">
                <div class="bg"></div>
                <div class="txt-box">
                    <img src="img/logo.png" alt="">
                    <h2><?php echo $title?></h2>
                    <p><?php echo $contetns?></p>
                </div>
            </div>
            <?php } 
            } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section class="main-contents">
        <div class="inner">
            <div class="main-title">
                <img src="img/logo01.png" alt="">
                <h2>금속가공 소싱 플랫폼 전문기업</h2>
                <p>
                    WOWBNB는 금속가공 <b>Sourcing Platform</b>을 통하여<br>
                    새로운 공급망을 만드는 기업입니다.
                </p>
                <span>
                    우리의 목표는 금속가공 소싱 플랫폼을 통하여<br>
                    지구촌 모든 가공 공장을 새로운 조직체계로 연결하고<br>
                    잉여의 가치에서 새로운 가치를 창출해 내는 것입니다.
                </span>
            </div>
            <div class="contents">
                <a href="sub/company.php">
                    <img src="img/main-img01.png" alt="">
                    <div class="txt-box">
                        <span></span>
                        <p>회사소개</p>
                    </div>
                </a>
                <a href="sub/platform.php">
                    <img src="img/main-img02.png" alt="">
                    <div class="txt-box">
                    <span></span>
                        <p>와우 플랫폼</p>
                    </div>
                </a>
                <a href="sub/product01.php">
                    <img src="img/main-img03.png" alt="">
                    <div class="txt-box">
                    <span></span>
                        <p>제품 소싱 분야</p>
                    </div>
                </a>
            </div>
            <?php 
            $fSql="SELECT * FROM information";
            $fRes=mysqli_query($conn, $fSql);
            
            if(!empty($fRes) || $fRes==true){
            $fRow=mysqli_fetch_array($fRes);
            $com=$fRow['kor_company'];
            $addr=$fRow['addr']." ".$fRow['detail_addr'];
            $tel=$fRow['tel'];
            $fax=$fRow['fax'];
            $email=$fRow['email'];
            $file=$fRow['file'];
            }
            ?>
            <div class="contact">
                <h2>CONTACT US</h2>
                <p>WOWBNB 안내입니다</p>
                <div class="contents">
                    <div>
                        <img src="img/contact01.png" alt="">
                        <p><?php echo ($addr) ? $addr : ""?></p>
                    </div>
                    <div>
                        <div>
                            <img src="img/contact02.png" alt="">
                            <p><?php echo ($tel) ? $tel : ""?></p>
                        </div>
                        <div>
                        <img src="img/contact03.png" alt="">
                            <p><?php echo ($fax) ? $fax : ""?></p>
                        </div>
                    </div>
                    <div>
                        <img src="img/contact04.png" alt="">
                        <p><?php echo ($email) ? $email : ""?></p>
                    </div>
                </div>
            </div>
            <div class="main-bottom">
                <a href="sub/request.php">
                    <div>
                        <span></span>
                    </div>
                    <p>문의하기</p>
                </a>
                <a href="<?php echo ($file) ? "img/file/".$file : "javascript:alert('파일이 없습니다.')"?>" <?php echo ($file) ? "download" : ""?>>
                    <div>
                        <span></span>
                    </div>
                    <p>회사소개서</p>
                </a>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>
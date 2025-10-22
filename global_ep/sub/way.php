<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/sub.css">
</head>

<body class="wrap">
    <?php include '../header.php'; ?>
    <?php include 'side.php'; ?>
    <section class="sub_banner" style="background: url(../img/sub_intro.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2 style="margin-bottom: 0;">오시는 길</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>GLOBAL EP</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>오시는 길</h2>
        </div>
    </section>
    <section class="way">
        <div class="inner1280">
            <div class="inner_title" data-aos="fade-up">
                <h2>ADDRESS</h2>
                <p>본사 + 미디어 센터 + 3PL</p>
            </div>
            <?php
            $sql="SELECT * FROM way ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
            ?>
            <div class="contents">
                <div class="left" data-aos="fade-up">
                    <h2><?php echo $row['title'];?></h2>
                    <?php echo $row['contents'];?>
                    <div class="sns">
                        <a href="<?php echo ($row['website']) ? $row['website'] : "javascript:void(0)" ?>" <?php echo ($row['website']) ? 'target="_blank"' : "" ?>><img src="../img/icon-b-web.png"></a>
                        <a href="<?php echo ($row['shop']) ? $row['shop'] : "javascript:void(0)" ?>" <?php echo ($row['shop']) ? 'target="_blank"' : "" ?>><img src="../img/icon-b-shop.png"></a>
                        <a href="<?php echo ($row['insta']) ? $row['insta'] : "javascript:void(0)" ?>" <?php echo ($row['insta']) ? 'target="_blank"' : "" ?>><img src="../img/icon-b-insta.png"></a>
                        <a href="<?php echo ($row['facebook']) ? $row['facebook'] : "javascript:void(0)" ?>" <?php echo ($row['facebook']) ? 'target="_blank"' : "" ?>><img src="../img/icon-b-facebook.png"></a>
                        <a href="<?php echo ($row['pdf']) ? "../img/way/".$row['pdf'] : "javascript:void(0)" ?>" <?php echo ($row['pdf']) ? "download" : "" ?>><img src="../img/icon-b-pdf.png"></a>
                    </div>
                </div>
                <div class="right" data-aos="fade-up">
                    <?php echo $row['map'];?>
                </div>
            </div>
            <?php } ?>
            <div class="way_contents" data-aos="fade-up">
                <h2>내부 시설 소개</h2>
                <div class="swiper-container way_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $sql="SELECT * FROM facility ORDER BY num ASC";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                        ?>
                        <div class="swiper-slide" style=" background: url('../img/facility/<?php echo $row['thumb']?>') no-repeat center/cover;"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'sub_footer.php'; ?>
    <?php include '../footer.php'; ?>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/sub.js"></script>

</html>

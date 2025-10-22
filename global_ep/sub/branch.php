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
            <h2>해외 지사</h2>
            <p>
                Global EP(E-Commerce Partner) 는 진입장벽을 낮추기 위해<br>
                아시아, 동남아, 중동, 미주 등 여러 국가에 있는 자회사를 통해<br>
                더 신속하고 정확한 서비스를 제공해드리겠습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>GLOBAL EP</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>해외 지사</h2>
        </div>
    </section>
    <section class="branch">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>GlobalEP NETWORK</h2>
                <p>
                    GLOBAL EP는 다양한 해외 영업 지사를 기반으로 두고 있으며,<br>
                    클라이언트의 수요에 맞춘 최대화 전략을 위해 점차 해외 거점을 확대해 나갈 것 입니다.
                </p>
            </div>
            <?php
            $sql="SELECT * FROM branch ORDER BY num ASC";
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
                        <a href="<?php echo ($row['pdf']) ? "../img/branch/".$row['pdf'] : "javascript:void(0)" ?>" <?php echo ($row['pdf']) ? "download" : "" ?>><img src="../img/icon-b-pdf.png"></a>
                    </div>
                </div>
                <div class="right" data-aos="fade-up">
                    <?php echo $row['map'];?>
                </div>
            </div>
            <?php } ?>
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

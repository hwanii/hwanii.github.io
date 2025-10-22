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
    <section class="sub_banner" style="background: url(../img/sub_work.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>브랜딩</h2>
            <p>
                글로벌이피의 브랜딩 서비스는 기업들이 강력하고 독창적인 브랜드 이미지를<br>구축하고 유지하기 위한 종합적인 지원을 제공합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>WORK</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>브랜딩</h2>
        </div>
    </section>
    <section class="work">
        <div class="inner1200">
            <div class="inner_title" data-aos="fade-up">
                <h2>브랜딩</h2>
                <p>
                    브랜딩은 기업의 아이덴티티를 강화하고 고객들에게 긍정적인 인상을 심어주는 중요한 요소로,<br><b>글로벌이피는 이를 위해 다양한 전략과 마케팅 방법을 활용하여 브랜드 가치를 높이고 성장을 돕습니다.</b>
                </p>
            </div>
            <div class="solution">
                <?php
                $sql="SELECT * FROM work_branding";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                ?>
                <div class="solution_box">
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb1']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title1']?></h2>
                            <p><?php echo $row['contents1'];?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb2']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title2']?></h2>
                            <p><?php echo $row['contents2'];?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb3']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title3']?></h2>
                            <p><?php echo $row['contents3'];?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb4']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title4']?></h2>
                            <p><?php echo $row['contents4'];?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb5']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title5']?></h2>
                            <p><?php echo $row['contents5'];?></p>
                        </div>
                    </div>
                    <div class="contents" data-aos="fade-up">
                        <img src="../img/work_branding/<?php echo $row['thumb6']?>">
                        <div class="txt_box">
                            <h2><?php echo $row['title6']?></h2>
                            <p><?php echo $row['contents6'];?></p>
                        </div>
                    </div>
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

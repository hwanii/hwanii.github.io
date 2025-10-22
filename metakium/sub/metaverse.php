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
    $sql="SELECT * FROM class_vr WHERE area='contents'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    ?>
    <section class="sub-banner sub-banner08">
        <div class="bg"></div>
        <div class="txt_inner">
            <?php echo $row['area1'];?>
        </div>
    </section>
    <section class="metaverse" data-aos="fade-up">
        <div class="inner">
            <?php echo $row['area2'];?>
            <div class="contents_top" data-aos="fade-up">
                <div>
                    <img src="../img/class_vr/contents/<?php echo $row['img_1']?>" alt="">
                    <p>지리테마</p>
                </div>
                <div>
                    <img src="../img/class_vr/contents/<?php echo $row['img_2']?>" alt="">
                    <p>과학테마</p>
                </div>
                <div>
                    <img src="../img/class_vr/contents/<?php echo $row['img_3']?>" alt="">
                    <p>역사테마</p>
                </div>
                <div>
                    <img src="../img/class_vr/contents/<?php echo $row['img_4']?>" alt="">
                    <p>문학테마</p>
                </div>
            </div>
            <div class="contents_mid" data-aos="fade-up">
                <?php echo $row['area3'];?>
            </div>
            <div class="contents_bottom" data-aos="fade-up">
                <?php echo $row['area4'];?>
            </div>
            <div class="inner_video" data-aos="fade-up" style="margin-bottom: 150px">
                <?php echo $row['movie'];?>
            </div>
            <div class="monthly_plan" data-aos="fade-up">
                <h2>월간 플랜</h2>
                <p>결재하신 한 달 동안 자유롭게 메타버스 콘텐츠(AVANTISWORLD)를 사용할 수 있습니다.</p>
                <span>※ 해당 비용은 VAT(부가세)가 포함되지 않은 금액입니다.</span>
                <div class="contents">
                    <div>
                        <h3>AVANTISWORLD<br>Basic</h3>
                        <div class="line"></div>
                        <p>1개월 사용료</p>
                        <h2>￦200,000</h2>
                        <a href="<?php echo $root?>sub/estimate.php">견적문의</a>
                    </div>
                    <div>
                        <h3>AVANTISWORLD<br>Master</h3>
                        <div class="line"></div>
                        <p>12개월 사용료</p>
                        <h2>￦2,000,000</h2>
                        <a href="<?php echo $root?>sub/estimate.php">견적문의</a>
                    </div>
                </div>
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

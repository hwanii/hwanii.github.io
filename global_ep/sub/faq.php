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
    <section class="sub_banner" style="background: url(../img/sub_commu.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>FAQ</h2>
            <p>
                GLOBAL EP는 전자상거래를 통해 CBT(역직구+보세)방식으로<br>
                해외 진출 원스톱 서비스를 제공하고 있습니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>COMMUNITY</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>FAQ</h2>
        </div>
    </section>
    <section class="faq">
        <div class="inner1200">
            <div class="commu_category" data-aos="fade-up">
                <a href="../sub/notice.php">공지사항</a>
                <a href="../sub/faq.php" class="on">FAQ</a>
                <a href="../sub/recruit.php">채용안내</a>
            </div>
            <div class="faq_contents" data-aos="fade-up">
                <?php
                $sql="SELECT * FROM faq ORDER BY num DESC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $contents=$row['contents'];
                ?>
                <ul>
                    <li>
                        <div>
                            <h2>Q</h2>
                            <p><?php echo $title?></p>
                        </div>
                        <span></span>
                    </li>
                    <li>
                        <div>
                            <h2>A</h2>
                            <?php echo $contents?>
                        </div>
                    </li>
                </ul>
                <?php } ?>
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

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="reservation">
        <div class="inner_title">
            <div class="page_title">
                <h2>상담안내</h2>
            </div>
        </div>
        <?php
        $sql="SELECT * FROM sns";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $kakao=$row['kakao'];
        $insta=$row['insta'];
        $facebook=$row['facebook'];
        ?>
        <div class="sns">
            <a href="<?php echo $kakao?>" target="_blank">
                <img src="../img/icon-kakao.png">
                <p>카카오 상담</p>
            </a>
            <a href="<?php echo $insta?>" target="_blank">
                <img src="../img/icon-insta.png">
                <p>인스타그램</p>
            </a>
            <a href="<?php echo $facebook?>" target="_blank">
                <img src="../img/icon-facebook.png">
                <p>페이스북</p>
            </a>
        </div>
        <div class="ask_link">
            <a href="faq.php">
                <p>자주 묻는 질문</p>
                <div class="line"></div>
                <img src="../img/icon-ask01.png">
            </a>
            <a href="use.php">
                <p>이용 방법 안내</p>
                <div class="line"></div>
                <img src="../img/icon-ask02.png">
            </a>
            <a href="emergency.php">
                <p>파손/사고 접수</p>
                <div class="line"></div>
                <img src="../img/icon-ask03.png">
            </a>
        </div>
    </section>
    <footer>
        <div class="inner"></div>
    </footer>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

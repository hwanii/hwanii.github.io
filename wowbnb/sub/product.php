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
    <section class="sub-banner sub04">
        <div class="bg"></div>
        <div class="txt-box">
            <h2>PRODUCTS</h2>
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;PRODUCTS</p>
        </div>
    </section>
    <div class="wow-cate wow-cate02">
        <ul>
            <li><a href="../sub/product.php">제품군 목록</a></li>
            <li><a href="../sub/product01.php">물류장치</a></li>
            <li><a href="../sub/product02.php">LED/조명장치</a></li>
            <li><a href="../sub/product03.php">무인기기</a></li>
            <li><a href="../sub/product04.php">공정장비</a></li>
            <li><a href="../sub/product05.php">전력/제어기기</a></li>
            <li><a href="../sub/product06.php">AL Profile</a></li>
            <li><a href="../sub/product07.php">농기계</a></li>
            <li><a href="../sub/product08.php">기타</a></li>
        </ul>
    </div>
    <section class="product">
        <div class="title-txt">
            <h2>제품군 소개</h2>
            <p>WOWBNB의 제품군 소개 입니다.</p>
        </div>
        <div class="inner">
            <div class="contents">
                <?php
                $sql="SELECT * FROM product_menu ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $link=$row['link'];
                    $thumb=$row['thumbnail'];
                ?>
                <a href="<?php echo $link?>">
                    <img src="../img/product_menu/<?php echo $thumb?>" alt="">
                    <div class="pro-bg"></div>
                    <h2><?php echo $title?></h2>
                    <p>제품 보기</p>
                </a>
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

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <section class="banner banner03">
        <div class="bg"></div>
        <div class="txt_box">
            <span>Best business partner</span>
            <p>BUSINESS의 성공적인 미래</p>
            <h2>(주)대원로지스틱이 함께 합니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <select dir="rtl" onchange="window.open(value,'_self');">
                <option selected value="../sub/performance.php">통합 실적 안내</option>
            </select>
            <ul>
                <li>HOME</li>
                <li>주요 실적</li>
                <li>통합 실적 안내</li>
            </ul>
        </div>
    </section>
    <section class="performance">
        <div class="inner contents_inner">
            <div class="sub_title">
                <h2>통합 실적 안내</h2>
            </div>
            <div class="contents">
                <ul>
                    <li>사업장</li>
                    <li>업무내용</li>
                </ul>
                <?php
                $sql="SELECT * FROM bo_performance ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $addr=$row['file_2'];
                    $contents=$row['contents'];
                ?>
                <ul>
                    <li>
                        <h2><?php echo $title?></h2>
                        <p><?php echo $addr?></p>
                    </li>
                    <li><?php echo $contents?></li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php'; ?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt-box">
            <img src="../img/slide-logo.png" alt="">
            <h2>마음 속, 편안한 숲을<br>가꾸어 드립니다.</h2>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;외래 진료 안내</p>
        </div>
    </section>
    <div class="sub_title">
        <h2>외래 진료 안내</h2>
        <p>OUTPATIENT GUIDANCE</p>
    </div>
    <section class="list">
        <div class="inner">
            <h4>진료 내용</h4>
            <div class="treat_contents">
                <?php
                $sql="SELECT * FROM treat";
                $res=mysqli_query($conn, $sql);
                $rows=mysqli_num_rows($res);
                $row=mysqli_fetch_array($res);
                $couple=$row['couple'];
                $concentration=$row['concentration'];
                $old_man=$row['old_man'];
                $mental=$row['mental'];
                $stress=$row['stress'];
                $guide=$row['guide'];
                $notice=$row['notice'];
                ?>
                <div>
                    <h2>부부, 커플 상담과 치료</h2>
                    <?php echo $couple?>
                </div>
                <div>
                    <h2>집중력 클리닉</h2>
                    <?php echo $concentration?>
                </div>
                <div>
                    <h2>노인 클리닉</h2>
                    <?php echo $old_man?>
                </div>
                <div>
                    <h2>정신건강 클리닉</h2>
                    <?php echo $mental?>
                </div>
                <div>
                    <h2>스트레스 클리닉</h2>
                    <?php echo $stress?>
                </div>
            </div>
            <h4 class="mt60">예약 및 유의사항</h4>
            <div class="contents" style="margin-top: 0;">
                <h2>1.외래 진료 예약 안내</h2>
                <?php echo $guide?>
            </div>
            <div class="contents" style="margin-top: 0;">
                <h2>2.검진 유의 사항</h2>
                <?php echo $notice?>
            </div>
            <div class="treat_box">
                <img src="../img/grid04.png" alt="">
                <img src="../img/grid05.png" alt="">
                <img src="../img/grid07.png" alt="">
                <img src="../img/grid06.png" alt="">
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

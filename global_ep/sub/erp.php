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
    <section class="sub_banner" style="background: url(../img/sub_busi.png) no-repeat center/cover;">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>ERP</h2>
            <p>
                글로벌이피는 ERP 시스템을 구축하고 운영하여<br>기업의 비즈니스 성과를 향상시키는데 기여합니다.
            </p>
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner" data-aos="fade-right">
            <h2>HOME</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>BUSINESS</h2>
            <img src="../img/icon-flow-arrow.png">
            <h2>ERP</h2>
        </div>
    </section>
    <section class="operate">
        <div class="inner1000">
            <div class="inner_title" data-aos="fade-up">
                <h2>ERP</h2>
                <p>OMS(주문관리 시스템), WMS(재고관리시스템), CRM(고객관리 시스템),<br class="erp_br">빅 데이터 수집 등 운영에 필요한 다양한 서비스를 제공해드립니다.</p>
            </div>
            <div class="operate_inner">
                <?php
                $sql="SELECT * FROM erp";
                $res=mysqli_query($conn, $sql);
                $row=mysqli_fetch_array($res);
                $contents1=$row['contents1'];
                $contents2=$row['contents2'];
                $contents3=$row['contents3'];
                $contents4=$row['contents4'];
                ?>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left"><h2>OMS</h2></div>
                    <p><?php echo $contents1?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left"><h2>WMS</h2></div>
                    <p><?php echo $contents2?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left"><h2>CRM</h2></div>
                    <p><?php echo $contents3?></p>
                </div>
                <div class="oper_contents" data-aos="fade-up">
                    <div class="left"><h2>BIGDATA</h2></div>
                    <p><?php echo $contents4?></p>
                </div>
            </div>
            <p class="oper_bottom" data-aos="fade-up">
                OMS, WMS, CRM, BIGDATA는 기업의 비즈니스 영역에서<br>각각 주문 처리, 물류 관리, 고객 관리, 대규모 데이터 분석 등의 중요한 역할을 수행합니다.<br>이를 통해 기업은 비즈니스 프로세스를 효율적으로 관리하고<br>고객과의 관계를 강화하여 경쟁력을 향상시킬 수 있습니다.
            </p>
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

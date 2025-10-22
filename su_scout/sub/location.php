<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <section class="sub-banner sub04">
        <h2>COMPANY</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/company.php" class="">company</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/client.php" class="">FOR CLIENTS</a></li>
                            <li><a href="../sub/candidate_information.php" class="">FOR CANDIDATES</a></li>
                            <li><a href="../sub/consultant.php" class="">CONSULTANTS</a></li>
                            <li><a href="../sub/company.php" class="">COMPANY</a></li>
                            <li><a href="../sub/notice.php" class="">NOTICE</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="select">
                <dl>
                    <dt><a href="../sub/company.php" class="">위치</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/company.php" class="">WHY SU</a></li>
                            <li><a href="../sub/location.php" class="">위치</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="company">
        <div class="inner">
            <div class="title-sub">
                <h2>LOCATION</h2>
                <p>위치</p>
            </div>
        </div>
        <?php
        $sql="SELECT * FROM map";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $map=$row['map'];
        $addr=$row['addr'];
        $detail=$row['detail'];
        $tel=$row['tel'];
        $email=$row['email'];
        ?>
        <div class="map">
            <?php echo $map?>
        </div>
        <div class="inner">
            <div class="map-info">
                <h2>ADDRESS</h2>
                <p><?php echo $addr." ".$detail?></p>
            </div>
            <div class="map-info">
                <h2>TEL</h2>
                <p><?php echo $tel?></p>
            </div>
            <div class="map-info">
                <h2>E-MAIL</h2>
                <p>Email : <?php echo $email?></p>
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

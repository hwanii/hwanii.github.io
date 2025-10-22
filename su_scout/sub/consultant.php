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
    <section class="sub-banner sub03">
        <h2>CONSULTANTS</h2>
    </section>
    <div class="menu-flow">
        <div class="inner">
            <a href="../index.php"><img src="../img/icon-home.png" alt=""></a>
            <div class="select">
                <dl>
                    <dt><a href="../sub/consultant.php" class="">CONSULTANTS</a></dt>
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
                    <dt><a href="../sub/consultant.php" class="">구성원</a></dt>
                    <dd>
                        <ul>
                            <li><a href="../sub/consultant.php" class="">구성원</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <section class="consultant">
        <div class="inner">
            <div class="title">
                <h2>컨설턴트 소개</h2>
                <p>에스유 스카우트 전문 컨설턴트들을 소개합니다.</p>
            </div>
            <div class="contents">
                <?php
                $sql="SELECT * FROM staff ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $title=$row['title'];
                    $position=$row['position'];
                    $contents=strip_tags($row['contents']);
                    $email=$row['email'];
                    $tel=$row['tel'];
                    $addr=$row['addr'];
                ?>
                <div>
                    <div><?php echo $title?></div>
                    <div>
                        <h2><?php echo $position?></h2>
                        <h3>Specialized Area :</h3>
                        <p><?php echo $contents?></p>
                    </div>
                    <div>Email : <?php echo $email?></div>
                    <div>
                        <a href="tel:<?php echo $tel?>" style="<?php echo (empty($tel)) ? "display:none" : ""?>">
                            <img src="../img/icon-phone.png" alt="">
                            <span><?php echo $tel?></span>
                        </a>
                        <a href="<?php echo $addr?>" target="blank" style="<?php echo (empty($addr)) ? "display:none" : ""?>">
                            <img src="../img/icon-in.png" alt="">
                            <span>링크드인 바로가기</span>
                        </a>
                    </div>
                </div>
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

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
                    <dt><a href="../sub/company.php" class="">WHY SU</a></dt>
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
                <h2>WHY <span>SU SCOUT</span></h2>
                <p>에스유 스카우트만의 강점 안내</p>
            </div>
            <?php
            $sql="SELECT * FROM why_su ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            $no=1;
            while($row=mysqli_fetch_array($res)){
                $title=$row['title'];
                $contents=$row['contents'];
                $thumb=$row['thumbnail'];
            ?>
            <div class="contents">
                <div class="left">
                    <h2><?php echo $no++;?></h2>
                    <div>
                        <h3><?php echo $title?></h3>
                        <p><?php echo $contents?></p>
                    </div>
                </div>
                <img src="../img/why_su/<?php echo $thumb?>" alt="">
            </div>
            <?php } ?>
            <div class="com-icons">
                <div class="title-sub">
                    <h2>OUR <span>PROMISE</span></h2>
                    <p>에스유 스카우트가 드리는 약속</p>
                </div>
                <div class="contents">
                    <div>
                        <div class="img-box"><img src="../img/icon-why01.png" alt=""></div>
                        <div class="txt-box">
                            <h2>
                                고객이 원하는<br>
                                인재를 볼 수 있는 눈
                            </h2>
                            <p>
                                고객사가 지향하는  눈높이에서<br>
                                인재를 선발 할 수 있습니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box"><img src="../img/icon-why02.png" alt=""></div>
                        <div class="txt-box">
                            <h2>
                                신속하게 인재를<br>
                                제공할 수 있는 손
                            </h2>
                            <p>
                                업무에 필요한 인재는 즉시 제공되어야 하기에<br>
                                더욱 빨리 진행하겠습니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box"><img src="../img/icon-why03.png" alt=""></div>
                        <div class="txt-box">
                            <h2>
                                기업이 핵심역량에 집중<br>
                                할 수 있게 도와드리는 두뇌
                            </h2>
                            <p>
                                중요하고 전략적인 업무는 기업 내부적으로<br>
                                운영하고, 아웃소싱이 가능한 업무에 대해서는<br>
                                컨설팅을 해드립니다.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="img-box"><img src="../img/icon-why04.png" alt=""></div>
                        <div class="txt-box">
                            <h2>
                                다양한 분야의  STAFF<br>
                                양성에 도움이 되는 발
                            </h2>
                            <p>
                                각 기업이 속해있는 산업군에 따라<br>
                                선호하는 인재상을 빠르게 찾을 수 있습니다.<br>
                                이를 통해서 어느 직종이라도 원하시는<br>
                                인재를 제공하도록 하겠습니다.
                            </p>
                        </div>
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

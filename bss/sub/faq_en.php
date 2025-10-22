<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header_en.php';?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>FAQ</h2>
            </div>
            <ul class="faq_category">
                <li class="on" style="text-align: center;">Payment</li>
                <li style="text-align: center;">Delay</li>
                <li style="text-align: center;">Lost</li>
                <li style="text-align: center;">Damage</li>
            </ul>
            <div class="faq_box">
                <div class="faq_contents active">
                    <?php
                    $sql="SELECT * FROM faq WHERE `type`='payment related' ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                    ?>
                    <ul>
                        <li>
                            <img src="../img/q.png">
                            <h2><?php echo $title?></h2>
                        </li>
                        <li>
                            <div>
                                <img src="../img/a.png">
                                <p><?php echo $contents?></p>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="faq_contents">
                    <?php
                    $sql="SELECT * FROM faq WHERE `type`='flight delay' ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                    ?>
                    <ul>
                        <li>
                            <img src="../img/q.png">
                            <h2><?php echo $title?></h2>
                        </li>
                        <li>
                            <div>
                                <img src="../img/a.png">
                                <p><?php echo $contents?></p>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="faq_contents">
                    <?php
                    $sql="SELECT * FROM faq WHERE `type`='lost cargo' ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                    ?>
                    <ul>
                        <li>
                            <img src="../img/q.png">
                            <h2><?php echo $title?></h2>
                        </li>
                        <li>
                            <div>
                                <img src="../img/a.png">
                                <p><?php echo $contents?></p>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="faq_contents">
                    <?php
                    $sql="SELECT * FROM faq WHERE `type`='cargo damage' ORDER BY num DESC";
                    $res=mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($res)){
                        $title=$row['title'];
                        $contents=$row['contents'];
                    ?>
                    <ul>
                        <li>
                            <img src="../img/q.png">
                            <h2><?php echo $title?></h2>
                        </li>
                        <li>
                            <div>
                                <img src="../img/a.png">
                                <p><?php echo $contents?></p>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="ask_link">
                <a href="faq_en.php">
                    <p>FAQ</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask01.png">
                </a>
                <a href="use_en.php">
                    <p>How to use</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask02.png">
                </a>
                <a href="emergency_en.php">
                    <p>Damage/accidents received</p>
                    <div class="line"></div>
                    <img src="../img/icon-ask03.png">
                </a>
            </div>
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

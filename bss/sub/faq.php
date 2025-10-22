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
        <div class="inner">
            <div class="main_title">
                <h2>자주 묻는 질문</h2>
            </div>
            <ul class="faq_category">
                <li class="on">결제 관련</li>
                <li>항공 지연</li>
                <li>화물 분실</li>
                <li>화물 손상</li>
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
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

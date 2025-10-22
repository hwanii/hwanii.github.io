<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
    <?php
    $type=$_GET['type'];
    if($type=="cate1"){
        $local="product01.php";
    } else if($type=="cate2"){
        $local="product02.php";
    } else if($type=="cate3"){
        $local="product03.php";
    } else if($type=="cate4"){
        $local="product04.php";
    } else if($type=="cate5"){
        $local="product05.php";
        $txt="전력/제어기기";
    } else if($type=="cate6"){
        $local="product06.php";
    } else if($type=="cate7"){
        $local="product07.php";
    } else if($type=="cate8"){
        $local="product08.php";
    }
    $num=$_GET['num'];

    $hSql="UPDATE product SET hit=hit+1 WHERE `type`='$type' AND num='$num'";
    $hRes=mysqli_query($conn, $hSql);

    $sql="SELECT * FROM product WHERE `type`='$type' AND num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $contents=$row['contents'];
    $thumb=array($row['thumbnail1'], $row['thumbnail2'], $row['thumbnail3'], $row['thumbnail4'], $row['thumbnail5']);
    $file=$row['file_1'];

    $pSql="SELECT * FROM product WHERE `type`='$type' AND num < '$num' ORDER BY num DESC LIMIT 1";
    $pRes=mysqli_query($conn, $pSql);
    $pRow=mysqli_fetch_array($pRes);
    $prev=$pRow['num'];
    $p=($prev) ? "product_detail.php?type=".$type."&num=".$prev : "javascript:void(0)";

    $nSql="SELECT * FROM product WHERE `type`='$type' AND num > '$num' ORDER BY num ASC LIMIT 1";
    $nRes=mysqli_query($conn, $nSql);
    $nRow=mysqli_fetch_array($nRes);
    $next=$nRow['num'];
    $n=($next) ? "product_detail.php?type=".$type."&num=".$next : "javascript:void(0)";
    ?>
    <div class="wow-cate wow-cate02">
        <ul>
            <li class="<?php echo ($type=="cate1") ? "on" : ""?>"><a href="../sub/product01.php">물류장치</a></li>
            <li class="<?php echo ($type=="cate2") ? "on" : ""?>"><a href="../sub/product02.php">LED/조명장치</a></li>
            <li class="<?php echo ($type=="cate3") ? "on" : ""?>"><a href="../sub/product03.php">무인기기</a></li>
            <li class="<?php echo ($type=="cate4") ? "on" : ""?>"><a href="../sub/product04.php">공정장비</a></li>
            <li class="<?php echo ($type=="cate5") ? "on" : ""?>"><a href="../sub/product05.php">전력/제어기기</a></li>
            <li class="<?php echo ($type=="cate6") ? "on" : ""?>"><a href="../sub/product06.php">AL Profile</a></li>
            <li class="<?php echo ($type=="cate7") ? "on" : ""?>"><a href="../sub/product07.php">농기계</a></li>
            <li class="<?php echo ($type=="cate8") ? "on" : ""?>"><a href="../sub/product08.php">기타</a></li>
        </ul>
    </div>
    <section class="product-detail">
        <div class="inner">
            <h2><?php echo $title?></h2>
            <div class="pd-top">
                <h2>INFORMATION</h2>
                <div>
                    <a href="../sub/<?php echo $local?>"><img src="../img/list.png" alt=""></a>
                    <a href="<?php echo $p?>"><img src="../img/arrow-right.png" alt=""></a>
                    <a href="<?php echo $n?>"><img src="../img/arrow-right.png" alt=""></a>
                </div>
            </div>
            <div class="pd-mid">
                <div class="swiper-container info-slide">
                    <div class="swiper-wrapper">
                        <?php
                        for($i=0;$i<count($thumb);$i++){
                            if(empty($thumb[$i])){
                                continue;
                            }
                        ?>
                        <div class="swiper-slide">
                            <img src="../img/product/<?php echo $type?>/thumb/<?php echo $thumb[$i]?>" alt="">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-btn-prev01"><img src="../img/icon-left-arrow.png" alt=""></div>
                    <div class="swiper-btn-next01"><img src="../img/icon-left-arrow.png" alt=""></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="right">
                    <div class="right-top">
                        <p><?php echo $title?></p>
                    </div>
                    <div class="right-bot">
                        <h2>SPECIFIC</h2>
                        <div>
                            <!-- <h3>PRODUCT</h3> -->
                            <p><?php echo $contents?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-down">
                <h2>CATALOGUE</h2>
                <button onclick="document.querySelector('#down').click();">
                    <img src="../img/down.png" alt="">
                    <p>DOWNLOAD</p>
                    <a id="down" href="../img/product/<?php echo $type?>/<?php echo $file?>" style="display:none" download></a>
                </button>
                <p>모바일 이용자분께서는 다운로드 버튼을 눌러<br>CATALOGUE를 확인해주세요.</p>
            </div>
            <div class="imagee" id="imagee">
                <div class="gallery-box">
                    <!-- main slider -->
                    <object type="application/pdf" data="../img/product/<?php echo $type?>/<?php echo $file?>" height="800" style="width:100%">
                    <param name="src" value="../img/product/<?php echo $type?>/<?php echo $file?>">
                    </object>
                    <!-- // thumbnail slider -->
                </div>
            </div>
            <!-- <object type="application/pdf" data="http://highklass.co.kr/test.pdf" width="1000" height="800">
            <param name="src" value="http://highklass.co.kr/test.pdf">
            </object> -->
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

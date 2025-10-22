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
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 일정&nbsp;&nbsp;>&nbsp;&nbsp;워크샵 일정</span>
        </div>
    </section>
    <div class="sub_category">
        <a href="../sub/head_edu.php">본사 교육일정</a>
        <a href="../sub/branch_edu.php">지부 교육일정</a>
        <a href="../sub/workshop.php" class="on">워크샵 일정</a>
    </div>
    <?php
    $num=$_GET['num'];

    $sql="SELECT * FROM workshop WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $title=$row['title'];
    $end_date=$row['end_date'];
    $period=$row['period'];
    $people=$row['people'];
    $tel=$row['tel'];
    $kakao=$row['kakao'];
    $contents=$row['contents'];
    $thumb=$row['thumb'];
    $num=$row['num'];
    ?>
    <section class="schedule">
        <div class="inner">
            <div class="detail">
                <img src="../img/workshop/<?php echo $thumb?>" alt="">
                <div class="right">
                    <h2><?php echo $title?></h2>
                    <div>
                        <h3>마감일</h3>
                        <p><?php echo $end_date?></p>
                    </div>
                    <div>
                        <h3>일정</h3>
                        <p><?php echo $period?></p>
                    </div>
                    <div>
                        <h3>인원</h3>
                        <p><?php echo $people?></p>
                    </div>
                    <div>
                        <h3>문의</h3>
                        <p><?php echo ($tel) ? "전화문의" : ""?> <?php echo ($kakao) ? (($tel) ? "/ 카카오톡 문의" : "카카오톡 문의") : ""?></p>
                    </div>
                    <a href="tel:<?php echo $tel?>" class="call" style="<?php echo ($tel) ? "" : "display:none"?>">
                        <img src="../img/icon-call.png" alt="">
                        <p><?php echo $tel?></p>
                    </a>
                    <a href="<?php echo $kakao?>" target="_blank" class="kakao" style="<?php echo ($kakao) ? "" : "display:none"?>">
                        <img src="../img/icon-kakao01.png" alt="">
                        <p>KAKAO</p>
                    </a>
                </div>
            </div>
            <?php
            if(strip_tags($contents)!=""){
            ?>
            <div class="detail_contents">
                <h2>워크샵 상세 내용</h2>
                <p><?php echo $contents?></p>
            </div>
            <?php } ?>
            <div class="detail_bottom">
                <?php
                $pSql="SELECT * FROM workshop WHERE num < '$num' ORDER BY num DESC LIMIT 1";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $prev=$pRow['num'];
                
                $nSql="SELECT * FROM workshop WHERE num > '$num' ORDER BY num ASC LIMIT 1";
                $nRes=mysqli_query($conn, $nSql);
                $nRow=mysqli_fetch_array($nRes);
                $next=$nRow['num'];
                ?>
                <a href="<?php echo ($prev) ? "workshop_detail.php?num=".$prev : "javascript:void(0)"?>" style="<?php echo ($prev) ? "" : "visibility:hidden"?>"><img src="../img/list-prev.png" alt=""></a>
                <a href="workshop.php">리스트</a>
                <a href="<?php echo ($next) ? "workshop_detail.php?num=".$next : "javascript:void(0)"?>" style="<?php echo ($next) ? "" : "visibility:hidden"?>"><img src="../img/list-next.png" alt=""></a>
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

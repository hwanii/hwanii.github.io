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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;센터소개&nbsp;&nbsp;>&nbsp;&nbsp;의료진 소개</p>
        </div>
    </section>
    <div class="sub_title">
        <h2>의료진 소개</h2>
        <p>CLINIC MEMBERS</p>
    </div>
    <section class="s-d">
        <?php
        $num=$_GET['num'];

        $sql="SELECT * FROM staff WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $type=$row['type'];
        $department=$row['department'];
        $name=$row['name'];
        $intro=$row['intro'];
        $grade=$row['grade'];
        $cert=$row['cert'];
        $book=$row['book'];
        $mon_m=$row['mon_m'];
        $mon_a=$row['mon_a'];
        $tues_m=$row['tues_m'];
        $tues_a=$row['tues_a'];
        $wednes_m=$row['wednes_m'];
        $wednes_a=$row['wednes_a'];
        $thurs_m=$row['thurs_m'];
        $thurs_a=$row['thurs_a'];
        $fri_m=$row['fri_m'];
        $fri_a=$row['fri_a'];
        $sat_m=$row['sat_m'];
        $sat_a=$row['sat_a'];
        $thumbnail=$row['thumb'];
        ?>
        <div class="img_sticky"><img src="../img/staff/<?php echo $thumbnail?>" style="width:45%" alt=""></div>
        <div class="inner">
            <div class="s-d-top"></div>
            <div class="s-d-top">
                <div class="right">
                    <h2><?php echo $intro?></h2>
                    <p><?php echo $department?></p>
                    <h3><?php echo $name?> <span><?php echo ($type=="의료진") ? "원장" : ""?></span></h3>
                    <ul class="dd01" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>구분</li>
                        <li>1차 진료</li>
                        <li>2차 진료</li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>월</li>
                        <li class="<?php echo ($mon_m=="휴진") ? "refrash" : ""?>"><?php echo $mon_m?></li>
                        <li class="<?php echo ($mon_a=="휴진") ? "refrash" : ""?>"><?php echo $mon_a?></li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>화</li>
                        <li class="<?php echo ($tues_m=="휴진") ? "refrash" : ""?>"><?php echo $tues_m?></li>
                        <li class="<?php echo ($tues_a=="휴진") ? "refrash" : ""?>"><?php echo $tues_a?></li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>수</li>
                        <li class="<?php echo ($wednes_m=="휴진") ? "refrash" : ""?>"><?php echo $wednes_m?></li>
                        <li class="<?php echo ($wednes_a=="휴진") ? "refrash" : ""?>"><?php echo $wednes_a?></li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>목</li>
                        <li class="<?php echo ($thurs_m=="휴진") ? "refrash" : ""?>"><?php echo $thurs_m?></li>
                        <li class="<?php echo ($thurs_a=="휴진") ? "refrash" : ""?>"><?php echo $thurs_a?></li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>금</li>
                        <li class="<?php echo ($fri_m=="휴진") ? "refrash" : ""?>"><?php echo $fri_m?></li>
                        <li class="<?php echo ($fri_a=="휴진") ? "refrash" : ""?>"><?php echo $fri_a?></li>
                    </ul>
                    <ul class="dd02" style="<?php echo ($type!="의료진") ? "display:none" : ""?>">
                        <li>토</li>
                        <li class="<?php echo ($sat_m=="휴진") ? "refrash" : ""?>"><?php echo $sat_m?></li>
                        <li class="<?php echo ($sat_a=="휴진") ? "refrash" : ""?>"><?php echo $sat_a?></li>
                    </ul>
                    <span style="<?php echo ($type!="의료진") ? "display:none" : ""?>">※ 의료진과 날짜를 확인하시어, 진료에 참고하시길 바랍니다.</span>
                </div>
            </div>
        </div>
        <div class="s-d-mid">
            <div class="inner">
                <div></div>
                <div>
                    <div class="contents">
                        <h2>학력 및 경력</h2>
                        <div><?php echo $grade?></div>
                    </div>
                    <div class="contents">
                        <h2>자격 및 연수</h2>
                        <div><?php echo $cert?></div>
                    </div>
                    <div class="contents" <?php echo (empty($book)) ? "style='display:none'" : ""?>>
                        <h2>저서</h2>
                        <div><?php echo $book?></div>
                    </div>
                </div>
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

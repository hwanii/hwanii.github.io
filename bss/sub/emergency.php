<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header.php';
    $name=$_POST['name'];
    $cp=$_POST['cp'];
    ?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>사고 접수</h2>
            </div>
            <div class="sub_title">
                <p>접수 대상 찾기</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="emergency.php">
                <div class="input_contents">
                    <div class="top">
                        <h2>예약자명 국문</h2>
                        <p>국문 예약자명을 입력해주세요</p>
                    </div>
                    <div class="bottom">
                        <input type="text" id="name" name="name" value="<?php echo $name?>">
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>휴대 전화번호 입력</h2>
                        <p>담아두기 입력하신 휴대 전화번호 입력</p>
                    </div>
                    <div class="bottom">
                        <input type="tel" id="cp" name="cp" value="<?php echo $cp?>">
                    </div>
                </div>
                <button class="search_btn">조회하기</button>
            </form>
            </div>
            <div class="sub_title">
                <p>조회 결과 보기</p>
            </div>
            <div class="search_contents">
                <?php
                $sql="SELECT * FROM reservation WHERE name_kor='$name' AND cp='$cp' ORDER BY num DESC LIMIT 6";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $num=$row['num'];
                    $date=$row['date'];
                    $res_type=$row['res_type'];
                    $hotel=$row['hotel'];
                    $airport=$row['airport'];
                    $air=explode("/", $airport);
                    $bc=$row['basic'];
                    $ac=$row['add'];

                    $hf=$row['hotel_from'];
                    $ha=$row['hotel_arrive'];

                    if($hotel){
                        $hSql="SELECT * FROM hotel WHERE eng='$hotel'";
                        $hRes=mysqli_query($conn, $hSql);
                        $hRow=mysqli_fetch_array($hRes);
                        $price=$hRow['price'];
                        $add_price=$hRow['add_price'];
                    } else {
                        $hSql="SELECT * FROM hotel WHERE eng='$hf'";
                        $hRes=mysqli_query($conn, $hSql);
                        $hRow=mysqli_fetch_array($hRes);
                        $fp=$hRow['price'];
                        $fa=$hRow['add_price'];

                        $hSql="SELECT * FROM hotel WHERE eng='$ha'";
                        $hRes=mysqli_query($conn, $hSql);
                        $hRow=mysqli_fetch_array($hRes);
                        $ap=$hRow['price'];
                        $aa=$hRow['add_price'];

                        $price=($fp>$ap) ? $fp : $ap;
                        $add_price=($fa>$aa) ? $fa : $aa;
                    }

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];

                    $w="";
                    if($res_type=="ah"){
                        $text="공항&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
                        $tt=$air[0]."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$hotel;
                        $w=" WHERE `type`='$airport'";
                    } else if($res_type=="hh"){
                        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
                        $tt=$hf."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$ha;
                        $w=" WHERE `type`='hotel'";
                    } else if($res_type=="ha"){
                        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;공항";
                        $tt=$hotel."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$air[0];
                        $w=" WHERE `type`='$airport'";
                    }

                    // $aSql="SELECT * FROM rate{$w}";
                    // $aRes=mysqli_query($conn, $aSql);
                    // $aRow=mysqli_fetch_array($aRes);
                    // $basic=$bc * $aRow['basic'];
                    // $add=$ac * $aRow['add'];

                    $aSql="SELECT * FROM rating";
                    $aRes=mysqli_query($conn, $aSql);
                    $aRow=mysqli_fetch_array($aRes);
                    $add=$ac * $aRow['add_baggage'];
                

                    $total=number_format($price+$add_price+$add+$air_box);
                    
                    $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                    $bcRes=mysqli_query($conn, $bcSql);
                    $bcRows=mysqli_num_rows($bcRes);
                ?>
                <div class="contents">
                    <p><?php echo $date?></p>
                    <p><?php echo $tt?></p>
                    <p><?php echo $text?></p>
                    <p><?php echo $total?>원</p>
                    <?php if($stat=="complete") { ?>
                    <p>완료</p>
                    <?php } else { ?>
                    <p>결제 완료, <?php echo ($bcRows>0) ? "사진 접수" : "사진 접수 대기"?></p>
                    <?php } ?>
                    <div class="search_result_btn one_btn">
                        <a href="emergency01.php?num=<?php echo $num?>">사고 접수하기</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>

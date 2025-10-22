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
                <h2>조회하기</h2>
            </div>
            <div class="sub_title">
                <p>결제 완료 예약 조회</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="search02.php">
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
                $sql="SELECT * FROM reservation WHERE name_kor='$name' AND cp='$cp' AND payment='confirm'";
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
                    $cargo_add=$row['cargo_add']*4000;

                    $hf=$row['hotel_from'];
                    $ha=$row['hotel_arrive'];

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];
                    $add_price=$row['add_price'];
                    
                    $stat=$row['stat'];

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

                    $total=number_format($hotel_price+$add_price+$add+$air_box+$cargo_add);
                    
                    $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                    $bcRes=mysqli_query($conn, $bcSql);
                    $bcRows=mysqli_num_rows($bcRes);
                ?>
                <div class="contents">
                    <p><?php echo $date?></p>
                    <?php
                    if($cargo_add>0){
                    ?>
                    <p>수하물 추가</p>
                    <?php } else {?>
                    <p><?php echo $tt?></p>
                    <p><?php echo $text?></p>
                    <?php } ?>
                    <p><?php echo $total?>원</p>
                    <?php if($stat=="complete") { ?>
                    <p style="font-weight: 700;">완료</p>
                    <?php } else if($stat=="waiting" || $stat=="proceeding") { ?>
                    <p style="font-weight: 700;">결제 완료<?php echo ($cargo_add>0) ? "" : (($bcRows>0) ? ", 사진 접수" : ", 사진 접수 대기")?></p>
                    <?php } else if($stat=="cancellation request") { ?>
                    <p style="font-weight: 700;">취소 및 환불 요청</p>
                    <?php } else if($stat=="cancel") { ?>
                    <p style="font-weight: 700;">취소 및 환불 완료</p>
                    <?php } ?>
                    <div class="search_result_btn one_btn" style="<?php echo ($stat=="cancellation request" || $stat=="cancel") ? "display:none" : ""?>">
                        <a href="process01.php?num=<?php echo $num?>">진행현황보기</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="inner"></div>
    </footer>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
</html>

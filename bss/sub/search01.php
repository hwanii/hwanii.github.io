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
                <p>담아둔 예약 조회</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="search01.php">
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
                <p>담아둔 예약 조회</p>
            </div>
            <div class="mini_title">
                <p>담아두는 예약은 6개 까지만 지원됩니다.</p>
            </div>
            <form method="POST" action="one_pay.php">
            <input type="submit" id="sub" style="display:none">
            <div class="search_contents">
                <?php
                $sql="SELECT * FROM reservation WHERE name_kor='$name' AND cp='$cp' AND stat='stay' ORDER BY num DESC LIMIT 6";
                $res=mysqli_query($conn, $sql);
                $add_price=0;
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

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];
                    $add_price=$row['add_price'];

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

                    $aSql="SELECT * FROM rating";
                    $aRes=mysqli_query($conn, $aSql);
                    $aRow=mysqli_fetch_array($aRes);
                    $add=$ac * $aRow['add_baggage'];

                    $total=number_format($hotel_price+$add_price+$add+$air_box);
                    
                ?>
                <div class="contents" id="search<?php echo $num?>">
                    <div class="input_check">
                        <input type="checkbox" id="iChk01" name="num[]" value="<?php echo $num?>">
                        <span><img src="../img/check.png"></span>
                    </div>
                    <p><?php echo $date?></p>
                    <p><?php echo $tt?></p>
                    <p><?php echo $text?></p>
                    <p><?php echo $total?>원</p>
                    <p>결제 대기</p>
                    <div class="search_result_btn">
                        <a href="estimate.php?num=<?php echo $num?>">보기</a>
                        <button type="button" onclick="res_del('<?php echo $num?>')">삭제</button>
                    </div>
                </div>
                <?php } ?>
            </div>
            <button type="button" onclick="list_chk()" class="check_pay">체크하고 결제하기</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="inner"></div>
    </footer>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
<script>
    function res_del(n){
        if(confirm("정말로 삭제하시겠습니까?")){
            ifrm.location.href="res_del.php?num="+n;
            $("#search"+n).remove();
        }
    }

    function list_chk(){
        var cnt = $("#iChk01:checked").length;

        if(cnt==0){
            alert("하나 이상 선택해주세요.");
        } else {
            $("#sub").click();
        }
    }
</script>
</html>

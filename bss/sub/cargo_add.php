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
                <h2>당일 수하물 추가</h2>
            </div>
            <div class="sub_title">
                <p>예약 조회</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="cargo_add.php">
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
                $date=date("Y-m-d");
                $sql="SELECT * FROM reservation WHERE `date`='$date' AND name_kor='$name' AND cp='$cp' AND payment='confirm' AND cargo_add='0' AND stat NOT LIKE '%cancel%'";
                echo $sql;
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

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];
                    $add_price=$row['add_price'];

                    $w="";
                    if($res_type=="ah"){
                        $text="공항&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
                        $tt=$airport."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$hotel;
                        $w=" WHERE `type`='$airport'";
                    } else if($res_type=="hh"){
                        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;호텔";
                        $tt=$hf."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$ha;
                        $w=" WHERE `type`='hotel'";
                    } else if($res_type=="ha"){
                        $text="호텔&nbsp;&nbsp;&#62;&nbsp;&nbsp;공항";
                        $tt=$hotel."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$airport;
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

                    $total=number_format($hotel_price+$add_price+$add+$air_box);
                    
                    $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                    $bcRes=mysqli_query($conn, $bcSql);
                    $bcRows=mysqli_num_rows($bcRes);
                ?>
                <div class="contents cargo_sel" style="padding: 12px 5px; margin-bottom: 15px; cursor: pointer;">
                    <p><?php echo $date?></p>
                    <p><?php echo $tt?></p>
                    <p><?php echo $text?></p>
                    <p><?php echo $total?>원</p>
                    <p>결제 완료, <?php echo ($bcRows>0) ? "사진 접수" : "사진 접수 대기"?></p>
                </div>
                <?php } ?>
            </div>
            <div class="cargo_add">
                <?php
                $sql="SELECT * FROM reservation WHERE `date`='$date' AND name_kor='$name' AND cp='$cp' AND payment='confirm' AND cargo_add='0' AND stat NOT LIKE '%cancel%'";
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

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];
                    $add_price=$row['add_price'];
                ?>
                <div class="cargo_add_contents">
                    <div class="estimate_list">
                        <div class="contents" style="justify-content: space-between;">
                            <h2>기존 수하물 개수</h2>
                            <div class="right" style="width: auto;">
                                <p style="color: #c1272d; font-weight: 700; font-size: 12px; padding-right: 2px;"><?php echo $bc+$ac?> 개</p>
                            </div>
                        </div>
                    </div>
                    <div class="reservation_contents">
                        <div class="cargo_contents">
                            <div class="left">
                                <h2>수하물 추가</h2>
                                <p>추가 수하물 개당 : <b style="color: #c1272d;">4,000원</b></p>
                            </div>
                            <div class="right">
                                <h2>수량</h2>
                                <div class="quantity">
                                    <input type="number" id="cargo<?php echo $num?>" name="add_count" min="0" step="1" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="cargo_add_btn" onclick="cargo_add('<?php echo $num?>');">추가신청</button>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="estimate_pop estimate_pop03">
            <div class="close">
                <span></span>
                <span></span>
            </div>
            <p>
                <?php
                $nSql="SELECT * FROM no_bankbook";
                $nRes=mysqli_query($conn, $nSql);
                $nRow=mysqli_fetch_array($nRes);
                ?>
                예금주 : <?php echo $nRow['name'];?><br>
                계좌번호 : <?php echo $nRow['bank'];?> <?php echo $nRow['account'];?>
                <span><b>입금자 명</b>은 <b>예약자 본인의 국문 성명</b>으로<br>기재해주시기 바랍니다.</span>
                <span>외부 결제를 하신 경우 통장 입금은 불필요합니다.</span>
            </p>
            <a href="javascript:$('#sub').click();">예약완료</a>
        </div>
        <div class="estimate_pop_bg"></div>
    </section>
    <form method="POST" action="cargo.php" target="ifrm">
        <input type="submit" id="sub" style="display:none">
        <input type="hidden" id="add" name="add">
        <input type="hidden" id="num" name="num">
    </form>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

<script>
    $(document).ready(function(){
        jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><img src="../img/input-up.png"></div><div class="quantity-button quantity-down"><img src="../img/input-down.png"></div></div>').insertAfter('.quantity input');

        jQuery('.quantity').each(function(){
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                inputStep = input.attr('step'),
                min = input.attr('min');

            btnUp.click(function() {
                var inputStepVal = parseFloat(inputStep);
                var oldValue = parseFloat(input.val());
                var newVal = oldValue + inputStepVal;
                spinner.find("input[type='number']").val(newVal);
                spinner.find("input[type='number']").trigger("change");
            });

            btnDown.click(function() {
                var inputStepVal = parseFloat(inputStep);
                var oldValue = parseFloat(input.val());
                    if (oldValue <= min) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue - inputStepVal;
                    }
                spinner.find("input[type='number']").val(newVal);
                spinner.find("input[type='number']").trigger("change");
            });
        });
    })
</script>
<script>
    function cargo_add(n){
        if($("#cargo"+n).val()!="" && $("#cargo"+n).val()!="0"){
            $("#num").val(n);
            $("#add").val($("#cargo"+n).val());

            $(".estimate_pop03").css({"display" : "flex"});
            $(".estimate_pop_bg").show();
        } else {
            alert("추가 수량을 0 이상 입력해주세요.");
            $("#num").val("");
            $("#add").val("");
        }
    }
</script>
</html>

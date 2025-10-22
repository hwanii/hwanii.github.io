<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header_en.php';
    $name=$_POST['name'];
    $cp=$_POST['cp'];
    ?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>ADD CARGO</h2>
            </div>
            <div class="sub_title">
                <p>Reservation inquiry</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="cargo_add_en.php">
                <div class="input_contents">
                    <div class="top">
                        <h2>Reservation name</h2>
                        <p>Please enter the reservation name</p>
                    </div>
                    <div class="bottom">
                        <input type="text" id="name" name="name" value="<?php echo $name?>">
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>Enter your mobile phone number</h2>
                        <p>Enter the mobile phone number you entered in SAVE</p>
                    </div>
                    <div class="bottom">
                        <input type="tel" id="cp" name="cp" value="<?php echo $cp?>">
                    </div>
                </div>
                <button class="search_btn">SEARCH</button>
            </form>
            </div>
            <div class="sub_title">
                <p>View query results</p>
            </div>
            <div class="search_contents">
                <?php
                $date=date("Y-m-d");
                $sql="SELECT * FROM reservation WHERE `date`='$date' AND name_kor='$name' AND cp='$cp' AND payment='confirm' AND cargo_add='0' AND stat NOT LIKE '%cancel%'";
                // echo $sql;
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $num=$row['num'];
                    // echo $num;
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
                        $text="AIR PORT&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
                        $tt=$airport."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$hotel;
                        $w=" WHERE `type`='$airport'";
                    } else if($res_type=="hh"){
                        $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
                        $tt=$hf."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$ha;
                        $w=" WHERE `type`='hotel'";
                    } else if($res_type=="ha"){
                        $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;AIR PORT";
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
                    <p><?php echo $total?>won</p>
                    <p>Payment completed, <?php echo ($bcRows>0) ? "Photo reception" : "Photo waiting"?></p>
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
                            <h2>Number of existing cargo</h2>
                            <div class="right" style="width: auto;">
                                <p style="color: #c1272d; font-weight: 700; font-size: 12px; padding-right: 2px;"><?php echo $bc+$ac?></p>
                            </div>
                        </div>
                    </div>
                    <div class="reservation_contents">
                        <div class="cargo_contents">
                            <div class="left">
                                <h2>Add cargo</h2>
                                <p>Per additional piece of cargo<br><b style="color: #c1272d;">4,000 won</b></p>
                            </div>
                            <div class="right">
                                <h2>Quantity</h2>
                                <div class="quantity">
                                    <input type="number" name="add_count" min="0" step="1" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="cargo_add_btn">Additional application</button>
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
                Account Holder : <?php echo $nRow['name'];?><br>
                Account number : <?php echo $nRow['bank'];?> <?php echo $nRow['account'];?>
                <span>Please enter <b>the name of the depositor</b> as <b>the name of the person making the reservation</b>.</span>
                <span>If you make an external payment, bank transfer is not necessary.</span>
            </p>
            <a href="javascript:deposit('request')">Make payment</a>
        </div>
        <div class="estimate_pop_bg"></div>
    </section>
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

</html>

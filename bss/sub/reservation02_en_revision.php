<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
    include '../header.php';
    
    $num=$_GET['num'];

    $sql="SELECT * FROM reservation WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $today=$row['date'];

    $res_type=$row['res_type'];
    $stat=$row['stat'];

    $date=$row['date'];
    $time=$row['time'];
    $arrive_time=$row['arrive_time'];

    $airport=$row['airport'];
    $hotel=$row['hotel'];

    $city_from=$row['city_from'];
    $hotel_from=$row['hotel_from'];

    $flight_number=$row['flight_number'];

    $city_arrive=$row['city_arrive'];
    $hotel_arrive=$row['hotel_arrive'];

    $payment_type=$row['payment_type'];

    $basic=$row['basic'];
    $add=$row['add'];
    $air_box=$row['air_box'];
    $hotel_price=$row['hotel_price'];
    $add_price=$row['add_price'];
    $name_kor=$row['name_kor'];
    $name_eng=$row['name_eng'];
    $cp=$row['cp'];

    $memo=$row['memo'];
    ?>
    <section class="reservation">
        <div class="inner">
            <div class="main_title">
                <h2>RESERVATION</h2>
            </div>
            <div class="sub_title">
                <p>HOTEL</p>
                <span>&#62;</span>
                <p>HOTEL</p>
            </div>
            <form method="POST" action="res_en.php" target="ifrm">
            <input type="submit" id="sub" style="display:none">
            <input type="hidden" name="res_type" value="hh">
            <input type="hidden" id="hotel_price" name="hotel_price" value="0">
            <input type="hidden" id="add_price" name="add_price" value="0">
            <input type="hidden" id="stat" name="stat">
            <div class="reservation_contents">
                <div class="input_contents">
                    <div class="top">
                        <h2>Date of service use</h2>
                        <p>Please select the date you want to send the cargo</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-calendar.jpg" class="date_icon" onclick="document.querySelector('.date').focus();">
                        <input type="date" name="date" value="<?php echo $date?>" class="date" onfocus="this.showPicker();">
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>Time to send the cargo</h2>
                        <p>Please fill out the time to send the cargo</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-time.jpg" class="time_icon" onclick="document.querySelector('.time').focus();">
                        <input type="time" name="time" value="<?php echo $time?>" class="time" onfocus="this.showPicker();" onchange="change_time(this.value)">
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>To select a departure area</h2>
                        <p>Please choose the area you want to leave</p>
                    </div>
                    <div class="bottom">
                        <select name="city_from">
                            <option value="" disabled selected>Please select a region</option>
                            <?php
                            $sql="SELECT * FROM city ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                                $kor=$row['kor'];
                                $eng=$row['eng'];
                                ?>
                            <option value="<?php echo $eng?>" <?php echo ($city_from==$eng) ? "selected" : ""?>><?php echo $eng?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <p class="warning">When selecting departure and arrival areas, you can only select Da Nang to Da Nang, Da Nang to Hoi An, Hoi An to Da Nang, and Hoi An to Hoi An.</p>
                </div>
                <div class="input_contents hotel">
                    <div class="top">
                        <h2>Find a hotel</h2>
                        <p>Please choose the hotel you're leaving</p>
                    </div>
                    <div class="bottom">
                        <!-- <img src="../img/icon-search.png">
                        <input type="text" name="hotel_form" class="autocomplete" id="hotel1">-->
                        <!-- <select name="hotel_form" onchange="hotel_change(this.value, 'hotel1')">
                            <option value="" disabled selected>호텔을 선택해주세요</option>
                        </select> -->
                        <img src="../img/icon-search.png">
                        <input type="text" id="hotel_input1" name="hotel_from" value="<?php echo $hotel_from?>" onkeyup="hotel_search(this.value, '1')" placeholder="Please choose a hotel" class="hotel_input">
                        <div class="hotel_pop" id="hotel_pop1">
                            <p></p>
                        </div>
                    </div>
                    <p class="warning">
                        Additional charges will be incurred depending on the location.<br>
                        In the case of Danang, Mikazuki, InterContinental, Shilla Monogram, Le Méridien / in the case of Hoi An, all hotels in Nam Hoi An, Vinpearl Nam Hoi An, and Bliss incur an additional charge of 5,000 won.
                    </p>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>Select a Destination Area</h2>
                        <p>Please select the area you want to arrive in</p>
                    </div>
                    <div class="bottom">
                        <select name="city_arrive">
                            <option value="" disabled selected>Please select a region</option>
                            <?php
                            $sql="SELECT * FROM city ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                                $kor=$row['kor'];
                                $eng=$row['eng'];
                                ?>
                            <option value="<?php echo $eng?>" <?php echo ($city_arrive==$eng) ? "selected" : ""?>><?php echo $eng?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <p class="warning">When selecting departure and arrival areas, you can only select Da Nang to Da Nang, Da Nang to Hoi An, Hoi An to Da Nang, and Hoi An to Hoi An.</p>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>Hotel arrival time</h2>
                        <p>Please enter your estimated arrival time</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-time.jpg" class="time_icon" onclick="document.querySelector('.hotel_time').focus();">
                        <input type="time" name="arrive_time" value="<?php echo $arrive_time?>" class="hotel_time" onfocus="this.showPicker();" onchange="change_time(this.value)">
                    </div>
                    <p class="warning">Your hotel arrival time must be <b style="text-decoration: underline;">at least 3 hours</b> apart from your cargo drop-off time.</p>
                </div>
                <div class="input_contents hotel">
                    <div class="top">
                        <h2>Find a hotel</h2>
                        <p>Please choose the hotel you're arriving at</p>
                    </div>
                    <div class="bottom">
                        <!-- <img src="../img/icon-search.png">
                        <input type="text" name="hotel_arrive" class="autocomplete" id="hotel2"> -->
                        <!-- <select name="hotel_arrive" onchange="hotel_change(this.value, 'hotel2')">
                            <option value="" disabled selected>호텔을 선택해주세요</option>
                        </select> -->
                        <img src="../img/icon-search.png">
                        <input type="text" id="hotel_input2" name="hotel_arrive" value="<?php echo $hotel_arrive?>" onkeyup="hotel_search(this.value, '2')" placeholder="Please choose a hotel" class="hotel_input">
                        <div class="hotel_pop" id="hotel_pop2">
                            <p></p>
                        </div>
                    </div>
                    <p class="warning">
                        Additional charges will be incurred depending on the location.<br>
                        In the case of Danang, Mikazuki, InterContinental, Shilla Monogram, Le Méridien / in the case of Hoi An, all hotels in Nam Hoi An, Vinpearl Nam Hoi An, and Bliss incur an additional charge of 5,000 won.
                    </p>
                </div>
                <div class="input_contents hotel">
                    <div class="top">
                        <h2>Select External Payment</h2>
                        <p>Please select an external payment.</p>
                    </div>
                    <div class="bottom">
                        <select name="payment_type">
                            <option value="" disabled selected>Please select an external payment.</option>
                            <option value="외부 결제 없음 <?php echo ($payment_type=="외부 결제 없음") ? "selected" : ""?>">No external payments</option>
                            <option value="몽키트레블" <?php echo ($payment_type=="몽키트레블") ? "selected" : ""?>>Monkeytravel</option>
                            <option value="마이리얼트립" <?php echo ($payment_type=="마이리얼트립") ? "selected" : ""?>>Myrealtrip</option>
                            <option value="네이버스마트스토어 <?php echo ($payment_type=="네이버스마트스토어") ? "selected" : ""?>">Naver smart store</option>
                        </select>
                    </div>
                </div>
                <div class="cargo_contents" style="margin-top: 40px;">
                    <div class="left">
                    <h2>One-way shipping fee of 1~3 pieces</h2>
                        <p>
                            It's a price of 1 to 3 pieces of luggage.<br><b style="color: #c1272d;">Base rate : 18,000 won</b><br>
                            (Set carrier, shopping bag, and plastic bag are also processed as one each.)<br><br>
                            If you have more than 4, please enter the additional charge quantity below.
                        </p>
                    </div>
                    <div class="right">
                        <h2>Quantity</h2>
                        <div class="quantity">
                            <input type="number" name="basic_count" min="0" max="3" step="1" value="<?php echo $basic?>">
                        </div>
                    </div>
                </div>
                <div class="cargo_contents">
                    <div class="left">
                        <h2>Cargo Delivery One-way Additional Cargo</h2>
                        <p>This is the price for each piece after 4 pieces. <b style="color: #c1272d;">4,000 won</b></p>
                    </div>
                    <div class="right">
                        <h2>Quantity</h2>
                        <div class="quantity">
                            <input type="number" name="add_count" min="0" step="1" value="<?php echo $add?>">
                        </div>
                    </div>
                </div>
                <div class="cargo_contents" id="hotel_add" style="<?php echo ($add_price==0) ? "display:none" : ""?>">
                    <div class="left">
                        <h2>Local surcharge</h2>
                        <p>This is the price for each piece after 4 pieces.</p>
                    </div>
                    <div class="right">
                        <p id="ap"><?php echo number_format($add_price)?> won</p>
                    </div>
                </div>
                <div class="bottom_contents" style="margin-top: 40px;">
                    <div class="left">
                        <h2>Reservation name</h2>
                        <p>
                            Please be sure to enter your English name on your passport.
                            Please make a reservation using the same name as the hotel reservation name.
                            <br><br>
                            If you are not the person making the hotel reservation, please enter the name of the person making the hotel reservation to ensure smooth delivery.
                            <br><br>
                            Hotel → For hotel delivery, you must enter the name of the person making the reservation at the arrival hotel.
                        </p>
                    </div>
                    <div class="right">
                        <input type="text" name="name_kor" value="<?php echo $name_kor?>" placeholder="Korean" required>
                        <input type="text" name="name_eng" value="<?php echo $name_eng?>" placeholder="English" required>
                    </div>
                </div>
                <div class="bottom_contents">
                    <div class="left">
                        <h2>Mobile phone number</h2>
                        <p>Please enter the mobile phone number of the person making the reservation</p>
                    </div>
                    <input type="tel" name="tel" value="<?php echo $cp?>" maxlength="15" onkeyup="this.value=this.value.replace(/[^-0-9]/g,'');" required>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>Note</h2>
                        <p>If you have any other special information, please write it down.</p>
                    </div>
                    <div class="bottom" style="height: auto;">
                        <textarea name="memo" placeholder="For Airbnb, please leave the host phone number and local address."><?php echo $memo?></textarea>
                    </div>
                </div>
            </div>
            </form>
            <div class="reservation_pop_btn">
                <a href="javascript:$('#sub').click();" style="background-color: #c1272d;">SAVE</a>
            </div>
            <div class="keep_pop">
                <!-- <div class="close">
                    <span></span>
                    <span></span>
                </div> -->
                <p>
                    Saved reservations can be found in <b>Check Save</b><br>
                    Payment can be made after confirming the reservation name in Korean and phone number.
                </p>
                <a href="../sub/search_en.php">SEARCH</a>
            </div>
            <div class="keep_pop_bg"></div>
        </div>
    </section>
    <input type="hidden" id="hotel1" value="0">
    <input type="hidden" id="hotel1_add" value="0">
    <input type="hidden" id="hotel2" value="0">
    <input type="hidden" id="hotel2_add" value="0">
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
<!-- <script defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAIzCE5WF93dXaYi3jOgE-cw-LaWcmFBuo&libraries=places&language=ko&callback=initMap"></script>
<script defer type="module" src="../js/search.js"></script> -->

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
    function keep_it(){
        $('#stat').val('stay');
        
        setTimeout(() => {
            $("#sub").click();
        }, 500);
    }

    function hotel_search(v, t){
        $.ajax({
            url:"hotel_search.php",
            type:"POST",
            data:{
                hotel:v,
                no:t
            },
            dataType:"JSON",
            success:function(data){
                $(".hotel_pop").empty();
                $(".hotel_pop").append(data);
            }
        });
    }

    function hotel_change(v, t){
        $.ajax({
            url:"hotel_sel.php",
            type:"POST",
            data:{
                hotel:v
            },
            dataType:"JSON",
            success:function(data){
                $("#hotel"+t).val(data[0]);
                $("#hotel"+t+"_add").val(data[1]);

                if($("#hotel1").val()==$("#hotel2").val()){
                    $("#hotel_price").val(data[0]);
                } else if($("#hotel1").val()>$("#hotel2").val()){
                    $("#hotel_price").val($("#hotel1").val());
                } else if($("#hotel1").val()<$("#hotel2").val()){
                    $("#hotel_price").val($("#hotel2").val());
                }

                if($("#hotel1_add").val()==$("#hotel2_add").val()){
                    $("#add_price").val(data[1]);
                } else if($("#hotel1_add").val()>$("#hotel2_add").val()){
                    $("#add_price").val($("#hotel1_add").val());
                } else if($("#hotel1_add").val()<$("#hotel2_add").val()){
                    $("#add_price").val($("#hotel2_add").val());
                }

                if($("#add_price").val()>0){
                    $("#hotel_add").css("display", "flex");
                    $("#ap").text(comma($("#add_price").val())+"won");
                } else {
                    $("#hotel_add").css("display", "none");
                }
            }
        });
    }
    
    function comma(str) {
        str = String(str);
        return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
    }
</script>



</html>
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
                <h2>예약하기</h2>
            </div>
            <div class="sub_title">
                <p>호텔</p>
                <span>&#62;</span>
                <p>공항</p>
            </div>
            <form method="POST" action="res.php" target="ifrm">
            <input type="submit" id="sub" style="display:none">
            <input type="hidden" name="res_type" value="ha">
            <input type="hidden" id="air_box" name="air_box" value="">
            <input type="hidden" id="hotel_price" name="hotel_price" value="0">
            <input type="hidden" id="add_price" name="add_price" value="0">
            <input type="hidden" id="stat" name="stat">
            <div class="reservation_contents">
                <div class="input_contents">
                    <div class="top">
                        <h2>서비스 이용 일자</h2>
                        <p>서비스 이용 일자를 선택해주세요</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-calendar.jpg" class="date_icon" onclick="document.querySelector('.date').focus();">
                        <input type="date" name="date" class="date" onfocus="this.showPicker();">
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>서비스 이용 시간</h2>
                        <p>서비스 이용 시간을 작성해주세요</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-time.jpg" class="time_icon" onclick="document.querySelector('.hotel_time').focus();">
                        <input type="time" name="time" class="hotel_time" onfocus="this.showPicker();" onchange="change_time(this.value)">
                    </div>
                </div>
                <div class="input_contents hotel">
                    <div class="top">
                        <h2>호텔 찾기</h2>
                        <p>출발하시는 호텔을 선택해주세요</p>
                    </div>
                    <div class="bottom">
                        <!-- <img src="../img/icon-search.png">
                        <input type="text" name="hotel" class="autocomplete" id="hotel"> -->
                        <!-- <select name="hotel" onchange="hotel_price(this.value)">
                            <option value="" disabled selected>호텔을 선택해주세요</option>
                        </select> -->
                        <img src="../img/icon-search.png">
                        <input type="text" id="hotel" name="hotel" onkeyup="hotel_search(this.value)" placeholder="호텔을 선택해주세요" class="hotel_input">
                        <div class="hotel_pop">
                            <p></p>
                        </div>
                    </div>
                    <p class="warning">
                        지역에 따라 추가 요금이 발생합니다.<br>
                        다낭의 경우 미카즈키, 인터컨티넨털, 신라모노그램, 르메르디앙 / 호이안 경우 남호이안호이아나 내 모든호텔, 빈펄남호이안, 블리스는 5,000원의 추가비용이 발생합니다.
                    </p>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>공항 선택하기</h2>
                        <p>출발 하실 공항을 선택해주세요</p>
                    </div>
                    <div class="bottom">
                        <select name="airport">
                            <option value="" disabled selected>공항을 선택해주세요</option>
                            <?php
                            $sql="SELECT * FROM airport ORDER BY num ASC";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                                ?>
                            <option value="<?php echo $row['eng']?>"><?php echo $row['kor']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>공항 도착 시간</h2>
                        <p>공항에 도착하는 시간을 작성해주세요</p>
                    </div>
                    <div class="bottom">
                        <img src="../img/icon-time.jpg" class="time_icon" onclick="document.querySelector('.time').focus();">
                        <input type="time" name="arrive_time" class="time" onfocus="this.showPicker();">
                    </div>
                    <p class="warning">
                        공항 도착 시간은 서비스 이용 시간과 <b style="text-decoration: underline;">최소 3시간</b>의 차이가 나야 합니다.
                        <br><br>
                        23시 이후 도착 시 무인 보관함에 자동으로 보관되며 5,000원의 추가 요금이 발생합니다.<br>
                        무인 보관함 비밀번호는 예약자님의 휴대 전화번호 끝 4자리입니다.
                    </p>
                </div>
                <div class="input_contents hotel">
                    <div class="top">
                        <h2>외부 결제 선택</h2>
                        <p>외부 결제를 선택해주세요.</p>
                    </div>
                    <div class="bottom">
                        <select name="payment_type">
                            <option value="" disabled selected>외부결제를 선택해주세요</option>
                            <option value="외부 결제 없음">외부 결제 없음</option>
                            <option value="몽키트레블">몽키트레블</option>
                            <option value="마이리얼트립">마이리얼트립</option>
                            <option value="네이버스마트스토어">네이버스마트스토어</option>
                        </select>
                    </div>
                </div>
                <div class="cargo_contents" style="margin-top: 40px;">
                    <div class="left">
                        <h2>수하물 배송 편도 요금 1~3개</h2>
                        <p>
                            수하물 개수 1~3개까지 가격입니다.<br><b style="color: #c1272d;">기본 요금 : 18,000원</b><br>
                            (세트형 캐리어, 쇼핑백, 비닐봉지도<br>각 1개로 처리됩니다.)<br>
                            4개가 넘는 분은 아래의 추가 요금 수량을<br>입력해주세요.
                        </p>
                    </div>
                    <div class="right">
                        <h2>수량</h2>
                        <div class="quantity">
                            <input type="number" name="basic_count" min="0" step="1" value="0">
                        </div>
                    </div>
                </div>
                <div class="cargo_contents">
                    <div class="left">
                        <h2>수하물 배송 편도 추가 화물</h2>
                        <p>4개 이후 각 가격입니다. <b style="color: #c1272d;">4,000원</b></p>
                    </div>
                    <div class="right">
                        <h2>수량</h2>
                        <div class="quantity">
                            <input type="number" name="add_count" min="0" step="1" value="0">
                        </div>
                    </div>
                </div>
                <div class="cargo_contents" id="hotel_add" style="display:none">
                    <div class="left">
                        <h2>지역 추가 요금</h2>
                        <p>4개 이후 각 가격입니다.</p>
                    </div>
                    <div class="right">
                        <p id="ap">0,000원</p>
                    </div>
                </div>
                <div class="cargo_contents" id="airport_box" style="display:none">
                    <div class="left">
                        <h2>22시 이후 보관함 요금</h2>
                        <p>
                            22시 이후에는 보관함에 보관되며<br>
                            예약자님의 휴대폰 번호 마지막 4자리로 설정됩니다.
                        </p>
                    </div>
                    <div class="right">
                        <p id="box">0,000원</p>
                    </div>
                </div>
                <div class="bottom_contents" style="margin-top: 40px;">
                    <div class="left">
                        <h2>예약자명</h2>
                        <p>
                            반드시 여권 영문명으로 입력해주세요.<br>
                            호텔 예약자명과 동일한 이름으로 예약해주세요.
                            <br><br>
                            본인이 호텔 예약자가 아닌 경우,<br>
                            원활한 배송을 위해 호텔 예약자명을 입력해주세요<br>
                            호텔 → 호텔 배송은, 반드시 도착호텔 예약자명을<br>
                            입력하셔야 합니다.
                        </p>
                    </div>
                    <div class="right">
                        <input type="text" name="name_kor" placeholder="국문" required>
                        <input type="text" name="name_eng" placeholder="영문" required>
                    </div>
                </div>
                <div class="bottom_contents">
                    <div class="left">
                        <h2>휴대 전화번호</h2>
                        <p>예약하시는 분의 한국 휴대 전화번호를 입력해주세요</p>
                    </div>
                    <input type="tel" name="tel" maxlength="15" onkeyup="this.value=this.value.replace(/[^-0-9]/g,'');" required>
                </div>
                <div class="input_contents">
                    <div class="top">
                        <h2>특이사항</h2>
                        <p>다른 특이사항이 있다면 작성해주세요</p>
                    </div>
                    <div class="bottom" style="height: auto;">
                        <textarea name="memo" placeholder="에이비엔비경우 호스트 전화번호와 현지주소를 남겨주세요."></textarea>
                    </div>
                </div>
            </div>
            </form>
            <div class="reservation_pop_btn">
                <a href="javascript:$('#sub').click();">견적 보기</a>
                <a href="javascript:keep_it()">담아 두기</a>
            </div>
            <div class="keep_pop">
                <!-- <div class="close">
                    <span></span>
                    <span></span>
                </div> -->
                <p>
                    담아둔 예약은 <b>담아두기 조회</b>에서<br>
                    예약번호 + 전화번호 확인 후 결제가 가능합니다.
                </p>
                <a href="../sub/search.php">조회하기</a>
            </div>
            <div class="keep_pop_bg"></div>
        </div>
    </section>
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
    function sel_change(v){
        $.ajax({
            url:"airport_sel.php",
            type:"POST",
            data:{type:v},
            dataType:"JSON",
            success:function(data){
                $("#air_box").val(data[0]);
                $("#box").text(comma(data[0])+"원");
            }
        });
    }
    
    function change_time(t){
        var time = parseInt(t.replace(":", ""));
        var ct = time+300;
        if(ct>2359){
            ct = ct-2400;
        }

        ct = String(ct).padStart(4, '0');
        var st = ct.substr(0, 2);
        var et = ct.substr(2, 2);
        var in_time = st + ":" + et;

        $(".time").val(in_time);

        if(ct > 2200 || ct < 930){
            $("#airport_box").css("display", "flex");
            $.ajax({
                url:"airport_sel.php",
                type:"POST",
                data:{type:t},
                dataType:"JSON",
                success:function(data){
                    $("#air_box").val(data[0]);
                    $("#box").text(comma(data[0])+"원");
                }
            });
        } else {
            $("#air_box").val("0");
            $("#airport_box").css("display", "none");
        }
    }

    function hotel_search(v){
        $.ajax({
            url:"hotel_search.php",
            type:"POST",
            data:{
                hotel:v
            },
            dataType:"JSON",
            success:function(data){
                $(".hotel_pop").empty();
                $(".hotel_pop").append(data);
            }
        });
    }

    function hotel_change(v){
        $.ajax({
            url:"hotel_sel.php",
            type:"POST",
            data:{
                hotel:v
            },
            dataType:"JSON",
            success:function(data){
                if(data[1]>0){
                    $("#hotel_add").css("display", "flex");
                    $("#ap").text(comma(data[1])+"원");
                } else {
                    $("#hotel_add").css("display", "none");
                }
                $("#hotel_price").val(data[0]);
                $("#add_price").val(data[1]);
            }
        });
    }

    function comma(str) {
        str = String(str);
        return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
    }

    function keep_it(){
        $('#stat').val('stay');
        
        setTimeout(() => {
            $("#sub").click();
        }, 500);
    }
</script>


</html>

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
        <?php
        $num=$_GET['num'];

        $sql="SELECT * FROM reservation WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $res_no=$row['res_no'];
        $res_type=$row['res_type'];
        $date=$row['date'];
        $time=$row['time'];
        $name_kor=$row['name_kor'];
        $airport=$row['airport'];
        $air=explode("/", $airport);
        $hotel=$row['hotel'];
        $bc=$row['basic'];
        $ac=$row['add'];
        
        $cf=$row['city_from'];
        $ca=$row['city_arrive'];

        $hf=$row['hotel_from'];
        $ha=$row['hotel_arrive'];

        $air_box=$row['air_box'];
        $hotel_price=$row['hotel_price'];
        $add_price=$row['add_price'];

        $w="";
        if($res_type=="ah"){
            $txt="공항 &#62; 호텔";
        } else if($res_type=="hh"){
            $txt="호텔 &#62; 호텔";
        } else if($res_type=="ha"){
            $txt="호텔 &#62; 공항";
        }

        $aSql="SELECT * FROM rating";
        $aRes=mysqli_query($conn, $aSql);
        $aRow=mysqli_fetch_array($aRes);
        $add=$ac * $aRow['add_baggage'];
        ?>
        <div class="inner">
            <div class="main_title">
                <h2>사고 접수</h2>
            </div>
            <div class="sub_title">
                <p>접수 작성하기</p>
            </div>
            <div class="estimate_list">
                <div class="contents">
                    <h2>예약번호</h2>
                    <p style="color: #000; font-weight: 400;"><?php echo $res_no?></p>
                </div>
                <div class="contents">
                    <h2>서비스  타입</h2>
                    <p><?php echo $txt?></p>
                </div>
                <!-- <div class="contents">
                    <h2>일자</h2>
                    <p><?php echo date("Y.m.d", strtotime($row['date']))?></p>
                </div>
                <div class="contents">
                    <h2>시간</h2>
                    <p><?php echo date("H:i", strtotime($row['time']))?></p>
                </div> -->
                <?php if($res_type=="ah"){ ?>
                <div class="contents">
                    <h2>베트남 도착 일자</h2>
                    <p><?php echo $row['date']?></p>
                </div>
                <div class="contents">
                    <h2>베트남 도착 시간</h2>
                    <p><?php echo $row['time']?></p>
                </div>
                <div class="contents">
                    <h2>공항</h2>
                    <p><?php echo $row['airport']?></p>
                </div>
                <div class="contents">
                    <h2>비행기 편명</h2>
                    <p><?php echo $row['flight_number']?></p>
                </div>
                <div class="contents">
                    <h2>도착 호텔</h2>
                    <p><?php echo $row['hotel']?></p>
                </div>
                <div class="contents">
                    <h2>호텔 도착 시간</h2>
                    <p><?php echo $row['arrive_time']?></p>
                </div>
                <?php } else if($res_type=="hh"){ ?>
                <!-- <div class="contents">
                    <h2>출발 도시</h2>
                    <p><?php echo $row['city_from']?></p>
                </div>
                <div class="contents">
                    <h2>출발 호텔</h2>
                    <p><?php echo $row['hotel_from']?></p>
                </div>
                <div class="contents">
                    <h2>도착 도시</h2>
                    <p><?php echo $row['city_arrive']?></p>
                </div>
                <div class="contents">
                    <h2>도착 호텔</h2>
                    <p><?php echo $row['hotel_arrive']?></p>
                </div> -->
                <div class="contents">
                    <h2>서비스 이용 일자</h2>
                    <p><?php echo $row['date']?></p>
                </div>
                <div class="contents">
                    <h2>수하물 맡기는 시간</h2>
                    <p><?php echo $row['time']?></p>
                </div>
                <div class="contents">
                    <h2>출발 도시</h2>
                    <p><?php echo $row['city_from']?></p>
                </div>
                <div class="contents">
                    <h2>출발 호텔</h2>
                    <p><?php echo $row['hotel_from']?></p>
                </div>
                <div class="contents">
                    <h2>도착 도시</h2>
                    <p><?php echo $row['city_arrive']?></p>
                </div>
                <div class="contents">
                    <h2>도착 호텔</h2>
                    <p><?php echo $row['hotel_arrive']?></p>
                </div>
                <div class="contents">
                    <h2>호텔 도착 시간</h2>
                    <p><?php echo $row['arrive_time']?></p>
                </div>
                <?php } else { ?>
                <!-- <div class="contents">
                    <h2>공항</h2>
                    <p><?php echo $row['airport']?></p>
                </div>
                <div class="contents">
                    <h2>호텔</h2>
                    <p><?php echo $row['hotel']?></p>
                </div> -->
                <div class="contents">
                    <h2>서비스 이용 일자</h2>
                    <p><?php echo $row['date']?></p>
                </div>
                <div class="contents">
                    <h2>수하물 맡기는 시간</h2>
                    <p><?php echo $row['time']?></p>
                </div>
                <div class="contents">
                    <h2>출발 호텔</h2>
                    <p><?php echo $row['hotel']?></p>
                </div>
                <div class="contents">
                    <h2>도착 공항</h2>
                    <p><?php echo $row['airport']?></p>
                </div>
                <div class="contents">
                    <h2>공항 도착 시간</h2>
                    <p><?php echo $row['arrive_time']?></p>
                </div>
                <?php } ?>
                <div class="contents">
                    <h2>수화물 배송 편도 요금 1 ~ 3개</h2>
                    <div class="right">
                        <p><?php echo $bc?></p>
                        <p><?php echo number_format($hotel_price)?>원</p>
                    </div>
                </div>
                <?php
                if($ac!=0){
                ?>
                <div class="contents">
                    <h2>수화물 배송 편도 추가 화물</h2>
                    <div class="right">
                        <p><?php echo $ac?></p>
                        <p><?php echo number_format($add)?>원</p>
                    </div>
                </div>
                <?php 
                }
                if($add_price!=0) { ?>
                <div class="contents">
                    <h2>지역 추가 요금</h2>
                    <div class="right">
                        <p>1</p>
                        <p><?php echo number_format($add_price)?>원</p>
                    </div>
                </div>
                <?php }
                if($air_box>0) {?>
                <div class="contents">
                    <h2>보관함 요금</h2>
                    <div class="right">
                        <p>1</p>
                        <p><?php echo number_format($air_box)?>원</p>
                    </div>
                </div>
                <?php } ?>
                <div class="contents">
                    <h2>예약자 명</h2>
                    <p><?php echo $row['name_kor'];?></p>
                </div>
                <div class="contents">
                    <h2>휴대 전화번호</h2>
                    <p><?php echo $row['cp']?></p>
                </div>
                <div class="contents">
                    <h2>특이사항</h2>
                    <p><?php echo $row['memo']?></p>
                </div>
            </div>
            <div class="emergency_line"></div>
            <form method="POST" action="emergency_update.php" enctype="multipart/form-data" target="ifrm">
            <input type="hidden" name="num" value="<?php echo $num?>">
            <input type="hidden" name="name" value="<?php echo $name_kor?>">
            <div class="emergency_contents">
                <input type="text" name="title" placeholder="사고 제목 영역">
                <textarea name="contents" placeholder="상세 내용 작성"></textarea>
            </div>
            <button type="button" class="attached_btn">사진 업로드 / 확인</button>
            <button class="accident_submit">사고 접수</button>
            </form>
            <div class="attached_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>사고 이미지 첨부</h2>
                <div class="btn_div">
                    <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file[]" id="file" style="display:none" multiple>
                    </form>
                    <button onclick="$('#file').click();">사진 선택</button>
                    <button onclick="all_del('<?php echo $num?>')">전체 삭제</button>
                </div>
                <div class="attached_img">
                    <?php
                    $fSql="SELECT * FROM emer_file WHERE `number`='$num'";
                    $fRes=mysqli_query($conn, $fSql);
                    $i=1;
                    while($fRow=mysqli_fetch_array($fRes)){
                        $file=$fRow['file'];
                    ?>
                    <div class="contents" id="emergency<?php echo $i?>">
                        <div class="delete" onclick="img_del('<?php echo $num?>', '<?php echo $file?>', '<?php echo $i?>')">
                            <span></span>
                            <span></span>
                        </div>
                        <img src="../img/emergency/<?php echo $file?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="emergency_bg"></div>
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
    $("input[type='file']").on("change", function(){
        var formData = new FormData();
        var file = this.files;
        formData.append("num", "<?php echo $num?>");
        
        $.each(file, function(key, value){
        //key는 다른 지정이 없다면 0부터 시작 할것이고, value는 파일 관련 정보입니다.
            formData.append(key, value);
        });

        $.ajax({
            async : true,
            method : "POST",
            url : 'emer_update.php',
            processData : false,
            data : formData,
            contentType : false,
            dataType:"JSON",
            success : function(data){
                $("#file").val('');
                // $(".upload_img").empty();
                $(".attached_img").append(data);
            }
        });
    });
</script>
<script>
    function img_del(n, f, i){
        if(confirm("정말로 삭제하시겠습니까?")){
            $.ajax({
                url:"emer_del.php",
                type:"POST",
                data:{
                    number:n,
                    file:f,
                },
                dataType:"JSON",
                success:function(data){
                    if(data=="true"){
                        $("#emergency"+i).remove();
                    }
                }
            });
        }
    }

    function all_del(n){
        if(confirm("정말로 삭제하시겠습니까?")){
            $.ajax({
                url:"emer_all_del.php",
                type:"POST",
                data:{
                    num:n,
                },
                success:function(){
                    $(".attached_img").empty();
                }
            })
        }
    }
</script>
</html>

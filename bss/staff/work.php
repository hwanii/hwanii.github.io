<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
    include 'staff.php';

    $num=$_GET['num'];

    $sql="SELECT * FROM reservation WHERE num='$num'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
    $date=$row['date'];
    $time=$row['time'];
    $res_no=$row['res_no'];
    $res_type=$row['res_type'];
    $arrive_time=$row['arrive_time'];
    $hotel=$row['hotel'];
    $airport=$row['airport'];
    $flight_number=$row['flight_number'];
    $air=explode("/", $airport);
    $bc=$row['basic'];
    $ac=$row['add'];

    $cargo_add=0;
    $aSql="SELECT * FROM reservation WHERE res_no LIKE '%$res_no%'";
    $aRes=mysqli_query($conn, $aSql);
    while($aRow=mysqli_fetch_array($aRes)){
        $cargo_add=$cargo_add+$aRow['cargo_add'];
    }

    $name_eng=$row['name_eng'];
    $cp=$row['cp'];
    $memo=$row['memo'];

    $cf=$row['city_from'];
    $hf=$row['hotel_from'];
    $ca=$row['city_arrive'];
    $ha=$row['hotel_arrive'];

    if($res_type=="ah"){
        $text="AIRPORT &#62; HOTEL";
        $tt=$airport." &#62; ".$hotel;
    } else if($res_type=="hh"){
        $text="HOTEL &#62; HOTEL";
        $tt=$hf." &#62; ".$ha;
    } else if($res_type=="ha"){
        $text="HOTEL &#62; AIRPORT";
        $tt=$hotel." &#62; ".$airport;
    }
    ?>
    <section class="staff">
        <div class="inner">
            <div class="staff_information">
                <div class="left">
                    <div>
                        <h2>STAFF NAME</h2>
                        <p><?php echo $staff_name?></p>
                    </div>
                    <div>
                        <h2>LOCATION</h2>
                        <p><?php echo $staff_location?></p>
                    </div>
                    <div>
                        <h2>WORKING PART</h2>
                        <p><?php echo $staff_part?></p>
                    </div>
                </div>
                <a href="../staff/check.php">Go to<br>Today</a>
            </div>
            <div class="estimate_list">
                <div class="contents">
                    <h2>Reservation NO</h2>
                    <p style="color: #000;"><?php echo $res_no?></p>
                </div>
                <div class="contents">
                    <h2>Service</h2>
                    <p><?php echo $text?></p>
                </div>
                <!-- <div class="contents">
                    <h2>DATE</h2>
                    <p><?php echo date("Y.m.d", strtotime($date))?></p>
                </div>
                <div class="contents">
                    <h2>TIME</h2>
                    <p><?php echo date("H:i", strtotime($time))?></p>
                </div> -->
                <?php if($res_type=="ah") { ?>
                    <div class="contents">
                        <h2>Date of arrival in Vietnam</h2>
                        <p><?php echo $date?></p>
                    </div>
                    <div class="contents">
                        <h2>Arrival time in Vietnam</h2>
                        <p><?php echo $time?></p>
                    </div>
                    <div class="contents">
                        <h2>AIRPROT</h2>
                        <p><?php echo $airport?></p>
                    </div>
                    <div class="contents">
                        <h2>Flight number</h2>
                        <p><?php echo $flight_number?></p>
                    </div>
                    <div class="contents">
                        <h2>Arrival hotel</h2>
                        <p><?php echo $hotel?></p>
                    </div>
                    <div class="contents">
                        <h2>Hotel arrival time</h2>
                        <p><?php echo $arrive_time?></p>
                    </div>
                <?php } else if($res_type=="hh") { ?>
                    <div class="contents">
                        <h2>Date of service use</h2>
                        <p><?php echo $date?></p>
                    </div>
                    <div class="contents">
                        <h2>Time to send the cargo</h2>
                        <p><?php echo $time?></p>
                    </div>
                    <div class="contents">
                        <h2>Departure area</h2>
                        <p><?php echo $cf?></p>
                    </div>
                    <div class="contents">
                        <h2>Departure hotel</h2>
                        <p><?php echo $hf?></p>
                    </div>
                    <div class="contents">
                        <h2>Arrival area</h2>
                        <p><?php echo $ca?></p>
                    </div>
                    <div class="contents">
                        <h2>Hotel arrival time</h2>
                        <p><?php echo $arrive_time?></p>
                    </div>
                    <div class="contents">
                        <h2>Arrival hotel</h2>
                        <p><?php echo $ha?></p>
                    </div>
                <?php } else { ?>
                    <div class="contents">
                        <h2>Date of service use</h2>
                        <p><?php echo $date?></p>
                    </div>
                    <div class="contents">
                        <h2>Service usage time</h2>
                        <p><?php echo $time?></p>
                    </div>
                    <div class="contents">
                        <h2>Departure hotel</h2>
                        <p><?php echo $hotel?></p>
                    </div>
                    <div class="contents">
                        <h2>Arrival airport</h2>
                        <p><?php echo $airport?></p>
                    </div>
                    <div class="contents">
                        <h2>Airport arrival time</h2>
                        <p><?php echo $arrive_time?></p>
                    </div>
                <?php } ?>
                <div class="contents">
                    <h2>Cargo</h2>
                    <p><?php echo $bc?></p>
                </div>
                <div class="contents">
                    <h2>Extra cargo</h2>
                    <p><?php echo $ac?></p>
                </div>
                <?php
                if($cargo_add>0){
                ?>
                <div class="contents">
                    <h2>Cargo Add</h2>
                    <p><?php echo $cargo_add?></p>
                </div>
                <?php } ?>
                <div class="contents">
                    <h2>Reservation Name</h2>
                    <p><?php echo $name_eng?></p>
                </div>
                <div class="contents">
                    <h2>CP Number</h2>
                    <p><?php echo $cp?></p>
                </div>
                <form method="POST" action="update.php" target="ifrm">
                <input type="submit" id="sub" style="display:none">
                <input type="hidden" name="num" value="<?php echo $num?>">
                <div class="contents staff_bottom">
                    <h2>NOTE</h2>
                    <textarea name="memo" class="staff_area"><?php echo $memo?></textarea>
                </div>
                </form>
            </div>
            <div class="staff_btn">
                <div>
                    <h2>RESERVATION</h2>
                    <a href="javascript:void(0);" class="staff_reservation_btn">ADD<br>PHOTO</a>
                </div>
                <div>
                    <h2>MOVING</h2>
                    <a href="javascript:void(0);" class="staff_moving_btn">ADD<br>PHOTO</a>
                </div>
                <div>
                    <h2>ARRIVE</h2>
                    <a href="javascript:void(0);" class="staff_arrive_btn">ADD<br>PHOTO</a>
                </div>
            </div>
            <button class="staff_save_button" onclick="$('#sub').click();">SAVE</button>
            <div class="staff_reservation_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>RESERVATION PHOTO CHECK</h2>
                <div class="btn_div">
                    <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file[]" id="baggage" style="display:none" accept="image/*" multiple>
                    </form>
                    <button onclick="$('#baggage').click();">SELECT PHOTO</button>
                    <button onclick="all_del('baggage', '<?php echo $num?>')">ALL REMOVE</button>
                </div>
                <div class="upload_img" id="baggage_img">
                    <?php
                    $mSql="SELECT * FROM baggage WHERE `number`='$num'";
                    $mRes=mysqli_query($conn, $mSql);
                    $i=1;
                    while($mRow=mysqli_fetch_array($mRes)){
                        $file=$mRow['file'];
                    ?>
                    <div class="contents" id="baggage<?php echo $i?>">
                        <div class="delete" onclick="img_del('baggage', '<?php echo $num?>', '<?php echo $file?>', '<?php echo $i?>')">
                            <span></span>
                            <span></span>
                        </div>
                        <img src="../../img/baggage/<?php echo $file?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="staff_moving_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>MOVING PHOTO UPLOAD</h2>
                <div class="btn_div">
                    <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file[]" id="moving" style="display:none" accept="image/*" multiple>
                    </form>
                    <button onclick="$('#moving').click();">SELECT PHOTO</button>
                    <button onclick="all_del('moving', '<?php echo $num?>')">ALL REMOVE</button>
                </div>
                <div class="upload_img" id="moving_img">
                    <?php
                    $mSql="SELECT * FROM moving WHERE `number`='$num'";
                    $mRes=mysqli_query($conn, $mSql);
                    $i=1;
                    while($mRow=mysqli_fetch_array($mRes)){
                        $file=$mRow['file'];
                    ?>
                    <div class="contents" id="moving<?php echo $i?>">
                        <div class="delete" onclick="img_del('moving', '<?php echo $num?>', '<?php echo $file?>', '<?php echo $i?>')">
                            <span></span>
                            <span></span>
                        </div>
                        <img src="../img/moving/<?php echo $file?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="staff_arrive_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>ARRIVE PHOTO UPLOAD</h2>
                <div class="btn_div">
                    <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file[]" id="arrive" style="display:none" accept="image/*" multiple>
                    </form>
                    <button onclick="$('#arrive').click();">SELECT PHOTO</button>
                    <button onclick="all_del('arrive', '<?php echo $num?>')">ALL REMOVE</button>
                </div>
                <div class="upload_img" id="arrive_img">
                    <?php
                    $aSql="SELECT * FROM arrive WHERE `number`='$num'";
                    $aRes=mysqli_query($conn, $aSql);
                    $i=1;
                    while($aRow=mysqli_fetch_array($aRes)){
                        $file=$aRow['file'];
                    ?>
                    <div class="contents" id="arrive<?php echo $i?>">
                        <div class="delete" onclick="img_del('arrive', '<?php echo $num?>', '<?php echo $file?>', '<?php echo $i?>')">
                            <span></span>
                            <span></span>
                        </div>
                        <img src="../img/arrive/<?php echo $file?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="pro_bg"></div>
            <?php
            $pSql="SELECT * FROM reservation WHERE `date`='$date' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%' AND num < '$num' ORDER BY num DESC LIMIT 1";
            $pRes=mysqli_query($conn, $pSql);
            $pRow=mysqli_fetch_array($pRes);
            $prev=$pRow['num'];
            
            $nSql="SELECT * FROM reservation WHERE `date`='$date' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%' AND num > '$num' ORDER BY num ASC LIMIT 1";
            $nRes=mysqli_query($conn, $nSql);
            $nRow=mysqli_fetch_array($nRes);
            $next=$nRow['num'];
            ?>
            <div class="staff_bottom">
                <a href="work.php?num=<?php echo $prev?>" style="<?php echo ($prev=="") ? "visibility:hidden" : ""?>">
                    <h2>BEFORE</h2>
                    <img src="../img/red-p-arrow.png">
                </a>
                <a href="../staff/check.php?today=<?php echo $date?>">LIST</a>
                <a href="work.php?num=<?php echo $next?>" style="<?php echo ($next=="") ? "visibility:hidden" : ""?>">
                    <img src="../img/red-n-arrow.png">
                    <h2>NEXT</h2>
                </a>
            </div>
        </div>
    </section>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
<script>
    $("input[id='baggage']").on("change", function(){
        var formData = new FormData();
        var file = this.files;
        formData.append("num", "<?php echo $num?>");
        formData.append("staff", "admin");
        
        $.each(file, function(key, value){
        //key는 다른 지정이 없다면 0부터 시작 할것이고, value는 파일 관련 정보입니다.
            formData.append(key, value);
        });

        $.ajax({
            async : true,
            method : "POST",
            url : 'baggage_update.php',
            processData : false,
            data : formData,
            contentType : false,
            dataType:"JSON",
            success : function(data){
                $("#baggage").val('');
                // $(".upload_img").empty();
                $("#baggage_img").append(data);
            }
        });
    });

    $("input[id='moving']").on("change", function(){
        var formData = new FormData();
        var file = this.files;
        formData.append("num", "<?php echo $num?>");
        formData.append("staff", "<?php echo $staff_name?>");
        
        $.each(file, function(key, value){
        //key는 다른 지정이 없다면 0부터 시작 할것이고, value는 파일 관련 정보입니다.
            formData.append(key, value);
        });

        $.ajax({
            async : true,
            method : "POST",
            url : 'moving_update.php',
            processData : false,
            data : formData,
            contentType : false,
            dataType:"JSON",
            success : function(data){
                $("#moving").val('');
                // $(".upload_img").empty();
                $("#moving_img").append(data);
            }
        });
    });
    
    $("input[id='arrive']").on("change", function(){
        var formData = new FormData();
        var file = this.files;
        formData.append("num", "<?php echo $num?>");
        formData.append("staff", "<?php echo $staff_name?>");
        
        $.each(file, function(key, value){
        //key는 다른 지정이 없다면 0부터 시작 할것이고, value는 파일 관련 정보입니다.
            formData.append(key, value);
        });

        $.ajax({
            async : true,
            method : "POST",
            url : 'arrive_update.php',
            processData : false,
            data : formData,
            contentType : false,
            dataType:"JSON",
            success : function(data){
                $("#arrive").val('');
                // $(".upload_img").empty();
                $("#arrive_img").append(data);
            }
        });
    });
</script>
<script>
    function img_del(t, n, f, i){
        if(confirm("Are you sure you want to delete it?")){
            $.ajax({
                url:"file_del.php",
                type:"POST",
                data:{
                    type:t,
                    number:n,
                    file:f,
                },
                dataType:"JSON",
                success:function(data){
                    if(data=="true"){
                        $("#"+t+i).remove();
                    }
                }
            });
        }
    }

    function all_del(t, n){
        if(confirm("Are you sure you want to delete it?")){
            $.ajax({
                url:"all_del.php",
                type:"POST",
                data:{
                    type:t,
                    num:n,
                },
                success:function(){
                    $("#"+t+"_img").empty();
                }
            })
        }
    }
</script>
</html>

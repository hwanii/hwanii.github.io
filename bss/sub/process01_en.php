<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php';?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../header_en.php';?>
    <section class="reservation">
        <?php
        $num=$_GET['num'];

        $sql="SELECT * FROM reservation WHERE num='$num'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $res_no=$row['res_no'];
        $res_type=$row['res_type'];

        $airport=$row['airport'];
        $bc=$row['basic'];
        $ac=$row['add'];
        $pt=$row['payment_time'];
        $payment=$row['payment'];
        $cargo_add=$row['cargo_add']*4000;

        $air_box=$row['air_box'];
        $hotel_price=$row['hotel_price'];
        $add_price=$row['add_price'];

        $w="";
        if($res_type=="ah"){
            $text="AIRPORT&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
            $w=" WHERE `type`='$airport'";
            $local="reservation01_en_revision.php?num={$num}";
        } else if($res_type=="hh"){
            $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
            $w=" WHERE `type`='hotel'";
            $local="reservation02_en_revision.php?num={$num}";
        } else if($res_type=="ha"){
            $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;AIRPORT";
            $w=" WHERE `type`='$airport'";
            $local="reservation03_en_revision.php?num={$num}";
        }

        $aSql="SELECT * FROM rating";
        $aRes=mysqli_query($conn, $aSql);
        $aRow=mysqli_fetch_array($aRes);
        $add=$ac * $aRow['add_baggage'];
    
        $total=number_format($add+$air_box+$hotel_price+$add_price+$cargo_add);
        ?>
        <div class="inner">
            <div class="main_title">
                <h2>SEARCH</h2>
            </div>
            <div class="sub_title">
                <p>View progress</p>
            </div>
            <div class="process_information">
                <p><?php echo $res_no?></p>
                <p><?php echo $text?></p>
                <p><?php echo $total ?> won</p>
            </div>
            <div class="process_contents">
                <ul class="top_tabel">
                    <li>Step guide</li>
                    <li>Status Guide</li>
                    <li>Practice</li>
                </ul>
                <ul class="contents">
                    <li>
                        <p><?php echo ($payment=="confirm") ? "Active reservation" : "Reservation waiting for payment."?></p>
                        <!-- <p><?php echo ($payment=="confirm") ? date("Y-m-d", strtotime($pt)) : ""?></p> -->
                    </li>
                    <li>
                        <h2 class="complete"><?php echo ($payment=="confirm") ? "Completed" : "Waiting"?></h2>
                    </li>
                    <li></li>
                </ul>
                <?php
                $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                $bcRes=mysqli_query($conn, $bcSql);
                $bcRows=mysqli_num_rows($bcRes);
                $bcRow=mysqli_fetch_array($bcRes);
                $bcDate=$bcRow['upload_time'];
                ?>
                <ul class="contents">
                    <li>
                        <p>Drop off your cargo and upload a photo</p>
                        <p id="date"><?php echo ($bcRows>0) ? date("Y-m-d", strtotime($bcDate)) : ""?></p>
                    </li>
                    <li>
                        <h2 class="wait" id="photo"><?php echo ($bcRows>0) ? "Completed" : "Waiting"?></h2>
                    </li>
                    <li>
                        <span class="upload_btn" style="display: flex; justify-content: center; align-items: center; line-height: normal; height: 40px;">Upload/Change<br>Photos</span>
                    </li>
                </ul>
                <?php
                $mcSql="SELECT * FROM moving WHERE `number`='$num' ORDER BY num DESC";
                $mcRes=mysqli_query($conn, $mcSql);
                $mcRows=mysqli_num_rows($mcRes);
                $mcRow=mysqli_fetch_array($mcRes);
                $mcDate=$mcRow['upload_time'];
                ?>
                <ul class="contents">
                    <li>
                        <p>Photo of the delivery team moving after pickup</p>
                        <p><?php echo ($mcRows>0) ? date("Y-m-d", strtotime($mcDate)) : ""?></p>
                    </li>
                    <li>
                        <h2 class="wait"><?php echo ($mcRows>0) ? "Completed" : "Waiting"?></h2>
                    </li>
                    <li>
                        <span class="collect_btn">View pictures</span>
                    </li>
                </ul>
                <?php
                $acSql="SELECT * FROM arrive WHERE `number`='$num' ORDER BY num DESC";
                $acRes=mysqli_query($conn, $acSql);
                $acRows=mysqli_num_rows($acRes);
                $acRow=mysqli_fetch_array($acRes);
                $acDate=$acRow['upload_time'];
                ?>
                <ul class="contents">
                    <li>
                        <p>Photo of completed delivery</p>
                        <p><?php echo ($acRows>0) ? date("Y-m-d", strtotime($acDate)) : ""?></p>
                    </li>
                    <li>
                        <h2 class="wait"><?php echo ($acRows>0) ? "Completed" : "Waiting"?></h2>
                    </li>
                    <li>
                        <span class="delivery_btn">View pictures</span>
                    </li>
                </ul>
            </div>
            <h2 class="process_des" style="font-size: 14px; text-align: center; margin: 40px auto 0;">If you select or delete a photo in upload/change photo,<br>it will be applied immediately.</h2>
            <div class="process_btn">
                <form method="POST" action="complete_en.php" onsubmit="return chk_complete()" target="ifrm">
                <input type="hidden" name="num" value="<?php echo $num?>">
                <!-- <button type="submit">Complete Processing</button> -->
                </form>
                <button onclick="location.href='<?php echo $local?>';" style="background-color: #333;">Edit Reservation</button>
                <a href="javascript:void(0);" class="refund_btn" style="background-color: #c1272d;">Cancellation and refund application</a>
                <a href="javascript:void(0);" class="gogogo">Customer Center Damage/Accident Reporting</a>
                <div class="emem_btn">
                    <h2>Customer Center Damage/Accident Reporting</h2>
                    <button>CLOSE</button>
                    <a href="../sub/emergency01_en.php?num=<?php echo $num?>">Go to registration</a>
                </div>
                <div class="emem_bg"></div>
            </div>
            <div class="upload_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>Posting pictures</h2>
                <span>* Please take a photo showing the wheels and handle so that you can compare damage.</span>
                <div class="btn_div">
                    <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="file[]" id="file" style="display:none" accept="image/*" multiple>
                    </form>
                    <button onclick="$('#file').click();">Select a picture</button>
                    <button onclick="all_del('<?php echo $num?>')">Delete All</button>
                </div>
                <div class="upload_img">
                    <?php
                    $fSql="SELECT * FROM baggage WHERE `number`='$num'";
                    $fRes=mysqli_query($conn, $fSql);
                    $i=1;
                    while($fRow=mysqli_fetch_array($fRes)){
                        $file=$fRow['file'];
                    ?>
                    <div class="contents" id="baggage<?php echo $i?>">
                        <div class="delete" onclick="img_del('<?php echo $num?>', '<?php echo $file?>', '<?php echo $i?>')">
                            <span></span>
                            <span></span>
                        </div>
                        <img src="../img/baggage/<?php echo $file?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="collect_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>pickup confirmation</h2>
                <div class="swiper-container collect_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $mSql="SELECT * FROM moving WHERE `number`='$num'";
                        $mRes=mysqli_query($conn, $mSql);
                        while($mRow=mysqli_fetch_array($mRes)){
                            $mThumb=$mRow['file'];
                        ?>
                        <div class="swiper-slide"><img src="../img/moving/<?php echo $mThumb?>"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="pro-prev prev01">
                    <span></span>
                    <span></span>
                </div>
                <div class="pro-next next01">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="delivery_btn_pop">
                <div class="close">
                    <span></span>
                    <span></span>
                </div>
                <h2>Delivery confirmation</h2>
                <div class="swiper-container delivery_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $aSql="SELECT * FROM arrive WHERE `number`='$num'";
                        $aRes=mysqli_query($conn, $aSql);
                        while($aRow=mysqli_fetch_array($aRes)){
                            $aThumb=$aRow['file'];
                        ?>
                        <div class="swiper-slide"><img src="../img/arrive/<?php echo $aThumb?>"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="pro-prev prev02">
                    <span></span>
                    <span></span>
                </div>
                <div class="pro-next next02">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="refund_pop">
                <h2>Cancellation and refund will be processed after confirmation by administrator.</h2>
                <div class="btn_box">
                    <button>CLOSE</button>
                    <button onclick="location.href='cancel.php?num=<?php echo $num?>'">CHECK</button>
                </div>
            </div>
            <div class="pro_bg"></div>
        </div>
    </section>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

<script>
    $(function(){
        $(".gogogo").click(function(){
            $(".emem_btn").show();
            $(".emem_bg").show();
        });

        $(".emem_btn button").click(function(){
            $(".emem_btn").hide();
            $(".emem_bg").hide();
        });

        $(".emem_bg").click(function(){
            $(".emem_btn").hide();
            $(".emem_bg").hide();
        });

        $(".refund_btn").click(function(){
            $(".refund_pop").show();
            $(".pro_bg").show();
        });

        $(".refund_pop .btn_box button:first-child").click(function(){
            $(".refund_pop").hide();
            $(".pro_bg").hide();
        });

        $(".pro_bg").click(function(){
            $(this).hide();
            $(".refund_pop").hide();
        });
    })
</script>

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
            url : 'file_update.php',
            processData : false,
            data : formData,
            contentType : false,
            dataType:"JSON",
            success : function(data){
                $("#file").val('');
                // $(".upload_img").empty();
                $(".upload_img").append(data[0]);
                $("#date").text(data[1]);
                $("#photo").text("완료");
            }
        });
    });
</script>
<script>
    function img_del(n, f, i){
        if(confirm("Are you sure you want to delete it?")){
            $.ajax({
                url:"file_del.php",
                type:"POST",
                data:{
                    number:n,
                    file:f,
                },
                dataType:"JSON",
                success:function(data){
                    if(data=="true"){
                        $("#baggage"+i).remove();
                    }
                }
            });
        }
    }

    function all_del(n){
        if(confirm("Are you sure you want to delete it?")){
            $.ajax({
                url:"all_del.php",
                type:"POST",
                data:{
                    num:n,
                },
                success:function(){
                    $(".upload_img").empty();
                }
            })
        }
    }

    function chk_complete(){
        if(confirm("Do you want to complete it?")){
            return true;
        } else {
            return false;
        }
    }
</script>
</html>

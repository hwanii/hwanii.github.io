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
                <h2>SEARCH</h2>
            </div>
            <div class="sub_title">
                <p>Payment Complete Booking Inquiry</p>
            </div>
            <div class="reservation_contents" style="max-width: 280px;">
            <form method="POST" action="search02_en.php">
                <div class="input_contents">
                    <div class="top">
                        <h2>Reservation Name</h2>
                        <p>Please enter your reservation name</p>
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

                    $hf=$row['hotel_from'];
                    $ha=$row['hotel_arrive'];

                    $air_box=$row['air_box'];
                    $hotel_price=$row['hotel_price'];
                    $add_price=$row['add_price'];

                    $stat=$row['stat'];

                    $w="";
                    if($res_type=="ah"){
                        $text="AIR PORT&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
                        $tt=$air[0]."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$hotel;
                        $w=" WHERE `type`='$airport'";
                    } else if($res_type=="hh"){
                        $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;HOTEL";
                        $tt=$hf."&nbsp;&nbsp;&#62;&nbsp;&nbsp;".$ha;
                        $w=" WHERE `type`='hotel'";
                    } else if($res_type=="ha"){
                        $text="HOTEL&nbsp;&nbsp;&#62;&nbsp;&nbsp;AIR PORT";
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

                    $total=number_format($hotel_price+$add_price+$add+$air_box);
                    
                    $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                    $bcRes=mysqli_query($conn, $bcSql);
                    $bcRows=mysqli_num_rows($bcRes);
                ?>
                <div class="contents">
                    <p><?php echo $date?></p>
                    <p><?php echo $tt?></p>
                    <p><?php echo $text?></p>
                    <p><?php echo $total?> won</p>
                    <?php if($stat=="complete") { ?>
                    <p style="font-weight: 700;">Complete</p>
                    <?php } else if($stat=="waiting" || $stat=="proceeding") { ?>
                    <p style="font-weight: 700;">Payment completed, <?php echo ($bcRows>0) ? "Photo reception" : "Photo waiting"?></p>
                    <?php } else if($stat=="cancellation request") { ?>
                    <p style="font-weight: 700;">Cancellation and refund requests</p>
                    <?php } else if($stat=="cancel") { ?>
                    <p style="font-weight: 700;">Cancellation and refund completed</p>
                    <?php } ?>
                    <div class="search_result_btn one_btn" style="<?php echo ($stat=="cancellation request" || $stat=="cancel") ? "display:none" : ""?>">
                        <a href="process01_en.php?num=<?php echo $num?>">View progress</a>
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

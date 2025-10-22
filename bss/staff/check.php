<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include 'staff.php';
    $today=($_GET['today']) ? $_GET['today'] :date("Y-m-d");
    $yesterday=date("Y-m-d", strtotime("$today -1 days"));
    $tomorrow=date("Y-m-d", strtotime("$today +1 days"));

    $type=($_GET['type']) ? $_GET['type'] : "";
    $sort=($_GET['sort']) ? $_GET['sort'] : "";

    $s="";
    if($type=="service"){
        if($sort=="old"){
            $s=" ORDER BY res_type ASC";
        } else if($sort=="new"){
            $s=" ORDER BY res_type DESC";
        }        
    } else if($type=="time") {
        if($sort=="old"){
            $s=" ORDER BY arrive_time ASC";
        } else if($sort=="new"){
            $s=" ORDER BY arrive_time DESC";
        }        
    }
    // SELECT airport AS arrive FROM `reservation` WHERE airport!='' UNION SELECT hotel AS arrive FROM `reservation` WHERE hotel!='' UNION SELECT hotel_arrive AS arrive FROM `reservation` WHERE hotel_arrive!='' ORDER BY arrive DESC;
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
            <div class="staff_date">
                <a href="check.php?today=<?php echo $yesterday?>">
                    <div>
                        <h2>YESTERDAY</h2>
                        <p><?php echo $yesterday?></p>
                    </div>
                    <img src="../img/red-p-arrow.png">
                </a>
                <div>
                    <h2>TODAY</h2>
                    <p style="font-weight: 700; font-size: 14px;"><?php echo $today?></p>
                </div>
                <a href="check.php?today=<?php echo $tomorrow?>">
                    <img src="../img/red-n-arrow.png">
                    <div>
                        <h2>TOMORROW</h2>
                        <p><?php echo $tomorrow?></p>
                    </div>
                </a>
            </div>
            <div class="staff_sort">
                <h2>SORT</h2>
                <div class="right">
                    <a href="check.php?today=<?php echo $today?>&type=service&sort=old">
                        <p>SERVICE</p>
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <a href="check.php?today=<?php echo $today?>&type=time&sort=old">
                        <p>TIME</p>
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <a href="check.php?today=<?php echo $today?>&type=service&sort=new">
                        <p>SERVICE</p>
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <a href="check.php?today=<?php echo $today?>&type=time&sort=new">
                        <p>TIME</p>
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <?php
            $ahSql="SELECT * FROM reservation WHERE `date`='$today' AND res_type='ah' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%'";
            $ahRes=mysqli_query($conn, $ahSql);
            $ahRows=mysqli_num_rows($ahRes);

            $hhSql="SELECT * FROM reservation WHERE `date`='$today' AND res_type='hh' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%'";
            $hhRes=mysqli_query($conn, $hhSql);
            $hhRows=mysqli_num_rows($hhRes);

            $haSql="SELECT * FROM reservation WHERE `date`='$today' AND res_type='ha' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%'";
            $haRes=mysqli_query($conn, $haSql);
            $haRows=mysqli_num_rows($haRes);
            ?>
            <div class="service_num">
                <h2>SERVICE</h2>
                <div class="right">
                    <div>
                        <h3>ah</h3>
                        <p>: <?php echo $ahRows?></p>
                    </div>
                    <div>
                        <h3>hh</h3>
                        <p>: <?php echo $hhRows?></p>
                    </div>
                    <div>
                        <h3>ha</h3>
                        <p>: <?php echo $haRows?></p>
                    </div>
                </div>
            </div>
            <ul class="status_des">
                <li>
                    <span></span>
                    <h2>: COMPLETED</h2>
                </li>
                <li>
                    <span></span>
                    <h2>: MOVING</h2>
                </li>
                <li>
                    <span></span>
                    <h2>: CUSTOMER IMAGE UPDATE</h2>
                </li>
                <li>
                    <span></span>
                    <h2>: When a reservation is modified, the color of the number box in the upper left corner changes.</h2>
                </li>
            </ul>
            <div class="staff_list">
                <!-- <ul class="top_table">
                    <li>RESERVATION LIST</li>
                    <li>STATUS</li>
                    <li>DETAIL</li>
                </ul> -->
                <!-- <ul class="top_contents">
                    <li>RESERVATION LIST</li>
                    <li>NAME</li>
                    <li>SERVICE</li>
                    <li>DESTINATION NAME</li>
                    <li>DESTINATION TIME</li>
                    <li>CARGO</li>
                </ul> -->
                <?php
                $no=1;
                $sql="SELECT * FROM reservation WHERE `date`='$today' AND cargo_add='0' AND stat!='stay' AND stat!='' AND stat NOT LIKE '%cancel%'{$s}";
                // echo $sql;
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $res_no=$row['res_no'];
                    $airport=$row['airport'];
                    $num=$row['num'];

                    $cargo_add=0;
                    $aSql="SELECT * FROM reservation WHERE res_no LIKE '%$res_no%'";
                    $aRes=mysqli_query($conn, $aSql);
                    while($aRow=mysqli_fetch_array($aRes)){
                        $cargo_add=$cargo_add+$aRow['cargo_add'];
                    }

                    $update_time=$row['update_time'];
                    $stat=$row['stat'];

                    $bcSql="SELECT * FROM baggage WHERE `number`='$num' ORDER BY num DESC";
                    $bcRes=mysqli_query($conn, $bcSql);
                    $bcRows=mysqli_num_rows($bcRes);
                    
                    $mcSql="SELECT * FROM moving WHERE `number`='$num' ORDER BY num DESC";
                    $mcRes=mysqli_query($conn, $mcSql);
                    $mcRows=mysqli_num_rows($mcRes);

                    $acSql="SELECT * FROM arrive WHERE `number`='$num' ORDER BY num DESC";
                    $acRes=mysqli_query($conn, $acSql);
                    $acRows=mysqli_num_rows($acRes);

                    // if($bcRows==0){
                    //     $stat="STAY";
                    // } else {
                    //     $stat="READY";
                    // }
                    
                    // if($mcRows>0){
                    //     $stat="MOVING";
                    // }

                    // if($acRows>0){
                    //     $stat="ARRIVE";
                    // }
                    $style="";
                    if($stat=="complete"){
                        $style="complete";
                    } else {
                        if($bcRows>0 && $mcRows>0){
                            $style="moving";
                        } else if($bcRows>0 && $mcRows==0) {
                            $style="customer";
                        }

                        $up="";
                        if($update_time!="0000-00-00 00:00:00"){
                            $up=" res_up";
                        }

                        if($cargo_add>0){
                            $up=" res_up";
                        }
                    }
                ?>
                <!-- <ul class="staff_table">
                    <li><?php echo $res_no?></li>
                    <li class="ready"><?php echo $stat?></li>
                    <li><a href="../staff/work.php?num=<?php echo $num?>">VIEW</a></li>
                </ul> -->
                <div class="contents">
                    <!--
                        complete 일 때 ul 에 class="complete",
                        moving 일 때 ul 에 class="moving",
                        고객이 사진 업데이트 후 ul 에 class="customer",
                    -->
                    <ul class="<?php echo $style?>">
                        <!--
                            예약이 수정 되었을 때
                            <li class="num"></li> 요기에
                            res_up 추가하시면 됩니당.
                        -->
                        <li class="num<?php echo $up?>"><?php echo $no++;?></li>
                        <li><b>RESERVATION</b> : <?php echo $res_no?></li>
                        <li><b>NAME</b> : <?php echo $row['name_eng']?></li>
                        <li><b>SERVICE</b> : <?php echo $row['res_type'];?></li>
                        <li><b>DEPARTURE NAME</b> : <?php echo ($row['res_type']=="ah") ? $airport : (($row['res_type']=="hh") ? $row['hotel_from'] : $row['hotel'])?></li>
                        <li><b>ARRIVE NAME</b> : <?php echo ($row['res_type']=="ah") ? $row['hotel'] : (($row['res_type']=="hh") ? $row['hotel_arrive'] : $airport)?></li>
                        <li><b>ARRIVE TIME</b> : <?php echo $row['arrive_time']?></li>
                        <li><b>CARGO</b> : <?php echo $row['basic']+$row['add']+$cargo_add?></li>
                    </ul>
                    <a href="../staff/work.php?num=<?php echo $num?>">VIEW</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>
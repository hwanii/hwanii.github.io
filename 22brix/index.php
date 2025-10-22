<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="font/font.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script type="text/javascript"></script>
</head>

<body>
    <?php include 'header.php';?>
    <!-- <section class="graph_tio">
        <section class="swiper-container main_graph">
            <div class="swiper-wrapper">
                <div class="swiper-slide gray"></div>
                <div class="swiper-slide grad"></div>
            </div>
        </section>
    </section> -->
    <section class="graph graph01">
        <div class="flip">
            <div class="card">
                <p class="front"><b>광고수익률은 1000%</b> 달성했는데<br>매출은 그대로 인가요?</p>
                <p class="back"><b>매출도 함께 상승해야</b> 브랜드가 성장합니다.</p>
            </div>
        </div>
        <!-- <p class="text01"><b>광고수익률은 1000%</b> 달성했는데<br>매출은 그대로 인가요?</p> -->
        <div class="arrow_inner">
            <img src="img/main-left01.png" alt="" class="arrow_left">
            <img src="img/main-down01.png" alt="" class="arrow_down">
        </div>
        <div class="graph_inner">
            <img src="img/g01.png" alt="" class="g01">
            <img src="img/g02.png" alt="" class="g02">
        </div>
        <!-- <div class="graph01_01">
            <div class="graph01_01_detail">
                <div class="graph_in in01">
                    <div></div>
                    <div></div>
                </div>
                <div class="graph_in in02">
                    <div></div>
                    <div></div>
                </div>
                <div class="graph_in in03">
                    <div></div>
                    <div></div>
                </div>
                <div class="graph_in in04">
                    <div></div>
                    <div></div>
                </div>
                <div class="graph_in in05">
                    <div></div>
                    <div></div>
                </div>
                <div class="graph_in in06">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="graph_bottom">
                <div>
                    <p></p>
                    <span>광고수익률</span>
                </div>
                <div>
                    <p></p>
                    <span>매출</span>
                </div>
            </div>
        </div> -->
    </section>
    <!-- 메인 그래프 8차 수정 완료(2023.03.28) -->
    <section class="about">
        <?php
        $sql="SELECT * FROM about";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $main_text=$row['main_text'];
        $text2=$row['text2'];
        $cnt1_eng=$row['cnt1_eng'];
        $cnt1=$row['cnt1'];
        $cnt2_eng=$row['cnt2_eng'];
        $cnt2=$row['cnt2'];
        $cnt3_eng=$row['cnt3_eng'];
        $cnt3=$row['cnt3'];
        $cnt4_eng=$row['cnt4_eng'];
        $cnt4=$row['cnt4'];
        ?>
        <h6>About</h6>
        <div class="detail_title">
            <h2>
                <?php echo $main_text?>
            </h2>
        </div>
        <div class="about_section">
            <div class="about_circle">
                <div>
                    <div>
                        <p><?php echo $cnt1_eng?></p>
                        <ul>
                            <!-- <li class="count-num" data-count="210">0</li> -->
                            <li id="counter1">0</li>
                            <li>%</li>
                        </ul>
                        <!-- <h2 class="count-num" data-count="210">0<span>%</span></h2> -->
                    </div>
                    <span>광고 대행 후 평균 매출 증가율</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt2_eng?></p>
                        <!-- <h2 class="count-num" data-count="100000">0</h2> -->
                        <h2 id="counter2">0</h2>
                    </div>
                    <span>교육 수강생 수<br>(재생수 포함)</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt3_eng?></p>
                        <!-- <h2 class="count-num" data-count="10000">0</h2> -->
                        <h2 id="counter3">0</h2>
                    </div>
                    <span>컨설팅을 받은 사업자수</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt4_eng?></p>
                        <ul>
                            <!-- <li class="count-num" data-count="525">0</li> -->
                            <li id="counter4">0</li>
                            <li>%</li>
                        </ul>
                        <!-- <h2 class="count-num" data-count="525">0<span>%</span></h2> -->
                    </div>
                    <span>라이브 방송 후 평균 판매량 증가율</span>
                </div>
            </div>
            <?php
            $fSql="SELECT * FROM information";
            $fRes=mysqli_query($conn, $fSql);
            $fRow=mysqli_fetch_array($fRes);
            $file=$fRow['file'];
            $tel=$fRow['tel'];
            $email=$fRow['email'];
            $addr=$fRow['addr'];
            $detail=$fRow['detail_addr'];
            ?>
            <div class="com_btn">
                <a href="./file/<?php echo $file?>" download>회사소개서</a>
                <a href="sub/inquire.php ">대행 문의</a>
            </div>
        </div>
    </section>
    
    <section class="man">
        <h6>Man Power</h6>
        <?php
        $mSql="SELECT * FROM icon";
        $mRes=mysqli_query($conn, $mSql);
        $mRow=mysqli_fetch_array($mRes);
        $main=$mRow['main'];
        $icon1=$mRow['icon1'];
        $icon1_tit=$mRow['icon1_tit'];
        $icon2=$mRow['icon2'];
        $icon2_tit=$mRow['icon2_tit'];
        $icon3=$mRow['icon3'];
        $icon3_tit=$mRow['icon3_tit'];
        $icon4=$mRow['icon4'];
        $icon4_tit=$mRow['icon4_tit'];
        $icon5=$mRow['icon5'];
        $icon5_tit=$mRow['icon5_tit'];
        $icon6=$mRow['icon6'];
        $icon6_tit=$mRow['icon6_tit'];
        ?>
        <div class="detail_title">
            <h2>
                <?php echo $main?>
            </h2>
        </div>
        <div class="man_circle">
            <div><img src="img/man-logo01.png" alt=""></div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon1?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon1_tit?></h2>
            </div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon2?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon2_tit?></h2>
            </div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon3?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon3_tit?></h2>
            </div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon4?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon4_tit?></h2>
            </div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon5?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon5_tit?></h2>
            </div>
            <div>
                <p style="background: url('img/icon/<?php echo $icon6?>') no-repeat center/cover;"></p>
                <h2><?php echo $icon6_tit?></h2>
            </div>
        </div>
    </section>
    <?php
    $aSql="SELECT * FROM map";
    $aRes=mysqli_query($conn, $aSql);
    $aRow=mysqli_fetch_array($aRes);
    $map=$aRow['map'];
    ?>
    <section class="map">
        <h6>Location</h6>
        <div id="map">
            <?php echo $map?>
        </div>
        <div class="contents">
            <div class="left">
                <div>
                    <h2>대표전화</h2>
                    <p><?php echo $tel?></p>
                </div>
                <div>
                    <h2>도로명 주소</h2>
                    <p><?php echo $addr.", ".$detail?></p>
                </div>
                <div>
                    <h2>이메일</h2>
                    <p><?php echo $email?></p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
<script>
    $(window).scroll(function(){
    var paraHeight = $(window).scrollTop();
    
    if (paraHeight > 500) {
        function numberCounter(target_frame, target_number) {
            this.count = 0; this.diff = 0;
            this.target_count = parseInt(target_number);
            this.target_frame = document.getElementById(target_frame);
            this.timer = null;
            this.counter();
        };

        numberCounter.prototype.counter = function() {
            var self = this;
            this.diff = this.target_count - this.count;
        
            if(this.diff > 0) {
                self.count += Math.ceil(this.diff / 5);
            }
        
            this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        
            if(this.count < this.target_count) {
                this.timer = setTimeout(function() { self.counter(); }, 20);
            } else {
                clearTimeout(this.timer);
            }
        };
        
        new numberCounter("counter4", <?php echo $cnt4?>);
        new numberCounter("counter3", <?php echo $cnt3?>);
        new numberCounter("counter2", <?php echo $cnt2?>);
        new numberCounter("counter1", <?php echo $cnt1?>);
    };
    });
</script>
</html>

<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php' ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'?>
    <section class="performance">
        <div class="inner">
            <?php
            $aSql="SELECT * FROM about";
            $aRes=mysqli_query($conn, $aSql);
            $aRow=mysqli_fetch_array($aRes);
            $text1=$aRow['text1'];
            $text2=$aRow['text2'];
            $cnt1_eng=$aRow['cnt1_eng'];
            $cnt1=$aRow['cnt1'];
            $cnt2_eng=$aRow['cnt2_eng'];
            $cnt2=$aRow['cnt2'];
            $cnt3_eng=$aRow['cnt3_eng'];
            $cnt3=$aRow['cnt3'];
            $cnt4_eng=$aRow['cnt4_eng'];
            $cnt4=$aRow['cnt4'];
            ?>
            <div class="title">
                <ul class="performance_cate01">
                    <li class="on"><a href="../sub/about.php">About</a></li>
                    <li><a href="../sub/man.php">Man Power</a></li>
                    <li><a href="../sub/map.php">Location</a></li>
                </ul>
            </div>
            <div class="detail_title">
                <h2>
                    <?php echo $text1?>
                </h2>
            </div>
            <div class="col_contents">
                <?php
                $sql="SELECT * FROM staff ORDER BY num ASC";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                ?>
                <a href="javascript:void(0)" style="border: none;">
                    <div class="left">
                        <h2><?php echo $row['name']?></h2>
                        <p>
                            <?php echo $row['eng_name']?><br>
                            <b><?php echo $row['position']?></b>
                        </p>
                    </div>
                    <img src="../img/staff/<?php echo $row['thumb']?>" alt="" class="center">
                    <p class="right">
                        <?php echo $row['contents']?>
                    </p>
                </a>
                <?php } ?>
            </div>
            <h6>REAL NUMBER</h6>
            <div class="detail_title">
                <h2>
                    <?php echo $text2?>
                </h2>
            </div>
            <div class="about_circle">
                <div>
                    <div>
                        <p><?php echo $cnt1_eng?></p>
                        <h2><?php echo number_format($cnt1)?><span>%</span></h2>
                    </div>
                    <span>광고 대행 후 평균 매출 증가율</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt2_eng?></p>
                        <h2><?php echo number_format($cnt2)?></h2>
                    </div>
                    <span>교육 수강생 수<br>(재생수 포함)</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt3_eng?></p>
                        <h2><?php echo number_format($cnt3)?></h2>
                    </div>
                    <span>컨설팅을 받은 사업자수</span>
                </div>
                <div>
                    <div>
                        <p><?php echo $cnt4_eng?></p>
                        <h2><?php echo number_format($cnt4)?><span>%</span></h2>
                    </div>
                    <span>라이브 방송 후 평균 판매량 증가율</span>
                </div>
            </div>
        </div>
    </section>
    <?php include '../footer.php'?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    $(window).scroll(function(){
    var paraHeight = $(window).scrollTop();
    var contentTop = $(".s-d .inner .s-d-top").innerHeight();
    var contentBottom = $(".s-d .s-d-mid .inner > div").innerHeight();
    var contentInnerHeight = contentTop + contentBottom;
    if (paraHeight > 600) {
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

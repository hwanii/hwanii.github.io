<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include 'meta.php'?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <section class="swiper-container slide_main">
        <div class="swiper-wrapper">
            <?php
            $sql="SELECT * FROM slide ORDER BY `number` ASC";
            $res=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($res)){
                $back=$row['background'];
                $link=$row['link'];
                $contents=$row['contents'];
            ?>
            <div class="swiper-slide main_bg01" style="background: url('admin/img/back/<?php echo $back?>') no-repeat center/cover;">
                <div class="bg"></div>
                <div class="txt_box">
                    <img src="img/slide-text01.png" alt="">
                    <h2>
                        <?php echo $contents?>
                    </h2>
                    <a href="<?php echo $link?>">
                        <p>자세히 알아보기</p>
                        <img src="img/link-arrow.png" alt="">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <section class="cap_contents">
        <div class="left">
            <img src="img/human01.png" alt="">
        </div>
        <div class="right">
            <h2>ILPA<br>국제리샤필라테스협회는</h2>
            <p>
                무분별하게 증가하며 정체성을 잃어버린 필라테스<br>
                본연의 내용을 원형 그대로 전달하고, 현대의 해부학적 지식을 더해<br>
                <b>전문적인 필라테스 전문가를 양성하는데 목적을 두고 있습니다.</b>
            </p>
            <a href="http://lishapilatesacademy.com/sub/ilpa.php">
                <p>상세히 알아보기</p>
                <img src="img/link-arrow.png" alt="">
            </a>
        </div>
    </section>
    <section class="teacher">
        <div class="inner">
            <h2 data-aos="fade-up">본사 교육강사</h2>
            <div class="slide_inner" data-aos="fade-up">
                <div class="swiper-container head_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $iSql="SELECT * FROM teacher WHERE `local`='본사'";
                        $iRes=mysqli_query($conn, $iSql);
                        $iRows=mysqli_num_rows($iRes);
                        for($i=0;$i<ceil($iRows/3);$i++){
                            $limit=$i*3;
                        ?>
                        <div class="swiper-slide">
                            <?php
                            $sql="SELECT * FROM teacher WHERE `local`='본사' ORDER BY num ASC LIMIT $limit, 3";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                                $position=$row['position'];
                                $name=$row['name'];
                                $thumb=$row['thumb'];
                                $num=$row['num'];
                            ?>
                            <a href="sub/teacher_detail.php?num=<?php echo $num?>">
                                <img src="img/teacher/<?php echo $thumb?>" alt="">
                                <p><?php echo $position?></p>
                                <h3><?php echo $name?></h3>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-btn-prev prev01"><img src="img/slide-prev-arrow.png" alt=""></div>
                <div class="swiper-btn-next next01"><img src="img/slide-next-arrow.png" alt=""></div>
            </div>
            <h2 data-aos="fade-up">지부 교육강사</h2>
            <div class="slide_inner" data-aos="fade-up">
                <div class="swiper-container head_slide01">
                    <div class="swiper-wrapper">
                        <?php
                        $iSql="SELECT * FROM teacher WHERE `local`='지부'";
                        $iRes=mysqli_query($conn, $iSql);
                        $iRows=mysqli_num_rows($iRes);
                        for($i=0;$i<ceil($iRows/3);$i++){
                            $limit=$i*3;
                        ?>
                        <div class="swiper-slide">
                            <?php
                            $sql="SELECT * FROM teacher WHERE `local`='지부' ORDER BY num ASC LIMIT $limit, 3";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                                $position=$row['position'];
                                $name=$row['name'];
                                $thumb=$row['thumb'];
                                $num=$row['num'];
                            ?>
                            <a href="sub/teacher_detail.php?num=<?php echo $num?>">
                                <img src="img/teacher/<?php echo $thumb?>" alt="">
                                <p><?php echo $position?></p>
                                <h3><?php echo $name?></h3>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="swiper-btn-prev prev02"><img src="img/slide-prev-arrow.png" alt=""></div>
                <div class="swiper-btn-next next02"><img src="img/slide-next-arrow.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="sketch">
        <div class="inner" data-aos="fade-up">
            <h2>ACADEMY SKETCH</h2>
            <div class="contents">
                <?php
                $sql="SELECT * FROM photo ORDER BY num DESC LIMIT 24";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $thumb=$row['thumbnail'];
                    $num=$row['num'];
                ?>
                <a href="sub/sketch.php"><img src="img/photo/<?php echo $thumb?>" alt=""></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="schedule">
        <div class="inner" data-aos="fade-up">
            <h2>ACADEMY SCHEDULE</h2>
            <div class="slide_inner">
                <div class="swiper-container schedule_slide">
                    <div class="swiper-wrapper">
                        <?php
                        $cSql="SELECT * FROM schedule";
                        $cRes=mysqli_query($conn, $cSql);
                        $cRows=mysqli_num_rows($cRes);

                        for($s=0;$s<ceil($cRows/3);$s++){
                            $limit=$s*3;
                        ?>
                        <div class="swiper-slide">
                            <?php 
                            $sql="SELECT * FROM schedule ORDER BY num DESC LIMIT $limit, 3";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            ?>
                            <div class="content">
                                <div class="top_box">
                                    <img src="img/schedule/<?php echo $row['thumb']?>" alt="">
                                    <!-- <p>23년 2월<br>아카데미 과정<br>교육일정</p> -->
                                </div>
                                <div class="bottom_box">
                                    <h3><?php echo $row['title'];?></h3>
                                    <div>
                                        <p>지부</p>
                                        <span><?php echo $row['local_name']?></span>
                                    </div>
                                    <div>
                                        <p>일자</p>
                                        <span><?php echo $row['open_date']?></span>
                                    </div>
                                    <div>
                                        <p>기간</p>
                                        <span><?php echo $row['period']?></span>
                                    </div>
                                    <div>
                                        <p>문의</p>
                                        <span><?php echo ($row['tel']) ? "전화문의" : ""?> <?php echo ($row['kakao']) ? (($row['tel']) ? "/ 카카오톡 문의" : "카카오톡 문의") : ""?></span>
                                    </div>
                                </div>
                                <a href="sub/<?php echo ($row['local_name']=="본사") ? "head_edu_detail" : "branch_edu_detail" ?>.php?num=<?php echo $row['num']?>">DETAIL INFO</a>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <!-- <div>
                            <p>신청</p>
                            <span>2023.10.31 ~ 2023. 12.31 까지</span>
                        </div>
                        <div>
                            <p>시간</p>
                            <span>오전 10시 ~ 오후 9시</span>
                        </div>
                        <div>
                            <p>요일</p>
                            <span>화ㅣ수ㅣ목ㅣ금ㅣ토ㅣ일</span>
                        </div>
                        <div>
                            <p>장소</p>
                            <span>서울특별시 강남구 학동로47길 6 일우빌딩 2층</span>
                        </div> -->
                    </div>
                </div>
                <div class="swiper-btn-prev prev03"><img src="img/slide-prev-arrow01.png" alt=""></div>
                <div class="swiper-btn-next next03"><img src="img/slide-next-arrow01.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="partner">
        <div class="inner" data-aos="fade-up">
            <h2>PARTNERSHIP</h2>
            <div class="contents">
                <?php
                $pSql="SELECT * FROM partnership ORDER BY num ASC";
                $pRes=mysqli_query($conn, $pSql);
                while($pRow=mysqli_fetch_array($pRes)){
                    $link=$pRow['link'];
                    $pThumb=$pRow['thumb'];
                ?>
                <a href="<?php echo ($link) ? $link : "javascript:void(0)"?>"><img src="img/partnership/<?php echo $pThumb?>" alt=""></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>

</html>

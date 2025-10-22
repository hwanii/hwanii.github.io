<?php
$tSql="SELECT * FROM sub_{$page} WHERE cate='treat'";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);
?>
<section class="treat_target" style="<?php echo ($page=="pore" || $page=="pimple") ? "background-color: #fff;" : ""?>">
    <div class="inner">
        <div class="title" data-aos="fade-up">
            <h2>치료 대상</h2>
            <div class="title_line"></div>
            <p>치료가 필요한 분들</p>
        </div>
        <div class="t_top_c" data-aos="fade-up">
            <i></i>
            <h2>WHO NEED TREAT</h2>
        </div>
        <ul class="treat_target_contents">
            <li data-aos="fade-up">
                <img src="../img/model01.png">
                <div class="bg"></div>
                <div class="txt_box">
                    <h2>01</h2>
                    <div class="target_line"></div>
                    <p><?php echo $tRow['text1'];?></p>
                </div>
            </li> 
            <li data-aos="fade-up" data-aos-delay="200">
                <img src="../img/model02.png">
                <div class="bg"></div>
                <div class="txt_box">
                    <h2>02</h2>
                    <div class="target_line"></div>
                    <p><?php echo $tRow['text2'];?></p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="400">
                <img src="../img/model03.png">
                <div class="bg"></div>
                <div class="txt_box">
                    <h2>03</h2>
                    <div class="target_line"></div>
                    <p><?php echo $tRow['text3'];?></p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
                <img src="../img/model04.png">
                <div class="bg"></div>
                <div class="txt_box">
                    <h2>04</h2>
                    <div class="target_line"></div>
                    <p><?php echo $tRow['text4'];?></p>
                </div>
            </li>
        </ul>
        <?php
        if($page=="pore"){
        ?>
        <!-- <ul class="target_bottom_contents">
            <li><p><b>모공이 세로로 늘어져</b>&nbsp;고민이신 분</p></li>
            <li><p><b>피부 염증, 트러블</b>로 흉터가 잘 생기시는 분</p></li>
            <li><p><b>피지 분비가 많아</b>&nbsp;모공 개선이 어려우신 분</p></li>
            <li><p><b>1회 만에 빠른 효과</b>를 느끼기 원하시는 분</p></li>
            <li><p><b>화장으로도 가려지지 않는</b>&nbsp;모공이 고민이신 분</p></li>
            <li><p><b>일상 생활에 지장 없는</b>&nbsp;시술을 원하시는 분</p></li>
        </ul> -->
        <?php } ?>
    </div>
</section>
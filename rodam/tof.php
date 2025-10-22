<?php
$tSql="SELECT * FROM sub_{$page} WHERE cate='tof'";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);
?>
<section class="true">
    <div class="inner">
        <div class="title" data-aos="fade-up">
            <h2>TRUE OR FALSE</h2>
            <div class="title_line"></div>
            <p><?php echo $txt?> 치료에 대한 오해</p>
        </div>
        <div class="top_txt" data-aos="fade-up">
            <p><?php echo $txt?> <b>치료에 대한 오해</b></p>
        </div>
        <ul class="click_event">
            <li class="on" data-aos="fade-up">
                <h2>01</h2>
                <p><?php echo $tRow['text1'];?></p>
                <div class="normal">
                    <img src="img/hand.png">
                    <span>클릭하시면<br>정답이 나옵니다.</span>
                </div>
                <div class="click">
                    <h3>NO</h3>
                    <h4>가능합니다.</h4>
                </div>
            </li>
            <li class="on" data-aos="fade-up" data-aos-delay="150">
                <h2>02</h2>
                <p><?php echo $tRow['text2'];?></p>
                <div class="normal">
                    <img src="img/hand.png">
                    <span>클릭하시면<br>정답이 나옵니다.</span>
                </div>
                <div class="click">
                    <h3>NO</h3>
                    <h4>가능합니다.</h4>
                </div>
            </li>
            <li class="on" data-aos="fade-up" data-aos-delay="300">
                <h2>03</h2>
                <p><?php echo $tRow['text3'];?></p>
                <div class="normal">
                    <img src="img/hand.png">
                    <span>클릭하시면<br>정답이 나옵니다.</span>
                </div>
                <div class="click">
                    <h3>NO</h3>
                    <h4>가능합니다.</h4>
                </div>
            </li>
        </ul><div class="bottom_txt" data-aos="fade-up">
            <p><b>로담한의원에서는<br>가능</b>합니다!</p>
            <span>흉터 치료의 경험이 많을수록 다양한 흉터의 치료방법과<br>예상 효과를 실제 결과와 가깝게 예측할 수 있습니다.</span>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>
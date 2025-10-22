<?php
$tSql="SELECT * FROM sub_{$page} WHERE cate='mat'";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);
?>
<section class="true01">
    <div class="inner">
        <div class="bottom_txt" data-aos="fade-up">
            <p><b>새살침 코라테라피,</b> 오해와 진실</p>
            <h2>시술 중 붉은 기는 마지막 치료 후<br>평균 2 ~ 4 주 이내에 사라집니다.</h2>
            <span>다만, 치료 종료 시기는 개인의 생활 환경과 건강 상태에 따라<br>1개월 ~ 6개월 정도 붉은 기 흔적이 있을 수 있습니다.</span>
            <h3>치료 진행 결과</h3>
        </div>
        <div class="true_contents">
            <?php
            if($tRow['text1']!="" && $tRow['text2']!="" && $tRow['text3']!=""){
            ?>
            <div class="contents_box" data-aos="fade-up">
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text1'] ?>">
                    <h2>치료 전</h2>
                </div>
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text2'] ?>">
                    <h2>치료 중</h2>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text3'] ?>">
                        <p><?php echo $tRow['text4'];?>개월</p>
                    </div>
                    <h2>치료 후</h2>
                </div>
            </div>
            <?php } 
            if($tRow['text5']!="" && $tRow['text6'] && $tRow['text7']!=""){
            ?>
            <div class="contents_box" data-aos="fade-up">
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text5'] ?>">
                    <h2>치료 전</h2>
                </div>
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text6'] ?>">
                    <h2>치료 중</h2>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text7'] ?>">
                        <p><?php echo $tRow['text8'];?>개월</p>
                    </div>
                    <h2>치료 후</h2>
                </div>
            </div>
            <?php } 
            if($tRow['text9']!="" && $tRow['text10'] && $tRow['text11']!=""){
            ?>
            <div class="contents_box" data-aos="fade-up">
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text9'] ?>">
                    <h2>치료 전</h2>
                </div>
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text10'] ?>">
                    <h2>치료 중</h2>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text11'] ?>">
                        <p><?php echo $tRow['text12'];?>개월</p>
                    </div>
                    <h2>치료 후</h2>
                </div>
            </div>
            <?php } 
            if($tRow['text13']!="" && $tRow['text14'] && $tRow['text15']!=""){
            ?>
            <div class="contents_box" data-aos="fade-up">
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text13'] ?>">
                    <h2>치료 전</h2>
                </div>
                <div class="contents">
                    <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text14'] ?>">
                    <h2>치료 중</h2>
                </div>
                <div class="contents">
                    <div class="img_box">
                        <img src="../admin/img/<?php echo $page?>/mat/<?php echo $tRow['text15'] ?>">
                        <p><?php echo $tRow['text16'];?>개월</p>
                    </div>
                    <h2>치료 후</h2>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
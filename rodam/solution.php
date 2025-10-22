<?php
$tSql="SELECT * FROM sub_{$page} WHERE cate='solution'";
$tRes=mysqli_query($conn, $tSql);
$tRow=mysqli_fetch_array($tRes);
?>
<section class="solution">
    <div class="inner">
        <div class="top_txt diet_txt_box" data-aos="fade-up">
            <div class="t_top_c">
                <i></i>
                <h2>SOLUTION</h2>
            </div>
            <p><?php echo $txt?>치료 <b>해결책</b><br><b>새살침 코라테라피를 선택하는 이유</b></p>
        </div>
        <div class="solution_contents mt80" data-aos="fade-up">
            <h2>01</h2>
            <div class="contents">
                <div class="left">
                    <h3><?php echo $txt?>에<br>특화된 치료</h3>
                    <p>
                        피부를 깎아내어, 예민하게 만들거나<br>
                        약물을 주입하여 일시적인 효과를 주지 않습니다.<br>
                        흉터 부위를 적절한 강도로 자극하여 패인 흉터에<br>
                        새살이 차오를 수 있게 합니다.
                    </p>
                    <div class="bottom">
                        <h5>CASE</h5>
                        <span><?php echo $tRow['text3'];?></span>
                        <i><?php echo date("Y.m.d", strtotime($tRow['text6']));?></i>
                        <em>로담한의원의 모든 전후 사진은 환자의 동의 후 촬영 및 활용되고 있습니다.</em>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text1'];?>">
                        <h5>BEFORE</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text2']));?></p>
                    </div>
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text4'];?>">
                        <h5>AFTER</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text5']));?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_contents" data-aos="fade-up">
            <h2>02</h2>
            <div class="contents">
                <div class="left">
                    <h3>영구적인<br>치료 효과</h3>
                    <p>
                        내 피부 스스로의 재생력으로 본래의 살을<br>
                        재생시키는 것이기 때문에, 시간이 지나도<br>
                        치료된 부분이 다시 꺼지거나 하지 않습니다.
                    </p>
                    <div class="bottom">
                        <h5>CASE</h5>
                        <span><?php echo $tRow['text9']?></span>
                        <i><?php echo date("Y.m.d", strtotime($tRow['text12']))?></i>
                        <em>로담한의원의 모든 전후 사진은 환자의 동의 후 촬영 및 활용되고 있습니다.</em>
                    </div>
                </div>
                <div class="right three">
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text7'];?>">
                        <h5>BEFORE</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text8']))?></p>
                    </div>
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text10'];?>">
                        <h5>AFTER</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text11']))?></p>
                    </div>
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text13'];?>">
                        <h5>1 YEAR</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text14']))?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution_contents" data-aos="fade-up">
            <h2>03</h2>
            <div class="contents">
                <div class="left">
                    <h3>어렵지 않은<br>시술 후 관리</h3>
                    <p>
                        시술 후 진물이나 딱지가 생기지 않아<br>
                        관리가 쉬우며, 다음날부터 바로 세안과<br>
                        화장을 할 수 있습니다.
                    </p>
                    <div class="bottom">
                        <h5>CASE</h5>
                        <span><?php echo $tRow['text17']?></span>
                        <i><?php echo date("Y.m.d", strtotime($tRow['text20']))?></i>
                        <em>로담한의원의 모든 전후 사진은 환자의 동의 후 촬영 및 활용되고 있습니다.</em>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text15']?>">
                        <h5>BEFORE</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text6']))?></p>
                    </div>
                    <div>
                        <img src="./admin/img/<?php echo $page?>/solution/<?php echo $tRow['text18']?>">
                        <h5>AFTER</h5>
                        <p><?php echo date("Y.m.d", strtotime($tRow['text19']))?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
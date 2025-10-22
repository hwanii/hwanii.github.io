<?php
$pSql="SELECT * FROM sub_price";
$pRes=mysqli_query($conn, $pSql);
$pRow=mysqli_fetch_array($pRes);
$first=$pRow[$cate.'_first'];
$add=$pRow[$cate.'_add'];
$area=$pRow[$cate.'_area'];
?>
<div class="cp_contents cp_contents01">
    <div class="cp_title" data-aos="fade-up">
        <h2>1</h2>
        <h3><?php echo $txt?> 치료 비용</h3>
    </div>
    <div class="contents" data-aos="fade-up">
        <div class="left">
            <h2>흉터 1곳<br>새살침 1회 비용 <span>(기준 크기 5mm)</span></h2>
            <p>기준 크기보다 클 경우 추가 비용 발생</p>
        </div>
        <div class="line"></div>
        <h3><?php echo $first?><span>만원</span></h3>
    </div>
    <div class="bottom" data-aos="fade-up">
        <div>
            <img src="../img/check000.png">
            <p>첫 흉터 1개는 <?php echo $first?>만원이며 이후로 추가되는 흉터는 개당 <?php echo $add?>만원 부터입니다.</p>
        </div>
        <div>
            <img src="../img/check000.png">
            <p>
                흉터 여러 개가 밀집되어 있는 경우에는 개당이 아닌 범위로 비용이 책정됩니다.<br>
                (<?php echo $txt?>의 범위 새살침 1회 비용은 <?php echo $area?>만원 부터입니다.)
            </p>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="txt_box">
            <h3>ILPA ACADEMY</h3>
            <h2>국제리샤필라테스협회</h2>
            <p>전통의 필라테스에 현대의 해부학적 지식을 접목하여 <b>전문적인 필라테스 전문가를 양성하고 있습니다.</b></p>
            <span>HOME&nbsp;&nbsp;>&nbsp;&nbsp;교육 지부&nbsp;&nbsp;>&nbsp;&nbsp;지부 안내</span>
        </div>
    </section>
    <div class="sub_category" style="justify-content: center;">
        <a href="../sub/branch.php" class="on">지부 안내</a>
        <a href="../sub/branch_recruit.php">지부 모집</a>
    </div>
    <section class="branch" data-aos="fade-up">
        <div class="inner">
            <h2>지점</h2>
            <?php
            $sql="SELECT * FROM map WHERE cate='지점' ORDER BY num ASC";
            $res=mysqli_query($conn, $sql);
            $title=array();
            $local=array();
            $cate=array();
            $addr=array();
            $tel=array();
            $map=array();
            while($row=mysqli_fetch_array($res)){
                array_push($title, $row['title']);
                array_push($local, $row['local']);
                array_push($cate, $row['cate']);
                array_push($addr, $row['addr']);
                array_push($tel, $row['tel']);
                array_push($map, $row['map']);
            }
            ?>
            <div class="map_cate">
                <h2>지점</h2>
                <ul>
                    <?php
                    for($i=0;$i<count($title);$i++){
                    ?>
                    <li class="<?php echo ($i==0) ? "on" : ""?>"><?php echo $local[$i]?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="map_info_contents">
                <?php
                for($j=0;$j<count($title);$j++){
                ?>
                <div class="map_info <?php echo ($j==0) ? "active" : ""?>">
                    <div>
                        <h3>지점명</h3>
                        <p><?php echo $title[$j]?></p>
                    </div>
                    <div>
                        <h3>주소</h3>
                        <p><?php echo $addr[$j]?></p>
                    </div>
                    <div>
                        <h3>연락처</h3>
                        <p><?php echo $tel[$j]?></p>
                    </div>
                    <h2>오시는 길</h2>
                </div>
                <?php } ?>
            </div>
            <div class="map_pos">
                <?php
                for($j=0;$j<count($title);$j++){
                ?>
                <div class="map_contents <?php echo ($j==0) ? "active" : ""?>">
                    <?php echo $map[$j]?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        $cSql="SELECT * FROM map WHERE cate='지부' ORDER BY num ASC";
        $cRes=mysqli_query($conn, $cSql);
        $cTitle=array();
        $cLocal=array();
        $cCate=array();
        $cAddr=array();
        $cTel=array();
        $cMap=array();
        while($cRow=mysqli_fetch_array($cRes)){
            array_push($cTitle, $cRow['title']);
            array_push($cLocal, $cRow['local']);
            array_push($cCate, $cRow['cate']);
            array_push($cAddr, $cRow['addr']);
            array_push($cTel, $cRow['tel']);
            array_push($cMap, $cRow['map']);
        }
        ?>
        <div class="inner01" data-aos="fade-up">
            <h2>지부</h2>
            <div class="map_cate">
                <h2>지부</h2>
                <ul>
                    <?php
                    for($i=0;$i<count($cTitle);$i++){
                    ?>
                    <li class="<?php echo ($i==0) ? "on" : ""?>"><?php echo $cLocal[$i]?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="map_info_contents">
                <?php
                for($j=0;$j<count($cTitle);$j++){
                ?>
                <div class="map_info <?php echo ($j==0) ? "active" : ""?>">
                    <div>
                        <h3>지점명</h3>
                        <p><?php echo $cTitle[$j]?></p>
                    </div>
                    <div>
                        <h3>주소</h3>
                        <p><?php echo $cAddr[$j]?></p>
                    </div>
                    <div>
                        <h3>연락처</h3>
                        <p><?php echo $cTel[$j]?></p>
                    </div>
                    <h2>오시는 길</h2>
                </div>
                <?php } ?>
            </div>
            <div class="map_pos">
                <?php
                for($j=0;$j<count($cTitle);$j++){
                ?>
                <div class="map_contents <?php echo ($j==0) ? "active" : ""?>">
                    <?php echo $cMap[$j]?>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>

</html>

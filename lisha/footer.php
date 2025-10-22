<?php
date_default_timezone_set('Asia/Seoul');
$currdt = date("Y-m-d"); // 오늘 날짜
$time = date(" H:i:s");
$yester = date("Y-m-d", strtotime($currdt."-1 day"));// 어제 날짜
$userip = $_SERVER['REMOTE_ADDR'];

if(isset($_SERVER['HTTP_REFERER'])) 
    $referer = $_SERVER['HTTP_REFERER'];  
else 
    $referer = ""; 
if($conn){
    $sql="SELECT * FROM tb_stat_visit WHERE regip='$userip' AND regdate='$currdt'";
    $res=mysqli_query($conn, $sql);
    $rows=mysqli_num_rows($res);
    // 처음 방문했는지 검사
    if($rows==0) { 
        $_SESSION['visit'] = "1";
        $query = "insert into tb_stat_visit (regdate, regtime, regip, referer) values('$currdt', '$time', '$userip','$referer')";
        $result = mysqli_query($conn, $query);
    }
}
?>
<footer>
    <div class="footer_top">
        <div class="inner">
            <div class="left">
                <div class="title">
                    <p>OFFICIAL</p>
                    <h2>리샤 공식 SNS</h2>
                </div>
                <div class="sns">
                    <a href="<?php echo $sns[0]?>" target="_blank"><img src="<?php echo $root?>img/icon-insta.png" alt=""></a>
                    <a href="<?php echo $sns[1]?>" target="_blank"><img src="<?php echo $root?>img/icon-blog.png" alt=""></a>
                    <a href="<?php echo $sns[2]?>" target="_blank"><img src="<?php echo $root?>img/icon-cafe.png" alt=""></a>
                    <a href="<?php echo $sns[3]?>" target="_blank"><img src="<?php echo $root?>img/icon-kakao.png" alt=""></a>
                </div>
            </div>
            <form method="POST" action="<?php echo $root?>counsel.php" target="Fifrm">
            <input type="hidden" name="locate" value="index">
            <div class="right">
                <div class="title">
                    <p>CONTACT US</p>
                    <h2>빠른 상담 신청</h2>
                </div>
                <div class="right_input">
                    <select name="local" required>
                        <option value="">지점을 선택하세요</option>
                        <?php
                        $lSql="SELECT * FROM map WHERE `cate`='지점'";
                        $lRes=mysqli_query($conn, $lSql);
                        while($lRow=mysqli_fetch_array($lRes)){
                        ?>
                        <option value="<?php echo $lRow['local']?>"><?php echo $lRow['local']?></option>
                        <?php } ?>
                    </select>
                    <select name="type" required>
                        <option value="">상담 종류 선택</option>
                        <option vlaue="레슨 문의">레슨 문의</option>
                        <option vlaue="지도자 문의">지도자 문의</option>
                    </select>
                    <input type="text" name="name" placeholder="이름" class="name" required>
                    <input type="text" name="tel" placeholder="연락처" class="phone" required>
                    <button>신청하기</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <iframe name="Fifrm" frameborder="0" style="display:none"></iframe>
    <?php
    $fSql="SELECT * FROM information";
    $fRes=mysqli_query($conn, $fSql);
    $fRow=mysqli_fetch_array($fRes);
    ?>
    <div class="footer_bottom">
        <div class="inner">
            <img src="<?php echo $root?>img/f-logo.png" alt="">
            <div>
                <p><?php echo $fRow['kor_compnay']?></p>
                <p>대표자명 : <?php echo $fRow['name']?><span>｜</span><br>전화번호 : <?php echo $fRow['tel']?><span>｜</span><br>팩스번호 : <?php echo $fRow['fax']?></p>
                <p>주소 : <?php echo $fRow['addr']?>, <?php echo $fRow['detail_addr']?><span>｜</span><br>사업자등록번호 : <?php echo $fRow['business_number']?></p>
                <p>COPYRIGHT © 2014 리샤필라테스 &amp; 자이로토닉 강남구청점 All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
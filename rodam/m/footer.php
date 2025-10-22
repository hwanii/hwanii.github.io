<!-- <div class="q_bottom">
    <a href="" target="_blank"><img src="../img/icon-m-youtube.png"></a>
    <img src="../img/icon-m-talk.png" class="q_menu_btn">
</div> -->
<a href="https://www.youtube.com/@rodam_haniwon" target="_blank" class="b_you"><img src="../img/icon-m-youtube.png"></a>
<img src="../img/icon-m-talk.png" class="q_menu_btn">
<section class="mob_bottom_fix">
    <div class="top_btn">
        <div><img src="../img/top-arrow.png"></div>
    </div>
    <h2 class="top">빠른 상담 신청</h2>
    <div class="bottom">
        <form method="POST" action="reservation.php" target="cIfrm">
        <input type="reset" id="fReset" style="display:none">
        <input type="hidden" name="hidden" value="fReset">
        <div class="contents">
            <input type="text" name="name" value="<?php echo $uName?>" placeholder="이름" required>
            <input type="tel" name="tel" value="<?php echo $uTel?>" placeholder="연락처 ( - 없이 숫자만)" required>
            <select name="branch" required>
                <option value="" selected disabled style="display:none">지점 선택하기</option>
                <?php
                $brSql="SELECT * FROM branch ORDER BY num ASC";
                $brRes=mysqli_query($conn, $brSql);
                while($brRow=mysqli_fetch_array($brRes)){
                ?>
                <option value="<?php echo $brRow['branch_name']?>"><?php echo $brRow['branch_name']?></option>
                <?php } ?>
            </select>
            <select name="type" required>
                <option value="" selected disabled style="display:none">상담 분야 선택하기</option>
                <option value="여드름흉터">여드름흉터</option>
                <option value="수두/대상포진흉터">수두/대상포진흉터</option>
                <option value="수술/성형흉터">수술/성형흉터</option>
                <option value="기타 패인 흉터">기타 패인 흉터</option>
                <option value="여드름/모공·탄력">여드름/모공·탄력</option>
                <option value="다이어트">다이어트</option>
            </select>
            <label>
                <input type="checkbox" required>
                <span>개인정보 수집 / 이용 동의</span>
            </label>
            <button>상담 신청</button>
        </div>
        </form>
        <iframe name="cIfrm" frameborder="0" style="display:none"></iframe>
    </div>
</section>
<div class="fix_bg"></div>
<footer>
    <div class="inner">
        <img src="../admin/img/logo/<?php echo $ib?>">
        <div class="middle">
            <?php
            $bSql="SELECT * FROM branch ORDER BY num ASC";
            $bRes=mysqli_query($conn, $bSql);
            $b=0;
            while($bRow=mysqli_fetch_array($bRes)){
                $branch=$bRow['branch_name'];
                $name=$bRow['name'];
                $busi_num=$bRow['busi_num'];
                $addr=$bRow['addr'];
                $detail=$bRow['detail'];
            ?>
            <div class="contents">
                <p>로담한의원 <?php echo $branch?></p>
                <p>대표자 : <?php echo $name?></p>
                <p>사업자등록번호 :  <?php echo $busi_num?></p>
                <p><?php echo $addr." ".$detail?></p>
            </div>
            <?php } ?>
        </div>
        <div class="bottom">
            <div class="top">
                <a href="javascript:void(0);">개인정보취급방침</a>
                <a href="javascript:void(0);">사이트 이용약관</a>
                <?php if($user){ ?>
                <a href="mypage.php">마이페이지</a>
                <?php } else { ?>
                <a href="join.php">회원가입</a>
                <?php } ?>
                <!-- <a href="javascript:void(0);">비급여금액안내</a> -->
            </div>
            <div class="line"></div>
            <div class="bot">
                <p>외국인환자 유치업 등록번호 : <?php echo $if?></p>
                <span>/</span>
                <p>sms수신거부 : <?php echo $it?></p>
                <span>/</span>
                <p>e-mail : <?php echo $ie?></p>
                <p>COPYRIGHT(C)2021 BY <?php echo $ic?>. ALL RIGHTS RESERVED.</p>
            </div>
        </div>
    </div>
</footer>

<?php
    $sql="SELECT * FROM terms";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);
?>
<div class="info_wrap01">
    <div class="content">
        <div class="news-view">
            <div class="title" style="width: 90%">개인정보취급방침</div>
            <div class="info_close_btn"><img src="../img/close-btn.png" alt="" style="width:100%"></div>
        </div>
        <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
        <p style="line-height: 25px;font-size:13px"><?php echo nl2br($row['policy'])?></p>
        </div>
    </div>
</div>
<div class="info_wrap02">
    <div class="content">
        <div class="news-view">
            <div class="title" style="width: 90%">이용약관</div>
            <div class="info_close_btn"><img src="../img/close-btn.png" alt="" style="width:100%"></div>
        </div>
        <div class="view-detail" style="box-sizing:border-box;overflow-y: auto;max-height:500px">
        <p style="line-height: 25px;font-size:13px"><?php echo nl2br($row['terms'])?></p>
        </div>
    </div>
</div>
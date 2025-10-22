<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'?>
    <link rel="stylesheet" href="../font/font.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php';?>
    <section class="sub_banner">
        <div class="bg"></div>
        <div class="txt_box">
            <h2>GOOD<br>BUSINESS<br>PARTNER</h2>
            <img src="../img/main-logo01.png" alt="">
        </div>
    </section>
    <section class="menu_flow">
        <div class="inner">
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;신청하기&nbsp;&nbsp;>&nbsp;&nbsp;상품조사 신청</p>
        </div>
    </section>
    <section class="request">
        <div class="inner">
            <div class="title">
                <h2>신청하기</h2>
                <p>SERVICE REQUEST</p>
            </div>
            <div class="request_category">
                <a href="../sub/product_request.php" class="on">상품조사 신청</a>
                <a href="../sub/visit_request.php">방문단 신청</a>
                <a href="../sub/commerce_request.php">전자상거래 신청</a>
            </div>
            <div class="re_top">
                <div class="search_input" style="visibility:hidden">
                    <select>
                        <option>제목 + 본문</option>
                        <option>제목</option>
                        <option>본문</option>
                    </select>
                    <input type="text">
                    <button>검색</button>
                </div>
                <a href="../sub/product_request_write.php">신청글 작성</a>
            </div>
            <div class="re_contents">
                <ul class="top">
                    <li>번호</li>
                    <li>제목</li>
                    <li>작성자</li>
                    <li>작성일자</li>
                </ul>
                <?php
                $page=($_GET['page']) ? $_GET['page'] : 1; // 페이지 번호
                $list = 20; // 페이지 당 목록 개수
                $b_pageNum_list = 5; // 페이지 당 블록 갯수
                $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                
                $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                
                $pSql="SELECT COUNT(*) AS cnt FROM product";
                $pRes=mysqli_query($conn, $pSql);
                $pRow=mysqli_fetch_array($pRes);
                $total_count=$pRow['cnt'];
                
                $total_page = ceil($total_count / $list); // 총 페이지 수 
                if($b_end_page > $total_page) $b_end_page = $total_page;
                
                $limit=($page - 1) * $list; // 출력 시작 번호
                $no=$total_count-$limit;

                $sql="SELECT * FROM product ORDER BY num DESC LIMIT $limit, $list";
                $res=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($res)){
                    $name=$row['name'];
                    $title=$row['title'];
                    $answer=$row['answer'];
                    $answer_time=$row['answer_time'];
                    $time=$row['write_time'];
                    $num=$row['num'];
                ?>
                <!-- product_request_detail.php?num=<?php echo $num?> -->
                <a href="javascript:$('#num').val('<?php echo $num?>');$('#answer').val('false')" class="contents">
                    <p><?php echo $no--;?></p>
                    <p><img src="../img/lock.png" alt=""><?php echo $title?></p>
                    <p><?php echo $name?></p>
                    <p><?php echo date("Y-m-d", strtotime($time))?></p>
                </a>
                <?php 
                if($answer) { ?>
                <a href="javascript:$('#num').val('<?php echo $num?>');$('#answer').val('true')" class="reply">
                    <p></p>
                    <p><img src="../img/re-arrow.png" alt=""><img src="../img/lock.png" alt="">답글입니다.</p>
                    <p>관리자</p>
                    <p><?php echo date("Y-m-d", strtotime($answer_time))?></p>
                </a>
                <?php }
                } ?>
            </div>
            <div class="list_page">
                <?php
                if($block <=1){
                ?>
                <a href="javascript:void(0)">&#60;&#60;</a>
                <a href="javascript:void(0)">&#60;</a>
                <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=1">&#60;&#60;</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_start_page - 1 ?>">&#60;</a>
                <?php } ?>
                <div class="num">
                    <?php
                    for($i=$b_start_page;$i<=$b_end_page;$i++){
                        if($page == $i){ // page 와 i 가 같으면 현재 페이지
                        ?>
                        <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                        <?php } else { ?>
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $i?>"><?php echo $i?></a>
                        <?php
                        }
                    }?>
                </div>
                <?php
                $total_block = ceil($total_page/$b_pageNum_list);
                if($block >= $total_block){
                ?>
                <a href="javascript:void(0)">&#62;</a>
                <a href="javascript:void(0)">&#62;&#62;</a>
                <?php
                } else {
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $b_end_page + 1 ?>">&#62;</a>
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=<?php echo $total_page?>">&#62;&#62;</a>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="pass_bg"></div>
    <div class="pass_pop">
        <form action="pw_chk.php">
            <input type="submit" id="sub" style="display:none">
            <input type="hidden" id="type" name="type" value="product">
            <input type="hidden" id="num" name="num">
            <input type="hidden" id="answer" name="aw" value="false">
            <div class="close_btn">
                <span></span>
                <span></span>
            </div>
        <h2>비밀번호를 입력해주세요</h2>
        <input type="password" id="pw" maxlength="4" onkeyup="pw_chk()" placeholder="비밀번호" required>
        </form>
        <button onclick="document.querySelector('#sub').click();">확인</button>
    </div>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function pw_chk(){
        var pw = $("#pw").val();
        var num = $("#num").val();
        var aw = $("#answer").val();
        $.ajax({
            url:"pass_chk.php",
            type:"POST",
            data:{
                type: $("#type").val(),
                pass: pw,
                num: num
            },
            dataType:"JSON",
            success:function(data){
                if(data[0]=="true"){
                    location.href="product_request_detail.php?num="+num+"&aw="+aw;
                } else if(data=="false"){
                    alert("비밀번호가 일치하지 않습니다.");
                }
            }
        });
    }
</script>
</html>

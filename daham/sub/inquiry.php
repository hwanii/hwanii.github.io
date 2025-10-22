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
            <p>HOME&nbsp;&nbsp;>&nbsp;&nbsp;실시간 문의&nbsp;&nbsp;>&nbsp;&nbsp;문의 및 현황</p>
        </div>
    </section>
    <section class="inquiry">
        <div class="inner">
            <div class="title">
                <h2>실시간 문의</h2>
                <p>REAL-TIME INQUIRIES</p>
            </div>
            <form method="POST" action="counsel.php" enctype="multipart/form-data" target="ifrm">
            <div class="contents">
                <div class="left">
                    <div class="left_top">
                        <div>
                            <p>작성자명</p>
                            <input type="text" name="name" placeholder="작성자명" require>
                        </div>
                        <div>
                            <p>비밀번호</p>
                            <input type="password" name="pass" placeholder="숫자4개" require>
                        </div>
                        <div>
                            <p>이메일주소</p>
                            <input type="email" name="email" placeholder="이메일주소입력" require>
                        </div>
                    </div>
                    <input type="text" name="title" placeholder="제목을 입력해주세요" require>
                    <textarea name="contents" placeholder="내용을 입력해주세요" require></textarea>
                    <div class="attached">
                        <div>
                            <button type="button" onclick="document.querySelector('#file1').click();">파일 첨부 1</button>
                            <input type="file" name="file1" id="file1" onchange="change(this, '1')" style="display:none">
                            <p id="sFile1">첨부 파일 명 노출 영역</p>
                        </div>
                        <div>
                            <button type="button" onclick="document.querySelector('#file2').click();">파일 첨부 2</button>
                            <input type="file" name="file2" id="file2" onchange="change(this, '2')" style="display:none">
                            <p id="sFile2">첨부 파일 명 노출 영역</p>
                        </div>
                    </div>
                    <label class="priv">
                        <input type="checkbox" required>
                        <p>개인정보취급방침에 동의합니다.</p>
                    </label>
                    <button>작성 완료</button>
                </div>
                <div class="line"></div>
                <div class="right">
                    <ul>
                        <?php
                        $page=1; // 페이지 번호
                        $list = 9; // 페이지 당 목록 개수
                        $b_pageNum_list = 5; // 페이지 당 블록 갯수
                        $block = ceil($page/$b_pageNum_list); // 현재 리스트의 블럭
                        
                        $b_start_page = (($block - 1) * $b_pageNum_list) + 1; // 현재 블럭에서 시작 페이지 번호
                        $b_end_page = $b_start_page + $b_pageNum_list -1; // 현재 블럭에서 마지막 페이지 번호
                        
                        $pSql="SELECT COUNT(*) AS cnt FROM counsel";
                        $pRes=mysqli_query($conn, $pSql);
                        $pRow=mysqli_fetch_array($pRes);
                        $total_count=$pRow['cnt'];
                        
                        $total_page = ceil($total_count / $list); // 총 페이지 수 
                        if($b_end_page > $total_page) $b_end_page = $total_page;
                        
                        $limit=($page - 1) * $list; // 출력 시작 번호
                        $no=$total_count-$limit;
                        
                        $sql="SELECT * FROM counsel ORDER BY num DESC LIMIT $limit, $list";
                        $res=mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($res)){
                            $title=$row['title'];
                            $answer=$row['answer'];
                            $num=$row['num'];
                        ?>
                        <li onclick="$('#num').val('<?php echo $num?>');$('#answer').val('false')"><img src="../img/lock.png" alt=""><?php echo $title?></li>
                        <?php if($answer) {?>
                            <li onclick="$('#num').val('<?php echo $num?>');$('#answer').val('true')"><img src="../img/re-arrow.png" alt=""><img src="../img/lock.png" alt="">답변입니다.</li>
                        <?php }
                        } ?>
                    </ul>
                    <div class="list_page">
                        <?php
                        if($block <=1){
                        ?>
                        <a href="javascript:void(0)">&#60;&#60;</a>
                        <a href="javascript:void(0)">&#60;</a>
                        <?php
                        } else {
                        ?>
                        <a href="javascript:page('1')">&#60;&#60;</a>
                        <a href="javascript:page('<?php echo $b_start_page - 1 ?>')">&#60;</a>
                        <?php } ?>
                        <div class="num">
                            <?php
                            for($i=$b_start_page;$i<=$b_end_page;$i++){
                                if($page == $i){ // page 와 i 가 같으면 현재 페이지
                                ?>
                                <a href="javascript:void(0)" class="on"><?php echo $i?></a>
                                <?php } else { ?>
                                <a href="javascript:page('<?php echo $i?>')"><?php echo $i?></a>
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
                        <a href="javascript:page('<?php echo $b_end_page + 1 ?>')">&#62;</a>
                        <a href="javascript:page('<?php echo $total_page?>')">&#62;&#62;</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <div class="pass_bg"></div>
    <div class="pass_pop">
        <form action="pw_chk.php">
            <input type="submit" id="sub" style="display:none">
            <input type="hidden" id="type" name="type" value="counsel">
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
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function change(obj, t) {
        var str = obj.value;
        var num = str.length;
        var i = str.lastIndexOf("\\");
        var index = str.substr(i + 1, num);
        document.getElementById('sFile'+t).innerHTML = index;
    }

    function page(p){
        $.ajax({
            url:"inquiry_list.php",
            type:"POST",
            data:{page:p},
            dataType:"JSON",
            success:function(data){
                console.log(data);
                $(".right").empty();
                $(".right").append(data[0]);
            }
        });
    }
    
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
                    location.href="inquiry_detail.php?num="+num+"&aw="+aw;
                } else if(data[0]=="false"){
                    alert("비밀번호가 일치하지 않습니다.");
                }
            }
        });
    }
</script>
</html>
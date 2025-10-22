<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include '../meta.php'; ?>
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="login">
        <h2 style="margin-bottom: 50px;">회원정보수정</h2>
        <div class="line02"></div>
        <?php
        $sql="SELECT * FROM member WHERE id='$id'";
        $res=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($res);
        $name=$row['name'];
        $tel=explode("-", $row['tel']);
        $email=$row['email'];
        ?>
        <form method="POST" action="member_modi.php" onsubmit="return form_chk()" target="ifrm">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="hidden" name="name" value="<?php echo $name?>">
        <div class="log-input">
            <div>
                <h3>아이디 *</h3>
                <p><?php echo $id?></p>
            </div>
            <div>
                <h3>비밀번호 *</h3>
                <input type="password" id="pass" name="pass" placeholder="8~20자리 영문, 숫자, 특수문자" required>
            </div>
            <div>
                <h3>비밀번호 확인 *</h3>
                <input type="password" id="re_pass" name="re_pass" placeholder="" required>
            </div>
            <div>
                <h3>이름 *</h3>
                <p><?php echo $name?></p>
            </div>
            <div>
                <h3>연락처 *</h3>
                <div>
                    <input type="text" name="fTel" value="<?php echo $tel[0]?>" numberOnly required>-
                    <input type="text" name="mTel" value="<?php echo $tel[1]?>" numberOnly required>-
                    <input type="text" name="lTel" value="<?php echo $tel[2]?>" numberOnly required>
                </div>
            </div>
            <div>
                <h3>이메일 *</h3>
                <input type="text" name="email" value="<?php echo $email?>" required>
            </div>
            <!-- <div>
                <h3>주소 *</h3>
                <ul>
                    <li>
                        <input type="text">
                        <button type="button">검색</button>
                    </li>
                    <li><input type="text"></li>
                    <li><input type="text"></li>
                </ul>
            </div> -->
            <div>
                <h3>회원탈퇴</h3>
                <button type="button" onclick="secession('<?php echo $id?>')">회원탈퇴</button>
            </div>
        </div>
        <div class="log-btn">
            <button type="button" onclick="location.href='../index.php'">취소</button>
            <button>개인정보 입력</button>
        </div>
        </form>
    </div>
    <iframe name="ifrm" frameborder="0" style="display:none"></iframe>
    <?php include '../footer.php';?>
</body>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/sub.js"></script>
<script type="text/javascript" src="../js/aos.js"></script>
<script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
<script>
    function secession(member){
        if(confirm("정말로 탈퇴하시겠습니까?")){
            $.ajax({
                url:"secession.php",
                type:"POST",
                data:{id:member},
                dataType:"JSON",
                success:function(data){
                    if(data){
                        alert("이용해주셔서 감사합니다.");
                        location.href="../";
                    }
                }
            })
        }
    }
    
    $("input:text[numberOnly]").on("keyup", function() {
        $(this).val($(this).val().replace(/[^0-9]/g,""));
    });

    function form_chk(){
        if($("#pass").val()!=$("#re_pass").val()){
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        }
    }
</script>
</html>

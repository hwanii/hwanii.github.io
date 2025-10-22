<?php
$sns_sql="SELECT * FROM sns";
$sns_res=mysqli_query($conn, $sns_sql);
$sns_row=mysqli_fetch_array($sns_res);

?>
<div class="left_body">
    <div class="left_fix">
        <div>
            <a href="tel:02-6956-5168">
                <img src="../img/icon-call.png">
                <h2>전화걸기</h2>
            </a>
            <!-- <a href="" target="_blank">
                <img src="../img/icon-blog.png">
                <h2>공식 블로그</h2>
            </a>
            <a href="" target="_blank">
                <img src="../img/icon-youtube.png">
                <h2>유튜브</h2>
            </a> -->
            <a href="mailto:info@globalepco.com" target="_blank">
                <img src="../img/icon-mail.png">
                <h2>메일</h2>
            </a>
        </div>
        <div class="close">
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="left_btn">
        <span></span>
        <span></span>
    </div>
    <div class="left_bg"></div>
</div>
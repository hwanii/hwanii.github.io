<?php
include 'connect.php';

if(strpos($_SERVER['PHP_SELF'], "sub") === false){
    $root="";
} else {
    $root="../";
}
?>
<!-- <script>
  (function(){var w=window;if(w.ChannelIO){return w.console.error("ChannelIO script included twice.");}var ch=function(){ch.c(arguments);};ch.q=[];ch.c=function(args){ch.q.push(args);};w.ChannelIO=ch;function l(){if(w.ChannelIOInitialized){return;}w.ChannelIOInitialized=true;var s=document.createElement("script");s.type="text/javascript";s.async=true;s.src="https://cdn.channel.io/plugin/ch-plugin-web.js";var x=document.getElementsByTagName("script")[0];if(x.parentNode){x.parentNode.insertBefore(s,x);}}if(document.readyState==="complete"){l();}else{w.addEventListener("DOMContentLoaded",l);w.addEventListener("load",l);}})();

  ChannelIO('boot', {
    "pluginKey": "6b00e33f-6216-47d0-83d3-837637e53800"
  });
</script> -->
<img src="<?php echo $root?>img/main-back01.png" class="main_bg">
<header>
    <div class="inner">
        <a href="javascript:void(0)"><img src="<?php echo $root?>img/icon-menu.png"></a>
        <div class="language">
            <a href="<?php echo $root?>index.php">KOR</a>
            <a href="<?php echo $root?>index_en.php">ENG</a>
        </div>
    </div>
    <h1><a href="<?php echo $root?>index.php">공항 운영 수하물 배송<br>보관 서비스</a></h1>
</header>
<aside>
    <div class="close">
        <span></span>
        <span></span>
    </div>
    <a href="<?php echo $root?>index.php">공항 운영 수하물 배송<br>보관 서비스</a>
    <div class="gnb">
        <a href="<?php echo $root?>sub/reservation.php">
            <p>예약하기</p>
            <div class="line"></div>
            <img src="<?php echo $root?>img/icon-main01.png">
        </a>
        <a href="<?php echo $root?>sub/search.php">
            <p>조회하기</p>
            <div class="line"></div>
            <img src="<?php echo $root?>img/icon-main02.png">
        </a>
        <a href="<?php echo $root?>sub/process.php">
            <p>사진 업로드하기</p>
            <div class="line"></div>
            <img src="<?php echo $root?>img/icon-main03.png">
        </a>
        <a href="<?php echo $root?>sub/ask.php">
            <p>상담하기</p>
            <div class="line"></div>
            <img src="<?php echo $root?>img/icon-main04.png">
        </a>
    </div>
</aside>
<a href="https://pf.kakao.com/_duVaxj" target="_blank" class="kakaotalk"><img src="<?php echo $root?>img/kakaotalk.png"></a>
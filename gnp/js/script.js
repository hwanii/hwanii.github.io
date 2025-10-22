$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    })

    // header scroll
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $("header").addClass("header_fixed");
                // $("header .inner .h-menu h1 a img").attr("src","./img/b-logo.png");
                // $(".ham-btn img").attr("src","./img/ham.png");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("header_fixed");
              //  $("header .inner .h-menu h1 a img").attr("src","./img/logo.png");
              //  $(".ham-btn img").attr("src","./img/w-ham.png");
            }
        });
    });

    //header 2차메뉴
    $("header .gnb > li").mouseenter(function(){
      $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
      $(this).children("ul").stop().slideUp();
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
      $("aside").animate({"right" : "0px"},300);
      $(".back-bg").show();
    });
  
    $(".close").click(function(){
      $("aside").animate({"right" : "-300px"},300);
      $(".back-bg").hide();
    });
  
    $(".back-bg").click(function(){
      $("aside").animate({"right" : "-300px"},300);
      $(".back-bg").hide();
    });
  
    $("aside .gnb>li>a").click(function(){
      if( $(this).parent().hasClass('on') == true ){
        $(".depth>li").removeClass('on');
        $(".depth").slideUp();
            
        $(".gnb>li").removeClass('on');
        $(".depth").slideUp();
      }else{
        $(".depth>li").removeClass('on');
        $(".depth").slideUp();
            
        $(".gnb>li").removeClass('on');
        $(".depth").slideUp();
        $(this).parent().addClass("on");
        $(this).next().slideDown();
      }
    });

    //메인 배너
    var swiper = new Swiper("#main-wrap .mySwiper", {
      loop: true,
      slidesPerView: 1,
      loopAdditionalSlides : 1,
      centeredSlides: true,
      navigation: {
          nextEl: '.swiper-btn-next',
          prevEl: '.swiper-btn-prev',
      },
      speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });

    //메인 배너 게시판
    var swiper = new Swiper(".board-box01 .mySwiper", {
      loop: true,
      slidesPerView: 1,
      loopAdditionalSlides : 1,
      centeredSlides: true,
      navigation: {
          nextEl: '.swiper-btn-next01',
          prevEl: '.swiper-btn-prev01',
      }
    });

    //메인 배너 게시판
    var swiper = new Swiper(".board-box02 .mySwiper", {
      loop: true,
      slidesPerView: 1,
      loopAdditionalSlides : 1,
      centeredSlides: true,
      navigation: {
          nextEl: '.swiper-btn-next02',
          prevEl: '.swiper-btn-prev02',
      }
    });

    //메인 배너 게시판 사이즈
    // $(window).resize(function(){ 
    //   if (window.innerWidth > 1255) {  // 다바이스 크기가 480이상일때 

    //     $(".main-banner .inner .main-board .board-box01 .swiper-btn-prev01 img").attr("src","/img/left-arrow.png");
    //     $(".main-banner .inner .main-board .board-box01 .swiper-btn-next01 img").attr("src","/img/right-arrow.png");
      
    //     $(".main-banner .inner .main-board .board-box02 .swiper-btn-prev02 img").attr("src","/img/left-arrow.png");
    //     $(".main-banner .inner .main-board .board-box02 .swiper-btn-next02 img").attr("src","/img/right-arrow.png");
      
    //   } else {

    //     $(".main-banner .inner .main-board .board-box01 .swiper-btn-prev01 img").attr("src","/img/b-left-arrow.png");
    //     $(".main-banner .inner .main-board .board-box01 .swiper-btn-next01 img").attr("src","/img/b-right-arrow.png");
      
    //     $(".main-banner .inner .main-board .board-box02 .swiper-btn-prev02 img").attr("src","/img/b-left-arrow.png");
    //     $(".main-banner .inner .main-board .board-box02 .swiper-btn-next02 img").attr("src","/img/b-right-arrow.png");
      
    //   }
      
    // }).resize();




})
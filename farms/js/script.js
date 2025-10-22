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
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("header").removeClass("header_fixed");
            }
        });
    });

    //헤더
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $(this).children("ul").stop().slideUp();
    });

    
    // 햄버거 메뉴
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
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
      navigation: {
          nextEl: '.swiper-btn-next',
          prevEl: '.swiper-btn-prev',
      }
    });

    //메인 게시판
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

    //메인 게시판
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



})
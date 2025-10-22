$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").stop().slideUp();
    });





    $(".ham").click(function(){
        $("aside").animate({"right" : "0px"});
        $(".aside_bg").show();
    });

    $(".aside_bg").click(function(){
        $("aside").animate({"right" : "-300px"});
        $(".aside_bg").hide();
    });

    $("aside .close").click(function(){
        $("aside").animate({"right" : "-300px"});
        $(".aside_bg").hide();
    });

    $("aside .gnb > li > a").click(function(){
        if( $(this).parent().hasClass('on') == true ){
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $(".gnb > li").removeClass('on');
            $(".depth").slideUp();
        }else{
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $(".gnb > li").removeClass('on');
            $(".depth").slideUp();
            $(this).parent().addClass("on");
            $(this).next().slideDown();
        }
    });





    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });





    $(".info_bg").click(function(){
        $(".info_bg").hide();
        $(".info_wrap").hide();
    });

    $(".info_wrap .close").click(function(){
        $(".info_bg").hide();
        $(".info_wrap").hide();
    });

    $("footer .inner .right .pri a:nth-child(1)").click(function(){
        $(".info_bg").show();
        $(".info_wrap01").show();
    });

    $("footer .inner .right .pri a:nth-child(2)").click(function(){
        $(".info_bg").show();
        $(".info_wrap02").show();
    });

    $("footer .inner .right .pri a:nth-child(3)").click(function(){
        $(".info_bg").show();
        $(".info_wrap03").show();
    });
})
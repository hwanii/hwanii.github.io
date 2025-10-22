$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    // header
    // $("header .gnb > li").mouseenter(function(){
    //     $(this).children("ul").stop().slideDown(200);
    // });

    // $("header .gnb > li").mouseleave(function(){
    //     $("header .gnb > li ul").stop().slideUp(200);
    // });

    $(".ham_btn").click(function(){
        $("aside").animate({"top" : "0"});
    });

    $("aside .close").click(function(){
        $("aside").animate({"top" : "-100%"});
    });





    // header
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").addClass("on");
        $(this).children("ul").slideDown(300);

        setTimeout(function(){
            $("header .gnb ul.on a").animate({
                "opacity" : "1",
                "top" : "0px"
            },300);
        }, 300);
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").removeClass("on");
        $("header .gnb > li ul").css({"display" : "none"});
        $("header .gnb ul a").css({
            "opacity" : "0",
            "top" : "-10px"
        });
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





    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1200,
        autoplay : {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: '.prev_btn',
            nextEl: '.next_btn',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });






})
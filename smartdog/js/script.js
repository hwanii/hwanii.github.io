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





    $(".left_wing .close").click(function(){
        $(".left_wing").animate({"left" : "-170px"});
        setTimeout(function(){
            $(".left_open").animate({"left" : "0px"});
        },400);
    });

    $(".left_open").click(function(){
        $(".left_open").animate({"left" : "-50px"});
        setTimeout(function(){
            $(".left_wing").animate({"left" : "0px"});
        },400);
    });





    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".main_slide .swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });

    var swiper = new Swiper(".index_member_slide", {
        loop: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 40,
        loopAdditionalSlides : 1,
        speed: 500,
        navigation: {
            prevEl: '.im_prev',
            nextEl: '.im_next',
        },
    });

    var swiper = new Swiper(".program_slide01", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 25,
        centeredSlides: true,
        loopAdditionalSlides : 1,
        speed: 500,
        navigation: {
            prevEl: '.pro_prev01',
            nextEl: '.pro_next01',
        },
        breakpoints: {
            769: {
                centeredSlides: false,
            },
        },
    });

    var swiper = new Swiper(".program_slide02", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 25,
        centeredSlides: true,
        loopAdditionalSlides : 1,
        speed: 500,
        navigation: {
            prevEl: '.pro_prev02',
            nextEl: '.pro_next02',
        },
        breakpoints: {
            769: {
                centeredSlides: false,
            },
        },
    });





    $(".faq ul li:first-child").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".faq ul li:first-child").removeClass('on');
            $(".faq ul li:last-child").slideUp(400);
        } else {
            $(".faq ul li:first-child").removeClass('on');
            $(".faq ul li:last-child").slideUp(400);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(200);
        }
    });





    $(".ask .inner .app_box .contents_box .contents.field select").on("change", function(){
        let seVal = $(".ask .inner .app_box .contents_box .contents.field select").val();
        console.log(seVal);

        if ( seVal == "basic" ) {
            $(".ask .inner .app_box .contents_box .contents.detail select").css({
                "display" : "none",
            });
            $(".ask .inner .app_box .contents_box .contents.detail select.basic").css({
                "display" : "block",
            });
        } else if ( seVal == "certi_class" ) {
            $(".ask .inner .app_box .contents_box .contents.detail select").css({
                "display" : "none",
            });
            $(".ask .inner .app_box .contents_box .contents.detail select.certi_class").css({
                "display" : "block",
            });
        } else if ( seVal == "live_class" ) {
            $(".ask .inner .app_box .contents_box .contents.detail select").css({
                "display" : "none",
            });
            $(".ask .inner .app_box .contents_box .contents.detail select.live_class").css({
                "display" : "block",
            });
        } else if ( seVal == "edu_class" ) {
            $(".ask .inner .app_box .contents_box .contents.detail select").css({
                "display" : "none",
            });
            $(".ask .inner .app_box .contents_box .contents.detail select.edu_class").css({
                "display" : "block",
            });
        }
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

    $(".ask .inner .app_box .left .agree_box div:first-child p").click(function(){
        $(".info_bg").show();
        $(".info_wrap03").show();
    });

    $(".ask .inner .app_box .left .agree_box div:last-child p").click(function(){
        $(".info_bg").show();
        $(".info_wrap02").show();
    });
})
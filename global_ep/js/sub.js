$(function () {

    AOS.init();

    AOS.init({
        once: false,
    });

    // header
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").stop().slideUp();
    });

    $(".ham").click(function(){
        $("aside").animate({"right" : "0"});
        $(".aside_bg").show();
    });

    $("aside .close").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
    });

    $(".aside_bg").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
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

    $(".left_btn").click(function(){
        $(this).animate({"left" : "-40px"});
        $(".left_fix").animate({"left" : "0px"});
        $(".left_fix .close").show();
        $(".left_bg").show();
    });

    $(".left_fix .close").click(function(){
        $(".left_btn").animate({"left" : "0px"});
        $(".left_fix").animate({"left" : "-110px"});
        $(".left_fix .close").hide();
        $(".left_bg").hide();
    });

    $(".left_bg").click(function(){
        $(".left_btn").animate({"left" : "0px"});
        $(".left_fix").animate({"left" : "-110px"});
        $(".left_fix .close").hide();
        $(".left_bg").hide();
    });





    var swiper = new Swiper(".way_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });





    var swiper = new Swiper(".news_slide", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.news_next',
            prevEl: '.news_prev',
        },
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
    });





    var swiper = new Swiper(".shop_slide", {
        loop: true,
        spaceBetween: 40,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".b2c_slide", {
        loop: true,
        spaceBetween: 40,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".gover_slide", {
        loop: true,
        spaceBetween: 40,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });





    $(".faq_contents ul li:first-child").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".faq_contents ul li:first-child").removeClass('on');
            $(".faq_contents ul li:last-child").slideUp(200);
            $(".faq_contents ul li:first-child span").removeClass('on')
        } else {
            $(".faq_contents ul li:first-child").removeClass('on');
            $(".faq_contents ul li:last-child").slideUp(200);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(200);
            $(this).children("span").addClass('on');
        }
    });





    //개인정보취급방침 동의 팝업창
    $('footer .inner .top div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    //사이트이용약관 팝업창
    $('footer .inner .top div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });


    //정보무단수집거부 팝업창
    $('footer .inner .top div a:nth-child(3)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });
})
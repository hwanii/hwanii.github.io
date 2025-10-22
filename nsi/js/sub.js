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


    //top
    $( '.left_fix > a:last-child' ).click( function() {
        $( 'html, body' ).animate( { scrollTop : 0 }, 250 );
        return false;
    } );

    $(".bottom_fix > a:last-child").click(function(){
        $( 'html, body' ).animate( { scrollTop : 0 }, 250 );
        return false;
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





    $(".forum_contents .contents a").click(function(){
        $(".forum_pop").show();
        $(".forum_bg").show();
    });

    $(".forum_pop .top .close").click(function(){
        $(".forum_pop").hide();
        $(".forum_bg").hide();
    });

    $(".forum_bg").click(function(){
        $(".forum_pop").hide();
        $(".forum_bg").hide();
    });





    $('footer .inner .right a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner .right a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

    $('footer .inner .right a:nth-child(3)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.in_contents .bottom .left div a:nth-child(1)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.in_contents .bottom .left div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });
})
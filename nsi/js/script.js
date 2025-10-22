$(document).ready(function () {

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
        $("aside").animate({"right" : "-300px"});
        $(".aside_bg").hide();
    });

    $(".aside_bg").click(function(){
        $("aside").animate({"right" : "-300px"});
        $(".aside_bg").hide();
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




    var swiper = new Swiper(".main_slide01", {
        loop: true,
        spaceBetween: 30,
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

    var swiper = new Swiper(".main_slide02", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination02",
            clickable: true,
        },
    });

    var swiper = new Swiper(".main_slide03", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination03",
            clickable: true,
        },
    });

    var swiper = new Swiper(".main_slide04", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination04",
            clickable: true,
        },
    });





    var swiper = new Swiper(".business_slide_right", {
        loop: false,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
        direction: "vertical"
    });
    var swiper2 = new Swiper(".business_slide", {
        loop: false,
        effect: 'fade',
        direction: "vertical",
        mousewheel: {
            invert: false,
        },
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        thumbs: {
            swiper: swiper,
        },
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


    $(".forum_category li").click(function(){
        $(".forum_category li").removeClass("on");
        $(this).addClass("on");

        var rCate = $(this).index();

        $(".forum_contents .contents").removeClass("active");
        $(".forum_contents .contents").eq(rCate).addClass("active");
    });





    $('.bottom_fix .inner .right div a').click(function () {
        $('.info_wrap01').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('.bottom_fix_mob .inner .pri_contents .pri a').click(function () {
        $('.info_wrap01').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
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

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });
})
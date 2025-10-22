$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });




    $("header .center > img").click(function(){
        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });

    $('header .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);

    });

    $('aside .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();

    });

    $(".ham").click(function(){
        $("aside").animate({"right" : "0"});
        $(".aside_bg").show();
    });

    $("aside > span").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
    });





    var swiper = new Swiper(".main_slide", {
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


    var swiper = new Swiper(".career_slide", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination01",
            clickable: true,
        },
    });


    var swiper = new Swiper(".mc_slide", {
        loop: false,
        spaceBetween: 65,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev01",
            nextEl: ".next01",
        },
    });



    $(".live_category li").click(function(){
        $(".live_category li").removeClass("on");
        $(this).addClass("on");

        var lcate = $(this).index();

        $(".live_contents").removeClass("active");
        $(".live_contents").eq(lcate).addClass("active");
    });

    var swiper = new Swiper(".live_slide01", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev02",
            nextEl: ".next02",
        },
    });

    var swiper = new Swiper(".live_slide02", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev03",
            nextEl: ".next03",
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".live_slide03", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev04",
            nextEl: ".next04",
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".live_slide04", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev05",
            nextEl: ".next05",
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".live_slide05", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            prevEl: ".prev06",
            nextEl: ".next06",
        },
        observer: true,
        observeParents: true,
    });








    $(".bottom_fix .inner .right div div").click(function(){
        var fixCheck = $(".bottom_fix .inner .right div div input:checked").length;

        if ( fixCheck == 0 ) {
            $(".bottom_fix .inner .right div div input:checkbox").attr("checked", true);
            $(".bottom_fix .inner .right div div span i").css({"display" : "block"});
        } else {
            $(".bottom_fix .inner .right div div input:checkbox").attr("checked", false);
            $(".bottom_fix .inner .right div div span i").css({"display" : "none"});
        }
    });

    $(".bottom_fix_mob .inner .top").click(function(){
        $(this).parent().parent().toggleClass("on");
    });

    $(".bottom_fix_mob .inner .pri_contents .pri div").click(function(){
        var mobCheck = $(".bottom_fix_mob .inner .pri_contents .pri div input:checked").length;

        if ( mobCheck == 0 ) {
            $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", true);
            $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "block"});
        } else {
            $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", false);
            $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "none"});
        }
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

    $('footer .inner .middle .right div a:nth-child(1)').click(function () {
        $('.info_wrap02').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

    $('footer .inner .middle .right div a:nth-child(2)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });
})
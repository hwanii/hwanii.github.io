$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    })

    // header scroll
    // $(function() {
    //     $(window).on("scroll", function() {
    //         if($(window).scrollTop() > 50) {
    //             $("header").addClass("header_fixed");
    //             $("header .inner h1 a img").attr("src","./img/logo05.png");
    //             // $(".ham-btn img").attr("src","./img/ham.png");
    //         } else {
    //             //remove the background property so it comes transparent again (defined in your css)
    //             $("header").removeClass("header_fixed");
    //             $("header .inner h1 a img").attr("src","./img/logo.png");
    //             //  $(".ham-btn img").attr("src","./img/w-ham.png");
    //         }
    //     });
    // });

    // header
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").stop().slideUp();
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
        $("aside").show(200);
    });

    $(".close").click(function(){
        $("aside").hide(200);
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


    $(".information .inner .left .map ul li").click(function(){
        $(".information .inner .left .map ul li").removeClass("on");
        $(this).addClass("on");
            
        var i = $(this).index();
        
        $(".information .inner .left .map .contents .content").removeClass("active");
        $(".information .inner .left .map .contents .content").eq(i).addClass("active");
    });


    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    var swiper = new Swiper(".swiper_business", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        }
    });

    var swiper = new Swiper(".swiper_gal", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next02',
            prevEl: '.prev02',
        }
    });

    var swiper = new Swiper(".swiper_platform", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next03',
            prevEl: '.prev03',
        }
    });


    $('footer .inner .footer_top .right a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner .footer_top .right a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

    $(".inquiry .inner .contents li").click(function(){
        $(".pass_bg").show();
        $(".pass_pop").css({"display" : "flex"});
    });

    $(".request .inner .re_contents a").click(function(){
        $(".pass_bg").show();
        $(".pass_pop").css({"display" : "flex"});
    });

    $(".pass_bg").click(function(){
        $(".pass_bg").hide();
        $(".pass_pop").css({"display" : "none"});
    });

    $(".pass_pop .close_btn").click(function(){
        $(".pass_bg").hide();
        $(".pass_pop").css({"display" : "none"});
    });


})
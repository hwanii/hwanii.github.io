$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $(".ham").click(function(){
        $("aside").animate({"right" : "0px"});
        $(".aside_bg").show();
    });

    $(".aside_bg").click(function(){
        $("aside").animate({"right" : "-240px"});
        $(".aside_bg").hide();
    });

    $("aside .close").click(function(){
        $("aside").animate({"right" : "-240px"});
        $(".aside_bg").hide();
    });

    $("aside .gnb li a").click(function(){
        $("aside").animate({"right" : "-240px"});
        $(".aside_bg").hide();
    });





    $('.gnb li a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 50 }, 500);

        return false;
    });

    var scrollLink = $('.page_scroll');
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 200;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });

        var mainHeight = $(window).scrollTop();
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

    var swiper = new Swiper(".index_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".index_slide .swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });

    var swiper = new Swiper(".plants_slide", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 20,
        centeredSlides: true,
        loopAdditionalSlides : 1,
        speed: 1000,
        navigation: {
            prevEl: '.plants_prev',
            nextEl: '.plants_next',
        },
        breakpoints: {
            601: {
                centeredSlides: false,
            },
        },
    });

    var swiper = new Swiper(".certi_slide", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 20,
        centeredSlides: true,
        loopAdditionalSlides : 1,
        speed: 1000,
        navigation: {
            prevEl: '.certi_prev',
            nextEl: '.certi_next',
        },
        breakpoints: {
            769: {
                centeredSlides: false,
            },
        },
    });





    var swiper = new Swiper(".refer_slide", {
        loop: true,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        spaceBetween: 50,
        speed: 1000,
        autoplay : {
            delay : 4000,
            disableOnInteraction : false,
        },
        navigation: {
            prevEl: '.refer_prev',
            nextEl: '.refer_next',
        },
    });





    $("#service .process .process_category li").click(function(){
        $("#service .process .process_category li").removeClass("on");
        $(this).addClass("on");

        let scli = $(this).index();

        $("#service .process .contents_box .contents").removeClass("active");
        $("#service .process .contents_box .contents").eq(scli).addClass("active");
    });

    $("#service .process .contents_box .contents").click(function(){
        $("#service .process .contents_box .contents").removeClass("active");
        $(this).addClass("active");

        let scli = $(this).index();

        $("#service .process .process_category li").removeClass("on");
        $("#service .process .process_category li").eq(scli).addClass("on");
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

    $("#request .app_box .agree_box div:first-child p").click(function(){
        $(".info_bg").show();
        $(".info_wrap01").show();
    });

    $("#request .app_box .agree_box div:last-child p").click(function(){
        $(".info_bg").show();
        $(".info_wrap02").show();
    });
})
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

    var swiper = new Swiper(".business_slide01", {
        loop: true,
        spaceBetween: 40,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        pagination: {
            el: ".swiper-pagination01",
            clickable: true,
        },
    });





    $(".reference_category li").click(function(){
        $(".reference_category li").removeClass("on");
        $(this).addClass("on");

        var rCate = $(this).index();

        $(".reference .inner .contents .content").removeClass("active");
        $(".reference .inner .contents .content").eq(rCate).addClass("active");
    });




    var swiper = new Swiper(".part_slide", {
        loop: true,
        spaceBetween: 16,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        },
    });





    $(".contact .inner .left .pri label").click(function(){
        var fixCheck = $(".contact .inner .left .pri label input:checked").length;

        if ( fixCheck == 0 ) {
            $(".contact .inner .left .pri label input:checkbox").attr("checked", true);
            $(".contact .inner .left .pri label i img").css({"display" : "block"});
        } else {
            $(".contact .inner .left .pri label input:checkbox").attr("checked", false);
            $(".contact .inner .left .pri label i img").css({"display" : "none"});
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
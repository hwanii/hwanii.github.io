$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    })

    // header
    $("header .gnb > li").mouseenter(function(){
        $(".gnb_back").stop().slideDown();
        $("header .gnb ul").stop().slideDown();
        $("header .gnb ul").addClass('active');
    });

    $("header .gnb > li").mouseleave(function(){
        $(".gnb_back").stop().slideUp();
        $("header .gnb ul").stop().slideUp();
        $("header .gnb ul").removeClass('active');
    });

    $(".gnb_back").mouseenter(function(){
        $(".gnb_back").stop().slideDown();
        $("header .gnb ul").stop().slideDown();
        $("header").css({"background-color": "#1a1a1a"});
        $("header .h-inner .gnb > li").addClass('active');
        $("header .gnb ul").addClass('active');
    });

    $(".gnb_back").mouseleave(function(){
        $(".gnb_back").stop().slideUp();
        $("header .gnb ul").stop().slideUp();
        $("header").css({"background-color": "rgba(0, 0, 0, 0.5)"});
        $("header .h-inner .gnb > li").removeClass('active');
        $("header .gnb ul").removeClass('active');
    });

    $("header .gnb > li").mouseenter(function(){
        $("header").css({"background-color": "#1a1a1a"});
        $("header .h-inner .gnb > li").addClass('active');
        $("header .gnb ul").addClass('active');
    });

    $("header .gnb > li").mouseleave(function(){
        $("header").css({"background-color": "rgba(0, 0, 0, 0.5)"});
        $("header .h-inner .gnb > li").removeClass('active');
        $("header .gnb ul").removeClass('active');
    });




    // 햄버거 메뉴
    $(".ham-btn").click(function(){
        $("aside").animate({"right" : "0px"},300);
        $(".back_bg").show();
    });
    
    $(".close").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back_bg").hide();
    });
    
    $(".back_bg").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back_bg").hide();
    });

    // aside
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


    //contents_mid
    var swiper = new Swiper(".contents_mid", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-btn-next01',
            prevEl: '.swiper-btn-prev01',
        }
    });

    $(".port_cate li").click(function(){
        $(".port_cate li").removeClass("on");
        $(this).addClass("on");

        var i = $(this).index();

        $(".portfolio .inner .contents .content").removeClass("active");
        $(".portfolio .inner .contents .content").eq(i).addClass("active");
    });


    var swiper = new Swiper(".aptitude_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-btn-next02',
            prevEl: '.swiper-btn-prev02',
        }
    });


    //개인정보취급방침 동의 팝업창
    $('footer .inner .footer_top .right a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    //사이트이용약관 팝업창
    $('footer .inner .footer_top .right a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });


    //정보무단수집거부 팝업창
    $('footer .inner .footer_top .right a:nth-child(3)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });


    //개인정보수집이용동 팝업창
    $('.pri_go').click(function () {
        $('.info_wrap04').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap04').css("display", "none")
    });


    //웹사이트 팝업창
    $('.site_go').click(function () {
        $('.info_wrap05').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap05').css("display", "none")
    });

    $(".faq-board ul li:first-child").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".faq-board ul li:first-child").removeClass('on');
            $(".faq-board ul li:last-child").slideUp(200);
            $(".faq-board ul li:first-child span").removeClass('on')
        } else {
            $(".faq-board ul li:first-child").removeClass('on');
            $(".faq-board ul li:last-child").slideUp(200);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(200);
            $(this).children("span").addClass('on');
        }
    });


})
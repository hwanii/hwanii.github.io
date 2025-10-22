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


    var swiper = new Swiper(".slide_main", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    var swiper = new Swiper(".head_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        }
    });

    var swiper = new Swiper(".head_slide01", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next02',
            prevEl: '.prev02',
        }
    });

    var swiper = new Swiper(".schedule_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next03',
            prevEl: '.prev03',
        }
    });

    $(".branch .inner .map_cate ul li").click(function(){
        $(".branch .inner .map_cate ul li").removeClass("on");
        $(this).addClass("on");
            
        var i = $(this).index();
        
        $(".branch .inner .map_info_contents .map_info").removeClass("active");
        $(".branch .inner .map_info_contents .map_info").eq(i).addClass("active");

        $(".branch .inner .map_pos .map_contents").removeClass("active");
        $(".branch .inner .map_pos .map_contents").eq(i).addClass("active");
    });

    $(".branch .inner01 .map_cate ul li").click(function(){
        $(".branch .inner01 .map_cate ul li").removeClass("on");
        $(this).addClass("on");
            
        var i = $(this).index();
        
        $(".branch .inner01 .map_info_contents .map_info").removeClass("active");
        $(".branch .inner01 .map_info_contents .map_info").eq(i).addClass("active");

        $(".branch .inner01 .map_pos .map_contents").removeClass("active");
        $(".branch .inner01 .map_pos .map_contents").eq(i).addClass("active");
    });


    $(".qna .inner .qna_contents ul li").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".qna .inner .qna_contents ul li:first-child").removeClass('on');
            $(".qna .inner .qna_contents ul li:last-child").slideUp(200);
            $(".qna .inner .qna_contents li:first-child span").removeClass('on')
        } else {
            $(".qna .inner .qna_contents ul li:first-child").removeClass('on');
            $(".qna .inner .qna_contents ul li:last-child").slideUp(200);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(200);
        }
    });


    $(".sketch_contents img").click(function(){
        var i = $(this).index();
        $(".sketch_pop_contents").removeClass("on");
        $(".sketch_pop_contents").eq(i).addClass("on");

        $(".sketch_bg").show();
    });

    $(".sketch_bg").click(function(){
        $(this).hide();
        $(".sketch_pop_contents").removeClass("on");
    });

    $(".sketch_pop_contents .close").click(function(){
        $(".sketch_bg").hide();
        $(".sketch_pop_contents").removeClass("on");
    });


})
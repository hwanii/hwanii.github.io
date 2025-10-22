$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $("header .inner > a").click(function(){
        $("aside").animate({"top" : "0"});
    });
    $("aside .close").click(function(){
        $("aside").animate({"top" : "-100%"});
    });





    var swiper = new Swiper(".main_slide", {
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
    });

    var swiper = new Swiper(".sub_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
    });





    $(".reservation_pop_btn a:last-child").click(function(){
        $(".keep_pop").css({"display" : "flex"});
        $(".keep_pop_bg").show();
    });
    $(".keep_pop .close").click(function(){
        $(".keep_pop").css({"display" : "none"});
        $(".keep_pop_bg").hide();
    });
    $(".keep_pop_bg").click(function(){
        $(".keep_pop").css({"display" : "none"});
        $(".keep_pop_bg").hide();
    });





    $("#checkall").click(function(){
        if ( $("#checkall").prop("checked") ) {
            $("input[id=chk]").prop("checked", true);
        } else {
            $("input[id=chk]").prop("checked", false);
        }
    });

    $(".total a").click(function(){
        if ( $(this).siblings("#checkall").prop("checked") ) {
            $("#checkall").prop("checked", false);
            $("input[id=chk]").prop("checked", false);
        } else {
            $("#checkall").prop("checked", true);
            $("input[id=chk]").prop("checked", true);
        }
    });

    $(".individual a").click(function(){
        if ( $(this).siblings("#chk").prop("checked") ) {
            $(this).siblings("#chk").prop("checked", false);
        } else {
            $(this).siblings("#chk").prop("checked", true);
        }
    });





    $(".estimate_btn i").click(function(){
        $(".estimate_pop01").css({"display" : "flex"});
        $(".estimate_pop_bg").show();
    });
    $(".estimate_pop01 .close").click(function(){
        $(".estimate_pop01").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });
    $(".estimate_pop_bg").click(function(){
        $(".estimate_pop01").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });

    $(".estimate_btn a:last-child").click(function(){
        $(".estimate_pop03").css({"display" : "flex"});
        $(".estimate_pop_bg").show();
    });
    $(".estimate_pop03 .close").click(function(){
        $(".estimate_pop03").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });
    $(".estimate_pop_bg").click(function(){
        $(".estimate_pop03").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });
    $(".estimate_btn01 a:last-child").click(function(){
        $(".estimate_pop03").css({"display" : "flex"});
        $(".estimate_pop_bg").show();
    });





    $(".faq_category li").click(function(){
        $(".faq_category li").removeClass("on");
        $(this).addClass("on");

        var faq_cate = $(this).index();

        $(".faq_box .faq_contents").removeClass("active");
        $(".faq_box .faq_contents").eq(faq_cate).addClass("active");
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





    $('.estimate_cost .left .input_contents:nth-child(3) a').click(function () {
        $('.info_wrap01').css("display", "block");
        $('.info_wrap_bg').css("display", "block");
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none");
        $('.info_wrap_bg').css("display", "none");
    });
    $('.estimate_cost .left .input_contents:nth-child(4) a').click(function () {
        $('.info_wrap02').css("display", "block");
        $('.info_wrap_bg').css("display", "block");
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none");
        $('.info_wrap_bg').css("display", "none");
    });
    $('.estimate_cost .left .input_contents:nth-child(5) a').click(function () {
        $('.info_wrap03').css("display", "block");
        $('.info_wrap_bg').css("display", "block");
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none");
        $('.info_wrap_bg').css("display", "none");
    });





    $(".upload_btn").click(function(){
        $(".upload_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".upload_btn_pop .close").click(function(){
        $(".upload_btn_pop").hide();
        $(".pro_bg").hide();
    });

    $(".collect_btn").click(function(){
        $(".collect_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".collect_btn_pop .close").click(function(){
        $(".collect_btn_pop").hide();
        $(".pro_bg").hide();
    });

    $(".delivery_btn").click(function(){
        $(".delivery_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".delivery_btn_pop .close").click(function(){
        $(".delivery_btn_pop").hide();
        $(".pro_bg").hide();
    });

    $(".pro_bg").click(function(){
        $(this).hide();
        $(".upload_btn_pop").hide();
        $(".collect_btn_pop").hide();
        $(".delivery_btn_pop").hide();
    })


    var swiper = new Swiper(".collect_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.prev01',
            nextEl: '.next01',
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".delivery_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.prev02',
            nextEl: '.next02',
        },
        observer: true,
        observeParents: true,
    });





    $(".attached_btn").click(function(){
        $(".attached_btn_pop").show();
        $(".emergency_bg").show();
    });
    $(".attached_btn_pop .close").click(function(){
        $(".attached_btn_pop").hide();
        $(".emergency_bg").hide();
    });

    $(".attached_contents a").click(function(){
        $(".attached_chk_btn_pop").show();
        $(".emergency_bg").show();
    });
    $(".attached_chk_btn_pop .close").click(function(){
        $(".attached_chk_btn_pop").hide();
        $(".emergency_bg").hide();
    });

    var swiper = new Swiper(".chk_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.prev03',
            nextEl: '.next03',
        },
        observer: true,
        observeParents: true,
    });





    var swiper = new Swiper(".top_slide", {
        loop: false,
        freeMode: true,
        watchSlidesProgress: true,
        centeredSlides: true,
    });
    var swiper2 = new Swiper(".bottom_slide", {
        loop: false,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        thumbs: {
            swiper: swiper,
        },
    });





    $(".staff_reservation_btn").click(function(){
        $(".staff_reservation_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".staff_reservation_btn_pop .close").click(function(){
        $(".staff_reservation_btn_pop").hide();
        $(".pro_bg").hide();
    });

    $(".staff_moving_btn").click(function(){
        $(".staff_moving_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".staff_moving_btn_pop .close").click(function(){
        $(".staff_moving_btn_pop").hide();
        $(".pro_bg").hide();
    });

    $(".staff_arrive_btn").click(function(){
        $(".staff_arrive_btn_pop").show();
        $(".pro_bg").show();
    });
    $(".staff_arrive_btn_pop .close").click(function(){
        $(".staff_arrive_btn_pop").hide();
        $(".pro_bg").hide();
    });

    var swiper = new Swiper(".reservation_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.prev01',
            nextEl: '.next01',
        },
        observer: true,
        observeParents: true,
    });





    $(".search_contents .contents .input_check").click(function(){
        var inputCheck = $(this).find("input:checked").length;

        if ( inputCheck == 0 ) {
            $(this).find("input:checkbox").attr("checked", true);
            $(this).find("img").css({"display" : "block"});
        } else {
            $(this).find("input:checkbox").attr("checked", false);
            $(this).find("img").css({"display" : "none"});
        }
    });





    $(".hotel_input").keydown(function(){
        $(this).siblings(".hotel_pop").show();
    });

    $(".reservation_contents .input_contents .bottom .hotel_pop").click(function(){
        $(this).hide();
    });





    $(".cargo_sel").click(function(){
        $(".cargo_sel").removeClass("on");
        $(this).addClass("on");

        let cAdd = $(this).index();

        $(".cargo_add .cargo_add_contents").removeClass("active");
        $(".cargo_add .cargo_add_contents").eq(cAdd).addClass("active");
    });


    // $(".cargo_add_btn").click(function(){
    //     $(".estimate_pop03").css({"display" : "flex"});
    //     $(".estimate_pop_bg").show();
    // });
    $(".estimate_pop03 .close").click(function(){
        $(".estimate_pop03").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });
    $(".estimate_pop_bg").click(function(){
        $(".estimate_pop03").css({"display" : "none"});
        $(".estimate_pop_bg").hide();
    });
    $(".estimate_btn01 a:last-child").click(function(){
        $(".estimate_pop03").css({"display" : "flex"});
        $(".estimate_pop_bg").show();
    });
})
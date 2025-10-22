$(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    var headerHeight = $("header").innerHeight();
    var gnbUl = $("header .gnb ul").innerHeight();
    var totalH = headerHeight + gnbUl

    $("header .gnb").mouseenter(function(e){
        $("header").stop().animate({"height" : totalH});
        $("header .gnb ul").css({"display" : "block"});
        $("header .gnb ul").animate({"opacity" : "1"});
        $("header .header_slide_inner").animate({"opacity" : "1"});
        setTimeout(function(){
            $("header .header_slide_inner").css({"visibility" : "visible"});
        },220);
    });

    $("header").mouseleave(function(e){
        $("header").stop().animate({"height" : headerHeight});
        $("header .gnb ul").animate({"opacity" : "0"});
        setTimeout(function(){
            $("header .gnb ul").css({"display" : "none"});
        },400)
        $("header .header_slide_inner").animate({"opacity" : "0"});
        setTimeout(function(){
            $("header .header_slide_inner").css({"visibility" : "hidden"});
        },220);
    });

    $(".menu_btn").click(function(e){
        $("header").stop().animate({"height" : totalH});
        $("header .gnb ul").css({"display" : "block"});
        $("header .gnb ul").animate({"opacity" : "1"});
        $("header .header_slide_inner").animate({"opacity" : "1"});
        setTimeout(function(){
            $("header .header_slide_inner").css({"visibility" : "visible"});
        },220);
    });





    $(".header_select div").click(function(){
        $(this).parents(".header_select").toggleClass("on");
        if ( $(".header_select").hasClass("on") == true ) {
            $(".header_select.on ul").animate({"height" : "360px"});
            $(".header_select.on ul").css({"display" : "block"});
        } else {
            $(".header_select ul").animate({"height" : "0px"});
            setTimeout(function(){
                $(".header_select ul").css({"display" : "none"});
            },300);
        }
    });

    $(".header_select ul").mouseleave(function(){
        $(this).parents().removeClass("on");
        $(".header_select ul").animate({"height" : "0px"});
        setTimeout(function(){
            $(".header_select ul").css({"display" : "none"});
        },300);
    });





    $(".bottom_fix .top li:first-child").click(function(){
        var btHeight = $(".bottom_fix .bottom").innerHeight();

        if ( btHeight == 0 ) {
            $(".bottom_fix .bottom").stop().animate({"height" : "200px"});
            $(".bottom_fix .bottom .contents01").css({"display" : "flex"});
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "1"});
            $(".bottom_fix .top li").removeClass("on");
            $(this).addClass("on");
        }

        if ( $(this).hasClass("on") == false ) {
            $(".bottom_fix .top li").removeClass("on");
            $(this).addClass("on");
            setTimeout(function(){
                $(".bottom_fix .bottom .contents02").css({"display" : "none"});
            },400)
            $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "0"});
            $(".bottom_fix .bottom .contents01").css({"display" : "flex"});
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "1"});
        } else if ( $(this).hasClass("on") == true && btHeight == 200 ) {
            $(".bottom_fix .bottom").stop().animate({"height" : "0"});
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "0"});
        }
    });


    $(".bottom_fix .top li:last-child").click(function(){
        var btHeight = $(".bottom_fix .bottom").innerHeight();
        console.log(btHeight);

        if ( btHeight == 0 ) {
            $(".bottom_fix .bottom").stop().animate({"height" : "200px"});
            $(".bottom_fix .bottom .contents02").css({"display" : "flex"});
            $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "1"});
            $(".bottom_fix .top li").removeClass("on");
            $(this).addClass("on");
            $(".bottom_fix .bottom .contents01").css({"display" : "none"});
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "0"});
        }

        if ( $(this).hasClass("on") == false ) {
            $(".bottom_fix .top li").removeClass("on");
            $(this).addClass("on");
            setTimeout(function(){
                $(".bottom_fix .bottom .contents01").css({"display" : "none"});
            },400)
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "0"});
            $(".bottom_fix .bottom .contents02").css({"display" : "flex"});
            $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "1"});
        } else if ( $(this).hasClass("on") == true && btHeight == 200 ) {
            $(".bottom_fix .bottom").stop().animate({"height" : "0"});
            $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "0"});
            setTimeout(function(){
                $(".bottom_fix .bottom .contents02").css({"display" : "none"});
                $(".bottom_fix .top li").removeClass("on");
                $(".bottom_fix .top li:first-child").addClass("on");
            },400);
        }
    });





    var swiper = new Swiper(".header_slide", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 15,
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.header_prev',
            nextEl: '.header_next',
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
        observer: true,
        observeParents: true,
    });





    var swiper = new Swiper(".intro_slide01", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper_pagination01",
            clickable: true,
        },
    });

    var swiper = new Swiper(".intro_slide02", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper_pagination02",
            clickable: true,
        },
    });





    $(".box_cate").click(function(){
		if( $(this).children("li:first-child").hasClass("on") == true ) {
			$(this).children("li").removeClass("on");
			$(this).children("li:last-child").addClass("on");

			$(this).siblings(".contents").children(".top_contents").css({"display" : "none"});
			$(this).siblings(".contents").children(".top_contents").css({"opacity" : "0"});
			$(this).siblings(".contents").children(".cocoen_box").animate({"opacity" : "1"}, 800);
		} else {
			$(this).children("li").removeClass("on");
			$(this).children("li:first-child").addClass("on");

			$(this).siblings(".contents").children(".cocoen_box").css({"opacity" : "0"});
			$(this).siblings(".contents").children(".top_contents").css({"display" : "flex"});
			$(this).siblings(".contents").children(".top_contents").animate({"opacity" : "1"}, 800);
		}
	});




    var menu = ['1단계', '2단계', '3단계', '4단계']
    var swiper = new Swiper(".skin02_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper_pagination03",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (menu[index]) + '</span>';
            }
        },
        navigation: {
            prevEl: '.skin_prev',
            nextEl: '.skin_next'
        },
    });





    $(".true .click_event li").click(function(){
        if ( $(this).hasClass("on") == true ) {
            $(this).removeClass("on");
            $(this).children(".normal").css({"display" : "none"});
            $(this).children(".normal").css({"opacity" : "0"});
            $(this).children(".click").css({"display" : "flex"});
            $(this).children(".click").animate({"opacity" : "1"},300);
        } else {
            $(this).addClass("on");
            $(this).children(".click").css({"display" : "none"});
            $(this).children(".click").css({"opacity" : "0"});
            $(this).children(".normal").css({"display" : "flex"});
            $(this).children(".normal").animate({"opacity" : "1"},300);
        }
    });





    $(".faq_contents ul li:first-child").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".faq_contents ul li:first-child").removeClass('on');
            $(".faq_contents ul li:last-child").slideUp(300);
        } else {
            $(".faq_contents ul li:first-child").removeClass('on');
            $(".faq_contents ul li:last-child").slideUp(300);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(300);
        }
    });





    $(".case_category li").click(function(){
        $(".case_category li").removeClass("on");
        $(this).addClass("on");

        var caseIn = $(this).index();

        $(".case_box .report_contents").removeClass("active");
        $(".case_box .report_contents").eq(caseIn).addClass("active");
    });





    $('.pimple_box .right .contents a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({scrollTop: $(link).offset().top - 300}, 500);

        $(".report .inner .case_category li").removeClass("on");
        $(link).addClass("on");
        $(".case_box .report_contents").removeClass("active");
        var linkIn = $(link).index();
        $(".case_box .report_contents").eq(linkIn).addClass("active");
    });


    var swiper = new Swiper(".pimple_slide01", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides: 1,
        spaceBetween: 30,
        pagination: {
            el: ".pimple_slide01 .swiper-pagination",
            clickable: true,
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".pimple_slide02", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides: 1,
        spaceBetween: 30,
        pagination: {
            el: ".pimple_slide02 .swiper-pagination",
            clickable: true,
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".pimple_slide03", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides: 1,
        spaceBetween: 30,
        pagination: {
            el: ".pimple_slide03 .swiper-pagination",
            clickable: true,
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".pimple_slide04", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides: 1,
        spaceBetween: 30,
        pagination: {
            el: ".pimple_slide04 .swiper-pagination",
            clickable: true,
        },
        observer: true,
        observeParents: true,
    });


    $(".pimple_box .right .pim_box_category li").click(function(){
        $(".pimple_box .right .pim_box_category li").removeClass("on");
        $(this).addClass("on");

        var pimLi = $(this).index();

        $(".pimple_box .right .contents").removeClass("active");
        $(".pimple_box .right .contents").eq(pimLi).addClass("active");

        $(".pimple_box .left .contents p").removeClass("on");
        $(".pimple_box .left .contents p").eq(pimLi).addClass("on");
    });


    $(".pimple_box .left .contents p").click(function(){
        $(".pimple_box .left .contents p").removeClass("on");
        $(this).addClass("on");

        var pimLi = $(this).index();

        $(".pimple_box .right .contents").removeClass("active");
        $(".pimple_box .right .contents").eq(pimLi).addClass("active");

        $(".pimple_box .right .pim_box_category li").removeClass("on");
        $(".pimple_box .right .pim_box_category li").eq(pimLi).addClass("on");
    });





    $(".pimple_box01 .right .pim_box_category li").click(function(){
        $(".pimple_box01 .right .pim_box_category li").removeClass("on");
        $(this).addClass("on");

        var pimLi = $(this).index();

        $(".pimple_box01 .right .contents").removeClass("active");
        $(".pimple_box01 .right .contents").eq(pimLi).addClass("active");

        $(".pimple_box01 .left .contents").removeClass("on");
        $(".pimple_box01 .left .contents").eq(pimLi).addClass("on");
    });

    $(".pimple_box01 .left .contents").click(function(){
        $(".pimple_box01 .left .contents").removeClass("on");
        $(this).addClass("on");

        var pimLi = $(this).index();

        $(".pimple_box01 .right .contents").removeClass("active");
        $(".pimple_box01 .right .contents").eq(pimLi).addClass("active");

        $(".pimple_box01 .right .pim_box_category li").removeClass("on");
        $(".pimple_box01 .right .pim_box_category li").eq(pimLi).addClass("on");
    });

    $('.pimple_box01 .right .contents a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({scrollTop: $(link).offset().top - 300}, 500);

        $(".report .inner .case_category li").removeClass("on");
        $(".case_box .report_contents").removeClass("active");

        console.log(link);

        if ( link == "#boxcar" ) {
            $(".report .inner .case_category li:nth-child(1)").addClass("on");
            $(".case_box .report_contents:nth-child(1)").addClass("active");
        } else if ( link == "#icepick" ) {
            $(".report .inner .case_category li:nth-child(2)").addClass("on");
            $(".case_box .report_contents:nth-child(2)").addClass("active");
        } else if ( link == "#rolling" ) {
            $(".report .inner .case_category li:nth-child(3)").addClass("on");
            $(".case_box .report_contents:nth-child(3)").addClass("active");
        }
    });





    $(".his_contents .contents a").click(function(){
        var his_con = $(this).parents(".contents").index();

        $(".history_pop").css({"display" : "flex"});
        $(".history_pop .contents").eq(his_con).show();
    });

    $(".history_pop").click(function(){
        $(".history_pop").css({"display" : "none"});
        $(".history_pop .contents").hide();
    });





    $('.rodam_slide_box').each(function() {
        var thumbSwiper = new Swiper('.rodam_slide01', {
            spaceBetween: 10,
            slidesPerView: 4,
            loopedSlides: 4,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            loop: true,
        });
        var mainSwiper = new Swiper('.rodam_slide', {
            effect: "fade",
            spaceBetween: 10,
            allowTouchMove: false,
            loop: true,
            loopedSlides: 4,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
            prevEl: '.you_prev',
            nextEl: '.you_next'
            },
        });
        mainSwiper.controller.control = thumbSwiper;
        thumbSwiper.controller.control = mainSwiper;
    });





    $(".left_fix .close").click(function(){
        $(".left_fix").stop().animate({"left" : "-220px"},300);
        setTimeout(function(){
            $(".left_fix_btn").stop().animate({"left" : "0px"},300);
        },300);
    });

    $(".left_fix_btn").click(function(){
        $(this).stop().animate({"left" : "-50px"},300);
        setTimeout(function(){
            $(".left_fix").stop().animate({"left" : "0px"},300);
        },300);
    });

    $('.left_fix a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);
    });

    var scrollLink = $('.page_scroll');
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 200;

            if (sectionOffset <= scrollbarLocation) {
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
            }
        });
    });





    $(".top_btn").click(function(){
        $( 'html, body' ).animate( { scrollTop : 0 }, 250 );
        return false;
    });





    $(".right_fix a:nth-child(2)").click(function(){
        $(".reservation_pop").show();
        $(".pop_bg").show();
    });

    $(".reservation_pop .close").click(function(){
        $(".reservation_pop").hide();
        $(".pop_bg").hide();
    });

    $(".pop_bg").click(function(){
        $(".reservation_pop").hide();
        $(this).hide();
    });





    $(".report_fix .close").click(function(){
        $(".report_fix").stop().animate({"left" : "-140px"},300);
        setTimeout(function(){
            $(".report_fix_btn").stop().animate({"left" : "0px"},300);
        },300);
    });

    $(".report_fix_btn").click(function(){
        $(this).stop().animate({"left" : "-50px"},300);
        setTimeout(function(){
            $(".report_fix").stop().animate({"left" : "20px"},300);
        },300);
    });





    $('footer .inner .center .top a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner .center .top a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });





    $(".right_fix a:nth-child(3)").click(function(){
        $(".bottom_fix .bottom").stop().animate({"height" : "200px"});
        $(".bottom_fix .bottom .contents02").css({"display" : "flex"});
        $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "1"});
        $(".bottom_fix .top li").removeClass("on");
        $(".bottom_fix .top li:last-child").addClass("on");
        $(".bottom_fix .bottom .contents01").css({"display" : "none"});
        $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "0"});
    });
})
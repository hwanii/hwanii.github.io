$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $("header .inner .right img:first-child").click(function(){
        if ( $(this).hasClass("on") ==  true) {
            $("header .inner .right img:last-child").addClass("on");
            $(this).removeClass("on");
            $(".left_menu").animate({"left" : 0});
            $(".mob_bg").show();
            $("aside").animate({"right" : "-300px"});
            $("aside .top").animate({"right" : "-300px"});
            $(".q_menu_wrap").removeClass("on");
            $(".q_menu_btn").css({"display" : "block"});
            $(".mob_bottom_fix .bottom").animate({"height" : "0px"});
            $(".fix_bg").hide();
        } else {
            $(this).addClass("on");
            $(".left_menu").animate({"left" : "-270px"});
            $(".mob_bg").hide();
        }
    });

    $(".left_menu .close").click(function(){
        $(".left_menu").animate({"left" : "-270px"});
        $(".mob_bg").hide();
    });


    $("header .inner .right img:last-child").click(function(){
        if ( $(this).hasClass("on") ==  true) {
            $("header .inner .right img:first-child").addClass("on");
            $(this).removeClass("on");
            $("aside").animate({"right" : "0px"});
            $("aside .top").animate({"right" : "0px"});
            $(".mob_bg").show();
            $(".left_menu").animate({"left" : "-270px"});
            $(".q_menu_wrap").removeClass("on");
            $(".q_menu_btn").css({"display" : "block"});
            $(".mob_bottom_fix .bottom").animate({"height" : "0px"});
            $(".fix_bg").hide();
        } else {
            $(this).addClass("on");
            $("aside").animate({"right" : "-300px"});
            $("aside .top").animate({"right" : "-300px"});
            $(".mob_bg").hide();
        }
    });

    $("aside .close").click(function(){
        $("header .inner .right img:last-child").addClass("on");
        $("aside").animate({"right" : "-300px"});
        $("aside .top").animate({"right" : "-300px"});
        $(".mob_bg").hide();
    });

    $("aside ul > li > a").click(function(){
        if( $(this).parent().hasClass('on') == true ){
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $("ul > li").removeClass('on');
            $(".depth").slideUp();
            $("aside > ul").css({"height": "421px"});
        }else{
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $("ul > li").removeClass('on');
            $(".depth").slideUp();
            $(this).parent().addClass("on");
            $(this).next().slideDown();
            $("aside > ul").css({"height": "735px"});
        }
    });





    $(".q_menu_btn").click(function(){
        $(this).css({"display" : "none"});
        $(".q_menu_wrap").addClass("on");
    });

    $(".q_menu_wrap .bg").click(function(){
        $(".q_menu_wrap").removeClass("on");
        $(".q_menu_btn").css({"display" : "block"});
    });

    $(".q_menu_wrap .center").click(function(){
        $(".q_menu_wrap").removeClass("on");
        $(".q_menu_btn").css({"display" : "block"});
    });

    $(".q_menu_wrap .btn.counsel").click(function(){
        $(".q_menu_wrap").removeClass("on");
        $(".reservation_pop").show();
        $(".pop_bg").show();
        $(".b_you").css({"display" : "block"});
        $(".q_menu_btn").css({"display" : "block"});
    });

    $(".reservation_pop .close").click(function(){
        $(".reservation_pop").hide();
        $(".pop_bg").hide();
    });

    $(".pop_bg").click(function(){
        $(".reservation_pop").hide();
        $(this).hide();
    });

    $(".q_menu_wrap .btn.kakao").click(function(){
        $(".q_menu_wrap").removeClass("on");
        $("header .inner .right img:first-child").removeClass("on");
        $(".left_menu").animate({"left" : 0});
        $(".mob_bg").show();
        $(".q_menu_btn").css({"display" : "block"});
    });

    $(".q_menu_wrap .btn.call").click(function(){
        $(".q_menu_wrap").removeClass("on");
        $("header .inner .right img:first-child").removeClass("on");
        $(".left_menu").animate({"left" : 0});
        $(".mob_bg").show();
        $(".q_menu_btn").css({"display" : "block"});
    });




    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });

    var swiper = new Swiper(".sub_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });





    $('.youtube_slide').each(function() {
        var thumbSwiper = new Swiper('.youtube_slide01', {
            spaceBetween: 10,
            slidesPerView: 4,
            loopedSlides: 4,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            loop: true,
        });
        var mainSwiper = new Swiper('.youtube_slide', {
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





    $(".network_cate li").click(function(){
        $(".network_cate li").removeClass("on");
        $(this).addClass("on");

        var netCate = $(this).index();

        $(".network .contents_box .contents").removeClass("active");
        $(".network .contents_box .contents").eq(netCate).addClass("active");
    });





    var swiper = new Swiper(".map_slide01", {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination03",
            clickable: true,
            renderBullet: function (index, className) {
                return '<div class="' + className + '">' + '<p>' + (index + 1) + '</p>' + "</div>";
            },
        },
        navigation: {
            prevEl: '.net_prev01',
            nextEl: '.net_next01'
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".map_slide02", {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination04",
            clickable: true,
            renderBullet: function (index, className) {
                return '<div class="' + className + '">' + '<p>' + (index + 1) + '</p>' + "</div>";
            },
        },
        navigation: {
            prevEl: '.net_prev02',
            nextEl: '.net_next02'
        },
        observer: true,
        observeParents: true,
    });





    $(".mob_bottom_fix .top").click(function(){
        var mobBot = $(".mob_bottom_fix .bottom").innerHeight();

        if ( mobBot == 0 ) {
            $(".mob_bottom_fix .bottom").animate({"height" : "404px"});
            $(".fix_bg").show();
            $(".b_you").css({"display" : "none"});
            $(".q_menu_btn").css({"display" : "none"});
        } else {
            $(".mob_bottom_fix .bottom").animate({"height" : "0px"});
            $(".fix_bg").hide();
            setTimeout(function(){
                $(".b_you").css({"display" : "block"});
                $(".q_menu_btn").css({"display" : "block"});
            },400)
        }
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





    $(".doctor_cate li").click(function(){
        $(this).siblings("li").removeClass("on");
        $(this).addClass("on");

        var dcli = $(this).index();

        $(this).parents("ul").siblings(".bot_box").children("ul").removeClass("active");
        $(this).parents("ul").siblings(".bot_box").children("ul").eq(dcli).addClass("active");
    });





    var swiper = new Swiper(".review_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.review_prev',
            nextEl: '.review_next'
        },
        breakpoints: {
            677: {
                slidesPerView: 2,
            },
        }
    });





    $(".res_pop_btn").click(function(){
        var mobBot = $(".mob_bottom_fix .bottom").innerHeight();

        if ( mobBot == 0 ) {
            $(".mob_bottom_fix .bottom").animate({"height" : "404px"});
            $(".fix_bg").show();
            $(".b_you").css({"display" : "none"});
            $(".q_menu_btn").css({"display" : "none"});
        }
    });





    $(".gallery_contents img").click(function(){
        var imgText = $(this).attr("src");

        $(".gallery_bg").animate({"opacity" : "0.5"});
        $(".gallery_bg").css({"display" : "block"});
        $(".gallery_pop").animate({"opacity" : "1"});
        $(".gallery_pop").css({"display" : "block"});
        $(".gallery_pop img").attr("src", imgText);
    });

    $(".gallery_pop .close").click(function(){
        $(".gallery_bg").animate({"opacity" : "0"});
        $(".gallery_pop").animate({"opacity" : "0"});
        setTimeout(function(){
            $(".gallery_bg").css({"display" : "none"});
            $(".gallery_pop").css({"display" : "none"});
            $(".gallery_pop img").attr("src", "");
        },400);
    });

    $(".gallery_bg").click(function(){
        $(".gallery_bg").animate({"opacity" : "0"});
        $(".gallery_pop").animate({"opacity" : "0"});
        setTimeout(function(){
            $(".gallery_bg").css({"display" : "none"});
            $(".gallery_pop").css({"display" : "none"});
            $(".gallery_pop img").attr("src", "");
        },400);
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
            $(".faq_contents ul").css({"border" : "none"});
        } else {
            $(".faq_contents ul li:first-child").removeClass('on');
            $(".faq_contents ul li:last-child").slideUp(300);
            $(".faq_contents ul").css({"border" : "none"});

            $(this).addClass('on');
            $(this).siblings("li").slideDown(300);

            $(this).parents("ul").css({"border" : "1px solid #808080"});
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





    $(".top_btn").click(function(){
        $( 'html, body' ).animate( { scrollTop : 0 }, 250 );
        return false;
    });





    $('footer .inner .bottom .top a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner .bottom .top a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });
})
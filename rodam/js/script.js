$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });




    $(".top_btn").click(function(){
        $( 'html, body' ).animate( { scrollTop : 0 }, 250 );
        return false;
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
        console.log(headerHeight);
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





    $(".floating").draggable({
        axis: "x",
        drag: function(e) {
            var test = $(this);
            var testNum = test.position().left;
            var Num = Math.abs(testNum);
            console.log(Num);
            // location.href = "event.html";
            if ( Num > 30 ) {
                // location.href = "index.html";
                e.preventDefault();
            }
        }
    });





    $(".network .map .contents").click(function(){
        $(".network .map .contents").removeClass("on");
        $(this).addClass("on");

        var mmm = $(this).index();

        $(".network .map_bottom .contents").removeClass("active");
        $(".network .map_bottom .contents").eq(mmm).addClass("active");
    })





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





    $(".right_fix a:nth-child(3)").click(function(){
        $(".bottom_fix .bottom").stop().animate({"height" : "200px"});
        $(".bottom_fix .bottom .contents02").css({"display" : "flex"});
        $(".bottom_fix .bottom .contents02").stop().animate({"opacity" : "1"});
        $(".bottom_fix .top li").removeClass("on");
        $(".bottom_fix .top li:last-child").addClass("on");
        $(".bottom_fix .bottom .contents01").css({"display" : "none"});
        $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "0"});
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
        slidesPerView: 2,
        loopAdditionalSlides : 1,
        navigation: {
            prevEl: '.review_prev',
            nextEl: '.review_next'
        },
        breakpoints: {
            1440: {
                slidesPerView: 3,
            },
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





    $(".res_pop_btn").click(function(){
        var btHeight = $(".bottom_fix .bottom").innerHeight();

        if ( btHeight == 0 ) {
            $(".bottom_fix .bottom").stop().animate({"height" : "200px"});
            $(".bottom_fix .bottom .contents01").css({"display" : "flex"});
            $(".bottom_fix .bottom .contents01").stop().animate({"opacity" : "1"});
            $(".bottom_fix .top li").removeClass("on");
            $(".bottom_fix .top li:first-child").addClass("on");
        }
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
})
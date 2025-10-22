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
    // $("header .gnb > li").mouseenter(function(){
    //     $(this).children("ul").stop().slideDown();
    // });

    // $("header .gnb > li").mouseleave(function(){
    //     $("header .gnb > li ul").stop().slideUp();
    // });

    $('footer .inner div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

    // var labelText = $(".bottom_fix .right .chk1 label").text();
    // console.log(labelText);

    $(".bottom_fix .right .chk1 label").click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $(".bottom_fix_mob .bottom .chk2 label").click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });


    //햄버거 메뉴
    $(".ham_btn").click(function(){
        $("aside").animate({"left" : "0px"},300);
        $(".back_bg").show();
    });
    
    $(".close").click(function(){
        $("aside").animate({"left" : "-300px"},300);
        $(".back_bg").hide();
    });
    
    $(".back_bg").click(function(){
        $("aside").animate({"left" : "-300px"},300);
        $(".back_bg").hide();
    });

    $("aside ul li a").click(function(){
        $("aside").animate({"left" : "-300px"},300);
        $(".back_bg").hide();
    });

    $("header .logo").click(function(){
        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });


    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        },
        autoplay : {
            delay: 2000,
            disableOnInteraction: false,
        }
    });

    var swiper = new Swiper(".competition_slide01", {
        direction: 'vertical',
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next02',
            prevEl: '.prev02',
        }
    });

    var swiper = new Swiper(".mark_slide", {
        loop: true,
        initialSlide: 1,
        spaceBetween: 0,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next03',
            prevEl: '.prev03',
        },
        breakpoints: {
            480: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 20,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 20,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".table_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next04',
            prevEl: '.prev04',
        }
    });

    var swiper = new Swiper(".menu_slide01", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next05',
            prevEl: '.prev05',
        },
        breakpoints: {
            768: {
                spaceBetween: 60,
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".menu_slide02", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next05',
            prevEl: '.prev05',
        },
        breakpoints: {
            768: {
                spaceBetween: 60,
                slidesPerView: 3,
            },
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".menu_slide03", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.next05',
            prevEl: '.prev05',
        },
        breakpoints: {
            768: {
                spaceBetween: 60,
                slidesPerView: 3,
            },
        },
        observer: true,
        observeParents: true,
    });

    $(window).resize(function(){ 
        if (window.innerWidth > 854) { 
        
            $("#menu .inner .swiper-container .swiper-slide .txt_box a").click(function(){
                $(".menu_bg").css({"display" : "flex"});
                $(".menu_pop").css({"display" : "flex"});
            });
        
            $(".menu_bg").click(function(){
                $(".menu_bg").css({"display" : "none"});
                $(".menu_pop").css({"display" : "none"});
            });
        
            $(".menu_pop .close").click(function(){
                $(".menu_bg").css({"display" : "none"});
                $(".menu_pop").css({"display" : "none"});
            });
        
        }
        
    }).resize(); 



    $("#menu .inner .menu_cate li").click(function(){
        $("#menu .inner .menu_cate li").removeClass("on");
        $(this).addClass("on");
            
        var i = $(this).index();
        
        $(".menu_contents .swiper_menu").removeClass("active");
        $(".menu_contents .swiper_menu").eq(i).addClass("active");
    });


    $(window).scroll(function(){
        var paraHeight = $(window).scrollTop();
        var conHeight = $(".wrap").height();

        if (paraHeight > conHeight - 1110) {
            $(".bottom_fix").css({
                "position" : "sticky",
            });
        };

        if (paraHeight < conHeight - 1110) {
            $(".bottom_fix").css({
                "position" : "fixed",
            });
        };
    });


    // var reviewHeight = $(".review").height();
    // console.log(reviewHeight);



    // $('.menu').on('click', function () {
    //     $(this).toggleClass("active");
    //     $('.mo_gnb ul').stop().slideToggle();
    //     $('.bg').toggleClass("on");
    // });

    // $('.bg').on('click', function (){
    //     $(this).removeClass('on');
    //     $('.mo_gnb ul').stop().slideUp();
    // });

    // $(window).on('scroll', function (event) {
    //     if ($(this).scrollTop() > 600) {
    //         $('.back_to_top').fadeIn(200)
    //     } else {
    //         $('.back_to_top').fadeOut(200)
    //     }
    // });

    // $('.back_to_top').on('click', function (event) {
    //     event.preventDefault();

    //     $('html, body').animate({
    //         scrollTop: 0,
    //     }, 500);
    // });

    $('header .gnb li a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 129}, 500);

        return false;
    });


    $(window).resize(function(){ 
        if (window.innerWidth > 768) { 
        
            $('aside .gnb li a').click(function () {
                link = $(this).attr("href");
                $("body, html").animate({ scrollTop: $(link).offset().top - 129}, 500);
        
                return false;
            });
        
        } else if (window.innerWidth > 600) {
        
            $('aside .gnb li a').click(function () {
                link = $(this).attr("href");
                $("body, html").animate({ scrollTop: $(link).offset().top - 100}, 500);
        
                return false;
            });
        
        } else {

            $('aside .gnb li a').click(function () {
                link = $(this).attr("href");
                $("body, html").animate({ scrollTop: $(link).offset().top - 80}, 500);
        
                return false;
            });

        }
        
    }).resize(); 

    

    // $('.mo_gnb li a').click(function () {
    //     $('.mo_gnb ul').stop().slideUp();
    //     $('.menu').removeClass("active");
    //     $('.bg').removeClass('on');

    //     link = $(this).attr("href");
    //     $("body, html").animate({ scrollTop: $(link).offset().top - 100 }, 500);

    //     return false;
    // });


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
    });



    // function remaindTime() {
    //     var now = new Date();
    //     var end = new Date(now.getFullYear(),now.getMonth(),now.getDate(),16,00,00);

    //     var nt = now.getTime();
    //     var et = end.getTime();

    //     if (nt > et){
    //         $("p.time-title").html("마감");
    //         $(".time").fadeOut();
    //     } else {
    //         $(".time").fadeIn();
    //         $("p.time-title").html("오늘 혜택 남은시간");
    //         sec = parseInt(et - nt) / 1000;
    //         day = parseInt(sec/60/60/24);
    //         sec = (sec - (day * 60 * 60 * 24));
    //         hour = parseInt(sec/60/60);
    //         sec = (sec - (hour*60*60));
    //         min = parseInt(sec/60);
    //         sec = parseInt(sec-(min*60));
    //         if(hour<10){hour="0"+hour;}
    //         if(min<10){min="0"+min;}
    //         if(sec<10){sec="0"+sec;}
    //         $(".hours").html(hour);
    //         $(".minutes").html(min);
    //         $(".seconds").html(sec);
    //     }
    // }
    // setInterval(remaindTime,1000);





    $("#store .inner .store_cate li").click(function(){
        $("#store .inner .store_cate li").removeClass("on");
        $(this).addClass("on");
            
        var i = $(this).index();
        
        $("#store .inner .store_contents .contents").removeClass("active");
        $("#store .inner .store_contents .contents").eq(i).addClass("active");

        $("#store .inner .store_contents .contents .map_contents").removeClass("active");
        $("#store .inner .store_contents .contents").eq(i).children(".sec_de").children(".map_contents").addClass("active");

        $("#store .inner .store_contents .contents .map_contents .map_img img").removeClass("map_on");
        $("#store .inner .store_contents .contents .map_contents").eq(i).children(".map_img").children("img:first-child").addClass("map_on");

        $("#store .inner .store_contents .contents .contents_inner").removeClass("post_on");
        $("#store .inner .store_contents .contents").eq(i).children(".sec_de").children(".contents_inner:nth-child(2)").addClass("post_on");
    });

    $(document).ready(function () {

        $(".first").change(function(){
            var v = $(this).val();
    
            // console.log(v);
    
            if (v == '전체') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(1)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(2)").addClass("post_on");

            } else if (v == '서울') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(2)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(3)").addClass("post_on");

            } else if (v == '인천') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(3)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(4)").addClass("post_on");

            } else if (v == '경기') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(4)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(5)").addClass("post_on");

            } else if (v == '강원') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(5)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(6)").addClass("post_on");

            } else if (v == '대전') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(6)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(7)").addClass("post_on");

            } else if (v == '충북') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(7)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(8)").addClass("post_on");

            } else if (v == '충남') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(8)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(9)").addClass("post_on");

            } else if (v == '대구') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(9)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(10)").addClass("post_on");

            } else if (v == '울산') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(10)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(11)").addClass("post_on");

            } else if (v == '부산') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(11)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(12)").addClass("post_on");

            } else if (v == '경북') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(12)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(13)").addClass("post_on");

            } else if (v == '경남') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(13)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(14)").addClass("post_on");

            } else if (v == '전북') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(14)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(15)").addClass("post_on");

            } else if (v == '전남') {

                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(15)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(16)").addClass("post_on");

            } else if (v == '제주') {
                
                $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass('map_on');
                $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img:nth-child(16)").addClass('map_on');

                $("#store .inner .contents_inner").removeClass("post_on");
                $("#store .inner .contents_inner:nth-child(17)").addClass("post_on");

            }
        });


        $("#store .inner .store_contents .sec_de .map_contents .map_txt p").click(function(){
            var i = $(this).index();

            // console.log(i);
            
            $("#store .inner .store_contents .sec_de .map_contents .map_img img").removeClass("map_on");
            $("#store .inner .store_contents .contents.active .sec_de .map_contents .map_img img").eq(i+1).addClass("map_on");

            $("#store .inner .contents.active .contents_inner").removeClass("post_on");
            $("#store .inner .contents.active .contents_inner").eq(i+1).addClass("post_on");

            

        });
    
        $(".bottom_fix_mob .top .right").click(function(){
            $(".bottom_fix_mob").toggleClass("on")
        });


    })


    $(".map_cate p").click(function(){
        var mapCate = $(this).index();

        $("#store .inner .contents.active .contents_inner").removeClass("post_on");
        $("#store .inner .contents.active .contents_inner").eq(mapCate).addClass("post_on");
    });









})
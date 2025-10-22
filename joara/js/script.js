$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });




    $("header .center > img").click(function(){
        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });

    $('header .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);

    });

    $('aside .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();

    });

    $(".ham").click(function(){
        $("aside").animate({"right" : "0"});
        $(".aside_bg").show();
    });

    $("aside > span").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
    });





    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });




    var swiper = new Swiper(".you_slide_txt", {
        loop: true,
        slidesPerView: 1,
        freeMode: true,
        watchSlidesProgress: true,
        effect: 'fade',
        touchRatio: 0,
    });
    var swiper = new Swiper(".you_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: ".next-btn",
            prevEl: ".prev-btn",
        },
        thumbs: {
            swiper: swiper,
        },
    });





    $(".career_category li").click(function(){
        $(".career_category li").removeClass("on");
        $(this).addClass("on");

        var cCate = $(this).index();

        $(".career_contents .contents").removeClass("on");
        $(".career_contents .contents").eq(cCate).addClass("on");
    });




    var swiper = new Swiper(".portfolio_slide01", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        }
    });
    var swiper = new Swiper(".portfolio_slide02", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next02',
            prevEl: '.prev02',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".portfolio_slide03", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next03',
            prevEl: '.prev03',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".portfolio_slide04", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next04',
            prevEl: '.prev04',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".portfolio_slide05", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next05',
            prevEl: '.prev05',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".portfolio_slide06", {
        loop: true,
        spaceBetween: 60,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next06',
            prevEl: '.prev06',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 60,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 60,
            },
        },
        observer: true,
        observeParents: true,
    });

    $(".portfolio_category li").click(function(){
        $(".portfolio_category li").removeClass("on");
        $(this).addClass("on");

        var pCete = $(this).index();

        $(".portfolio_inner .contents").removeClass("on");
        $(".portfolio_inner .contents").eq(pCete).addClass("on");
    });



    $(".bottom_fix .inner .right div div").click(function(){
        var fixCheck = $(".bottom_fix .inner .right div div input:checked").length;

        if ( fixCheck == 0 ) {
            $(".bottom_fix .inner .right div div input:checkbox").attr("checked", true);
            $(".bottom_fix .inner .right div div span i").css({"display" : "block"});
        } else {
            $(".bottom_fix .inner .right div div input:checkbox").attr("checked", false);
            $(".bottom_fix .inner .right div div span i").css({"display" : "none"});
        }
    });

    $(".bottom_fix_mob .inner .top").click(function(){
        $(this).parent().parent().toggleClass("on");
    });

    $(".bottom_fix_mob .inner .pri_contents .pri div").click(function(){
        var mobCheck = $(".bottom_fix_mob .inner .pri_contents .pri div input:checked").length;

        if ( mobCheck == 0 ) {
            $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", true);
            $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "block"});
        } else {
            $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", false);
            $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "none"});
        }
    });




    $('.bottom_fix .inner .right div a').click(function () {
        $('.info_wrap01').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('.bottom_fix_mob .inner .pri_contents .pri a').click(function () {
        $('.info_wrap01').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

    $('footer .inner .middle .right div a:nth-child(1)').click(function () {
        $('.info_wrap02').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

    $('footer .inner .middle .right div a:nth-child(2)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });




    // $(window).scroll(function(){
    //     var paraHeight = $(window).scrollTop();
    //     var introHeight = $("#intro").innerHeight();
    //     var profileHeight = $("#profile").innerHeight();
    //     var featureHeight = $("#feature").innerHeight();
    //     var careerHeight = $("#career").innerHeight();

    //     var contentsHeight = introHeight + profileHeight + featureHeight + careerHeight;

    //     console.log(paraHeight);
    //     console.log(contentsHeight);

    //     if (paraHeight = contentsHeight) {
    //         $(".nums").each(function(){
    //             const $this = $(this),
    //             countTo = $this.attr("data-count");
        
    //             $({
    //                 countNum : $this.text()
    //             }).animate({
    //                 countNum : countTo
    //             }, {
    //                 duration : 2500,
    //                 easing : 'linear',
    //                 step : function () {
    //                     $this.text(Math.floor(this.countNum));
    //                 },
    //                 complete : function () {
    //                     $this.text(this.countNum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ','));
    //                 }
    //             });
    //         });
    //     };

    // });

    // $(".nums").each(function(){
    //     const $this = $(this),
    //     countTo = $this.attr("data-count");

    //     $({
    //         countNum : $this.text()
    //     }).animate({
    //         countNum : countTo
    //     }, {
    //         duration : 2500,
    //         easing : 'linear',
    //         step : function () {
    //             $this.text(Math.floor(this.countNum));
    //         },
    //         complete : function () {
    //             $this.text(this.countNum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ','));
    //         }
    //     });
    // });




    $(document).ready(function() {
        // 클래스가 "counter"인 모든 요소를 선택합니다.
        const $counters = $(".nums");
        
        // 노출 비율(%)과 애니메이션 속도(ms)을 설정합니다.
        const exposurePercentage = 100; // ex) 스크롤 했을 때 $counters 컨텐츠가 화면에 100% 노출되면 숫자가 올라갑니다.
        const duration = 2000; // ex) 1000 = 1초
        
        // 숫자에 쉼표를 추가할지 여부를 설정합니다.
        const addCommas = true; // ex) true = 1,000 / false = 1000
        
        // 숫자를 업데이트하고 애니메이션하는 함수 정의
        function updateCounter($el, start, end) {
            let startTime;
            function animateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = (timestamp - startTime) / duration;
                const current = Math.round(start + progress * (end - start));
                const formattedNumber = addCommas ? current.toLocaleString() : current;
                $el.text(formattedNumber);
                
                if (progress < 1) {
                    requestAnimationFrame(animateCounter);
                } else {
                    $el.text(addCommas ? end.toLocaleString() : end);
                }
            }
            requestAnimationFrame(animateCounter);
        }
    
        
        // 윈도우의 스크롤 이벤트를 모니터링합니다.
        $(window).on('scroll', function() {
            // 각 "counter" 요소에 대해 반복합니다.
            $counters.each(function() {
                const $el = $(this);
                // 요소가 아직 스크롤되지 않았다면 처리합니다.
                if (!$el.data('scrolled')) {
                    // 요소의 위치 정보를 가져옵니다.
                    const rect = $el[0].getBoundingClientRect();
                    const winHeight = window.innerHeight;
                    const contentHeight = rect.bottom - rect.top;
                    
                    // 요소가 화면에 특정 비율만큼 노출될 때 처리합니다.
                    if (rect.top <= winHeight - (contentHeight * exposurePercentage / 100) && rect.bottom >= (contentHeight * exposurePercentage / 100)) {
                        const start = parseInt($el.data("start"));
                        const end = parseInt($el.data("end"));
                        // 숫자를 업데이트하고 애니메이션을 시작합니다.
                        updateCounter($el, start, end);
                        $el.data('scrolled', true);
                    }
                }
            });
        }).scroll();
    });





    var swiper = new Swiper(".data_slide", {
        loop: true,
        spaceBetween: 35,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.data_next',
            prevEl: '.data_prev',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        // breakpoints: {
        //     929: {
        //         slidesPerView: 2,  //브라우저가 768보다 클 때
        //         spaceBetween: 60,
        //         centeredSlides: false,
        //     },
        //     1349: {
        //         slidesPerView: 3,  //브라우저가 1024보다 클 때
        //         spaceBetween: 60,
        //     },
        // }
    });



})
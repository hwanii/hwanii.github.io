$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });

    //header
    $(window).resize(function(){ 
        if (window.innerWidth > 1350) {
            $(".header").mouseenter(function(){
                $(".header .main_header").addClass("on");
                $(".header .sub_header").stop().slideDown(300);
            });
        
            $(".header").mouseleave(function(){
                $(".header .main_header").removeClass("on");
                $(".header .sub_header").stop().slideUp(300);
            });
        
            $(".search_box_contents").mouseenter(function(){
                $(".header .main_header").addClass("on");
                $(".header .sub_header").stop().slideDown(300);
            });
        
            $(".sub_gnb div").mouseenter(function(){
                $(".sub_gnb div").removeClass("on");
                $(this).addClass("on");
        
                var i = $(this).index();
        
                $(".gnb li a").removeClass("text_on");
                $(".gnb li a").eq(i).addClass("text_on");
            });
        } else {
            $(".header").mouseenter(function(){
                $(".header .main_header").removeClass("on");
                $(".header .sub_header").stop().slideUp(300);
            });
        
            $(".header").mouseleave(function(){
                $(".header .main_header").removeClass("on");
                $(".header .sub_header").stop().slideUp(300);
            });
        
            $(".search_box_contents").mouseenter(function(){
                $(".header .main_header").addClass("on");
                $(".header .sub_header").stop().slideUp(300);
            });
        
            $(".sub_gnb div").mouseenter(function(){
                $(".sub_gnb div").removeClass("on");
                $(this).addClass("on");
        
                var i = $(this).index();
        
                $(".gnb li a").removeClass("text_on");
                $(".gnb li a").eq(i).addClass("text_on");
            });
        }
    }).resize(); 
    

    $(".sub_gnb div").mouseleave(function(){
        $(".gnb li a").removeClass("text_on");
    });

    $(".sub_gnb div").mouseleave(function(){
        $(".gnb li a").removeClass("text_on");
    });

    $(".header .main_header .inner .right div p").click(function(){
        $(".search_box_contents").toggleClass("active");
    });


    //햄버거 메뉴
    $(".header .main_header .inner .right span").click(function(){
        $("aside").animate({"right" : "0px"},300);
        $(".back-bg").show();
    });
    
    $(".close").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back-bg").hide();
    });
    
    $(".back-bg").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back-bg").hide();
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


    //certification
    $(".certification .inner950 .certi_contents .contents").click(function(){
        var imgName = $(this).children(".img_box").children("img").attr("src");

        $(".certi_fix").show();
        $(".certi_bg").show();

        $(".certi_fix img").attr("src", imgName);
    });

    $(".certi_fix .close").click(function(){
        $(".certi_fix").hide();
        $(".certi_bg").hide();
    });

    $(".certi_bg").click(function(){
        $(".certi_fix").hide();
        $(".certi_bg").hide();
    });


    var swiper = new Swiper(".detail_thumb", {
        loop: false,
        spaceBetween: 10,
        loopAdditionalSlides: 1,
        slidesPerView: "auto",
    });

    // $(".sell .sell_contents .detail_thumb .swiper-slide").click(function(){
    //     var thumb = $(this).children("img").attr("src");

    //     $(".jam_detail_contents > img").attr("src", thumb);
    // });


    $('footer .inner .right div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });



    $('footer .inner .right div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

})
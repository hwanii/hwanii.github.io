$(function(){
    $("#gnb li").mouseenter(function(){
        $("#gnb li").removeClass("on");
        $(this).addClass("on");
    })
    $("#gnb li").mouseleave(function(){
        $("#gnb li").removeClass("on");
    })
    
    $(".menu").click(function(){
        $(".gnb_bg").toggleClass("gnbBgOn");
        $("#gnb").stop().slideToggle(500);
    })
    
    $(".search").click(function(){
        $(".search_bg").toggleClass("searchBgOn");
        $(".search_box").stop().slideToggle(500);
    })
    
    $(".gnb_bg").click(function(){
        $("#gnb").stop().slideUp();
        $(this).removeClass("gnbBgOn");
    })
    
    $(".search_bg").click(function(){
        $(".search_box").stop().slideUp();
        $(this).removeClass("searchBgOn");
    })
    
    
    
    $(window).resize(function(){
        var w = $(window).width();
        
        if(w > 768){
            var h = 0;
            $(".down").click(function(){
                h++;
                if(h > $(".v_slide ul").length + 1){
                    h = 0;
                }
                $(".v_slide ul").stop().animate({top : h * 68 *(-1)},500);
            })
    
            $(".up").click(function(){
                h--;
                if(h < 0){
                    h =  $(".v_slide ul").length + 1;
                }
                $(".v_slide ul").stop().animate({top : h * 68 *(-1)},500);
            })
        }else{
            var h = 0;
            $(".down").click(function(){
                h++;
                if(h > $(".v_slide ul").length + 1){
                    h = 0;
                }
                $(".v_slide ul").stop().animate({top : h * 50 *(-1)},500);
            })
    
            $(".up").click(function(){
                h--;
                if(h < 0){
                    h =  $(".v_slide ul").length + 1;
                }
                $(".v_slide ul").stop().animate({top : h * 50 *(-1)},500);
            })
        }
    })
    $(window).trigger("resize");
    
    
    setInterval(function(){
        $(".down").click();
    },5000)
    

    var slide = $('.big').bxSlider({
        maxSlides: 6,
        minSlides: 3,
        slideWidth: 300,
        slideMargin: 50,
        infiniteLoop: false,
        pager: false,
        controls: false,
        moveSlides: 1,
    });
    $("#left").click(function() {
        slide.goToPrevSlide();
        return false;
    });
    $("#right").click(function() {
        slide.goToNextSlide();
        return false;
    });
    
    
    
    var slide2 = $('.small').bxSlider({
        infiniteLoop: false,
        pager: false,
        controls: false,
    });
    $("#prev").click(function() {
        slide2.goToPrevSlide();
        return false;
    });
    $("#next").click(function() {
        slide2.goToNextSlide();
        return false;
    });
    
    
    
    $(window).resize(function(){
            var w = $(window).width();
        
            if(w > 768){
                $(".icon_add").attr("src","img/icon_add.png")
            }else{
                $(".icon_add").attr("src","img/icon_add21.png")
            }
        })
        $(window).trigger("resize");
    
    
    
    
    
    
    
    
    
    
    
    
    
    
})
















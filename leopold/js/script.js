$(function(){
    $("header .menu_tab").click(function(){
        $("header .menu").stop().slideToggle();
        $("header .menu_tab i").toggleClass("on1");
        $("header .menu_tab span").toggleClass("on2");
    })
    $("#nav>li").click(function(){
        $(this).find("ul").stop().slideToggle();
        $(this).children(".plus").children("i").toggleClass("on11");
        $(this).children(".plus").children("span").toggleClass("on22");
    })
    
    $('.first-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        smartSpeed:1000,
    })
    
    $('.second-slide-leo').owlCarousel({
        loop:false,
        margin:0,
        nav:false,
        items:2,
        dots:true,
        
    })
    
    $('.second-slide-real').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        items:2,
        dots:true,
    })
    
    $(".best_slide li").click(function(e){
        e.preventDefault();
        $(".best_slide li").removeClass("menuOn");
        $(this).addClass("menuOn");
        
        var i = $(this).index();
        $(".best_slide_fr").removeClass("active");
        $(".best_slide_fr").eq(i).addClass("active");
    })
    
    $('.third-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        dots:true,
    })
    
    
    $(".our_slide ul li").click(function(e){
        e.preventDefault();
        $(".our_slide ul li").removeClass("onMenu");
        $(this).addClass("onMenu");
        
        var s = $(this).index();
        $(".our_slide_fr").removeClass("ourActive");
        $(".our_slide_fr").eq(s).addClass("ourActive");
    })
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
})











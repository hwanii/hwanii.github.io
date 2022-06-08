$(function(){
    $(".add").click(function(){
        $(".popup").show();
    })
    $(".popup i").click(function(){
        $(".popup").hide();
    })
    
    
    $(".one_menu p").click(function(){
        $(".one_menu p").removeClass("on");
        $(this).addClass("on");
        
        var i = $(this).index();
        
        $(".des").removeClass("active");
        $(".des").eq(i).addClass("active");
    })
    
    $('.box').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        items:1,
        dots:true,
        
    })
    
    
    
    
    
    
    
})












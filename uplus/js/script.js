$(function(){
    
    function tt(){
        if ($(".hd_text_box img").hasClass("off")) {
            $(".hd_text_box img").removeClass("off");
        } else {
            $(".hd_text_box img").addClass("off");
        }
    }
    setInterval(tt, 750);
    
    function aa(){
        if ($(".star01").hasClass("none_active")) {
            $(".star01").removeClass("none_active");
        } else {
            $(".star01").addClass("none_active");
        }
    }
    setInterval(aa, 750);
    
    function ss(){
        if ($(".star02").hasClass("none")) {
            $(".star02").removeClass("none");
        } else {
            $(".star02").addClass("none");
        }
    }
    setInterval(ss, 750);
    
    
    
    
    
})














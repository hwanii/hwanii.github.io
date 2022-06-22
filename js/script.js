$(function () {
  var h; // 윈도우 크기를 지정하는 변수입니다.
  var t; // 윈도우의 상단 좌표를 지정하는 변수입니다.
  var num = 1;
  var playing = false;

  $("body, html").animate({
    scrollTop: 0
  }, 500, "easeInQuart");

  $(window).resize(function () {
    h = $(window).height();
    $(".contents").css({
      height: h
    })
  })

  $("body, html").mousewheel(function (e, delta) {
    if (playing == false) {
      if (delta > 0) {
      //console.log("up");
        if (num > 1) {
          num--;
        }
      } else {
        //console.log("down");
        if (num < 6) {
          num++;
        }
      }
      //console.log("num : " + num);
      playing = true

      $(".pager span").removeClass('on')
      $(".pager span").eq(num-1).addClass('on')

      $("body, html").animate({scrollTop:$("#page"+num).offset().top}, 1000, "easeInQuart", function () {
        playing = false;
      });
    }
  });


  $(".pager span").click(function () {
    num = $(this).index();
    $(".pager span").removeClass('on')
    $(this).addClass('on')
    $("body, html").animate({scrollTop:$("#page"+(num+1)).offset().top}, 1000, "easeInQuart");
  })

  $(window).scroll(function(){
    t=$(window).scrollTop();

    if(t < h - 400){
      $(".conBox").removeClass('active');
      $("#page1").children(".conBox").addClass("active");
      $(".left-name h2").text("01");
      $(".left-name span").css({background : "#fff"});
      $(".left-name p").text("한숨").css({
        color : "#fff",
        top : "50px",
        left : "8px"});
      $(".copy").css({color : "#ebebeb"});
    }else if(t < 2*h - 400){
      $(".conBox").removeClass('active');
      $("#page2").children(".conBox").addClass("active");
      $(".left-name h2").text("02");
      $(".left-name span").css({background : "#666"});
      $(".left-name p").text("한국문물연구원").css({
        color : "#666",
        top : "100px",
        left : "-12px"});
      $(".copy").css({color : "#666"});
    }else if(t < 3*h - 400){
      $(".conBox").removeClass('active');
      $("#page3").children(".conBox").addClass("active");
      $(".left-name h2").text("03");
      $(".left-name span").css({background : "#fff"});
      $(".left-name p").text("레오폴드").css({
        color : "#fff",
        top : "70px",
        left : "0px"});
      $(".copy").css({color : "#ebebeb"});
    }else if(t < 4*h - 400){
      $(".conBox").removeClass('active');
      $("#page4").children(".conBox").addClass("active");
      $(".left-name h2").text("04");
      $(".left-name span").css({background : "#666"});
      $(".left-name p").text("유플러스").css({
        color : "#666",
        top : "70px",
        left : "-1px"});
      $(".copy").css({color : "#666"});
    }else if(t < 5*h - 400){
      $(".conBox").removeClass('active');
      $("#page5").children(".conBox").addClass("active");
      $(".left-name h2").text("05");
      $(".left-name span").css({background : "#fff"});
      $(".left-name p").text("동구바이오제약").css({
        color : "#fff",
        top : "100px",
        left : "-12px"});
      $(".copy").css({color : "#ebebeb"});
    }else if(t < 6*h - 400){
      $(".conBox").removeClass('active');
      $("#page6").children(".conBox").addClass("active");
      $(".left-name h2").text("06");
      $(".left-name span").css({background : "#666"});
      $(".left-name p").text("스카이데포레").css({
        color : "#666",
        top : "90px",
        left : "-4px"});
      $(".copy").css({color : "#666"});
    }
    // console.log(t)
    // console.log("h"+h)
    // console.log("2h"+(2*h))
  });

  $(window).trigger("resize")
  $(window).trigger("scroll")









})


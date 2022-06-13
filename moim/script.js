$(function () {

  $('nav ul li').mouseenter(function(){
    $(this).children('div').stop().slideDown();
  });

  $('nav ul li').mouseleave(function () {
    $(this).children('div').stop().slideUp();
  });

  $('.miniNav_menu').click(function(){
    $('#miniNav').css({
      'left' : 0
    });
    $('.mini_bg').show();
  });

  $('#miniNav .close').click(function(){
    $('#miniNav').css({
      'left' : '-300px'
      });
    $('.mini_bg').hide();
  });

  $('.mini_bg').click(function(){
    $('#miniNav').css({
      'left': '-300px'
    });
    $('.mini_bg').hide();
  });

  $(".mobile_nav>li>a").click(function () {
    if ($(this).parent().hasClass('on') == true) {
      $(".mobile_nav>li").removeClass('on');
      $(".depth").stop().slideUp();
    } else {
      $(".mobile_nav>li").removeClass('on')
      $(".depth").stop().slideUp();
      $(this).parent().addClass("on");
      $(this).next().stop().slideDown();
      }
  });

  $(".mobile_nav .first_menu:first-child").children('a').attr('href','/');

  new Swiper('.top_contents', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    loop: true,
    speed: 1000,
    loopAdditionalSlides: 1,
    autoplay: {  // 자동 슬라이드 설정 , 비 활성화 시 false
      delay: 2000,   // 시간 설정
      disableOnInteraction: false,  // false로 설정하면 스와이프 후 자동 재생이 비활성화 되지 않음
    },
  });




})

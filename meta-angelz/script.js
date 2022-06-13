$(function () {
  function swiper_nft() {
    let SwiperTop = new Swiper('.swiper_nft', {
      spaceBetween: 30,
      centeredSlides: true,
      speed: 6000,
      autoplay: {
        delay: 1,
      },
      loop: true,
      slidesPerView: 'auto',
      allowTouchMove: false,
      disableOnInteraction: true
    });
  }

  setTimeout(function () {
    swiper_nft();
  }, 300);

  $('.q').click(function () {
    if ($(this).hasClass('open')) {
      $('.q').removeClass('open');
      $('.a').stop().slideUp();
      $('#faq ul li').removeClass('BG');
    } else {
      $('.q').removeClass('open');
      $(this).addClass('open');
      $('.a').stop().slideUp();
      $(this).next(".a").stop().slideDown();
      $('#faq ul li').removeClass('BG');
      $(this).parent('li').addClass('BG');
    }
  });

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

  $('.gnb_btn').click(function () {
    if ($(this).hasClass('menu_on')) {
      $(this).removeClass('menu_on');
      $('.gnb_bg').css({
        "height": "0vh"
      });
      $('.mobile_gnb').css({
        'display': 'none'
      });
    } else {
      $(this).addClass('menu_on');
      $('.gnb_bg').css({
        "height": "100vh"
      });
      $('.mobile_gnb').stop().slideDown(300);
    }
  });

  $('.gnb_bg').click(function () {
    $('.gnb_bg').css({
      "height": "0vh"
    });
    $('.mobile_gnb').css({
      'display' : 'none'
    });
    $('.gnb_btn').removeClass('menu_on');
  });

  $('.mobile_gnb li a').click(function () {
    $('.gnb_bg').css({
      "height": "0vh"
    });
    $('.mobile_gnb').css({
      'display': 'none'
    });
    $('.gnb_btn').removeClass('menu_on');
  });

  $('.goTop').click(function () {
    $('body, html').animate({
      scrollTop: 0
    });
  });
})
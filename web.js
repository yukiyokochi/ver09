$(function(){
  $(".menu-button").click(function(){
    $(this).toggleClass("active"),
    $(".menu-after").fadeToggle(400);
  });

  var adOffset, adSize;
$(window).on('load resize',function(){
    adOffset = $('.more-button1').offset().top;
    winH = $(window).height();
});
$(function() {
    var eyecatch = $('.eyecatch');
    var works = $('.remove-after');
    var triangle = $('.toTop');
    winH = $(window).height();
    adOffset = $('.more-button1').offset().top;
    adOffset2 = $('.empty-element2').offset().top;
    eyecatch.show();
    works.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > adOffset - winH && $(this).scrollTop() < adOffset2 - winH) {
            eyecatch.fadeOut(0);
            works.fadeIn(0);
        } else {
            eyecatch.fadeIn(0);
            works.fadeOut(0);
        }
    });
    $(window).scroll(function () {
      if ($(this).scrollTop() > 1000) {
        triangle.fadeIn(200);
      } else {
        triangle.fadeOut(200);
      }
    });
  });
  $('.toTop').click(function(){
    $('body').animate({ scrollTop: 0 }, 1000);
  });
});

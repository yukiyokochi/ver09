$(function(){
  $(".menu-button").click(function(){
    $(this).toggleClass("active"),
    $(".menu-after").fadeToggle(400);
  });

  $(function(){
    var alcon = $('.always-contact');
    adOffset = $('.contact').offset().top;
    $(window).scroll(function(){
      if($(this).scrollTop() >= adOffset){
        alcon.fadeOut(400);
      }else if($(this).scrollTop() <= adOffset){
        alcon.fadeIn(400);
      }
    });
  });
});

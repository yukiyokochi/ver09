$(function(){
  $(".menu-button").click(function(){
    $(this).toggleClass("active"),
    $(".menu-after").fadeToggle(400);
  });

  $(function(){
    var menu = $('.menu');
    var object0 = $('.title');
    var object1 = $('.subtitle');
    var object2 = $('.vision-p1');
    var object3 = $('.vision-p2');
    var object4 = $('.vision-title');
    var objectAll = $('.vision-container');
    var blog = $('.blog');
    adOffset = $('.about').offset().top;
    adOffset2 = $('.send-button').offset().top;
    adOffset3 = $('.service').offset().top;
    var footer = $('.footer');
    $(window).scroll(function () {
        if($(this).scrollTop() <= 500){
          menu.fadeOut(400),
          object0.fadeIn(400),
          object1.animate({
            "opacity":"1"
          },400),
          object2.fadeOut(400),
          object4.fadeOut(400);
        }else if($(this).scrollTop() > 500 && $(this).scrollTop() <= 1000){
          menu.fadeIn(400),
          object0.fadeOut(400),
          object1.animate({
            "opacity":"0.6"
          },400),
          object2.fadeIn(400),
          object3.fadeOut(400),
          object4.fadeIn(400),
          object4.animate({
            "width":"70%"
          },1000);
        }else if($(this).scrollTop() > 1000 && $(this).scrollTop() <= 1500){
          objectAll.fadeIn(400),
          object2.fadeOut(400),
          object3.fadeIn(400);
        }else if($(this).scrollTop() > 1500 && $(this).scrollTop() <= adOffset3){
          blog.fadeOut(0);
        }else if($(this).scrollTop() > adOffset3 && $(this).scrollTop() <= adOffset){
          objectAll.fadeOut(0),
          blog.fadeIn(0);
        }else if($(this).scrollTop() > adOffset && $(this).scrollTop() <= adOffset2){
          menu.fadeIn(400),
          blog.fadeOut(0),
          footer.fadeOut(200);
        }else if($(this).scrollTop() > adOffset2){
          menu.fadeOut(400),
          footer.fadeIn(800);
        }
    });
    $(function(){
      setTimeout(function(){
        $('.make-scroll').animate({
          "opacity":"1"
        },1000);
      },2500);
    });
    $(window).scroll(function(){
      $('.make-scroll').animate({
        "opacity":"0"
      },1000);
    });
    setInterval(function(){
      $('.make-scroll').fadeOut(500,function(){
        $(this).fadeIn(500)
      });
    },2500);
  });

  $(function(){
    adOffset4 = $('.empty').offset().top;
    var subfooter = $('.page-list');
    $(window).scroll(function () {
      if($(this).scrollTop() <= adOffset4){
        subfooter.fadeOut(400);
      }else if($(this).scrollTop() > adOffset4){
        subfooter.fadeIn(800);
      }
    });
  });

  var $grid = $('.articles'),
    emptyCells = [],
    i;
  for (i = 0; i < $grid.find('.article1').length; i++) {
    emptyCells.push($('<article>', { class: 'article1 is-empty' }));
  }
  $grid.append(emptyCells);
});

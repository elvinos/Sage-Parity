(function($) {


/* Navbar Homepage Scroll Dependency */
var navbarHeight = $('.navbar').height();

/*Hides Small Logo on Home Page Load for Effect */
  $('.small-logo-container').css('visibility','hidden');

  /*Removes margin on Nav container so there is no white line in homepage nav*/
  $('#NavContain').css('margin-bottom','0px');



$(window).scroll(function() {
  $('.small-logo-container').css('visibility','visible');
  var navbarColor = "11, 49, 92"; //color attr for rgba
  var smallLogoHeight = $('.small-logo').height();

  var bigLogoHeight = $('.big-logo').height();

  var smallLogoEndPos = 0;
  var smallSpeed = (smallLogoHeight / bigLogoHeight);


  var ySmall = ($(window).scrollTop() * smallSpeed);

  var smallPadding = navbarHeight - ySmall;
  if (smallPadding > navbarHeight) {
    smallPadding = navbarHeight;
  }
  if (smallPadding < smallLogoEndPos) {
    smallPadding = smallLogoEndPos;
  }
  if (smallPadding < 0) {
    smallPadding = 0;
  }

  $('.small-logo-container ').css({
    "padding-top": smallPadding
  });

  var navOpacity = ySmall / smallLogoHeight;
  if (navOpacity > 1) {
    navOpacity = 1;
  }
  if (navOpacity < 0) {
    navOpacity = 0;
  }
  var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
  $('.navbar').css({
    "background-color": navBackColor
  });

  var shadowOpacity = navOpacity * 0.4;
  if (ySmall > 1) {
    $('.navbar').css({
      "box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"
    });
  } else {
    $('.navbar').css({
      "box-shadow": "none"
    });
  }
});

})(jQuery);

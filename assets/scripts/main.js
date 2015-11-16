/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
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
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);



  $(window).scroll(function(){

    var wScroll = $(this).scrollTop();

    $('.logo').css({
      'transform' : 'translate('+ -wScroll /12 +'%, '+ wScroll /5 +'%)',
      'background-size' : 300 - wScroll /3 +'px'
    });

  });

    var $menu = $('.overlay');
    var navTog = document.getElementById('navTog');

    $(".navbar-toggle").click(function(e) {
      var className = ' ' + navTog.className + ' ';
      if ( ~className.indexOf(' active ') ) {
          navTog.className = className.replace(' active ', ' ');
        $menu.fadeOut();
        $('body').css({
        'overflow-y':'scroll'});
      } else {
        navTog.className += ' active';
        $menu.fadeIn();
        $('body').css({
        'overflow-y':'hidden'});
        $('.small-logo-container').css('visibility','visible');
        $('.small-logo-container').css('padding-top','0');
        $('.navbar-inverse').css('background',' rgb(11, 49, 92)');
      }
  });


})(jQuery); // Fully reference jQuery after this point.

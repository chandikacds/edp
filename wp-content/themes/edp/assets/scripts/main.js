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
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        
        $( "body" ).delegate( "#base_sydney", "click", function(event) {
          event.preventDefault();
          setCookie('USR_CITY','base_sydney',120);
          window.location.reload();

        });
        $( "body" ).delegate( "#base_melbourne", "click", function(event) {
          event.preventDefault();
          setCookie('USR_CITY','base_melbourne',120);
          window.location.reload();

        });

        
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        $( document ).ready(function() {
          //for load map defult
        $(".search_sub_show_result").trigger('click');

          $("#menu-primary-navigation > #menu-item-35608").addClass('current-menu-item');

          $(window).on("load",function() {
          // The slider being synced must be initialized first
            $('#carousel').flexslider({
              animation: "slide",
              controlNav: false,
              animationLoop: false,
              slideshow: false,
              itemWidth: 200,
              itemMargin: 10,
              asNavFor: '#slider'
            });
           
            $('#slider').flexslider({
              animation: "slide",
              controlNav: false,
              animationLoop: false,
              slideshow: false,
              sync: "#carousel"
            });
          });

          
          $('body').delegate('.show_me_in_map', 'click', function(){

              var address = $(this).attr('address');
              //alert(address);
              $("div[title='"+address+"'] img").trigger('click');
          });
          //load map date

         /* $('body').delegate('.search_sub_show_result', 'click', function(){
            var maintag = $("#maintag").val();
            var suburb = $("#suburb").val();

            var  method ="post";
          var  url ="loadMapData";
           $.ajax({
                  type: method,
                  url: ajaxurl,
                  data: {
                    'action':url,
                    'maintag': maintag,
                    'suburb': suburb

                  },
                  success:function(response) {
                    
                  },
                  error: function(errorThrown){
                      console.log(errorThrown);
                  }
                });



          }); */


        });
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

})(jQuery); // Fully reference jQuery after this point.

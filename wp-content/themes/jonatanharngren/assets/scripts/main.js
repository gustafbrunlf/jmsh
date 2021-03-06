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

        function fadeOutLogo( element, logo ) {
          $(document).on("click", element, function(){
            var $content = $(element).add(logo);
            $content.css("opacity", "0");
          });
        }

        fadeOutLogo('.start__close-logo', '.start__logo');
        fadeOutLogo('.header__close-logo', '.header__logo');

        $(document).on("click", '.about-block__close', function(){
          $('.about-block__image img').css("opacity", "0");
        });

        $(document).on("click", 'a', function(event){
          var attribute = $(this).attr('href');
          if( attribute === '#' ) {
            event.preventDefault();
            $('.popup').addClass('popup__open');
          }
          if( attribute === '#form'  ) {
            $('.form__popup').addClass('form__popup--open');
          }
        });

        $(document).on("click", '.popup__close', function(event){
            $('.popup').removeClass('popup__open');
        });

        $(document).on("click", '.form__close', function(event){
            $('.form__popup').removeClass('form__popup--open');
        });

        $(document).on("click", '#sound-button', function(event){
          var myAudio = document.getElementById("sound");
          if (myAudio.paused) {
            myAudio.play();
          } else {
            myAudio.pause();
          }
        });

        function totals(totals_class) {
          var total = 0;

          $(totals_class).each(function( index ) {
            if( $(this).val() ) {
              total += parseInt($(this).val(), 10);
            }
          });

          return total;
        }

        $('.form-data-qty-input input').on('input', function() { 
            var value = $(this).val(); // get the current value of the input field.
            var price = $(this).closest('.form-data-qty').siblings('.form-data-info').find('span').text();
            price = price.split(" ");

            var price_col = $(this).closest('.form-data-qty').siblings('.form-data-price').children();

            var number = $(this).closest('.form-data-qty-input').data('input');

            price_col.eq(number).find('input').val( (value * price[0]) );

            var total_qty = totals('.form-data-qty-input input');
            $('.form-total-qty-sum input[name="number-qty"]').val(total_qty);

            var total_price = totals('.form-data-price-container input');
            $('.form-total-price-sum input[name="number-price"]').val(total_price);
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

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'main': {
      init: function() {
        // JavaScript to be fired on the about us page

        $(document).on("click", '.sidebar__item', function(){

          var $data_value = $(this).data("block");

          $('.sidebar__item').removeClass('sidebar__item--active');
          $('.block__container').removeClass('block__container--active');

          $(this).addClass('sidebar__item--active');
          $('.block__container[data-block="' + $data_value + '"]').addClass('block__container--active');
        });

        if( $('.slider-wrapper').length ) {
          $('.slider-wrapper').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-arrow slick-next"></button>'
          });
        }

        // var $default_data_value = "";

        // $(".sidebar__item").hover(function(){
        //     var $data_value = $(this).data("block");
        //     $default_data_value = $('.sidebar__item--active').data("block");

        //     $('.sidebar__item').removeClass('sidebar__item--active');
        //     $('.block__container').removeClass('block__container--active');

        //     $(this).addClass('sidebar__item--active');
        //     $('.block__container[data-block="' + $data_value + '"]').addClass('block__container--active');

        //     }, function(){

        //     $('.sidebar__item').removeClass('sidebar__item--active');
        //     $('.block__container').removeClass('block__container--active');

        //     $('.sidebar__item[data-block="' + $default_data_value + '"]').addClass('sidebar__item--active');
        //     $('.block__container[data-block="' + $default_data_value + '"]').addClass('block__container--active');
        // });
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

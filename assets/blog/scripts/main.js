'use strict';

$(document).ready(function () {
  var browser = $.browser,
      Header = $('header'),
      $window = $(window);

  $('.post p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s| /g, '').length == 0) {
      $this.addClass('empty');
    }
  });

  // var storageStatus = localStorage.getItem('dismiss');
  // $msie__btn.bind('click', function() {
  //   localStorage.setItem('dismiss', true);
  //   $msie.hide();
  // });
  // Show the browser alert when he/she use IE
  if (browser.msie) {
    $('body').append('<div class="IE-alert"><p>Still using Internet Explorer? Get a safer browser, try Chrome - <a href="https://www.google.com/chrome/">Download</a></p></div>');
  }
  

  // config Slick carousel on '.latest' element
  $('.latest').slick({
    infinite: false,
    slidesToScroll: 1,
    slidesToShow: 3,
    autoplay: false,
    draggable: true,
    swipeToSlide: true,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="prevIcon"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="nextIcon"></i></button>',
    responsive: [{
      breakpoint: 1000,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 769,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 401,
      settings: {
        slidesToShow: 1
      }
    }]
  });

  var stickyHeader = function stickyHeader() {
    var element = Header.offset().top + Header.height(),
        $mastHead = $('header .hero'),
        scrollTop = $window.scrollTop();

    if (scrollTop >= element) {
      $mastHead.addClass('is-sticky');
    } else {
      $mastHead.removeClass('is-sticky');
    }
  };

  var toggleMenu = function toggleMenu() {
    var $toggleMenu = $('#toggleMenu'),
        $toggleButton = $('.nav-toggle');
    $toggleButton.toggleClass('is-active');
    $toggleMenu.toggleClass('menu-is-active');
  };

  $('.nav-toggle').bind('click', function () {
    toggleMenu();
  });

  // Run stickyHeader() when scroll more than height of Header element
  $(window).on('scroll resize', function () {
    stickyHeader();
  });
});
//# sourceMappingURL=main.js.map

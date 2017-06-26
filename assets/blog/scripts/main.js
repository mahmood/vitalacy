'use strict';

$(document).ready(function () {
  var browser = $.browser,
    Header = $('header'),
    $window = $(window);

  $('.popup-open').click(function () {
    $('#demop').addClass('active');
  });

  $('#demop .fa-close').click(function () {
    $('#demop').removeClass('active');
  });

  $('#subscribe_form').submit(function (e) {
    e.preventDefault();
    var data = {
      name: e.target[0].value,
      email: e.target[1].value,
      companyName: e.target[2].value
    };
    //form validation
    if (data.name.length == 0) {
      alert('please enter name');
    } else if (data.email.length == 0) {
      alert('please enter email address');
    } else if (data.companyName.length == 0) {
      alert('please enter company name');
    }

    $.ajax({
      method: "post",
      url: "https://forms.hubspot.com/leadin/submit/v2/form",
      data: data,
      dataType: 'json',
      sucess: function (res) {
        console.log('response', res);
      },
      error: function(res) {
        console.log(res);
      }
    });

    $('#subscribe_form').fadeOut('fast');
    $('#message').fadeIn('fast');
  });

  //fix safari height bug
  if (browser.safari) {
    $('.toggleMenu').css('left', 0);
  }
  if (browser.safari && browser.desktop) {
    $(".recent__item__img").addClass('fix-img-height');
    $("#recent .recent__item .is-4.is-parent").addClass('fix-parent-height');

    function unifyHeights() {
      var maxHeight = 0;
      $('.recent__item__img').each(function () {
        var height = $('.recent__item__img')
          .parent()
          .height();
        $('.recent__item__img').css('height', height / 2 + 70);
      });
    }
    unifyHeights();
  }

  $('.post p')
    .each(function () {
      var $this = $(this);
      if ($this.html().replace(/\s| /g, '').length == 0) {
        $this.addClass('empty');
      }
    });

  if (browser.msie) {
    $('body').append('<div class="IE-alert"><p>Still using Internet Explorer? Get a safer browser, try' +
        ' Chrome - <a href="https://www.google.com/chrome/">Download</a></p></div>');
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
    responsive: [
      {
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
      }
    ]
  });

  //featured post slider
  $('#featured_slider').addClass('featured_slider_fix');
  $('#featured_slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev"><i class="prevIcon"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="nextIcon"></i></button>',
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToScroll: 1,
  });

  var stickyHeader = function stickyHeader() {
    var element = Header
        .offset()
        .top + Header.height(),
      $mastHead = $('header .hero'),
      scrollTop = $window.scrollTop();

    if (scrollTop >= element) {
      $('.hidden').addClass('is-sticked');
    } else {
      $('.hidden').removeClass('is-sticked');
    }
  };

  var toggleMenu = function toggleMenu() {
    var $toggleMenu = $('.toggleMenu'),
      $toggleButton = $('.nav-toggle');
    $toggleButton.toggleClass('is-active');
    $toggleMenu.toggleClass('menu-is-active');
  };

  $('.nav-toggle').bind('click', function () {
    toggleMenu();
  });


   var toggleMenu2 = function() {
    var $toggleMenu = $('.toggleMenu'),
      $toggleButton = $('#nav-toggle2');
    $toggleButton.toggleClass('is-active2');
    $toggleMenu.toggleClass('menu-is-active2');
  };

  $('#nav-toggle2').bind('click', function () {
    toggleMenu2();
  });
  

  // Run stickyHeader() when scroll more than height of Header element
  $(window).on('scroll resize', function () {
    stickyHeader();
  });
});
//# sourceMappingURL=main.js.map # sourceMappingURL=main.js.map
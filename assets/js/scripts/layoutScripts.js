//Scripts layoutScripts v1.0

// Funciones Generales
var $menuMobile = $('#mm'),
    $botnoMobile = $('#openMenuMobile'),
    $dataAttr = $('[data-menu-expand]');
function menuMobile() {
  var elDato = $dataAttr.attr('data-menu-expand');
  // console.log(elDato);
  switch (elDato) {
    case 'false':
      $menuMobile.attr('data-menu-expand', true);
      $botnoMobile.attr('data-menu-expand', true);
      TweenMax.to($menuMobile, 0.3, { scale: 1.0, opacity: 1, ease: Power3.easeInOut, zIndex: 4, easeParams: [1.1,0.7], force3D: true });
      break;
    case 'true':
      $menuMobile.attr('data-menu-expand', false);
      $botnoMobile.attr('data-menu-expand', false);
      TweenMax.to($menuMobile, 0.3, { scale: 1.2, opacity: 0, ease: Power3.easeInOut, zIndex: -1, easeParams: [1.1,0.7], force3D: true });
      break;
    default:
      break;
  }
}

function WowData() {
  var wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       false,       // default
    live:         true        // default
  })
  setTimeout(function(){
    wow.init();
  },1000);
}

var $isOpen = false,
    $overlay = $('.overlayGenerico'),
    $modalGen = $('#auto-generico');
function effectsModal(id) {
  TweenMax.to($overlay, 0.1, { autoAlpha:1 });
  TweenMax.fromTo($(id), 0.6, { top: '-300%'}, { delay: 0.2, top: "0%", ease:Power3.easeInOut, easeParams:[1.1,0.7], force3D: true });
}
function abreModalID() {
  $('[data-open-modal]').each(function(){
    $(this).click(function(e){
      var $idProd = $(this).data('modal-id');
      e.preventDefault();
      effectsModal($idProd);
      // $('body').addClass('bloquear');
    });
  });
}
function closeModalID() {
  $('[data-close-modal]').click(function(e){
    e.preventDefault();
    var id = $(this).attr('data-close-modal');
    TweenMax.to($overlay, 0.1, { delay: 0.55, autoAlpha: 0 });
    TweenMax.to($(id), 0.55, { top: '300%', ease:Power3.easeInOut, force3D: true });
    // $('body').removeClass('bloquear');
  });
}
function closeModForm() {
  $('[data-close-form]').click(function(e){
    e.preventDefault();
    TweenMax.to($('#formOpen'), 0.1, { scale: 1.2, opacity: 0, ease: Power3.easeInOut, zIndex: -1, easeParams: [1.1,0.7], force3D: true });
  });
}

function altoHead() {
  var head = $('header').outerHeight();
  $('#mm').css({ 'top': head+'px' })
}

function recaptchaCallback() {
  $('#hiddenRecaptcha').valid();
}

function isSafari() {return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);}
function isChrome() {return /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);}
function scrolMenu() {
  var c, currentScrollTop = 0,
       navbar = $('#headerGeneral');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.outerHeight();
     
      currentScrollTop = a;
     
      if (c < currentScrollTop && a > b + b) {
        // navbar.addClass("scrollHUp");
        if(isSafari() || isChrome()) {
          navbar.css('-webkit-transform', 'translateY(-100%)');
        } else {
          navbar.css('transform', 'translateY(-100%)');
        }
      } else if (c > currentScrollTop && !(a <= b)) {
        // navbar.removeClass("scrollHUp");
        if(isSafari() || isChrome()) {
          navbar.css('-webkit-transform', 'translateY(0)');
        } else {
          navbar.css('transform', 'translateY(0)');
        }
      }
      c = currentScrollTop;
  });
}

function headScrolDown() {
  //WindowSrcoll
  $(window).on("scroll", function() {
    let headerPirn = $("#headerGeneral").outerHeight();
    let sumaHead = headerPirn + 50;
    if($(window).scrollTop() > sumaHead) {
        $("#headerGeneral").addClass("activeHead");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
      $("#headerGeneral").removeClass("activeHead");
    }
  });
}

// Load window
$(window).on('load', function(){
  scrolMenu();
  headScrolDown();
  WowData();
});

// DOM ready
jQuery(document).ready(function($){
  scrolMenu();
  headScrolDown();
  WowData();
  abreModalID();
  closeModalID();
  // altoHead()
  $('#md').clone().prependTo('#contListMenu').removeAttr('id').show();
  TweenMax.to($('#mm'), 0, {scale: 1.2, opacity: 0, zIndex: -1, force3D: true});
  $(window).scroll(function(event) {
    var scroll = $(this).scrollTop();
    $('.header-title').css({
      opacity: function() {
        var elementHeight = $(this).height(),
            opacity = ((1 - (elementHeight - scroll) / elementHeight) * 0.8) + 0.0;
        return opacity;
      }
    });
  });

  $('#contListMenu ul li a').click(function(){
    $menuMobile.attr('data-menu-expand', false);
    $botnoMobile.attr('data-menu-expand', false);
    TweenMax.to($menuMobile, 0.3, { scale: 1.2, opacity: 0, ease: Power3.easeInOut, zIndex: -1, easeParams: [1.1,0.7], force3D: true });
  });

  $('.slideProfesrores').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    dots: true,
    speed: 300,
    prevArrow: $('#prevslideHome'),
    nextArrow: $('#nextslideHome'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
        }
      }
    ]
  });

  //BackToTop
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

  
});
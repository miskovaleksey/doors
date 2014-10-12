//=require pixel-perfect.js
//=require cookie.js
//=require carousel.js



jQuery(function(){

  $(window).load(function(){

    if($('#map').length>0){
      var log = 60.602092;
      var lat = 56.831718;
      installMap(lat,log);
    }
  });

  $('body a.scroll').click(function () {
     elementClick = $(this).attr("href");
     destination = $(elementClick).offset().top;
     $('body, html').animate( { scrollTop: destination }, 1100 );
     return false;
   });

  $(document).ajaxSend(function(e, xhr, options) {
    var token = $("meta[name='csrf-token']").attr("content");
    xhr.setRequestHeader("X-CSRF-Token", token);
  });

  pixelPerfect('./image/doors.jpg', '0.5');

  $('header .wrapper-contant a.button').click(function () {
    $('#popup').modal('show');
  })

  // new Carousel('#section-reviews .carusel');

  //$('.carousel').carousel();
  //$('.carousel').carousel('pause');

  function installMap(lat, log){
    var coords = [lat,log];
    var map = new ymaps.Map ("map", {
        center: coords,
        zoom: 15
    });

    var position = map.getGlobalPixelCenter();
    map.setGlobalPixelCenter([ position[0], position[1] ]);
    var placemark = new ymaps.Placemark(coords, {
       content: '',
       balloonContent: ''
      });
    map.geoObjects.add(placemark);
    map.controls
       .add('zoomControl')
       .add('typeSelector');
  }

  // run function position nav ellement after scroll
  $(window).on('scroll', scrollUpDucument);
  // run function position nav element after ducument ready
  scrollUpDucument();

});

  function scrollUpDucument (argument) {
    var element          = $('#section-hero');
    var heightElement    = $(element).outerHeight(true);
    var top              = $(element).offset().top;
    var bottom           =  heightElement + top;
    var upPositionWindow = window.scrollY;

    $('.arrow-up').removeClass('fixed')

    if (bottom < upPositionWindow) {
      $('.arrow-up').addClass('fixed');
      // console.log('position fixed');
    };

  }
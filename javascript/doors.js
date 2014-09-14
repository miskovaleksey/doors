//=require pixel-perfect.js
//=require cookie.js
//=require carousel.js



jQuery(function(){

  $(window).load(function(){

    if($('#map').length>0){
      var log = 60.718603;
      var lat = 56.758995;
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

  new Carousel('#section-reviews .carusel');

  function installMap(lat, log){
    var coords = [lat,log];
    var map = new ymaps.Map ("map", {
        center: coords,
        zoom: 16
    });

    var position = map.getGlobalPixelCenter();
    map.setGlobalPixelCenter([ position[0], position[1] ]);
    var placemark = new ymaps.Placemark(coords, {
       content: '',
       balloonContent: ''
      });
    map.geoObjects.add(placemark);
  }

  // run function position nav ellement after scroll
  $(window).on('scroll', scrollUpDucument);
  // run function position nav element after ducument ready
  scrollUpDucument();

});

  function scrollUpDucument (argument) {
    var element          = $('#section-price');
    var upPostionParent  = element.offset().top;
    var upPositionWindow = window.scrollY;

    element.find('.arrow-up').removeClass('fixed')
    if (upPostionParent < upPositionWindow) {
      element.find('.arrow-up').addClass('fixed')
      console.log('position fixed');
    };

  }
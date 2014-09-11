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

});
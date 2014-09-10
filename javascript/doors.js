//=require pixel-perfect.js
//=require cookie.js


jQuery(function(){

  $(document).ajaxSend(function(e, xhr, options) {
    var token = $("meta[name='csrf-token']").attr("content");
    xhr.setRequestHeader("X-CSRF-Token", token);
  });

  pixelPerfect('./image/doors.jpg', '0.5');

  $('header .wrapper-contant a.button').click(function () {
    $('#popup').modal('show');
  })

  // var popup = new PopupSimple('#form-popup');

  // $('.types a').click(function(){
  //   popup.show();
  //   var parentElement = $(this).parents('.wrap-item');
  //   var htmlForPopup  = $(parentElement).find('.block-for-popup').html();

  //   $('#popup-simple-content').html(htmlForPopup);
  //   new Carousel('#popup-simple-wraper .wrapper-images');
  //   popup.center();

  //   $('#popup-simple-wraper .item').each(function(index, element){
  //     console.log(element);
  //     if (index == 0) {
  //       $(element).addClass('active');
  //     };
  //   });

  //   $('#popup-simple-wraper .item').click(function () {
  //     $('#popup-simple-wraper .item').removeClass('active');
  //     setActiveImage($(this));
  //     return false;
  //   });

  //   return false;
  // });

  // $('.product a').click(function () {
  //     popup.show();
  //     var parentElement = $(this).parents('.wrap-links');
  //     var htmlForPopup  = $(parentElement).find('.block-for-popup').html();

  //     $('#popup-simple-content').html(htmlForPopup);
  //     new Carousel('#popup-simple-wraper .wrapper-images');
  //     popup.center();

  //     $('#popup-simple-wraper .item').each(function(index, element){
  //       console.log(element);
  //       if (index == 0) {
  //         $(element).addClass('active');
  //       };
  //     });

  //     $('#popup-simple-wraper .item').click(function () {
  //       $('#popup-simple-wraper .item').removeClass('active');
  //       setActiveImage($(this));
  //       return false;
  //     });


  //     return false;
  // });


  // var setActiveImage = function (link) {
  //   $(link).addClass('active');
  //   var newSrc = $(link).find('img').attr('src');
  //   $('#popup-simple-wraper .image img').attr('src', newSrc);
  // }

});
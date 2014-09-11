function Carousel(element){
  this.viewport = $(element).find('.viewport');

  this.count = this.viewport.find('.item').length;
  this.current = 0;

  // this.links = $(element).find('.links a')
  // this.links.each(function(i){ $(this).data('index', i); });

  this.update();

  $(element).find('.arrow').on('click', function (event) {
    event.preventDefault();
    var delta = $(event.currentTarget).hasClass('right') ? 1 : -1 ;
    this.moveTo(this.current + delta);
  }.bind(this));

  // this.links.on('click', function (event) {
  //   event.preventDefault();
  //   this.moveTo($(event.currentTarget).data('index'));
  // }.bind(this));

  if ($(window).width() > 1170) {
    $(window).resize(this.update.bind(this));
  }
  $(window).load(this.update.bind(this));
}

Carousel.prototype = {
  update: function(){
    this.width = this.viewport.width();
    this.viewport.find('.item').css('width', this.width);
    this.viewport.find('.wrapper').css('width', this.width*this.count);
    this.viewport.prop('scrollLeft',this.positionOf(this.current));
  },

  moveTo: function(index){
    console.log(' before index ', index);
    if(index < 0)
      index = this.count-1;

    if(index >= this.count)
      index = 0;

   console.log('after index ', index);
    this.viewport.animate({scrollLeft: this.positionOf(index)}, 300);

    // this.links.eq(this.current).removeClass('active');
    // this.links.eq(index).addClass('active');
    this.current = index;
  },

  positionOf: function(index){
    return this.width * index;
  }
}



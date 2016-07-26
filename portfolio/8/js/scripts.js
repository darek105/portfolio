$(function() {

  $('.slider').each(function functionName() {
    //zmienne do obslugi slajdow
    var $this = $(this);
    var $elements = $this.find('.elementsSlider');
    var $slides = $this.find('.slide');
    var beforeIndex = 0;
    var timeOut;

    function nextSlide(newIndex){
       var moveLeft, slideGoLeft;

       timeShow(); //czas wyświetlania

       if($elements.is(':animated') || beforeIndex === newIndex){
         return;
       }

       if(newIndex > beforeIndex) {
         slideGoLeft = '100%';
         moveLeft = '-100%';
       } else {
         slideGoLeft = '-100%';
         moveLeft = '100%';
       }

       $slides.eq(newIndex).css({
         left: slideGoLeft,
         display: 'block'
       });

      $elements.animate({
        left: moveLeft
      }, function () {
        $slides.eq(beforeIndex).css({
          display: 'none'
        });
        $slides.eq(newIndex).css({
          left: 0
        });
        $elements.css({
          left: 0
        });
        beforeIndex = newIndex;
      });

    }

    function timeShow() {
      clearTimeout(timeOut);
      timeOut = setTimeout(function () {
          if (beforeIndex < ($slides.length - 1)) {
            nextSlide(beforeIndex + 1);
          } else {
            nextSlide(0);
          }
      }, 4000);
    }

    timeShow();
  });
});


$(function() {

  $('.system').on('mousemove', function() {
    $(this).css({
      'background': '#0E111C'
    });

    var $index = $('.system').index(this);

    $('.description').eq($index ).css({
      'background': '#819DFF'
    });

    $('.description p').eq($index ).css({
      'color' : '#0E111C'
    });

    $('.description h4').eq($index ).css({
      'color' : '#0E111C'
    });

  });

  $('.system').on('mouseout', function() {
    $(this).css({
      'background': '#819DFF'
    });

    var $index = $('.system').index(this);

    $('.description').eq($index ).css({
      'background': '#4B5B94'
    });

    $('.description p').eq($index).css({
      'color' : 'white'
    });

    $('.description h4').eq($index).css({
      'color' : 'white'
    });
  });
});


$(function() {

  $('.acordArt').hide();

  $('.acordin-visible').on('click', function(event){
    event.preventDefault();

    var $index = $('.acordin-visible').index(this);

    $('.acordArt').eq($index).slideToggle('slow', function (event) {
      if($(this).is(':visible')){
        $('.acordin-visible').eq($index).html('<img src="img/top.png" alt="" />');
      } else {
        $('.acordin-visible').eq($index).html('<img src="img/down.png" alt="" />');
      }
    });

  });
});


$(function() {

  $('.link').hide();

  $('.ph').on('mousemove', function () {

    var $index = $('.ph').index(this);

    $('.link').eq($index).show();

    $('.link').on('mouseout', function () {
        $(this).eq($index).hide();
    });
  });
});

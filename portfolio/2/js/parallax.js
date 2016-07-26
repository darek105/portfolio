window.onscroll = function(){
    var items = [].slice.call(document.querySelectorAll('[data-parallax]'));

    items.forEach(function(element){
        var translateY = "translateY("+(window.pageYOffset/parseInt(element.getAttribute('data-parallax')))+"px)";
        element.style["-webkit-transform"] = translateY;
        element.style["-moz-transform"] = translateY;
        element.style["-ms-transform"] = translateY;
        element.style["-o-transform"] = translateY;
        element.style["transform"] = translateY;
    });
}

$('.slider').each(function() {

  var $this, $elements, $slide, buttonA, count, timeout;

  $this   = $(this);
  $elements  = $this.find('.slide_elements');
  $slides = $this.find('.slide');
  buttonA  = [];
  count = 0;
  timeout;

  function move(index) {
    var moveLeft, slideLeft;

    advance();


    if ($elements.is(':animated') || count === index) {
      return;
    }

    buttonA[count].removeClass('active');
    buttonA[index].addClass('active');

    if (index > count) {
      slideLeft = '100%';
      moveLeft = '-100%';
    } else {
      slideLeft = '-100%';
      moveLeft = '100%';
    }

    $slides.eq(index).css( {left: slideLeft, display: 'block'} );

    $elements.animate( {left: moveLeft}, function() {
      $slides.eq(count).css( {display: 'none'} );
      $slides.eq(index).css( {left: 0} );
      $elements.css( {left: 0} );
      count = index;
    });
  }

  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (count < ($slides.length - 1)) {
        move(count + 1);
      } else {
        move(0);
      }
    }, 5000);
  }

  $.each($slides, function(index) {
    var $button = $('<button type="button" class="slide-btn">&bull;</button>');
    if (index === count) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide-buttons');
    buttonA.push($button);
  });

  advance();


});

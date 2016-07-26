$('.box-set').on('click', function(event) {
    if ($(window).width() >= 1800 ) {
      for (var $i = 1; $i < 9; $i++) {
        var $itemsBox = $('.box-' + $i);
        $($itemsBox).addClass('boxx_1800-' + $i);
      }
    }else if ($(window).width() >= 1550 ) {
      for (var $i = 1; $i < 9; $i++) {
        var $itemsBox = $('.box-' + $i);
        $($itemsBox).addClass('boxx_1300-' + $i);
      }
    }else if ($(window).width() >= 1250 ) {
      for (var $i = 1; $i < 9; $i++) {
        var $itemsBox = $('.box-' + $i);
        $($itemsBox).addClass('boxx_1300-' + $i);
      }
    }else if ($(window).width() >= 720) {
      for (var $i = 1; $i < 9; $i++) {
        var $itemsBox = $('.box-' + $i);
        $($itemsBox).addClass('boxx_else-' + $i);
      }
    } else {
      for (var $i = 1; $i < 9; $i++) {
        var $itemsBox = $('.box-' + $i);
        $($itemsBox).addClass('boxx_smart-' + $i);
      }
      $('.box-set').addClass('box-set-width');
    }

});

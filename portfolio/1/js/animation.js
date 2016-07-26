$(function() {

  /*NAWIGACJA*/

  $('.carousel').hide().slideDown(2000).carousel({
  interval: 4000
  });

  $('nav').hide().delay(1500).fadeIn(2300);   //Odkrycie bloku nawiagacji
  $('li.menu').hide().delay(1500).each(function(index) {          // Ukrycie elementów listy menu
    $(this).delay(400 * index).fadeIn(1700);     // A następnie ich pokazanie
  });
});

$('.tab-list').each(function(){
  var $this = $(this),
      $tab = $this.find('li.active'),
      $link = $tab.find('a'),
      $panel = $($link.attr('href'));

  $this.on('click', '.tab-control', function(e) {
    e.preventDefault();
    var $link = $(this),
        id = this.hash;

    if (id && !$link.is('.active')) {
      $panel.removeClass('active');
      $tab.removeClass('active');

      $panel = $(id).addClass('active');
      $tab = $link.parent().addClass('active');
    }
  });
});

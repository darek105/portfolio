$(function() {
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

  $('.art1_hover').hide();
  $('.art2_hover').hide();
  $('.art3_hover').hide();
  $('.art4_hover').hide();

  $('.article1').on('mouseover', function() {
      $('.art1_hover').show();
  });
  $('.article1').on('mouseout', function() {
      $('.art1_hover').hide();
  });

  $('.article2').on('mouseover', function() {
      $('.art2_hover').show();
  });
  $('.article2').on('mouseout', function() {
      $('.art2_hover').hide();
  });

  $('.article3').on('mouseover', function() {
      $('.art3_hover').show();
  });
  $('.article3').on('mouseout', function() {
      $('.art3_hover').hide();
  });

  $('.article4').on('mouseover', function() {
      $('.art4_hover').show();
  });
  $('.article4').on('mouseout', function() {
      $('.art4_hover').hide();
  });


});

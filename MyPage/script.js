$(function() {

    $('#hamburger').click(function() {
        $(this).toggleClass('open');
        $('.hamburger_menu').toggleClass('show');
        $('.hamburger_menu').toggleClass('background_menu_phone_show');
    });

    $('.home_title').hide();
    $('.home_title').delay(200).slideDown('slow');

    $('.box_menu').hide();
    $('.box_menu').delay(200).slideDown('slow');

    if ($(window).width() >= 780) {
        $('.title_myself').fadeOut();
        $('.line').fadeOut();
        $('.description_myself').fadeOut();
        $('.know').fadeOut();
        $('.learn').fadeOut();
        $('.title_portfolio').fadeOut();
        $('.point').fadeOut();
        $('.email').fadeOut();
        $('.box_large').fadeOut();
        $('.title_contact').fadeOut();
        $('iframe').fadeOut();
        $('footer').fadeOut();
    }

    $(document).on("scroll", animationScroll);

    function animationScroll(event) {

        if ($(window).width() >= 780) {
            if ($(document).scrollTop() > 250) {
                $('.line').eq(0).slideDown('slow');
            }
            if ($(document).scrollTop() > 500) {
                $('.title_myself').eq(0).slideDown('slow');
            }
            if ($(document).scrollTop() > 900) {
                $('.description_myself').slideDown('slow');
            }
            if ($(document).scrollTop() > 1100) {
                $('.line').eq(1).slideDown('slow');
            }
            if ($(document).scrollTop() > 1650) {
                $('.title_myself').eq(1).slideDown('slow');
            }
            if ($(document).scrollTop() > 1850) {
                $('.know').fadeIn('slow');
            }
            if ($(document).scrollTop() > 2250) {
                $('.title_myself').eq(2).slideDown('slow');
            }
            if ($(document).scrollTop() > 2450) {
                $('.learn').fadeIn('slow');
            }
            if ($(document).scrollTop() > 2970) {
                $('.title_portfolio').slideDown('slow');
            }
            if ($(document).scrollTop() > 3120) {
                $('.box_large').eq(0).slideDown('slow');
            }
            if ($(document).scrollTop() > 3500) {
                $('.box_large').eq(1).slideDown('slow');
            }
            if ($(document).scrollTop() > 3800) {
                $('.title_contact').slideDown('slow');
            }
            if ($(document).scrollTop() > 4050) {
                $('.point').slideDown('slow');
            }
            if ($(document).scrollTop() > 4250) {
                $('.email').slideDown('slow');
            }
            if ($(document).scrollTop() > 4350) {
                $('iframe').slideDown('slow');
                $('footer').slideDown('slow');
            }
        }

    }

    $('.scrollTo').on('click', function(event) {
        // body...
        var ahref = $(this).attr('href');
        console.log(ahref);
        $('html, body').animate({
            scrollTop: $(ahref).offset().top
        }, 2000);
    });

    for (var i = 0; i <= 9; i++) {
        var pixels = (20 * i);
        var value = pixels + 'px';
        $('.box_skills img').eq(i).css('top', value);
    }


    window.onscroll = function() {
        var items = [].slice.call(document.querySelectorAll('[data-parallax]'));

        items.forEach(function(element) {
            var translateY = "translateY(" + (window.pageYOffset / parseInt(element.getAttribute('data-parallax'))) + "px)";
            element.style["-webkit-transform"] = translateY;
            element.style["-moz-transform"] = translateY;
            element.style["-ms-transform"] = translateY;
            element.style["-o-transform"] = translateY;
            element.style["transform"] = translateY;
        });
    }

    //
    $(document).on("scroll", onScroll);

    function onScroll(event) {

        var widthScreeen = $(window).width();

        if (widthScreeen > 651) {
            if ($(document).scrollTop() > 750) {
                $('.box_menu').addClass('background_menu');
            } else {
                $('.box_menu').removeClass('background_menu');
            }
        }
        if (widthScreeen < 650) {
            if ($(document).scrollTop() > 0) {
                $('.box_menu_phone').addClass('background_menu_phone');
            } else {
                $('.box_menu_phone').removeClass('background_menu_phone');
            }
        }
        //hamburger_menu

        var scrollPos = $(document).scrollTop();
        $('.menu-item').each(function(i) {
            var currLink = $(this);
            var widthLi = currLink.width();
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top - 300 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.menu-item').removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }


    $('.port_img').hover(
        function() {
            $(this).animate({
                opacity: '1'
            });
        },
        function() {
            $(this).animate({
                opacity: '0'
            });
        }
    );
});

var venueMap;
function initialize() {

  var pinLocation = new google.maps.LatLng(50.034071,19.905587);

  var mapOptions = {
    zoom: 14,
    center: pinLocation,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    panControl: true,
    scrollwheel: false,
    zoomControl: false,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.TOP_RIGHT
    },

    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      position: google.maps.ControlPosition.TOP_LEFT
    },

    scaleControl: false,
    scaleControlOptions: {
      position: google.maps.ControlPosition.TOP_CENTER
    },
    streetViewControl: false,
    overviewMapControl: false,

    styles: [
      {
        stylers: [
          { hue: "#00ff6f" },
          { saturation: -50 }
        ]
      }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [
          { lightness: 100 },
          { visibility: "simplified" }
        ]
      }, {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          { hue: "#000000" },
          { saturation: -80 }
        ]
      }, {
        featureType: "transit",
        elementType: "labels",
        stylers: [
          { hue: "#616161" },
          { saturation: -80 }
        ]
      }, {
        featureType: "poi",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }, {
        featureType: "poi.park",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }, {
        featureType: "water",
        elementType: "geometry",
        stylers: [
          { hue: "#c4f4f4" }
        ]
      }, {
        featureType: "road",
        elementType: "labels",
        stylers: [
          { visibility: "on" }
        ]
      }
    ]
  };

  var venueMap = new google.maps.Map(document.getElementById('map'), mapOptions);

  google.maps.event.addDomListener(window, "resize", function() {
     var center = map.getCenter();
     google.maps.event.trigger(map, "resize");
     map.setCenter(center);
  });

  var startPosition = new google.maps.Marker({
    position: pinLocation,
    map: venueMap,
    icon: "img/localization.png"
  });

}

function loadScript() {
  var script = document.createElement('script');
  script.src = 'http://maps.googleapis.com/maps/api/js?key=AIzaSyBbfFuD885t4bTdvUm_oKuleeFEViY62ZA&callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;

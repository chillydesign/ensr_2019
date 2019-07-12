(function($, root, undefined) {
  $(function() {
    "use strict";

    var $window = $(window);
    var $body = $("body");
    var $header = $("header");

    // mobile menu button
    var $menu_button = $("#menu_button");
    var $nav = $("nav ul");
    $menu_button.on("click", function(e) {
      e.preventDefault();
      $nav.toggleClass("menu_visible");
    });

    // if press escape key, hide menu
    $(document).on("keydown", function(e) {
      if (e.keyCode == 27) {
        $nav.removeClass("menu_visible");
      }
    });

    $("#main").on("click", function() {
      $nav.removeClass("menu_visible");
    });


    $('.closable').on("click", function() {
      $(this).hide();
    });

    ////////////////////////////
    // animate sliding down page
    $(".scroll_link").on("click", function(e) {
      e.preventDefault();

      var $this = $(this);
      var $href = $this.attr("href");
      var $hash = $href.split("#")[1];

      if (typeof $hash !== "undefined") {
        var $location = $("#" + $hash);
        if ($location.length > 0) {
          var $scrollPosition = $location.offset().top;
          if ($header.length > 0) {
            $scrollPosition -= $header.height();
          }
          $("html, body").animate({ scrollTop: $scrollPosition }, 1000);
        } else {
          window.location.href = $href;
        }
      } else {
        window.location.href = $href;
      }
    });
    ////////////////////////////
    // animate sliding down page

    // ANIMATE SECTIONS AS SLIDE DOWN PAGE
    // ANIMATE SECTIONS AS SLIDE DOWN PAGE

    var $sections = $("section.section");
    var $windowHeight = $window.height();
    if ($sections.length > 0) {
      // make first section visible by defualt
      $sections.first().addClass("visible");

      $window.on("scroll", function() {
        var $scrollTop = $window.scrollTop();
        $sections.each(function(index) {
          var $section = $(this);
          var $distanceFromTop = $section.offset().top;
          if ($scrollTop > $distanceFromTop - $windowHeight + 200) {
            if ($section.hasClass("visible") == false) {
              $section.addClass("visible");
            }
          }
        });
      });
    }

    // ANIMATE SECTIONS AS SLIDE DOWN PAGE
    // ANIMATE SECTIONS AS SLIDE DOWN PAGE

    // SLIDER
    // SLIDER

    $(".slick_slider").slick({
      dots: true,
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 7000,
      speed: 1000,
      cssEase: "ease-in-out",
      pauseOnHover: false
    });

    $(".slick_slider_no_dots").slick({
      dots: false,
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 7000,
      speed: 1000,
      cssEase: "ease-in-out",
      pauseOnHover: false
    });
    // SLIDER
    // SLIDER
  });
})(jQuery, this);

// NOTE CHARLES ADD CHILLY MAPS
function generate_chilly_map($options) {
  var map_theme = [
    {
      featureType: "administrative",
      elementType: "all",
      stylers: [{ saturation: "-100" }]
    },
    {
      featureType: "administrative.province",
      elementType: "all",
      stylers: [{ visibility: "off" }]
    },
    {
      featureType: "landscape",
      elementType: "all",
      stylers: [{ saturation: -100 }, { lightness: 65 }, { visibility: "on" }]
    },
    {
      featureType: "poi",
      elementType: "all",
      stylers: [
        { saturation: -100 },
        { lightness: "50" },
        { visibility: "simplified" }
      ]
    },
    {
      featureType: "road",
      elementType: "all",
      stylers: [{ saturation: "-100" }]
    },
    {
      featureType: "road.highway",
      elementType: "all",
      stylers: [{ visibility: "simplified" }]
    },
    {
      featureType: "road.arterial",
      elementType: "all",
      stylers: [{ lightness: "30" }]
    },
    {
      featureType: "road.local",
      elementType: "all",
      stylers: [{ lightness: "40" }]
    },
    {
      featureType: "transit",
      elementType: "all",
      stylers: [{ saturation: -100 }, { visibility: "simplified" }]
    },
    {
      featureType: "water",
      elementType: "geometry",
      stylers: [{ hue: "#ffff00" }, { lightness: -25 }, { saturation: -97 }]
    },
    {
      featureType: "water",
      elementType: "labels",
      stylers: [{ lightness: -25 }, { saturation: -100 }]
    }
  ];

  var map_options = {
    zoom: 15,
    mapTypeControl: true,
    scrollwheel: false,
    draggable: true,
    navigationControlOptions: {
      style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
    // ,
    // styles: map_theme
  };

  var location_map_container = jQuery($options.element);
  location_map_container.css({
    width: "100%",
    height: 300
  });

  var location_map = new google.maps.Map(
    location_map_container.get(0),
    map_options
  );
  var latlng = new google.maps.LatLng($options.lat, $options.lng);
  var infowindow = new google.maps.InfoWindow({ content: "" });
  var marker = new google.maps.Marker({
    position: latlng,
    map: location_map,
    optimized: false
  });

  marker.addListener("click", function() {
    infowindow.setContent($options.title);
    infowindow.open(location_map, this);
  });

  location_map.setCenter(latlng);
}
// MAP

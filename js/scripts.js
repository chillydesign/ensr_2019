(function ($, root, undefined) {
  $(function () {
    "use strict";

    var $window = $(window);
    var $body = $("body");
    var $header = $("header");



    // mobile menu button
    var $menu_button = $("#menu_button");
    var $nav = $("#primary_nav");
    $menu_button.on("click", function (e) {
      e.preventDefault();
      $nav.toggleClass("menu_visible");
    });

    // if press escape key, hide menu
    $(document).on("keydown", function (e) {
      if (e.keyCode == 27) {
        $nav.removeClass("menu_visible");
      }
    });

    $("#main").on("click", function () {
      $nav.removeClass("menu_visible");
    });


    var $hasChildren = $('li.menu-item-has-children');
    $hasChildren.on('click', function (e) {
      var $windowWidth = $window.width();
      // mobile nav
      if ($windowWidth < 768) {

        var $this = $(this);
        var $hasExpanded = $this.hasClass('expanded');
        const target = e.target;
        const grandparent = target.parentElement.parentElement;

        if (target.nodeName == 'LI') {
          $hasChildren.removeClass('expanded');
          if (!$hasExpanded) {
            $this.addClass('expanded');
          }
        } else {
          if (grandparent.className == 'sub-menu') {
            // if clicking on a sub menu item, let the user navigate to it
          } else {
            $hasChildren.removeClass('expanded');
            if (!$hasExpanded) {
              // if clicking on a parent link, dont let them navigate there
              // unless the menu is already open
              $this.addClass('expanded');
              e.preventDefault();
            }
          }
        }
      }


    });


    // MATCH HEIGHT
    // MATCH HEIGHT
    $('.focus_image_match_height').matchHeight();
    // MATCH HEIGHT
    // MATCH HEIGHT


    // GOOGLE TAG AND FACEBOOK PIXEL EVENTS ON CONTACT FORM SUBMIT


    document.addEventListener('wpcf7mailsent', function (event) {
      var contactFormId = parseInt(event.detail.contactFormId, 10);

      // 5416 Contact pop up EN  contact_widget
      // 5415 Contact pop up FR  contact_widget

      // 5020 Contact EN nouveau contact_page
      // 4877 Contact FR nouveau contact_page

      // [contact-form-7 id="5737" title="Book a visit"]
      // [contact-form-7 id="5736" title="Réserver une visite"]

      if (contactFormId == 5416) {
        console.log(contactFormId, 'contact_widget');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'contact_widget');
      } else if (contactFormId == 5415) {
        console.log(contactFormId, 'contact_widget_french');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'contact_widget_french');
      } else if (contactFormId == 5020) {
        console.log(contactFormId, 'contact_page');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'contact_page');
      } else if (contactFormId == 4877) {
        console.log(contactFormId, 'contact_page_french');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'contact_page_french');
      } else if (contactFormId == 5737) {
        console.log(contactFormId, 'visit_page');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'visit_page');
      } else if (contactFormId == 5736) {
        console.log(contactFormId, 'visit_page_french');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'visit_page_french');
      } else if (contactFormId == 4426) {
        console.log(contactFormId, 'landing_page');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'landing_page');
      } else if (contactFormId == 4422) {
        console.log(contactFormId, 'landing_page_french');
        fbq('track', 'Lead');
        ga('send', 'event', 'lead', 'submit', 'landing_page_french');
      }


    });
    // GOOGLE TAG AND FACEBOOK PIXEL EVENTS ON CONTACT FORM SUBMIT



    $('.closable').on("click", function () {
      $(this).hide();
    });

    ////////////////////////////
    // animate sliding down page
    $(".scroll_link").on("click", function (e) {
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

      $window.on("scroll", function () {
        var $scrollTop = $window.scrollTop();
        $sections.each(function (index) {
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

    $('#sidecontactbutton').on('click', function (e) {
      e.preventDefault();
      $('#sidecontact_conatiner').toggleClass('visible');

    });




    // POP UP MESSAGE ON HOME PAGE
    var $home_page_message = $('#home_page_message');

    $('.cancel_message').on('click', function (e) {
      e.preventDefault();
      $home_page_message.hide();

      var d = new Date();
      d.setTime(d.getTime() + (60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = "home_page_message_hide=true;" + expires + "; path=/";


    });
    var home_page_message_cookie = getCookie("home_page_message_hide");
    if (home_page_message_cookie != "") {

    } else {
      $home_page_message.show();
    }


    var $popupportesouvertes = $('#popupportesouvertes');
    $popupportesouvertes.on('click', function (e) {
      e.preventDefault();
      $popupportesouvertes.hide();

      var d = new Date();
      d.setTime(d.getTime() + (60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = "$popupportesouvertes_hide=true;" + expires + "; path=/";


    });
    var $popupportesouvertes_cookie = getCookie("$popupportesouvertes_hide");
    if ($popupportesouvertes_cookie != "") {

    } else {
      $popupportesouvertes.show();
    }

    var $ib_english_banner = $('#ib_english_banner');

    $('#cancel_ib_banner').on('click', function (e) {
      e.preventDefault();
      $ib_english_banner.hide();
      var d = new Date();
      d.setTime(d.getTime() + (60 * 60 * 1000));
      var expires = "expires=" + d.toUTCString();
      document.cookie = "ib_english_banner_hide=true;" + expires + "; path=/";
    });
    var ib_english_banner_cookie = getCookie("ib_english_banner_hide");
    if (ib_english_banner_cookie != "") {
    } else {
      $ib_english_banner.show();
    }






  });
})(jQuery, this);

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


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
    height: 450
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

  marker.addListener("click", function () {
    infowindow.setContent($options.title);
    infowindow.open(location_map, this);
  });

  location_map.setCenter(latlng);
}
// MAP

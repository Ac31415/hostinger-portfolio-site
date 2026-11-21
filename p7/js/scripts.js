/*!
    * Start Bootstrap - Creative v6.0.2 (https://startbootstrap.com/themes/creative)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-creative/blob/master/LICENSE)
    */

// this block of 'use strict' code is for animation of website interations
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });
        
        // this function right here displays tips for textboxes
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()})
    })(jQuery); // End of use strict




// start of custom functions developed for this project

function ScrolltoStat()
{
    
    $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    
}

// function for hiding the statistics section when the user load the webpage first time

function HideStats() {
    document.getElementById("stats").style.display="none";
}

// function for showing the statistics when the user put in the data properly

//function ShowStats() {
//    var d = document.getElementById("distance").value;
//    
//    // if the user didn't put in the data properly then don't display the data
//    if (d == "" || d == null) {
//        document.getElementById("stats").style.display="none";
//    return false;
//  }
//    else {
//        
//        document.getElementById("stats").style.display="block";
////        if (isNaN(x) || isNaN(y) || isNaN(z)) {
////    alert("You must type in numbers");
////    return false;}
////        else {
////        
////    }
//    }
//}


//function DisplayStatsInitNotice() {
//  document.getElementById("stats").style.visibility="hidden";
//}

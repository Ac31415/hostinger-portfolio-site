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
function myFunction() {
    
    //get the inputs
    var x = document.getElementById("number1").value;
    var y = document.getElementById("number2").value;
    var z = document.getElementById("number3").value;
    
    //one-line function for getting the average
    const arrAvg = (arr) => arr.reduce((a, b) => Number(a) + Number(b)) / arr.length
    // sum used for debugging
    //    const arrSum = (arr) => arr.reduce((a, b) => Number(a) + Number(b))
    
    // because the input type is number, the algorithm only needs to check if the field is empty or filled with arithmetic signs
    if (x == "" || x == null || y == "" || y == null || z == "" || z == null) {
        alert("All numbers must be filled out, and you're not allowed to put more than 1 '+', '-', or '.' signs. Or if you only put in the '+', '-', or '.' signs, please put a number next to it.");
        return false;
    }
    else {
        
        
        var numbers = [x, y, z];
        
        // the variable for storing the number from the set when there're only 2 numbers that are the same
        var DualIdentNum = 0;
        
        // get the max
            document.getElementById("demo1").innerHTML = Math.max(...numbers);
            
        //get the min
            document.getElementById("demo2").innerHTML = Math.min(...numbers);
            
        // get the average
            avg = arrAvg(numbers);
            document.getElementById("demo3").innerHTML = avg;
        
        // sum function for debugging
//            sum = arrSum(numbers);
            
        // counter for checking how many identical numbers are there
            var flag = 0;
        
        // go through the set to find the identical numbers
            for(var i = 0; i < numbers.length; i++) {
                
                // if the current number is the same as the next number then take note of it and it'll sure be the median
                if (numbers[i] == numbers[i+1]) {
                    flag++;
                    DualIdentNum = numbers[i];
                    }
                
                // if the current number is not the last number and it's the same as the last number then it'll also be the median
                else if (numbers[i] == numbers[numbers.length-1] && i < numbers.length-1){
                    flag++;
                    DualIdentNum = numbers[i];
                }
                
                // else continue to go through the set
                else {
                    flag=flag;
                    }
                
                // if the current number is not the same as the max or the min, then it is the median since there are only 3 numbers, no need to continue!
                if ((numbers[i] != Math.max(...numbers) && numbers[i] != Math.min(...numbers))) {
                    
                    document.getElementById("demo4").innerHTML = numbers[i];
                    
                    break;
                }
                
//                else {
//                    
//                    if ((numbers[i] < Math.max(...numbers) && numbers[i] == Math.min(...numbers)) && (Math.max(...numbers) < Math.min(...numbers))) {
//                    
//                    document.getElementById("demo4").innerHTML = numbers[i];
//                    
//                    break;
//                    }
//                    
//                }
            }
            
            
            // if all the numbers are the same, then any number is the median
            if (flag == numbers.length) {
                    
                    document.getElementById("demo4").innerHTML = numbers[0];
                }
            
            // since there're only 3 numbers, this method is valid for checking if there're 2 numbers that are the same. If there are 2 numbers that are the same, then 1 of the numbers has to be either the same as the max or the min. In either case, that number is going to be the median
            else if (flag == numbers.length-2) {
                    
                    document.getElementById("demo4").innerHTML = DualIdentNum;
                }
            
        // get the range
            document.getElementById("demo5").innerHTML = Math.max(...numbers)-Math.min(...numbers);
        
//        if (isNaN(x) || isNaN(y) || isNaN(z)) {
//            alert("You must type in numbers");
//            return false;
//        }
//        else {
//            
//        }
        
    }
}

// function for hiding the statistics section when the user load the webpage first time
function HideStats() {
    document.getElementById("stats").style.display="none";
}

// function for showing the statistics when the user put in the data properly
function ShowStats() {
    var x = document.getElementById("number1").value;
    var y = document.getElementById("number2").value;
    var z = document.getElementById("number3").value;
    
    // if the user didn't put in the data properly then don't display the data
    if (x == "" || x == null || y == "" || y == null || z == "" || z == null) {
        document.getElementById("stats").style.display="none";
    return false;
  }
    else {
        
        document.getElementById("stats").style.display="block";
//        if (isNaN(x) || isNaN(y) || isNaN(z)) {
//    alert("You must type in numbers");
//    return false;}
//        else {
//        
//    }
    }
}

//function DisplayStatsInitNotice() {
//  document.getElementById("stats").style.visibility="hidden";
//}

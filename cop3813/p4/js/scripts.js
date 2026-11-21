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





// custom functions for going back to the tic tac toe page when the dialogue box is dismissed
jQuery(function($) {
    $('#YouWinModalO').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    })
});

jQuery(function($) {
    $('#YouWinModalX').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    })
});

jQuery(function($) {
    $('#YouLostModalO').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    })
});

jQuery(function($) {
    $('#YouLostModalX').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    })
});

jQuery(function($) {
    $('#TieModal').on('hidden.bs.modal', function (e) {
        $('html, body').animate({
            scrollTop: $("#stats").offset().top
        }, 1000);
    })
});






// start of the tic tac toe codes
var playerSymbol;
var enemySymbol;
var win;  // TRUE if somebody won the game
var YouWin;  // TRUE if the player won the game
var tie;  // TRUE if both parties tie the game
var turn; // Number of the current turn
var row, column;  // Will contain "coordinates"for a specific cell
var cpuEnabled = true;  // Set this to false to play against a human

$(document).ready(function() {
  // Intro screen buttons
  $("#choose-x").on("click", function() {
    playerSymbol = "X";
    enemySymbol = "O";
    $("#intro-screen").fadeOut(300, showEnemyScreen);
  });
  $("#choose-o").on("click", function() {
    playerSymbol = "O";
    enemySymbol = "X";
    $("#intro-screen").fadeOut(300, showEnemyScreen);
  });
  
  // Enemy screen buttons
  $("#choose-human").on("click", function() {
    cpuEnabled = false;
    startGame();
  });
  $("#choose-cpu").on("click", function() {
    cpuEnabled = true;
    startGame();
  });
  
    // game in progress
  $(".cell").on("click", function() {
    // If nobody has won yet and clicked cell is empty
    if(!win && this.innerHTML === "") {
      if(turn%2 === 0) { // Even number = player turn
        insertSymbol(this, playerSymbol);
      }
      else { // Odd number = enemy turn
        insertSymbol(this, enemySymbol);
      }
    }
  });
    
    // buttons for either restarting current round or new game for different cases of game outcomes
  $("#restartThisYouWinO").on("click", function() {
    restartGame();
  });
    
  $("#restartThisYouWinX").on("click", function() {
    restartGame();
  });
    
  $("#restartAllYouWinO").on("click", function() {
    restartGame();
    backtoIntroScreen();
  });
    
  $("#restartAllYouWinX").on("click", function() {
    restartGame();
    backtoIntroScreen();
  });
    
  $("#restartThisYouLostO").on("click", function() {
    restartGame();
  });
    
  $("#restartThisYouLostX").on("click", function() {
    restartGame();
  });
    
  $("#restartAllYouLostO").on("click", function() {
    restartGame();
    backtoIntroScreen();
  });
    
  $("#restartAllYouLostX").on("click", function() {
    restartGame();
    backtoIntroScreen();
  });
    
  $("#restartAllTie").on("click", function() {
    restartGame();
    backtoIntroScreen();
  });
    
  $("#restartThisTie").on("click", function() {
    restartGame();
  });
});


/******  FUNCTIONS  ******/


// Inserts a symbol in the clicked cell
function insertSymbol(element, symbol) {
  element.innerHTML = symbol;
  
  if(symbol === enemySymbol)
    $("#" + element.id).addClass("player-two"); // Color enemy symbol differently
  $("#" + element.id).addClass("cannotuse");  // Show a "disabled" cursor on already occupied cells
  
  checkWinConditions(element);
  turn++;
    
  // Game end - If somebody has won
  if(win) {
    $(".cell").addClass("cannotuse");  // Tells visually you can't interact anymore with the game grid
      
      // the restart current round and new game buttons will appear at the bottom
      $("#restartdiv").addClass("row h-100 align-items-center justify-content-center text-center");
  $("#restartdiv").removeClass("hidden");
  $("#restart").addClass("btn btn-primary btn-xl js-scroll-trigger");
  $("#restart").removeClass("hidden");
      
      // if the player wins the corresponding dialogue boxes will appear depending on the player's symbol
      if (YouWin) {
          if (playerSymbol === "O"){
              $('#btnTriggerYouWinO').click();
          }
          else{
              $('#btnTriggerYouWinX').click();
          }
      }
      
      // if the enemy wins the corresponding dialogue boxes will appear depending on the player's symbol
      else{
          if (enemySymbol === "O"){
              $('#btnTriggerYouLostO').click();
          }
          else{
              $('#btnTriggerYouLostX').click();
          }
      }
  }
    
    // if nobody won then the corresponding dialogue will appear
  else if (!win && turn > 8) {
    $(".cell").addClass("cannotuse");  // Tells visually you can't interact anymore with the game grid
      
      // the restart current round and new game buttons will appear at the bottom
      $("#restartdiv").addClass("row h-100 align-items-center justify-content-center text-center");
  $("#restartdiv").removeClass("hidden");
  $("#restart").addClass("btn btn-primary btn-xl js-scroll-trigger");
  $("#restart").removeClass("hidden");
      
      $('#btnTriggerTie').click();
  }
    
    // else the AI will continue the game
  else if(cpuEnabled && turn%2 !== 0) {
    cpuTurn();
  }
}

/* Changes screen with a fade effect */
function startGame() {
  /* Shows the game screen when the intro screen is completely hidden */
  $("#enemy-screen").fadeOut(300, showGameScreen);
  restartGame();
}

// shows the tic tac toe screen
function showGameScreen() {
  $("#game-screen").fadeIn(300);
}

// shows screen for choosing enemy
function showEnemyScreen() {
  $("#enemy-screen").fadeIn(300);
}

// shows intro screen for choosing symbols
function showIntroScreen() {
  $("#intro-screen").fadeIn(300);
}

/* Sets everything to its default value */
function restartGame() {
  turn = 0;
  win = false;
  YouWin = false; //set it to false in case the player won
  $(".cell").text("");
  $(".cell").removeClass("wincell");
  $(".cell").removeClass("YouWincell"); // remove the player winning cells
  $(".cell").removeClass("cannotuse");
  $(".cell").removeClass("player-two");
    
    // hide the restart game buttons again
  $("#restartdiv").removeClass("row h-100 align-items-center justify-content-center text-center");
  $("#restartdiv").addClass("hidden");
  $("#restart").removeClass("btn btn-primary btn-xl js-scroll-trigger");
  $("#restart").addClass("hidden");
}

/*going back to intro screen func wasn't included before*/
function backtoIntroScreen() {
    $("#game-screen").fadeOut(300, showIntroScreen);
}

/* Check if there's a winning combination in the grid (3 equal symbols in a row/column/diagonal) */
function checkWinConditions(element) {
  // Retrieve cell coordinates from clicked button id
  row = element.id[4];
  column = element.id[5];
  
  // 1) VERTICAL (check if all the symbols in clicked cell's column are the same)
  
  win = true;
  YouWin = true;
  for(var i=0; i<3; i++) {
    if($("#cell" + i + column).text() !== element.innerHTML) {
      win = false;
    }
      // if the symbol is the player symbol then the main player wins
      if(element.innerHTML === playerSymbol) {
      YouWin = YouWin;
    }
      else {
          YouWin = false;
      }
      
  }
      // if someone wins
      if(win) {
          
          // if the enemy wins their cells will be highlighted as red
          if(!YouWin) {
              for(var i=0; i<3; i++) {
                  // Highlight the cells that form a winning combination
                  $("#cell" + i + column).addClass("wincell");
              }
              return; // Exit from the function, to prevent "win" to be set to false by other checks
          }
          
          // if the player wins their cells will be highlighted as blue
          else {
              for(var i=0; i<3; i++) {
                  // Highlight the cells that form a winning combination
                  $("#cell" + i + column).addClass("YouWincell");
              }
              return; // Exit from the function, to prevent "win" to be set to false by other checks
          }
      }
  
  // 2) HORIZONTAL (check the clicked cell's row)
  
  win = true;
  YouWin = true;
  for(var i=0; i<3; i++) {
    if($("#cell" + row + i).text() !== element.innerHTML) {
      win = false;
    }
  }
    
    // if the symbol is the player symbol then the main player wins
      if(element.innerHTML === playerSymbol) {
      YouWin = YouWin;
    }
      else {
          YouWin = false;
      }
    
    // if someone wins
  if(win) {
      
      // cells will be highlighted with different colors depending on whether the player wins or the enemy wins
      if (!YouWin){
          
          for(var i=0; i<3; i++) {
              $("#cell" + row + i).addClass("wincell");
          }
          return;
      }
      else{
          
          for(var i=0; i<3; i++) {
              $("#cell" + row + i).addClass("YouWincell");
          }
          return;
          
      }
  }
  
  // 3) MAIN DIAGONAL (for the sake of simplicity it checks even if the clicked cell is not in the main diagonal)
  
  win = true;
  YouWin = true;
  for(var i=0; i<3; i++) {
    if($("#cell" + i + i).text() !== element.innerHTML) {
      win = false;
    }
  }
    
     // if the symbol is the player symbol then the main player wins
      if(element.innerHTML === playerSymbol) {
      YouWin = YouWin;
    }
      else {
          YouWin = false;
      }
    
  if(win) {
      
      // cells will be highlighted with different colors depending on whether the player wins or the enemy wins
      if (!YouWin){
          
          for(var i=0; i<3; i++) {
              $("#cell" + i + i).addClass("wincell");
          }
          return;
          
      }
      else{
          
          for(var i=0; i<3; i++) {
              $("#cell" + i + i).addClass("YouWincell");
          }
          return;
          
      }
  }
  
  // 3) SECONDARY DIAGONAL
  
  win = false;
  YouWin = false;
    
  if(element.innerHTML === playerSymbol) {
      YouWin = true;
    }
      else {
          YouWin = YouWin;
      }
    
  if($("#cell02").text() === element.innerHTML) {
    if($("#cell11").text() === element.innerHTML) {
      if($("#cell20").text() === element.innerHTML) {
        win = true;
          // cells will be highlighted with different colors depending on whether the player wins or the enemy wins
        if (YouWin){
            
            $("#cell02").addClass("YouWincell");
            $("#cell11").addClass("YouWincell");
            $("#cell20").addClass("YouWincell");
            
        }
        else{
            $("#cell02").addClass("wincell");
            $("#cell11").addClass("wincell");
            $("#cell20").addClass("wincell");
        }
      }
    }
  }
}

// Simple AI (clicks a random empty cell)
function cpuTurn() {
  var ok = false;
  
  while(!ok) {
    row = Math.floor(Math.random() * 3);
    column = Math.floor(Math.random() * 3);
    if( $("#cell"+row+column).text() === "" ) {
      // We have found it! Stop looking for an empty cell
      ok = true;
    }
  }
  
  $("#cell"+row+column).click(); // Emulate a click on the cell
}


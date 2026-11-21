<?php 
         session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
    //     session_start(); 
    ?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Number Guessing Game</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../p1/pictures/September 29, 2015/IMG_20170722_233828-ANIMATION.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" onload="HideStats()">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Number Guessing Game</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p1">Project 1</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p2">Project 2</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p3">Project 3</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p4">Project 4</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p5">Project 5 (Current Page)</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p6">Project 6</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p7">Project 7</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p8">Project 8</a></li>
<!--                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>-->
<!--
                        <li class="nav-item"><div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Projects
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item js-scroll-trigger nav-link" href="#p1">Project 1</a>
    <a class="dropdown-item js-scroll-trigger nav-link" href="#p2">Project 2</a>
    <a class="dropdown-item js-scroll-trigger nav-link" href="#">Something else here</a>
  </div>
</div></li>
-->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
<!--
        <script type="text/javascript">
                $(document).ready(function() {
                    $('#TieModal').modal('show');
                });
            </script>
-->
        
        <!-- Masthead-->
        <header class="masthead" id="stats">
            
                    
<!--             $('#btnTriggerTie').click();});</script>-->
            
<!--            <button type="button" class="btn btn-primary" id="btnTriggerTie" data-toggle="modal" data-target="#TieModal">Tie</button>-->
            
<!--
                <div class="modal" id="TieModal" tabindex="-1" role="dialog" aria-labelledby="TieModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TieModalLabel">It's a tie!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          I was thinking of <?php echo $randNum ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="restartThisTie" data-dismiss="modal">Restart this round</button>
          <button type="button" class="btn btn-primary" id="restartAllTie" data-dismiss="modal">New game</button>
      </div>
    </div>
  </div>
</div>
-->
            
            <?php
    
    
//            session_start();
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (!isset($_POST["guess"])) {
     $_SESSION["count"] = 0; //Initialize count
     $message = "I'm thinking of a number between 1 and 10.";
     $_POST["numtobeguessed"] = rand(1,10);
//     echo $_POST["numtobeguessed"];
} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { //greater than
    $message = $_POST["guess"]." is too big! Try a smaller number.";
    $_SESSION["count"]++; //Declare the variable $count to increment by 1.

} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { //less than
    $message = $_POST["guess"]." is too small! Try a larger number.";
    $_SESSION["count"]++; //Declare the variable $count to increment by 1.

} else { // must be equivalent
    $_SESSION["count"]++;
    $message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)! Now I'm thinking of another number between 1 and 10."; 
    unset($_SESSION["count"]);
    
    $_SESSION["count"] = 0; //Initialize count
     $_POST["numtobeguessed"] = rand(1,10);
//     echo $_POST["numtobeguessed"];
        //Include the $count variable to the $message to show the user how many tries to took him.
}
    }
    
    else {
        
     $_SESSION["count"] = 0; //Initialize count
     $message = "I'm thinking of a number between 1 and 10.";
     $_POST["numtobeguessed"] = rand(1,10);
//     echo $_POST["numtobeguessed"];
    }
                                
            ?>
            
            <div class="center" id="intro-screen">
                <form method="post" action="guess.php">
                    <h2 class="text-white-75 font-weight-light mb-5"><?php echo $message; ?></h2>
                    <p class="text-white-50 mb-4">Your guess? <input type="number" name="guess" min="1" max="10" autofocus required></p>
                    <input type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" >
                    <input class="btn btn-primary btn-xl js-scroll-trigger" type="submit" value="Guess" id="inp">
                </form>
                
                <div class="col-lg-8 align-self-baseline">
                
                
            </div>
                
            </div>
            
            
        </header>
        
        <!-- Stats-->
<!--
        <section class="page-section" id="stats">
        </section>
-->
        
        <!-- Stats Init Notice-->
<!--
        <section class="page-section" id="note">
            <div class="container">
                <h2 class="text-center mt-0">Statistics</h2>
                <hr class="divider my-4" />
                <div class="row">
                    
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#page-top">Redo Analysis</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Maximum</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                            <p id="demo1" class="text-black-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Minimum</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                            <p id="demo2" class="text-black-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Average (Arithmetic Mean)</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                            <p id="demo3" class="text-black-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Median</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                            <p id="demo3" class="text-black-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Range (max-min)</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                            <p id="demo3" class="text-black-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-24 text-center" id="results">
                        <div class="mt-5">
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#page-top">Redo Analysis</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
-->
        
        <!-- Project 1-->
<!--
        <section class="page-section bg-primary" id="p1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
-->
        
        <div id="p1">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p1-box" href="../p1/index.html"><img class="img-fluid" src="../p2/assets/img/mstp/thumbnails/1.png" alt="" />
                            <div class="p1-box-caption">
                                <div class="project-category text-white-50">5/31/2020</div>
                                <div class="project-name">Project 1</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 2-->
        <div id="p2">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p2-box" href="../p2/index.html"><img class="img-fluid" src="../p2/assets/img/mstp/thumbnails/2.png" alt="" />
                            <div class="p2-box-caption">
                                <div class="project-category text-white-50">6/15/2020</div>
                                <div class="project-name">Project 2</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 3-->
        <div id="p3">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p3-box" href="../p3/index.html"><img class="img-fluid" src="pictures/Screen%20Shot%202020-06-26%20at%2011.23.59%20PM.png" alt="" />
                            <div class="p3-box-caption">
                                <div class="project-category text-white-50">6/26/2020</div>
                                <div class="project-name">Project 3</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 4-->
        <div id="p4">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p4-box" href="./index.html"><img class="img-fluid" src="pictures/Screen%20Shot%202020-07-07%20at%208.04.06%20PM.png" alt="" />
                            <div class="p4-box-caption">
                                <div class="project-category text-white-50">7/7/2020</div>
                                <div class="project-name">Project 4</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 5-->
        <div id="p5">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p5-box" href="./guess.php"><img class="img-fluid" src="pictures/Screen%20Shot%202020-07-19%20at%203.05.10%20AM.png" alt="" />
                            <div class="p5-box-caption">
                                <div class="project-category text-white-50">7/19/2020</div>
                                <div class="project-name">Project 5 (Current Page)</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 6-->
        <div id="p6">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p6-box" href="../p6/index.php"><img class="img-fluid" src="../p6/pics/Screen%20Shot%202020-07-28%20at%206.24.55%20PM.png" alt="" />
                            <div class="p6-box-caption">
                                <div class="project-category text-white-50">7/27/2020</div>
                                <div class="project-name">Project 6</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 7-->
        <div id="p7">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p7-box" href="../p7/index.php"><img class="img-fluid" src="../p7/pics/Screen%20Shot%202020-07-31%20at%202.44.58%20AM.png" alt="" />
                            <div class="p7-box-caption">
                                <div class="project-category text-white-50">7/31/2020</div>
                                <div class="project-name">Project 7</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 8-->
        <div id="p8">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-sm-18">
                        <a class="p8-box" href="../index.html"><img class="img-fluid" src="../p2/assets/img/mstp/thumbnails/portal.png" alt="" />
                            <div class="p8-box-caption">
                                <div class="project-category text-white-50">6/18/2020</div>
                                <div class="project-name">Project 8</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Services-->
<!--
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                            <p id="demo1" class="text-white-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                            <p id="demo2" class="text-white-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                            <p id="demo3" class="text-white-75 font-weight-light mb-5"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- Portfolio-->
<!--
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </div>
-->
        <!-- Call to action-->
<!--
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
            </div>
        </section>
-->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Want to connect with me? Give me a call or send me an email and I will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div><a href="tel:561-542-7948">+1 (561) 542-7948</a></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                        ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:wcheng3@fau.edu">wcheng3@fau.edu</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Wen-Chung Cheng (Andy) - Template Courtesy of Start Bootstrap</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
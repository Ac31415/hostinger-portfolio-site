<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Unit Converter</title>
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
    
    <?php
    
    $load = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $load = "onload='ScrolltoStat()'";
    }
    
    ?>
    
    <body id="page-top" <?php echo $load;?>>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Unit Converter App</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p1">Project 1</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p2">Project 2</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p3">Project 3</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p4">Project 4</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p5">Project 5</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#p6">Project 6 (Current Page)</a></li>
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
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
<!--                <div class="row h-100 align-items-center justify-content-center text-center">-->
                <div class="row h-100 justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Unit Converter</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        
                        <p class="text-white-75 font-weight-light mb-5">Please put in a length value, and select ONE of the conversion direction you want.</p>
                        
                        <form class="form-horizontal" action="index.php" method="POST">
                <div class="form-group">
                    <label for="distance" class="text-white">Distance</label>
<!--                    <input type="number" id="distance" name="distance" class="form-control" required autofocus aria-describedby="distanceHelp" placeholder="Enter a length value" data-toggle="tooltip" title="Please type in only numbers. If you type in anything other than numbers, the content you type WILL NOT APPEAR. You can also fine tune your value using the UP and DOWN buttons in the RIGHT portion of this text box" data-placement="right" onkeydown="return event.keyCode !== 69">-->
                    
                    <input type="number" id="distance" name="distance" class="form-control" required autofocus aria-describedby="distanceHelp" placeholder="Enter a length value" onkeydown="return event.keyCode !== 69">
                </div>

                <div class="form-group">
                    <div class="checkbox-inline">
                        <label for="miles" class="text-white-75 font-weight-light mb-5">Miles to Kilometers</label>
                        <input type="radio" name="conversion" id="miles" value="miles">
                     </div>

                     <div class="checkbox-inline">
                        <label for="kilometers" class="text-white-75 font-weight-light mb-5">Kilometers to Miles</label>
                        <input type="radio" name="conversion" id="kilometers" value="kilometers" required>
                     </div>
                 </div>

                <div class="form-group">
<!--                    <input type="submit" class="btn btn-primary btn-xl js-scroll-trigger" href="#stats" onclick="myFunction(), ShowStats()">-->
                    
                    <input type="submit" class="btn btn-primary btn-xl js-scroll-trigger" onclick="myFunction(), ShowStats()">
                </div>
            </form>

                        
<!--                        text-muted-->
                        
<!--
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
-->
<!--  <button type="submit" onclick="myFunction()" class="btn btn-primary btn-xl js-scroll-trigger" href="#stats">Perform Analysis</button>-->
<!--                        <hr class="divider my-4" />-->
                        
<!--                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#stats" onclick="myFunction(), ShowStats()">Perform Analysis</a>-->
                        
                        
<!--
                        <p id="demo1" class="text-white-75 font-weight-light mb-5"></p>
                        <p id="demo2" class="text-white-75 font-weight-light mb-5"></p>
                        <p id="demo3" class="text-white-75 font-weight-light mb-5"></p>
-->
                        
                    </div>
<!--
                    <div class="col-lg-8"><p id="demo1" class="text-white-75 font-weight-light mb-5"></p>
                        <p id="demo2" class="text-white-75 font-weight-light mb-5"></p>
                        <p id="demo3" class="text-white-75 font-weight-light mb-5"></p></div>
-->
                </div>
            </div>
        </header>
        
        <!-- Stats-->
        
        <?php
        
        $style = "";
        
function sanitizeString($str)
{
    $str = strip_tags($str);
    $str = htmlentities($str);
    $str = stripslashes($str);
    return $str;
}

function toMiles($kilometers)
{
    return ($kilometers / 1.609344);
}

function toKilometers($miles)
{
    return($miles * 1.609344);
}

if(isset($_POST['distance']))
{
    // sanitize distance
    $distance = sanitizeString($_POST['distance']);

    $output = "Error!";
    
    $style = "style='display:block;'";

    // business logic
    if(isset($_POST['conversion']) && $_POST['conversion'] === 'miles')
    {
        $output = $distance . " mi == " . toKilometers($distance) . " km";
        
        $in = $distance . " mi";
        $out = toKilometers($distance) . " km";
    }
    else if(isset($_POST['conversion']) && $_POST['conversion'] === 'kilometers')
    {
        $output = $distance . " km == " . toMiles($distance) . " mi";
        
        $in = $distance . " km";
        $out = toMiles($distance) . " mi";
    }

    // print distance
//    echo $output;
}

        else
        {
            
            $style = "style='display:none;'";
            
        }
?>
        
        <section class="page-section" id="stats" <?php echo $style;?>>
            <div class="container">
                <h2 class="text-center mt-0">Conversion Result</h2>
                <hr class="divider my-4" />
                <div class="row">
                    
<!--
                    <div class="col-lg-12 col-md-24 text-center">
                        <div class="mt-5">
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#page-top" onclick="HideStats()">Redo Analysis</a>
                        </div>
                    </div>
-->
                    
                    <div class="col-lg-4 col-md-8 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-ruler text-primary mb-4"></i>
                            <h3 class="h4 mb-2">From</h3>
                            <p class="text-muted mb-0">This is the value you entered</p>
                            <p id="demo1" class="text-black-75 font-weight-bold mb-5"><?php echo $in; ?></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-8 text-center">
                        <div class="mt-6">
                            <i class="fas fa-4x fa-equals text-primary mb-4"></i>
<!--
                            <h3 class="h4 mb-2">Output</h3>
                            <p class="text-muted mb-0">The minimum of the 3 numbers you put in is</p>
                            <p id="demo2" class="text-black-75 font-weight-bold mb-5"><?php echo $out; ?></p>
-->
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-8 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-ruler text-primary mb-4"></i>
                            <h3 class="h4 mb-2">To</h3>
                            <p class="text-muted mb-0">This is the converted value</p>
                            <p id="demo2" class="text-black-75 font-weight-bold mb-5"><?php echo $out; ?></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-24 text-center">
                        <div class="mt-5">
                            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#page-top" onclick="HideStats()">Redo Conversion</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
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
                        <a class="p3-box" href="./index.html"><img class="img-fluid" src="../p3/pictures/Screen%20Shot%202020-06-26%20at%2011.23.59%20PM.png" alt="" />
                            <div class="p3-box-caption">
                                <div class="project-category text-white-50">6/26/2020</div>
                                <div class="project-name">Project 3 (Current Page)</div>
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
                        <a class="p4-box" href="../p4/index.html"><img class="img-fluid" src="../p4/pictures/Screen%20Shot%202020-07-07%20at%208.04.06%20PM.png" alt="" />
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
                        <a class="p5-box" href="../p5/guess.php"><img class="img-fluid" src="../p5/pictures/Screen%20Shot%202020-07-19%20at%203.05.10%20AM.png" alt="" />
                            <div class="p5-box-caption">
                                <div class="project-category text-white-50">7/19/2020</div>
                                <div class="project-name">Project 5</div>
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
                        <a class="p6-box" href="./index.php"><img class="img-fluid" src="pics/Screen%20Shot%202020-07-28%20at%206.24.55%20PM.png" alt="" />
                            <div class="p6-box-caption">
                                <div class="project-category text-white-50">7/27/2020</div>
                                <div class="project-name">Project 6 (Current Page)</div>
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

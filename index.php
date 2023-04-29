<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admas University E-learning Home</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">
        
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"><!-- 
        <link rel="stylesheet" type="text/css" href="css/two/style2.css"> -->
    </head>
    
<body>

    <header id="top-header">
        <div class="top-tol">
            <ul>
                <div id="logo">
                    <a><img src="images/Logoo.png" alt="admas university e-learning managment system logo" title="AU e-learning management"></a>
                    <!-- <label id="l1">e-learning</label> -->
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;<label>Accounts</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="s_signin.php"><i class="fas fa-user-graduate"></i> Students</a></li>
                        <li class="dropdown-item"><a href="t_signin.php"><i class="fas fa-chalkboard-teacher"></i> Teachers</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="#Home-Page" class="nav-link active" aria-current="page" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="reference.php" class="nav-link">References</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>

               <!--  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registration
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" id="txt-color-na" href="#">Students</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" id="txt-color-na" href="#">Teachers</a></li>
                  </ul>
                </li> -->
              </ul>

              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search...  " aria-label="Search">
                <button class="btn btn-info" type="submit" style="margin-left: -11px;"><i class="fas fa-search"></i></button>
              </form>
            </div>
        </div>
    </nav>

   <!-- === carousel slider /with control, indicator and caption===  -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/slide/slide1.jpg" class="d-block w-100" alt="slide1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Practical Enviroment</h5>
                    <p>We have five interactive computer labs which any students can practice.</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="images/slide/a1.jpg" class="d-block w-100" alt="slide2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Admas University</h5>
                    <p>admas university mekanisa campus front view.</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img src="images/slide/a3.jpg" class="d-block w-100" alt="slide3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Graduation Ceremony</h5>
                    <p>2020 graduation ceremonys.</p>
                  </div>
                </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
    <!-- === Introduction === -->
    <section class="bg-primary text-light text-center p-5">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2 class="text-white">Welcome to <strong>Admas University</strong> E-Learning !</h2> 
                    <p class="lead">It includes all forms of electronically supported learning and teaching. <br>This often involves both out class and in classroom educational experiences via techology.</p>
                    <p class="lead">Online Learning is a way of learning basically without going to classes every time.
                         for students who are not able to attend.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- === Boxes === -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border: none;">
                        <img class="card-img-top" src="images/online_academic_pro.jpeg" alt="au logo">
                        <div class="card-body">
                            <h4 class="card-title">Onlie Academic Program</h4>
                            <p class="card-text">Online Learning is a way of learning basically without going to classes every time.
                         for students who are not able to attend.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border: none;">
                        <img class="card-img-top" src="images/box1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">A-U Mekanisa Front View</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border: none;">
                        <img class="card-img-top" src="images/boxx.webp" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Class of 2021</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light" style="border: none;">
                        <img class="card-img-top" src="images/box2.jpeg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Graduation Ceremony</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- === BG Organization section === -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md text-center">
                    <img src="images/au_front_view1.webp" class="img-fluid" alt="au_front_view" title="Admas university front view">
                </div>

                <div class="col-md p-5">
                    <h2>Background of the <span class="text-primary">organization</span></h2>
                    <p class="lead">
                        Admas University commenced its operation in October 1998 G.C with the name Admas Business Training Center. The center started delivering training services in a certain taller made short term programs. By undertaking deep assessment of further training needs and preparing the required human and material resources the center upgraded itself to a collage level as of April 1999.
                    </p>
                    <a href="about.php" class="btn btn-outline-info text-dark"><i class="fas fa-chevron-right"></i> Read More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- === Refrence === -->
    <section id="learn" class="p-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h1 class="text-white">Learn <span class="text-warning">Computer Science </span></h1></h2>
                    <p class="lead">
                        In many countries the need for computer scientist
                        has become larger and larger but the number of com-
                        puter science students is stagnating if not decreasing.
                        Dropout rates are high and especially the lack of
                        women in computer science seems to cause headache.

                    <p class="lead">
                        Consequently, there is a large interest in trying to find
                        out what motivates students to study computer science.
                    </p>
                    </p>
                    <a href="reference.php" class="btn btn-light text-dark"><i class="fas fa-chevron-right"></i> Read More</a>
                </div>

                <div class="col-md">
                    <img src="images/materials4.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- === Contact  === -->
    <section id="contact" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <div class="mapouter">
                       <div class="gmap_canvas">
                            <iframe width="800" height="430" id="gmap_canvas" src="https://maps.google.com/maps?q=Admas%20University%20jemo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                            <!-- <a href="https://123movies-to.org">Admas University?</a><br> -->
                            <style>
                                .mapouter{
                                    /*position:relative;*/ 
                                    /*align-content:center;*/ 
                                    height:430px; 
                                    width:100%;
                                }
                            </style><!-- 
                            <a href="https://www.embedgooglemap.net">googlemap embed </a> -->
                            <style>
                                .gmap_canvas {
                                    overflow:hidden; 
                                    background:none!important; 
                                    height:600px; 
                                    width:100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <div class="col-md p-5 text-center">
                    <h2><i class="fas fa-location-arrow"></i> Contact info</h2>
                    <p class="lead">jemo mikaele behind alfa school infront mekanisa condominiems</p>
                    <p><i class="fas fa-phone"></i> 0113698700 |<lable> 0113699533</lable></p>
                    <p><address><a href="milto:info@admasuniversity.com">info@admasuniversity.com</a></address></p>
                    <p><address><a href="admasuniversity.com">admasuniversity.com</a></address></p><br>

                    <a href="contact.html" class="btn btn-outline-info text-dark"><i class="fas fa-chevron-right"></i> Read More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- === Computer Scince Departement === -->
    <section id="learn" class="p-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md p-5">
                    <h2 class="text-white">What makes <span class="text-warning"><strong>C-S</strong></span> departement different?</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="about.html" class="btn btn-light text-dark"><i class="fas fa-chevron-right"></i> Read More</a>
                </div>

                <div class="col-md text-center">
                    <img src="images/au_front_view1.webp" class="img-fluid" alt="au_front_view" title="Admas university front view">
                </div>
            </div>
        </div>
    </section>       


     <!-- === CS D === -->
    <section class="p-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light shadow">
                        <img class="card-img-top" src="images/Logo-Icons.png" alt="au logo">
                        <div class="card-body">
                            <h4 class="card-title">Test</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light shadow">
                        <img class="card-img-top" src="images/Logo-Icons.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Test</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light shadow">
                        <img class="card-img-top" src="images/Logo-Icons.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Test</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light shadow">
                        <img class="card-img-top" src="images/Logo-Icons.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Test</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- === Instructors  === -->
    <section id="instructors" class="bg-secondary p-5">
        <div class="container">

            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white mb-5">Our instructors has 5+ year working experiance as a web developer in the industry.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="images/pic-9.jpg" alt="" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title mb-3">Test</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" title="twitter"><i class="fab fa-twitter mx-3 text-dark"></i></a>
                        <a href="#" title="linkedin"><i class="fab fa-linkedin mx-3 text-dark"></i></a>
                        <a href="#" title="facebook"><i class="fab fa-facebook mx-3 text-dark"></i></a>
                        <a href="#" title="instagram"><i class="fab fa-instagram mx-3 text-dark"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="images/pic-9.jpg" alt="" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title mb-3">Test</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" title="twitter"><i class="fab fa-twitter mx-3 text-dark"></i></a>
                        <a href="#" title="linkedin"><i class="fab fa-linkedin mx-3 text-dark"></i></a>
                        <a href="#" title="facebook"><i class="fab fa-facebook mx-3 text-dark"></i></a>
                        <a href="#" title="instagram"><i class="fab fa-instagram mx-3 text-dark"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="images/pic-9.jpg" alt="" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title mb-3">Test</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" title="twitter"><i class="fab fa-twitter mx-3 text-dark"></i></a>
                        <a href="#" title="linkedin"><i class="fab fa-linkedin mx-3 text-dark"></i></a>
                        <a href="#" title="facebook"><i class="fab fa-facebook mx-3 text-dark"></i></a>
                        <a href="#" title="instagram"><i class="fab fa-instagram mx-3 text-dark"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="images/pic-9.jpg" alt="" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title mb-3">Test</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                        <a href="#" title="twitter"><i class="fab fa-twitter mx-3 text-dark"></i></a>
                        <a href="#" title="linkedin"><i class="fab fa-linkedin mx-3 text-dark"></i></a>
                        <a href="#" title="facebook"><i class="fab fa-facebook mx-3 text-dark"></i></a>
                        <a href="#" title="instagram"><i class="fab fa-instagram mx-3 text-dark"></i></a>
                    </div>
                </div>
            </div>                                          

        </div>
    </section> 


    <!-- === Question accordion === -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="card-text mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>

            <div id="questions" class="accordion accordion-flush">

                <!-- Item one -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#question-one"
                    >
                    where exactly are you located?
                  </button>
                </h2>
                <div 
                    id="question-one" 
                    class="accordion-collapse collapse" 
                    data-bs-parent="#questions"
                >
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>

                <!-- Item two -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#question-two"
                    >
                    how much does it cost to enroll?
                  </button>
                </h2>
                <div 
                    id="question-two" 
                    class="accordion-collapse collapse" 
                    data-bs-parent="#questions"
                >

                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>

                <!-- Item three -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#question-three"
                    >
                    does i have a job opportunity?
                  </button>
                </h2>
                <div 
                    id="question-three" 
                    class="accordion-collapse collapse" 
                    data-bs-parent="#questions"
                >
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>

                <!-- Item Four -->
                <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#question-four"
                    >
                    what does i need to know?
                  </button>
                </h2>
                <div 
                    id="question-four" 
                    class="accordion-collapse collapse" 
                    data-bs-parent="#questions"
                >
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
        </div>
    </section>

            <footer class="footer-10 bg-dark">
                <div class="container">
                <div class="row mt-3 mb-5 p-3 no-gutters text-white">
                    <div class="col-md-4 mb-md-0 mb-4 d-flex card bg-primary">
                        <div class="con con-1 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="py-1 icon d-flex align-items-center justify-content-center bg-secondary">
                                    <span class="ion-ios-call"><i class="fas fa-phone"></i></span>
                                </div>
                                <div class="text">
                                    <span>0113698700 | 0113699533</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4 d-flex card bg-primary">
                        <div class="con con-2 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="py-1 icon d-flex align-items-center justify-content-center bg-secondary">
                                    <span class="ion-ios-mail"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="text">
                                    <span><a href="mailto:info@admasuniversity.edu.et" style="text-decoration: none; color: white;">info@admasuniversity.edu.et</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4 d-flex card bg-primary">
                        <div class="con con-3 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="py-1 icon d-flex align-items-center justify-content-center bg-secondary">
                                    <span class="ion-ios-pin"><i class="fas fa-location-arrow"></i></span>
                                </div>
                                <div class="text">
                                    <span>jemo mikaele behind alfa school infront mekanisa condominiems</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="row">
                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading text-white">About</h2>
                                <ul class="list-unstyled">
                                  <li><a href="about.html" class="d-block">Mission</a></li>
                                  <li><a href="about.html" class="d-block">Vision</a></li>
                                  <li><a href="about.html" class="d-block">Our Values</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading text-white">Company</h2>
                                <ul class="list-unstyled">
                                  <li><a href="https://admasuniversity.edu.et/" target="_blank" title="Adams University officia Website"><i class="fas fa-globe"></i> Official Website</a></li>
                                </ul><br>

                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-lg-4 h3">
                                        <ul class="ftco-footer-social">
                                            <a href="https://twitter.com/admas1998?lang=en" target="_blank" title="twitter"><i class="fab fa-twitter mx-3 text-white"></i></a>
                                            <a href="#" title="linkedin"><i class="fab fa-linkedin mx-3 text-white col-md-6"></i></a>
                                            <a href="https://www.facebook.com/AUni.Mek/" target="_blank" title="facebook"><i class="fab fa-facebook mx-3 text-white col-md-6"></i></a>
                                            <a href="#" title="instagram"><i class="fab fa-instagram mx-3 text-white col-md-6"></i></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-md-0 mb-4">
                                <h2 class="footer-heading text-white">Quick-Links</h2>
                                <ul class="list-unstyled">
                                  <li><a href="#" class="nav-link active text-warning" aria-current="page" class="nav-link"><i class="fas fa-home"></i> Home</a></li><br>
                                  <li><a href="reference.html" class="d-block"><i class="fab fa-accusoft"></i> References</a></li><br>
                                  <li><a href="contact.html" class="d-block">Contact</a></li><br>
                                  <li><a href="about.html" class="d-block">About Us</a></li>
                                 </ul>
                            </div>
                        </div>
                    </div>

                <!-- <div class="col-md-5 mb-md-0 mb-4">
                        <h2 class="footer-heading">Subscribe</h2>
                        <form action="#" class="subscribe-form">
                          <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                            <button type="submit" class="form-control submit rounded-right">Subscribe</button>
                          </div>
                          <span class="subheading">Get digital marketing updates in your mailbox</span>
                        </form>
                    </div> -->

                </div>

                <div class="row my-5 pt-4 border-top">
                  <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
                    <p class="copyright mb-0 text-white">
                        Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. | Designed By Blue Diamond Squad <!-- <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a> -->
                  </div>
                </div>
            </div>
        </footer>
     
    <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/main.js"></script>
</body>    
</html>

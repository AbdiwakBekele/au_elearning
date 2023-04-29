<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admas University E-learning Contact</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">
        
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
        <link  href="icon/svg-with-js/css/fa-svg-with-js.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    
<body>

    <header id="top-header" class="bg bg-secondary">
        <div class="top-tol">
            <ul>

            <div id="logo">
                <a><img src="images/Logoo.png"></a>
                <!-- <label id="l1">e-learning</label> -->
            </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;<label>Accounts</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="s_signin.html"><i class="fas fa-user-graduate"></i> Students</a></li>
                        <li class="dropdown-item"><a href="t_signin.html"><i class="fas fa-chalkboard-teacher"></i> Teachers</a></li>
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
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="reference.html" class="nav-link">References</a></li>
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>

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

            </div>
        </div>
    </nav>

    <div id="our_location" class="container-fluid">
        <div class="mapouter text-center">
           <div class="gmap_canvas">
                <iframe width="1200" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Admas%20University%20jemo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                <a href="https://123movies-to.org">Admas University?</a><br>
                <style>
                    .mapouter{
                        /*position:relative;*/ 
                        /*align-content:center;*/ 
                        height:600px; 
                        width:100%;
                    }
                </style>

                <a href="https://www.embedgooglemap.net">googlemap embed </a>
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

    <hr class="container">
    <section class="mt-4 mb-3">
        <div class="container">
            <div class="row border">
                <div class="col-md-12 p-3 bg-light text-center">
                    <h1><strong class="text-secondary">Give Feedback!</h1>
                </div>
             </div>
        </div>
    </section>    

    <div class="container">
        <div class="row">
            <div class="mt-3 col-md-8">
                <form class="was-validated p-4 bg-light border shadow the_logo_form" action="#" method="post" name="form" onsubmit="return validated()">
                    <div class="mt-3 row">
                        <div class="col">
                            <label for="1name" class="form-label"><i class="fas fa-user"></i> Frist Name</lable>
                            <input type="text" class="form-control" name="fname" id="1name" placeholder="Enter Frist Name" required="required">
                                <div class="valid-feedback">good</div>
                                <div class="invalid-feedback">fill-out</div>    
                            <div id="fname_error">try more than 2 words</div>   
                        </div>

                        <div class="mb-3 col">
                            <label for="2name" class="form-label"><i class="fas fa-user"></i> Last Name</lable>
                            <input type="text" class="form-control" name="lname" id="2name" placeholder="Enter Frist Name" required="required"> 
                                <div class="valid-feedback">good</div>
                                <div class="invalid-feedback">fill-out</div>   
                            <div id="lname_error">try more than two words</div>    
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-lable"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" id="mail" placeholder="Enter Your Email" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div> 
                            <div id="email_error">email should be eight or greater than</div>    
                    </div>

                    <div class="mb-3">
                        <label for="sub" class="form-label"><i class="fas fa-file"></i> Subject</label>
                        <input type="text" class="form-control" name="subject" id="sub" placeholder="Enter the subject" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="sub_error">"4 or than word" about what u gonna give a comment.</div> 
                    </div>

                    <div class="row">
                        <div class="col">
                            <label><i class="fas fa-mars-double"></i> Gender</label>
                        </div>

                        <div class="col">
                            <div class="form-check mb-3">
                                <lable for="radio1" class="form-check-label">Male</lable>
                                <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">
                            </div>  
                        </div>

                        <div class="col"> 
                            <div class="form-check mb-3">
                                <lable for="radio2" class="form-check-label">Female</lable>
                                <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">
                            </div>   
                        </div>
                    </div>                   

                    <div class="mb-3">
                        <label for="comment"><i class="fas fa-comments"></i> Comment</label>
                        <textarea class="form-control" rows="6" maxlength="400" name="text" id="comment" placeholder="Enter Your Comment Here..." required="required"></textarea>
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>   
                            <div id="comt_error">atleast try to comment more 10 words!</div>    
                    </div>

                    <button type="submit" class="btn-lg btn-secondary mb-3 col-sm-12">Submit</button>


                    <!-- === alert success dismissible after submit ===   -->  
                    <!-- <div id="sux" class="alert alert-success alert-dismissible mb-3">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Successfully!</strong><a class="alert-link" href="#"> sent.</a>
                    </div> -->

                </form>
            </div>

            <div class="col-md-4 mt-3 text-center text-secondary bg-light shadow" style="font-family: Tahoma, serif;">
                <center><h1 class="text-secondary"><i class="fas fa-location-arrow"></i> Contact info</h1></center>
                <h5>jemo mikaele behind alfa school infront mekanisa condominiems</h5><br>
                <p><i class="fas fa-phone"></i> 0113698700 |<lable> 0113699533</lable></p><br>
                <address><a href="milto:info@admasuniversity.com">info@admasuniversity.com</a></address>
                <address><a href="admasuniversity.com">admasuniversity.com</a></address>
            </div>
        </div>

    </div>

        <footer class="footer-10 bg-dark mt-5">
            <div class="container">
                <div class="row mt-3 mb-5 p-3 no-gutters text-white">
                    <div class="col-md-4 mb-md-0 mb-4 d-flex card bg-primary">
                        <div class="con con-1 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="icon py-1 d-flex align-items-center justify-content-center bg-secondary">
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
                                <div class="icon py-1 d-flex align-items-center justify-content-center bg-secondary">
                                    <span class="ion-ios-mail"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="text">
                                    <span>info@email.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4 d-flex card bg-primary">
                        <div class="con con-3 w-100 py-5">
                            <div class="con-info w-100 text-center">
                                <div class="icon py-1 d-flex align-items-center justify-content-center bg-secondary">
                                    <a href="#our_location"><span class="ion-ios-pin"><i class="fas fa-location-arrow"></i></span></a>
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
                                <h2 class="footer-heading text-white">Quick-Link</h2>
                                <ul class="list-unstyled">
                                  <li><a href="index.html" class="d-block"><i class="fas fa-home"></i> Home</a></li><br>
                                  <li><a href="reference.html"><i class="fab fa-accusoft"></i> References</a></li><br>
                                  <li><a href="#" class="nav-link active text-warning" aria-current="page" class="nav-link">Contact</a></li><br>
                                  <li><a href="about.html">About Us</a></li>
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
          Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. | Designed Blue Diamond Squad 
                  </div>
                </div>
            </div>
        </footer>
     
    <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/verify.js"></script>
</body>    
</html>




<?php
include '../my_funcs.php';

connect_db();
session_start();

if(!isset($_SESSION['admin_id'])){
    header("Location: t_signin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Correct-Assignment</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group">

		<link rel="shortcut icon" type="image/x-icon" href="../images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="../icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

  	<!-- === top header === -->
    <header id="top-header" class="bg-warning">
        <div class="top-tol">
            <ul>
                <div id="logo">
                    <a><img src="../images/LogooB2.png" alt="admas university e-learning managment system logo" title="AU e-learning management"></a>
                    <!-- <label id="l1">e-learning</label> -->
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-success dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;<label>profile</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="update_profile.php"><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>  

    <!-- === navigation bar === -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="margin-bottom: 0px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../reference.php" class="nav-link">References</a></li>
                    <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="../about.php" class="nav-link">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>    

    <div class="wrapper d-flex align-items-stretch">
		
		<nav id="sidebar">
			<div class="p-4 pt-5">
		  	  <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
    	        <ul class="list-unstyled components mb-5">
    	           <li><a href="t_view_result.php"><i class="fas fa-street-view"></i>  View Result</a></li>
                   <li><a href="#" class="text-warning"><i class="fas fa-file-import"></i> Correct Assignments</a></li>
                   <li><a href="t_correct_exam.php"><i class="fas fa-check-double"></i> Correct Exam</a></li>
                   <li><a href="t_manage_exam.php"><i class="fas fa-file-signature"></i> Manage Exam</a></li>
                   <li><a href="#"><i class="fas fa-shopping-basket"></i> Manage Materials</a></li>
                   <li><a href="#"><i class="fas fa-book-open"></i> Manage Assignments</a></li>
                   <li><a href="#"><i class="fas fa-comments"></i> Communication</a></li>
    	        </ul>

        	    <div class="footer">
        			Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By Blue Diamond Squad 
        	    </div>

	        </div>
    	</nav>    

    	<!-- === page content === -->
    	<div id="content" class="p-4 p-md-5">

        	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            	<div class="container">

                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                      <i class="fas fa-bars"></i>
                      <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div class="container">
                    	<div class="row align-items-center justify-content-center">
                        	<div class="col-md-6 text-center">
                                <div class="card bg-light col-md mt-1" style="border-style: none;">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="fas fa-file-import"></i> <strong>Correct Assignment</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>

              <!--   === table === -->
                <section class="mt-5 bg-light">
                    <div class="">
                        <div class="row">
                            <div class="col-md">
                                <div class="row">
                                    <div class="col-md-12 mb-5">
                                        <h4 class="text-center bg-dark text-white"> Assignment</h4>
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead class="bg-secondary text-white">
                                                    <th>NO.</th>
                                                    <th>Name</th>
                                                    <th>Id</th>
                                                    <th>Course</th>
                                                    <th>Date</th>
                                                    <th class="w-25">Submitted</th>
                                                    <th>Result</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                    <td><input type="text" name="grade" class="bg-default"></td>
                                                </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>

                                <div class="mt-5 pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link text-primary" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link text-white" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>

                             </div>   
                        </div>
                    </div>
                </section>

    	</div>	
    	
    </div>


    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>

    <script src="../js/app/main.js"></script>
  </body>
</html>


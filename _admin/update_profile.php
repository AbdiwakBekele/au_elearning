<?php
include '../my_funcs.php';

connect_db();
session_start();

// if(!isset($_SESSION['admin_id'])){
//     header("Location: a_signin.php");
//     exit;
// }

if(isset($_REQUEST['submit'])){
    foreach($_REQUEST as $key => $value){
        if($_REQUEST[$key] != ''){

            $key_s = strip_sql($key); // bad?
            if($key == 'password') 
                $req_s = md5($req_s);
            else
                $req_s = strip_sql($_REQUEST[$key]);


            $db->query("UPDATE admin SET $key_s = '$req_s' WHERE ID = $_SESSION[admin_id]");
        }
    }
    if(!empty($_FILES['image'])){
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "/home/fira/Desktop/" . $filename;
        
        if(move_uploaded_file($tempname, $folder)){
            $db->query("UPDATE admin SET image = '$folder' WHERE ID = $_SESSION[admin_id]");
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | update profile</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="../images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="../icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

    <header id="top-header">
        <div class="top-tol">
            <ul>
                <div id="logo">
                    <a><img src="../images/Logoo.png" alt="admas university e-learning managment system logo" title="AU e-learning management"></a>
                    <!-- <label id="l1">e-learning</label> -->
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;<label>profile</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="s_signin.html"><i class="fas fa-user"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="s_signin.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>  

    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="margin-bottom: 0px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../reference.html" class="nav-link">References</a></li>
                    <li class="nav-item"><a href="../contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="../about.html" class="nav-link">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>      
		
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="p-4 pt-5">
                <div class="row">
                    <div class="col">
                        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/avatar.jpg);"><br><br><br><br><br>   
                            <center><h2>Admin</h2></center>
                        </a>
                    </div>
                </div><br><br>

    	           <ul class="list-unstyled components mb-5">

                       <li class="dropdown">
                          <a class="dropdown-toggle" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i>
                            Manage User Accounts
                          </a>

                          <ul class="dropdown-menu text-center" aria-labelledby="Dropdown">
                            <li><a class="dropdown-item text-dark" href="a_manage_teachers.html"><strong>Teachers</strong></a></li>
                            <li><a class="dropdown-item text-dark" href="a_manage_students.html"><strong>Students</strong></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-dark" href="index.html"><strong>All</strong></a></li>
                          </ul>
                        </li>

                        <li><a href="a_manage_class.html"><i class="fas fa-chalkboard"></i> Manage Class</a></li>

                        <li><a href="a_communication.html"><i class="fas fa-comments"></i> Communication</a></li>
                    </ul>

        	        <div class="footer">
        				Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By Blue Diamond Squad 
        	        </div>

	           </div>
    	   </nav>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                    <div class="container">
                        
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fas fa-bars"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>

                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="card bg-light col-md mt-1" style="border-style: none;">
                                        <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-user-circle"></i> <strong>Update Profile</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 
 
        <div class="row mt-3">
            <div class="col-md-8"> 
                <section class="p-4 bg-light">
                    <div class="row mb-3">
                        <div class="col-md">
                            <div style="border: none;">
                                <img class="card-img-top" src="images/logo.jpg" alt="avatar">
                                <div class="card-body">
                                    <h2 class="card-title">Admin Name</h2>
                                    <p class="card-text lead">Email: </p>
                                    <p class="card-text lead">Phone: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <form enctype="multipart/form-data" class="was-validated p-4 bg-light the_logo_form" action="#" method="post" onsubmit="return validated()">
                    <div class="mt-3 mb-3 col-md">
                        <label for="full_name" class="form-label"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" class="form-control" name="full_name" id="fullname" placeholder="Enter Full Name"> 
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>   
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md">
                            <label for="gender"><i class="fas fa-mars-double"></i> Gender</label>
                        </div>

                        <div class="col">
                            <div class="form-check mb-3">
                                <label for="radio1" class="form-check-label">Male</label>
                                <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">
                            </div>  
                        </div>

                        <div class="col"> 
                            <div class="form-check mb-3">
                                <label for="radio2" class="form-check-label">Female</label>
                                <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">
                            </div>   
                        </div>
                    </div>  

                    <div class="mb-3 col">
                        <label for="mail" class="form-lable"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" id="mail" placeholder="Enter Your Email">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div> 
                            <div id="email_error">email should be eight or greater than</div>    
                    </div>

                    <div class="mb-3 col">
                        <label for="pho" class="form-lable"><i class="fas fa-phone"></i> Phone No.</label>
                        <input type="phone" class="form-control" name="phone" id="pho" placeholder="Enter Your Phone No.">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div> 
                            <div id="email_error">phone should be 9 or greater than</div>    
                    </div>

                    <div class="mb-3">
                        <label for="pswd" class="form-label"><i class="fas fa-key"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="pswd" placeholder="Enter Old Password">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="pass_error">Password must be six or greater than</div>
                    </div>
<!-- 
                    <div class="mb-3">
                        <label for="pswdn" class="form-label"><i class="fas fa-lock"></i> New Password</label>
                        <input type="password" class="form-control" name="password_new" id="pswdn" placeholder="Enter New Password">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="pass_error">Password must be six or greater than</div>
                    </div> -->

                    <div class="mb-3">
                        <label for="pswdc" class="form-label"><i class="fas fa-lock"></i> Confirm</label>
                        <input type="password" class="form-control" id="pswdc" placeholder="Re-enter Your Password">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="pass_error">Password must be six or greater than</div>
                    </div>

                    <div class="mb-3">
                        <label for="user_photo" class="form-label"><i class="fas fa-user-tie"></i> Upload Photo</label>
                        <input type="file" class="form-control" name="image" id="user_photo">
                    </div>   

                    <button type="submit" name="submit" class="btn-lg btn-secondary mb-3 col-sm-12">Update</button>

                </form>
            </div>
        </div>    
         <hr>
        </div>
    </div>

    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>
    <!-- 
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

    <script src="../js/app/main.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add-Class</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="../images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="../icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!-- 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --><!-- 
		<link rel="stylesheet" href="css/style1.css"> -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

    <!-- === to be modifay === -->
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
                        <li class="dropdown-item"><a href="update_profile.html"><i class="fas fa-user-cog"></i> Update Profiel</a></li>
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
                        <a href="update_profile.html" class="img logo rounded-circle mb-5" style="background-image: url(images/avatar.jpg);"><br><br><br><br><br>   
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
                            <li><a class="dropdown-item text-dark active" href="a_manage_teachers.html"><strong>Teachers</strong></a></li>
                            <li><a class="dropdown-item text-dark" href="a_manage_students.html"><strong>Students</strong></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-dark" href="index.html"><strong>All</strong></a></li>
                          </ul>
                        </li>

                        <li><a href="a_manage_class.html" class="text-warning"><i class="fas fa-chalkboard"></i> Manage Class</a></li>

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
                                            <h4 class="card-title"><i class="fas fa-tachometer-alt"></i> <strong>Add Class</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 

                <!-- === cards === -->
                <section class="mt-5 mb-5">
                    <div class="row g-4">
                      <!--catagory widget-->
                        <div class="col-md-12">
                            <a href="#" class="col-md-3" style="text-decoration: none;">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h4><i class="fas fa-chalkboard"></i> <b>Class</b> <i class="fas fa-plus"></i></h4>
                                        <hr>
                                        <h5>
                                            <i class="fas fa-users"></i> 52
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                </section>


    <center><img src="../images/Logoo.png" class="bg-dark mb-3" width="300px" height="80px" alt=""></center>
    <hr>
   
   <div class="col-sm-12 col-md-8 offset-md-2"> 
   		<center>
            <!------- Class Registration ------>
   			<form class="was-validated bg-light border shadow p-3" method="POST" enctype="multipart/form-data" name="form">

            <!-- Database Insertion PHP Code -->
            <?php
                include '../my_funcs.php';    
                
                if(isset($_POST['Submit'])){
                    
                    $class_title = $_POST['class_title'];
                    $class_desc = $_POST['class_desc'];
                    
                        $query = "INSERT INTO class (class_title, class_desc)
                                            VALUES ('$class_title', '$class_desc')";

                        if(mysqli_query($con, $query)){
                            $msg = "You have Successfully Created a Class!";
                            echo $msg;
                        }
                        
                }
                
                $con->close();
            ?>


   				<div class="row mt-3">
                    <div class="form-group col-md-12">
                        <label for="class_t" class="form-label"><h6><b><i class="fas fa-user"></i> Class Title: </b></h6></label>
                        <input type="text" class="form-control" name="class_title" id="class_t" placeholder="Enter The Class Title" required>

                                <div class="valid-feedback">good</div>
                                <div class="invalid-feedback">fill-out</div>  
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group col-md-12">
                        <label for="sh_descrip"><h6><b><i class="fas fa-book-open"></i> Short Description: </b></h6></label>
                        <textarea type="text" class="form-control" name="class_desc" id="sh_descrip" rows="4" maxlength="400" placeholder="Enter Short Description." required></textarea>
                                <div class="valid-feedback">good</div>
                                <div class="invalid-feedback">fill-out</div>  
                    </div>
   				</div>

            <div class="row">
                <div class="col-md mt-3 mb-3">
                    <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Add Class</button>
                </div> 
            </div>    
			           	            
	    </form>
    </center>
	    
   </div>
   <hr>
                

    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>
    <!-- 
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

    <script src="../js/app/main.js"></script>
  </body>
</html>                
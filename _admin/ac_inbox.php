<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Inbox</title>    
        
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
                        <li class="dropdown-item"><a href="s_signin.html"><i class="fas fa-user-cog"></i> Update Profile</a></li>
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
                            <li><a class="dropdown-item text-dark" href="a_manage_teachers.html"><strong>Teachers</strong></a></li>
                            <li><a class="dropdown-item text-dark" href="a_manage_students.html"><strong>Students</strong></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-dark" href="index.html"><strong>All</strong></a></li>
                          </ul>
                        </li>

                        <li><a href="a_manage_class.html"><i class="fas fa-chalkboard"></i> Manage Class</a></li>

                        <li><a href="a_communication.html" class="text-warning"><i class="fas fa-comments"></i> Communication</a></li>
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
                                            <h4 class="card-title"><i class="fas fa-comments"></i> <strong>Communication</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 

            <section class="p-5">
                <div class="container">
                    <div class="row g-4 mx-0">

                        <a href="a_communication.html" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-secondary text-white shadow border">
                                <div class="card-body">
                                    <h5 class="text-center"><i class="fas fa-angle-double-right "></i> Send Messege</h5>
                                </div>
                            </div>
                        </a>

                        <a href="ac_sent_message.html" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="text-center"><i class="fas fa-inbox"></i> Sent Messege</h5>    
                            </div>
                            </div>
                        </a>

                        <a href="#" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h5 class="text-center"><i class="fas fa-envelope-open"></i> Inbox</h5>   
                                <hr>             
                            </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <hr>   
              <!--   === table === -->
                <section class="mt-2 bg-light">
                    <div class="">
                        <div class="row">
                            <div class="col-md">
                                
                               <table class="table table-bordered table-striped table-hover">
                                  <thead>
                                    <tr class="h5 bg-primary text-white">
                                      <th class="text-center" scope="col">NO</th>
                                      <th class="text-center" scope="col">User</th>
                                      <th class="text-center" scope="col">Sent User</th>
                                      <th class="text-center" scope="col">Subject</th>
                                      <th class="text-center" scope="col">Email</th>
                                      <th class="text-center" scope="col">Date</th>
                                      <th class="text-center bg-dark" scope="col">Action</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Teacher</td>
                                        <td>mr abera</td>
                                      <td>imperuvment</td>
                                        <td>abeta25@gmail.com</td>
                                        <td>05-16-2022</td>
                                        <td class="text-center h4"><a href="a_sm_view.html"><i class="fas fa-address-card text-primary"></i></a> &nbsp; <i class="fas fa-trash-alt text-danger"></i></td>
                                    </tr>

                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Student</td>
                                        <td>helen tadese</td>
                                      <td>payment</td>
                                        <td>helentadese@gmail.com</td>
                                        <td>04-08-2022</td>
                                        <td class="text-center h4"><i class="fas fa-address-card text-primary"></i> &nbsp; <i class="fas fa-trash-alt text-danger"></i></td>
                                    </tr>

                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Admin</td>
                                        <td>mr abera</td>
                                      <td>imperuvment</td>
                                        <td>abeta25@gmail.com</td>
                                        <td>05-16-2022</td>
                                        <td class="text-center h4"><i class="fas fa-address-card text-primary"></i> &nbsp; <i class="fas fa-trash-alt text-danger"></i></td>
                                    </tr>

                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Student</td>
                                        <td>helen tadese</td>
                                      <td>payment</td>
                                        <td>helentadese@gmail.com</td>
                                        <td>04-08-2022</td>
                                        <td class="text-center h4"><i class="fas fa-address-card text-primary"></i> &nbsp; <i class="fas fa-trash-alt text-danger"></i></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>

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
<?php

include "../my_funcs.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: a_signin.php');
}

$q_student = "SELECT * FROM student";
$q_student_result = mysqli_query($con,$q_student);
$student_count = mysqli_num_rows($q_student_result);

?>


<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manage-Students</title>    
        
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
                        <li class="dropdown-item"><a href="update_profile.php"><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="a_signin.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
                <div class="row">
                    <div class="col">
                        <a href="update_profile.php" class="img logo rounded-circle mb-5" style="background-image: url(images/avatar.jpg);"><br><br><br><br><br>   
                            <center><h2>Admin</h2></center>
                        </a>
                    </div>
                </div><br><br>
                
    	           <ul class="list-unstyled components mb-5">

                       <li class="dropdown">
                          <a class="dropdown-toggle text-warning" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i>
                            Manage User Accounts
                          </a>

                          <ul class="dropdown-menu text-center" aria-labelledby="Dropdown">
                            <li><a class="dropdown-item text-dark" href="a_manage_teachers.php"><strong>Teachers</strong></a></li>
                            <li><a class="dropdown-item text-dark active" href="a_manage_students.php"><strong>Students</strong></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-dark" href="index.php"><strong>All</strong></a></li>
                          </ul>
                        </li>

                        <li><a href="a_manage_class.php"><i class="fas fa-chalkboard"></i> Manage Class</a></li>

                        <li><a href="a_communication.php"><i class="fas fa-comments"></i> Communication</a></li>
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
                                            <h4 class="card-title"><i class="fas fa-tachometer-alt"></i> <strong>Manage Students</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 

                <!-- === cards === -->
                <section class="mt-5">
                    <div class="row g-4">
                      <!--catagory widget-->
                        <div class="col-md-12">
                            <a href="a_manage_students.php" class="col-md-3" style="text-decoration: none;">
                                <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h4><i class="fas fa-user-graduate"></i> Students</h4>
                                    <hr>
                                    <h5>
                                        <b><?php echo ($student_count); ?></b>
                                    </h5>
                                </div>  
                                </div>
                            </a>
                        </div>
                </section>

               <!--  === add buttons === -->
                <section class="mt-5 border bg-light">
                    <div class="container">
                        <div class="row g-4">

                            <div class="col-md">
                                <a class="btn btn-outline-success text-dark m-4" href="a_add_students.php" role="button" style="text-decoration: none;"><i class="fas fa-plus"></i> Add Students</a>
                            </div>  

                            <div class="col-md">
                                <form class="d-flex mt-4">
                                    <input class="form-control me-2" type="search" placeholder="Search...  " aria-label="Search">
                                    <button class="btn btn-info" type="submit" style="margin-left: -11px;">Search</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>  

              <!--   === Student table === -->
              <section class="mt-2 bg-light">
                    <div class="">
                        <div class="row">
                            <div class="col-md">
                                
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="h5">
                                            <th colspan="9" class="bg-dark text-white"><center>Students Table</center></th>
                                        </tr>
                                    </thead>
                                  <thead>
                                    <tr class="h5 bg-primary text-white">
                                      <th class="text-center" scope="col">ID</th>
                                      <th class="text-center" scope="col">img</th>
                                      <th class="text-center" scope="col">Name</th>
                                      <th class="text-center" scope="col">Gender</th>
                                      <th class="text-center" scope="col">Phone</th>
                                      <th class="text-center" scope="col">Email</th>
                                      <th class="text-center bg-secondary" scope="col">Action</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr>
                                    <?php 
                                    
                                    // Commented Section
                                        
                                        $q = "SELECT * FROM student";
                                        $q_result = mysqli_query($con,$q);
                                        while($row = mysqli_fetch_assoc($q_result)){
                                            printf("<tr> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>",
                                            $row['student_id'],
                                            htmlspecialchars($row['student_photo']),
                                            htmlspecialchars($row['student_full_name']),
                                            htmlspecialchars($row['student_gender']),
                                            htmlspecialchars($row['student_email']),
                                            htmlspecialchars($row['student_phone_no'])
                                             );
                                    ?>
                                    <td class="text-center h4">
                                        <a href="s_view_api.php?id=<?php echo $row['student_id'] ?>"><i class="fas fa-address-card px-3"></i></a>
                                        <a href="s_edit_api.php?id=<?php echo $row['student_id'] ?>"><i class="fas fa-pencil-alt px-3"></i></a>
                                        <a href="s_delete_api.php?id=<?php echo $row['student_id'] ?>"><i class="fas fa-trash-alt px-3 text-danger"></i></a>
                                    </td>
                                    <!-- <td class="text-center h4"><i class='fas fa-pencil-alt'></i></td>
                                    <td class="bg-danger text-white text-center h4"><i class='fas fa-trash-alt'></i></td> -->
                                    </tr>
                                    <?php
                                    // Commented Section
                                       }
                                    ?>
                                    
                                  </tbody>
                                </table>

                                <div class="mt-5 pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link text-primary" href="index.php">Previous</a></li>
                                            <li class="page-item active"><a class="page-link text-white" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link text-primary" href="">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>

                             </div>   
                        </div>
                    </div>
                </section>
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
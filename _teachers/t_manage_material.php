<?php

include "../my_funcs.php";
SESSION_START();

$temp_teacher_id = "";

if(!isset($_COOKIE['logged'])){
    
    header('location: ../t_signin.php');
}

if(isset($_REQUEST['id'])){
    $temp_teacher_id = intval($_REQUEST['id']);
}


?>






<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View-Result</title>    
        
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
                        <li class="dropdown-item"><a href="t_update_profile.php?id=<?php echo $temp_teacher_id ?>"><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="../t_signin.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
    	        <ul class="list-unstyled components mb-5">
                    <li><a href="t_profile.php" ><i class="fas fa-street-view"></i>Profile</a></li>
                   <li><a href="t_manage_student.php?id=<?php echo $temp_teacher_id ?>" ><i class="fas fa-file-import"></i> Manage Students</a></li>
                   <li><a href="t_manage_material.php?id=<?php echo $temp_teacher_id ?>"  class="text-warning"><i class="fas fa-shopping-basket"></i> Manage Materials</a></li>
                   <li><a href="t_manage_assignment.php?id=<?php echo $temp_teacher_id ?>"><i class="fas fa-book-open"></i> Manage Assignments</a></li>
                   <li><a href="t_manage_exam.php?id=<?php echo $temp_teacher_id ?>"><i class="fas fa-file-signature"></i> Manage Exam</a></li>
                   <li><a href="t_collect_assignment.php?id=<?php echo $temp_teacher_id ?>"><i class="fas fa-file-signature"></i> Correct Assignments</a></li>
                   <li><a href="t_correct_exam.php?id=<?php echo $temp_teacher_id ?>"><i class="fas fa-file-signature"></i> Correct Exam</a></li>
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
                                        <h4 class="card-title"><i class="fas fa-street-view"></i> <strong>Manage Students Materials</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>

            <!--   === table === -->
            <section class="mt-2 bg-light">
                    <div class="">
                        <div class="row">
                            <div class="col-md">
                                
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="h5">
                                            <th colspan="9" class="bg-info"><center>All Courses</center></th>
                                        </tr>
                                    </thead>
                                  <thead>
                                    <tr class="h5 bg-primary text-white">
                                    <th class="text-center" scope="col">No.</th>
                                      <th class="text-center" scope="col">Class ID</th>
                                      <th class="text-center" scope="col">Class Title</th>
                                      <th class="text-center bg-dark" scope="col">Materials</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr>
                                    <?php

                                        if(isset($_REQUEST['id'])){
                                            $teacher_id = intval($_REQUEST['id']);
                                        
                                        
                                
                                        $q = "SELECT * FROM class WHERE teacher_id = '$teacher_id'";
                                        $q_result = mysqli_query($con,$q);
                                        $number = 1;

                                        while($row = mysqli_fetch_assoc($q_result)){

                                            $class_id = $row['class_id'];
                                            $class_title = $row['class_title'];
                                            

                                            printf("<tr> <td>%d</td> <td>%s</td> <td>%s</td>",
                                            $number,
                                            $row['class_id'],
                                            htmlspecialchars($row['class_title']),
                                            );
                                    ?>
                                    <td class="text-center h4">
                                        <a href="t_upload_material.php?id=<?php echo $class_id; ?>" ><i class="fas fa-pencil-alt px-3"></i></a>
                                    </td>
                                    </tr>
                                    <?php
                                        $number++;
                                       }
                                    }
                                    ?>
                                   
                                  </tbody>
                                </table>

                             </div>   
                        </div>
                    </div>
                </section>




        
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

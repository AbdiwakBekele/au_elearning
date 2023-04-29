<?php

include "../my_funcs.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: a_signin.php');
}


   
include "../my_funcs.php"; 
$id = '';

if(isset($_SESSION['email'])) { 
    // $userData = getUsersData(getId($_SESSION['email']));
    $student_email = $_SESSION['email']; 
    
    $array = array();
    $q = "SELECT * FROM student WHERE student_email = '$student_email'";
    $q_result = mysqli_query($con,$q);

    while ($r = mysqli_fetch_assoc($q_result )){
    $array['student_id'] = $r['student_id'];
    $array['student_full_name'] = $r['student_full_name'];
    $array['student_phone_no'] = $r['student_phone_no'];
    $array['student_gender'] = $r['student_gender'];
    $array['student_email'] = $r['student_email'];
    $array['student_photo'] = $r['student_photo'];
    $id = $array['student_id'];
    }
?> 

<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student | Home</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">

		<link rel="shortcut icon" type="image/x-icon" href="../images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="../icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body>
    <!-- === Header === -->
    <header id="top-header" class="bg-success">
        <div class="top-tol">
            <ul>
                <div id="logo">
                    <a><img src="../images/Logoo.png" alt="admas university e-learning managment system logo" title="AU e-learning management"></a>
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;<label>profile</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="s_update_profile.php?id=<?php echo $array['student_id'] ?> "><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="s_signin.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>  

    <!-- === Header Navigation === -->
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
                <div >
                    <?php
                        $prof_image = $array['student_photo'];
                        $prof_image_src = "profile_picture/".$prof_image;
                    ?>
                    <img class="img logo rounded-circle mb-5" src='<?php echo $prof_image_src; ?>'  style='width:150px;height:150px; '  />
                </div>
    	            <ul class="list-unstyled components mb-5">
                        <li><a href="students.php" class="text-warning" ><i class="fas fa-street-view"></i> Profile</a></li>
                       <li><a href="s_view_result.php?id=<?php echo $array['student_id'] ?>"><i class="fas fa-street-view"></i> View Result</a></li>
        	           <li><a href="s_view_courses.php?id=<?php echo $array['student_id'] ?>"><i class="fas fa-eye"></i> View Total Courses</a></li>
                       <li><a href="s_available_materials.php?id=<?php echo $array['student_id'] ?>"><i class="fas fa-shopping-basket"></i> Available Materials</a></li>
                       <li><a href="s_submit_assignment.php?id=<?php echo $array['student_id'] ?>"><i class="fas fa-file-export"></i> Submit Assignment</a></li>
                       <li><a href="s_take_exam.php?id=<?php echo $array['student_id'] ?>"><i class="fas fa-file-import"></i> Take Exam</a></li>
                        <li><a href="s_code_editor.html"><i class="fas fa-code"></i> code editor</a></li>
                       <li><a href="sc_communication.html"><i class="fas fa-comments"></i> Communication</a></li>
    	            </ul>

        	        <div class="footer">
        				Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By Blue Diamond Squad 
        	       </div>

	           </div>
    	   </nav>

            <!-- === Page Content ===  -->
            <div id="content" class="p-4 p-md-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border shadow">
                  <div class="container">

                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                      <i class="fas fa-bars"></i>
                      <span class="sr-only">Toggle Menu</span>
                    </button>

                    <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="card col-md mt-1">
                                        <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-tachometer-alt"></i> <strong>Student</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </nav>
            
                <section class="bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md">


    
    <div id = "profile">
        
        <div id="profile_info">
            <table>
                <tr>
                    <td>Full Name: </td>
                    <td><?php echo $array['student_full_name']; ?></td>
                </tr>
                <tr>
                    <td>Phone No: </td>
                    <td><?php echo $array['student_phone_no']; ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $array['student_email']; ?></td>
                </tr>
                
                <tr>
                    <td>Gender: </td>
                    <td><?php echo $array['student_gender']; ?></td>
                </tr>
                   
            </table>

        
        </div>
        
    </div>
       
<?php
   }
    ?> 





                            </div>
                        </div>
                    </div>
                </section>    

            </div>

	    </div>

    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>
    
    <!-- <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

    <script src="../js/app/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
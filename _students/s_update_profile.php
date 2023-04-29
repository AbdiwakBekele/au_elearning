
<?php

include "../my_funcs.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../s_signin.php');
}

$temp_student_id = "";

if(isset($_REQUEST['id'])){
    $temp_student_id = intval($_REQUEST['id']);
}


?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student | Code-editor</title>    
        
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
                    <!-- <label id="l1">e-learning</label> -->
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;<label>profile</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="update_profile.html"><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
                    <ul class="list-unstyled components mb-5">
                    <li><a href="students.php"   class="text-warning"><i class="fas fa-street-view"></i> Profile</a></li>
                       <li><a href="s_view_result.php?id=<?php echo  $temp_student_id ?>" ><i class="fas fa-street-view"></i> View Result</a></li>
        	           <li><a href="s_view_courses.php?id=<?php echo  $temp_student_id ?>"><i class="fas fa-eye"></i> View Total Courses</a></li>
                       <li><a href="s_available_materials.php?id=<?php echo  $temp_student_id ?>"><i class="fas fa-shopping-basket"></i> Available Materials</a></li>
                       <li><a href="s_submit_assignment.php?id=<?php echo  $temp_student_id ?>"><i class="fas fa-file-export"></i> Submit Assignment</a></li>
                       <li><a href="s_take_exam.php?id=<?php echo  $temp_student_id ?>"><i class="fas fa-file-import"></i> Take Exam</a></li>
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
                                            <h4 class="card-title"><i class="fas fa-street-view"></i> <strong> Update Profile</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 


                <div class="col-sm-12 col-md-8 offset-md-2"> 
        <center>


           <?php

// Database Update PHP Code 

    include '../my_funcs.php';
    
    if(isset($_POST['Submit'])){
        $student_id = $_POST['student_id'];
        $student_fullname = $_POST['student_fullname'];
        $student_gender = $_POST['gender'];
        $student_email = $_POST['student_email'];
        $student_phone_no = $_POST['student_phone_no'];
        $student_password = md5($_POST['student_password']);
        $confirm_student_password =  md5($_POST['confirm_student_password']);

        $profile_pic = $_FILES['student_photo']['name'];
        $target_dir = "profile_picture/";
        $target_file = $target_dir . basename($_FILES["student_photo"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Valid file extensions
        $extensions_arr = array("jpg", "jpeg", "png");
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
        // Insert record
       // $query = "insert into product_items(product_img) values('".$name."')";
        // mysqli_query($con,$query);
        // Upload file
        move_uploaded_file($_FILES['student_photo']['tmp_name'],$target_dir.$profile_pic);
        }
        
        if($student_password == $confirm_student_password){

            $query = "UPDATE student SET student_full_name = '$student_fullname', student_phone_no = '$student_phone_no', student_gender = '$student_gender', student_email = '$student_email', student_password = '$student_password', student_photo = '$profile_pic' WHERE student_id = '$student_id' ";

            if(mysqli_query($con, $query)){
                $msg = "You have Successfully Updated a your information! <br> <br>";
                echo $msg;
                $msg_profile = "<a href='students.php'> Go to Profile </a>";
                echo $msg_profile;
            }
            
        }else{
            $msg = "Password Don't match";
            echo $msg;
        }
    }

  //////// Request from Manage student Page //////

    if(isset($_REQUEST['id'])){
        $student_id = intval($_REQUEST['id']);
        
        $array = array();
                $q = "SELECT * FROM student WHERE student_id = '$student_id'";
                $q_result = mysqli_query($con,$q);
       
              while ($r = mysqli_fetch_assoc($q_result )){
                $array['student_full_name'] = $r['student_full_name'];
                $array['student_phone_no'] = $r['student_phone_no'];
                $array['student_gender'] = $r['student_gender'];
                $array['student_email'] = $r['student_email'];
                $array['student_password'] = $r['student_password'];
               }
?>           

<form class="was-validated bg-light border shadow p-3" action="s_update_profile.php" method="POST" enctype="multipart/form-data" name="form">

        <!-- Full Name Input -->
        <div class="row mt-3">
            <div class="form-group col-md-12">
                <label for="fullname" class="form-label"><h6><b><i class="fas fa-user"></i> Full Name</b></h6></label>
                <input type="text" class="form-control" name="student_fullname" id="fullname" placeholder="Enter Full Name" value=" <?php echo $array['student_full_name']; ?>" required>

                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>
        </div>

        <!-- Upload Profile -->
        <div class="row mt-3">
            <div class="form-group col-md-12">
                <label for="fullname" class="form-label"><h6><b><i class="fas fa-user"></i> Upload Profile Picture</b></h6></label>
                <input type="file" class="form-control" name="student_photo" id="fullname" placeholder="Upload" required>

                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>
        </div>

        <!-- Gender Input -->
        <div class="row mt-3">
                <div class="col">
                    <label for="gender"><h6><b><i class="fas fa-mars-double"></i> Gender</b></h6></label>
                </div>

                <div class="col">
                    <div class="form-check mb-3">
                        <label for="radio1" class="form-check-label">Male</label>
                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" required>
                    </div>  
                </div>

                <div class="col"> 
                    <div class="form-check mb-3">
                        <label for="radio2" class="form-check-label">Female</label>
                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input" required>
                    </div>   
                </div>
        </div> 

        

        <div class="row mt-3">
            <!-- Emain Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Email</b></h6></label>
                <input type="email" class="form-control" name="student_email" id="email" placeholder="Enter Email id" value=" <?php echo $array['student_email']; ?>" required>
                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>

            <!-- Mobile Input -->
            <div class="form-group col-md-6 col-sm-12">
                <label for="mob_no" class="form-label"><h6><b><i class="fas fa-phone"></i> Mobile No.</b></h6></label>
                <input type="phone" class="form-control" name="student_phone_no" for="mob_no" placeholder="Enter 10-digit Mobile no." value=" <?php echo $array['student_phone_no']; ?>" maxlength="10" required>

                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>
        </div>

        <div class="row mt-3">
            <!-- Password Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i class="fas fa-envelope"></i> Password</b></h6></label>
                <input type="password" class="form-control" name="student_password" id="email" placeholder="Enter Password" required>
                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>

            <!-- Confirm Password Input -->
            <div class="form-group col-md-6 col-sm-12">
                <label for="mob_no" class="form-label"><h6><b><i class="fas fa-phone"></i> Confirm Your Password</b></h6></label>
                <input type="password" class="form-control" name="confirm_student_password" for="mob_no" placeholder="Confirm Your Password" maxlength="10" required>

                        <div class="valid-feedback">good</div>
                        <div class="invalid-feedback">fill-out</div>  
            </div>
        </div>

    <div class="row">
        <div class="col-md mt-3 mb-3">
            <Input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Edit Profile</button>
        </div> 
    </div>   
    </form>
<?php
        
    } 
            
?>       

    </center>
	    
   </div>


            
        </div>   
    </div>
    <script type="text/javascript" src="js/app.js"></script>

    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>

    <script src="../js/app/main.js"></script>
  </body>
</html>
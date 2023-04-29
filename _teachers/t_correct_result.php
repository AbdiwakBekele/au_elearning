<?php

include "../my_funcs.php";
SESSION_START();

if(!isset($_COOKIE['logged'])){
    
    header('location: ../t_signin.php');
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
                                        <h4 class="card-title"><i class="fas fa-street-view"></i> <strong>Edit Results</strong></h4>
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
        $assign_id= $_POST['assign_id'];
        $student_quiz = $_POST['student_quiz'];
        $student_assignment = $_POST['student_assignment'];
        $student_exam = $_POST['student_exam'];
        $total = (int)$student_quiz + (int)$student_assignment + (int)$student_exam;

        $query = "UPDATE assign SET quiz = '$student_quiz', assignment = '$student_assignment', exam = '$student_exam', total = '$total' WHERE assign_id = '$assign_id' ";

        if(mysqli_query($con, $query)){
            $msg = "You have Successfully Updated a student information! <br>";
            echo $msg;
            $msg_profile = "<a href='t_profile.php'> Back to Profile </a>";
            echo $msg_profile;
        }
            
    }

  //////// Request from Manage student Page //////

    if(isset($_REQUEST['id'])){
        $assign_id = intval($_REQUEST['id']);
                
        $array = array();
        $q = "SELECT * FROM assign WHERE assign_id = '$assign_id'";
        $q_result = mysqli_query($con,$q);

        while ($r = mysqli_fetch_assoc($q_result )){
        $array['assign_id'] = $r['assign_id'];
        $array['student_id'] = $r['student_id'];
        $array['quiz'] = $r['quiz'];
        $array['assignment'] = $r['assignment'];
        $array['exam'] = $r['exam'];
        $student_id = $array['student_id'];

        $q_student = "SELECT student_full_name FROM student WHERE student_id = '$student_id'";
        $q_student_result = mysqli_query($con,$q_student);

        if (mysqli_num_rows($q_student_result) > 0) {
            // output data of each row
            while($student = mysqli_fetch_assoc($q_student_result)) {
                $array['student_full_name'] = $student['student_full_name'];


        }}}
?>           

<form class="was-validated bg-light border shadow p-3" action="t_correct_result.php" method="POST" enctype="multipart/form-data" name="form">
        <!---- Student Name ---->
        <h6><b><i></i>Student Name: <?php echo  $array['student_full_name'] ?> </b></h6>
        <div class="row mt-3">
            <!-- Quiz Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i></i> Quiz Result</b></h6></label>
                <input type="text" class="form-control" name="student_quiz" id="email" placeholder="Enter Quiz Result" value=" <?php echo $array['quiz']; ?>" >
            </div>

            <!-- Assignment Input -->
            <div class="form-group col-md-6 col-sm-12">
                <label for="mob_no" class="form-label"><h6><b><i ></i> Assignment Result</b></h6></label>
                <input type="text" class="form-control" name="student_assignment" for="mob_no" placeholder="Enter Assignment Result" value=" <?php echo $array['assignment']; ?>">

                        
            </div>
        </div>

        <div class="row mt-3">
            <!-- Exam Input -->
            <div class="form-group mt-2 col-md-6 col-sm-12">
                <label for="email"><h6><b><i ></i> Exam Result</b></h6></label>
                <input type="text" class="form-control" name="student_exam" id="email" placeholder="Enter Exam Result" value=" <?php echo $array['exam']; ?>" >
                        
            </div>
        </div>

    <div class="row">
        <div class="col-md mt-3 mb-3">
            <Input type="hidden" name="assign_id" value="<?php echo $assign_id; ?>">
            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Edit Result</button>
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

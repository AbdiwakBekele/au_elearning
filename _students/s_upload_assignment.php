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
                                            <h4 class="card-title"><i class="fas fa-street-view"></i> <strong> Upload Assignment </strong></h4>
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
                    $assign_id = $_POST['assign_id'];

                    $assignment_name = $_FILES['class_assignment']['name'];
                    $target_dir = "submitted_assignment/";
                    $target_file = $target_dir . basename($_FILES["class_assignment"]["name"]);

                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Valid file extensions
                    $extensions_arr = array("pdf","docx","zip","rar", "pptx");
                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){
                    // Insert record
                    // $query = "insert into product_items(product_img) values('".$name."')";
                    // mysqli_query($con,$query);
                    // Upload file
                    move_uploaded_file($_FILES['class_assignment']['tmp_name'],$target_dir.$assignment_name);
                    }
                    
                    $query = "UPDATE assign SET submitted_assignment = '$assignment_name' WHERE assign_id = '$assign_id' ";

                    if(mysqli_query($con, $query)){
                        $msg = "You have Successfully Uploaded a Your Assignment! <br>";
                        echo $msg;
                        $msg_profile = "<a href='students.php'> Go to Profile </a>";
                        echo $msg_profile;
                    }
                        
                    
                }

                    //////// Request from student Page //////

                if(isset($_REQUEST['id'])){
                    $assign_id = intval($_REQUEST['id']);
                        ?>           

                        <form class="was-validated bg-light border shadow p-3" action="s_upload_assignment.php" method="POST" enctype="multipart/form-data" name="form">

                                <!-- Upload Assignment  -->
                                <div class="row mt-3">
                                    <div class="form-group col-md-12">
                                        <label for="fullname" class="form-label"><h6><b><i class="fas fa-user"></i> Upload Assignment</b></h6></label>
                                        <input type="file" class="form-control" name="class_assignment" id="fullname" placeholder="Upload Material" required>

                                                <div class="valid-feedback">good</div>
                                                <div class="invalid-feedback">fill-out</div>  
                                    </div>
                                </div>
                                

                                    <div class="row">
                                        <div class="col-md mt-3 mb-3">
                                            <Input type="hidden" name="assign_id" value="<?php echo $assign_id; ?>">
                                            <button type="submit" name="Submit" class="btn btn-primary btn-large col-md-12" value="Submit">Upload File</button>
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